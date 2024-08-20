<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Quote;

use JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders\Language;

class DictaIgnacyLoyola extends Install
{
    /**
     * @see https://www.ultramontes.pl/hevenesi_maksymy_sw_ignacego.htm
     * @see https://www.ultramontes.pl/Maksymy_swietego_Ignacego_Warszawa_1886.djvu
     * @see https://elementalcolour.com.au/blog/charting-the-12-tones
     */
    private const CUSTOM_QUOTES_MAXIMES_OF_IGNACY_LOYOLA = [
        [
            'data' => [
                'code' => 'ANN_MONTH_01',
                'name' => 'January',
                'colour_value' => '#ef3e54',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_0101',
                        'name' => 'I Stycznia',
                        'content' => 'O szukaniu chwa&#322;y.',
                        'author' => 'WSZYSTKO NA WI&#280;KSZ&#260; CHWA&#321;&#280; BOGA! Te i tym podobne s&#322;owa powtarza &#347;wi&#281;ty Ignacy w swych konstytucyach trzysta siedmdziesi&#261;t sze&#347;&#263; razy.',
                        'description' => '(Suar. tom. 4 de relig. l. 8 cap. 6).',
                        'description2' => 'Nowego roku i ca&#322;ego &#380;ycia szcz&#281;&#347;cie na tem polega, aby&#347;my ku chwale Boga kierowali ka&#380;d&#261; chwil&#281; i ka&#380;d&#261; czynno&#347;&#263; nasz&#261;. Tego si&#281; B&#243;g po nas domaga jako Najwy&#380;szy Pan, do tego my si&#281; poczuwa&#263; winni&#347;my jako jego s&#322;udzy. Kto swojej, nie Boga chwa&#322;y szuka, ten po z&#322;odziejsku post&#281;puje; Bogu bowiem samemu nale&#380;y si&#281; chwa&#322;a, nam przygana i zawstydzenie <sup>1</sup>. Chwa&#322;a Boga winna by&#263; bod&#378;cem i has&#322;em ca&#322;ego post&#281;powania naszego. Najgorzej sobie radzi, kto chwa&#322;&#281; swoj&#261; nad Bosk&#261; przek&#322;ada. Czyni&#261;c tak, i doczesn&#261; i wieczn&#261; traci, i w tem i w przysz&#322;em &#380;yciu do nieszcz&#281;&#347;liwych nale&#380;y: w tem, poniewa&#380; si&#281; pozbawia chwa&#322;y prawdziwej; w przysz&#322;em, poniewa&#380; nie otrzyma &#380;adnej. Lubo p&#243;&#378;no, sam to wyzna; ze &#347;wi&#281;tym Piotrem zawo&#322;a: c a &#322; &#261;&nbsp;&nbsp;n o c&nbsp;&nbsp;p r a c u j &#261; c,&nbsp;&nbsp;n i c e &#347; m y&nbsp;&nbsp;n i e&nbsp;&nbsp;u &#322; o w i l i <sup>2</sup>. Tem &#8222;nic&#8221; jest chwa&#322;a ludzka, kt&#243;ra wi&#281;dnieje jak trawa polna, niknie jak dym. Je&#347;li szukasz chwa&#322;y, szukaj prawdziwej.',
                        'description3' => '1) Daniel 9, 7.<br/>
    2) &#346;. &#321;uk. 5, 5.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0102',
                        'name' => 'II Stycznia',
                        'content' => 'O ufno&#347;ci.',
                        'author' => '&#8222;W przedsi&#281;wzi&#281;ciach swoich, tak Bogu ufaj, jak gdyby pomy&#347;lny skutek ca&#322;kiem od ciebie, nie za&#347; od Boga zale&#380;a&#322;: tak si&#281; jednak do ka&#380;dej rzeczy zabieraj, jak gdyby&#347; ty nic, ale B&#243;g wszystko mia&#322; czyni&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Nolarci).',
                        'description2' => 'Nadzieja s&#322;aba, to jak cz&#322;owiek na nog&#281; chromy, kt&#243;remu nadto r&#261;k nie dostawa. Gdy ci&#281; jeszcze nie by&#322;o, B&#243;g ci&#281; stworzy&#322; bez ciebie: ale teraz gdy jeste&#347;, B&#243;g ci&#281; nie zbawi, ani wesprze bez ciebie. Postaraj si&#281; o iskierk&#281;, a B&#243;g wznieci p&#322;omie&#324;. Rzu&#263; nasionko, a B&#243;g pomy&#347;li o wzro&#347;cie. Tak wszystko p&#243;jdzie wedle woli, inaczej wszystko zmarnieje. Ty nic nie mo&#380;esz, chocia&#380;by&#347; chcia&#322; &#8212; bez Boga. On nic nie chce, chocia&#380; mo&#380;e &#8212; bez ciebie. W jedno&#347;ci z Bogiem, mo&#380;esz wszystko. &#321;aska Bo&#380;a, kt&#243;ra w innych tyle mog&#322;a, w tobie jednym si&#322; nie utraci, byleby&#347; ty swojej ku niej ufno&#347;ci nie utraci&#322;. G d z i e&nbsp;&nbsp;s &#261;&nbsp;&nbsp;n a d z i e j e&nbsp;&nbsp;t w o j e?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0103',
                        'name' => 'III Stycznia',
                        'content' => 'O poprawie.',
                        'author' => '&#8222;Czas i trudy marnuje, kto si&#281; do poprawy innych zabiera, nie poprawiwszy wprz&#243;d siebie.&#8221;',
                        'description' => '(S. Ignat. apud Barto. l. 4).',
                        'description2' => 'Dziwna rzecz zaprawd&#281;! chcemy, &#380;eby inni byli dobrymi, gdy sami nimi nie jeste&#347;my; wyrok pot&#281;pienia na siebie wydajemy, gdy dobre zalecamy, a z&#322;e broimy. Najskuteczniejszem prawem jest prawo &#380;ywe, kt&#243;re prawodawca rozpowszechnia w&#322;asnem &#380;yciem. G&#322;os czynu nad g&#322;os s&#322;owa jest o wiele silniejszy. Pierwszy tylu ma sprzymierze&#324;c&#243;w, ile czyn&#243;w; drugi &#8212; poniewa&#380; sam jest &#8212; ani w po&#322;owie tego wp&#322;ywu nie wywiera. C&#243;&#380; za po&#380;ytek, gdy jednocze&#347;nie budujemy i walimy? Jedno s&#322;owem, drugie czynem. Choroby chorob&#261; nie uleczysz. Pomy&#347;l pierwej o wyleczeniu siebie, potem zabierz si&#281; do leczenia innych. Los nasz wielkiego politowania godzien! Gdy idzie o nas samych, jeste&#347;my kretami; gdy o drugich, ostrowidzami. Sakwy, kt&#243;r&#261; mamy z ty&#322;u, nie widzimy. Mo&#380;naby &#347;mia&#322;o powiedzie&#263;, &#380;e&#347;my potracili zmys&#322;y: belki we w&#322;asnem oku nie czujemy, podczas gdy &#378;d&#378;b&#322;a w obcem z nat&#281;&#380;eniem szukamy. L e k a r z u,&nbsp;&nbsp;l e c z&nbsp;&nbsp;s a m e g o&nbsp;&nbsp;s i e b i e <sup>1</sup>.',
                        'description3' => '1) &#346;. &#321;uk. 4, 22.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0104',
                        'name' => 'IV Stycznia',
                        'content' => 'O zmianie swych nawyknie&#324;.',
                        'author' => '&#8222;Zmiana miejsca nie zmienia nawyknienia: kto si&#281; z wadami nie rozsta&#322;, kto ich z siebie nie wykorzeni&#322;, za tym one wsz&#281;dzie p&#243;jd&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Pielgrzymka ma&#322;o kogo poprawia; ciekawo&#347;&#263; zaspakaja, ale korzy&#347;ci nie wiele przynosi. Kto do z&#322;ego nawyk&#322;, dla tego schronienia nie ma; gdziekolwiek si&#281; uda, wsz&#281;dzie siebie we&#378;mie &#8212; co w&#322;a&#347;nie jest najniebezpieczniejszem. Choroby cia&#322;a nader rzadko, duszy nigdy nie leczy sama miejsca zmiana. Co masz w sobie z&#322;ego, to ze siebie precz wyrzu&#263;. &#379;e upadasz, to nie miejsca, ale twoja wina; uleczysz si&#281;, nie uciekaj&#261;c gdzieindziej, ale zmieniaj&#261;c siebie. Gdyby&#347; ucieczk&#261; chcia&#322; sobie poradzi&#263;; musia&#322;by&#347; chyba tam uciec, gdzieby ani z&#322;y duch, ani twoja nami&#281;tno&#347;&#263; dosta&#263; si&#281; nie mog&#322;a; ale takiego miejsca nie znajdziesz: chyba, &#380;e od wyst&#281;pku do cnoty uciekniesz. Jedyne-to na twoj&#261; chorob&#281;, lekarstwo! Miejsce cz&#322;owieka &#347;wi&#281;tym nie czyni. Nie &#380;e&#347; w Jerozolimie by&#322;, ale &#380;e&#347; w Jerozolimie dobrze &#380;y&#322;, chwalebn&#261; jest rzecz&#261;. Gdy si&#281; z miejsca na miejsce przenosisz, niesta&#322;o&#347;ci swojej dowodzisz. Zmie&#324; siebie &#8212; nie miejsce &#8212; a najlepiej zrobisz!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0105',
                        'name' => 'V Stycznia',
                        'content' => 'O powierzaniu spraw trudnych.',
                        'author' => '&#8222;Spraw trudnych m&#322;odym powierza&#263; nie nale&#380;y.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Cnota ludzi m&#322;odych, jako cnota bez hartu, bez pr&#243;b przebytych, jest na kszta&#322;t owych kwiat&#243;w, kt&#243;re si&#281; z wiosn&#261; na drzewach ukazuj&#261;, za pierwszem lepszem s&#322;o&#324;ca przygrzaniem; ale kt&#243;re tak s&#261; w&#261;t&#322;e, tak niewytrzyma&#322;e, &#380;e za lada dotkni&#281;ciem, albo za lada powiewem nieco ch&#322;odniejszego wiatru, usychaj&#261;. Niesilne barki gn&#261; si&#281; pod wielkim ci&#281;&#380;arem, a nierozwa&#380;ne zamiary nie przychodz&#261; do skutku. &#379;ywo&#347;&#263; krwi dodaje odwagi, ale je&#347;li odwaga nie kieruje si&#281; rozs&#261;dkiem, przechodzi w nierozwag&#281;, &#8212; w p&#322;ocho&#347;&#263;. Zapa&#322; nie w por&#281; wycie&#324;cza si&#322;y i sprawia, &#380;e cz&#322;owiek pr&#281;dko ustaje; podczas gdy przy umiarkowaniu d&#322;ugoby by&#322; po&#380;yteczny. Niesta&#322;o&#347;&#263; i zmienno&#347;&#263; przydarzaj&#261; si&#281; wszystkim, ale szczeg&#243;lniej m&#322;odym. Ci ostatni, o ile z jednej strony pochopni s&#261; do wszystkiego, o tyle z drugiej niestali. Gdy co polubi&#261;, gwa&#322;townie tego po&#380;&#261;daj&#261;, ale nie d&#322;ugo. &#346;piesz si&#281; powoli: rzadkim bardzo bywa przywilej po&#347;piechu i sta&#322;o&#347;ci zarazem. &#321;atwo b&#322;&#261;dzi, kto zbyt &#347;pieszy. Ten co ma przed sob&#261; dalek&#261; drog&#281;, niech tak si&#281; z samego pocz&#261;tku urz&#261;dzi, tak swoje kroki wymiarkuje, si&#322;y obliczy; aby nie usta&#322; w po&#322;owie, ale dotar&#322; do ko&#324;ca.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0106',
                        'name' => 'VI Stycznia',
                        'content' => 'O warto&#347;ci czyn&#243;w.',
                        'author' => '&#8222;Czyn rzadki a znakomity zwyczajnych sze&#347;&#263; set o wiele przewy&#380;sza.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Jak rzeczy, kt&#243;re s&#261; pod r&#281;k&#261; i &#322;atwo si&#281; wsz&#281;dzie spotykaj&#261;, ani przed ich otrzymaniem wielkiej ku sobie &#380;&#261;dzy nie budz&#261;, ani po otrzymaniu pociechy nie sprawiaj&#261;: tak i czyny zwyczajne nie cen&#281;, ale tylko liczb&#281; podnosz&#261;. Koron&#281; cnota umie&#347;ci&#322;a wysoko: napr&#243;&#380;no leniwiec do niej wzdycha; ten tylko j&#261; posi&#261;dzie, kto si&#281; trudem nie zrazi, kogo moz&#243;&#322; nie odstraszy, przykro&#347;&#263; nie zniech&#281;ci. Probuj. Dla chc&#261;cego nie ma nic trudnego. B&#243;g nie liczy, ale wa&#380;y czyny; na istot&#281;, nie na poz&#243;r patrzy. Je&#347;li chcesz mu ofiarowa&#263;, nie ofiaruj lada czego. On jest Najwy&#380;szym Panem wszystkich rzeczy, wybierz, co uwa&#380;asz za najlepsze, i to mu ofiaruj. Ani maluczko&#347;ci&#261;, ani ub&#243;stwem si&#281; twojem nie wymawiaj. Ty&#347; ubogi, ale &#322;aska Bo&#380;a nadzwyczaj bogata; byleby&#347; chcia&#322;, przy tej &#322;asce, rzeczy zadziwiaj&#261;cych dokonasz. C h c i e j!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0107',
                        'name' => 'VII Stycznia',
                        'content' => 'O wyzuciu si&#281; z mi&#322;o&#347;ci w&#322;asnej.',
                        'author' => '&#8222;Miej to za pewne, &#380;e o tyle w doskona&#322;o&#347;ci post&#261;pisz, o ile si&#281; z mi&#322;o&#347;ci i korzy&#347;ci w&#322;asnej wyzujesz.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'S&#322;u&#380;y&#263; dw&#243;m panom nie mo&#380;na; jednego si&#281; zwykle nienawidzi, gdy drugiego mi&#322;uje <sup>1</sup>. Serca rozdzieli&#263; trudno. B&#243;g cz&#261;stki, kt&#243;ra do ziemi przylgn&#281;&#322;a, nie przyjmie. G&#322;&#243;wn&#261; przyczyn&#261; naszego niepost&#281;pu na drodze cnoty, jest takie mi&#322;owanie Boga, kt&#243;re niewy&#322;&#261;cza mi&#322;owania samego siebie. Chwiejemy si&#281;, kulejemy, to na jedn&#261;, to na drug&#261; stron&#281; przechylamy; i dlatego tak wolnym, tak niepewnym krokiem ku wiecznej nagrodzie zmierzamy. Drzewo, dop&#243;ki jest mokre, p&#322;omienia nie wydaje: podobnie i dusza, dop&#243;ki rzeczami ziemskiemi jest zaj&#281;ta, w g&#243;r&#281; si&#281; nie wzniesie. I przeciwnie, im mniej z ziemi&#261; trzyma, tem bardziej sob&#261; jest i &#322;atwiej rzeczy Boskie pojmuje, ch&#281;tniej ku nim lgnie. Dop&#243;ki strony zwierz&#281;cej, bezrozumnej, w sobie nie ujarzmiemy; dop&#243;ty w zd&#261;&#380;aniu do doskona&#322;o&#347;ci, post&#281;pu nie ujrzymy. Ch&#281;&#263; zaledwie si&#281; zrodzi, zaledwie nam przedstawi, nie zdo&#322;amy jej jeszcze jak nale&#380;y obejrze&#263;; gdy natychmiast poch&#322;oni&#281;t&#261; zostaje i przyduszon&#261; przez ow&#261; sk&#322;onno&#347;&#263; do ziemsko&#347;ci. Jedynym skutecznym tu &#347;rodkiem jest nie wchodzenie w umow&#281; ze stron&#261; bezrozumn&#261;, nie pob&#322;a&#380;anie jej; ale zwr&#243;cenie si&#281; stanowcze do strony duchowej, trwanie przy niej energiczne, cokolwiekby to kosztowa&#263; mia&#322;o.',
                        'description3' => '1) &#346;. Mat. 6, 24.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0108',
                        'name' => 'VIII Stycznia',
                        'content' => 'O przykrem po&#322;o&#380;eniu dobrych.',
                        'author' => '&#8222;Nic dokona&#263; nie mo&#380;na, coby by&#322;o godnem Boga, bez sro&#380;enia si&#281; &#347;wiata, lub z&#380;ymania piek&#322;a.&#8221;',
                        'description' => '(S. Ignat. apud Nolar.)',
                        'description2' => '&#346;wiat&#322;o&#347;&#263; z ciemno&#347;ci&#261; nie znosz&#261; si&#281;; podobnie, dobrzy ze z&#322;ymi w przyja&#378;&#324; &#347;cis&#322;&#261; nie wchodz&#261;. Jak robak owoce dojrza&#322;e ch&#281;tniej gryzie, tak z&#322;o&#347;&#263; ludzka po najwi&#281;kszej cz&#281;&#347;ci gryzie tych bardziej, kt&#243;rzy s&#261; lepszymi. Niezawodnym znakiem dobroci jest, gdy si&#281; z&#322;ym nie podobamy; by&#322;oby to dla nas z przygan&#261;, gdyby&#347;my si&#281; im podobali. Za nic sobie miej, je&#347;li o tobie &#378;le m&#243;wi&#261; ci, kt&#243;rzy nic nie czyni&#261; dobrego. Z&#322;em tego nazywa&#263; nie powinni&#347;my, co nas czyni lepszymi. Jest- -to probierz naszej cnoty. Niema&#322;&#261; przys&#322;ug&#281; &#378;li wyrz&#261;dzaj&#261; dobrym, gdy ich prze&#347;laduj&#261;; tym bowiem sposobem wyrabiaj&#261; w nich cierpliwo&#347;&#263;, pomna&#380;aj&#261; zas&#322;ugi. Czego dr&#380;ysz? &#8212; Ani &#347;wiat, ani piek&#322;o nic ci nie zrobi&#261;. Gdzie wi&#281;ksze niebezpiecze&#324;stwo, tam obfitsza Bo&#380;a &#322;aska. Odwa&#380;nie wi&#281;c sobie poczynaj. Za sposobno&#347;&#263;, jaka ci si&#281; do zwyci&#281;ztwa nadarza, chwytaj; o tryumfie my&#347;l. W m&#281;ztwo si&#281; uzbr&#243;j, do walki z nieprzyjacielem wyst&#261;p; inaczej w bezczynno&#347;ci zgnu&#347;niejesz.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0109',
                        'name' => 'IX Stycznia',
                        'content' => 'O czuwaniu bardziej nad duchem ni&#380; nad cia&#322;em.',
                        'author' => '&#8222;W d&#261;&#380;eniu do doskona&#322;o&#347;ci, bardziej nad duchem, ni&#380; nad cia&#322;em czuwa&#263; nale&#380;y; bardziej nad &#322;amaniem woli, ni&#380; nad &#322;amaniem ko&#347;ci.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Wielu, co na pozory, nie na istot&#281; rzeczy zwraca uwag&#281;, o &#347;wi&#281;to&#347;ci po zewn&#281;trznym rygorze s&#261;dzi: jakby pod powrozem i w&#322;osiennic&#261; kry&#263; si&#281; nie mog&#322;a my&#347;l zuchwa&#322;a. Na co si&#281; przyda nie je&#347;&#263; mi&#281;sa, je&#347;li si&#281; cudz&#261; szarpie s&#322;aw&#281;? Co si&#281; Bogu podoba, to wewn&#261;trz jest <sup>1</sup>; wszelkie objawy zewn&#281;trzne tyle maj&#261; warto&#347;ci i o tyle s&#261; mi&#322;e Bogu, o ile z wn&#281;trza pochodz&#261;, z g&#322;&#281;bin naszej duszy, o ile s&#261; uczu&#263; i my&#347;li naszych odbiciem. Rze&#378; wo&#322;&#243;w albo karcenie cia&#322;a, na jak&#261; mog&#261; zas&#322;u&#380;y&#263; nagrod&#281;, je&#347;li wewn&#261;trz wre nami&#281;tno&#347;&#263;, je&#347;li si&#281; jej daje folg&#281;? Cia&#322;em do&#347;&#263; si&#281; zajmujesz, je&#347;li na ducha ci&#261;g&#322;&#261; zwracasz uwag&#281;. Nie z dobrego cia&#322;a dobry duch powstaje; ale z dobrego ducha dobrze si&#281; cia&#322;o uk&#322;ada. Oddzia&#322;ywanie ducha na cia&#322;o jest wielkie. Takiego ci szcz&#281;&#347;cia &#380;ycz&#281;, jakiego sobie, to jest, w e w n &#281; t r z n e g o. B&#261;d&#378; pewien, &#380;e ono nie zawis&#322;o, ani od zdania drugich, ani od rygoru pozornego; ale od pokoju duszy, kt&#243;ry si&#281; w nas tworzy, je&#347;li wed&#322;ug wiary i rozs&#261;dku post&#281;pujemy. Szcz&#281;&#347;cie w nas si&#281; kryje, po za nami napr&#243;&#380;no go szukamy. Ludzie rzetelnej cnoty, podobnie jak okr&#281;ty, wi&#281;cej maj&#261; &#322;adunk&#243;w, ni&#380; &#380;agli.',
                        'description3' => '1) I. Kr&#243;l. 16, 7.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0110',
                        'name' => 'X Stycznia',
                        'content' => 'O hojno&#347;ci Boga.',
                        'author' => '&#8222;Hojnym jest B&#243;g: z r&#261;k jego odbieram, czego nie mam z r&#261;k ludzi; gdyby mi ludzie nic nie dali, mia&#322;bym od Boga wszystko.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Lich&#261; jest hojno&#347;&#263; ludzka; co maj&#261;, to nader ma&#322;em jest; gdy si&#281; z drugimi dziel&#261;, mniej im jeszcze zostaje. Skarb Boga przeciwnie, do niewyczerpanych nale&#380;y; nie zmniejsza si&#281;, chocia&#380;by B&#243;g najwi&#281;cej rozdawa&#322;. Tu wi&#281;c zwr&#243;&#263; swoje nadzieje. B&#243;g je zaspokoi dobrodziejstwami. Nie na&#347;laduj tylko tych, kt&#243;rzy wiele maj&#261; pragnie&#324;, a nie wiele okazuj&#261; nadziei. B&#243;g dobrodziejstw nie posk&#261;pi; stosownie do ufno&#347;ci, jak&#261; w nim po&#322;o&#380;ysz, do nadziei, jak&#261; oka&#380;esz, obdarzy ci&#281; niemi <sup>1</sup>. Spodziewaj si&#281;, a otrzymasz. Sam si&#281; do tej hojno&#347;ci zobowi&#261;za&#322;: o&nbsp;&nbsp;c o k o l w i e k&nbsp;&nbsp;p r o s i &#263;&nbsp;&nbsp;b &#281; d z i e c i e,&nbsp;&nbsp;p o w i e d z i a &#322;,&nbsp;&nbsp;w i e r z c i e,&nbsp;&nbsp;&#380; e&nbsp;&nbsp;o t r z y m a c i e <sup>2</sup>. Patrz, jak &#322;atwo mo&#380;esz si&#281; zbogaci&#263;. Nie mniej daje, ni&#380; przyrzek&#322;. S&#322;owa bowiem mi&#322;uj&#261;cego, to czyny; j&#281;zyk szczodrobliwego, to r&#281;ce. &#321;atwiej hojnemu da&#263;, ni&#380; odm&#243;wi&#263;. D l a c z e g o&nbsp;&nbsp;o&nbsp;&nbsp;t a k&nbsp;&nbsp;m a &#322; o&nbsp;&nbsp;p r o s i m y?',
                        'description3' => '1) &#346;. Ambro&#380;y.<br/>
    2) &#346;. Mar. 11, 24.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0111',
                        'name' => 'XI Stycznia',
                        'content' => 'O pomocy Boga.',
                        'author' => '&#8222;Dobro&#263; Boska zwyk&#322;a tego silniej broni&#263;, kogo bardziej z&#322;y duch napastuje.&#8221;',
                        'description' => '(S. Ignat. in hist. soc. P. I. l. 9).',
                        'description2' => 'B&#243;g ca&#322;y jest okiem, bezustanku nad dobrem naszem czuwa: i jak w&#243;dz wielkiego wojska, tam wi&#281;ksze posi&#322;ki daje, gdzie nieprzyjaciel jest gro&#378;niejszy. Szcz&#281;&#347;liwa walka, kt&#243;ra ma pomoc zapewnion&#261;; podczas kt&#243;rej ani na strza&#322;ach, ani na &#380;ywno&#347;ci, ani na innych potrzebach nie zbywa. Czego&#380;by si&#281; mia&#322; obawia&#263;, kto z Wszechmocnym jest sprzymierzony? B&#243;g swej sprawy nie opu&#347;ci. Gdy piek&#322;o na nas naciera, my j&#261; zwykle opuszczamy; dla tego B&#243;g ku obronie naszej tak rych&#322;e zsy&#322;a posi&#322;ki &#8212; byleby&#347;my tylko z nich korzysta&#263; nie omieszkali. Pot&#281;&#380;nym i w r&#243;&#380;ne zasadzki pomys&#322;owym jest nieprzyjaciel, kt&#243;ry naciera na ciebie; miej si&#281; przeto na baczno&#347;ci i potyczki z nim nie rozpoczynaj sam. Je&#347;li na sobie poprzestaniesz, to ju&#380; jeste&#347; zwyci&#281;&#380;ony. Je&#347;li Boga na pomoc wezwiesz, to ze wszystkich zasadzek bez szwanku wyjdziesz.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0111',
                        'name' => 'XII Stycznia',
                        'content' => 'O baczno&#347;ci przed fa&#322;szyw&#261; przyja&#378;ni&#261;.',
                        'author' => '&#8222;Je&#347;li mi&#322;o&#347;&#263; i uprzejmo&#347;&#263; nie maj&#261; za towarzyszk&#281; prawdy, to ju&#380; nie s&#261; mi&#322;o&#347;ci&#261; i uprzejmo&#347;ci&#261;, ale podst&#281;pem i pr&#243;&#380;no&#347;ci&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. lib. 4. fol. 381).',
                        'description2' => 'Mniej szkodzi jawny nieprzyjaciel, ni&#380; fa&#322;szywy przyjaciel; tamtego przy jakiej takiej baczno&#347;ci mo&#380;na si&#281; ustrzedz, tego i przy najwi&#281;kszej nie zawsze. Kto si&#281; do kryj&#243;wek twego serca udan&#261; &#380;yczliwo&#347;ci&#261; dosta&#322;, ten zar&#243;wno pewne jak wielkie mo&#380;e ci rany zada&#263;. Ostro&#380;n&#261; winna by&#263; rozmowa, ale ostro&#380;niejsz&#261; przyja&#378;&#324;. D&#322;ugo wybieraj, zanim pokochasz. Cz&#281;sto pod rozkoszn&#261; traw&#261; kryje si&#281; zjadliwy w&#261;&#380;. Ufaj &#8212; ale komu &#8212; patrz. Nikt si&#281; cz&#281;&#347;cej nie zawodzi nad tego, kt&#243;ry s&#322;owom wierzy. Nieraz serce pe&#322;ne &#380;&#243;&#322;ci, miodowe wypowiada s&#322;owa. W z&#322;otym kubku podaje si&#281; do wypicia trucizna, aby tem ch&#281;tniej zosta&#322;a po&#322;kni&#281;t&#261;. Wdzi&#281;cznem przygrywaniem na piszcza&#322;ce ptasznik zwabia do sid&#322;a ptastwo i &#322;apie niebaczne. Szczerszego przyjaciela nad Boga nie ma: s &#322; o w a&nbsp;&nbsp;j e g o,&nbsp;&nbsp;s &#261;&nbsp;&nbsp;s &#322; o w a m i&nbsp;&nbsp;&#380; y w o t a&nbsp;&nbsp;i&nbsp;&nbsp;p r a w d y&nbsp;&nbsp;w i e c z n e j <sup>1</sup>; jemu jednemu siebie i wszystko co masz, powierzy&#263; mo&#380;esz bez zastrze&#380;enia.',
                        'description3' => '1) &#346;. Jan 6, 68.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0113',
                        'name' => 'XIII Stycznia',
                        'content' => 'O ch&#281;tno&#347;ci w dawaniu.',
                        'author' => '&#8222;Im si&#281; kto &#347;ci&#347;lej z Bogiem po&#322;&#261;czy&#322; i hojniejszym wzgl&#281;dem jego Majestatu okaza&#322;; ten tem wi&#281;kszych od Niego &#322;ask dozna.&#8221;',
                        'description' => '(S. Ignat. Con. p. 3. n. 1).',
                        'description2' => 'Nie ginie, co si&#281; Bogu daje: za mg&#322;&#281;, kt&#243;ra si&#281; z ziemi ku niebu wznosi, otrzymujemy deszcz, kt&#243;ry ziemi&#281; u&#380;y&#378;nia; za nasienie, kt&#243;re do ziemi rzucamy, dostaje si&#281; nam owoc setny, je&#347;li ziemia jest dobra. B&#243;g z pewno&#347;ci&#261; za to, co mu ofiarujemy, nie oka&#380;e si&#281; mniej szczodrym. Wydatek, jaki si&#281; w tej mierze ponosi, jest najkorzystniejszy: im wi&#281;cej dasz, tem wi&#281;cej b&#281;dziesz mia&#322;. Dla Boga co&#347; straci&#263;, za zysk si&#281; uwa&#380;a; czego&#347; odm&#243;wi&#263;, za sk&#261;pstwo najbrudniejsze. Otrzymuje B&#243;g ma&#322;o, oddaje wiele: za doczesne p&#322;aci wiecznem, za znikome trwa&#322;em, za ziemskie niebieskiem. Czemu&#380; si&#281; jeszcze oci&#261;gamy z oddaniem siebie i tego co mamy Bogu? Pami&#281;taj, &#380;e On cz&#261;stk&#261; si&#281; nie zadawalnia; ale wszystkiego co masz, owszem czem jeste&#347;, od ciebie si&#281; domaga. Daj, wszak to nie twoje; On ci da&#322; wszystko i &#380;&#261;da wszystkiego. Czemu tak sk&#261;pym jeste&#347;, tak nieskorym do dania, z cudzej w&#322;asno&#347;ci?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0114',
                        'name' => 'XIV Stycznia',
                        'content' => 'O cechach prawdziwego zakonnika.',
                        'author' => '&#8222;Ten na nazw&#281; prawdziweqo zakonnika zas&#322;uguje, kto si&#281; ca&#322;kiem nietylko od &#347;wiata, ale i od siebie oderwa&#322;.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => 'Szczytn&#261; jest nazwa zakonnika, szczytnym stan zakonny; tyle mu przywilej&#243;w kr&#243;lowie, tyle nagr&#243;d B&#243;g przygotowa&#322;: ale &#380;eby na t&#281; nazw&#281; prawdziwie kto&#347; zas&#322;u&#380;y&#322;, &#380;eby do tego stanu s&#322;usznie nale&#380;a&#322;, wiele si&#281; rzeczy i to niezwyk&#322;ych wymaga. Wielk&#261; jest liczba zakonnik&#243;w, je&#347;li si&#281; na osoby zwa&#380;a; ale nie tak wielk&#261;, je&#347;li na cnoty. Gdyby suknia o rzeczy stanowi&#322;a, byliby liczni; ale gdy czyny stanowi&#261;, bodajby byli liczniejsi! Kto z mi&#322;o&#347;ci dla Chrystusa wyrzek&#322; si&#281; dostatk&#243;w i nadziei ziemskich, ten wznio&#347;le sobie post&#261;pi&#322;; ale kto jednocze&#347;nie nie wyrzek&#322; si&#281; siebie i nami&#281;tno&#347;ci swoich, ten &#347;wiata w zakonie szuka. Na co si&#281; przyda i&#347;&#263; za Chrystusem, je&#347;li si&#281; nie na&#347;laduje Chrystusa; k t o&nbsp;&nbsp;c h c e&nbsp;&nbsp;i &#347; &#263;&nbsp;&nbsp;z a&nbsp;&nbsp;n i m,&nbsp;&nbsp;n i e c h&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;z a p r z e&nbsp;&nbsp;s a m e g o&nbsp;&nbsp;s i e b i e <sup>1</sup>. B&#243;g chce, &#380;eby&#347; by&#322; wolnym od wszelkiej s&#322;abostki; je&#347;li si&#281; kt&#243;rej poddasz, to ju&#380; po tobie. Chromanie na obie strony stanie si&#281; cech&#261; twoj&#261;; sukni&#261; b&#281;dziesz zakonnikiem, a my&#347;l&#261; &#347;wieckim cz&#322;owiekiem.',
                        'description3' => '1) &#346;. Mat. 16, 24.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0115',
                        'name' => 'XV Stycznia',
                        'content' => 'O poznaniu Boga.',
                        'author' => '&#8222;O m&#243;j Bo&#380;e! gdyby Ci&#281; ludzie poznali.&#8221;',
                        'description' => '(S. Ignat. vitae lib. 4. c. 28).',
                        'description2' => 'Ka&#380;dy cz&#322;owiek z natury swojej chce wiedzie&#263;, zt&#261;d u wielu taki zapa&#322; do nauki, &#380;e dla niej wzgardzili dostatkami i zaszczytami. Ale o jak&#380;e marne ich usi&#322;owania: s y n o w i e&nbsp;&nbsp;l u d z c y,&nbsp;&nbsp;c z e m u&nbsp;&nbsp;m i &#322; u j e c i e&nbsp;&nbsp;p r &#243; &#380; n o &#347; &#263;&nbsp;&nbsp;i&nbsp;&nbsp;s z u k a c i e&nbsp;&nbsp;k &#322; a m s t w a! <sup>1</sup> M&#261;dro&#347;&#263; tego &#347;wiata g&#322;upstwem jest u Boga, je&#347;li si&#281; nie zwraca do poznania Boga. Daremnie si&#281; m&#281;czymy, bez po&#380;ytku lata nam schodz&#261;; o ile si&#281; czego&#347; nauczymy, o tyle a nawet wi&#281;cej nie wiemy, umys&#322; nasz zamiast &#347;wiat&#322;a, ciemno&#347;ci zalega&#263; nie przestan&#261;, dop&#243;ki wszelkich si&#322; nie do&#322;o&#380;ymy, aby&#347;my post&#261;pili w poznaniu Boga i, co zatem idzie, w mi&#322;owaniu go. Nie trzeba tu ani ogromnych zdolno&#347;ci, ani szczeg&#243;lnego nauczyciela, ani wielkiej biblioteki; bez szumnych s&#322;&#243;w, w pokornem milczeniu, w cicho&#347;ci serca uskutecznia si&#281; to poznanie Boga: z a k r y w a&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;B &#243; g&nbsp;&nbsp;p r z e d&nbsp;&nbsp;m &#261; d r y m i,&nbsp;&nbsp;a&nbsp;&nbsp;o b j a w i a&nbsp;&nbsp;m a l u c z k i m <sup>2</sup>. C&#243;&#380; innego czyni wybranych szcz&#281;&#347;liwymi w niebie, je&#347;li nie poznanie Boga? Patrz, jak &#322;atwo mo&#380;esz zosta&#263; szcz&#281;&#347;liwym! Ucz si&#281; sposobu. B &#322; o g o s &#322; a w i e n i&nbsp;&nbsp;c z y s t e g o&nbsp;&nbsp;s e r c a,&nbsp;&nbsp;a l b o w i e m&nbsp;&nbsp;o n i&nbsp;&nbsp;B o g a&nbsp;&nbsp;o g l &#261; d a j &#261; <sup>3</sup>.',
                        'description3' => '1) Psalm 4, 3.<br/>
    2) &#346;. Mat. 11, 25.<br/>
    3) &#346;. Mat. 5, 3.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0116',
                        'name' => 'XVI Stycznia',
                        'content' => 'O poznaniu siebie.',
                        'author' => '&#8222;Pr&#243;&#380;no&#347;&#263; i przechwalanie si&#281; powstaje z niewiadomo&#347;ci i &#347;lepej samego siebie mi&#322;o&#347;ci.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4. c. 4).',
                        'description2' => 'Wsp&#243;lnem &#347;wiata nieszcz&#281;&#347;ciem jest pycha, przez pierwszych rodzic&#243;w, kt&#243;rzy si&#281; o Bosko&#347;&#263; ubiegali, nam w spadku przekazana! Jak&#380;e wysoko, o m&#243;j Bo&#380;e, ona si&#281;ga, gdy si&#281; na s&#322;owie jakiego pochlebcy, jakby na ramieniu wspiera! Do przeceniania siebie bardzo sk&#322;onni jeste&#347;my: nietylko w to co jest, ale i w to czego nie ma, ch&#281;tnie wierzymy, je&#347;li przez kogo&#347;, dla zjednania nas sobie lub dla wbicia w pr&#243;&#380;no&#347;&#263;, bywa nam przyznawane. Nieszcz&#281;&#347;liwi pr&#243;&#380;no&#347;ci mi&#322;o&#347;nicy, za takich uwa&#380;ani i miani by&#263; chc&#261;, jakimi nie s&#261;. W k&#322;amstwie si&#281; lubuj&#261;, z wad wynosz&#261;. Jakie&#380;-to za&#347;lepienie, dymem chwa&#322;y spowodowane! G&#322;&#281;biej wniknij w siebie; patrz, czem jeste&#347;, i aby&#347; si&#281; dowiedzia&#322;, Boga z my&#347;li nie wypuszczaj: o tyle bowiem zmniejsza si&#281; pycha, o ile wzmaga poznanie Boga. O&nbsp;&nbsp;P a n i e,&nbsp;&nbsp;d a j,&nbsp;&nbsp;a b y m&nbsp;&nbsp;p o z n a &#322;&nbsp;&nbsp;s i e b i e&nbsp;&nbsp;i&nbsp;&nbsp;p o z n a &#322;&nbsp;&nbsp;C i e b i e! <sup>1</sup>',
                        'description3' => '1) &#346;. Augustyn.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0117',
                        'name' => 'XVII Stycznia',
                        'content' => 'O stosowaniu si&#281; do woli Bo&#380;ej.',
                        'author' => '&#8222;Opu&#347;ci&#263; Boga dla Boga, zyskiem jest duchownym, nie strat&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Na w&#322;asne wygody, na korzy&#347;ci nawet duchowe, oboj&#281;tn&#261; by&#263; winna mi&#322;o&#347;&#263; prawdziwa. Jej g&#322;&#243;wnie ma chodzi&#263; o wol&#281; umi&#322;owanego, niezmru&#380;onem okiem na t&#281; wol&#281; spogl&#261;da&#263;, do tej woli si&#281; stosowa&#263;. Gdyby by&#322;o inaczej, mi&#322;owaliby&#347;my siebie nie Boga, zamian&#281; nie ofiar&#281; robiliby&#347;my, jako najemnicy, nie jako synowie. Pociechy nawet duchowe, o ile s&#261; nasze, o tyle podejrzane. Tem bezpieczniejsz&#261; jest ka&#380;da sprawa, im mniej wesz&#322;o do niej w&#322;asnej woli naszej. Chocia&#380;by ta wola by&#322;a &#347;wi&#281;t&#261;, ale je&#347;li si&#281; jej zrzekasz dla Boga, &#347;wi&#281;tszej dokonasz. Nie sama modlitwa nas z Bogiem &#322;&#261;czy; ani to zawsze najlepsze, co najwi&#281;ksze. To jest naj&#347;wi&#281;tszem, co do woli Bo&#380;ej bardziej zbli&#380;onem. Je&#347;li za opuszczenie domu z mi&#322;o&#347;ci dla Boga, tu stokro&#263; wi&#281;ksz&#261; nagrod&#281;, a w przysz&#322;o&#347;ci &#380;ywot wieczny Pan B&#243;g obiecuje <sup>1</sup>; to czego&#380; nie da temu, kto Boga dla Boga opuszcza? Wi&#281;cej daj&#261;cy, wi&#281;cej otrzyma.',
                        'description3' => '1) &#346;. Mat. 19, 20.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0118',
                        'name' => 'XVIII Stycznia',
                        'content' => 'O gorliwo&#347;ci w dobrem.',
                        'author' => '&#8222;Leniwiec przez wiele lat doj&#347;&#263; nie mo&#380;e do takiego stopnia cnoty, do jakiego dochodzi pilny w nader kr&#243;tkim czasie.&#8221;',
                        'description' => '(S. Ignat. in epist. de perfect.)',
                        'description2' => 'Jeden dzie&#324; &#380;arliwych wi&#281;cej znaczy, ni&#380; ozi&#281;b&#322;ych wiek najd&#322;u&#380;szy; owszem, jedna godzina dobrze sp&#281;dzona przek&#322;ada si&#281; nad nie&#347;miertelno&#347;&#263; pr&#243;&#380;niak&#243;w. Napr&#243;&#380;no &#380;yje, kto dobrze nie &#380;yje. Gnu&#347;no&#347;&#263; ducha, jest-to &#347;mier&#263; za &#380;ycia, sen na jawie: bo czczem jest &#380;ycie, kt&#243;re si&#281; nie zape&#322;nia trosk&#261; o dobre jego sp&#281;dzenie. Tacy, gdy zasn&#261; snem bez obudzenia si&#281;, nic w r&#281;kach swoich nie znajd&#261;. &#346;wi&#281;t&#261; rzecz&#261; czas jest; tyle znaczy, ile wieczno&#347;&#263;. Wszelkich si&#322; przeto dok&#322;ada&#263; powinni&#347;my, aby nam &#380;ycie bezpo&#380;ytecznie nie up&#322;ywa&#322;o, aby dnie bez dobrych uczynk&#243;w nie schodzi&#322;y, aby tym sposobem wieczno&#347;&#263; nasza szcz&#281;&#347;liw&#261; by&#322;a. Z drzewa owocu, z roli plonu oczekujesz, dlaczego owocem z siebie gardzisz? Sam przedewszystkiem wydawaj owoce, sam dla siebie b&#261;d&#378; cenn&#261; rol&#261;, &#380;yznym folwarkiem; a domagaj&#261;c si&#281; od innych owoc&#243;w, domagaj si&#281; naprz&#243;d od samego siebie.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0119',
                        'name' => 'XIX Stycznia',
                        'content' => 'O oddaniu si&#281; w zupe&#322;no&#347;ci Bogu.',
                        'author' => '&#8222;Niezno&#347;nem by&#322;oby dla mnie &#380;ycie, gdybym spostrzeg&#322;, &#380;e w duszy mojej co&#347; si&#281; kryje, co nie jest &#347;ci&#347;le Boskiem, ale ludzkiem.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Dobro z ca&#322;kowitego posiadania, z&#322;o zawsze z jakiego&#347; niedostatku. Dop&#243;ty nie b&#281;dziesz szcz&#281;&#347;liwym, dop&#243;ki albo wszystkiem nie wzgardzisz, albo wszystkiego nie posi&#261;dziesz. Wybrednem jest szcz&#281;&#347;cie: dr&#281;czy, je&#347;li czegokolwiek nie dostawa. Naj&#322;atwiej si&#281; otrzymuje, gdy cz&#322;owiek sw&#261; mi&#322;o&#347;&#263; wy&#322;&#261;cznie ku Bogu zwraca. Kto raz zasmakowa&#322;, czem jest B&#243;g, ten bez trudno&#347;ci zbrzydzi sobie wszystko inne; zasycony potokiem doznawanych rozkoszy, wszelkie inne uzna za niegodne siebie, za lekkie i nieodpowiednie. Jak pi&#243;rko, chocia&#380;by jedn&#261; tylko kropelk&#261; obci&#261;&#380;one, wznie&#347;&#263; si&#281; nie mo&#380;e, i pomimo podnoszenia go do g&#243;ry, spada na ziemi&#281;; tak dusza ma&#322;em nawet jakiem uczuciem ziemskiem skr&#281;powana, do nieba wzlecie&#263; nie zdo&#322;a. Ca&#322;y, jak jeste&#347;, od Boga jeste&#347; i do Boga nale&#380;ysz. Je&#347;li si&#281; ca&#322;y Bogu nie oddajesz, niesprawiedliwo&#347;&#263; pope&#322;niasz. Mi&#322;o&#347;&#263; twoja, ca&#322;a Bogu nale&#380;na, dzielon&#261; by&#263; nie mo&#380;e; i chocia&#380; ca&#322;&#261; oddasz, z wielu wzgl&#281;d&#243;w d&#322;u&#380;nikiem jeszcze pozostaniesz. A c&#243;&#380; dopiero, gdy jak&#261;&#347; cz&#281;&#347;&#263; w inn&#261; stron&#281; skierujesz?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0120',
                        'name' => 'XX Stycznia',
                        'content' => 'O mi&#322;owaniu bli&#378;nich dla Boga.',
                        'author' => '&#8222;Nietylko Boga, ale i ludzi dla Boga mie&#263; potrzeba na wzgl&#281;dzie.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => 'B&#243;g, kt&#243;ry tak umi&#322;owa&#322; cz&#322;owieka, i&#380; z mi&#322;o&#347;ci ku niemu samego Siebie ofiarowa&#322;, chce, &#380;eby&#347;my go tak mi&#322;owali, aby&#347;my i o ludziach nie zapominali. W niczem mi&#322;o&#347;ci Boskiej nie uw&#322;acza, kto bli&#378;niego dla Boga mi&#322;uje. Nikt do tyla z&#322;ym nie jest, aby czego&#347; nie mia&#322;, coby na mi&#322;o&#347;&#263; i szacunek zas&#322;ugiwa&#263; mog&#322;o; a gdyby i tak by&#322;o, &#380;eby nic dobrego w sobie nie mia&#322;, to ju&#380; dla tego samego, &#380;e jest w&#322;asno&#347;ci&#261; Bo&#380;&#261;, cen&#261; krwi Chrystusowej, obrazem Boga: mi&#322;o&#347;&#263; mu si&#281; od nas nale&#380;y i odmawia&#263; mu jej nie powinni&#347;my. Je&#347;li pomin&#261;wszy innych, na swoje w&#322;asne obyczaje nale&#380;yt&#261; uwag&#281; zwr&#243;cisz; niejedno zapewne dostrze&#380;esz, co ci&#281; zniewoli do uznania wszystkich za lepszych od siebie, i do powzi&#281;cia tem samem pewnego wstr&#281;tu ku sobie, a mi&#322;o&#347;ci ku innym. &#379;e nie tak jakby nale&#380;a&#322;o bli&#378;niego mi&#322;ujemy, przyczyn&#261; temu nie jest z&#322;o&#347;&#263; ludzka, ale w&#322;asna nasza niech&#281;&#263; i antypatya. Przyzna&#263; si&#281; do niej wstyd nam, wi&#281;c j&#261; przyodziewamy r&#243;&#380;nemi pozorami. O b &#322; u d n i!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0121',
                        'name' => 'XXI Stycznia',
                        'content' => 'O niezno&#347;no&#347;ci blu&#378;nierstw.',
                        'author' => '&#8222;Gdyby si&#281; tak sta&#322;o, &#380;e mi&#322;o&#347;nik Boga bez w&#322;asnej winy zosta&#322; pot&#281;piony, by&#322;oby mu &#322;atwiej znosi&#263; wszystkie kary piek&#322;a, ni&#380; s&#322;ucha&#263; blu&#378;nierstw jakiemi pot&#281;pieni zniewa&#380;aj&#261; Boga.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 2).',
                        'description2' => 'Kara zmys&#322;&#243;w sama z siebie z&#322;&#261; nie jest, bo j&#261; B&#243;g przeznacza, owszem dobr&#261;, bo kara za grzech jest Boskiej sprawiedliwo&#347;ci narz&#281;dziem: rzecz si&#281; ma inaczej z blu&#378;nierstwem, B&#243;g go nie mo&#380;e nienawidzie&#263;, i r&#243;wnie&#380; cz&#322;owiek, kt&#243;ry Boga mi&#322;uje. Kto zniewa&#380;a umi&#322;owanego, ten mi&#322;uj&#261;cemu tem straszniejsz&#261; ran&#281; zadaje, im wi&#281;ksz&#261; jest jego mi&#322;o&#347;&#263;; gdy przed zniewag&#261; nie mo&#380;e umi&#322;owanego zas&#322;oni&#263;, ani jej pom&#347;ci&#263;, podw&#243;jnie cierpi; i za samego siebie i za umi&#322;owanego. Kto siebie samego, jak powinien, nienawidzi, temu nie trudno cierpie&#263;: bo kt&#243;ry&#380; nieprzyjaciel boleje, gdy skazuj&#261; na kar&#281; jego przeciwnika? Inna rzecz, gdy widzi wystawionym na zniewag&#281; przedmiot swej mi&#322;o&#347;ci, wtedy boleje nies&#322;ychanie, cierpi bez ratunku. Przykr&#261; jest rzecz&#261; patrze&#263; na cierpienie niewinnego, przykrzejsz&#261; na cierpienie dobroczy&#324;cy, a ju&#380; za prawd&#281; nie mo&#380;e by&#263; przykrzejszej, jak widzie&#263; i s&#322;ysze&#263;, &#380;e cierpi B&#243;g, to jest, dobro niesko&#324;czone i niezmierzone, dobro nad wszelkie dobra!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0122',
                        'name' => 'XXII Stycznia',
                        'content' => 'O wielkiej sile pokus.',
                        'author' => '&#8222;Niekiedy cz&#322;owiek tak cierpi od z&#322;ego ducha, &#380;e prawie od zmys&#322;&#243;w odchodzi; to na natur&#281;, to na chorob&#281; cierpienia swoje sk&#322;ada: gdy tymczasem wszystkiemu winna pokusa.&#8221;',
                        'description' => '(S . Ignat. in reg. de discr. spirit.)',
                        'description2' => 'Z&#322;y duch zanadto jest przebieg&#322;y, aby jego sztuki mo&#380;na by&#322;o &#322;atwo rozpozna&#263;. Jako ksi&#261;&#380;&#281; ciemno&#347;ci, aby si&#281; tem bezpieczniej ukry&#322;, zasadzki swoje przygotowuje potajemnie; do ich wy&#347;ledzenia wy&#380;szego potrzeba &#347;wiat&#322;a, ni&#380; ludzkie. Jak zdobywca warowni pierwiej wszystkie zewn&#281;trzne przeszkody usuwa; tak i w&#243;dz piekielny, gdy mu o dusz&#281; chodzi, pierwiej na cia&#322;o si&#281; rzuca. Strze&#380; si&#281; zasadzek: zbytnia pewno&#347;&#263; siebie jest tu najwi&#281;kszem niebezpiecze&#324;stwem. Do cia&#322;a si&#281; zabiera, aby duszy zaszkodzi&#322;; r&#243;&#380;ne pozory wynajduje, aby od dobrych uczynk&#243;w odwi&#243;d&#322;. Tak na zgub&#281; nasz&#261; czycha, tak nastaje, &#380;e gdy jej w zupe&#322;no&#347;ci przeprowadzi&#263; nie mo&#380;e, to si&#281; i czemkolwiek w tej mierze zadawalnia. O jak&#380;eby to by&#322;o chwalebnie, z jakim po&#380;ytkiem, gdyby&#347;my o dobro naszej duszy my podobnie zabiegali! Dopuszcza B&#243;g niekiedy, aby ludzkiego rodzaju nieprzyjaciel, mia&#322; nad nami tak&#261; w&#322;adz&#281;; dopuszcza ju&#380;-to dlatego, aby nas w pokorze zaprawi&#322;, ju&#380; dla tego, aby nam swoje nad nami zwierzchnictwo przypomnia&#322;. Tym sposobem, gdy szatan okazuje si&#281; tyranem, B&#243;g pozostaje ojcem.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0123',
                        'name' => 'XXIII Stycznia',
                        'content' => 'O szkodliwo&#347;ci ma&#322;ych grzech&#243;w.',
                        'author' => '&#8222;Bardzo cz&#281;sto wi&#281;cej kryje si&#281; niebezpiecze&#324;stwa w niezwa&#380;aniu na ma&#322;e grzechy, ni&#380; na wielkie.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden. l. 5. c. 7).',
                        'description2' => 'Ma&#322;em nic nie jest, czy na dobre, czy na z&#322;e uwag&#281; zwr&#243;cisz; poniewa&#380; jedno i drugie wiecznem jest. Zawsze prawd&#261; pozostanie: &#380;e to dobrze albo &#378;le zosta&#322;o zrobionem; ze wzgl&#281;du przeto na wieczno&#347;&#263;, r&#243;&#380;nicy pomi&#281;dzy szcz&#281;&#347;ciem a nieszcz&#281;&#347;ciem nie ma. Czy kto jest szcz&#281;&#347;liwym lub nieszcz&#281;&#347;liwym, to wieczno&#347;ci w niczem nie zmienia. Kto na grzechy nie zwa&#380;a, dlatego &#380;e s&#261; ma&#322;emi; ten zapomina, &#380;e podr&#243;&#380;nego nawet ma&#322;a drogi chropowato&#347;&#263; op&#243;&#378;ni&#263; mo&#380;e. Ma&#322;y w&#322;os, cienka nitka wystarcza, aby si&#281; ptak pomimo ch&#281;ci w powietrze nie wzni&#243;s&#322;. Wielkie z&#322;e samo si&#281; w oczy rzuca, i ju&#380; ci&#281;&#380;arem swoim zmusza do poszukania odpowiedniego lekarstwa, na uwolnienie si&#281; od niego; ma&#322;e przeciwnie, kryje si&#281;, a gdy lekcewa&#380;one wzrasta, w ko&#324;cu jest nie do wyleczenia. Nie co, ale dla kogo czynimy, mie&#263; na uwadze potrzeba. Wielkim jest B&#243;g, przeto ma&#322;em by&#263; nie mo&#380;e, cokolwiek mu si&#281; nie podoba. Nie ma czynno&#347;ci tak ma&#322;ej, dobrze lub &#378;le wykonanej, kt&#243;raby nie przewy&#380;sza&#322;a spraw najwa&#380;niejszych rzeczypospolitej, a nawet &#347;wiata ca&#322;ego, bez wzgl&#281;du na to, czyby chodzi&#322;o o jego ocalenie, czy o zatrat&#281;. Patrz, jak wielkim jest b&#322;&#281;dem na ma&#322;e grzechy niezwa&#380;a&#263;, ma&#322;e grzechy lekcewa&#380;y&#263;!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0124',
                        'name' => 'XXIV Stycznia',
                        'content' => 'O rz&#261;dzeniu si&#281; prawd&#261;.',
                        'author' => '&#8222;Nad prawd&#261; nic d&#322;ugo nie tryumfuje; szturmowan&#261; by&#263; mo&#380;e, ale zdobyt&#261; by&#263; nie mo&#380;e.&#8221;',
                        'description' => '(S. Ignat. apud Nolarc.)',
                        'description2' => 'Najlepszym z kolor&#243;w jest bia&#322;y. Fa&#322;sz i podst&#281;p nikogo nie obroni: jak kupa &#347;mieci, kt&#243;rej nie by&#322;o wida&#263;, nagle si&#281; ukazuje, po stopnieniu &#347;niegu od promieni s&#322;onecznych; tak wykrywaj&#261; si&#281; przez prawd&#281; podst&#281;py, po usuni&#281;ciu przeszk&#243;d, kt&#243;re je przez jaki&#347; czas zas&#322;ania&#322;y. Jak s&#322;o&#324;ce chmurami zasz&#322;e kryje si&#281;, ale gdy te ust&#261;pi&#261; tem ja&#347;niej &#347;wieci; tak prawda przygn&#281;biona kryje si&#281; przez pewien czas, ale w ko&#324;cu na jaw wychodzi i tem milsz&#261; si&#281; staje. Najlepsz&#261; polityk&#261; jest szczero&#347;&#263;. My&#347;l czysta nigdy si&#281; nie rumieni, ale fa&#322;sz wykryty w ogromnym bywa k&#322;opocie. Nie ma nic brzydszego nad szalbierstwo, kt&#243;re na jaw wysz&#322;o. Podst&#281;pny pierwiej siebie gubi, ni&#380; innych: gdy bowiem drugiemu d&#243;&#322; gotuje, sam pierwszy we&#324; wpada. S&#322;uszn&#261; jest kara odwetu, skoro si&#281; niegodziwo&#347;&#263; temi samemi &#347;rodkami gubi, kt&#243;re na zgub&#281; innych wybra&#322;a. N a j l e p i e j&nbsp;&nbsp;t e n&nbsp;&nbsp;r o b i,&nbsp;&nbsp;k t o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p r a w d &#261;&nbsp;&nbsp;r z &#261; d z i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0125',
                        'name' => 'XXV Stycznia',
                        'content' => 'O baczno&#347;ci przed zasadzkami z&#322;ego ducha.',
                        'author' => '&#8222;Gdy kogo podej&#347;&#263; z&#322;y duch zamierza lub go silniej zaniepokoi&#263;, czas nocny po wi&#281;kszej cz&#281;&#347;ci wybiera.&#8221;',
                        'description' => '(S. Ignat. in exercit.)',
                        'description2' => 'Owo przej&#347;cie ze snu do zupe&#322;nej przytomno&#347;ci, co&#347; nakszta&#322;t zmierzchu, jak niewyra&#378;nego &#347;wiat&#322;a, tak niewyra&#378;nej woli moment; wielkiej potrzebuje baczno&#347;ci, gdy&#380; nieprzyjaciel zasadzony czycha, i na obudzonego ze snu naciera, aby go tak z nienacka ku z&#322;emu nak&#322;oni&#322;. Pod&#322;y szatan! wprost do walki wyst&#261;pi&#263; nie chce, ale kryj&#243;wek szuka, jak z&#322;odziej noc na swe sprawki wybiera. C&#243;&#380; poczniesz? &#8212; Baczno&#347;&#263; na tego z&#322;odzieja, jedyna to rada; umknie, gdy spostrze&#380;e, &#380;e jest obserwowany. Dnia pierwiastki chwyta: jak bowiem, kto dobrze zacz&#261;&#322;, ju&#380; po&#322;ow&#281; czynu ma; tak przeciwnie, co niech Bog odwr&#243;ci, z&#322;y dnia pocz&#261;tek, rzadko kiedy lepszy ma koniec. Pierwiastki nale&#380;&#261; si&#281; wszystkich i wszystkiego pierwiastkowi &#8212; Bogu. Chciwym jest bardzo na nasz&#261; zgub&#281; z&#322;y duch, dzie&#324; mu nie wystarcza, noc sobie przyw&#322;aszcza, ocknienie si&#281; nasze uprzedza. Biada leniwemu i na oba uszy, jak m&#243;wi&#261;, zasypiaj&#261;cemu, bez troski o siebie, bez pomocy nieba, bez opieki &#346;wi&#281;tych Pa&#324;skich!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0126',
                        'name' => 'XXVI Stycznia',
                        'content' => 'O unikaniu k&#322;&#243;tni.',
                        'author' => '&#8222;Unika&#263; k&#322;&#243;tni nietylko jest rzecz&#261; szlachetn&#261; i chrze&#347;cija&#324;skiego pokoju godn&#261;, ale i po&#380;yteczn&#261;.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Je&#347;li przez mi&#322;o&#347;&#263; cnoty ponosimy jak&#261; strat&#281; w rzeczach doczesnych, B&#243;g j&#261; zwyk&#322; obficie nagradza&#263;. Lepszy jest grosik w pokoju, ni&#380; skarby z k&#322;&#243;tni&#261;. Na co si&#281; przyda, je&#347;li powi&#281;kszasz maj&#281;tno&#347;&#263;, a zmniejszasz mi&#322;o&#347;&#263;? Trudna jest rzecz wszczyna&#263; k&#322;&#243;tni&#281;, a nie narusza&#263; mi&#322;o&#347;ci. Nie m&#243;wi&#281;, aby&#347; na niegodziwo&#347;&#263; drugich patrzy&#322; przez szpary; ale to tylko m&#243;wi&#281;, aby&#347; przy jej usuwaniu lub karaniu nie mia&#322; nienawi&#347;ci ku temu, kt&#243;ry si&#281; jej dopu&#347;ci&#322;. Strze&#380; si&#281;, aby&#347; gniewaj&#261;c si&#281; na czyny, nie gniewa&#322; si&#281; zarazem i na osob&#281;. Strata mi&#322;o&#347;ci cho&#263;by nie wielka, gorsz&#261; jest od wszelkiej straty doczesnej; ta bowiem przemija, tamta pozostaje: raczej &#347;wiata ca&#322;ego, ni&#380; mi&#322;o&#347;ci strat&#281; wybra&#263; by nale&#380;a&#322;o. Drobnostk&#261; jest to, o co si&#281; tak spieramy. Je&#347;li nam o zyski chodzi, to za wiecznemi go&#324;my. Po co si&#281; k&#322;&#243;cimy o rzecz, kt&#243;ra tej warto&#347;ci, jak&#261; jej przyznajemy, wcale nie ma?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0127',
                        'name' => 'XXVII Stycznia',
                        'content' => 'O roztropno&#347;ci w kierowaniu drugimi.',
                        'author' => '&#8222;Jest rzecz&#261; niebezpieczn&#261; chcie&#263; wszystkich jedn&#261; drog&#261; prowadzi&#263; do doskona&#322;o&#347;ci; niebezpieczniejsz&#261; innych wed&#322;ug siebie s&#261;dzi&#263;.&#8221;',
                        'description' => '(S. Ignat. in vita).',
                        'description2' => 'Ile ludzi, tyle zda&#324;, tyle r&#243;&#380;nych twarzy, tyle odmiennych g&#322;os&#243;w; tak i&#380; cudemby by&#322;o, gdyby kto&#347; w tem wszystkiem zgadza&#322; si&#281; z innymi: wi&#281;ksza jeszcze jest r&#243;&#380;no&#347;&#263; w duszy i w sprawach jej dotycz&#261;cych. Do jednej przeto normy sprowadzi&#263; wszystkich nie mo&#380;na. Je&#347;li do ka&#380;dej nogi zastosowuje si&#281; obuwie, i je&#347;li nie ta sama przykrywka s&#322;u&#380;y do ka&#380;dego garnka; to jakim sposobem by&#263; mo&#380;e, i&#380;by jednem lekarstwem leczy&#322;y si&#281; wszystkie dusz choroby? Znaczy&#322;oby to nie leczy&#263;, ale o &#347;mier&#263; przyprawia&#263;. Sztuk&#261; nad sztukami zw&#261; kierunek dusz, jest on jak z jednej strony najwa&#380;niejszy, tak z drugiej najtrudniejszy. Jak cia&#322;o, tak i dusz&#281; nie ka&#380;demu lekarzowi powierzaj. S z u k a j&nbsp;&nbsp;n a j l e p s z e g o. Gdy Duch &#346;wi&#281;ty zst&#261;pi&#322; z nieba jako dusz kierownik, rozdzieli&#322; si&#281; na rozmaite j&#281;zyki i rozmaitemi j&#281;zykami m&#243;wili Aposto&#322;owie <sup>1</sup>. Podobnie i ty, je&#347;li z po&#380;ytkiem chcesz pracowa&#263;, w s z y s t k i e m&nbsp;&nbsp;d l a&nbsp;&nbsp;w s z y s t k i c h&nbsp;&nbsp;s t a &#263;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;w i n i e n e &#347; <sup>2</sup>.',
                        'description3' => '1) Dzieje Apostol. 2, 4.<br/>
    2) I. Kor. 9, 22.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0128',
                        'name' => 'XXVIII Stycznia',
                        'content' => 'O warto&#347;ci d&#243;br ziemskich.',
                        'author' => '&#8222;Je&#347;li na jednej szali umie&#347;ci si&#281; wszystko dobre, co B&#243;g stworzy&#322;, a na drugiej wi&#281;zienie, &#322;a&#324;cuchy, obelgi; to te w por&#243;wnaniu z tamtem zra&#380;a&#263; nie powinny.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden. l. 5. c. 10).',
                        'description2' => 'Dobra, kt&#243;re &#347;wiat ma za takie, raczej s&#261; z&#322;ami ni&#380; dobrami; bo przynosz&#261; uszczerbek duszy, s&#261; do grzechu podniet&#261;, do doskona&#322;o&#347;ci przeszkod&#261;, do Bo&#380;ej mi&#322;o&#347;ci zapor&#261;. I ty mia&#322;by&#347; takie dobra ceni&#263;, takich d&#243;br pragn&#261;&#263;? A chocia&#380;by z&#322;ami nie by&#322;y, dobrami nie s&#261; i na mi&#322;o&#347;&#263; nie zas&#322;uguj&#261;. Czem&#380;e bowiem s&#261;, je&#347;li na ich pocz&#261;tek spojrzysz? &#8212; n i c z e m: je&#347;li natur&#281; zbadasz? &#8212; z n i k o m o &#347; c i &#261;: je&#347;li na trwa&#322;o&#347;&#263; uwag&#281; zwr&#243;cisz? &#8212; n i e t r w a &#322; o &#347; c i &#261;. I w takich-to dobrach na zab&#243;j si&#281; kochamy! Co &#347;wiat za z&#322;e uwa&#380;a, to przeciwnie jest najlepszem: bo od rzeczy znikomych my&#347;l odci&#261;ga, do Boga przywodzi, pow&#243;d do grzechu usuwa. Skoro nieraz przykrzy si&#281; &#380;ycie, to jak&#380;eby wabi&#322; wyst&#281;pek? Gdy pomy&#347;lno&#347;ci&#261; B&#243;g darzy, s&#322;usznie mo&#380;esz w&#261;tpi&#263;, czy-to nagroda, czy kara; ale gdy przeciwno&#347;ciami uciska, nie masz nad ten pewniejszego Boskiej mi&#322;o&#347;ci dowodu.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0129',
                        'name' => 'XXIX Stycznia',
                        'content' => 'O zmienno&#347;ci losu.',
                        'author' => '&#8222;Wiecznej szcz&#281;&#347;liwo&#347;ci pewnym nigdy by&#263; nie mo&#380;na; a l&#281;ka&#263; si&#281; wtedy najbardziej nale&#380;y, gdy wszystko po my&#347;li idzie.&#8221;',
                        'description' => '(S. Ignat. in hist. soc. l. 14).',
                        'description2' => 'Jak morze, gdy spokojem wabi, to burz&#281; gotuje; jak zamki wtedy najbardziej s&#261; zagro&#380;one, gdy nieprzyjaciel nazewn&#261;trz nie trwo&#380;y, ale potajemnie miny podsadza: tak dla duszy rzecz&#261; jest nader niebezpieczn&#261;, obawy &#380;adnej nie mie&#263;, ale w pewno&#347;ci zupe&#322;nej si&#281; pogr&#261;&#380;a&#263;. Los przyjazny takich si&#322; nie ma, aby nam pok&#243;j bez zmiany zapewnia&#322;; im wi&#281;kszym si&#281; cieszymy, tem zwykle kr&#243;cej trwa. Zawodny jest, ze znu&#380;enia raczej ni&#380; z przekonania wyp&#322;ywa; ucieknie, zniknie. Patrz, na ile mu ufa&#263; mo&#380;esz! Co stracie podlega, to na nazw&#281; dobra nie zas&#322;uguje. Je&#347;li kto nie na pewnej podstawie swe nadzieje opiera, to te d&#322;ugo nie potrwaj&#261;. M&#261;&#380;, kt&#243;ry na los nie zwa&#380;a, kt&#243;ry z siebie samego jest zadowolony, pod wzgl&#281;dem szcz&#281;&#347;cia najbli&#380;ej Boga stoi; bo w obu przypadkach wystarcza sobie, w obu rad&#281; sobie daje, w obu za szcz&#281;&#347;liwego si&#281; ma. Tyle masz szcz&#281;&#347;cia, ile jest w tobie, ile niem sam jeste&#347;. Nie uwa&#380;aj si&#281; za bogacza, chocia&#380;by skrzynie p&#281;cznia&#322;y od z&#322;ota; wszystkie skarby nosisz z sob&#261;, o tyle szcz&#281;&#347;liwy, o tyle bogaty, o ile dobry.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0130',
                        'name' => 'XXX Stycznia',
                        'content' => 'O po&#380;ytkach milczenia.',
                        'author' => '&#8222;W pewnych razach lepiej jest milcze&#263;, ni&#380; m&#243;wi&#263;: i nie potrzeba m&#347;ci&#263; si&#281; s&#322;owem, gdzie sama za siebie m&#347;ci si&#281; prawda.&#8221;',
                        'description' => '(S. Ignat. in hist. soc. l. 15).',
                        'description2' => 'Nie masz lepszej zemsty, jak milcze&#263; na oszczerstwo, i nieuznawa&#263; godnym zemsty oszczerc&#281;. Co wym&#243;wi&#322;, to s&#322;owo by&#322;o, nie piorun: nie masz si&#281; czem trwo&#380;y&#263;. Je&#347;li nieprzyjacielowi bro&#324; t&#281;pisz, to prawie tak samo robisz, jakby&#347; j&#261; &#322;ama&#322;. Pos&#322;uguj si&#281; roztropnem milczeniem, a b&#281;dziesz mia&#322; puklerz, kt&#243;ry pocisk odrzuci, aby ci&#281; nie zrani&#322;. Wierzaj, bezpieczniej jest puklerzem, ni&#380; mieczem zwyci&#281;&#380;a&#263;. Zmartwi si&#281; szkaluj&#261;cy, bo pomy&#347;li, &#380;e nim gardzisz, je&#347;li na oszczerstwo nic nie odpowiesz. Milcz, pocisku, jakby&#347; nie czu&#322;, udawaj. Tak zazdro&#347;nik w oczekiwaniu zawiedziony bardzo si&#281; udr&#281;czy, i b&#243;l, kt&#243;ry chcia&#322; komu innemu sprawi&#263;, sam poczuje, podw&#243;jnie nieszcz&#281;&#347;liwy: raz &#380;e siebie zrani&#322;, drugi raz &#380;e ciebie nie dosi&#281;gn&#261;&#322;. Wtedy wielkiego dowiedziesz umys&#322;u, gdy si&#281; na wymierzone przeciw tobie oszczercze pociski nie obruszysz, gdy je wspania&#322;omy&#347;lnie zniesiesz. &#379;ab skrzeczenie, blasku ksi&#281;&#380;yca nie zmniejsza; wiedz, &#380;e i tobie nie zaszkodz&#261; oszczerstwa, je&#347;li je nie tak s&#322;owami, jak czynami usuwasz.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0131',
                        'name' => 'XXXI Stycznia',
                        'content' => 'O uprzejmo&#347;ci w odmowie.',
                        'author' => '&#8222;Je&#347;li ci&#281; prosz&#261; o to, co za szkodliwe uwa&#380;asz, tak si&#281; zachowaj, aby&#347; i rzeczy proszonej odm&#243;wi&#322; i prosz&#261;cego do siebie nie zrazi&#322;.&#8221;',
                        'description' => '(S. Ignat. apud Nolarci).',
                        'description2' => 'Zgodzi&#263; si&#281; na to, co szkodzi&#263; mo&#380;e, jest nie dobrodziejstwem, ale najgorszym nieprzyja&#378;ni rodzajem. Matk&#261; jest, kto n&#243;&#380; usuwa, aby si&#281; nie zrani&#322;o dzieci&#281;; wtedy najlepiej mi&#322;uje, gdy rzeczy szkodliwych ca&#322;kiem odmawia. N i e&nbsp;&nbsp;w i e m y,&nbsp;&nbsp;o&nbsp;&nbsp;c o&nbsp;&nbsp;p r o s i m y <sup>1</sup>. Je&#347;li czego z konieczno&#347;ci odm&#243;wi&#263; wypada, tak to uskuteczni&#263; nale&#380;y, aby odmow&#281; nagrodzi&#322;a uprzejmo&#347;&#263;. Tym sposobem si&#281; stanie, &#380;e prosz&#261;cy wi&#281;cej otrzyma, ni&#380; prosi&#322;; i otrzymawszy rzecz lepsz&#261;, nie poczuje niedostatku gorszej. Jak podarunek ze z&#322;o&#347;ci&#261; dany na warto&#347;ci traci, tak odmowa uskuteczniona z dobroci&#261; mniej przykr&#261; si&#281; wydaje. Jest-to gorzkie napoje zaprawia&#263; s&#322;odycz&#261;. I odmowy i nieuprzejmo&#347;ci dozna&#263;, to podw&#243;jna rana; przenie&#347;&#263; j&#261; na raz jest niezmiernie trudno. Jak milsze s&#261; rany ze strony kochaj&#261;cego, ni&#380; poca&#322;unki ze strony znienawidzonego; tak dobroci&#261; nacechowana odmowa, nieraz si&#281; przek&#322;ada nad dobrodziejstwa, udzielone ze z&#322;o&#347;ci&#261;.',
                        'description3' => '1) Rzym. 8, 26.',
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_02',
                'name' => 'February',
                'colour_value' => '#fbcb32',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_0201',
                        'name' => 'I Lutego',
                        'content' => 'O zachowaniu si&#281; w chorobie.',
                        'author' => '&#8222;Chory przedsi&#281;wzi&#281;&#263;, kt&#243;re podejmuj&#261; zdrowi, niech zaniecha; spokojem ducha i cierpliwo&#347;ci&#261; niech je nagradza: tym sposobem pracuj&#261;c nie zaszkodzi cia&#322;u.&#8221;',
                        'description' => '(S. Ignat. apud Nolar.)',
                        'description2' => 'Wielkie miewaj&#261; zamiary chorzy, o wielkich wspominaj&#261; czynach, gdyby im nie przeszkadza&#322;a choroba. Jestto z&#322;udzenie! My s&#261;dzimy, &#380;e to gorliwo&#347;&#263;, a to zmys&#322;owo&#347;&#263;, nie tak bowiem pracowa&#263; chcemy, jak si&#281; przed dolegliwo&#347;ciami choroby uchroni&#263;. Poco wspominasz Indye? &#8212; &#322;&#243;&#380;ko jest dla ciebie aren&#261; i polem najobfitszego &#380;niwa. Nie potrzebujesz wzdycha&#263; za m&#281;cze&#324;stwem, masz pod r&#281;k&#261; w chorobie kat&#243;w, masz w &#322;&#243;&#380;ku wi&#281;zienie. Je&#347;liby&#347; z tego korzysta&#263; umia&#322;, to choroba do wszelkich zas&#322;ug pole ci otwiera. Gdyby B&#243;g twoich prac potrzebowa&#322;, toby ci si&#322; odpowiednich nie odmawia&#322;; c i e r p l i w o &#347; c i&nbsp;&nbsp;c h c e,&nbsp;&nbsp;n i e&nbsp;&nbsp;o f i a r y: nie znoj&#243;w cia&#322;a, ale spokoju ducha domaga si&#281; od ciebie. Wielkie owe czyny, o kt&#243;rych marzysz, wi&#281;cej maj&#261; w sobie twego w&#322;asnego upodobania, ni&#380; Boskiej woli. O ile za&#347; Boska wola jest &#347;wi&#281;tsz&#261; od twoich pragnie&#324;, o tyle i choroba dla chorego jest po&#380;yteczniejsz&#261; nad&nbsp;&nbsp;a p o s t o l s t w o.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0202',
                        'name' => 'II Lutego',
                        'content' => 'O pracy nad sob&#261;.',
                        'author' => '&#8222;Kto chce by&#263; dla innych u&#380;ytecznym, pierwiej winien nad sob&#261; wiele pracowa&#263;: niech pierwiej sam zap&#322;onie mi&#322;o&#347;ci&#261;, kto j&#261; w innych zamierza roznieci&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Nolar.)',
                        'description2' => 'Niczem tak nie zalecisz pobo&#380;no&#347;ci, jak czynem, bo nic tak nie obja&#347;nia prawa, jak przyk&#322;ady. Wszyscy, kt&#243;rzy je widz&#261;, pojmuj&#261;, i &#380;adnego komentarza nie potrzebuj&#261;. Widzie&#263;, to znaczy nauczy&#263; si&#281;. &#379;o&#322;nierz, je&#347;li chce dobrze strzela&#263;, niech si&#281; pierwiej przez odpowiednie &#263;wiczenia wprawia; &#378;le idzie nauka wpo&#347;r&#243;d niebezpiecze&#324;stw, dajmy na to wojny, i zbytnia pewno&#347;&#263; siebie straszn&#261; p&#243;&#378;niej odnosi kar&#281;. Niebezpiecze&#324;stwa duszy i wi&#281;ksze s&#261; i ci&#281;&#380;sze od niebezpiecze&#324;stw cia&#322;a. Kto si&#281; innych zbawieniem ma zajmowa&#263;, aby sam nie zgin&#261;&#322;, silniejszej, ni&#380; zwyk&#322;a, potrzebuje pomocy. Nie sta&#263; si&#281; z&#322;ym pomi&#281;dzy z&#322;ymi i nie zarazi&#263; si&#281; od zara&#380;onych, jest sztuk&#261; nielada. Mi&#322;o&#347;&#263;, je&#347;li prawdziwa, trzyma si&#281; zawsze porz&#261;dku; na swoje pierwiej, ni&#380; na innych korzy&#347;ci, zwraca uwag&#281;; w &#347;wi&#281;to&#347;ci wyprzedza&#263; si&#281; nie daje, bo je&#347;li nikt tego nie udziela, czego nie ma, jako&#380; pozbawiony ducha udzieli go innym?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0203',
                        'name' => 'III Lutego',
                        'content' => 'O po&#380;ytkach z cierpie&#324;.',
                        'author' => '&#8222;Gdzie zawsze pogoda i niezm&#261;cony pok&#243;j panuje po domach, tam ju&#380; jest wiele, je&#347;li si&#281; nie zagnie&#378;dzi&#322;y wyst&#281;pki.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Nie ma wi&#281;kszego nieszcz&#281;&#347;cia nad ci&#261;g&#322;e szcz&#281;&#347;cie. Jak ziemia, niepokrajana lemieszem albo nieporuszona motyk&#261;, wydaje same tylko chwasty; tak d&#322;uga pomy&#347;lno&#347;&#263; podsyca wyst&#281;pki. Bo w skutek d&#322;ugiej pomy&#347;lno&#347;ci gnu&#347;nieje umys&#322;, os&#322;abia si&#281; do cnoty zapa&#322;. Nie r&#243;wnie wi&#281;cej ludzi zgin&#281;&#322;o z rozkoszy ni&#380; z przeciwno&#347;ci, z dostatku ni&#380; z g&#322;odu, z u&#347;miech&#243;w losu ni&#380; z jego kolc&#243;w. Na przeciwno&#347;ciach zyskuje szcz&#281;&#347;cie. Nie nale&#380;y uwa&#380;a&#263; za nieszcz&#281;&#347;liwego; kto ze swego nieszcz&#281;&#347;cia jest zadowolony. Na co si&#281; wszystko przyda, je&#347;li pomy&#347;lnym rzeczy obrotem, jakiego wci&#261;&#380; doznajesz, sp&#322;aca ci tu niebo zas&#322;ugi twoje, tak, &#380;e nie masz si&#281; czego spodziewa&#263; w przysz&#322;o&#347;ci? Je&#347;li jakie, to to zaprawd&#281; nieszcz&#281;&#347;cie jest najwi&#281;ksze: b y &#263;&nbsp;&nbsp;p o z b a w i o n y m&nbsp;&nbsp;n a d z i e i&nbsp;&nbsp;w i e c z n e j&nbsp;&nbsp;n a g r o d y. Je&#347;li dwojakie niebo nale&#380;y do marze&#324;, to kt&#243;&#380;by pragn&#261;&#322; by&#263; tu wie&#324;czonym r&#243;&#380;ami: skoroby si&#281; musia&#322; l&#281;ka&#263; cierni w wieczno&#347;ci? T u&nbsp;&nbsp;p a l,&nbsp;&nbsp;t u&nbsp;&nbsp;s i e c z <sup>1</sup>. Kto nic tu nie cierpi, ten tam b&#281;dzie cierpia&#322;.',
                        'description3' => '1) &#346;. Augustyn.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0204',
                        'name' => 'IV Lutego',
                        'content' => 'O wykorzenianiu &#380;&#261;dz niedobrych.',
                        'author' => '&#8222;Niew&#322;a&#347;ciwie na modlitw&#281; po&#347;wi&#281;ca si&#281; trud, kt&#243;ry na u&#347;mierzenie &#380;&#261;dz niedobrych winien by&#263; po&#347;wi&#281;cony.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => '&#379;&#261;dze niedobre nale&#380;y ze siebie wykorzenia&#263;, aby nie mog&#322;y nam szkodzi&#263;. Jak ciernie, dop&#243;ki si&#281; nie wykorzeni&#261;, chocia&#380; podci&#281;te, nieznacznie wzrastaj&#261;; tak i wady, dop&#243;ki siln&#261; r&#281;k&#261; cnoty nie zostan&#261; ca&#322;kiem usuni&#281;te, zawsze niebezpiecze&#324;stwem gro&#380;&#261;. I niedosy&#263; jest pozby&#263; si&#281; w cz&#281;&#347;ci jakiej&#347; &#380;&#261;dzy, ale nale&#380;y j&#261; ca&#322;kiem w sobie umorzy&#263;. Jak zwierz zraniony staje si&#281; niebezpieczniejszym; tak i &#380;&#261;dza na wp&#243;&#322; tylko umorzona, gwa&#322;towniej nami wstrz&#261;sa, silniej do jej zaspokojenia nas pobudza. Ogie&#324;, je&#347;li si&#281; niewielk&#261; ilo&#347;ci&#261; wody gasi, tem wi&#281;kszym p&#322;omieniem wybucha. Rzecz jaka, aby by&#322;a dobra, musi by&#263; pod ka&#380;dym wzgl&#281;dem dobra. I po u&#347;mierzeniu jednej &#380;&#261;dzy, nie pogr&#261;&#380;aj si&#281; w pokoju, s&#261; inne, kt&#243;re ci&#281; zgubi&#261;. Nie wiele zrobisz, gdy jedn&#261; albo dwie umorzysz; skoro jest wi&#281;cej. Obawiaj si&#281; i najniepozorniejszej. Pobyt i pomi&#281;dzy niewieloma nieprzyjacio&#322;mi, bezpiecze&#324;stwa nie przedstawia. Wystarcza jeden, aby ci&#281; pokona&#322;. &#321;atwiej jest modli&#263; si&#281;, ni&#380; zwyci&#281;&#380;a&#263; siebie; ale o ile jedna rzecz jest &#322;atwiejsz&#261;, o tyle druga chwalebniejsz&#261;: nadto, nikt nie b&#281;dzie m&#281;&#380;em wielkiej modlitwy, kto si&#281; nie stanie m&#281;&#380;em r&#243;wnie&#380; wielkiego umartwienia.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0205',
                        'name' => 'V Lutego',
                        'content' => 'O unikaniu z&#322;ych.',
                        'author' => '&#8222;Strze&#380; si&#281; przebywa&#263; z tym, nawet przez noc jedn&#261;, o kt&#243;rym wiesz, &#380;e dusza jego grzechem ci&#281;&#380;kim splamion&#261; zosta&#322;a.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Jak si&#281; tylko dusza na grzech zgadza, zaraz si&#281; od Boga oddala, i wi&#281;ksza przestrze&#324; otwiera si&#281; pomi&#281;dzy Bogiem a grzesznikiem; ni&#380; jest pomi&#281;dzy niebem a ziemi&#261;. A skoro si&#281; B&#243;g tak od grzesznika oddala, tak przed nim stroni, jakim&#380;e sposobem ty m&#243;g&#322;by&#347; z nim przebywa&#263;? Im wi&#281;ksza w sercu twojem p&#322;onie mi&#322;o&#347;&#263; ku Bogu, tem silniej zabole&#263; winiene&#347;, na my&#347;l, &#380;e przedmiot twej mi&#322;o&#347;ci zosta&#322; obra&#380;ony, zniewa&#380;ony. Przyjaciel Boga, nieprzyjaci&#243;&#322; jego przyjacielem by&#263; nie mo&#380;e. Boga-by nie mi&#322;owa&#322;, gdyby tak&#261; przyja&#378;&#324; utrzymywa&#322;. Z kim przystajemy, takimi si&#281; stajemy; &#378;li, nawet pomimo woli, drugim swoje b&#322;&#281;dy narzucaj&#261;. Rzecz&#261; jest do&#347;wiadczeniem ztwierdzon&#261;, &#380;e nie r&#243;wnie &#322;atwiej rady i nawyknienia przyjmuje od z&#322;ego dobry, ni&#380; od dobrego z&#322;y. Jak z cz&#322;owiekiem zapowietrzonym niktby roztropny nie mieszka&#322;, tak wszelka przyja&#378;&#324; i stosunek winny by&#263; zerwane z tym, kt&#243;ry przez grzech sta&#322; si&#281; obrzydzeniem Bogu, Anio&#322;om i wszystkim cnotliwym.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0206',
                        'name' => 'VI Lutego',
                        'content' => 'O nieodk&#322;adaniu poprawy.',
                        'author' => '&#8222;Na drugi miesi&#261;c lub na rok nast&#281;pny odk&#322;adasz twe zaj&#281;cia; ale&#380; dla Boga! zk&#261;d tak d&#322;ugiego &#380;ycia masz pewno&#347;&#263;?&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Codzienne przyk&#322;ady &#347;wiadcz&#261; o znikomo&#347;ci ludzkiej, a my niebaczni na tak nietrwa&#322;ym fundamencie, jakich&#380;e gmach&#243;w nie stawiamy! Nikt sobie na pewno jutra obiecywa&#263; nie mo&#380;e, a wi&#281;c tak &#380;y&#263; nale&#380;y, jakby&#347;my dzisiaj umrze&#263; mieli. W sprawie zbawienia nic nie potrzeba odk&#322;ada&#263;: uchodzi &#380;ycie, a razem z niem i czas zas&#322;ugi: zwi&#324; wi&#281;c &#380;agle, u&#347;mierz nami&#281;tno&#347;ci i &#380;yj jak nale&#380;y dzisiaj. Poniewa&#380; nie jeste&#347; pewny, co dzie&#324; jutrzejszy przyniesie, dzi&#347; pracuj nad zbawieniem twojem. Co si&#281; zaraz uskutecznia, to na podw&#243;jn&#261; zas&#322;uguje pochwa&#322;&#281;: i&nbsp;&nbsp;c z y n u&nbsp;&nbsp;i&nbsp;&nbsp;p o &#347; p i e c h u; co si&#281; odk&#322;ada, to traci jedn&#261; i drug&#261;. W &#380;adnej sprawie na imi&#281; wielkiego nikt nie zas&#322;u&#380;y, kto z Aleksandrem za norm&#281; swego post&#281;powania nie przyjmie: n i e&nbsp;&nbsp;o d k &#322; a d a j&nbsp;&nbsp;n a&nbsp;&nbsp;j u t r o,&nbsp;&nbsp;c o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;d a&nbsp;&nbsp;d z i &#347;&nbsp;&nbsp;u s k u t e c z n i &#263;. Ani kwiat tak jest nietrwa&#322;ym, ani szk&#322;o tak kruchem; jak nadzieja d&#322;ugiego &#380;ycia. Od lekkiego podmuchu kwiat spada, za lada uderzeniem szk&#322;o si&#281; t&#322;uczy; ale tysi&#261;ce r&#243;&#380;nych okoliczno&#347;ci w jednym dniu &#380;ycia nas pozbawi&#263; mog&#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0207',
                        'name' => 'VII Lutego',
                        'content' => 'O potrzebie pomocy.',
                        'author' => '&#8222;Gdy kto jest napastowany, niech zawsze ma kogo&#347; do pomocy.&#8221;',
                        'description' => '(S. Ignat. apud Ribad. l. 5).',
                        'description2' => 'Pierwszem staraniem walcz&#261;cych jest mie&#263; sprzymierze&#324;c&#243;w. Biada jednemu! gdy upada, nie ma ktoby go podtrzyma&#322;; na w&#322;asny rozs&#261;dek lub na w&#322;asne si&#322;y licze&#263;, nietylko jest zarozumia&#322;o&#347;ci&#261;, ale zarazem i upadku pocz&#261;tkiem &#8212; co tyle smutnych przyk&#322;ad&#243;w pokazuje. Im silniejszy i przebieglejszy jest nieprzyjaciel, z kt&#243;rym walczy&#263; mamy, tem mniej dowierza&#263; nale&#380;y si&#322;om w&#322;asnym; o pomoc koniecznie postara&#263; si&#281; potrzeba. Nieprzyjacielem naszym jest szatan, mocy nies&#322;ychanej; kt&#243;&#380;by si&#281; wa&#380;y&#322; sam z nim &#347;ciera&#263;? Dusza pobo&#380;na, gdy jej walczy&#263; przychodzi, pr&#243;cz &#347;wiat&#322;a, jakie posiada, o nowe z nieba prosi; w kt&#243;re zaopatrzona, nie tak si&#281; l&#281;ka podst&#281;p&#243;w chytrego nieprzyjaciela, mocniejsz&#261; si&#281; czuje. Ksi&#261;&#380;e ciemno&#347;ci, &#347;wiat&#322;a nie nawidzi; gdy spostrze&#380;e, &#380;e jego zamiary na jaw wychodz&#261;, ucieka; i jak podkopy, gdy zostaj&#261; wykryte; tak wszystkie jego zamys&#322;y, gdy zostaj&#261; ujawnione, si&#322;&#281; trac&#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0208',
                        'name' => 'VIII Lutego',
                        'content' => 'O wyzuciu si&#281; z chwiejno&#347;ci.',
                        'author' => '&#8222;Je&#347;li chcesz wiedzie&#263;, czego od ciebie B&#243;g chce, to potrzeba, aby&#347; si&#281; wprz&#243;d wyzu&#322; ze wszelkiej nami&#281;tno&#347;ci i chwiejno&#347;ci.&#8221;',
                        'description' => '(S. Ignat. in exercit. hebdom. 2).',
                        'description2' => 'Podczas ciszy zwykle B&#243;g przemawia, nie podczas zgie&#322;ku; gdzie wre nami&#281;tno&#347;&#263; lub trwa wahanie si&#281;, tam mowa Bo&#380;a nie dochodzi, tam na ni&#261; uwagi nie zwracaj&#261;. Na ustronie B&#243;g zaprasza dusz&#281;, gdy do niej chce m&#243;wi&#263;. Ustroniem tem jest nieco innego, tylko serce. Wtedy ona najlepiej s&#322;yszy g&#322;os umi&#322;owanego, gdy si&#281; z nim w tem ustroniu sam na sam rozmawia. Gdy co&#347; czyni&#263; zamy&#347;lasz, do Boga si&#281; zwracaj, na nim swe zamiary opieraj &#8212; wszystko inne jest zawodne &#8212; &#322;echce, ale do czasu, pomaga, ale nie zawsze. Ka&#380;dy wyb&#243;r winien by&#263; ostro&#380;ny, ale ten najostro&#380;niejszy, od kt&#243;rego zale&#380;y wieczno&#347;&#263;. Wzgl&#281;du tu mie&#263; nie mo&#380;na, ani na krew, ani na cia&#322;o, ani na jakiekolwiek przyzwyczajenie. &#346; w i a t &#322; a&nbsp;&nbsp;n i e b i e s k i e g o&nbsp;&nbsp;p o t r z e b a&nbsp;&nbsp;i&nbsp;&nbsp;c h &#281; t n e j&nbsp;&nbsp;k u&nbsp;&nbsp;d o b r e m u&nbsp;&nbsp;w o l i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0209',
                        'name' => 'IX Lutego',
                        'content' => 'O baczno&#347;ci w mowie.',
                        'author' => '&#8222;Nigdy nic nie czy&#324; i nie m&#243;w, dop&#243;ki pierwiej nie wyrozumiesz, czy si&#281; to podoba Bogu, czy b&#281;dzie z twoim po&#380;ytkiem i bli&#378;niego zbudowaniem.&#8221;',
                        'description' => '(S. Ignat. apud Lyr.)',
                        'description2' => 'Jak ludzkiej, tak i Boskiej m&#261;dro&#347;ci wyrazem jest j&#281;zyk. Kto si&#281; nim dobrze pos&#322;ugiwa&#263; umie, ten zaiste mistrzem jest w jednej i w drugiej. Sztuka-to ze wszystkich najtrudniejsza. Nie potykanie si&#281; w mowie, to doskona&#322;o&#347;&#263;. Ka&#380;da sztuka ma swoje przepisy; dla sztuki dobrego m&#243;wienia ten przepis jest nieodzowny: nim s&#322;owo wym&#243;wisz, pierwiej z trzech stron je obejrzyj; to jest, c z y&nbsp;&nbsp;B o g a&nbsp;&nbsp;n i e&nbsp;&nbsp;o b r a z i,&nbsp;&nbsp;c z y&nbsp;&nbsp;t o b i e&nbsp;&nbsp;l u b&nbsp;&nbsp;b l i &#378; n i e m u&nbsp;&nbsp;n i e&nbsp;&nbsp;z a s z k o d z i? Gdyby&#347;my na ten przepis zwa&#380;ali, o wiele mniej, ale o wiele lepiejby&#347;my m&#243;wili. Dziwna rzecz! milcze&#263; &#322;atwiej jest ni&#380; m&#243;wi&#263;. Milczenie rzadko szkodzi, mowa bardzo cz&#281;sto. A jednak nader nie wielu jest, kt&#243;rzy milcze&#263; wol&#261;; natura zawsze przechyla si&#281; ku z&#322;emu. Gdy zwa&#380;asz, co tobie, co bli&#378;niemu, co czci Boskiej jest odpowiedniejsze; r&#243;&#380;nisz si&#281; tem od zwierz&#281;cia. B&#243;g nas obdarzy&#322; rozumem nie w innym, tylko w tym celu, by m&#243;w i czyn&#243;w naszych by&#322; kierownikiem, by nam swem &#347;wiat&#322;em przy&#347;wieca&#322; i od zboczenia na bezdro&#380;a chroni&#322;!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0210',
                        'name' => 'X Lutego',
                        'content' => 'O niewywy&#380;szaniu si&#281;.',
                        'author' => '&#8222;Kto s&#322;u&#380;&#261;c Bogu chce wielkich rzeczy dokona&#263;, niech na to szczeg&#243;lniej zwa&#380;a, aby o sobie wiele nie rozumia&#322;.&#8221;',
                        'description' => '(S. Ignat. in vita l. 4).',
                        'description2' => 'Pokora ducha, jak w&#322;asnego tak i obcego, jest fundamentem w post&#281;pie na drodze cnoty; cokolwiek si&#281; bez niej buduje, to nie na po&#380;ytek, ale na szkod&#281; idzie. Ta cnota ma to do siebie, &#380;e si&#281; brzydzi wy&#380;ynami; ch&#281;tniej lgnie do nizin, podoba sobie w r&#243;wninach. B&#243;g jest szczytem, ale nie inaczej na&#324; wejdziesz, tylko przez zni&#380;anie si&#281;. Nie to jest dobre, co jest wielkie; ale to jest wielkie, co jest dobre. Tego B&#243;g wi&#281;cej ceni, kto sam siebie mniej; tego &#322;ask&#261; swoj&#261; nape&#322;nia, kogo bardziej uni&#380;onym znajdzie. Z&nbsp;&nbsp;p o k o r n y m i&nbsp;&nbsp;t r z y m a,&nbsp;&nbsp;p o k o r n y m&nbsp;&nbsp;d o p o m a g a <sup>1</sup>. Gdy my si&#281; uni&#380;amy, to wywy&#380;sza si&#281; B&#243;g, kt&#243;ry chwa&#322;y swojej komu innemu nie dawa; i tem bardziej si&#281; wywy&#380;sza, im si&#281; my bardziej z mi&#322;o&#347;ci ku Niemu uni&#380;amy.',
                        'description3' => '1) &#346;. &#321;ukasz 1, 31.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0211',
                        'name' => 'XI Lutego',
                        'content' => 'O korzy&#347;ciach z pos&#322;usze&#324;stwa.',
                        'author' => '&#8222;Roztropno&#347;&#263; nie tyle s&#322;uchaj&#261;cego, ile rozkazuj&#261;cego cechowa&#263; powinna.&#8221;',
                        'description' => '(S. Ignat.)',
                        'description2' => 'Nie ma wi&#281;kszej roztropno&#347;ci nad t&#281;, kt&#243;ra cz&#322;owieka od b&#322;&#281;du zabezpiecza; jest to roztropno&#347;&#263;, poza kt&#243;r&#261; daremnieby&#347;my szukali doskonalszej: ten co s&#322;ucha, bez trudu jej nabywa. &#379;adna umiej&#281;tno&#347;&#263; takiej nie zapewnia nieomylno&#347;ci, jak&#261; zapewnia pos&#322;usze&#324;stwo. Kt&#243;&#380; nie zrozumie tego wyra&#380;enia: s &#322; u c h a &#263;&nbsp;&nbsp;p o t r z e b a, kt&#243;&#380; si&#281; omyli, gdy je spe&#322;ni? Przed wzgl&#281;dami ludzkiemi winny by&#263; stawiane Boskie. Je&#347;li si&#281; ten porz&#261;dek naruszy, i raz droga do wym&#243;wek si&#281; otworzy; to ca&#322;a si&#322;a pos&#322;usze&#324;stwa zginie. Jest-to roztropno&#347;&#263; cia&#322;a, kt&#243;ra czycha na os&#322;abienie pos&#322;usze&#324;stwa, kt&#243;ra tysi&#261;czne stawia powody, aby si&#281; uchyli&#322;a od jakiego czynu, jej widokom przeciwnego.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0212',
                        'name' => 'XII Lutego',
                        'content' => 'O budowaniu si&#281; wzajemnem.',
                        'author' => '&#8222;W domu dobrze urz&#261;dzonym starzy winni by&#263; jak m&#322;odzi, a m&#322;odzi jak starzy; w starych winna si&#281; objawia&#263; m&#322;odzie&#324;cza ochoczo&#347;&#263;, w m&#322;odych latami wypr&#243;bowana dojrza&#322;o&#347;&#263;.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => 'Starzec jak z jednej strony s&#322;usznie si&#281; domaga uszanowania od m&#322;odego, tak z drugiej strony m&#322;odemu wiele winien: a mianowicie przyk&#322;ad &#380;ycia doskona&#322;ego; kogo latami przewy&#380;sza, tego i pobo&#380;no&#347;ci&#261; winien przechodzi&#263;. Staro&#347;&#263; jest dla drugich wzorem, na ni&#261; si&#281; zapatruj&#261;, z niej wiele sobie przyswajaj&#261;. Ci&#281;&#380;ej grzeszy stary, ni&#380; m&#322;ody; tego win&#281; albo niewiadomo&#347;&#263; wymawia, albo porywczo&#347;&#263; natury zmniejsza. Starca oskar&#380;a wszystko: wiek, do&#347;wiadczenie, blizko&#347;&#263; &#347;mierci, wzgl&#261;d przyk&#322;adu. Rzadko kiedy sami grzesz&#261; starcy, zwykle ci&#261;gn&#261; za sob&#261; m&#322;odych: kt&#243;&#380; bowiem m&#243;g&#322;by o to obwinia&#263; m&#322;odzie&#324;ca, co si&#281; toleruje w starym? Ilu w zgromadzeniu starc&#243;w, tylu post&#281;powania mistrz&#243;w; g&#322;os ich czyny, przyk&#322;ady s&#261; przepisami. Wiele od starca skorzysta m&#322;odzieniec, je&#347;li si&#281; nauczy swe zachcianki poskramia&#263;, sw&#261; porywczo&#347;&#263; hamowa&#263;, sw&#261; lekkomy&#347;lno&#347;&#263; dojrza&#322;o&#347;ci&#261; miarkowa&#263;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0213',
                        'name' => 'XIII Lutego',
                        'content' => 'O potrzebie roztropno&#347;ci.',
                        'author' => '&#8222;Bardziej po&#380;&#261;dana jest roztropno&#347;&#263; ze &#347;redni&#261; &#347;wi&#261;tobliwo&#347;ci&#261;, ni&#380; z mniejsz&#261; roztropno&#347;ci&#261; wi&#281;ksza &#347;wi&#261;tobliwo&#347;&#263;.&#8221;',
                        'description' => '(S. Ignat. vitae l. 5).',
                        'description2' => 'Tem wi&#281;cej wiedzie&#263; powiniene&#347;, im wa&#380;niejsz&#261; jest rzecz, oko&#322;o kt&#243;rej piecz&#281; na siebie przyj&#261;&#322;e&#347;. Lepiej rz&#261;dzi przezorno&#347;&#263; ni&#380; przemoc; i wi&#281;cej dokonuje pilno&#347;&#263;, ni&#380; mog&#261; si&#322;y: aby&#347; dobrze rozkazywa&#322; innym, rozum niech rozkazuje tobie. Nie s&#322;usznie jednak nazywaj&#261; roztropno&#347;ci&#261;, co jest chytro&#347;ci&#261;; to rozkazowi nie pomaga, ale mu szkodzi: podst&#281;py, gdy si&#281; wykryj&#261;, zamiast uleg&#322;o&#347;ci, o kt&#243;r&#261; chodzi&#322;o, pogard&#281; wzbudzaj&#261;. S&#322;ab&#261; rz&#261;du podpor&#261; jest udawanie, poz&#243;r roztropno&#347;ci. Kogo o nieszczero&#347;&#263; podejrzywa podw&#322;adny, z r&#243;wn&#261; usi&#322;uje wyst&#261;pi&#263; broni&#261;, i za podejrzane uwa&#380;a wszystko, nawet rzeczy od tej szpetnej cechy ca&#322;kiem wolne. Co&#347; zamilcze&#263;, cz&#281;sto wypada, ale zmy&#347;la&#263; nigdy. Ten tylko roztropny, kto dobry; na pochwa&#322;&#281; ta tylko roztropno&#347;&#263; zas&#322;uguje, kt&#243;ra wszystko, wed&#322;ug praw odwiecznej M&#261;dro&#347;ci rozrz&#261;dza. Czysto ludzka roztropno&#347;&#263; i jej usi&#322;owania s&#261; zawodne. K t &#243; &#380;&nbsp;&nbsp;b y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;b e z p i e c z n i e&nbsp;&nbsp;o p i e r a &#322;&nbsp;&nbsp;n a&nbsp;&nbsp;t r z c i n i e?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0214',
                        'name' => 'XIV Lutego',
                        'content' => 'O gotowo&#347;ci do s&#322;uchania.',
                        'author' => '&#8222;Winnicy Pa&#324;skiej uprawiacze jedn&#261; tylko nog&#261; na ziemi sta&#263;, a drug&#261; podniesion&#261; do drogi mie&#263; winni.&#8221;',
                        'description' => '(S. Ignat. in Epist. Gosw. Nikl.)',
                        'description2' => 'Odk&#322;adanie jest cech&#261; niechc&#261;cego zrobi&#263;. Oci&#261;gaj&#261;cy si&#281; z pos&#322;usze&#324;stwem stoi niemal na r&#243;wni z odmawiaj&#261;cym pos&#322;usze&#324;stwa; przeciwnie, jak dwa razy daje, kto zaraz daje; tak na podw&#243;jn&#261; nagrod&#281; zas&#322;uguje, kto zaraz s&#322;ucha. Jak&#380;e cz&#281;sto szkodzi&#322;a zw&#322;oka. Nieraz zbawienie od jednej chwili zale&#380;y. Gdzie szkody s&#261; niewielkie, tam zw&#322;oka czasami mo&#380;e by&#263; uwzgl&#281;dniona; ale gdzie chodzi o dusz&#281;, gdzie jej zbawienie wystawia si&#281; na niebezpiecze&#324;stwo, tam &#380;adna kara zw&#322;ok i dostatecznie nie zmyje. Gotowo&#347;&#263; do s&#322;uchania jest cech&#261; cnoty dojrza&#322;ej; oznacza serce od wszelkiej sk&#322;onno&#347;ci wolne, jedynie ku pe&#322;nieniu woli Bo&#380;ej zwr&#243;cone &#8212; oznacza m&#281;&#380;a w doskona&#322;o&#347;ci znacznie posuni&#281;tego. &#321; a s k a&nbsp;&nbsp;D u c h a&nbsp;&nbsp;&#346; w i &#281; t e g o&nbsp;&nbsp;o p i e s z a &#322; o &#347; c i&nbsp;&nbsp;n i e&nbsp;&nbsp;z n a: do post&#261;pienia w cnocie nie ma pewniejszej i szybszej drogi nad gotowo&#347;&#263; w natychmiastowem spe&#322;nieniu woli rozkazuj&#261;cego.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0215',
                        'name' => 'XV Lutego',
                        'content' => 'O posiadaniu Boga.',
                        'author' => '&#8222;Kto posiada Boga, temu nic nie brakuje, chocia&#380;by wszystkiego by&#322; pozbawiony.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Zysk zadziwiaj&#261;cy, droga do zbogacenia si&#281; niezmiernie &#322;atwa: n i e w i e l e&nbsp;&nbsp;p o &#380; &#261; d a &#263;. Posi&#261;dziemy wszystko, je&#347;li szuka&#263; b&#281;dziemy jednego. Skarb szczeg&#243;lny! ale si&#281; nam wtedy dopiero dostaje, gdy tracimy wszystko. &#321;atwo jest sta&#263; si&#281; bogatym; &#380;e jeste&#347;my biedni, sprawiaj&#261; to nasze nami&#281;tno&#347;ci: otrz&#261;&#347;nijmy si&#281; z nich, a ub&#243;stwo przestanie nam ci&#261;&#380;y&#263;. Dop&#243;ki znosimy nami&#281;tno&#347;ci, dop&#243;ty jeste&#347;my sami dla siebie niezno&#347;ni. B&#322;ogos&#322;awiona zamiana: ma&#322;o, owszem, prawie nic nie da&#263;, a skarb nieoceniony otrzyma&#263;! Je&#347;li z&#322;oto mam, c&#243;&#380; mam i na jak d&#322;ugo? Je&#347;li Boga posiadam, czego&#380; nie mam i na jaki&#380; czas? Z rozumu jest obrany, kto si&#281; kropelk&#261; z ka&#322;u&#380;y zasyca, je&#347;li ma przed sob&#261; niezmierne morze najczystszej rozkoszy. Komu&#380;by z trudno&#347;ci&#261; przychodzi&#322;o nie smakowa&#263; w grochu, skoro przed nim jest manna?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0216',
                        'name' => 'XVI Lutego',
                        'content' => 'O przek&#322;adaniu Boga nad bogactwa.',
                        'author' => '&#8222;Chocia&#380;by bez &#380;adnego dodatku, jedynie ze wzgl&#281;du na chwa&#322;&#281; Boga, dla tem wi&#281;kszego na&#347;ladowania Jezusa Chrystusa, wybra&#263; nale&#380;y razem z Nim raczej ub&#243;stwo, wzgard&#281; i nazw&#281; niem&#261;drego; ni&#380; bogactwa, zaszczyty, z nazw&#261; uczonego.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => 'Jak silnym do uczenia si&#281; bod&#378;cem jest wielko&#347;&#263; mistrza, tak ufanie jego s&#322;owom jest cech&#261; dobrego ucznia. Czyjej s&#322;uchasz nauki, &#347;wiata, czy Chrystusa? Uczonymi stajemy si&#281;, gdy za powag&#261; uczonych idziemy, a zdania, ich zdaniom przeciwne, odrzucamy. Czemu&#380; u niekt&#243;rych z nas mniej wagi znajduje Chrystus, ni&#380; w rzeczach przyrodzonych Arystoteles, a w teologicznych Tomasz z Akwinu? Co pom&#243;g&#322; z&#322;emu bogaczowi dostatek? Herodowi pycha? Wiele za&#347; pomog&#322;o &#321;azarzowi ub&#243;stwo <sup>1</sup>, celnikowi pokora. K o n i e c&nbsp;&nbsp;s t a n o w i&nbsp;&nbsp;o&nbsp;&nbsp;w s z y s t k i e m. Podobie&#324;stwo obyczaj&#243;w zbli&#380;a do siebie ludzi, wi&#261;&#380;e ich ze sob&#261; mi&#322;o&#347;ci&#261;, staje si&#281; tej mi&#322;o&#347;ci matk&#261;. Tylko ten w sobie podobnych podobne obyczaje ujrzy, kto si&#281; do obyczaj&#243;w i rad Chrystusa najbardziej zastosuje. Mi&#322;o&#347;&#263; bowiem albo sobie podobnych znajduje, albo ich wytwarza.',
                        'description3' => '1) &#346;. &#321;ukasz 16, 22.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0217',
                        'name' => 'XVII Lutego',
                        'content' => 'O niezdradzaniu tajemnicy.',
                        'author' => '&#8222;Cokolwiek w tajemnicy m&#243;wisz, tak m&#243;w, jakby&#347; wobec ca&#322;ego &#347;wiata m&#243;wi&#322;.&#8221;',
                        'description' => '(S. Ignat. apud Nolarci).',
                        'description2' => 'Zawodn&#261; jest wiara ludzka; niejeden ci przyrzeka, ale s&#322;owa nie dotrzymuje, pomimo &#380;e pod przysi&#281;g&#261; dotrzyma&#263; przyrzek&#322;. Tajemnica, o kt&#243;r&#261; ci tak chodzi&#322;o, na jaw wychodzi, tem pr&#281;dzej, im bardziej wtajemniczonego do milczenia zobowi&#261;za&#322;e&#347;. Je&#347;li chcesz, aby wszystko pozosta&#322;o w skryto&#347;ci, sam nie wyjawiaj i przyk&#322;adem nie ucz, co drugi ma czyni&#263;. Napr&#243;&#380;no s&#322;owami wk&#322;adasz obowi&#261;zek milczenia, je&#347;li przyk&#322;adem upowa&#380;niasz do wyjawienia: jak ty, tak i drugi swego ma przyjaciela, kt&#243;remu co&#347; powierzy&#263; mo&#380;e. Najmniej dowierza&#263; nale&#380;y kobietom i dzieciom: jedne i drugie s&#261; nadzwyczaj ciekawe i nadzwyczaj gadatliwe. Gdzie mniej roztropno&#347;ci, tam wi&#281;cej jest gadatliwo&#347;ci. Zachowanie tajemnicy nietylko jest rzecz&#261; roztropno&#347;ci, ale cz&#281;sto i sumienia. Wi&#281;kszego depozytu nad tajemnic&#281; nie ma, je&#347;li chcesz, aby na jaw nie wysz&#322;a, sam pierwszy jej nie wyjawiaj.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0218',
                        'name' => 'XVIII Lutego',
                        'content' => 'O zachowaniu regu&#322;y.',
                        'author' => '&#8222;Ci co zakonnik&#243;w u&#380;ywaj&#261; do parafialnych pos&#322;ug, z uszczerbkiem ich regu&#322;y; podobnie czyni&#261;, jakby dla zerwania owocu, obalali drzewo.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Zbawieniem innych asceta tak si&#281; zajmowa&#263; powinien, aby swojemu nie przynosi&#322; szkody. Bo i lekarz naprz&#243;d o sobie my&#347;li, gdy si&#281; do leczenia jakiej zara&#378;liwej choroby zabiera, i tak sobie radzi, tak si&#281; o ile mo&#380;e zabezpiecza, aby sam zarazie nie uleg&#322;. Kto sam przez si&#281;, kto wcze&#347;niej ni&#380; wiek na to pozwala, kto nad sw&#243;j obowi&#261;zek, narzuca si&#281; bli&#378;niemu z piecz&#261;; ten zazwyczaj wi&#281;cej szkody, ni&#380; po&#380;ytku odnosi; swoje zbawienie nara&#380;a i drugiego nie pozyskuje. Regu&#322;a dla zakonnika jest dusz&#261;; w miar&#281; jak od niej odst&#281;puje, &#380;ycie utraca, trupem si&#281; niejako staje, inaczej wszystko czyni ni&#380; by&#322; powinien; dla siebie szkodliwy, dla swoich niezno&#347;ny, dla obcych niepo&#380;yteczny. W tych rzeczach, kt&#243;re do twego powa&#322;ania nale&#380;&#261;, B&#243;g pob&#322;ogos&#322;awi; ale w innych tego b&#322;ogos&#322;awie&#324;stwa si&#281; nie spodziewaj. Gdyby B&#243;g chcia&#322;, aby&#347; co innego czyni&#322;, by&#322;by ci&#281; tu nie powo&#322;a&#322;. Odst&#281;powa&#263; od regu&#322;y, jestto przyst&#281;powa&#263; do b&#322;&#281;du, ze wszystkich najci&#281;&#380;szego.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0219',
                        'name' => 'XIX Lutego',
                        'content' => 'O stosowaniu si&#281; do drugich.',
                        'author' => '&#8222;Kto chce spraw&#281; przez siebie rozpocz&#281;t&#261; szcz&#281;&#347;liwie przeprowadzi&#263;, powinien nie spraw&#281; do siebie, ale siebie do sprawy stosowa&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden. l. 5).',
                        'description2' => 'Wiele zarozumia&#322;o&#347;ci i nie&#347;wiadomo&#347;ci okazuje, kto wszystko wed&#322;ug swej woli urz&#261;dza&#263; zamierza. Zarozumia&#322;o&#347;ci&#261; sobie szkodzi, nie&#347;wiadomo&#347;ci&#261; drugim; bo si&#281; i szcz&#281;&#347;liwego obrotu sprawy pozbawia, i siebie samego na szpetny upadek nara&#380;a. Roztropny lekarz naprz&#243;d puls bada, natur&#281; chorego obserwuje; potem dopiero o zapisaniu lekarstwa my&#347;li, wiedz&#261;c z do&#347;wiadczenia, &#380;e co jednemu pomaga, to drugiemu szkodzi, chocia&#380;by obadwa tej samej chorobie podlegali. Nie mniejsza ostro&#380;no&#347;&#263; zachowywa&#263; si&#281; winna i w leczeniu duszy. W s z y s t k i e m&nbsp;&nbsp;d l a&nbsp;&nbsp;w s z y s t k i c h&nbsp;&nbsp;s t a &#263;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;m u s i a &#322;&nbsp;&nbsp;A p o s t o &#322; <sup>1</sup>, nim na narod&#243;w nauczyciela zas&#322;u&#380;y&#322; nazw&#281;. Jak kopyto do nogi, nie nog&#281; do kopyta stosuje rzemie&#347;lnik, tak si&#281; do ludzi winien stosowa&#263; nauczyciel. W wyborze &#347;rodk&#243;w nie na ich cenno&#347;&#263;, niech zwa&#380;a, nie o ile mu s&#261; mi&#322;e, ale o ile celowi odpowiednie; inaczej m&#243;g&#322;by zaszkodzi&#263; zamiast pom&#243;dz.',
                        'description3' => '1) I. Kor. 9, 22.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0220',
                        'name' => 'XX Lutego',
                        'content' => 'O miarkowaniu si&#281; w kontemplacyi.',
                        'author' => '&#8222;Do&#347;wiadczenie mnie nauczy&#322;o, &#380;e ci kt&#243;rzy si&#281; nad miar&#281; d&#322;ugim kontemplacyom oddaj&#261;, raczej si&#281; na omamienia szta&#324;skie wystawiaj&#261;, ni&#380; przed niemi zabezpieczaj&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'B&#322;&#261;dzi, kto rad obcych nie przyjmuje, ale wy&#322;&#261;cznie siebie samego s&#322;ucha. &#346;wi&#281;to&#347;&#263; z zarozumia&#322;o&#347;ci&#261; w parze nie chodz&#261;; bo kto jest zarozumia&#322;y, ten nie jest pokorny. A tymczasem nie kontemplacya, lecz pokora jest niezawodn&#261; cech&#261; cnoty. Kontemplacya, kt&#243;rej si&#281; nad miar&#281; oddajesz, tobie si&#281; podoba, nie Bogu; korzy&#347;ci z niej nie wiele, podsyca tylko zarozumia&#322;o&#347;&#263;, bli&#380;sz&#261; jest pr&#243;&#380;nowania, ni&#380; czynno&#347;ci. Owo zadowolenie z siebie, jakie ze wznios&#322;o&#347;ci kontemplacyi powstaje, dostateczn&#261; jest wskaz&#243;wk&#261;, za czyj&#261; si&#281; rad&#261; przedsi&#281;bierze &#8212; za tego mianowicie, kt&#243;ry jest ojcem pychy. Za serafina si&#281; podaje chytry diabe&#322;, szlachetne uczucia rozbudza, szczytne tajemnice przedstawia, do najwy&#380;szych zach&#281;ca; ale na to jedynie, aby tem ci&#281;&#380;szym by&#322; tw&#243;j upadek, i aby&#347; onych liczb&#281; pomno&#380;y&#322;, kt&#243;rzy haniebnie run&#281;li, dlatego, &#380;e pierwiej lata&#263; chcieli, nim si&#281; chodzi&#263; nauczyli. B e z p i e c z n i e j&nbsp;&nbsp;n a&nbsp;&nbsp;d o l e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0221',
                        'name' => 'XXI Lutego',
                        'content' => 'O skrytem dzia&#322;aniu nieprzyjaciela.',
                        'author' => '&#8222;Nigdy z tak&#261; si&#322;&#261; nie wyst&#281;puje przeciwko nam nieprzyjaciel piekielny, jak wtedy, gdy w skryto&#347;ci i potajemnie dzia&#322;a.&#8221;',
                        'description' => '(S. Ignat. in Exerc.)',
                        'description2' => 'C&#243;&#380; naturalniejszego jak w ciemno&#347;ciach b&#322;&#261;dzi&#263;? Kto w sprawach swej duszy sam przed sob&#261; pochodni&#281; niesie, ten za ognikiem b&#322;&#281;dnym post&#281;puje i gdy najbardziej b&#281;dzie potrzebowa&#322; &#347;wiat&#322;a, ujrzy si&#281; go ca&#322;kiem pozbawionym i nad przepa&#347;ci&#261; postawionym. Nie ma schronienia tak warownego, kt&#243;regoby minami nie mo&#380;na by&#322;o zdoby&#263;; i nie ma niebezpiecze&#324;stwa wi&#281;kszego, jak wtedy, gdy kto siebie pewny niebezpiecze&#324;stw si&#281; nie obawia; bo i w jednym momencie upada i upadkiem swym uczy, jak l&#281;ka&#263; si&#281; potrzeba nieprzyjaciela, kt&#243;ry jest w ukryciu. Kogo zbytniem ufaniem sobie, albo odwr&#243;ceniem serca od tych, coby mu pomogli, poci&#261;gn&#281;&#322;o piek&#322;o; tego ju&#380; tak trzyma mocno, i&#380; z trudno&#347;ci&#261; przyjdzie mu si&#281; uchroni&#263; upadku. Pokojem &#322;udzi nieprzyjaciel, aby tem pewniej uderzy&#322;; bo &#380;adne zasadzki nie s&#261; niebezpieczniejsze nad te, kt&#243;re najwi&#281;cej pozornego przedstawiaj&#261; bezpiecze&#324;stwa.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0222',
                        'name' => 'XXII Lutego',
                        'content' => 'O wyrwaniu kogo&#347; z grzechu.',
                        'author' => '&#8222;Aby niedopu&#347;ci&#263;, chocia&#380;by jednego grzechu, warto jest po&#347;wi&#281;ci&#263; trudy i zabiegi, nawet &#380;ycia ca&#322;ego.&#8221;',
                        'description' => '(S. Ignat. apud Biderm. l. 1).',
                        'description2' => 'Bardzo na oczy nie domaga, kto w biednym &#380;ebraku wielkiego skarbu nie widzi: patrzy, ale do g&#322;&#281;bi rzeczy wzrokiem nie si&#281;ga. Ma przed sob&#261; ubog&#261; siermi&#281;g&#281;, i na ni&#261; patrzy, ale skarbu, kt&#243;ry si&#281; pod ni&#261; kryje, nie dostrzega: o perle bardzo kosztownej, o perle, dla kt&#243;rejby ca&#322;y dobytek po&#347;wi&#281;ci&#263; nale&#380;a&#322;o, nie my&#347;li; niepozorna skorupka, t&#281; per&#322;&#281; zawieraj&#261;ca, pozostaje dla niego skorupk&#261;, i niczem wi&#281;cej. Kto zwa&#380;y, czem jest B&#243;g, czem stworzenie, ten &#322;atwo zrozumie, jak ogromn&#261;, jak straszn&#261; jest obraza przez stworzenie wyrz&#261;dzona Bogu. Powstrzyma&#263;, nie dopu&#347;ci&#263; tej obrazy, jestto powstrzyma&#263; i przeszkodzi&#263; niesko&#324;czonemu z&#322;emu. Dusz&#281; nasz&#261; tak wysoko ceni&#322; Chrystus, i&#380; j&#261; w&#322;asn&#261; krwi&#261;, to jest, cen&#261; niesko&#324;czon&#261;, odkupi&#322;: o ile&#380; my taniej j&#261; kupujemy, gdy nawet ca&#322;ego &#380;ycia trudy jej po&#347;wi&#281;camy! Patrz, upadku w grzech, nawet raz jeden, zg&#322;adzi&#263; nie s&#261; zdolne kary piekielne; pomimo, &#380;e do nich wchodzi ogie&#324;, nad kt&#243;ry nie ma nic niezno&#347;niejszego; wieczno&#347;&#263;, nad kt&#243;r&#261; nic d&#322;u&#380;szego! Wyrwa&#263; z takiego niebezpiecze&#324;stwa dusz&#281;, chocia&#380;by zabiegami ca&#322;ego &#380;ycia, jestto za kr&#243;tk&#261; chwil&#281; kupi&#263; niesko&#324;czono&#347;&#263;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0223',
                        'name' => 'XXIII Lutego',
                        'content' => 'O warto&#347;ci cierpie&#324;.',
                        'author' => '&#8222;Pro&#347; Boga, aby&#347; wiele cierpia&#322;; bo komu B&#243;g to da&#322;, temu wiele da&#322;: w tem jednem zawieraj&#261; si&#281; niezliczone jego dobrodziejstwa.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Im bardziej cz&#322;owiek zewn&#281;trzny cierpi, tem bardziej cz&#322;owiek wewn&#281;trzny si&#281; wzmaga; tamtego zwi&#281;kszaj&#261; si&#281; przykro&#347;ci a tego zas&#322;ugi. Rzeczy doczesnych strata stanowi zysk w wieczno&#347;ci. Puklerzem &#380;ycia jest cierpliwo&#347;&#263;; kto przykro&#347;ci nie znosi, niech &#347;wiat opu&#347;ci; bo dop&#243;ki &#380;yje, os&#322;adza&#263; je sobie mo&#380;e, ale unikn&#261;&#263; nie mo&#380;e. Cierpliwo&#347;&#263; dla nieszcz&#281;&#347;liwych jest jakby b&#243;stwem opieku&#324;czem; nie &#380;eby nieszcz&#281;&#347;cia usuwa&#322;a, ale &#380;e je l&#380;ejszemi czyni. Porachuj si&#281; ze sob&#261;, a je&#347;li szczer&#261; prawd&#281; wyzna&#263; zechcesz, jakich&#380;e kar w skutek codziennych b&#322;&#281;d&#243;w winnym si&#281; nie uznasz? D&#322;ugi te sp&#322;aci&#263; nale&#380;y; czyli&#380; nie jest dobrodziejstwem tu je raczej, ni&#380; w czyscu strasznemi m&#281;kami sp&#322;aca&#263;? Cho&#263;by&#347; by&#322; jak anio&#322; i nie mia&#322; grzechu; krzy&#380;e jednak za po&#380;&#261;dane mie&#263; winiene&#347;, je&#347;li odwiecznej prawdzie wierzysz, &#380;e utrapienia tego &#347;wiata wys&#322;uguj&#261; nam z niczem por&#243;wna&#263; si&#281; nie daj&#261;c&#261; chwa&#322;&#281; w niebie <sup>1</sup>.',
                        'description3' => '1) Rzym. 8, 18.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0224',
                        'name' => 'XXIV Lutego',
                        'content' => 'O usuwaniu zarazy.',
                        'author' => '&#8222;Spo&#322;ecze&#324;stwo zdrowe winno si&#281; broni&#263;, i wczesnem odci&#281;ciem cz&#281;&#347;ci zepsutych ca&#322;o&#347;&#263; zabezpieczy&#263;, pierwiej, nim si&#281; z&#322;e rozszerzy i zarazi to, co zdrowem jest.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => 'Rzecz dziwna! sam nikt nie chce by&#263; z&#322;ym. Gdy w ciele jaka cz&#261;stka zepsuciu ulegnie, natenczas soki niezdrowe z ca&#322;ego cia&#322;a do siebie &#347;ci&#261;ga; i w ten spos&#243;b z wi&#281;ksz&#261; si&#322;&#261; na szkod&#281; ca&#322;ego cia&#322;a dzia&#322;a. Zaraza szerzy si&#281; w spo&#322;ecze&#324;stwie. By&#263; pob&#322;a&#380;liwym w jej utrzymywaniu, to znaczy by&#263; okrutnym bardzo. Zgni&#322;y cz&#322;onek winien by&#263; odci&#281;ty, aby nie zarazi&#322; tu&#380; obok b&#281;d&#261;cego, i tak powoli nie oddzia&#322;a&#322; na serce, i nie przyprawi&#322; o zgub&#281; ca&#322;ego cia&#322;a. Z&#322;e przyk&#322;ady szkodz&#261; nawet temu, co si&#281; im opiera; gdy &#380;adnej obawy nie okazujemy, to zaraza powolnem wziewaniem w nas si&#281; dostaje; i z&#322;ego nie unikniemy, chyba &#380;e si&#281; usuniemy jak najdalej. I niebo pysznych anio&#322;&#243;w, i apostolskie grono zdrajcy Aposto&#322;a si&#281; pozby&#322;o <sup>1</sup>; i nie poczytuje si&#281; im to za z&#322;e, &#380;e niegodnych owego miejsca usun&#281;li. Ze zgn&#281;bienia z&#322;ego podw&#243;jne wywi&#261;zuje si&#281; dobro: raz &#380;e z&#322;e zosta&#322;o pokonane; drugi raz, &#380;e dobrem zosta&#322;o zast&#261;pione. Maciej upadek Judasza sowicie nagrodzi&#322;.',
                        'description3' => '1) Dzieje Apostolskie 1, 26.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0225',
                        'name' => 'XXV Lutego',
                        'content' => 'O wyrzeczeniu si&#281; od woli.',
                        'author' => '&#8222;Wi&#281;cej znaczy w&#322;asnej woli wyrzeczenie si&#281;, ni&#380; umar&#322;ych wskrzeszenie.&#8221;',
                        'description' => '(S. Ignat. apud Nol.)',
                        'description2' => 'Umar&#322;ych do &#380;ycia przywo&#322;anie nie jest ani zas&#322;ugi przywilejem, ani cnoty wy&#322;&#261;czn&#261; cech&#261;. Jestto &#322;aska darmo dana, gdy B&#243;g chce, dobrym i z&#322;ym wsp&#243;lna. Na co si&#281; przyda umar&#322;ych wskrzesza&#263;, je&#347;li wr&#261; nami&#281;tno&#347;ci i &#380;ywi&#261; si&#281; wyst&#281;pne uczucia; znamieniem, prawdziwie pos&#322;usznego i cnotliwego jest dla tych wad umieranie, tych wad ze siebie wykorzenianie. Podda&#263; si&#281; Bogu w osobie prze&#322;o&#380;onego jest najlepszem lekarstwem na usuni&#281;cie tych wad. Je&#347;li ty poddajesz si&#281; Bogu, to tobie poddaje si&#281; cia&#322;o; ty wy&#380;szemu, a tobie ni&#380;szy, z ch&#281;ci&#261; ulegnie. Je&#347;li ty nie zechcesz podda&#263; si&#281; Bogu, to i na sobie nie wymo&#380;esz, aby nami&#281;tno&#347;&#263; podda&#322;a si&#281; rozumowi. Lepiej, aby&#347; si&#281; sam sta&#322; w pewien spos&#243;b trupem, ni&#380; trupowi przywraca&#322; &#380;ycie. Trup jest oboj&#281;tnym na miejsce, po&#322;o&#380;enie i odzienie wszelkie; wyborny stanowi wz&#243;r dla pos&#322;usznych: n i c&nbsp;&nbsp;n i e&nbsp;&nbsp;p r a g n i e,&nbsp;&nbsp;o d&nbsp;&nbsp;n i c z e g o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n i e&nbsp;&nbsp;w y m a w i a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0226',
                        'name' => 'XXVI Lutego',
                        'content' => 'O nieuchylaniu si&#281; od dobrego.',
                        'author' => '&#8222;Gdy si&#281; wahamy, pro&#347;my gor&#261;co Boga, aby nam wskaza&#322;, czy si&#281; mamy ograniczy&#263; do samych przykaza&#324;, czy te&#380; pe&#322;ni&#263; i rady?&#8221;',
                        'description' => '(S. Ignat. apud Guartem. cap. 22).',
                        'description2' => 'Cz&#322;owiek zwierz&#281;cy nie pojmuje tego, co z Ducha jest <sup>1</sup>, o radach Chrystusowych, chocia&#380; s&#322;yszy, nie zg&#322;&#281;bia ich; ci&#281;&#380;ar mu si&#281; przedstawia, a wdzi&#281;k wymyka. Na &#322;upin&#281; patrzy, a do &#347;rodka nie zagl&#261;da, wzrok jego tam nie si&#281;ga: dlatego nie wielu jest takich, dla kt&#243;rych rady poci&#261;g maj&#261;. Wielki-to dow&#243;d mi&#322;o&#347;ci Boga, gdy kogo do pe&#322;nienia swych rad wzywa. O ile jest szlachetniejszym stan syn&#243;w, od stanu s&#322;ug; o tyle jest wi&#281;ksz&#261; mi&#322;osiernego Boga &#322;aska wzgl&#281;dem tych, kt&#243;rych na syn&#243;w swoich powo&#322;uje. Zawsze czyny od zamiar&#243;w s&#261; mniejsze. Je&#347;li si&#281; tylko na samo jarzmo przykaza&#324; zgadzasz, to bardzo do prawdy podobnem jest, i&#380; za natarciem pokusy i tego si&#281; pozb&#281;dziesz. Nikt roztropny nie waha si&#281; ani chwili, gdy mo&#380;e wybra&#263; to co lepsze; nad rzeczy niepewne przek&#322;adamy zawsze pewniejsze &#8212; c z e m u &#380;&nbsp;&nbsp;t a k&nbsp;&nbsp;m a &#322; &#261;&nbsp;&nbsp;j e s t&nbsp;&nbsp;n a s z a&nbsp;&nbsp;t r o s k a&nbsp;&nbsp;o&nbsp;&nbsp;d u s z &#281;,&nbsp;&nbsp;o&nbsp;&nbsp;z b a w i e n i e?',
                        'description3' => '1) I. Kor. 2, 14.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0227',
                        'name' => 'XXVII Lutego',
                        'content' => 'O wyrokowaniu o cnocie.',
                        'author' => '&#8222;Cz&#322;owiek do cnoty nie pochopny, je&#347;li sam siebie m&#281;&#380;nie pokona, na dwa razy wi&#281;ksz&#261; nagrod&#281; zas&#322;uguje, ni&#380; ci, kt&#243;rym &#322;agodne i ch&#281;tne usposobienie &#380;adnej w tej mierze nie czyni trudno&#347;ci.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => '&#377;le s&#261;dzi, kto na usposobienie &#322;agodne wzgl&#261;d maj&#261;c o cnocie wyrok wydaje; nie jak kto nazewn&#261;trz si&#281; przedstawia, ale jak kto wewn&#261;trz si&#281; pokonuje, zwa&#380;a&#263; nale&#380;y przy ocenianiu cnoty. Wielkiem dla natury dobrodziejstwem jest ochoczo&#347;&#263;, w po&#322;&#261;czeniu z prac&#261; skutki wydaje zadziwiaj&#261;ce: cz&#322;owiek powoli uzupe&#322;nia w sobie to, czego mu odm&#243;wi&#322;a natura. I nie ma usposobienia tak uporczywego, kt&#243;regoby z czasem przy wysi&#322;kach zmieni&#263; nie by&#322;o mo&#380;na. Ci&#261;g&#322;e naginanie, ci&#261;g&#322;e wdra&#380;anie, do tego stopnia przekszta&#322;ca wrodzone sk&#322;onno&#347;ci, &#380;e ze lw&#243;w czyni barank&#243;w. Z a b i e r z&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;d o&nbsp;&nbsp;t e j&nbsp;&nbsp;p r a c y&nbsp;&nbsp;n a d&nbsp;&nbsp;s o b &#261;. Przyzwyczajenie jest drug&#261; natur&#261;; za szcz&#281;&#347;liwego si&#281; wi&#281;c miej, &#380;e wed&#322;ug woli mo&#380;esz sobie wybra&#263; natur&#281;. Zacznij inaczej post&#281;powa&#263;, zacznij ze siebie z&#322;e wykorzenia&#263;, pracuj nad tem wytrwale, pro&#347; o pomoc Boga; a zmienisz natur&#281;, z wrodzonej na wyrobion&#261;. Nawyknienie, to najlepszy &#347;rodek do przemiany natury.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0228',
                        'name' => 'XXVIII Lutego',
                        'content' => 'O jednakowo&#347;ci zachowania si&#281;.',
                        'author' => '&#8222;Kto w&#347;r&#243;d ludzi dzia&#322;a&#263; i bezpiecznie przebywa&#263; chce, niech si&#281; o to najbardziej stara, aby jednakim by&#322; dla wszystkich, a nie szkodzi&#322; nikomu.&#8221;',
                        'description' => '(S. Ignat. apud Orland. l. 5).',
                        'description2' => 'Poszczeg&#243;lne przywi&#261;zania niebezpieczne s&#261;: z natury, nie z cnoty powstaj&#261;; nami&#281;tno&#347;ci&#261;, nie rozs&#261;dkiem si&#281; podtrzymuj&#261;; siebie, nie Boga na celu maj&#261;. Gdyby si&#281; ku Bogu zwr&#243;ci&#322;y, toby zaraz spostrzeg&#322;y, jak jednakim jest ojcem dla wszystkich. &#346;rodek ko&#322;a bierz na uwag&#281;. Wszystkie linie, kt&#243;re ze&#324; do obwodu poprowadzisz, s&#261; sobie r&#243;wne; &#380;eby ko&#322;o by&#322;o, jak nale&#380;y, wszystkie jednakowo musz&#261; by&#263; rozstawione; nachylenie si&#281; jednej bardziej ku drugiej psuje porz&#261;dek. Nie nachylaj si&#281; i ty bardziej ku jednym, ni&#380; ku drugim &#8212; w&nbsp;&nbsp;p o &#347; r o d k u&nbsp;&nbsp;c n o t a. Jak s&#322;o&#324;ce jednakowo na wszystkich spogl&#261;da i krzywd&#281;by wyrz&#261;dza&#322;o, gdyby tylko niekt&#243;rym &#347;wieci&#322;o, tak i uczucie zanadto ku jednemu skierowane, bez krzywdy wielu by&#263; nie mo&#380;e. Ze wszystkimi b&#261;d&#378; przyjazny, z nikim poufa&#322;y. Aby uczucie, jakie &#380;ywisz ku innym by&#322;o dobre, winno pochodzi&#263; ze wzgl&#281;du na Boga. Dlatego powiniene&#347; mi&#322;owa&#263; innych, &#380;e s&#261; albo obrazem Boga, albo &#380;e s&#261; przenajdro&#380;sz&#261; krwi&#261; Jego odkupieni: a poniewa&#380; to wszystkim jednakowo przys&#322;uguje, wi&#281;c te&#380; dla wszystkich uczu&#263; jednakow&#261; pobudk&#281; stanowi.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0229',
                        'name' => 'XXIX Lutego',
                        'content' => 'O cierpliwo&#347;ci.',
                        'author' => '&#8222;Je&#347;li ci B&#243;g wiele daje cierpie&#263;, to znak jest, &#380;e ci&#281; wielkim &#347;wi&#281;tym chce mie&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Cierpliwo&#347;&#263; jest kluczem do nieba; przeciwno&#347;ci nas do Boga przywodz&#261;, pomy&#347;lno&#347;ci odwodz&#261;. Zbawi&#322;aby si&#281; nier&#243;wnie wi&#281;ksza liczba ludzi, gdyby nier&#243;wnie wi&#281;ksza i wi&#281;cej cierpia&#322;a. Jak krzewy winne, tak i cnoty, tylko podcinane wydaj&#261; owoc. Gdyby Anio&#322;owie zazdro&#347;ci&#263; mogli, toby pewno tego zazdro&#347;cili, &#380;e cz&#322;owiek dla Boga cierpie&#263; mo&#380;e, a Anio&#322; nie mo&#380;e. Chwa&#322;a nie rozkoszy, ale przykro&#347;ci jest nagrod&#261;. Regu&#322;a cnoty na tem polega: z&#322;e cierpie&#263;, dobre czyni&#263;, w obu razach pomoc&#261; jest cierpliwo&#347;&#263; &#8212; z ni&#261; nie ma z&#322;ego, bez niej nie ma dobrego. Jak lekarz pob&#322;a&#380;a choremu, o kt&#243;rym zw&#261;tpi&#322;, a kraje i pali tego, o kt&#243;rym ma nadziej&#281;; tak i Ojciec Przedwieczny siecze syna, kt&#243;rego mi&#322;uje, a zostawia w spokoju tego, kt&#243;ry si&#281; Jego mi&#322;o&#347;ci sta&#322; niegodnym. O d d a l&nbsp;&nbsp;o d e&nbsp;&nbsp;m n i e,&nbsp;&nbsp;P a n i e,&nbsp;&nbsp;p o m y &#347; l n o &#347; &#263;&nbsp;&nbsp;o d d a l&nbsp;&nbsp;p o b &#322; a &#380; a n i e!',
                        'description3' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_03',
                'name' => 'March',
                'colour_value' => '#cae084',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_0301',
                        'name' => 'I Marca',
                        'content' => 'O s&#322;u&#380;eniu Bogu.',
                        'author' => '&#8222;Kto s&#322;u&#380;b&#281; Bo&#380;&#261; nad siebie i sprawy swoje przek&#322;ada, temu B&#243;g nier&#243;wnie lepiej poradzi, ni&#380;by on sam sobie poradzi&#322;, gdyby sprawy swoje nad s&#322;u&#380;b&#281; Bo&#380;&#261; przek&#322;ada&#322;.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Kto przedewszystkiem o Bogu my&#347;li, temu B&#243;g we wszystkiem dopomaga, za prac&#281;, jak&#261; podejmuje oko&#322;o rzeczy Bo&#380;ych, jest sowicie nagradzany. Nietylko otrzymuje to, coby dla siebie zdzia&#322;a&#263; m&#243;g&#322;; ale bardzo cz&#281;sto i to, coby &#380;ycze&#263; m&#243;g&#322; &#8212; tak hojn&#261; miar&#261; odmierza nam B&#243;g. Nasze w&#322;asne pragnienia powinni&#347;my mie&#263; w podejrzeniu, bo co z naszym jest po&#380;ytkiem, tego sami dobrze nie wiemy. W&#322;asny wyb&#243;r niebezpieczny bywa; najlepiej sobie post&#261;pimy, gdy Boga mi&#322;owa&#263; b&#281;dziemy i na Niego si&#281; ca&#322;kiem zdamy, by z nami robi&#322;, co uwa&#380;a za w&#322;a&#347;ciwe. Zabiegi nasze obracaj&#261; si&#281; cz&#281;sto na szkod&#281; nasz&#261;, nieraze&#347;my do&#347;wiadczyli, &#380;e to nam najbardziej szkodzi&#322;o, czego&#347;my najmocniej po&#380;&#261;dali. S z u k a j m y&nbsp;&nbsp;n a p r z &#243; d&nbsp;&nbsp;k r &#243; l e s t w a&nbsp;&nbsp;B o &#380; e g o,&nbsp;&nbsp;r e s z t a&nbsp;&nbsp;b &#281; d z i e&nbsp;&nbsp;n a m&nbsp;&nbsp;p r z y d a n a <sup>1</sup>. Gdy kto o sobie zapomina, wtedy B&#243;g szczeg&#243;lnie o nim pami&#281;ta. Wprawdzie, nikogo B&#243;g z pod swej opieki nie wy&#322;&#261;cza, na wszystkich j&#261; rozci&#261;ga; ale bardziej na tych, kt&#243;rzy o sobie zapominaj&#261;, kt&#243;rzy do siebie, do swej osoby, wielkiej wagi nie przywi&#261;zuj&#261;. P o &#322; &#243; &#380;&nbsp;&nbsp;n a d z i e j &#281;&nbsp;&nbsp;t w o j &#261;&nbsp;&nbsp;w&nbsp;&nbsp;P a n u.',
                        'description3' => '1) &#346;. Mat. 6, 33.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0302',
                        'name' => 'II Marca',
                        'content' => 'O pokorze.',
                        'author' => '&#8222;Musi si&#281; bardzo zni&#380;y&#263;, kto si&#281; chce na szczyt dosta&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden. l. 5).',
                        'description2' => 'Do pozyskania &#322;ask Boskich dochodzi si&#281; tylko pokor&#261;. Wszyscy, kt&#243;rzy si&#281; na szczyt cnoty wznie&#347;li, t&#261; drog&#261; post&#281;powali. Trudno przeskoczy&#263;, gdy zapora jest wysok&#261;; ale schyliwszy si&#281;, mo&#380;na sobie da&#263; rad&#281;. Wynios&#322;e cedry wiatr &#322;amie, ale ma&#322;e krzaki, kt&#243;re si&#281; w jedn&#261; i drug&#261; stron&#281; &#322;atwo naginaj&#261;, oszcz&#281;dza. Niebezpieczn&#261; jest wysoko&#347;&#263;. Gdy, przybywszy do kogo, zajmujesz po&#347;lednie miejsce, mo&#380;esz mie&#263; nadziej&#281;, &#380;e ci powiedz&#261;: p r z y j a c i e l u&nbsp;&nbsp;u s i &#261; d &#378;&nbsp;&nbsp;w y &#380; e j <sup>1</sup>. Tak wody tem silniej w g&#243;r&#281; si&#281; wznosz&#261;, im g&#322;&#281;biej poprzednio zst&#261;pi&#322;y na d&#243;&#322;. Ale z drugiej strony, chcie&#263; pokor&#261; dobija&#263; si&#281; zaszczyt&#243;w, jest wielk&#261; zarozumia&#322;o&#347;ci&#261;; inna rzecz na co&#347; wy&#380;szego zas&#322;ugiwa&#263;, a inna o to si&#281; ubiega&#263;: kto chwalebnych spraw dokonywa bez szukania z tego chluby, ten ponosi trud, za kt&#243;ry od sprawiedliwego S&#281;dziego mo&#380;e si&#281; spodziewa&#263; nagrody. O&nbsp;&nbsp;j a k&nbsp;&nbsp;m a &#322; o&nbsp;&nbsp;cz &#281; s t o&nbsp;&nbsp;j e s t&nbsp;&nbsp;p o k o r y&nbsp;&nbsp;w&nbsp;&nbsp;p o k o r z e! Co innego w rzeczy samej by&#263;, a co innego wydawa&#263; si&#281; pokornym.',
                        'description3' => '1) &#346;. &#321;uk. 14, 10.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0303',
                        'name' => 'III Marca',
                        'content' => 'O potrzebie dobrego przyk&#322;adu.',
                        'author' => '&#8222;Ktoby chcia&#322; &#347;wiat reformowa&#263;, czy to na mocy powagi, jak&#261; ma, czy na mocy urz&#281;du, jaki sprawuje, ten powinien od siebie zacz&#261;&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Im na wy&#380;szem stanowisku zostajesz, tem silniej jeste&#347; obowi&#261;zany do dzia&#322;ania dobrze. &#379;adnej zas&#322;ony dla pokrycia twych wad nie ma. Wszystkim ojciec, ale i wszystkim szkodzi; bardziej za z&#322;y przyk&#322;ad, ni&#380; za swoje przewinienie na kar&#281; zas&#322;uguje. Bez po&#380;ytku jest nauka, kt&#243;rej czyny nie stwierdzaj&#261;: nie wywrze wp&#322;ywu, nie przeniknie do &#380;adnej duszy; dop&#243;ki jej przyk&#322;ad nie zaleci. Daremnie si&#281; trudzi, kto do dobrego zach&#281;ca, podczas gdy sam &#378;le post&#281;puje. Jak najlepsze nawet narz&#281;dzia, dop&#243;ki si&#281; w r&#281;k&#281; bieg&#322;ego mistrza nie dostan&#261;, arcydzie&#322;a sztuki same przez si&#281; nie stworz&#261;, tak i rady, chocia&#380;by by&#322;y najzdrowsze, si&#322;y nie maj&#261;, ochoty do przyj&#281;cia nie budz&#261;; dop&#243;ki si&#281; w &#380;yciu tego, kt&#243;ry je daje, nie przedstawi&#261;. Wyst&#281;pnym jest &#347;wiat, przekszta&#322;cenia, &#8212; kt&#243;&#380;by o tem w&#261;tpi&#322;? &#8212; potrzebuje; ale przy zabieraniu si&#281; do tego dzie&#322;a, ka&#380;dy niech przedewszystkiem na siebie uwag&#281; zwr&#243;ci, i to poprawi, co poprawy wymaga: k t o&nbsp;&nbsp;d l a&nbsp;&nbsp;s i e b i e&nbsp;&nbsp;n i e&nbsp;&nbsp;g o d z i w y,&nbsp;&nbsp;d l a&nbsp;&nbsp;k o g o &#380;&nbsp;&nbsp;m o &#380; e&nbsp;&nbsp;b y &#263;&nbsp;&nbsp;d o b r y?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0304',
                        'name' => 'IV Marca',
                        'content' => 'O niezwa&#380;aniu na fa&#322;szyw&#261; opini&#281;.',
                        'author' => '&#8222;Je&#347;li kiedy spostrze&#380;esz, &#380;e ludzie z&#322;o&#347;liwi lub rzeczy nie&#347;wiadomi miotaj&#261; na ciebie oszczerstwa; pro&#347; Boga, aby wszystko z&#322;e od ciebie odwr&#243;ci&#322;, aby nikt nigdy nie m&#243;g&#322; na twoj&#261; niekorzy&#347;&#263; czego&#347; powiedzie&#263;, coby by&#322;o prawdziwem.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Ca&#322;e szcz&#281;&#347;cie w nas jest, i to jest wielkiem dla nas dobrodziejstwem, bo byliby&#347;my bardzo nieszcz&#281;&#347;liwi, gdyby wewn&#281;trzna warto&#347;&#263; nasza, poczciwo&#347;&#263; nasza zale&#380;e&#263; musia&#322;a od zdania drugich. Takim i tyle wart jeste&#347;, jakim si&#281; czujesz w duszy i wobec Boga. Chocia&#380;by ci&#281; drudzy nie wiem jak wynosili, chocia&#380;by ci&#281; za &#347;wi&#281;tego mieli; to z&#322;ego z ciebie nie usun&#261;, je&#347;li w rzeczy samej z&#322;ym jeste&#347;: i naodwr&#243;t, je&#347;li ci&#281; w&#322;asne sumienie nie obwinia, je&#347;li w duszy nie poczuwasz si&#281; do grzechu; to nie trap si&#281; miotanemi na ciebie oszczerstwami, &#8212; pomimo &#380;e b&#281;d&#261; silne, zjadliwe, z poczciwo&#347;ci twojej nic nie unios&#261;. G&#322;&#243;wna rzecz w tem: s &#322; u s z n i e&nbsp;&nbsp;c z y&nbsp;&nbsp;n i e s &#322; u s z n i e&nbsp;&nbsp;c i e r p i s z? Je&#347;li&#347; niewinny, przeciwno&#347;&#263; ci nie zaszkodzi. Niewinno&#347;&#263; obawia&#263; si&#281; nie potrzebuje. Umys&#322; prze&#347;wiadczony o swej prawo&#347;ci, pewniejszy jest siebie, ni&#380; k&#322;amliwe o nim wie&#347;ci; pozostanie niewzruszony jak ska&#322;a, gdy o ni&#261; uderzaj&#261; morskie ba&#322;wany. Nie zwa&#380;aj na fa&#322;szyw&#261; opini&#281;, zawstydzaj j&#261;, czy&#324; inaczej ni&#380; si&#281; ona domaga.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0305',
                        'name' => 'V Marca',
                        'content' => 'O niegonieniu za doczesno&#347;ci&#261;.',
                        'author' => '&#8222;Twojemu zostawiam rozs&#261;dkowi, niech zawyrokuje, czy lepiej jest teraz we wszystkich sprawach ziemskich przeciwstawi&#263; owo: Co pomo&#380;e cz&#322;owiekowi? czy wkr&#243;tce potem napr&#243;&#380;no wo&#322;a&#263;: Co pomog&#322;o?&#8221;',
                        'description' => '(S. Ignat. vitae l. 2).',
                        'description2' => 'Lubimy kwiaty, gdy s&#261; &#347;wie&#380;e; ale jak&#380;e to kr&#243;tko trwa &#8212; gdy zwi&#281;dn&#261;, wyrzucamy je precz. Podobnie i wszystkie dobra ziemskie, gdy je posiadamy, bawi&#261; nas przez pewien czas, ale jak&#380;e ten czas szybko przemija; albo my si&#281; wyczerpujemy, albo si&#281; dobra wyczerpuj&#261;, samem nawet u&#380;yciem nurz&#261;. Gdy w bogactwa albo rozkosze op&#322;ywasz wystawiaj sobie, &#380;e to sen, &#380;e po ocknieniu si&#281;, nic w r&#281;ku nie znajdziesz; a wi&#281;c co ci po tym &#347;nie, jaki z niego po&#380;ytek? Jakikolwiekby by&#322; stopie&#324; szcz&#281;&#347;cia, za kt&#243;rym wzdychasz, znikome za sob&#261; poci&#261;ga uciechy. Zab&#322;y&#347;niesz na chwil&#281;, jak fajerwerk, i wkr&#243;tce zga&#347;niesz, i pr&#243;cz dymu, nic nie pozostanie. P o m y &#347; l,&nbsp;&nbsp;c z y&nbsp;&nbsp;z a&nbsp;&nbsp;t e m&nbsp;&nbsp;g o n i &#263;&nbsp;&nbsp;w a r t o? Za prawdziwie po&#380;yteczne to tylko uwa&#380;aj, co jest wiecznie po&#380;yteczne, co do nabycia szcz&#281;&#347;liwej wieczno&#347;ci pomaga; bardzo za&#347; jest szkodliwem, co ku temu przeszkod&#281; stawia.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0306',
                        'name' => 'VI Marca',
                        'content' => 'O zadawalnianiu si&#281; ma&#322;em.',
                        'author' => '&#8222;Kto wzgardzi&#322; &#347;wiatem, jak statua by&#263; winien: ani si&#281; od przywdziania opo&#324;czy nie wymawia&#263;, ani od zdj&#281;cia purpury, kt&#243;r&#261; mia&#322; na sobie, nie wzbrania&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Lancic.)',
                        'description2' => 'Lepiej by&#263; szcz&#281;&#347;liwym ni&#380; bogatym, &#322;atwiej nawet by&#263; szcz&#281;&#347;liwym ni&#380; bogatym, je&#347;li tylko nad &#380;&#261;dzami panowa&#263; umiemy; bo one jedne czyni&#261; nas nieszcz&#281;&#347;liwymi. Zabiegamy o rzeczy, kt&#243;re s&#261; zbyteczne, niecierpliwimy si&#281;, gdy nam los nie dopisuje, i to jest przyczyn&#261; naszego nieszcz&#281;&#347;cia; gdyby&#347;my mieli wi&#281;cej cierpliwo&#347;ci, gdyby&#347;my si&#281; zadawalniali tem, co mamy, byliby&#347;my szcz&#281;&#347;liwymi. S z c z &#281; &#347; c i e&nbsp;&nbsp;n i e&nbsp;&nbsp;n a&nbsp;&nbsp;b o g a c t w i e&nbsp;&nbsp;p o l e g a. Lepiej by&#263; panem losu, ni&#380; jego s&#322;ug&#261;. Panuje, kto umie o jego wzgl&#281;dy nie dba&#263;, s&#322;u&#380;y, kto o nie zabiega. Dla wielu jest to choroba, z kt&#243;rej si&#281; wyleczy&#263; nie mog&#261;: we wszystko obfituj&#261;, ale i &#380;&#261;dze nie ustaj&#261;. Jak chorzy na wodn&#261; puchlin&#281;, tak oni, nigdy swego pragnienia zasyci&#263; nie mog&#261;. O potrzebach naszych niech konieczno&#347;&#263; stanowi, nie chciwo&#347;&#263;. Nie wiele potrzebujemy, po c&#243;&#380; si&#281; o wiele troszczymy? Szcz&#281;&#347;liwszy jest Irus ze swego zadowolony, ni&#380; Krezus nigdy nienasycony.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0307',
                        'name' => 'VII Marca',
                        'content' => 'O wa&#380;no&#347;ci cnoty.',
                        'author' => '&#8222;Mniej wiedzy, wi&#281;cej cnoty.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 5).',
                        'description2' => 'Nie ten, kto wiele; ale ten, kto u&#380;yteczne rzeczy wie, do uczonych si&#281; zalicza&#263; winien. Wielk&#261; jest pr&#243;&#380;no&#347;ci&#261;, niemal g&#322;upot&#261;, wiedzie&#263; to, co si&#281; na nic nie przydaje. Szkodzi nam, gdy wiemy to, co si&#281; nie przyda, a cz&#281;sto nawet i to, co si&#281; przyda. Wiedza bowiem nadyma, zarozumia&#322;o&#347;&#263; podnieca. Jak wola nie jest szcz&#281;&#347;liwsza w skutek tego, &#380;e wiele po&#380;&#261;da&#322;a; tak my&#347;l nie jest zdrowsza, &#380;e bardzo wiele pozna&#322;a. Ch&#281;&#263; dowiedzenia si&#281; pierwszym by&#322;a do grzechu powodem. Nieszcz&#281;&#347;liwy cz&#322;owiek, kt&#243;ry wszystko inne zg&#322;&#281;bia, a siebie i Boga nie zna; szcz&#281;&#347;liwy za&#347;, kt&#243;ry siebie i Boga zna, chocia&#380;by czego innego nie wiedzia&#322;. To, co ponad nasz rozum jest, lepiej mi&#322;owa&#263;, ni&#380; zg&#322;&#281;bia&#263;. Bardziej serce, ni&#380; rozum, kszta&#322;ci&#263; nale&#380;y. Uczmy si&#281; nie napoz&#243;r, ale na seryo; nie dla uciechy, ale dla po&#380;ytku. Uczmy si&#281; &#380;y&#263;, nie m&#243;wi&#263;, cnot&#281; wykonywa&#263;, nie o niej rozprawia&#263;; to jest, z i a r n k o&nbsp;&nbsp;n a d&nbsp;&nbsp;&#322; u p i n &#281;&nbsp;&nbsp;p r z e n o &#347; m y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0308',
                        'name' => 'VIII Marca',
                        'content' => 'O s&#322;odyczy &#380;&#243;&#322;ci i octu Pana Jezusa.',
                        'author' => '&#8222;Wszystek mi&#243;d, jaki zebra&#263; mo&#380;na z kwiat&#243;w tego &#347;wiata, nie ma tyle s&#322;odyczy, ile ma &#380;&#243;&#322;&#263; i ocet Pana Jezusa.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Tytu&#322; szcz&#281;&#347;cia nies&#322;usznie sobie przyw&#322;aszczy&#322;y uciechy tego &#347;wiata, tem bardziej nie jest szcz&#281;&#347;ciem, co tych uciech nie dostarcza; uchodzi&#263; za szcz&#281;&#347;liwego a nie by&#263; nim, to nadzwyczaj przykre po&#322;o&#380;enie: chyba &#380;e kto uwa&#380;a to za szcz&#281;&#347;cie, co jest wiecznej zguby powodem. Zmys&#322;owo&#347;&#263; dra&#378;ni &#380;&#261;dz&#281;, nie zasyca; nie zaspakaja, ale dr&#281;czy dusz&#281;; za kropelk&#281; s&#322;odyczy ca&#322;em morzem goryczy zalewa, za chwil&#281; uciechy, wieczne sprowadza nieszcz&#281;&#347;cie. Jak gorzkie zio&#322;a pszcz&#243;&#322;kom na mi&#243;d si&#281; przydaj&#261;, tak gorzka na cierpi&#261;cego Chrystusa pami&#281;&#263; s&#322;odyczy dostarcza, byleby tylko nie zbywa&#322;o na tych, kt&#243;rzy jej chc&#261; kosztowa&#263;. T a k &#261;&nbsp;&nbsp;j e s t&nbsp;&nbsp;t e j&nbsp;&nbsp;&#347; w i &#281; t e j&nbsp;&nbsp;a l c h e m i i&nbsp;&nbsp;d z i e l n o &#347; &#263;. Gorzknieje, co &#347;wiat s&#322;odkiego ofiaruje; a s&#322;odnieje, co si&#281; gorzkiego przydarzy, skoro tylko m&#281;ka Chrystusa jest na my&#347;li.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0309',
                        'name' => 'IX Marca',
                        'content' => 'O nieogl&#261;daniu si&#281; wstecz.',
                        'author' => '&#8222;Chocia&#380;bym skarby ca&#322;ego &#347;wiata mia&#322; pod r&#281;k&#261;, nie wspar&#322;bym ani groszem tego, kt&#243;ry si&#281; z w&#322;asnej winy &#322;aski powo&#322;ania sta&#322; niegodnym.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Gdy kto zgubi pieni&#261;dze, jak&#380;e mocno nad tem boleje; gdy na zdrowiu podupadnie, jakich&#380;e stara&#324; nie czyni? a takie dobro, jak wiecznej szcz&#281;&#347;liwo&#347;ci zadatek, Bo&#380;ej &#322;aski r&#281;kojmia, lekko si&#281; wa&#380;y! Op&#322;akane-to zdrowie, gdy chory &#380;adnego niebezpiecze&#324;stwa nie przeczuwa, owszem, ca&#322;kiem dobrze o sobie trzyma, pomimo &#380;e si&#281; wielkiemi krokami do &#347;mierci zbli&#380;a. Gin&#261;&#263;, a tego nie czu&#263;, straszna-to kara Boga. Czy takich niebo wzgl&#281;dami darzy, czy krzy&#380;ykami nawiedza, zawsze do obawy materyi dostarcza: gdy sprzyja, mo&#380;na przypuszcza&#263;, &#380;e za dobre jakie zrobili, nagradza; gdy uciska, mo&#380;na my&#347;le&#263;, &#380;e za z&#322;e karze. Sk&#261;pym zwykle bywa B&#243;g dla tych, kt&#243;rzy b&#261;d&#378;-to dla bogactw, b&#261;d&#378; dla zmys&#322;owo&#347;ci od Niego si&#281; oddalili: nie wiele oni s&#261; warci; skoro hojn&#261; i pewn&#261; obietnic&#261; wzgardzili. Nie tyle jest przykrem to, &#380;e im B&#243;g sk&#261;pi w dawaniu, ile to &#380;e sk&#261;pi z powodu swego zagniewania. K t o&nbsp;&nbsp;p r z y &#322; o &#380; y w s z y&nbsp;&nbsp;r &#281; k &#281;&nbsp;&nbsp;d o&nbsp;&nbsp;p &#322; u g a,&nbsp;&nbsp;o g l &#261; d a&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;w s t e c z,&nbsp;&nbsp;n i e&nbsp;&nbsp;j e s t&nbsp;&nbsp;g o d z i e n&nbsp;&nbsp;k r &#243; l e s t w a&nbsp;&nbsp;B o &#380; e g o <sup>1</sup>.',
                        'description3' => '1) &#346;. &#321;ukasz 9, 62.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0310',
                        'name' => 'X Marca',
                        'content' => 'O jednaniu sobie drugich.',
                        'author' => '&#8222;Trzymaj si&#281; tej zasady, aby&#347; naprz&#243;d innym po ziemsku my&#347;l&#261;cym m&#243;wi&#263; dozwala&#322;, potem sam dopiero g&#322;os zabiera&#322;, i metal poprzedniej mowy, jakikolwiekby on by&#322;, z&#322;otem powleka&#322;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Je&#347;li z Aposto&#322;em narod&#243;w pragniesz innych sobie uj&#261;&#263; &#347;wi&#281;tem podej&#347;ciem, winiene&#347; post&#281;powa&#263; jak post&#281;puje ptasznik. Wiesz, &#380;e on udaje g&#322;os tego ptaka, na kt&#243;rego si&#281; zasadza, aby go tem &#322;atwiej zwabi&#322;: ty &#380;yczliwo&#347;&#263; ludzk&#261; jednaj sobie podobnym sposobem; tak si&#281; wyra&#380;aj, jak si&#281; wyra&#380;aj&#261; inni, do nich si&#281; stosuj, z nimi trzymaj. Cz&#322;owiek cielesny nie zaraz pojmuje rzeczy duchowe <sup>1</sup>; zwolna, nieznacznie nale&#380;y podnosi&#263; umys&#322; jego; nie przeskakiwa&#263;, ale stopniowo od rzeczy ziemskich do niebieskich prowadzi&#263;. G w a &#322; t o w n o &#347; &#263;&nbsp;&nbsp;p r z e r a &#380; a. Rozmowa przyjazna, &#322;agodna, cudown&#261; jest, rzeczy nadzwyczajnych dokonywa; serce zatwardzia&#322;e, uporne, kt&#243;rego mowa gwa&#322;towna nie mog&#322;a poruszy&#263;, &#322;agodna, jak wosk zmi&#281;kcza i do tego nak&#322;ania, c o&nbsp;&nbsp;z a m i e r z y &#322; a. Przedewszystkiem o &#380;yczliwo&#347;&#263; stara&#263; si&#281; nale&#380;y: gdy j&#261; sobie zjednasz, to z umys&#322;em k&#322;opotu ju&#380; mie&#263; nie b&#281;dziesz &#8212; bez trudno&#347;ci od rzeczy doczesnych ku wiecznym go poprowadzisz.',
                        'description3' => '1) I. Kor. 2, 14.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0311',
                        'name' => 'XI Marca',
                        'content' => 'O gnu&#347;no&#347;ci.',
                        'author' => '&#8222;Dla gnu&#347;no&#347;ci naszej w rzeczach duchownych, s&#322;usznie pociechy Boskiej bywamy pozbawieni.&#8221;',
                        'description' => '(S. Ignat. de discret. spirit.)',
                        'description2' => 'Cz&#281;sto niew&#322;a&#347;ciwie obwiniamy z&#322;ego ducha, przypisuj&#261;c mu spustoszenie w duszy naszej zrz&#261;dzone, podczas kiedy to spustoszenie jest tylko owocem naszej gnu&#347;no&#347;ci, kt&#243;ra nam nieraz wi&#281;cej, ni&#380; z&#322;y duch szkodzi. Jakiem prawem hojno&#347;ci od Boga spodziewa&#263; si&#281; mo&#380;e, kto tak jest niewdzi&#281;czny, tak z&#322;y, &#380;e mu nawet chwilki czasu nie chce po&#347;wi&#281;ci&#263;. T a k&nbsp;&nbsp;o n&nbsp;&nbsp;n a m&nbsp;&nbsp;p &#322; a c i,&nbsp;&nbsp;j a k&nbsp;&nbsp;m y&nbsp;&nbsp;g o&nbsp;&nbsp;c z c i m y. Jest jakby echem i odpowiada g&#322;osem do &#380;arliwo&#347;ci naszej zastosowanym. Ach! jak&#380;e szkodliwym dla duszy naszej nieprzyjacielem jest gnu&#347;no&#347;&#263;. Ile&#380; Bo&#380;ych &#322;ask powstrzymuje! Ile zas&#322;ug niweczy! Ile pociech pozbawia! Ona &#378;r&#243;d&#322;em wszystkich nieszcz&#281;&#347;&#263;, jakich dusza nasza doznaje; postaraj si&#281; o jej zwyci&#281;&#380;enie, a rozbroisz twoich nieprzyjaci&#243;&#322;. Im wi&#281;cej pary w g&#243;r&#281; ziemia posy&#322;a, tem obfitsze deszcze ztamt&#261;d sprowadza. I my odpowiednio do naszej hojno&#347;ci dla nieba, otrzymujemy jego dobrodziejstwa. K t o&nbsp;&nbsp;p e &#322; n &#261;&nbsp;&nbsp;r &#281; k &#261;&nbsp;&nbsp;s i e j e,&nbsp;&nbsp;t e n&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;c z a s u&nbsp;&nbsp;&#380; n i w a&nbsp;&nbsp;z&nbsp;&nbsp;w i e l k i e g o&nbsp;&nbsp;p l o n u&nbsp;&nbsp;r a d u j e <sup>1</sup>. Takim si&#281; B&#243;g nam okazuje, jakim go mie&#263; chcemy.',
                        'description3' => '1) 2. Kor. 9, 6.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0312',
                        'name' => 'XII Marca',
                        'content' => 'O szkole w Manreza.',
                        'author' => '&#8222;Wi&#281;cej B&#243;g przez godzin&#281; nauczy w Manreza, ni&#380;by nauczy&#263; mogli ca&#322;ego &#347;wiata uczeni.&#8221;',
                        'description' => '(S. Ignat. vitae l. 1).',
                        'description2' => 'Szko&#322;a Boskiej umiej&#281;tno&#347;ci o post&#281;pie swoich wnosi nie z uzdolnienia ucz&#261;cego si&#281;, ale z woli ucz&#261;cego. &#321;atwo tam zosta&#263; uczonym, gdzie mistrzem jest &#243;w duch, w kt&#243;rym s&#261; wszystkie skarby m&#261;dro&#347;ci i umiej&#281;tno&#347;ci <sup>1</sup>. Jak &#347;wiat&#322;o po swem ukazaniu si&#281; zaraz usuwa ciemno&#347;ci i odkrywa wiele rzeczy; tak promie&#324; Bo&#380;ej &#322;aski, za swem zjawieniem si&#281;, nie pozwala d&#322;u&#380;ej w duszy go&#347;ci&#263; ciemno&#347;ciom, i takiego dostarcza &#347;wiat&#322;a, takiej jasno&#347;ci, &#380;e m&#281;drcy tego &#347;wiata zdumiewa&#263; si&#281; musz&#261;. Napr&#243;&#380;no si&#281; silimy, napr&#243;&#380;no wyt&#281;&#380;amy; ca&#322;&#261; noc pracuj&#261;c, z m&#261;dro&#347;ci &#347;wi&#281;tych nic nie u&#322;owimy, chyba &#380;e nas ten nauczy, kt&#243;ry w ciszy, bez szelestu s&#322;&#243;w, do serca zwyk&#322; m&#243;wi&#263;. I niech si&#281; nie spodziewa post&#281;pu, kto w odosobnieniu, sam ze sob&#261; przebywa&#263; nie umie. Manreza&#324;ska grota otwiera akademi&#281; cnoty: gdzie nauczycielem Ukrzy&#380;owany, niebo i ziemia ksi&#281;g&#261;, rozmy&#347;lanie nauk&#261;. K t o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;t u&nbsp;&nbsp;w y d o s k o n a l i,&nbsp;&nbsp;t e n&nbsp;&nbsp;p r a w d z i w i e&nbsp;&nbsp;j e s t&nbsp;&nbsp;m &#261; d r y m.',
                        'description3' => '1) Kolos. 2, 3.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0313',
                        'name' => 'XIII Marca',
                        'content' => 'O mi&#322;owaniu krzy&#380;a.',
                        'author' => '&#8222;Ku roznieceniu ognia mi&#322;o&#347;ci Bo&#380;ej, nie ma stosowniejszego drzewa nad drzewo krzy&#380;a &#347;wi&#281;tego.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Dziwnym sztukmistrzem jest mi&#322;o&#347;&#263;, za przywo&#322;aniem na pami&#281;&#263; umi&#322;owanego, jakby r&#243;szczk&#261; czarodziejsk&#261;, przeciwno&#347;ci albo &#322;agodzi albo ca&#322;kiem usuwa, a nawet, co jej jest wy&#322;&#261;czn&#261; w&#322;asno&#347;ci&#261;, w rozkosz zamienia. Mi&#322;uj, a &#380;adnych przykro&#347;ci nie poczujesz; ci si&#281; na ci&#281;&#380;ar uskar&#380;aj&#261;, kt&#243;rzy go z niech&#281;ci&#261; nios&#261;, bo sobie nie ujmuj&#261;, ale dodaj&#261; ci&#281;&#380;aru. Ca&#322;em nieszcz&#281;&#347;ciem niecierpliwo&#347;&#263;. Nie gwa&#322;tem, ale mi&#322;o&#347;ci&#261; przeciwny los pokonuj; silniejsz&#261; jest mi&#322;o&#347;&#263; ni&#380; przeciwno&#347;&#263;. Trudy dla mi&#322;o&#347;ci s&#261; nieznane. Ch&#281;tnie krzy&#380; niesie, kto krzy&#380; mi&#322;uje. I rami&#281; i siebie zawsze do niesienia ma w pogotowiu. Mi&#322;o&#347;&#263; ku nam krzy&#380; Chrystusowi lekkim czyni&#322;a, mi&#322;o&#347;&#263; ku Bogu krzy&#380; Chrystusa nam zno&#347;nym uczyni. W trudnych chwilach m&#281;ztwo jest na zawo&#322;anie, bez uzbrojenia nawet cud&#243;w dokonywa. W nas si&#281; znajduje wszystko; s i &#322; &#261;&nbsp;&nbsp;c n o t y&nbsp;&nbsp;j e s t&nbsp;&nbsp;m i &#322; o &#347; &#263;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0314',
                        'name' => 'XIV Marca',
                        'content' => 'O nieobra&#380;aniu Boga.',
                        'author' => '&#8222;Nie tyle si&#281; przera&#380;am obaw&#261; niewoli, albo ci&#261;gle mi przed oczyma stoj&#261;cej &#347;mierci; ile obaw&#261; obra&#380;enia Boga.&#8221;',
                        'description' => '(S. Ignat. vitae l. 1).',
                        'description2' => 'Nie ma nic pod s&#322;o&#324;cem tak z&#322;ego, jak grzech; bo nie ma nic czegoby B&#243;g nie chcia&#322;, &#380;eby by&#322;o, pr&#243;cz grzechu, kt&#243;rego tak nienawidzi, i&#380; gdyby go mi&#322;owa&#263; m&#243;g&#322;, Bogiem-by nie by&#322;. Nienawidzi z konieczno&#347;ci i nienawidzi nazawsze. &#346;mier&#263;, okowy, ub&#243;stwo nie za z&#322;e, ale raczej za po&#380;&#261;dane i dobre rzeczy uwa&#380;a&#263; nale&#380;y; s&#261; bowiem mi&#322;uj&#261;cego nas Boga darami, na grzech lekarstwami, Bo&#380;ej &#322;aski &#347;rodkami, i co jest g&#322;&#243;wna, Bo&#380;ej mi&#322;o&#347;ci podnietami, za&#380;ewiami. Kogo sumienie nie obwinia, ten si&#281; nie ma czego na &#347;wiecie l&#281;ka&#263;. Je&#347;li kto jest nieszcz&#281;&#347;liwy, to tylko z w&#322;asnej winy: co si&#281; nam tylko z&#322;ego przydarzy&#263; mo&#380;e, to naszem jest dzie&#322;em. Pocisk&#243;w na nasz&#261; g&#322;ow&#281; w innej ku&#378;ni uku&#263; nie mog&#261; &#8212; my sami je sobie kujemy. Gdy idzie o wielkich, to najmniejsza obraza jest straszn&#261;; a c&#243;&#380; dopiero gdy si&#281; obrazi Najwi&#281;kszego, Najwy&#380;szego, Kr&#243;la Kr&#243;l&#243;w? Jestto zbrodnia tak straszna, i&#380; gdyby niebu, ziemi, ludziom, anio&#322;om zguba zagra&#380;a&#322;a, tej mniejby si&#281; l&#281;ka&#263; nale&#380;a&#322;o, ni&#380; obrazy Boga.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0315',
                        'name' => 'XV Marca',
                        'content' => 'O braku przeciwno&#347;ci.',
                        'author' => '&#8222;Nie ma gorszej burzy, nad zupe&#322;n&#261; cisz&#281;; nie ma gorszych przeciwno&#347;ci, nad zupe&#322;ny brak przeciwno&#347;ci.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 2).',
                        'description2' => 'Ustawiczny pok&#243;j, pod mask&#261; bezpiecze&#324;stwa, grozi wielkiem dla duszy niebezpiecze&#324;stwem. Jest matk&#261; lenistwa, &#380;ywicielk&#261; gnu&#347;no&#347;ci, podniet&#261; zmys&#322;owo&#347;ci. Jakie&#380;-to wielkie dla duszy szkody! Z przeciwno&#347;ci&#261; rzecz si&#281; ma inaczej; nawo&#322;uje nas do obowi&#261;zku, przywodzi do Boga. &#346;pi&#261; i Aposto&#322;owie, gdy morze jest spokojne; ale burza zmusza ich do wo&#322;ania: P a n i e,&nbsp;&nbsp;r a t u j&nbsp;&nbsp;n a s,&nbsp;&nbsp;b o&nbsp;&nbsp;g i n i e m y! <sup>1</sup> Cierpie&#263; nie jest z&#322;&#261; rzecz&#261;; cierpie&#263; od z&#322;ych jest dobr&#261; rzecz&#261;; cierpie&#263; z powodu dobra jest lepsz&#261; rzecz&#261;; cierpie&#263; z powodu z&#322;a, jest r&#243;wnie&#380; dobr&#261; rzecz&#261;: bo w ten spos&#243;b cz&#322;owiek oczyszcza si&#281;, usprawiedliwia si&#281;. Podczas burzy powstaje per&#322;a, w ogniu oczyszcza si&#281; z&#322;oto, przez bicie na kowadle m&#322;otem robi si&#281; korona &#8212; n i e&nbsp;&nbsp;i n a c z e j&nbsp;&nbsp;t y l k o&nbsp;&nbsp;p r z e c i w n o &#347; c i a m i&nbsp;&nbsp;p o d t r z y m u j e&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;c n o t a. Nieprzyjaciel czyni nas m&#281;&#380;nymi, jak burza czyni &#380;eglarzy bacznymi.',
                        'description3' => '1) &#346;. Mat. 8, 25.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0316',
                        'name' => 'XVI Marca',
                        'content' => 'O mi&#322;owaniu Boga w cierpieniach.',
                        'author' => '&#8222;Nie ma nic s&#322;odszego, jak mi&#322;owa&#263; Boga; ale tak, aby&#347; w skutek tej mi&#322;o&#347;ci wiele cierpia&#322;.&#8221;',
                        'description' => '(S. Ignat. vitae l. 1).',
                        'description2' => 'Ca&#322;e szcz&#281;&#347;cie cz&#322;owieka na mi&#322;o&#347;ci polega. O tyle jeste&#347; wielkim i o tyle wart czego&#347; jeste&#347;; o ile jest wielkiem to, co mi&#322;ujesz. B&#261;d&#378; przeto ogl&#281;dny w swojej mi&#322;o&#347;ci. Je&#347;li j&#261; skierujesz ku rzeczy znikomej, to wykopiesz przed sob&#261; przepa&#347;&#263;; je&#347;li ku Bogu, to staniesz u szczytu szcz&#281;&#347;cia. Mi&#322;owa&#263;, a przed cierpieniem stroni&#263;, to znaczy na bezczynno&#347;&#263; si&#281; skazywa&#263;. Cierpieniem, jakby kamieniem probierczym, rozr&#243;&#380;nia si&#281; mi&#322;o&#347;&#263; prawdziwa od fa&#322;szywej. Siebie, nie Boga mi&#322;uje, kto si&#281; od cierpie&#324; dla Boga wymawia. Mi&#322;owa&#263; Boga w&#347;r&#243;d pomy&#347;lno&#347;ci, to jeszcze nie cnota; do tego i zmys&#322;owo&#347;&#263; jest zdolna. Ale mi&#322;owa&#263; Boga, gdy nas krzy&#380;e raz po raz nawiedzaj&#261;, mi&#322;owa&#263; razem z krzy&#380;ami, jest dowodem wielkiej i prawdziwej cnoty. Jak z krzemienia krzemieniem p&#322;omie&#324; si&#281; wydobywa i dmuchaniem zwi&#281;ksza, tak losu przeciwno&#347;ciami serca prawdziwie mi&#322;uj&#261;cych Boga coraz mocniej si&#281; zapalaj&#261;. C z e m u&nbsp;&nbsp;t y&nbsp;&nbsp;t a k&nbsp;&nbsp;z i m n y m&nbsp;&nbsp;j e s t e &#347;?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0317',
                        'name' => 'XVII Marca',
                        'content' => 'O ufno&#347;ci w Bogu.',
                        'author' => '&#8222;Tem silniej w Bogu nadziej&#281; pok&#322;ada&#263; nale&#380;y, im wi&#281;ksze trudno&#347;ci spotykaj&#261; si&#281; w przeprowadzeniu jakiej rzeczy; gdzie odmawiaj&#261; pomocy ludzie, tam B&#243;g z pomoc&#261; przybywa.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Gdzie w skrzyni pe&#322;no jest pieni&#281;dzy, a w &#347;pichrzach zbo&#380;a; tam nie ma nadziei. Gdzie wszystko idzie po my&#347;li, tam ufno&#347;&#263; nie w Bogu, ale w stworzeniu. Biada temu, co si&#281; jedynie na ludzkich wspiera si&#322;ach, biada temu, co si&#281; powierza lichej trzcinie, gdy mo&#380;e swoje nadzieje oprze&#263; na niewzruszonej kolumnie. I nazw&#281; i si&#322;&#281; swoj&#261; traci nadzieja, gdy j&#261; opieramy na &#347;rodkach, kt&#243;re widzimy oczyma. B&#243;g niekiedy zezwala, &#380;eby&#347;my popadli w niebezpiecze&#324;stwo i nie mieli pomocy ze strony ludzi; bo mu jest mi&#322;o, gdy si&#281; nasza o&#380;ywia nadzieja i gdy od niego wygl&#261;damy ratunku. Je&#347;li nie rych&#322;o przybywa z pomoc&#261;, to jedynie dla wzmocnienia naszej nadziei. Gdy&#347; straci&#322; bogactwa, gdy ci&#281; wszyscy opu&#347;cili; wtedy ufaj najmocniej &#8212; w y s t a r c z y&nbsp;&nbsp;t o b i e&nbsp;&nbsp;z a&nbsp;&nbsp;w s z y s t k i c h&nbsp;&nbsp;p o m o c&nbsp;&nbsp;t e g o,&nbsp;&nbsp;b e z&nbsp;&nbsp;k t &#243; r e g o&nbsp;&nbsp;n i c&nbsp;&nbsp;n i e&nbsp;&nbsp;m o g &#261;&nbsp;&nbsp;w s z y s c y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0318',
                        'name' => 'XVIII Marca',
                        'content' => 'O &#322;agodno&#347;ci.',
                        'author' => '&#8222;Przy pracy nad zbawieniem drugich, skuteczniej dzia&#322;a &#322;agodno&#347;&#263;, ni&#380; surowo&#347;&#263;; i pr&#281;dzej odnosi si&#281; zwyci&#281;ztwo ust&#281;powaniem, ni&#380; gro&#378;nem naleganiem.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Jak przy zdobyciu zamk&#243;w, tak i przy zdobywaniu dusz bardzo wiele znaczy przezorno&#347;&#263;. Dla odniesienia zwyci&#281;ztwa, niech si&#281; zdobywaj&#261;cy zdobywanemu do n&#243;g rzuci, niech nieznacznie, wymijaj&#261;co dzia&#322;a; w ten spos&#243;b coby si&#281; otwartej sile opar&#322;o, to ubocznej ulegnie. Nie wieleby ptasznik do swej sieci nagarn&#261;&#322; ptak&#243;w, gdyby piorunowa&#322;, krzycza&#322;, grozi&#322;, nie wabi&#322;. Na wdzi&#281;cznej potrzeba przygrywa&#263; piszcza&#322;ce, czego nie doka&#380;e si&#322;a, to doka&#380;e piszcza&#322;ka. Cz&#322;owieka jednamy sobie uprzejmo&#347;ci&#261;, pokor&#261;, i nie ma tak dzikiego, tak twardego, kt&#243;ryby si&#281; tym sposobem nie da&#322; poci&#261;gn&#261;&#263; do mi&#322;o&#347;ci; zarozumia&#322;o&#347;&#263; przeciwnie wywo&#322;uje niech&#281;&#263;, odraz&#281;; pych&#261; rozbudza si&#281; pycha i upartego bardziej jeszcze utwierdza w uporze. Inne s&#261; &#347;rodki walki ascetecznej, a inne &#347;wiatowej: ta otwarcie nastaj&#261;c, a tamta pozornie ust&#281;puj&#261;c, do zwyci&#281;ztwa toruje sobie drog&#281;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0319',
                        'name' => 'XIX Marca',
                        'content' => 'O zbawieniu.',
                        'author' => '&#8222;Wi&#281;cej ce&#324; ka&#380;dego cz&#322;owieka zbawienie, ni&#380; wszystkie ca&#322;ego &#347;wiata skarby.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden. l. 5).',
                        'description2' => 'Co w nas jest najdro&#380;szego, to prawie najmniej cenimy. Dusza, kt&#243;ra nies&#322;ychanie drogo kosztuje, ma&#322;o znacz&#261;c&#261; by&#263; nie mo&#380;e, chyba dla tych, nad kt&#243;rych nic lichszego nie ma. Zbawienie cz&#322;owieka Chrystus nad niebo prze&#322;o&#380;y&#322;; a&#380;eby je zapewni&#322;, B&#243;stwo swoje niejako strawi&#322;, &#380;ycie i krew odda&#322;. C o&nbsp;&nbsp;n a j m &#281; d r s z y&nbsp;&nbsp;z&nbsp;&nbsp;m i s t r z &#243; w&nbsp;&nbsp;t y l e&nbsp;&nbsp;c e n i &#322;,&nbsp;&nbsp;c z e m u &#380; m y&nbsp;&nbsp;o&nbsp;&nbsp;t o&nbsp;&nbsp;t a k&nbsp;&nbsp;m a &#322; o&nbsp;&nbsp;d b a m y? Fa&#322;szywej u&#380;ywamy wagi. O rzeczy nie wiele warte, jak bogactwa, nauka, mozolnie przez ca&#322;e &#380;ycie zabiegamy; wszelk&#261; za&#347; prac&#281; oko&#322;o ludzkiego zbawienia za zbyt ci&#281;&#380;k&#261; i niezno&#347;n&#261; mamy. Na s&#261;d Boga wspomnij. Wszelk&#261; &#347;wiata pot&#281;g&#281; B&#243;g tyle ceni, ile my w&#322;os lub orzech pusty: o zbawienie za&#347; cz&#322;owieka bardzo mu idzie. P r &#243; c z&nbsp;&nbsp;s i e b i e,&nbsp;&nbsp;n i e&nbsp;&nbsp;m a&nbsp;&nbsp;n i c&nbsp;&nbsp;n a d e &#324;&nbsp;&nbsp;p o &#380; &#261; d a &#324; s z e g o,&nbsp;&nbsp;n i c&nbsp;&nbsp;b a r d z i e j&nbsp;&nbsp;u p r a g n i o n e g o.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0320',
                        'name' => 'XX Marca',
                        'content' => 'O rozr&#243;&#380;nianiu rzeczy.',
                        'author' => '&#8222;Tyle ka&#380;da rzecz warta, ile j&#261; B&#243;g ceni.&#8221;',
                        'description' => '(S. Ignat. apud Bartol. l. 4).',
                        'description2' => 'Mocno si&#281; cz&#281;sto myli, kto o rzeczach powierzchownie s&#261;dzi, z ich kszta&#322;tu lub koloru. Wprawny znawca &#322;atwo rozr&#243;&#380;nia dyament od szk&#322;a. Ten jest najdalej od b&#322;&#281;du, kto wszystko wed&#322;ug Boga ocenia. Gdyby&#347; wszystko, co si&#281; &#347;wieci, bra&#322; za z&#322;oto, ach! jak&#380;eby&#347; si&#281; myli&#322;. Tylko to jest dobrem, co prowadzi do najwy&#380;szego dobra. B&#243;g jest naszym celem, ku kt&#243;remu d&#261;&#380;ymy, w kt&#243;rym wieczny odpoczynek znajdziemy; drog&#281;, kt&#243;ra do&#324; prowadzi, za dobr&#261; uwa&#380;aj, wybieraj j&#261;, mi&#322;uj; drogi za&#347;, kt&#243;ra ode&#324; odwodzi, chocia&#380;by by&#322;a r&#243;&#380;ami us&#322;ana, jak najtroskliwiej unikaj. Z&#322;oty klucz nie na wiele si&#281; przyda, je&#347;li zamku, o kt&#243;ry nam idzie, nie otwiera; lepszy jest &#380;elazny, zamek, kt&#243;ry chcemy, &#322;atwo otwieraj&#261;cy. To znaczy, &#380;e o cenie rzeczy stanowi nie kszta&#322;t, nie kolor, ale jej stosowno&#347;&#263;, jej odpowiednio&#347;&#263; do zamierzonego celu. O jak&#380;e b&#322;&#261;dzimy! wszystko B&#243;g podda&#322; naszej woli, nad wszystkiem nas prze&#322;o&#380;y&#322;; ale na to, aby wszystko nas prowadzi&#322;o ku niemu, aby by&#322;o &#347;rodkiem do&#324; prowadz&#261;cym. Biada tym, kt&#243;rzy tego &#347;rodka u&#380;ywaj&#261; przeciw Bogu. O tyle rzecz ka&#380;da jest gorsz&#261;, o ile pewniej odwodzi od Boga.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0321',
                        'name' => 'XXI Marca',
                        'content' => 'O po&#380;ytkach choroby.',
                        'author' => '&#8222;Dobrym zdrowie, a z&#322;ym choroba przydatna: tamtym, aby swych si&#322; bez przeszkody ku chwale Boga u&#380;ywali; tym, aby w swej niemocy, w swych cierpieniach ku Bogu si&#281; zwracali.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden. l. 5).',
                        'description2' => 'My cz&#281;sto niewiemy, ile si&#281; kryje dobrego w chorobie. Na &#322;upin&#281; nie zwa&#380;ajmy, bywa ona tward&#261; i szorstk&#261;, ale pod ni&#261; si&#281; znajduje posilny owoc, smaczny sok; byleby&#347;my tylko umieli z cierni t&#281; s&#322;odycz wydoby&#263;, mi&#243;d z dzi&#281;cieliny, z choroby zdrowie wyprowadzi&#263;. Jestto pewien rodzaj zdrowia, gdy cz&#322;owiek zdr&#243;w nie jest. Gdy choruje cia&#322;o, wzmacnia si&#281; duch. Wielu lepszymi uczyni&#322;a choroba, podczas gdy zdrowie by&#322;oby ich zgubi&#322;o. Jak ciemno&#347;ci pomagaj&#261; do &#347;wiat&#322;a, tak choroby do &#380;ycia lepszego. Opuszczaj&#261; tych wyst&#281;pki, kt&#243;rzy ich sami opu&#347;ci&#263; nie chcieli. Po&#380;ytek o dobroci rzeczy stanowi. Niech boli, byleby pomog&#322;o; i lekarstwo dla podniebienia nie jest przyjemne, ale &#380;e daje nadziej&#281; zdrowia, staramy si&#281; o nie, przyjmujemy je. Co mo&#380;e pragnienie zdrowia cielesnego, czemu&#380;by nie mog&#322;o pragnienie zdrowia dusznego? Jeste&#347; chory? &#8212; ciesz si&#281;: g r z e s z y &#263;&nbsp;&nbsp;n i e&nbsp;&nbsp;m o &#380; e s z. Zostajesz w &#322;&#243;&#380;ku? &#8212; masz czas do wej&#347;cia w siebie. Boli ci&#281;, cierpisz? &#8212; my&#347;l nad n&#281;dz&#261; ludzk&#261;, my&#347;l o wieczno&#347;ci przede drzwiami do niej. I l e&nbsp;&nbsp;z t &#261; d&nbsp;&nbsp;d o b r e g o!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0322',
                        'name' => 'XXII Marca',
                        'content' => 'O pos&#322;usze&#324;stwie.',
                        'author' => '&#8222;Kogo ci B&#243;g da&#322; za prze&#322;o&#380;onego , temu ch&#281;tnie ulegaj; wadami jego, je&#347;liby jakie mia&#322;, wcale si&#281; nie zra&#380;aj; Boga s&#322;uchasz, gdy jego s&#322;uchasz.&#8221;',
                        'description' => '(S. Ignat. apud Nigr. de nec. spir. c. 5).',
                        'description2' => 'Pos&#322;usze&#324;stwo wielk&#261; jest cnot&#261;, aleby tak&#261; nie by&#322;o, gdyby cz&#322;owiek najdro&#380;szej swej cz&#261;stki, w&#322;asnej woli si&#281; nie wyrzeka&#322; i przez pos&#322;usze&#324;stwo Bogu jej w ofierze nie sk&#322;ada&#322;; albo w&#322;a&#347;ciwiej m&#243;wi&#261;c, woli swojej na wol&#281; Bosk&#261; nie zamienia&#322;. Gdy rozkazuj&#261;cy nie zaleca si&#281; ani cnot&#261;, ani zdolno&#347;ciami, to pos&#322;usze&#324;stwo nasze zyskuje na tem, i o tyle mu przybywa, o ile mniej zalet posiada ten, kt&#243;rego s&#322;uchamy. Tu bowiem i intencya jest czystsz&#261; i wiara silniejsz&#261;. Tego dost&#281;puje s&#322;uchaj&#261;cy, co w&#322;a&#347;ciwem jest tylko Bogu: to jest, n i e m o &#380; n o &#347; c i&nbsp;&nbsp;b &#322; &#261; d z e n i a. Na r&#243;wni niejako z m&#261;dro&#347;ci&#261; Bosk&#261; stawia si&#281; pos&#322;usze&#324;stwo: c e c h &#261;&nbsp;&nbsp;o b o j g a&nbsp;&nbsp;j e s t&nbsp;&nbsp;n i e o m y l n o &#347; &#263;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0323',
                        'name' => 'XXIII Marca',
                        'content' => 'O niezwlekaniu.',
                        'author' => '&#8222;Lepiej nic nie odk&#322;ada&#263; do jutra, co dzi&#347; mo&#380;na zrobi&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Bartol. l. 4).',
                        'description2' => 'Co Filipowi zjedna&#322;o przydomek Wielkiego, to winno by&#263; prawem dla chrze&#347;cianina. On nic nie odk&#322;ada&#322; do jutra, co mo&#380;na by&#322;o dzi&#347; zrobi&#263;; chrze&#347;cianin winien post&#281;powa&#263; tak samo. Jutro jest niepewne, mo&#380;esz go nie doczeka&#263;. &#321;aska Ducha &#346;wi&#281;tego opiesza&#322;o&#347;ci nie znosi, w tych szczeg&#243;lniej sprawach, kt&#243;re na pochwa&#322;&#281; zas&#322;uguj&#261;, dopiero po ich dokonaniu. O wiele warto&#347;&#263; czynu podnosimy, gdy go szybko wykonujemy. Ile&#380;-to razy zw&#322;oka okaza&#322;a si&#281; szkodliw&#261;. Wcale do skutku nie przysz&#322;o, bez wykonania pozosta&#322;o, co&#347;my na inny dzie&#324; od&#322;o&#380;yli. Wielu za sw&#261; wyst&#281;pn&#261; gnu&#347;no&#347;&#263; przez ca&#322;e wieki pokutowa&#263; b&#281;dzie musia&#322;o i nigdy jej nie odpokutuje. Czyn dobry, skutkiem zw&#322;oki, wiele na swej warto&#347;ci traci: zw&#322;oka bowiem jak z jednej strony dowodzi niech&#281;ci, tak z drugiej wywo&#322;uje niezadowolenie. O ile si&#281; kto op&#243;&#378;nia z wykonywaniem cnoty, o tyle jej ujmuje chwa&#322;y. Z a m i a r y&nbsp;&nbsp;n i k o g o&nbsp;&nbsp;&#347; w i &#281; t y m&nbsp;&nbsp;n i e&nbsp;&nbsp;u c z y n i &#322; y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0324',
                        'name' => 'XXIV Marca',
                        'content' => 'O u&#347;wi&#261;tobliwieniu w&#322;asnem.',
                        'author' => '&#8222;Daleko lepiej jest mie&#263; jedno ziarnko jakiego dobra bez nara&#380;enia, ni&#380; sto z nara&#380;eniem zbawienia.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4 ).',
                        'description2' => 'Nikt rozs&#261;dny siebie nie gubi, aby drugiego ocali&#322;; tak jak lekarz nie przyprawia sie o chorob&#281;, aby drugiego uleczy&#322;. O w&#322;asnem zbawieniu przedewszystkiem my&#347;le&#263; nale&#380;y. Im skarb jest cenniejszy, z tem wi&#281;kszem staraniem winien by&#263; przechowywany. Bo jak&#261; da zamian&#281; cz&#322;owiek za dusz&#281; swoj&#261;; kt&#243;r&#261; gdy na niebezpiecze&#324;stwo wystawia, tem samem dowodzi, &#380;e jej nie ceni, &#380;e o ni&#261; nie dba. Pomi&#281;dzy zyskami, kt&#243;rych tak chciwie szukasz, siebie na pierwszem miejscu stawiaj. Gdy innych zach&#281;casz do pobo&#380;no&#347;ci, to nie zaniedbuj siebie i nie pozw&#243;l, aby inni pod twojem przewodnictwem od ciebie stali si&#281; &#347;wi&#281;tszymi. C z e m u&nbsp;&nbsp;t a k&nbsp;&nbsp;o&nbsp;&nbsp;s i e b i e&nbsp;&nbsp;n i e&nbsp;&nbsp;s t o i s z? Piecza, kt&#243;ra si&#281; zawsze odnosi do innych, nale&#380;y do najgorszych. Piecz&#281; o siebie winiene&#347; nad wszystkie inne przek&#322;ada&#263;: rachunku o tobie, od ciebie za&#380;&#261;daj&#261;. Marto! Marto! troszczysz si&#281; i frasujesz o wiele, a jednego&#263; potrzeba <sup>1</sup>: z b a w i e n i e&nbsp;&nbsp;s w o j e&nbsp;&nbsp;j a k&nbsp;&nbsp;m o &#380; e s z&nbsp;&nbsp;n a j p i l n i e j&nbsp;&nbsp;u b e z p i e c z a j.',
                        'description3' => '1) &#346;. &#321;uk. 10, 41.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0325',
                        'name' => 'XXV Marca',
                        'content' => 'O karmieniu si&#281; cia&#322;em Chrystusowem.',
                        'author' => '&#8222;Nies&#322;ychana pociecha! ile razy do sto&#322;u Pa&#324;skiego przyst&#281;pujemy, tyle razy nie tylko Chrystusa; ale i Matki jego Naj&#347;wi&#281;tszej cia&#322;em si&#281; karmimy.&#8221;',
                        'description' => '(S. Ignat. apud Lyraeum).',
                        'description2' => 'Z czego niegdy&#347; cieszy&#322; si&#281; &#347;wi&#281;ty Bernard, z tego i my mo&#380;emy, a mianowicie, &#380;e nam pozwolono jednocze&#347;nie zasila&#263; si&#281; cia&#322;em Syna i Matki, bo cia&#322;o Chrystusa jest i cia&#322;em Maryi. Jaka&#380;-to &#322;aska ze strony Matki, jaka dobro&#263; ze strony Syna! Ona nas mlekiem, On krwi&#261; zasila; oboje si&#281; sk&#322;adaj&#261; na uczt&#281; dla nas. C&#243;&#380;-to za zbytek mi&#322;o&#347;ci. Szaleni prawdziwie jeste&#347;my, je&#347;li z niej nie korzystamy! Zwa&#380;, cz&#322;owiecze, po&#322;o&#380;enie twoje. Tyle razy Chrystusa krwi&#261; i Matki mlekiem nakarmiony, spokrewni&#322;e&#347; si&#281; z osobami tak wielkiemi; nie b&#261;d&#378;&#380;e wyrodkiem i przez zwracanie si&#281; do g&#322;upstw, nie plam tego &#347;wi&#281;tego spokrewnienia. Maj&#261; czemu zazdro&#347;ci&#263; Anio&#322;owie, gdy&#380; tej &#322;aski co my nie dost&#261;pili! Na ludzk&#261; niedol&#281; tu jest schronienie: kogo przera&#380;a majestat S&#281;dziego, tego podnosi dobrotliwo&#347;&#263; Matki; kogo powstrzymuje sprawiedliwo&#347;&#263;, tego wzywa mi&#322;osierdzie.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0326',
                        'name' => 'XXVI Marca',
                        'content' => 'O mi&#322;owaniu Boga.',
                        'author' => '&#8222;Spraw Bo&#380;e, &#380;ebym Ci&#281; mi&#322;owa&#322;, i daj mi &#322;ask&#281; swoj&#261;, a dostatecznie mnie wzbogacisz, niczego ju&#380; pragn&#261;&#263; nie b&#281;d&#281;.&#8221;',
                        'description' => '(S. Ignat. in orat. sibi familiari).',
                        'description2' => 'Najkorzystniejsz&#261; ta jest mi&#322;o&#347;&#263;, kt&#243;rej o zysk nie chodzi, kt&#243;rej ca&#322;ym zyskiem jest mi&#322;owanie. Inne mi&#322;o&#347;ci kupczeniem s&#261;, tyle si&#281; w nich otrzymuje, ile daje; jestto godna wzgardy chciwos&#263;; darmo mi&#322;uje, kto prawdziwie mi&#322;uje. I nierozumne zwierz&#281;ta znaj&#261; si&#281; na dobrodziejstwach, i s&#281;py tam si&#281; zlatuj&#261;, gdzie &#380;er przeczuwaj&#261;. Mi&#322;o&#347;&#263; Boga winna si&#281; wznie&#347;&#263; wy&#380;ej, za zyskiem nie goni&#263;; ca&#322;ym zyskiem ma by&#263; dla niej sama mi&#322;o&#347;&#263;. Wielk&#261; sobie szkod&#281; wyrz&#261;dzamy, je&#347;li pr&#243;cz Boga innej nagrody szukamy. Chocia&#380;by&#347; wszystko posiad&#322;, bez Boga n&#281;dznym jeste&#347;. Samo niebo bez mi&#322;o&#347;ci Boga, by&#322;oby piek&#322;em; a piek&#322;o z posiadaniem Boga, zamieni&#322;oby si&#281; w niebo. Mi&#322;o&#347;&#263; stworzenia jest nieu&#380;yteczn&#261;, owszem szkodliw&#261;. Sama mi&#322;o&#347;&#263; Boga w wielkie obfituje po&#380;ytki; z niej, jakby ze &#378;r&#243;d&#322;a p&#322;yn&#261; wszystkie dary &#322;aski i chwa&#322;y. M i &#322; u j&nbsp;&nbsp;B o g a,&nbsp;&nbsp;w s z a k t o&nbsp;&nbsp;t a k&nbsp;&nbsp;&#322; a t w o,&nbsp;&nbsp;a&nbsp;&nbsp;b &#281; d z i e s z&nbsp;&nbsp;s z c z &#281; &#347; l i w y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0327',
                        'name' => 'XXVII Marca',
                        'content' => 'O pociechach Ducha &#346;wi&#281;tego.',
                        'author' => '&#8222;&#379;adna rzecz stworzona nie mo&#380;e w duszy takiej sprawi&#263; rado&#347;ci, jak&#261; sprawia w niej &#322;aska Ducha &#346;wi&#281;tego.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden. l. 5).',
                        'description2' => 'Po co si&#281; &#322;udzisz rado&#347;ci&#261;, jak&#261; ci &#347;wiat ofiaruje? Ta tylko rado&#347;&#263; jest prawdziw&#261; i rzeczywist&#261;, kt&#243;rej nas nikt pozbawi&#263; nie mo&#380;e. Pociechy dla duszy s&#261; niezb&#281;dne: albo za najni&#380;szemi goni, albo za najwy&#380;szemi. Tamte dra&#378;ni&#261;, nie zasycaj&#261;; te jedynie dusz&#281;, kt&#243;ra jest nie&#347;mierteln&#261;, zaspokoi&#263; mog&#261;. Wielka-to sztuka umie&#263; si&#281; cieszy&#263;. Cieszenie si&#281; rzeczami z&#322;emi daje pow&#243;d do &#322;ez wylewania. Jak nie znosz&#261; si&#281; ogie&#324; z wod&#261;, tak r&#243;wnie&#380; si&#281; nie znosz&#261; uciechy cielesne z duchowemi. Chcesz nigdy nie by&#263; smutnym? &#8212; t o&nbsp;&nbsp;z a w s z e&nbsp;&nbsp;d o b r z e&nbsp;&nbsp;&#380; y j. Z tego &#378;r&#243;d&#322;a czyste p&#322;yn&#261; pociechy; &#380;adne ci nieszcz&#281;&#347;cia nie dokucz&#261;, &#380;adne nie przygn&#281;bi&#261;, je&#347;li cho&#263; jeden promie&#324; Bo&#380;ej &#322;aski przy&#347;wieca, pociesza.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0328',
                        'name' => 'XXVIII Marca',
                        'content' => 'O przek&#322;adaniu nieba nad ziemi&#281;.',
                        'author' => '&#8222;Ach! jak&#380;e mi cuchnie ziemia, gdy w niebo spogl&#261;dam.&#8221;',
                        'description' => '(S Ignat. apud Bart. l. 4).',
                        'description2' => 'Jeste&#347;my do wy&#380;szych rzeczy stworzeni, nie lubujmy si&#281; przeto w nizkich. Sama natura zach&#281;ca nas do tego: da&#322;a nam czo&#322;o w g&#243;r&#281; podniesione, oczom kaza&#322;a w niebo spogl&#261;da&#263;, oblicza a bardziej jeszcze serca ku gwiazdom kierowa&#263;. Niebo ojczyzn&#261; jest, ziemia wygnaniem: tamto obfituje w b&#322;ogos&#322;awie&#324;stwa, ta w kl&#281;ski. W g&#243;r&#281; przeto &#380;&#261;dze, w g&#243;r&#281; pragnienia! gard&#378; ziemi&#261;, a spogl&#261;daj w niebo! Niech nam cuchnie ziemia, niech cuchn&#261; wszystkie jej dary; dobremi si&#281; one wydaj&#261;, ale dobremi nie s&#261;, owszem s&#261; z&#322;emi, bo nas psuj&#261;, bo nam do nieba wej&#347;cie tamuj&#261;. Pociechy ziemskie maj&#261; razem z nami i bydl&#281;ta; pociechy niebieskie zbli&#380;aj&#261; nas do Anio&#322;&#243;w: tamte s&#261; brudne, te czyste; tamte chwilowe, te wieczne. O te wi&#281;c ubiega&#263; si&#281; nale&#380;y, tych po&#380;&#261;da&#263;; a od tamtych stroni&#263;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0329',
                        'name' => 'XXIX Marca',
                        'content' => 'O wzgl&#281;dzie ludzkim.',
                        'author' => '&#8222;Kto si&#281; bardzo obawia ludzi, ten nigdy nic wielkiego dla Boga nie podejmie.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Kto si&#281; na ludzi ogl&#261;da, ten &#322;atwo o Bogu zapomina; &#243; w&nbsp;&nbsp;b a &#322; w a n,&nbsp;&nbsp;c o&nbsp;&nbsp;p o w i e d z &#261;&nbsp;&nbsp;l u d z i e? jak&#380;e wielu odwodzi od sk&#322;adania serdecznej czci prawdziwemu Bogu! Je&#347;libym si&#281; podoba&#322; ludziom, nie by&#322;bym Chrystusa s&#322;ug&#261; <sup>1</sup>. Gdy sobie raz owa nieszcz&#281;&#347;liwa obawa drog&#281; do b&#322;&#281;du utoruje; wtedy nie ma nic, czegoby nie doradzi&#322;a. O przewrotny na ludzi wzgl&#281;dzie; jak&#380;e nas ze wstydu wyzuwasz, jak nam bezczelnymi i wyst&#281;pnymi by&#263; ka&#380;esz! Czemu si&#281; l&#281;kasz ludzi? Bezsilnymi oni s&#261;, nic sobie ani tobie pom&#243;dz nie mog&#261;, w niczem zaszkodzi&#263;, bez woli Boga. T e g o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;l &#281; k a j,&nbsp;&nbsp;k t &#243; r y&nbsp;&nbsp;p o&nbsp;&nbsp;&#347; m i e r c i,&nbsp;&nbsp;m o &#380; e&nbsp;&nbsp;d u s z &#281;&nbsp;&nbsp;i&nbsp;&nbsp;c i a &#322; o&nbsp;&nbsp;d o&nbsp;&nbsp;p i e k &#322; a&nbsp;&nbsp;z a t r a c i &#263; <sup>2</sup>. W sprawie Boga nic si&#281; obawia&#263; nie nale&#380;y: ale jak ig&#322;a magnesowa, czy si&#281; u&#347;miecha Zefir, czy si&#281; sro&#380;y Boreasz, zawsze ku biegunowi si&#281; zwraca; tak i ty b&#261;d&#378; nieporuszony, gdy idzie o Boga, o jego wol&#281;; ani si&#281; w prawo nie przechylaj, ani w lewo.',
                        'description3' => '1) Galat. 1, 10.<br/>
    2) &#346;. Mat. 10, 28.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0330',
                        'name' => 'XXX Marca',
                        'content' => 'O powolno&#347;ci &#322;asce Boskiej.',
                        'author' => '&#8222;Jak pie&#324; bezkszta&#322;tny nie wie, &#380;e mo&#380;e by&#263; zamieniony na pos&#261;g przecudnej pi&#281;kno&#347;ci; ale wie o tem rze&#378;biarz: tak wielu s&#322;abo w chrze&#347;cia&#324;skiej wierze ugruntowanych nie pojmuj&#261;, &#380;e w r&#281;ce Boga, na &#347;wi&#281;tych przemieni&#263; si&#281; mog&#261;, byleby tylko tej r&#281;ce mistrzowskiej nie stawiali oporu.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'B&#243;g tylko jeden jest tak bieg&#322;ym artyst&#261;, &#380;e lada z czego wszystko mo&#380;e uskuteczni&#263;; bo on tylko jeden mo&#380;e, co brakuje, doda&#263;; co zbywa, uj&#261;&#263;. P o z w &#243; l&nbsp;&nbsp;m u&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;u r a b i a &#263;. Nikim nie nale&#380;y gardzi&#263;. Chocia&#380;by kto by&#322; jak pie&#324;, mo&#380;e si&#281; z czasem przemieni w kszta&#322;tny pos&#261;g, stanie sztuki arcydzie&#322;em, wywo&#322;a wszystkich podziw; mo&#380;e zajmie miejsce na o&#322;tarzu, przed kt&#243;rym ty kiedy&#347; zgina&#263; b&#281;dziesz kolana. &#377;le s&#261;dzi, kto z powierzchowno&#347;ci s&#261;dzi. Jak z najlepszych najgorsi, tak z najgorszych najlepsi sta&#263; si&#281; mog&#261;. Ty&nbsp;&nbsp;n a&nbsp;&nbsp;s i e b i e,&nbsp;&nbsp;n i e&nbsp;&nbsp;n a&nbsp;&nbsp;i n n y c h&nbsp;&nbsp;z w a &#380; a j. Jak glina bez oporu poddaje si&#281; r&#281;ce garncarza, zawsze gotowa do przyj&#281;cia takiego kszta&#322;tu, jaki jej ta r&#281;ka nada; tak i ty powolnym si&#281; zawsze Bogu okazuj. P o z w &#243; l,&nbsp;&nbsp;&#380; e b y&nbsp;&nbsp;O n&nbsp;&nbsp;d z i a &#322; a &#322;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0331',
                        'name' => 'XXXI Marca',
                        'content' => 'O dzia&#322;aniu dla Boga.',
                        'author' => '&#8222;Kto zapomina o sobie i swych korzy&#347;ciach przez wzgl&#261;d na Boga, ten ma czujnego nad sob&#261; opiekuna w Bogu.&#8221;',
                        'description' => '(S. Ignat. apud Bartol. l. 4).',
                        'description2' => 'R&#243;b dla Boga, co tylko mo&#380;esz; a on zrobi dla ciebie, czego ty nie mo&#380;esz; bo nietrudno mu przyj&#347;&#263; z pomoc&#261; tobie, i moc ma po temu i wol&#281;. Ch&#281;tniejszym on jest do dawania &#322;ask, ni&#380; ty do ich brania. Nikt bardziej o sobie nie pami&#281;ta nad tego, kt&#243;ry w ten spos&#243;b siebie zaniedbuje. &#377;le sobie radzisz, gdy czas s&#322;u&#380;bie Bo&#380;ej po&#347;wi&#281;cony, na co innego obracasz; jak&#380;e si&#281; mo&#380;esz spodziewa&#263; powodzenia? Je&#347;li obra&#380;asz na siebie Boga, zk&#261;d&#380;e b&#281;dziesz mia&#322; b&#322;ogos&#322;awie&#324;stwo? S z u k a j c i e&nbsp;&nbsp;n a p r z &#243; d&nbsp;&nbsp;k r &#243; l e s t w a&nbsp;&nbsp;B o &#380; e g o&nbsp;&nbsp;i&nbsp;&nbsp;s p r a w i e d l i w o &#347; c i&nbsp;&nbsp;j e g o,&nbsp;&nbsp;a&nbsp;&nbsp;w s z y s t k o&nbsp;&nbsp;i n n e&nbsp;&nbsp;b &#281; d z i e&nbsp;&nbsp;w a m&nbsp;&nbsp;p r z y d a n e <sup>1</sup>. Nie tracimy czasu, gdy go obracamy na pobo&#380;no&#347;&#263;; wi&#281;cej skorzystamy modl&#261;c si&#281;, ni&#380; si&#281; naukom oddaj&#261;c. Napr&#243;&#380;no si&#281; wysilacie! Nie wy to jeste&#347;cie, co m&#243;wicie. Ojciec niebieski wska&#380;e wam, co w danej chwili m&#243;wi&#263; macie <sup>2</sup>. Bez niego nic, z nim mo&#380;ecie dokona&#263; wszystkiego. Dla tych jest hojniejszy, kt&#243;rzy o siebie i sprawy swoje nie wiele, a o Boga i jego wol&#281; bardzo si&#281; troszcz&#261;.',
                        'description3' => '1) &#346;. Mat. 6, 33.<br/>
    2) &#346;. Mat. 10, 19.',
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_04',
                'name' => 'April',
                'colour_value' => '#81c9b7',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_0401',
                        'name' => 'I Kwietnia',
                        'content' => 'O wzgardzie siebie.',
                        'author' => '&#8222;W&#347;r&#243;d wyg&#243;d i dostatk&#243;w, wzgarda siebie i upokorzenie ducha winno by&#263; pierwsze i silniejsze, ni&#380; martwienie cia&#322;a.&#8221;',
                        'description' => '(S. Ignat. in vita apud Bart.)',
                        'description2' => 'Jak z jednej strony rzadk&#261;, tak z drugiej wielk&#261; cnot&#261; jest pokora prawdziwa: &#380;e si&#281; tamaryszki schylaj&#261;, &#380;e po ziemi czo&#322;gaj&#261; si&#281; robaczki, to nie jest wielkiem; ale &#380;e wynios&#322;y cedr g&#322;ow&#281; nachyla i jak wysoko ro&#347;nie w g&#243;r&#281;, tak g&#322;&#281;boko w ziemi&#281; zapuszcza korzenie, to co&#347; niezwyk&#322;ego, co&#347; szczeg&#243;lnego. Zaszczyty i &#380;ycie na tej samej szali stawia&#263;, to cecha pychy; jak&#380;e dalek&#261; jest od tego zasada Chrystusa, k t &#243; r y&nbsp;&nbsp;w o l a &#322;&nbsp;&nbsp;b y &#263;&nbsp;&nbsp;p o &#347; m i e w i s k i e m&nbsp;&nbsp;l u d z i&nbsp;&nbsp;i&nbsp;&nbsp;w z g a r d &#261;&nbsp;&nbsp;p o s p &#243; l s t w a! <sup>1</sup> Kto chce by&#263; wielkim, ten nim zostanie upokarzaj&#261;c si&#281; w miar&#281;. Je&#347;li bowiem &#347;wiat nic wznio&#347;lejszego nie ma nad zaszczyty, to gardzenie niemi, nie jest rzecz&#261; ma&#322;&#261;, gdy&#380; tym sposobem gardz&#261;cy staje si&#281; wi&#281;kszym od tego, co &#347;wiat najbardziej ceni. S&#322;owami si&#281; upokarza&#263;, s&#322;owami nizko o sobie trzyma&#263;, jest ju&#380; prawie zwyczajem, nawet zarozumiali to czyni&#261;; ale &#380;eby upokorzony albo wzgardzony sam o sobie tak trzyma&#322; w duszy, sam sob&#261; gardzi&#322;, to ju&#380; jest cnota, kt&#243;ra szczytu doskona&#322;o&#347;ci dosi&#281;g&#322;a.',
                        'description3' => '1) Psalm 21, 7.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0402',
                        'name' => 'II Kwietnia',
                        'content' => 'O sile &#322;aski.',
                        'author' => '&#8222;A&#380;eby do zbawienia dusz skutecznemi by&#322;y przymioty natury, potrzeba je do tego z wewn&#261;trz pobudza&#263;, i ztamt&#261;d dla nich si&#322;y czerpa&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Nie zawsze ten zbiera wi&#281;cej, kto wi&#281;cej zasia&#322;. Nasienie samo z siebie niepo&#380;yteczne, i &#380;adnego nie przyniesie owocu, je&#380;eli B&#243;g nie da wzrostu. Gdzie zbywa na duchu, tam nasienie s&#322;owa jest bezp&#322;odne. Daremnie si&#281; trudzi organista! je&#347;li piszcza&#322;ek nie nape&#322;ni powietrze, organy g&#322;osu nie wydadz&#261;. I Aposto&#322;owie do uczenia ludu nie pierwiej si&#281; zabrali, a&#380; Duchem z nieba nape&#322;nieni zostali <sup>1</sup>. G&#322;os ludzki martwy jest, dochodzi do uszu, ale nie przenika serca, chyba &#380;e si&#281; z&#322;&#261;czy z g&#322;osem Boga. Napr&#243;&#380;no wyt&#281;&#380;asz si&#322;y, je&#347;li B&#243;g z tob&#261; nie m&#243;wi, nic nie zdzia&#322;asz. B&#243;g sw&#243;j g&#322;os &#322;&#261;czy tylko z tymi, kt&#243;rzy z nim s&#261; z&#322;&#261;czeni; z t &#261; d&nbsp;&nbsp;t a k&nbsp;&nbsp;n i e j e d n a k o w y&nbsp;&nbsp;t y l u&nbsp;&nbsp;A p o s t o &#322; &#243; w&nbsp;&nbsp;o w o c! Je&#347;li umys&#322; wybornemi prawdami o&#347;wiecasz, a serce szpetn&#261; chorob&#261; zara&#380;one w odr&#281;twieniu zostawiasz; je&#347;li sam niebieg&#322;y w tem, czego uczysz, innych do cnoty, do moralno&#347;ci pobudzasz; nieszczeg&#243;lnego zt&#261;d spodziewaj si&#281; owocu.',
                        'description3' => '1) Dzieje Apostolskie 2.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0403',
                        'name' => 'III Kwietnia',
                        'content' => 'O leczeniu choroby.',
                        'author' => '&#8222;Ze wszystkimi wprawdzie, ale z ni&#380;szymi szczeg&#243;lnie trzeba w m&#243;wieniu by&#263; oszcz&#281;dnym, w s&#322;uchaniu cierpliwym. Ch&#281;tnie nale&#380;y s&#322;ucha&#263;, gdy si&#281; kto&#347; przed nami chce wynurzy&#263;.&#8221;',
                        'description' => '(S. Ignat. Hist. soc. l. 3).',
                        'description2' => 'Mo&#380;no&#347;&#263; wywn&#281;trzenia si&#281;, wypowiedzenia skarg zbola&#322;ej duszy, cz&#281;sto lekarstwem bywa na chorob&#281;, kt&#243;ra si&#281; uwa&#380;a&#322;a za nieuleczon&#261;. Zupe&#322;nie tak samo, jak nieraz uwalniaj&#261;c od &#380;&#243;&#322;ci &#380;o&#322;&#261;dek, odzyskuje si&#281; zdrowie. Chorego powinien wys&#322;ucha&#263; lekarz, je&#347;li nie chce pob&#322;&#261;dzi&#263;; nikt od chorego nie wie lepiej, co on cierpi, poniewa&#380; nikt nie czuje dotkliwiej. Szcz&#281;&#347;liwy lekarz, kt&#243;ry s&#322;uchaj&#261;c cierpliwie, je&#347;li nie uleczy&#263;, to przynajmniej z&#322;agodzi&#263; mo&#380;e chorob&#281;. Okrutny, kt&#243;ry tak &#322;atwym &#347;rodkiem nie chce pom&#243;dz. B&#243;l si&#281; niejako wyrzuca i zmniejsza, gdy si&#281; nim ze s&#322;uchaj&#261;cym dzielimy, szczeg&#243;lniej gdy cierpi&#261;cy nietylko ch&#281;tne uszy, ale i przyjazne serce znajdzie, wtedy s&#322;odkie s&#322;owo pociechy wielk&#261; mu ulg&#281; przynosi. Dok&#322;adne poznanie choroby jest leczenia podstaw&#261;. &#321;atwiej cia&#322;a, ni&#380; duszy chorob&#281; poznasz, z wyj&#261;tkiem, je&#347;li chory sam obja&#347;ni, co mu dolega. Ani lekarz cia&#322;u, ani zwierzchnik duszy odpowiedniego lekarstwa nie przepisz&#261;, je&#347;li pierwiej obadwa chorego cierpliwie nie wys&#322;uchaj&#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0404',
                        'name' => 'IV Kwietnia',
                        'content' => 'O mi&#322;owaniu Boga.',
                        'author' => '&#8222;Ta jedna troska ze wszech miar jest chwalebna, Boga mi&#322;owa&#263;, i na jego mi&#322;o&#347;&#263; coraz wi&#281;ksz&#261;, tem mi&#322;owaniem sobie zarabia&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Mi&#322;o&#347;&#263; jest cz&#322;owieka szcz&#281;&#347;ciem; nie owa jednak z &#347;lepego pop&#281;du powsta&#322;a, kt&#243;ra dobro fa&#322;szywe za prawdziwe bierze, bo ta jest zwodzicielk&#261;, obiecuje rozkosz a darzy gorycz&#261;: ale owa rozumna, kt&#243;ra za przedmiot swych stara&#324; obiera dobro prawdziwe, wieczne, niezmienne. Ma&#322;a odrobinka Bo&#380;ej mi&#322;o&#347;ci s&#322;odsz&#261; jest, ni&#380; wszystko, co &#347;wiat za godne mi&#322;owania przedstawia. Kto &#347;wiatowej mi&#322;o&#347;ci kosztuje, ten j&#261; sobie lekko wa&#380;y; kto si&#281; z Bo&#380;&#261; zapozna, ten s&#322;&#243;w nie ma na jej dostateczne ocenienie: i m&nbsp;&nbsp;d &#322; u &#380; e j&nbsp;&nbsp;w&nbsp;&nbsp;n i e j&nbsp;&nbsp;t r w a,&nbsp;&nbsp;t e m&nbsp;&nbsp;u s i l n i e j&nbsp;&nbsp;j e j&nbsp;&nbsp;p r a g n i e <sup>1</sup>. Mi&#322;owa&#263;, to znaczy cieszy&#263; si&#281; ze szcz&#281;&#347;cia tego, kt&#243;rego mi&#322;ujemy, tak samo, jakby z naszego w&#322;asnego. O jak&#380;e jestem szcz&#281;&#347;liwy, je&#347;li mi&#322;uj&#281; Boga! w tych wszystkich bowiem dobrach, kt&#243;re B&#243;stwu s&#261; w&#322;a&#347;ciwe, udzia&#322; bior&#281;! O bodajbym nic nie my&#347;la&#322; i nic nie czyni&#322;, tylko Ciebie m&#243;j Panie mi&#322;owa&#322;! Mi&#322;owa&#263; Boga, to znaczy pok&#243;j sobie zapewni&#263;, pok&#243;j, nad kt&#243;ry doskonalszego nie ma. Na &#347;wiecie wszystko niepokoi, wszystko przemija; wtedy prawdziwie si&#281; uspokoisz, gdy si&#281; w mi&#322;o&#347;ci Bo&#380;ej pogr&#261;&#380;ysz.',
                        'description3' => '1) &#346;. Grzegorz.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0405',
                        'name' => 'V Kwietnia',
                        'content' => 'O jednaniu sobie drugich.',
                        'author' => '&#8222;Dla zwr&#243;cenia ludzi ku Bogu, ku jego s&#322;u&#380;bie &#347;wi&#281;tej, wszystkiem dla wszystkich sta&#263; si&#281; potrzeba: niczem bowiem tak si&#281; ludzie nie jednaj&#261;, jak podobie&#324;stwem my&#347;li i czyn&#243;w, w og&#243;le podobie&#324;stwem &#380;ycia.&#8221;',
                        'description' => '(S. Ignat. apud Nolarc.)',
                        'description2' => 'Trudniej jest ludzkie dusze, ni&#380; zamki zdobywa&#263;: te &#380;elazem i machinami si&#281; zdobywaj&#261;, tamtym i ca&#322;a armia nie podo&#322;a; uprzejmo&#347;&#263;, dobro&#263;, nier&#243;wnie skuteczniej tu dzia&#322;aj&#261;, ni&#380; si&#322;a. Osoby, z kt&#243;remi otwarcie do rzeczy przyst&#281;puj&#261;c napr&#243;&#380;noby&#347; si&#281; mozoli&#322;, &#322;atwo pozyskasz sposobem ubocznym, postarawszy si&#281; wprz&#243;d, nim naucza&#263; zaczniesz, o ich &#380;yczliwo&#347;&#263;. Gdy ci&#281; polubi&#261;, to wszystko jak najpomy&#347;lniej p&#243;jdzie, nietylko uszami, ale i sercami ch&#281;tnie ku tobie si&#281; zwr&#243;c&#261; &#8212; p o p r o w a d z i s z&nbsp;&nbsp;i c h,&nbsp;&nbsp;d o k &#261; d&nbsp;&nbsp;z e c h c e s z. Gdy Orfeusz wdzi&#281;cznie przygrywa&#322;, to zwierz&#281;ta nietylko go s&#322;ucha&#322;y, ale i sz&#322;y za nim. Podobnego sposobu i ty u&#380;ywaj, gdy si&#281; do zdobywania dusz ludzkich zabierasz; inaczej pozostan&#261; niewzruszonemi, jak ska&#322;a. S&#261;-to niewinne czary, pod urokiem kt&#243;rych ludzie ulegaj&#261;. Nie ma tak dzikiego, kt&#243;ryby si&#281; nie da&#322; zjedna&#263; dobroci&#261;. Uprzejma mowa i &#322;askawe wejrzenie, nawet z twardej ska&#322;y przychylno&#347;&#263;, jako odpowiadaj&#261;ce echo, wywo&#322;uj&#261;. O t o&nbsp;&nbsp;j a k&nbsp;&nbsp;n i e w i e l k i m&nbsp;&nbsp;k o s z t e m&nbsp;&nbsp;z d o b y w a j &#261;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;d u s z e!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0406',
                        'name' => 'VI Kwietnia',
                        'content' => 'O mi&#322;owaniu duszy.',
                        'author' => '&#8222;Nie mo&#380;e si&#281; uwa&#380;a&#263; za przyjaciela Chrystusa, kto nie mi&#322;uje dusz ludzkich, kt&#243;re On wylaniem swej krwi odkupi&#322;.&#8221;',
                        'description' => '(S. Ignat. apud Nolarc.)',
                        'description2' => 'Je&#347;li jedna w mi&#322;uj&#261;cych dusza, jedno tak&#380;e winno by&#263; uczucie, aby ten sam przedmiot obadwaj mi&#322;owali. Je&#347;li Boga mi&#322;ujesz, to ju&#380; masz miar&#281;, jak mi&#322;owa&#263; winiene&#347; dusze. Ze wszystkiego, co B&#243;g stworzy&#322;, tylko dusz&#281; swoj&#261; mi&#322;o&#347;ci&#261; zaszczyca, tylko do niej swoj&#261; &#322;askawo&#347;&#263; rozci&#261;ga: dla innych rzeczy, kt&#243;re na &#347;wiecie s&#261;, takim si&#281; nie okazuje. Patrz, w jakiej cenie winiene&#347; mie&#263; dusz&#281;, jak si&#281; z ni&#261; obchodzi&#263;! Dusza jest obrazem Boga <sup>1</sup>; a ty je&#347;li Boga mi&#322;ujesz, to czy&#380; pozwolisz, aby jego obraz tkwi&#322; w b&#322;ocie, gdy mo&#380;esz go ztamt&#261;d wydosta&#263;? Tem pi&#281;kniejszy jest ten obraz, im bli&#380;szy Boga. Oczyszcza&#263; go z brud&#243;w, do przyjaciela nale&#380;y, przyjaciela jest obowi&#261;zkiem. Jak&#380;e wiele dusze Chrystusa Pana kosztowa&#322;y! S&#261; to przedmioty ceny niesko&#324;czonej, owoce takiego trudu, jakim by&#322;a jego m&#281;ka; kto ich nie chroni od zguby, ten nie mi&#322;uje Odkupiciela. C h r o &#324;&nbsp;&nbsp;s &#322; o w e m,&nbsp;&nbsp;c h r o &#324;&nbsp;&nbsp;p i &#243; r e m,&nbsp;&nbsp;c h r o &#324;&nbsp;&nbsp;c z y n e m!',
                        'description3' => '1) Genes. l, 27.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0407',
                        'name' => 'VII Kwietnia',
                        'content' => 'O przesadzie w strofowaniu.',
                        'author' => '&#8222;Zwierzchnika raczej niecierpliwego, ni&#380; o karno&#347;&#263; dba&#322;ego, wskazuje strofowanie zbyt cz&#281;ste.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => 'Ktoby chcia&#322; ka&#380;dego ka&#380;de przewinienie kara&#263;, tenby musia&#322; chyba wszystkich ludzi ze &#347;wiata pousuwa&#263;, gdy&#380; nikogo nie ma bez wady. Dop&#243;ty b&#281;d&#261; upadki i wyst&#281;pki, dop&#243;ki b&#281;d&#261; ludzie. Cz&#281;sto skuteczniej zaradza si&#281; z&#322;emu przez roztropne na&#324; niezwa&#380;anie, ni&#380; przez natarczywe &#347;ciganie. Wiele leczy czas, w niekt&#243;rych przypadkach samo z&#322;e ustaje, jak ropa z wrzod&#243;w, gdy dostatecznie wzbior&#261;, uchodzi. Ile&#380; to razy kara zbyt cz&#281;sta z&#322;e pogorszy&#322;a! Tak zwykle bywa, gdy kogo&#347; przez kar&#281; niepomiern&#261; wyzuwamy ze wstydu; cz&#322;owiek wtedy nie ma ju&#380; &#380;adnego hamulca. Im bardziej jest karany, tem na wi&#281;ksze z&#322;e si&#281; wa&#380;y. Wi&#281;ksza cz&#281;sto wina jest karz&#261;cego, ni&#380; karanego: bo ta pochodzi z u&#322;omno&#347;ci, tamta z porywczo&#347;ci. Po sobie miarkuj, jak z innymi post&#281;powa&#263; lepiej; gdyby&#347; za ka&#380;dy sw&#243;j b&#322;&#261;d odbiera&#322; przygan&#281;, czyby&#347; j&#261; zni&#243;s&#322; i jakby&#347; zni&#243;s&#322;? P o m y &#347; l&nbsp;&nbsp;i&nbsp;&nbsp;b e z s t r o n n &#261;&nbsp;&nbsp;d a j&nbsp;&nbsp;o d p o w i e d &#378;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0408',
                        'name' => 'VIII Kwietnia',
                        'content' => 'O u&#380;yciu czasu.',
                        'author' => '&#8222;Z przychodz&#261;cymi do ciebie dla zabicia czasu, rozmawiaj o &#347;mierci, o s&#261;dzie, i innych tym podobnych rzeczach, kt&#243;re takich ludzi, chocia&#380;by przyg&#322;uchli, usze mocno ra&#380;&#261;. W ten spos&#243;b sobie i im dobrze zrobisz: bo albo odejd&#261; lepszymi, albo na przysz&#322;o&#347;&#263; powstrzymaj&#261; si&#281; od zabierania tobie czasu.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Nie ma nic dro&#380;szego nad czas, a w&#322;a&#347;nie przyjaciele s&#261; jego z&#322;odziejami; z nies&#322;ychan&#261; zaprawd&#281; szkod&#261;, je&#347;li si&#281; zu&#380;ywa bez korzy&#347;ci, je&#347;li na g&#322;upstwa. Potrzeba tu by&#263; chciwym, ani chwili nie po&#347;wi&#281;ca&#263; bez zysku; je&#347;li siebie, uszy lub j&#281;zyk dajesz: wymagaj serca, skruch&#281; jako zysk uwa&#380;aj, owoc duchowny zbieraj. B&#261;d&#378; bieg&#322;ym alchimist&#261;; z ka&#380;dej rzeczy wydobywaj z&#322;oto. O wojnach, o interesach kto&#347; nadmieni; ty o pokoju z Bogiem,&nbsp;&nbsp;o&nbsp;&nbsp;j e d n e m&nbsp;&nbsp;n i e z b &#281; d n e m&nbsp;&nbsp;w t r &#261; &#263; <sup>1</sup>, tak z b&#322;ota per&#322;&#281;, z &#380;u&#380;la z&#322;oto wydob&#281;dziesz. J&#281;zykiem nied&#378;wied&#378; bezkszta&#322;tn&#261; mas&#281; w odpowiedni kszta&#322;t urabia: ty swego j&#281;zyka na podobny cel u&#380;yj: c z &#322; o w i e k a&nbsp;&nbsp;z m y s &#322; o w e g o&nbsp;&nbsp;w&nbsp;&nbsp;d u c h o w e g o,&nbsp;&nbsp;g r z e s z n i k a&nbsp;&nbsp;w&nbsp;&nbsp;A n i o &#322; a&nbsp;&nbsp;p r z e m i e n i a j.',
                        'description3' => '1) &#346;. &#321;ukasz 10, 42.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0409',
                        'name' => 'IX Kwietnia',
                        'content' => 'O zachowaniu si&#281; &#347;wiata.',
                        'author' => '&#8222;Dziwny pok&#243;j &#347;wiata ze mn&#261;: nic mi nie m&#243;wi, gdy w ukryciu przebywam i jakbym ojczystego j&#281;zyka by&#322; nie&#347;wiadom, milcz&#281;; ale zaledwie si&#281; uka&#380;&#281;, zaledwie odezw&#281;, to zaraz w zwartej masie na mnie powstaje.&#8221;',
                        'description' => '(S. Ignat. vitae l. 2).',
                        'description2' => 'Zazdrosnym jest szatan, bez mszczenia si&#281; dusz sobie zabiera&#263; nie pozwala, op&#243;r stawia, wojn&#281; wszczyna; gdy sam na plac boju wyj&#347;&#263; nie chce, to sprzymierze&#324;c&#243;w swoich posy&#322;a, kt&#243;rzy jego sprawy pod r&#243;&#380;nemi pozorami zawzi&#281;cie broni&#261;. Zna si&#281; bowiem na warto&#347;ci dusz ludzkich szatan. Je&#347;li widzisz, &#380;e tych lub owych zakonnik&#243;w bardzo oszczerstwami obrzucaj&#261;, &#380;e ich w wielkiej nienawi&#347;ci maj&#261;, wiedz, &#380;e to s&#261; dusz ludzkich mi&#322;o&#347;nicy, &#380;e nad ich zbawieniem gorliwie pracuj&#261;. Takiej walki nie przechodz&#261; zakonnicy, kt&#243;rych piek&#322;o sobie zamawia. Szatan ich oszcz&#281;dza, &#322;askawie si&#281; z nimi obchodzi, bo i od nich nie jest niepokojony, bo pogr&#261;&#380;eni w bezczynno&#347;ci pozwalaj&#261; mu swobodnie w&#347;r&#243;d wiernych gospodarowa&#263;. S t r a s z n e - t o&nbsp;&nbsp;z a p o m n i e n i e&nbsp;&nbsp;s i &#281;! Dobrego zaniedbywa&#263; nie nale&#380;y z tej przyczyny, &#380;e si&#281; piek&#322;u nie podoba, &#380;e &#347;wiat si&#281; sro&#380;y, &#380;e przeciwnik&#243;w ma; ale owszem tem silniej przy niem obstawa&#263;. B&#243;g spraw&#281; swoj&#261; poprze; co uwa&#380;asz za niepokonan&#261; zapor&#281;, to w jednej chwili ust&#261;pi, je&#347;li ty przy swych dobrych przedsi&#281;wzi&#281;ciach wytrwasz. Pot&#281;&#380;niejsz&#261; jest od piek&#322;a &#322;aska Boska; tej ufaj, a zwyci&#281;&#380;ysz, z trudnego po&#322;o&#380;enia zaszczytnie wyjdziesz.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0410',
                        'name' => 'X Kwietnia',
                        'content' => 'O potrzebach cia&#322;a.',
                        'author' => '&#8222;Nie uwa&#380;aj tego za kradzie&#380; wyrz&#261;dzon&#261; pobo&#380;no&#347;ci, co koniecznie po&#347;wi&#281;ci&#263; trzeba naturze.&#8221;',
                        'description' => '(S. Ignat. in Hist. Soc. l. 1).',
                        'description2' => 'Wielka jest cz&#322;owieka godno&#347;&#263;: na obraz Bo&#380;y stworzony <sup>1</sup>, do nieba na dziedzica przeznaczony, &#322;aski Boskiej uczestnik, do cnoty sposobny; aby si&#281; nie wynosi&#322;, pr&#243;cz duszy, sk&#322;ada si&#281; i z cia&#322;a, kt&#243;re ma swoje potrzeby. I nie ginie czas, kt&#243;ry si&#281; dla cia&#322;a po&#347;wi&#281;ca. Gdy karmimy os&#322;a, gdy mu na wypoczynek zezwalamy, on nam s&#322;u&#380;y; podobnie i cia&#322;u nale&#380;y da&#263; wypoczynek, aby si&#281; tem dzielniej nast&#281;pnie do pracy wzi&#281;&#322;o. Biedne jest duszy ludzkiej po&#322;o&#380;enie; pobo&#380;no&#347;ci bez przerwy, chocia&#380;by chcia&#322;a, odda&#263; si&#281; nie mo&#380;e: jak &#322;uk zawsze nat&#281;&#380;ony psuje si&#281;, tak i dusza zar&#243;wno jak i cia&#322;o w pracy, pewnego wypoczynku, pewnej przerwy wymaga. Nic nie czyni, kto zbyt wiele czyni: bo gdy si&#281; sforsuje, to do niczego b&#281;dzie. Nale&#380;y miarkowa&#263; zapa&#322;, aby ca&#322;kiem nie wygas&#322;. Gdy si&#281; za du&#380;o wlewa oliwy do lampy, to nie wzmacnia si&#281; &#347;wiat&#322;a, ale os&#322;abia, zupe&#322;nie przyt&#322;umia. C o&nbsp;&nbsp;w&nbsp;&nbsp;m i a r &#281;,&nbsp;&nbsp;t o&nbsp;&nbsp;n a j t r w a l s z e,&nbsp;&nbsp;n a j l e p s z e.',
                        'description3' => '1) Genes. 1, 27.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0411',
                        'name' => 'XI Kwietnia',
                        'content' => 'O sposobie pozyskiwania dusz.',
                        'author' => '&#8222;Ten co si&#281; do uprawy winnicy Pa&#324;skiej zabiera, winien sobie pokor&#261; i samego siebie pogard&#261; torowa&#263; drog&#281; do rzeczy tak wznios&#322;ej. Na takiej podstawie co zbuduje, to mocnem b&#281;dzie.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Ten co szuka z&#322;ota, r&#243;wnie jak i ten co &#322;owi per&#322;y; zni&#380;aj&#261; si&#281;, zag&#322;&#281;biaj&#261;: jeden we wn&#281;trze ziemi, drugi na dno morza &#8212; nie inaczej te&#380;, tylko tym samym sposobem, zni&#380;eniem si&#281;, pokor&#261;, odnajduj&#261; si&#281; dusze ludzkie. Sam Chrystus Pan, najwi&#281;kszy dusz naszych mi&#322;o&#347;nik, odszukiwa&#322; je nie inn&#261; drog&#261; tylko drog&#261; poni&#380;enia, drog&#261; wzgardy samego siebie. Ile kto od tego przyk&#322;adu odst&#281;puje, tyle w swojej pracy oko&#322;o pozyskania dusz zawodu doznaje. Jestto najwi&#281;ksza z &#322;ask, je&#347;li mo&#380;emy razem z Bogiem oko&#322;o zbawienia dusz pracowa&#263;. Tej &#322;aski, cz&#322;owiek dumny, zarozumia&#322;y, spodziewa&#263; si&#281; nie mo&#380;e, b o&nbsp;&nbsp;j e j&nbsp;&nbsp;B &#243; g&nbsp;&nbsp;t y l k o&nbsp;&nbsp;p o k o r n y m&nbsp;&nbsp;u d z i e l a <sup>1</sup>. Nic tyle na przekonanie nie dzia&#322;a, ile pokora; wi&#281;cej na ni&#261; liczy&#263; mo&#380;na, ni&#380; na bibliotek&#281; ca&#322;&#261;, chocia&#380;by najwi&#281;ksz&#261;. Patrz, co znacz&#261; zdolno&#347;ci, lata, do&#347;wiadczenie; patrz, jak ma&#322;y maj&#261; udzia&#322; w dusz pozyskiwaniu!',
                        'description3' => '1) I. &#346;. Piotr 5, 5.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0412',
                        'name' => 'XII Kwietnia',
                        'content' => 'O przyjmowaniu Cia&#322;a Pa&#324;skiego.',
                        'author' => '&#8222;Nie nale&#380;y si&#281; powstrzymywa&#263; od chleba Anielskiego dlatego, &#380;e si&#281; nie doznaje wielkich pociech, bo to by&#322;oby to samo, co chcie&#263; z g&#322;odu umrze&#263; dlatego, &#380;e nie ma piernika.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Jak w pokarmach cia&#322;a, nie zawsze zdrowiu to bardziej s&#322;u&#380;y, co przyjemniej podniebienie &#322;echce; tak i kommunia &#347;wi&#281;ta niekoniecznie ta ma si&#281; za naju&#380;yteczniejsz&#261; dla duszy uwa&#380;a&#263;, kt&#243;ra po przyj&#281;ciu wi&#281;cej pociech dostarcza. Chleb dobry pomna&#380;a si&#322;y, cukierki &#322;echc&#261; podniebienie, ale na &#380;o&#322;&#261;dek nie s&#261; zdrowe. Prawdziwa pobo&#380;no&#347;&#263; na &#380;ywej wierze polega, na mocnej nadziei, na nieudanej mi&#322;o&#347;ci; bez &#322;ez i wzdycha&#324; mo&#380;e si&#281; obej&#347;&#263;. Owa czu&#322;ostkowo&#347;&#263; w pobo&#380;no&#347;ci, cielesnym smakiem jest, nie duchowym: k t o&nbsp;&nbsp;z a&nbsp;&nbsp;n i &#261;&nbsp;&nbsp;g o n i,&nbsp;&nbsp;t e n&nbsp;&nbsp;s i e b i e,&nbsp;&nbsp;n i e&nbsp;&nbsp;B o g a&nbsp;&nbsp;s z u k a. &#321;akocie zostawiaj&#261; si&#281; dzieciom. Serca i duszy, nie smaku i podniebienia, pokarmem jest Eucharystya. Kto jest chory, szuka lekarstwa, nie pytaj&#261;c czy przyjemne, ale czy pomocne? Nie mia&#322;by rozumu, ktoby innego lekarstwa nie przyjmowa&#322;, tylko s&#322;odkie.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0413',
                        'name' => 'XIII Kwietnia',
                        'content' => 'O przej&#281;ciu si&#281; Bogiem.',
                        'author' => '&#8222;Ten po bo&#380;emu &#380;yje, kto ustawicznie, o ile mo&#380;e, my&#347;l&#261; z Bogiem przebywa i my&#347;l Bogiem zajmuje.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => 'C&#243;&#380; ma cz&#322;owiek z ca&#322;ej pracy swojej? Oto jak obr&#281;cz do zabawy kr&#281;ci si&#281; bezmy&#347;lnie, dop&#243;ki nie upadnie; tak i wszystkie zabiegi ludzkie bezu&#380;ytecznie si&#281; podejmuj&#261;, je&#347;li si&#281; ku temu nie odnosz&#261;, dla kt&#243;rego stworzeni jeste&#347;my. Prawda, &#380;e trudn&#261; jest rzecz&#261; my&#347;l zaprz&#261;ta&#263; r&#243;&#380;norodnemi troskami i zarazem zatapia&#263; j&#261; w Bogu; ale co mo&#380;e w magnesowej igle natura, to czemu&#380;by nie mog&#322;a w tobie &#322;aska? W kt&#243;r&#261;kolwiek stron&#281; ig&#322;&#281; magnesow&#261; przechylamy, bez wzgl&#281;du na to, czy niebo pogod&#281; zapowiada, czy burz&#261; grozi, ona zawsze si&#281; do bieguna zwraca. T a k&nbsp;&nbsp;r z e c z&nbsp;&nbsp;n i e s t a &#322; a&nbsp;&nbsp;j e s t&nbsp;&nbsp;z a r a z e m&nbsp;&nbsp;s t a &#322; &#261;. Szcz&#281;&#347;liwy umys&#322;, kt&#243;ry zwyci&#281;zko wychodzi z trudno&#347;ci, kt&#243;ry burzom wprawdzie jest podleg&#322;y, ale nad nie wy&#380;szy, ustawiczn&#261; zachowuje pogod&#281;. Na tem, &#380;e si&#281; Bogiem zajmuje, &#380;e w Bogu zatapia, szcz&#281;&#347;cie jego polega. Jak orze&#322; ku samemu tylko s&#322;o&#324;cu zwraca swe oczy, tak jedno tylko serce cz&#322;owieka jednemu nale&#380;y si&#281; Bogu. W nim ma wszystko, poza nim niczem jest wszystko, cieniem tylko dobra, i nie tak cieniem, jak mamid&#322;em.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0414',
                        'name' => 'XIV Kwietnia',
                        'content' => 'O ocenianiu dobrych.',
                        'author' => '&#8222;Ludzi dobrych, i cnotliwych, jak z jednej strony bardziej kochamy, tak z drugiej surowiej s&#261;dzimy za przewinienia, cho&#263;by najl&#380;ejsze.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => 'Choremu zwykle pob&#322;a&#380;amy; kto za najmniejszem rany dotkni&#281;ciem j&#281;czy, z tym nale&#380;y si&#281; obchodzi&#263; bardzo ostro&#380;nie: ale ze zdrowymi podobna ostro&#380;no&#347;&#263; jest zbyteczn&#261;; owszem, zachowanie si&#281; nieco surowsze sprawia, &#380;e nabieraj&#261; hartu, i z lada przyczyny nie choruj&#261;. Kogo wi&#281;cej mi&#322;ujemy, na tego wi&#281;ksz&#261; baczno&#347;&#263; zwracamy. Mi&#322;owa&#263;, to znaczy dobra chcie&#263;: nie mi&#322;uje ten, kto na b&#322;&#281;dy przez szpary patrzy, kto z&#322;ego w zawi&#261;zku nie st&#322;umia; n i e c h a j&nbsp;&nbsp;b o l i,&nbsp;&nbsp;c h o c i a &#380; b y&nbsp;&nbsp;m i &#322; e g o,&nbsp;&nbsp;b y l e b y&nbsp;&nbsp;p o m o g &#322; o. Im co&#347; dro&#380;szego, kosztowniejszego, tem bardziej na niem plamy by&#263; nie powinno. Leciuchna skaza, gdy si&#281; na perle znajduje, to per&#322;y warto&#347;&#263; zmniejsza. Je&#347;li kogo mi&#322;ujesz, to tyle dok&#322;adaj stara&#324;, tyle zabieg&#243;w, aby wad w nim nie by&#322;o. Nawet ma&#322;a rzecz wiele szkodzi: cier&#324; jest rzecz&#261; ma&#322;&#261;, a jednak lwa, aby do oznaczonej mety nie dobieg&#322;, silnie powstrzymuje. Im wi&#281;cej kogo&#347; mi&#322;ujesz, tem surowiej ka&#380;d&#261; w nim wad&#281; &#347;cigaj i tem silniej nad jej usuni&#281;ciem pracuj.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0415',
                        'name' => 'XV Kwietnia',
                        'content' => 'O czysto&#347;ci w ubiorze.',
                        'author' => '&#8222;Nic brudnego, ani zaniedbanego w sobie nie zno&#347;; wszak&#380;e od wyszukanej staranno&#347;ci, kt&#243;raby mia&#322;a w sobie co&#347; mi&#281;kkiego i pr&#243;&#380;nego, b&#261;d&#378; z daleka.&#8221;',
                        'description' => '(S. Ignat. apud Bartol. l. 4).',
                        'description2' => 'Jak na w&#322;a&#347;ciw&#261; pochwa&#322;&#281; czysto&#347;&#263;, tak na &#347;miech zas&#322;uguje naganna pr&#243;&#380;no&#347;&#263;, kt&#243;ra si&#281; w&#322;os&#243;w trefieniem, twarzy malowaniem zajmuje, i co si&#281; nale&#380;y Bogu i wieczno&#347;ci, to na dziecinne zabawki po&#347;wi&#281;ca. Brudami si&#281; brzyd&#378;, chocia&#380;by&#347; nosi&#322; w&#322;osiennic&#281;, aby&#347; nie zra&#380;a&#322; do siebie tych, kt&#243;rych poci&#261;ga&#263; winiene&#347;. Zaniedbanie siebie posuni&#281;te a&#380; do brud&#243;w i niechlujstwa, by&#322;oby cnot&#261; chyba tego, kt&#243;ry sam dla siebie &#380;yje i, jakby zamkni&#281;ty dobrowolnie w grobie, gni&#263; zaczyna. Brudem ka&#380;dym, cho&#263;by najmniejszym, brzydzi si&#281; duch, kt&#243;ry wci&#261;&#380; wzdycha za owem miastem niebieskiem, wszystkie ulice z czystego z&#322;ota maj&#261;cem <sup>1</sup>, i kt&#243;ry si&#281; wci&#261;&#380; gotuje do post&#281;powania za Barankiem bez zmazy. Id&#378;, je&#347;li tego wymaga potrzeba, chocia&#380;by do zanieczyszczonych wi&#281;zie&#324;, do zat&#281;ch&#322;ych szpitali; ale tak si&#281; w nich zachowaj, jak promienie s&#322;o&#324;ca w b&#322;ocie: przenikaj&#261; one b&#322;oto, ale si&#281; nie ma&#380;&#261; b&#322;otem. Je&#347;li si&#281; cokolwiek zbrudzi&#322;e&#347;, natychmiast si&#281; oczy&#347;&#263;.',
                        'description3' => '1) Objawienie &#346;. Jana 21, 21.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0416',
                        'name' => 'XVI Kwietnia',
                        'content' => 'O baczno&#347;ci na siebie.',
                        'author' => '&#8222;Aposto&#322; niechaj pami&#281;ta, &#380;e ma nie ze z&#322;otem, ale z b&#322;otem do czynienia i uwag&#281; na siebie niechaj zdwoi, aby sam nie zaci&#261;gn&#261;&#322; choroby, z kt&#243;rej innych usi&#322;uje wybawi&#263;.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Nie zdrowym potrzeba lekarza, ale chorym <sup>1</sup>; gdzie zepsucie wi&#281;ksze, zaraza silniejsza, tam naprz&#243;d niechaj &#347;pieszy zar&#243;wno cia&#322;, jak i dusz bieg&#322;y lekarz; z ca&#322;&#261; jednak ostro&#380;no&#347;ci&#261;, aby sam nie zaci&#261;gn&#261;&#322; choroby. Je&#347;li p&#322;ywak si&#281; topi, aby znalaz&#322; per&#322;&#281;; je&#347;li lekarz si&#281; zabija, aby uzdrowi&#322; chorego: to nie p&#322;ywanie, ani leczenie, ale szale&#324;stwo. To&#380; samo, je&#347;li kto swoj&#261; dusz&#281; plami, podczas gdy inn&#261; oczyszcza. Niezwyk&#322;ej cnoty by&#263; winien, kto chce prac&#281; swoj&#261; na nawr&#243;cenie grzesznik&#243;w po&#347;wi&#281;ci&#263;. Wielka jest rzecz, kt&#243;r&#261; przedsiebierze, i niebezpieczna, potrzeba &#380;eby by&#322; silnie w dobrem ugruntowany; inaczej zamiast zmniejszy&#263; swojemi staraniami, powi&#281;kszy liczb&#281; wyst&#281;pnych. Je&#347;li w karbach swych nami&#281;tno&#347;ci nie trzymasz, to l&#281;kaj si&#281; upadku; do kt&#243;rego i przyk&#322;ad ci&#281; otaczaj&#261;cych poci&#261;ga i w&#322;asna natura pobudza. &#321; a t w o&nbsp;&nbsp;j e s t&nbsp;&nbsp;s p a &#347; &#263;&nbsp;&nbsp;d o&nbsp;&nbsp;p i e k &#322; a.',
                        'description3' => '1) &#346;. &#321;ukasz 5, 41.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0417',
                        'name' => 'XVII Kwietnia',
                        'content' => 'O niepos&#261;dzaniu drugich.',
                        'author' => '&#8222;B&#261;d&#378; bardzo ostro&#380;nym w s&#261;dzeniu czyn&#243;w obcych, g&#322;&#243;wnie na my&#347;l bli&#378;niego zwa&#380;aj, kt&#243;ra cz&#281;sto dobr&#261; i niewinn&#261; jest, pomimo &#380;e sam czyn w oderwaniu od my&#347;li, gorszym si&#281; wydaje.&#8221;',
                        'description' => '(S. Ignat. apud Bartol. l. 4).',
                        'description2' => 'Nie pos&#322;uguj si&#281; zmys&#322;ami w s&#261;dzeniu, je&#347;li nie chcesz b&#322;&#261;dzi&#263;! Ich &#347;wiadectwo omylnem bywa. Nie polegaj r&#243;wnie&#380; zbytecznie na w&#322;asnem mniemaniu, a jeszcze bardziej na obcem doniesieniu. Ale jak w nocy, aby&#347;my si&#281; nie potkn&#281;li, pomocy &#347;wiat&#322;a potrzebujemy; tak i w sprawach cudzych, czego jasno nie widzisz, wstrzymaj si&#281; od s&#261;dzenia, od wyroku wydawania. &#377;le o innych s&#261;dzi&#263;, to znaczy z w&#322;asn&#261; z&#322;o&#347;ci&#261; si&#281; zdradza&#263;. Paj&#261;kiem jest, kto trucizn&#281; zbiera z kwiatu, z kt&#243;regoby pszcz&#243;&#322;ka mi&#243;d wyssa&#322;a. &#379;o&#322;&#261;dek zepsuty wszystko w &#380;&#243;&#322;&#263; obraca. P a n&nbsp;&nbsp;j e s t,&nbsp;&nbsp;k t &#243; r y&nbsp;&nbsp;s &#261; d z i <sup>1</sup>. Po co si&#281; mieszasz do jego zaj&#281;cia? On jest badaczem serc, zg&#322;&#281;biaczem my&#347;li; my nie dalej jak pi&#281;&#347;&#263; swoj&#261; i rzeczy tylko powierzchownie widzimy, a pomimo to, do s&#261;dzenia &#347;wiata si&#281; zabieramy. Zt&#261;d tyle b&#322;&#281;d&#243;w, tyle pomy&#322;ek. Wielki on dzie&#324; odkryje, jak lekkomy&#347;lnemi by&#322;y nasze o drugich s&#261;dy. Ilu&#380;-to &#347;wi&#281;tych &#380;yje w ukryciu, kt&#243;rzy na zewn&#261;trz nic nadzwyczajnego nie okazuj&#261;; tem wi&#281;ksi przed Bogiem, im staranniej swoje dobre czyny zatai&#263; usi&#322;owali przed lud&#378;mi.',
                        'description3' => '1) I. Kor. 4, 4.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0418',
                        'name' => 'XVIII Kwietnia',
                        'content' => 'O rozwadze w wyborze.',
                        'author' => '&#8222;Nie dla ka&#380;dego to jest po&#380;yteczniejszem, co samo przez si&#281; jest lepszem; &#380;eby co&#347; komu prawdziwie by&#322;o po&#380;ytecznem, potrzeba bra&#263; na uwag&#281; okoliczno&#347;ci, w jakich si&#281; on znajduje.&#8221;',
                        'description' => '(S. Ignat. vitae l. 4).',
                        'description2' => 'Nie ka&#380;dy pokarm, chocia&#380;by najlepszy, do ka&#380;dego &#380;o&#322;&#261;dka; i nie ka&#380;de lekarstwo, chocia&#380;by najdro&#380;sze, do ka&#380;dej choroby nadaje si&#281;: tak r&#243;wnie&#380; i w wyborze dobrego bacznej trzeba uwagi, aby b&#322;&#281;du unikn&#261;&#263;. Gdyby dobrej woli towarzyszy&#322; zawsze przenikliwy i na wszystkie okoliczno&#347;ci baczny rozum; to nie by&#322;oby tyle pomy&#322;ek, ile jest teraz, w wyborze dobrego. Cnota nie jest cnot&#261;, je&#347;li si&#281; z roztropno&#347;ci&#261; nie &#322;&#261;czy. Nawet w rzeczach najlepszych obcej potrzeba zasi&#281;ga&#263; rady, je&#347;li nie chcemy w&#322;asnem nieszcz&#281;&#347;ciem nabywa&#263; do&#347;wiadczenia. Drogo kosztuje ta nauka, kt&#243;ra si&#281; nabywa za po&#347;rednictwem w&#322;asnych b&#322;&#281;d&#243;w. L e p i e j&nbsp;&nbsp;j e s t&nbsp;&nbsp;p y t a &#263;,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;b &#322; &#261; d z i &#263;. Nie ka&#380;dego barki do niesienia tych samych ci&#281;&#380;ar&#243;w s&#261; sposobne. &#321;atwo si&#281; ugn&#261;, albo nawet zupe&#322;nie skrusz&#261;, je&#347;li przed w&#322;o&#380;eniem ci&#281;&#380;aru, pierwiej si&#322; nie wyprobujemy. Inne jest o dobroci rzeczy, a inne o jej u&#380;yteczno&#347;ci zdanie. Zawsze zwa&#380;aj, czy to co samo z siebie dobre, jest zarazem dla ciebie u&#380;yteczne?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0419',
                        'name' => 'XIX Kwietnia',
                        'content' => 'O zajmowaniu si&#281; chorymi.',
                        'author' => '&#8222;W jakiej takiej trudno&#347;ci o pieni&#261;dz, nie nale&#380;y powstrzymywa&#263; si&#281; od chwalebnego wydatku, aby w skutek tego troska o chorych nie ucierpia&#322;a.&#8221;',
                        'description' => '(S. Ignat. apud Nolar.)',
                        'description2' => 'Wydatki, kt&#243;re na chorych ponosimy, nietylko nie uszczupl&#261; naszych dochod&#243;w, ale je zdwoj&#261; albo nawet ztroj&#261;; gdy karmimy chorego, karmimy Pana: c o &#347; c i e&nbsp;&nbsp;j e d n e m u&nbsp;&nbsp;z&nbsp;&nbsp;t y c h&nbsp;&nbsp;n a j m n i e j s z y c h&nbsp;&nbsp;m o i c h&nbsp;&nbsp;u c z y n i l i,&nbsp;&nbsp;m n i e &#347; c i e&nbsp;&nbsp;u c z y n i l i <sup>1</sup>. Tu kto sk&#261;po sieje, sk&#261;po i zbiera. &#379;ywe Ducha &#346;wi&#281;tego ko&#347;cio&#322;y ruin&#261; zagro&#380;one podpiera&#263;, aby nie upad&#322;y, wi&#281;ksz&#261; jest zas&#322;ug&#261;, ni&#380; o&#322;tarze budowa&#263;. Te ostatnie, je&#347;li upadn&#261;, mog&#261; by&#263; nanowo d&#378;wigni&#281;te; chory, gdy &#380;ycie straci, to ju&#380; go na nowo nie odzyska. Nie &#322;atwo powiedzie&#263; mo&#380;na, jak w&#347;r&#243;d dolegliwo&#347;ci cia&#322;a, wzrasta dolegliwo&#347;&#263; ducha, gdy chory widzi si&#281; z nadziei wyzutym. Podw&#243;jne go wtedy z&#322;e przygniata: jedno pochodz&#261;ce z choroby, drugie z twojej nieczu&#322;o&#347;ci, &#380;e tego kt&#243;rego mo&#380;esz, owszem winiene&#347;, nie pocieszasz. I nie ma wi&#281;kszej nieczu&#322;o&#347;ci, jak opuszczenie tego, kt&#243;ry sam sobie pom&#243;dz nie mo&#380;e. Kto siebie i wszystko co ma, Bogu odda&#322;, zas&#322;uguje, aby nie cierpia&#322; niedostatku tam, gdzie jest najwi&#281;ksza potrzeba.',
                        'description3' => '1) &#346;. Mat. 25, 45.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0420',
                        'name' => 'XX Kwietnia',
                        'content' => 'O zwracaniu si&#281; zawsze ku Bogu.',
                        'author' => '&#8222;Nietylko patrz&#261;c na niebo i na gwiazdy, ale i na ma&#322;e zi&#243;&#322;ko, na rzecz najmniejsz&#261;, ten co Boga zna, zaraz w sobie mi&#322;o&#347;&#263; ku niemu wznieci&#263; potrafi, mi&#322;o&#347;ci&#261; si&#281; zapali&#263;, do mi&#322;o&#347;ci pobudzi&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Maff. l. 3).',
                        'description2' => 'Jak ogie&#324; bez &#380;adnej pomocy, si&#322;&#261; swej natury wznosi si&#281; do g&#243;ry; tak i serce mi&#322;uj&#261;ce Boga, aby si&#281; do&#324; wznios&#322;o, nim zaj&#281;&#322;o, ani napomnienia, ani przewodnika, ani drabiny nie potrzebuje. Si&#322;&#261; wewn&#261;trz ukryt&#261; samo si&#281; w t&#281; stron&#281; zwraca i sprawia, &#380;e cz&#322;owiek bardziej tam, ni&#380; tu dusz&#261; przebywa. Bardzo przenikliwe s&#261; mi&#322;o&#347;ci oczy, zbadaniem rzeczy nazewn&#261;trz nie zadawalniaj&#261; si&#281;; ale wnikaj&#261; g&#322;&#281;biej, przedostaj&#261; si&#281; do wn&#281;trza, i od stworzenia podnosz&#261; si&#281; do Stw&#243;rcy. Gdzie mi&#322;o&#347;&#263;, tam oczy, zar&#243;wno cia&#322;a, jak i duszy. Mo&#380;na oczy pozbawi&#263; s&#322;o&#324;ca, ale nie Boga; kto mi&#322;uje, ten go widzi wsz&#281;dzie, czy jest widomy, czy niewidomy. Nawet gdy &#347;pi, sercem czuwa; i tam to serce ma, gdzie mi&#322;o&#347;&#263; si&#281; zwraca; niczem go powstrzyma&#263; nie mo&#380;na od tej podr&#243;&#380;y: ani przestrzeni&#261;, ani ciemno&#347;ciami, ani innemi jakiemikolwiek zaporami. G d z i e&nbsp;&nbsp;s k a r b&nbsp;&nbsp;t w &#243; j,&nbsp;&nbsp;t a m&nbsp;&nbsp;i&nbsp;&nbsp;s e r c e&nbsp;&nbsp;t w o je. Kto na oczy choruje, komu oczy co zas&#322;ania, ten zawsze ma t&#281; zas&#322;on&#281; przed sob&#261;, na cokolwiekby patrza&#322;: tak mi&#322;uj&#261;cy tylko Boga, gdziekolwiek si&#281; obr&#243;ci, wsz&#281;dzie go poznaje, wsz&#281;dzie znajduje, wsz&#281;dzie widzi.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0421',
                        'name' => 'XXI Kwietnia',
                        'content' => 'O niegardzeniu nikim.',
                        'author' => '&#8222;Mi&#322;uj nawet najzepsutszych; mi&#322;uj pozosta&#322;&#261; w nich Chrystusa wiar&#281;; je&#347;li i tej nie maj&#261;, mi&#322;uj cnoty, z kt&#243;rych si&#281; jeszcze nie wyzuli; mi&#322;uj &#347;wi&#281;ty obraz, jaki na sobie nosz&#261;; mi&#322;uj Chrystusow&#261; krew, kt&#243;r&#261; jak wierzysz zostali odkupieni.&#8221;',
                        'description' => '(S. Ignat. apud Bart. n. 20).',
                        'description2' => 'Wszyscy, nawet najwi&#281;ksi zbrodniarze, czu&#322;&#261; mi&#322;o&#347;ci&#261; winni by&#263; otaczani: bo jedyna-to droga, kt&#243;r&#261; do lepszego &#380;ycia mo&#380;na ich zwr&#243;ci&#263;. N a w r a c a j &#261;&nbsp;&nbsp;s i &#281;,&nbsp;&nbsp;t y l k o&nbsp;&nbsp;m i &#322; o w a n i. &#321;atwiej na choroby duszy, ni&#380; na choroby cia&#322;a wynale&#378;&#263; lekarstwo. Chorych na duszy i mi&#322;o&#347;ci&#261; poci&#261;gniesz; przyjm&#261; zbawcz&#261; r&#281;k&#281;, je&#347;li jest przyjazna. O jak&#380;eby szcz&#281;&#347;liwi byli lekarze, gdyby chorych na ciele mi&#322;o&#347;ci&#261; leczy&#263; mogli! Dziwna, a jednak prawdziwa rzecz! do nienawidzenia innych, a do mi&#322;owania samych siebie bardzo jeste&#347;my sk&#322;onni; do mi&#322;owania za&#347; innych, a nienawidzenia samych siebie bardzo trudni! Szaleni, nie zwa&#380;amy na pobudki wiary, ale za zepsut&#261; idziemy natur&#261;. Nieludzcy ca&#322;kiem dla ludzi jeste&#347;my! nienawi&#347;&#263; pr&#281;dko si&#281; nam w duszy zjawia, natr&#281;tnie w niej przebywa, zwolna albo wcale nie ust&#281;puje, si&#322;&#261; musi by&#263; usuwana; gdy&#380; g&#322;&#281;boko si&#281; zakorzenia. B &#261; d &#378;&nbsp;&nbsp;j a k&nbsp;&nbsp;n a j d a l e j&nbsp;&nbsp;o d&nbsp;&nbsp;t e j&nbsp;&nbsp;z a r a &#378; l i w e j&nbsp;&nbsp;c h o r o b y,&nbsp;&nbsp;o d&nbsp;&nbsp;t e j&nbsp;&nbsp;w s t r &#281; t n e j&nbsp;&nbsp;n i e p r z y j a c i o &#322; k i&nbsp;&nbsp;m i &#322; o &#347; c i!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0422',
                        'name' => 'XXII Kwietnia',
                        'content' => 'O nieprzywi&#261;zywaniu si&#281; do ziemi.',
                        'author' => '&#8222;Kto wzgardzi&#322; &#347;wiatem dla Chrystusa, ten &#380;adnej nie ma na &#347;wiecie ojczyzny, kt&#243;r&#261;by uznawa&#322; za swoj&#261;.&#8221;',
                        'description' => '(S. Ignat. vitae l. 1).',
                        'description2' => 'My&#347;l zrodzona dla nieba jest woln&#261;, do &#380;adnej nie przykuwa si&#281; ojczyzny. Albo ca&#322;y &#347;wiat jest dla niej ojczyzn&#261;, albo ca&#322;y wygnaniem. Szczeg&#243;lnem uczuciem, jakby wi&#281;zami, nie chce by&#263; kr&#281;powan&#261;. Wy&#380;sz&#261; jest nad wszystkie. Pnie z ziemi&#261;, na kt&#243;rej wyros&#322;y, tak si&#281; mocno spajaj&#261;, &#380;e tylko si&#322;&#261; mog&#261; by&#263; wyrwane. Ale i wtedy nie bez naruszenia ziemi, nie bez pewnej jakoby skargi; po przesadzeniu jednak na inne miejsce, obfitszy owoc wydaj&#261;. Jak&#261;kolwiekby by&#322;a ojczyzna twoja, &#322;ez dolin&#261; jest; tysi&#261;cznych n&#281;dz miejscem: &#347;mieszno&#347;ci&#261; przeto jest, aby&#347;my ku niej lgn&#281;li jakiem&#347; nieprzepartem uczuciem. Nikogo ojczyzna dobrym, nikogo z&#322;ym nie uczyni&#322;a. P r o r o k&nbsp;&nbsp;n i e&nbsp;&nbsp;j e s t&nbsp;&nbsp;m i &#322; y m&nbsp;&nbsp;w&nbsp;&nbsp;o j c z y z n i e <sup>1</sup>. A c&#243;&#380; dopiero, je&#347;li poza obr&#281;bem ojczyzny &#322;atwiejsz&#261; jest do nieba droga? gdy nie stawiaj&#261; przeszk&#243;d rodzice, nie powstrzymuj&#261; znajomych wzgl&#281;dy, nie podsycaj&#261; nadziei swoi; cnota si&#281; wzmaga, rozwija i z czasem staje u szczytu. O j c z y z n &#281;,&nbsp;&nbsp;d o&nbsp;&nbsp;k t &#243; r e j&nbsp;&nbsp;z m i e r z a m y,&nbsp;&nbsp;m i &#322; u j m y.',
                        'description3' => '1) &#346;. &#321;ukasz 4, 24.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0423',
                        'name' => 'XXIII Kwietnia',
                        'content' => 'O uciskach.',
                        'author' => '&#8222;Je&#347;li ci wypadnie cierpie&#263;, co B&#243;g na ciebie zeszle, albo z jego dopuszczenia z&#322;y duch zrz&#261;dzi, nie tra&#263; nadziei, &#380;e przy pomocy Bo&#380;ej odniesiesz zwyci&#281;ztwo.&#8221;',
                        'description' => '(S. Ignat. apud Quartem. in Gl.)',
                        'description2' => 'Na uciskanie B&#243;g zezwala, ale na ca&#322;kowite pogn&#281;bienie nie zezwoli: uciska, bo ci&#281; mi&#322;uje <sup>1</sup>; chce, aby&#347; w tem &#380;yciu kar&#261; l&#380;ejsz&#261; odpokutowa&#322; to, za coby&#347; w przysz&#322;em musia&#322; nier&#243;wnie ci&#281;&#380;sz&#261; kar&#261; odpokutowywa&#263;. &#379;eby&#347; by&#322; uciskany pozwala B&#243;g, a jednak mi&#322;uje. Wykonywa prawo, jakie ma nad tob&#261;: uciska, ale z &#322;aski nie wyzuwa, pozostaje ojcem, wi&#281;cej tob&#261; zaj&#281;ty, ni&#380; jaka matka swym synem. Na ucisk zezwala, i wielki i d&#322;ugi, poniewa&#380; bardzo mi&#322;uje. Uciska, a&#380;eby liczb&#281; zas&#322;ug powi&#281;kszy&#322;, i nagrod&#281;, kt&#243;rejby nie m&#243;g&#322; udzieli&#263; leniwemu, udzieli&#322; dobrze zas&#322;u&#380;onemu. Na ucisk zezwala, aby twoj&#261; mi&#322;o&#347;&#263; zaostrzy&#322;, i nadziej&#281; wypr&#243;bowa&#322;. Patrz, aby&#347; Boga nie zawi&#243;d&#322; w jego oczekiwaniu. Ufaj, ufaj mocno, spodziewaj si&#281; wiele. B o&nbsp;&nbsp;s t o s o w n i e&nbsp;&nbsp;d o&nbsp;&nbsp;n a d z i e i,&nbsp;&nbsp;j a k &#261;&nbsp;&nbsp;w&nbsp;&nbsp;B o g u&nbsp;&nbsp;p o &#322; o &#380; y s z;&nbsp;&nbsp;s t o s o w n i e&nbsp;&nbsp;d o&nbsp;&nbsp;u f n o &#347; c i,&nbsp;&nbsp;j a k &#261;&nbsp;&nbsp;o k a &#380; e s z;&nbsp;&nbsp;&#322; a s k i&nbsp;&nbsp;o d&nbsp;&nbsp;n i e g o&nbsp;&nbsp;o t r z y m a s z,&nbsp;&nbsp;n a&nbsp;&nbsp;w z g l &#281; d y&nbsp;&nbsp;z a s &#322; u &#380; y s z <sup>2</sup>.',
                        'description3' => '1) &#379;yd&#243;w 12, 6.<br/>
    2) &#346;. Ambro&#380;y.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0424',
                        'name' => 'XXIV Kwietnia',
                        'content' => 'O gniewie.',
                        'author' => '&#8222;Nie chc&#281;, aby w prze&#322;o&#380;onych wszelkie uniesienie, a szczeg&#243;lniej gniewu, by&#322;o wyniszczone i ca&#322;kiem zamar&#322;e; ale &#380;eby by&#322;o nale&#380;ycie miarkowane.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => 'Nawet trucizna, gdy jest w miar&#281;, na dobre wychodzi. Czy rzecz jaka jest dobr&#261; lub z&#322;&#261;, pokazuje si&#281; z u&#380;ycia. Nic nie ma chwalebniejszego nad gniew w&#322;a&#347;ciwie zastosowany, zupe&#322;ny brak gniewu nie jest cnot&#261;, ale s&#322;abo&#347;ci&#261; i gnu&#347;no&#347;ci&#261;. Gniew dla rzeczypospolitej i ca&#322;ego spo&#322;ecze&#324;stwa jest jakby podpor&#261;, bez gniewu nie ma karno&#347;ci, nast&#281;puje rozwi&#261;z&#322;o&#347;&#263; w obyczajach, wyuzdanie, zuchwa&#322;o&#347;&#263; i inne r&#243;&#380;nego rodzaju zbrodnie. Uniesie&#324; powinni&#347;my u&#380;ywa&#263;, jak panowie s&#322;ug; maj&#261; podlega&#263; rozumowi, nie nad nim wierzch trzyma&#263;, maj&#261; obowi&#261;zek sw&#243;j spe&#322;nia&#263; nie wedle zachcenia, ale wedle rozkazu; gdzie panuje rozum, tam s&#322;u&#380;y gniew; a skoro s&#322;u&#380;y, to dobry jest. Kto si&#281; na z&#322;ych nie gniewa, gdy powinien, to znaczn&#261; cz&#281;&#347;&#263; swego obowi&#261;zku zaniedbuje; kto oszcz&#281;dza wyst&#281;pnych, ten okrutnie post&#281;puje; jednemu pob&#322;a&#380;a, a wszystkim szkodzi. O j c e m&nbsp;&nbsp;j e s t&nbsp;&nbsp;d l a&nbsp;&nbsp;w i n n e g o,&nbsp;&nbsp;t y r a n e m&nbsp;&nbsp;d l a&nbsp;&nbsp;s p o &#322; e c z e &#324; s t w a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0425',
                        'name' => 'XXV Kwietnia',
                        'content' => 'O stosowaniu si&#281; do regu&#322;y.',
                        'author' => '&#8222;Czego nie doradza B&#243;g, albo duch twej ustawy, ale kto inny; to za pokus&#281; uwa&#380;aj, za rzecz podejrzan&#261; miej.&#8221;',
                        'description' => '(S. Ignat. apud Nol.)',
                        'description2' => 'O ile jaka fabryka uchyla si&#281; od przepis&#243;w, o tyle nachyla si&#281; do upadku. Do regu&#322;y winno si&#281; wszystko stosowa&#263;. W przeciwnym razie nie wznosi si&#281; budowla, ale i to, co si&#281; wznios&#322;o, grozi upadkiem. To samo rozumie&#263; nale&#380;y i o fabryce &#380;ycia duchownego. Regu&#322;a niech b&#281;dzie norm&#261; &#380;ycia, niech b&#281;dzie dla wszystkich czynno&#347;ci wskaz&#243;wk&#261; i miar&#261;. Bo jak &#378;le robi i budow&#281; cho&#263;by najpi&#281;kniejsz&#261; szpeci, kto kamie&#324; krzywo i niew&#322;a&#347;ciwie stawia; tak ka&#380;da czynno&#347;&#263; do regu&#322;y niezastosowana, poza regu&#322;&#281; wychodz&#261;ca, porz&#261;dek nadwer&#281;&#380;a, ze szkod&#261; si&#281; nasz&#261; wykonywa, nie z po&#380;ytkiem. Nie ubiegaj si&#281; o uznanie posp&#243;lstwa; cz&#281;sto bowiem b&#322;&#261;dzi, po tej stronie staje, kt&#243;ra jest myln&#261;; raczej na wa&#380;no&#347;&#263;, nie na mnogo&#347;&#263; zda&#324; ogl&#261;da&#263; si&#281; potrzeba. Niegodzien jest rozumu, kto woli wierzy&#263;, ni&#380; roztrz&#261;sa&#263;. B&#243;g b&#322;ogos&#322;awie&#324;stwo twej instytucyi do regu&#322;y przywi&#261;za&#322;: gdy regu&#322;&#281; &#347;ci&#347;le zachowasz, to wszystko p&#243;jdzie po my&#347;li, gdy jej zaniedbasz, to zawodu doznasz. Samemu objawieniu nie nale&#380;a&#322;oby wierzy&#263;, gdyby co&#347; doradza&#322;o, z czemby regu&#322;a zgodzi&#263; si&#281; nie mog&#322;a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0426',
                        'name' => 'XXVI Kwietnia',
                        'content' => 'O &#378;r&#243;dle prawdziwej rado&#347;ci.',
                        'author' => '&#8222;Nie mniejsz&#261; jest osobliwo&#347;ci&#261; spotka&#263; si&#281; z zakonnikiem smutnym, kt&#243;ry pr&#243;cz Boga nic innego nie szuka; jak spotka&#263; si&#281; z zakonnikiem weso&#322;ym, kt&#243;ry wszystkiego szuka, z wyj&#261;tkiem Boga.&#8221;',
                        'description' => '(S. Ignat. apud Trinkel. in exercit.)',
                        'description2' => 'Tam rado&#347;&#263; zupe&#322;na, gdzie dobro najwy&#380;sze; w niem jednem p&#322;omie&#324; bez dymu: inne r&#243;&#380;e maj&#261; kolce, a rado&#347;ci nie s&#261; wolne od smutk&#243;w. Samej tylko cnoty nieod&#322;&#261;czn&#261; towarzyszk&#261; jest ci&#261;g&#322;a rado&#347;&#263; duszy. Zabawy, muzyka, rozmaite widowiska, nie s&#261; to trwa&#322;e podstawy rado&#347;ci; je&#347;li zapobiegaj&#261; smutkowi, to tylko na czas pewien, bardzo kr&#243;tki. Zawieszaj&#261; raczej, ni&#380; znosz&#261; smutek; przypomina si&#281; on za lada powodem i przypomina&#263; nie przestanie dop&#243;ty, dop&#243;ki si&#281; cz&#322;owiek nie wyleczy ca&#322;kowitem przylgni&#281;ciem do dobra niezmiennego. Ci si&#281; niechaj smuc&#261;, kt&#243;rzy nadziei nieba nie maj&#261;, kt&#243;rzy si&#281; na pastw&#281; nami&#281;tno&#347;ci oddali; my, kt&#243;rym niebo warunkowo przyrzeczone zosta&#322;o, prawdziwej rado&#347;ci &#378;r&#243;d&#322;o posiadamy; nikt nam jej nie odejmie, dop&#243;ki w sercu Boga mie&#263; b&#281;dziemy. Nie podda si&#281; smutkowi sprawiedliwy, cokolwiek mu si&#281; wydarzy, b o&nbsp;&nbsp;w i e,&nbsp;&nbsp;&#380; e&nbsp;&nbsp;B &#243; g&nbsp;&nbsp;t y m,&nbsp;&nbsp;k t &#243; r z y&nbsp;&nbsp;g o&nbsp;&nbsp;m i &#322; u j &#261;,&nbsp;&nbsp;w s z y s t k o&nbsp;&nbsp;n a&nbsp;&nbsp;d o b r e&nbsp;&nbsp;o b r a c a <sup>1</sup>. Tak ciemno&#347;ci s&#322;u&#380;&#261; &#347;wiat&#322;u, a cie&#324; lepiej uwydatnia kolor.',
                        'description3' => '1) Rzym. 8, 28.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0427',
                        'name' => 'XXVII Kwietnia',
                        'content' => 'O namy&#347;le.',
                        'author' => '&#8222;Cz&#322;owiek rozumem obdarzony nami&#281;tno&#347;ci swoje nietylko tak poskramia&#263; winien, aby si&#281; s&#322;owem lub czynem nie zdradza&#322;y; ale nadto tak si&#281; rz&#261;dzi&#263;, aby nic gwa&#322;townie, ale wszystko z namys&#322;em robi&#322;.&#8221;',
                        'description' => '(S. Ignat. apud Maff.)',
                        'description2' => 'Niem&#261;dry zaprawd&#281; sternik, kt&#243;ry pozwala, aby okr&#281;t jego wiatry i ba&#322;wany zanios&#322;y, dok&#261;d si&#281; im podoba. Tak porwany, gdzie si&#281; oprze, przy jakim porcie zatrzyma? Ba&#322;wanami owemi s&#261; &#380;&#261;dze twoje. Tem si&#281; g&#322;&#243;wnie r&#243;&#380;ni cz&#322;owiek od zwierz&#281;cia, &#380;e ma rozum, &#380;e on mu dostarcza do post&#281;powania wskaz&#243;wek; je&#347;li za niemi nie idzie, to ze zwierz&#281;ciem na r&#243;wni si&#281; stawia, g&#322;&#243;wn&#261; r&#243;&#380;nic&#281; pomi&#281;dzy sob&#261; i niem znosi. Rozum niech b&#281;dzie norm&#261;, wed&#322;ug kt&#243;rej, jako bieg&#322;y architekt, budow&#281; &#380;ycia twego prowad&#378;. Porywczo&#347;&#263; &#347;lepym przewodnikiem jest, &#347;lep&#261; r&#243;wnie&#380; jest wola: biada, j e &#347; l i&nbsp;&nbsp;&#347; l e p y&nbsp;&nbsp;&#347; l e p e g o&nbsp;&nbsp;p r o w a d z i! Porywczo&#347;&#263; jest jak ko&#324; bez w&#281;dzid&#322;a, jak &#322;&#243;d&#378; bez wios&#322;a; jaki koniec w takim przypadku? &#8212; Oto nie inny, tylko potratowanie, rozbicie si&#281;, kl&#281;ska, nieszcz&#281;&#347;cie! Im pewniejsza regu&#322;a, tem lepsza budowla. Rozum, kt&#243;remu siebie i wszystko swoje powierzasz, niech b&#281;dzie wiekuisty; ani na w&#322;os ode&#324; nie odst&#281;puj. Je&#347;li si&#281; innemu powierzysz, to zb&#322;&#261;dzisz.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0428',
                        'name' => 'XXVIII Kwietnia',
                        'content' => 'O trudach dla cnoty.',
                        'author' => '&#8222;Nie pozw&#243;lcie, aby synowie tego &#347;wiata z wi&#281;kszem staraniem i troskliwo&#347;ci&#261; zabiegali o rzeczy doczesne, ni&#380; wy o wieczne.&#8221;',
                        'description' => '(S. Ignat. Epist. de perf.)',
                        'description2' => 'Dziwne zaprawd&#281; usposobienie nasze! ku temu co szkodzi, zawsze si&#281; przechylamy; razem z chorymi tego najusilniej po&#380;&#261;damy, co pogarsza nasz&#261; chorob&#281;, a przed tem stronimy, coby z wielkim by&#322;o naszym po&#380;ytkiem. Prac&#281; wszelk&#261; mamy za przyjemn&#261;, z wyj&#261;tkiem tej, kt&#243;r&#261;by podj&#261;&#263; nale&#380;a&#322;o dla osi&#261;gnienia cnoty. Zabiegi kupc&#243;w, niebezpiecze&#324;stwa &#380;o&#322;nierzy, mozo&#322;y ucz&#261;cych si&#281;, s&#322;owem rzeczy ma&#322;ej wagi jednaj&#261; nas sobie i sprawiaj&#261;, &#380;e ziemskie zyski przenosimy nad niebieskie, cie&#324; nad rzecz. &#321;atwiejby cz&#281;sto by&#322;o niebo otrzyma&#263;, ni&#380; straci&#263;. Mniej trud&#243;w wymaga po nas cnota, ni&#380; wyst&#281;pek. Jarzmo Chrystusa wdzi&#281;czniejszem i ci&#281;&#380;ar jego l&#380;ejszem jest, ni&#380; naszych &#380;&#261;dz <sup>1</sup>; a jednak, o g&#322;upoto! my na to nie zwa&#380;amy i wszystkie trudy na sw&#261; zgub&#281; obracamy. Je&#347;liby dziesi&#261;ta cz&#281;&#347;&#263; trud&#243;w i czasu, kt&#243;r&#261; chciwiec na zyski doczesne po&#347;wi&#281;ca, by&#322;a po&#347;wi&#281;cona na wieczne; o jak&#380;eby&#347;my wielkie post&#281;py robili w cnocie, jak &#322;atwo stawali si&#281; &#346;wi&#281;tymi!',
                        'description3' => '1) &#346;. Mateusz. 11, 30.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0429',
                        'name' => 'XXIX Kwietnia',
                        'content' => 'O pociechach ziemskich.',
                        'author' => '&#8222;Lepszem jest co&#347; ma&#322;ego, ale pewnego i trwa&#322;ego; ni&#380; co&#347; wielkiego, ale niepewnego i zmiennego.&#8221;',
                        'description' => '(S. Ignat. Epist. de perf.)',
                        'description2' => 'Co si&#281; utraci&#263; mo&#380;e, to zaledwie na nazw&#281; dobrego zas&#322;uguje: gdy je posiadamy dr&#281;czy, zachod&#243;w wymaga, obok jednej r&#243;&#380;y wiele kolc&#243;w ma. Nieboby nas nie zasyca&#322;o, gdyby wiecznem nie by&#322;o. O nadzieje i czcze ludzkie sprawy! nieraz los przedstawia si&#281; nam jako sta&#322;y, silnie, jakby nie rozerwanym w&#281;z&#322;em z nami z&#322;&#261;czony; za chwil&#281;, z powodu, kt&#243;rego&#347;my si&#281; wcale nie spodziewali, wszystko si&#281; zmienia, wszystko na opak naszym zamiarom i ch&#281;ciom idzie. Liche to szcz&#281;&#347;cie! kt&#243;re obaw&#261; o przysz&#322;o&#347;&#263; zatruwa wszelk&#261;, jak&#261; mie&#263; mo&#380;emy, przyjemno&#347;&#263;. Wieczno&#347;&#263; tylko sama jedna nie zna ko&#324;ca; j e j&nbsp;&nbsp;r a d o &#347; c i&nbsp;&nbsp;n i k t&nbsp;&nbsp;n a m&nbsp;&nbsp;n i e&nbsp;&nbsp;o d e j m i e <sup>1</sup>. Na mi&#322;o&#347;&#263; nasz&#261; zas&#322;uguje tylko to, co jest wiecznem; inne rzeczy nie warte naszej mi&#322;o&#347;ci. Rozkosze, jakiemi &#347;wiat rozrz&#261;dza, ledwie nieledwie w bardzo ma&#322;ej cz&#281;&#347;ci nam si&#281; dostaj&#261;: bo albo przemin&#281;&#322;y i te ju&#380; nas nie bawi&#261;; albo dopiero maj&#261; nast&#261;pi&#263;, ale te nie s&#261; pewne. Tym sposobem wi&#281;cej smutku ni&#380; rado&#347;ci ma wszelka rozkosz ziemska.',
                        'description3' => '1) &#346;. Jan 16, 22.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0430',
                        'name' => 'XXX Kwietnia',
                        'content' => 'O umarzaniu w&#322;asnej woli.',
                        'author' => '&#8222;Co si&#281; bez woli i zgody spowiednika robi, to si&#281; nie za zas&#322;ug&#281;, ale za czcz&#261; chwa&#322;&#281; uwa&#380;a.&#8221;',
                        'description' => '(S. Ignat. in ep. de obed).',
                        'description2' => 'Nikt sam sobie nie wystarcza; jak oko, nawet przenikliwe, innych widzi, ale nie siebie; tak i roztropno&#347;&#263;, nawet niezwyk&#322;a, innym wystarcza, ale nie sobie. Kto umie innymi kierowa&#263;, kierunek sob&#261; winien innym powierzy&#263;. Wola w&#322;asna jest jakby kwasem, czyn nawet dobry, je&#347;li si&#281; z nim z&#322;&#261;czy, ostro&#347;ci&#261; swoj&#261; nawskro&#347; przenika. Tem wi&#281;kszej wagi nabiera czyn, im mniej w nim jest w&#322;asnej woli cz&#322;owieka. Cokolwiek ta doradza, to uwa&#380;aj za podejrzane. Subteln&#261; jest mi&#322;o&#347;&#263; w&#322;asna, za po&#347;rednictwem zasadzek gotuje zgub&#281; dla cnoty; gdy j&#261; pod sw&#243;j w&#322;asny s&#261;d we&#378;miesz, za winn&#261; nie uznasz, uniknie kary; nale&#380;y j&#261; przed inny trybuna&#322; stawi&#263;, je&#347;li o s&#322;uszno&#347;&#263; idzie. Ty o innych, inni o tobie niechaj s&#261;dz&#261;. Tem bezpieczniejszym b&#281;dziesz, tem wolniejszym od stronno&#347;ci; je&#347;li o tobie, bez ciebie wyrok wydadz&#261;. Nikt sam siebie nie leczy. C h o r o b a&nbsp;&nbsp;d u s z y&nbsp;&nbsp;g r o &#378; n i e j s z &#261;&nbsp;&nbsp;j e s t&nbsp;&nbsp;o d&nbsp;&nbsp;c h o r o b y&nbsp;&nbsp;c i a &#322; a.',
                        'description3' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_05',
                'name' => 'May',
                'colour_value' => '#98bee5',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_0501',
                        'name' => 'I Maja',
                        'content' => 'O zwa&#380;aniu na koniec.',
                        'author' => '&#8222;W wydawaniu s&#261;du o rzeczach, w ich wybieraniu, nie nale&#380;y polega&#263; na pozorach, pod jakiemi si&#281; przedstawiaj&#261; z pocz&#261;tku; ale potrzeba si&#281;gn&#261;&#263; g&#322;&#281;biej, zwa&#380;a&#263; na koniec.&#8221;',
                        'description' => '(S. Ignat. apud Nolar.)',
                        'description2' => 'B&#322;&#261;dz&#261; ci, kt&#243;rzy nie od ko&#324;ca zaczynaj&#261;. Pr&#281;dzej co&#347; z&#322;ego, ni&#380; dobrego przynosz&#261; sprawy, kt&#243;re bez nale&#380;ytej rozwagi, z po&#347;piechem zosta&#322;y rozpocz&#281;te. Rozwaga wsz&#281;dzie jest potrzebna, ale w sprawie zbawienia, gdzie o wieczno&#347;&#263; chodzi, najpotrzebniejsza. Kto si&#281; l&#281;ka niebezpiecze&#324;stw, ten nie zginie od nich. Lepiej mie&#263; troch&#281; obawy nawet w rzeczach pewnych, ni&#380; dobrze trzyma&#263; o niepewnych. Zarozumia&#322;o&#347;&#263; nieszcz&#281;&#347;liw&#261; jest doradczyni&#261;. Lepszym jest w&#261;tpliwy po dobrym namy&#347;le skutek, ni&#380; u&#347;miechaj&#261;cy si&#281; bez namys&#322;u. Nie tak razi to, co&#347;my przewidzieli: bo chocia&#380; nast&#281;puje mimo naszej woli, ale nie mimo naszej wiedzy. Je&#347;li si&#281; uchroni&#263; od nieszcz&#281;&#347;&#263; nie mo&#380;esz, to od b&#322;&#281;d&#243;w mo&#380;esz. Pilne przewidywanie cz&#281;sto z&#322;emu zapobiega, z&#322;e zmniejsza, albo i ca&#322;kiem usuwa. Za okiem ku ber&#322;u zwr&#243;conem bezpiecznie post&#281;puj&#261; ludy: namby si&#281; w r&#281;kach i nogach oczy przyda&#322;y, aby&#347;my dobrze widzieli, co robimy, dok&#261;d d&#261;&#380;ymy. Nie daleko widzi, kto tylko to widzi, co przed nim jest; kto dalej wzrokiem nie si&#281;ga. B a r d z i e j&nbsp;&nbsp;n a&nbsp;&nbsp;k o n i e c,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;n a&nbsp;&nbsp;p o c z &#261; t e k&nbsp;&nbsp;p a t r z.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0502',
                        'name' => 'II Maja',
                        'content' => 'O dwojakiem nauczaniu.',
                        'author' => '&#8222;Dwojakim sposobem uczy nas B&#243;g, naprz&#243;d sam przez si&#281;, za po&#347;rednictwem swej &#322;aski, swego natchnienia; powt&#243;re przez ludzi, przez ich rady i przestrogi.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 1)',
                        'description2' => 'Jak cierni, tak zawik&#322;a&#324; pe&#322;n&#261; jest droga do nieba; szcz&#281;&#347;liwy, kto tu bieg&#322;ego znalaz&#322; przewodnika: bez jego pomocy &#322;atwo si&#281; zab&#322;&#261;ka&#263;, &#322;atwo w piekieln&#261; przepa&#347;&#263; pogr&#261;&#380;y&#263;. B&#243;g dla zaostrzenia naszej baczno&#347;ci chcia&#322;, aby jego wzgl&#281;dem nas zamiary by&#322;y nam nieznane. Nie zaznajomi&#322; nas z niemi dlatego, aby&#347;my mieli pole do &#263;wiczenia si&#281; w wierze; chcia&#322; owszem, dla pomno&#380;enia naszych zas&#322;ug, aby&#347;my nie wprost jego, ale ludzi przez wzgl&#261;d na niego s&#322;uchali. M&#243;wi cz&#281;sto w sercu Duch &#346;wi&#281;ty, ale nie wszyscy rozumiej&#261; mow&#281; jego. Wprawnych potrzebuje uszu, gdy&#380; bardzo po cichu przemawia; g&#322;os jego w&#347;r&#243;d rozhukanych nami&#281;tno&#347;ci &#322;atwo niknie, jest niezrozumia&#322;y, dlatego potrzebujemy t&#322;umacza. Z prostymi rozmowa jego. Kto jest zarozumia&#322;ym, kto si&#281; wynosi, ten rozmowy z nim niech si&#281; nie spodziewa. O b j a w i a&nbsp;&nbsp;t o&nbsp;&nbsp;m a l u c z k i m,&nbsp;&nbsp;c o&nbsp;&nbsp;z a k r y w a&nbsp;&nbsp;p r z e d&nbsp;&nbsp;p y s z n y m i <sup>1</sup>.',
                        'description3' => '1) &#346;. Mateusz 11, 25.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0503',
                        'name' => 'III Maja',
                        'content' => 'O niesieniu pomocy innym.',
                        'author' => '&#8222;Lepiej jest &#380;y&#263; w niepewno&#347;ci o szcz&#281;&#347;liwo&#347;&#263; wieczn&#261;, s&#322;u&#380;&#261;c Bogu i pracuj&#261;c nad zbawieniem bli&#378;nich; ni&#380;, b&#281;d&#261;c pewnym wiekuistej chwa&#322;y w niebie, zaraz umrze&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Biderm. l. 2).',
                        'description2' => 'Dawniej ascetyka za rzecz najlepsz&#261; uwa&#380;a&#322;a posiadanie Boga, teraz za&#347; co&#347; wznio&#347;lejszego wynalaz&#322;a, a mianowicie: s &#322; u &#380; e n i e&nbsp;&nbsp;B o g u&nbsp;&nbsp;i&nbsp;&nbsp;b l i &#378; n i e m u. Mi&#322;owa&#263; Boga i posiada&#263; go, milsz&#261; jest rzecz&#261; dla nas, pracowa&#263; za&#347; dla Boga, milsz&#261; jest dla niego. Kto tak mi&#322;uje niebezpiecze&#324;stwo, ten zdala jest od niebezpiecze&#324;stwa: wystawianie si&#281; bowiem na niebezpiecze&#324;stwo nie z p&#322;ochej jakiej przyczyny, ale dla Boga, wi&#281;ksz&#261; pomoc wyjednywa od Boga, zdwojon&#261; &#322;ask&#281; przynosi, pod kt&#243;rej opiek&#261; nie ma si&#281; cz&#322;owiek czego obawia&#263;. To znaczy najdoskonalej Boga mi&#322;owa&#263;, gdy si&#281; wszelkich si&#322; dok&#322;ada, aby przez wielu by&#322; mi&#322;owany. Jak ogie&#324; po&#322;&#261;czony z innym ogniem silniej pali i ja&#347;niej &#347;wieci, tak mi&#322;uj&#261;cych wielka liczba zwi&#281;ksza mi&#322;o&#347;&#263; i zwi&#281;ksza zas&#322;ug&#281;. Wszelkie dobro udziela si&#281;, najbardziej za&#347; wieczne; czyni&#263; je sobie wsp&#243;lnem z innymi, to znaczy swoj&#261; w niebie rado&#347;&#263; zwi&#281;ksza&#263;. Jakie&#380;to nies&#322;ychane &#380;niwo rado&#347;ci wiecznej, gdy pomy&#347;limy, &#380;e&#347;my wielu do osi&#261;gni&#281;cia nieba swem staraniem dopomogli!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0504',
                        'name' => 'IV Maja',
                        'content' => 'O gorliwo&#347;ci w s&#322;u&#380;eniu Bogu.',
                        'author' => '&#8222;Gdy sprawy ludzkie z niewielk&#261; troskliwo&#347;ci&#261; si&#281; wykonywaj&#261;, to mo&#380;e s&#322;usznie kto przebaczy; ale gdy nie&#347;miertelnemu Bogu kto niedbale s&#322;u&#380;y, tego na &#380;aden spos&#243;b znie&#347;&#263; nie mo&#380;na.&#8221;',
                        'description' => '(S. Ignat. apud Maff. l. 2).',
                        'description2' => 'Rzecz dobra, je&#347;li si&#281; dobrze nie wykonywa, to dobrej nazw&#281; i warto&#347;&#263; traci. Nie jest czcicielem, ale szyderc&#261; Boskiego Majestatu ten, kto sprawy Boskie, albo przez wzgl&#261;d na Boga podj&#281;te, jakby od niechcenia za&#322;atwia. W&#322;adzcy tego &#347;wiata, jakiego&#380; uszanowania nie wymagaj&#261;, przy oddawaniu im pos&#322;ug! Najwi&#281;kszym rzeczy nawet najlepszych nieprzyjacielem i niszczycielem jest d&#322;ugie ich u&#380;ywanie. Co cz&#281;sto si&#281; odbywa, to si&#281; w przyzwyczajenie zamienia, kt&#243;re znowu jakby towarzyszk&#281; poci&#261;ga za sob&#261; niedba&#322;o&#347;&#263;. Lepiej rzeczy &#347;wi&#281;tej na pewien czas zaniecha&#263;, ni&#380; j&#261; nie&#347;wi&#281;cie wykonywa&#263;. Jak&#380;e wiele tracimy przez niedba&#322;o&#347;&#263;! nietylko pozbywamy si&#281; zysku znacznego, ale nadto ponosimy szkod&#281; wielk&#261;. Kto jest lekkomy&#347;lny i opiesza&#322;y, ten jest bratem niszcz&#261;cego swoje w&#322;asne dzie&#322;a. Siejemy wiele, a zbieramy ma&#322;o; bo wiele, ale niedbale robimy. Milszym jest Bogu czyn ma&#322;y ch&#281;tnie, z pilno&#347;ci&#261; wykonany, ni&#380; wielki gnu&#347;nie, ospale. N i e&nbsp;&nbsp;n a&nbsp;&nbsp;s &#322; o w a&nbsp;&nbsp;B &#243; g&nbsp;&nbsp;z w a &#380; a,&nbsp;&nbsp;a l e&nbsp;&nbsp;n a&nbsp;&nbsp;p r z y s &#322; &#243; w k i;&nbsp;&nbsp;n i e&nbsp;&nbsp;c o,&nbsp;&nbsp;a l e&nbsp;&nbsp;j a k&nbsp;&nbsp;c z y n i m y,&nbsp;&nbsp;p a t r z y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0505',
                        'name' => 'V Maja',
                        'content' => 'O mi&#322;o&#347;ci czynnej.',
                        'author' => '&#8222;B&#243;g jest wielkim znawc&#261;, mi&#322;o&#347;&#263; bardziej z czyn&#243;w, ni&#380; ze s&#322;&#243;w ocenia.&#8221;',
                        'description' => '(S. Ignat. in contempl. de amore Dei).',
                        'description2' => 'Mi&#322;o&#347;&#263; bez czynu, to drzewo pe&#322;ne li&#347;ci, ale bez owoc&#243;w; poka&#378;ne ale niepo&#380;yteczne. Czyny &#347;wiadcz&#261; o mi&#322;o&#347;ci, nie s&#322;owa; maj&#261; one sw&#243;j j&#281;zyk, maj&#261; swoj&#261; wymow&#281;. Jeden j&#281;zyk, a dwie r&#281;ce nam si&#281; od natury dosta&#322;y, &#380;eby&#347;my wi&#281;cej robili, ni&#380; m&#243;wili. Martwym jest g&#322;os bez czynu. Gdzie nie ma mi&#322;o&#347;ci, tam wszystko nic nie warte. Mi&#322;o&#347;&#263; nie w ustach, ale w sercu sobie siedlisko obra&#322;a. Cz&#281;sto mi&#322;o&#347;&#263; zmy&#347;lona i prawdziwa jednakowo si&#281; przedstawiaj&#261;, podobnemi s&#322;owami wypowiadaj&#261;, tak, i&#380; rozr&#243;&#380;nienie szczerej od udanej bywa nieraz trudne. Tak cz&#322;owiek mo&#380;e z cz&#322;owieka szydzi&#263;, ale nie z Boga. Ten przenika do wn&#281;trza, bo wie wszystko <sup>1</sup>. Szczytem dar&#243;w duch jest; to tylko mi&#322;e niebu, co on, nie co r&#281;ce daj&#261;. Kto mniej ma, ale bardziej mi&#322;uje, tego dar chocia&#380;by by&#322; ma&#322;y, w wi&#281;kszej jest cenie, ni&#380; dar bez por&#243;wnania wi&#281;kszy, ale dany z mniejsz&#261; mi&#322;o&#347;ci&#261;.',
                        'description3' => '1) Psalm 7, 10.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0506',
                        'name' => 'VI Maja',
                        'content' => 'O znakach dobrze urz&#261;dzonego klasztoru.',
                        'author' => '&#8222;Trzy s&#261; niew&#261;tpliwe znaki dobrze urz&#261;dzonego klasztoru; a mianowicie: &#347;cis&#322;e zachowanie klauzury, pilne przestrzeganie czysto&#347;ci i baczno&#347;&#263; na milczenie.&#8221;',
                        'description' => '(S. Ignat. apud Lancic. opus. 5).',
                        'description2' => 'Dok&#261;d wszyscy bez r&#243;&#380;nicy wst&#281;p maj&#261;, tam jakby na zawo&#322;anie zjawiaj&#261; si&#281; niezgody, wnosz&#261; brudy, narusza pok&#243;j. Miasto bez stra&#380;y jest dla nieprzyjaci&#243;&#322; swoich po&#347;miewiskiem. Czysto&#347;&#263;, cnota anielska, nienawidzi brudu, i to nietylko w duszy, ale i w tem wszystkiem, co si&#281; przed oczy nawija, w r&#281;ce dostaje. Czysto&#347;&#263; zewn&#281;trzna daje zna&#263; o wewn&#281;trznej, wprowadza nas niejako do duszy, pokazuje jej przymioty. Prawo milczenia jest praw wszystkich jakby streszczeniem; gdzie si&#281; &#347;ci&#347;lej przestrzega, tam cnota jest pe&#322;niejsz&#261;, zbudowanie wi&#281;ksze. G d z i e&nbsp;&nbsp;m n i e j&nbsp;&nbsp;s &#322; &#243; w,&nbsp;&nbsp;t a m&nbsp;&nbsp;w i &#281; c e j&nbsp;&nbsp;r o z t r o p n o &#347; c i,&nbsp;&nbsp;z a r &#243; w n o&nbsp;&nbsp;&#347; w i &#281; t e j,&nbsp;&nbsp;j a k&nbsp;&nbsp;i&nbsp;&nbsp;&#347; w i e c k i e j.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0507',
                        'name' => 'VII Maja',
                        'content' => 'O pokonaniu wady g&#322;&#243;wnej.',
                        'author' => '&#8222;Przeciwko tej sk&#322;onno&#347;ci nale&#380;y podnie&#347;&#263; bro&#324;, kt&#243;ra ci&#281; najbardziej gn&#281;bi, i nie pierwiej zaprzesta&#263; walki, a&#380; j&#261; przy pomocy Boga ca&#322;kiem zwyci&#281;&#380;ysz.&#8221;',
                        'description' => '(S. Ignat. apud Maff. l. 3).',
                        'description2' => 'Jak mozolny, tak daremny trud zrywa&#263; li&#347;cie, albo potrochu ze szkodliwego drzewa obcina&#263; ga&#322;&#281;zie; bo obci&#281;te znowu odrosn&#261;, i dop&#243;ty odrasta&#263; b&#281;d&#261;, dop&#243;ki drzewa z korzeniem nie wyrwiesz. Siekier&#281; przy&#322;o&#380;y&#263; nale&#380;y do korzenia, zk&#261;d wszelkie z&#322;e pochodzi. Walk&#281; musisz prowadzi&#263; nieub&#322;agan&#261; z nami&#281;tno&#347;ci&#261; w tobie panuj&#261;c&#261;, gdy&#380; ona na ciebie dop&#243;ty czycha&#263; b&#281;dzie, dop&#243;ki si&#281; z tym &#347;wiatem nie rozstaniesz. Nie pr&#281;dzej, jeno razem z tob&#261; umrze ten nieprzyjaciel. Jak on zawsze pod broni&#261;, tak ty b&#261;d&#378; zawsze na stra&#380;y. Przeciw wielu naraz wadom walczy&#263;, to znaczy wszystkim pob&#322;a&#380;a&#263;. I Herkules przeciw wielu zas&#322;aby. Jedn&#261; potrzeba upatrze&#263; i do tej z ca&#322;&#261; energi&#261; si&#281; zabra&#263;, inaczej nie zwyci&#281;&#380;ysz &#380;adnej. Jak po &#347;ci&#281;ciu g&#322;owy wszystkie cz&#322;onki opadaj&#261;, po zabiciu wodza wojsko si&#281; rozprasza; tak po usuni&#281;ciu przyczyny wywo&#322;uj&#261;cej chorob&#281;, &#322;atwo si&#281; usuwaj&#261; i jej objawy. J e &#347; l i&nbsp;&nbsp;g &#322; &#243; w n a&nbsp;&nbsp;w a d a&nbsp;&nbsp;p o k o n a n a&nbsp;&nbsp;z o s t a n i e,&nbsp;&nbsp;t o&nbsp;&nbsp;i n n e&nbsp;&nbsp;n a w e t&nbsp;&nbsp;l i c z n e&nbsp;&nbsp;s a m e&nbsp;&nbsp;u s t &#261; p i &#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0508',
                        'name' => 'VIII Maja',
                        'content' => 'O nieudawaniu.',
                        'author' => '&#8222;Niepoczciwy, chocia&#380;by skryty, przez d&#322;ugi czas pomi&#281;dzy poczciwymi ukry&#263; si&#281; nie mo&#380;e.&#8221;',
                        'description' => '(S. Ignat. apud Bartol. l. 4).',
                        'description2' => 'Biada grobom pobielanym, kt&#243;re na zewn&#261;trz wygl&#261;daj&#261; czysto, a wewn&#261;trz pe&#322;ne s&#261; zgnielizny <sup>1</sup>. Ob&#322;udnika nikt nie lubi: ani cz&#322;owiek, bo on towarzystwo ludzkie znosi; ani B&#243;g, bo ten prawd&#261; jest. Z&#322;o&#347;&#263; jawna mniej zawsze szkodzi&#322;a. Gdy ogie&#324; p&#322;omieniem wybuchnie, zbiegaj&#261; si&#281; ludzie zewsz&#261;d i staraj&#261; ugasi&#263;; ale dop&#243;ki si&#281; ukrywa, dop&#243;ki si&#281; tylko tli, dop&#243;ty bardzo szkodzi i wielkie spustoszenie sprawuje. Kto chce oszuka&#263; wszystkich, ten s&#322;usznym s&#261;dem Boga sam bywa oszukiwany najbardziej. Roztropno&#347;&#263; nakazuje nie dawa&#263; wiary, je&#347;li jej nie znajdujemy nawzajem. Podst&#281;p podst&#281;pem si&#281; zbywa i w ten spos&#243;b maska z maskowanego spada. Boga nikt nie oszuka, on tajniki zg&#322;&#281;bia <sup>2</sup>. Napr&#243;&#380;no s&#261; ciemno&#347;ci i kryj&#243;wki, owo oko wszystko wiedz&#261;ce, wsz&#281;dzie przenika. Strze&#380; si&#281;, mask&#281; zdejm; inaczej ukar&#380;e ci&#281; B&#243;g, &#347;ciano pobielana. B &#261; d &#378;&nbsp;&nbsp;t e m,&nbsp;&nbsp;c z e m&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p o k a z u j e s z,&nbsp;&nbsp;a l b o&nbsp;&nbsp;p o k a &#380;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;t e m,&nbsp;&nbsp;c z e m&nbsp;&nbsp;j e s t e &#347;.',
                        'description3' => '1) &#346;. Mat. 23, 27.<br/>
    2) I. Paralip. 28, 9.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0509',
                        'name' => 'IX Maja',
                        'content' => 'O hamowaniu si&#281; w gniewie.',
                        'author' => '&#8222;Kto jest zbyt gniewliwym, ten przez usuni&#281;cie si&#281; od towarzystwa innych, nie zaradzi sobie, bo ta wada pokonuje si&#281; nie uciekaj&#261;c, ale opieraj&#261;c si&#281; jej.&#8221;',
                        'description' => '(S. Ignat. in Excercit.)',
                        'description2' => 'Ustaje na pewien czas, ale si&#281; nie znosi z&#322;e, dop&#243;ki praw gniewu nie dyktuje rozum; potrzeba go koniecznie pod jarzmo rozumu podda&#263;, inaczej ciebie ujarzmi. Dop&#243;ki si&#281; tli, cho&#263;by iskierka, dop&#243;ty obawia&#263; si&#281; nale&#380;y po&#380;aru. Nie wiele potrzeba prochu, aby z iskry powsta&#322; p&#322;omie&#324;; tak lada przyczyna gniew tw&#243;j rozdmucha, si&#322;y jego wzmocni. Je&#347;li unikniesz jednej przyczyny, to znajdzie si&#281; druga; je&#347;li wszelkiej zechcesz unikn&#261;&#263;, to ze &#347;wiata si&#281; usun&#261;&#263; musisz. Ani w owej przyczynie, ani w owym towarzyszu, kt&#243;rego unikasz, ale w tobie z&#322;e si&#281; kryje; w zanadr&#380;u masz &#380;mij&#281;, dok&#261;dkolwiek si&#281; udasz, ona z tob&#261; p&#243;jdzie. N i e&nbsp;&nbsp;m i e j s c e&nbsp;&nbsp;p r z e t o,&nbsp;&nbsp;n i e&nbsp;&nbsp;t o w a r z y s z a,&nbsp;&nbsp;a l e&nbsp;&nbsp;s i e b i e&nbsp;&nbsp;i&nbsp;&nbsp;o b y c z a j e&nbsp;&nbsp;s w o j e&nbsp;&nbsp;z m i e &#324;. Dop&#243;ki &#380;y&#263; b&#281;dzie ta domowa hydra; dop&#243;ty od rany za bezpiecznego uwa&#380;a&#263; si&#281; nie mo&#380;esz; nale&#380;y j&#261; wyzu&#263; ze si&#322;, ubezw&#322;adni&#263;, a wtedy z ka&#380;dym spokojnie przebywa&#263; b&#281;dziesz m&#243;g&#322;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0510',
                        'name' => 'X Maja',
                        'content' => 'O unikaniu kobiet.',
                        'author' => '&#8222;Z kobietami nawet pobo&#380;nemi za&#380;y&#322;o&#347;ci unika&#263; nale&#380;y, bo za&#380;y&#322;o&#347;&#263; z niemi ju&#380;to dym, ju&#380; p&#322;omie&#324; wywo&#322;uje: albo si&#281; zatem okopcisz, albo opalisz.&#8221;',
                        'description' => '(S. Ignat. apud Bartol. l. 4).',
                        'description2' => 'Kto si&#281; nie chce ogrza&#263;, niech do ognia nie przyst&#281;puje: bo ten i niechc&#261;cego ogrzewa. Czemu pragniesz tam dzia&#322;a&#263; i przebywa&#263;, gdzie albo zgin&#261;&#263; musisz, albo zwyci&#281;&#380;y&#263;? Jak z nieprzyjacio&#322;mi, tak z kobietami zachowa&#263; si&#281; potrzeba. Tamci g&#322;ow&#281;, te serce atakuj&#261;: tamci otwarcie, te potajemnie walcz&#261;. Bardziej tych, ni&#380; tamtych si&#281; obawiaj; bo pr&#281;dzej te, ni&#380; tamci o zgub&#281; ci&#281; przyprawi&#261;. Je&#347;li korzy&#347;ci, jakich si&#281; spodziewasz i szkody, jakie ponie&#347;&#263; mo&#380;esz, na r&#243;wnej szali po&#322;o&#380;ysz; to te o wiele tamte przewa&#380;&#261;. Cedry Libanu popada&#322;y od tej burzy, cedry, o kt&#243;rych upadek mniej si&#281; l&#281;ka&#263; nale&#380;a&#322;o, ni&#380; o upadek Antoniego. Ile&#380; lw&#243;w ujarzmi&#322;a jedna niemoc wypieszczona! Uczucie duchowne &#322;atwo si&#281; przeradza w zmys&#322;owe; nic si&#281; tak pr&#281;dko nie psuje, jak cia&#322;o i krew. K t o&nbsp;&nbsp;t u&nbsp;&nbsp;s o b i e&nbsp;&nbsp;u f a,&nbsp;&nbsp;t e n&nbsp;&nbsp;n a&nbsp;&nbsp;z b y t&nbsp;&nbsp;&#347; l i z k i m&nbsp;&nbsp;g r u n c i e&nbsp;&nbsp;s t a j e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0511',
                        'name' => 'XI Maja',
                        'content' => 'O na&#347;ladowaniu Anio&#322;&#243;w.',
                        'author' => '&#8222;W dopomaganiu bli&#378;nim nale&#380;y na&#347;ladowa&#263; Anio&#322;&#243;w, kt&#243;rzy przy sprawowaniu ludzkiego zbawienia, &#380;adnego przezorno&#347;ci &#347;rodka nie zaniedbuj&#261;; powodzenie za&#347;, jakiekolwiek ono jest, z&#322;e czy dobre, nic a nic nie wp&#322;ywa na utrat&#281; ich b&#322;ogiego i wiecznego pokoju.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden. l. 5).',
                        'description2' => 'Je&#347;li teraz zabiegi nasze pe&#322;zn&#261; na niczem, to mo&#380;e dadz&#261; owoc z czasem. O zbawieniu &#380;adnego cz&#322;owieka, chocia&#380;by najgorszego, rozpacza&#263; nie nale&#380;y dop&#243;ty, dop&#243;ki &#380;yje i dyszy, dop&#243;ki w drodze jest do wieczno&#347;ci. Co jedno lub drugie usi&#322;owanie nie mog&#322;o, to mo&#380;e dokona trzecie. B&#243;g nam leczenie poleci&#322;, nie wyleczenie bli&#378;niego. M y&nbsp;&nbsp;s i a &#263;&nbsp;&nbsp;p o w i n n i &#347; m y.&nbsp;&nbsp;B &#243; g&nbsp;&nbsp;o&nbsp;&nbsp;w z r o &#347; c i e&nbsp;&nbsp;p o m y &#347; l i. Je&#347;li skutek wypadnie nie taki, jakiegoby&#347;my pragn&#281;li, nie potrzeba upada&#263; na duchu; nagroda nas nie minie, bo j&#261; B&#243;g zgotowa&#322; za ch&#281;&#263;, nie za czyn; za usi&#322;owanie, nie za powodzenie. Je&#347;li owoc, nad wypiel&#281;gnowaniem kt&#243;rego wiele&#347; si&#281; namozoli&#322;, wiele potu wyla&#322;, gwa&#322;town&#261; burz&#261; porwany, w jednej chwili ginie; ty nie rozpaczaj. Zamiary raczej Boga uwielbiaj, tobie nieznane, od twoich jednak lepsze. Je&#347;liby setny twej pracy odpowiada&#322; owoc, to ju&#380; tu cz&#281;&#347;&#263; zap&#322;aty odbierasz, a mianowicie pociech&#281; z pracy, pociech&#281;, kt&#243;ra jak sam&#261; prac&#281;, tak i zas&#322;ug&#281; zmniejsza.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0512',
                        'name' => 'XII Maja',
                        'content' => 'O przymiotach s&#322;ug Bo&#380;ych.',
                        'author' => '&#8222;Pragn&#281;, &#380;eby s&#322;udzy Boga celowali raczej cnot&#261;, ni&#380; liczb&#261; i &#380;eby si&#281; r&#243;&#380;nili od innych ludzi bardziej rzecz&#261; sam&#261;, ni&#380; nazw&#261; i ubiorem.&#8221;',
                        'description' => '(S. Ignat. in hist. soc. l. 5).',
                        'description2' => 'Wielkie wojsk zast&#281;py wielkim kl&#281;skom podlegaj&#261;. Si&#322;a nie na ogromie, ale na m&#281;ztwie polega: to za&#347; nie od liczby, ale od ducha zale&#380;y. Jak s&#322;o&#324;ce jedno ja&#347;niej ni&#380; tysi&#261;c gwiazd &#347;wieci, tak jeden m&#281;&#380;ny wi&#281;cej ni&#380; tysi&#261;c niedo&#322;&#281;g&#243;w znaczy. Rzeczy przez sam&#261; obfito&#347;&#263; trac&#261; na warto&#347;ci; powszednieje a nawet pewn&#261; odraz&#281; budzi, co jest wsz&#281;dzie pod r&#281;k&#261;, wsz&#281;dzie w podostatku. Mnogo&#347;&#263; sama sobie ci&#281;&#380;arem, wywo&#322;uje nie&#322;ad; &#322;atwo szkodzi jeden drugiemu, i ten co powinien by&#263; pomoc&#261;, staje si&#281; przeszkod&#261;. Nie zawsze lepiej si&#281; robi, co przez wielu si&#281; robi: praca przez og&#243;&#322; podejmowana dla og&#243;&#322;u zwykle z zaniedbaniem si&#281; wykonywa. Im wi&#281;cej lekarzy, tem gorzej idzie kuracya. R&#243;&#380;ni&#261; si&#281; ze sob&#261; w zdaniach, cz&#281;sto wypowiadaj&#261; wprost przeciwne, przyczyniaj&#261; si&#281; raczej do pogorszenia, ni&#380; do uleczenia choroby. T y&nbsp;&nbsp;t a k i m&nbsp;&nbsp;b y &#263;&nbsp;&nbsp;u s i &#322; u j,&nbsp;&nbsp;a b y &#347;&nbsp;&nbsp;s a m&nbsp;&nbsp;j e d e n&nbsp;&nbsp;z a&nbsp;&nbsp;t y s i &#261; c&nbsp;&nbsp;s t a r c z y &#322;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0513',
                        'name' => 'XIII Maja',
                        'content' => 'O niesieniu krzy&#380;a.',
                        'author' => '&#8222;Id&#378;my r&#261;czo, bezpiecznie, krzy&#380;, jakikolwiek nam nie&#347;&#263; wypadnie, z Chrystusem poniesiemy; pomoc jego jest niezawodna, od sprzysi&#281;&#380;enia wszystkich nieprzyjaci&#243;&#322; pot&#281;&#380;niejsza.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 2).',
                        'description2' => 'Mocno cierpi, kto si&#281; do cierpienia nie na&#322;o&#380;y&#322;; kto si&#281; za&#347; cierpie&#263; nauczy&#322;, w cierpieniu zaprawi&#322;, ten b&#243;lu takiego nie czuje i bez utyskiwania, co mu dolega, znosi. Na co si&#281; pierwszy z&#380;yma, z tego si&#281; drugi cieszy; co pierwszy za ci&#281;&#380;ar uwa&#380;a, na to drugi nie zwraca uwagi. Tak wielka r&#243;&#380;nica zachodzi pomi&#281;dzy chc&#261;cym i niechc&#261;cym cierpie&#263;! Nale&#380;y umys&#322; do rzeczy przykrych zaprawia&#263;. Nieraz w ci&#261;gu dnia zdarzy si&#281; to i owo, nad czem zabole&#263;, co znie&#347;&#263; musisz. Przewiduj zawczasu i postan&#243;w nie oburza&#263; si&#281;, ale przyj&#261;&#263; spokojnie. O d&nbsp;&nbsp;n a s&nbsp;&nbsp;z a l e &#380; y,&nbsp;&nbsp;m a &#322; o&nbsp;&nbsp;a l b o&nbsp;&nbsp;n i c&nbsp;&nbsp;n i e&nbsp;&nbsp;c i e r p i e &#263;. Krzy&#380; ma swoje pociechy; je&#347;li potrafimy z nich korzysta&#263;, &#380;adna przeciwno&#347;&#263; nie zrobi nas nieszcz&#281;&#347;liwymi. Od czasu, jak Chrystus z rado&#347;ci&#261; podj&#261;&#322; krzy&#380;, wszelka gorycz ust&#261;pi&#322;a z krzy&#380;a. Syn Bo&#380;y nie by&#322; bez krzy&#380;a. Krzy&#380; nie b&#281;dzie bez Chrystusa, je&#347;li ten krzy&#380; przyjmiesz jako upominek od Chrystusa i je&#347;li go ch&#281;tnie poniesiesz. K a &#380; d y&nbsp;&nbsp;s w e g o&nbsp;&nbsp;s z c z &#281; &#347; c i a&nbsp;&nbsp;l u b&nbsp;&nbsp;n i e s z c z &#281; &#347; c i a&nbsp;&nbsp;j e s t&nbsp;&nbsp;s p r a w c &#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0514',
                        'name' => 'XIV Maja',
                        'content' => 'O w&#322;a&#347;ciwo&#347;ci sukni.',
                        'author' => '&#8222;Suknia twoja, aby nie razi&#322;a, niech b&#281;dzie w&#322;a&#347;ciw&#261;, do okolicy, w kt&#243;rej mieszkasz, zastosowan&#261;, stanowi, w jakim zostajesz odowiedni&#261;.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => 'Kto z sukni szuka chluby, ten niejako o&#347;wiadcza, &#380;e mu na innej warto&#347;ci zbywa. Ty winiene&#347; zdobi&#263; sukni&#281;, nie suknia ciebie. Nie wiele na tem zale&#380;y, czy g&#322;adka czy chropowata jest koncha, w kt&#243;rej si&#281; kryje per&#322;a; jak&#261;kolwiek b&#281;dzie, per&#322;a warto&#347;ci swej nie straci. Jak&#380;e biedny, kto u krawca lub jubilera kupuje sobie s&#322;aw&#281;! Czem&#380;e jest owa suknia kosztowna, kt&#243;rej tak pragniesz? czem jedwab i purpura? Oto niczem innem, tylko odpadkami robaczk&#243;w. Wyborna zaprawd&#281; do che&#322;pienia si&#281; materya! Suknia jest ustawicznem ha&#324;by naszej znamieniem. W skutek grzechu przywdzia&#322; j&#261; Adam, razem z grzechem jako spadek przekaza&#322; swym dzieciom; tak powsta&#322;a niezb&#281;dno&#347;&#263; sukni, zawstydzenia raczej, ni&#380; chwa&#322;y powodem b&#281;d&#261;cej <sup>1</sup>. A&#380;eby nas okrywa&#322;a, aby od zimna i innych dokuczliwo&#347;ci cia&#322;o nasze chroni&#322;a; nie a&#380;eby ozdabia&#322;a, do pychy s&#322;u&#380;y&#322;a, dana jest nam suknia. C z e m u&nbsp;&nbsp;j &#261;&nbsp;&nbsp;k u&nbsp;&nbsp;p r &#243; &#380; n o &#347; c i&nbsp;&nbsp;z w r a c a s z,&nbsp;&nbsp;c z e m u&nbsp;&nbsp;j e j&nbsp;&nbsp;p r z e z n a c z e n i e&nbsp;&nbsp;z m i e n i a s z?',
                        'description3' => '1) Genes. 3, 7. 21.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0515',
                        'name' => 'XV Maja',
                        'content' => 'O opieraniu si&#281; pokusom.',
                        'author' => '&#8222;Gdy z&#322;y duch w jaki szczeg&#243;lny spos&#243;b do zbrodni ci&#281; pobudza; wtedy pr&#243;cz &#347;rodk&#243;w zwyk&#322;ych, przeciwstawi&#263; nale&#380;y jakie&#347; niezwyk&#322;e, dobrowolnego umartwienia &#347;rodki.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Jak klin klinem, tak niezwyk&#322;e choroby niezwyk&#322;emi winne by&#263; usuwane lekarstwami; gdzie wi&#281;ksze niebezpiecze&#324;stwo, tam z silniejsz&#261; pomoc&#261; &#347;pieszy&#263; nale&#380;y. Przeciwno&#347;ci przeciwno&#347;ciami si&#281; znosz&#261;. Ani licznym, ani silnym pokusom ulega&#263; nie nale&#380;y. Zawsze niebo nad piek&#322;o, &#322;aska nad z&#322;ego ducha pot&#281;&#380;niejsz&#261; jest. B&#243;g takiej pokusy na nas nie dopu&#347;ci, kt&#243;rejby&#347;my si&#281; oprze&#263; nie mogli. Gorsz&#261; jest nad wojn&#281; sama obawa wojny: nie ma nic niebezpieczniejszego, jak si&#281; zbyt l&#281;ka&#263; nieprzyjaciela. Je&#347;li si&#281; l&#281;kasz, ju&#380; jeste&#347; zwyci&#281;&#380;ony z twej lepszej strony. Odwag&#261; nasz&#261; rozbrajamy nieprzyjaci&#243;&#322;; gdy my powstajemy, oni upadaj&#261; na duchu. Je&#347;li nieprzyjaciele s&#261; liczni, je&#347;li cz&#281;sto napadaj&#261; na ciebie, b&#261;d&#378; tej my&#347;li, &#380;e ci daj&#261; sposobno&#347;&#263; do zwyci&#281;ztwa. B &#243; g&nbsp;&nbsp;c i &#281;&nbsp;&nbsp;c h c e&nbsp;&nbsp;u w i e &#324; c z y &#263;,&nbsp;&nbsp;a&nbsp;&nbsp;b y &#322; o b y&nbsp;&nbsp;t o&nbsp;&nbsp;d l a &#324;&nbsp;&nbsp;n i e m o &#380; l i w e m,&nbsp;&nbsp;g d y b y &#347;&nbsp;&nbsp;t y&nbsp;&nbsp;n i e p r z y j a c i &#243; &#322;&nbsp;&nbsp;n i e&nbsp;&nbsp;c z u &#322;.&nbsp;&nbsp;B o j o w a n i e m&nbsp;&nbsp;j e s t&nbsp;&nbsp;&#380; y c i e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0516',
                        'name' => 'XVI Maja',
                        'content' => 'O niezra&#380;aniu surowo&#347;ci&#261;.',
                        'author' => '&#8222;Niech si&#281; strzeg&#261; prze&#322;o&#380;eni, aby swoich surowo&#347;ci&#261; nie zrazili do siebie; nawet samo przeczucie surowo&#347;ci szkodzi.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Ci co stawiaj&#261; op&#243;r &#347;rodkom surowym, ust&#281;puj&#261; cz&#281;sto przed &#322;agodniejszemi. Dyament, kt&#243;ry pod uderzeniami m&#322;ota pozostaje niewzruszony, za zetkni&#281;ciem si&#281; z krwi&#261; ciep&#322;&#261;, zapomina niejako swej twardo&#347;ci i rozdziela si&#281; na jakie chcesz cz&#281;&#347;ci. Umys&#322; wy&#380;szy nie znosi &#347;rodk&#243;w surowych, natura jego oburza si&#281; na nie; podobnie jak lew nie znosi &#322;a&#324;cuch&#243;w. Ten co pozwala si&#281; prowadzi&#263; na cienkiej nitce, rozrywa silne powrozy. Z lud&#378;mi mamy do czynienia, nie ze zwierz&#281;tami; kiedy te przek&#322;adaj&#261; &#322;agodne obej&#347;cie si&#281; nad surowe, o ile&#380; tamci s&#261; bardziej za &#322;agodnem, za ludzkiem. Nie szczeg&#243;lnym str&#243;&#380;em obyczaj&#243;w jest boja&#378;&#324;, d&#322;ugo i szcz&#281;&#347;liwie nad niemi czuwa&#263; nie zdo&#322;a. Obyczaje kr&#281;powane nad miar&#281;, przy lada sposobno&#347;ci wybuchn&#261; jak ogie&#324; gwa&#322;townie &#347;ci&#347;ni&#281;ty, i o ile przed tem pozornie ja&#347;nia&#322;y, o tyle p&#243;&#378;niej &#347;ciemniej&#261;. K o g o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p o d w &#322; a d n i&nbsp;&nbsp;b a r d z o&nbsp;&nbsp;l &#281; k a j &#261;,&nbsp;&nbsp;t e n&nbsp;&nbsp;n i e c h&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;o&nbsp;&nbsp;s i e b i e&nbsp;&nbsp;i&nbsp;&nbsp;k a r n o &#347; &#263;&nbsp;&nbsp;l &#281; k a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0517',
                        'name' => 'XVII Maja',
                        'content' => 'O ch&#281;tnem pos&#322;usze&#324;stwie.',
                        'author' => '&#8222;Wst&#281;puj&#261;cy do zakonu niechaj wie, &#380;e tam sta&#322;ego i spokojnego pobytu nie znajdzie, je&#347;li obiema, &#380;e tak powiem, nogami, to jest, umys&#322;em i sercem progu klasztornego nie przest&#261;pi.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Zakonnik winien by&#263; niejako bez woli. Chrystus, zakonnik&#243;w g&#322;owa, chcia&#322;, aby o nim na czele ksi&#281;gi by&#322;o napisano, &#380;e przyszed&#322;, aby czyni&#322; wol&#281; Ojca. To znaczy, &#380;e regu&#322;&#261; zasadnicz&#261; &#380;ycia zakonnego jest uleg&#322;o&#347;&#263;, pos&#322;usze&#324;stwo. Trudnego w tem nic nie ma, chyba, &#380;e kto&#347; nie chce. Od nas samych zale&#380;y, aby&#347;my sobie jarzmo uczynili wdzi&#281;cznem i lekkiem. Je&#347;li tego zechcemy, czego chce nasz zwierzchnik, &#322;atwem stanie si&#281; dla nas wszystko. Ka&#380;de polecenie spe&#322;nimy z tak&#261; ochot&#261;, jakby ono nie by&#322;o poleceniem, ale naszem w&#322;asnem pragnieniem. Nie ma niezno&#347;niejszego jarzma, nad jarzmo niepos&#322;usznego: c z e g o&nbsp;&nbsp;c h c  e,&nbsp;&nbsp;t e g o&nbsp;&nbsp;n i e&nbsp;&nbsp;m o &#380; e; c z e g o&nbsp;&nbsp;n i e&nbsp;&nbsp;c h c e,&nbsp;&nbsp;t o&nbsp;&nbsp;m u s i. Ustawiczne m&#281;cze&#324;stwo i to bez zas&#322;ugi. Niepos&#322;uszny cierpi podw&#243;jnie: s a m&nbsp;&nbsp;p r z e z&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;i&nbsp;&nbsp;o d&nbsp;&nbsp;p r z e &#322; o &#380; o n e g o. Cz&#322;owiek cichy, &#322;agodny, zawsze weso&#322;y; robi co mu ka&#380;&#261;, got&#243;w na ka&#380;de skinienie, nie czeka a&#380; nacisku, gro&#378;by. Zaledwie si&#281; dowiedzia&#322;, &#380;e taka jest wola zwierzchnika, natychmiast wzi&#261;&#322; si&#281; do jej spe&#322;nienia, z ca&#322;ym zapa&#322;em.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0518',
                        'name' => 'XVIII Maja',
                        'content' => 'O pieczy nad chorymi.',
                        'author' => '&#8222;W leczeniu chorego nie potrzeba si&#281; ogl&#261;da&#263; na wydatek; zdrowi, je&#347;li innych pokarm&#243;w zbraknie, &#322;atwo si&#281; wy&#380;ywi&#261; i suchym chlebem.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Wspania&#322;omy&#347;lno&#347;&#263; zawsze chwalebna, o wiele jest chwalebniejsz&#261;, gdy si&#281; tyczy chorych; Bogu wtedy dajemy, Boga d&#322;u&#380;nikiem naszym czynimy <sup>1</sup>: niedostatku obawia&#263; si&#281; nie potrzebuje ten, kto dla chorych jest hojnym. Chorobie w znacznej cz&#281;&#347;ci si&#281; zaradza, gdy chory widzi, &#380;e mu nie &#380;a&#322;ujemy, &#380;e dla niego z sercem jeste&#347;my: b&#243;l si&#281; zmniejsza, niejako ustaje, gdy chory spostrze&#380;e, &#380;e ma w nas wsp&#243;&#322;bolej&#261;cych ze sob&#261;. Z&#322;e si&#281; zdwaja, gdy choroba cia&#322;a poci&#261;ga za sob&#261; chorob&#281; ducha, kt&#243;r&#261; wytwarza brzydkie sk&#261;pstwo. Bo w ten spos&#243;b choremu przydajemy b&#243;lu, z&#322;e pogarszamy. Je&#347;li, jak zwykle bywa, chory grymasi, niecierpliwo&#347;&#263; okazuje, to nie choremu, ale chorobie przypisa&#263; nale&#380;y: niezdrowie bowiem cia&#322;a przenosi si&#281; na ducha, strona fizyczna, jak&#380;e cz&#281;sto i jak silnie oddzia&#322;ywa na moraln&#261;!',
                        'description3' => '1) &#346;. Mat. 25, 40.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0519',
                        'name' => 'XIX Maja',
                        'content' => 'O ufno&#347;ci w Bogu.',
                        'author' => '&#8222;Ufno&#347;&#263; nasza w Bogu tak&#261; by&#263; powinna, &#380;e nawet samo morze, gdyby nie by&#322;o okr&#281;tu, B&#243;g nam na go&#322;ej desce szcz&#281;&#347;liwie przep&#322;yn&#261;&#263; pozwoli.&#8221;',
                        'description' => '(S. Ignat. apud Maff.)',
                        'description2' => 'Pot&#281;ga Boga tak jest wielk&#261;, szczodrobliwo&#347;&#263; tak niezmiern&#261;, &#380;e nasz&#261; nadziej&#261;, jakakolwiekby ona by&#322;a, nigdy jej nie wyczerpiemy; pr&#281;dzej ma&#322;&#261; &#322;y&#380;eczk&#261; da&#322;oby si&#281; wyczerpa&#263; morze. Ma&#322;o otrzymujemy, bo ma&#322;o nadziei mamy; otrzymywaliby&#347;my daleko wi&#281;cej, gdyby&#347;my w sobie rozbudzali nadziej&#281; silniejsz&#261;. Dary dla nas przewy&#380;sza&#322;yby najbujniejsz&#261; wyobra&#378;ni&#281;. N i e&nbsp;&nbsp;B &#243; g,&nbsp;&nbsp;a l e&nbsp;&nbsp;s &#322; a b e&nbsp;&nbsp;n a d z i e j e&nbsp;&nbsp;n a s z e&nbsp;&nbsp;c z y n i &#261;&nbsp;&nbsp;n a s&nbsp;&nbsp;u b o g i m i. Kusi&#263; wprawdzie Boga nie mo&#380;na, ani liczy&#263; na cuda, gdy do tego nie zmusza konieczno&#347;&#263;; ale skoro nam Bo&#380;a wola jest wiadom&#261;, co do nas, mamy si&#281; bra&#263; r&#261;czo do dzie&#322;a; reszt&#281; z tak&#261; siln&#261; ufno&#347;ci&#261; poruczy&#263; Bogu, jakgdyby&#347;my wszystkie &#347;rodki mieli przed sob&#261;. W sprawie Bo&#380;ej na koniecznej pomocy nigdy nam nie zb&#281;dzie, albo je&#347;liby zbywa&#322;o, poka&#380;&#261; si&#281; cuda: najwi&#281;kszym ze wszystkich cud&#243;w by&#322;oby, ale dot&#261;d nies&#322;yszanym, &#380;eby nadzieja w Bogu, Boskiej pomocy pozbawion&#261; by&#322;a, &#380;eby j&#261; Boska pomoc zawiod&#322;a &#8212; w opuszczeniu zostawi&#322;a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0520',
                        'name' => 'XX Maja',
                        'content' => 'O roztropno&#347;ci.',
                        'author' => '&#8222;Gdy prze&#322;o&#380;ony co zaleca, to pos&#322;ugiwa&#263; si&#281; roztropno&#347;ci&#261; wcale nie zabrania.&#8221;',
                        'description' => '(S. Ignat. vitae l. 3).',
                        'description2' => 'Cnota pos&#322;usze&#324;stwa nie wymaga, aby&#347;my si&#281; ca&#322;kiem nie zastanawiali nad tem, nie rozbierali tego, co wykona&#263; mamy. Gdy przy otrzymywaniu polece&#324;, nie wskazuj&#261; nam szczeg&#243;&#322;owo sposob&#243;w do ich przeprowadzenia, rozumie&#263; nale&#380;y, &#380;e si&#281; takowe zostawiaj&#261; naszej przezorno&#347;ci; maj&#261; by&#263; zastosowane do os&#243;b, miejsca i czasu. Aby&#347; rozkazy ch&#281;tnie, aby&#347; bez zaciekania si&#281; w powody wype&#322;ni&#322;, tego &#380;&#261;da od ciebie pos&#322;usze&#324;stwo; ale &#380;eby&#347;, nie uwzgl&#281;dniaj&#261;c okoliczno&#347;ci, kt&#243;rych ono nie przewidzia&#322;o, sobie albo bli&#378;nim szkodzi&#322;, tego wcale od ciebie nie &#380;&#261;da, to mu si&#281; zupe&#322;nie sprzeciwia. Nieroztropno&#347;&#263; jest z&#322;em wielkiem, ci&#261;gle zawik&#322;ania wytwarza, wsz&#281;dzie trudno&#347;ci spotyka. Wyleczenie si&#281; z tej wady jest prawie niepodobne, bardzo rzadko i bardzo drogo, wieloma b&#322;&#281;dami si&#281; okupuje. Roztropno&#347;&#263; wsz&#281;dzie, na drodze jednak cnoty najbardziej potrzebna; im rzecz zamierzona jest dro&#380;sz&#261;, tem szkody mog&#261; nast&#261;pi&#263; ci&#281;&#380;sze. C z e m&nbsp;&nbsp;c i a &#322; o&nbsp;&nbsp;b e z&nbsp;&nbsp;o k a,&nbsp;&nbsp;t e m&nbsp;&nbsp;c z y n&nbsp;&nbsp;b e z&nbsp;&nbsp;r o z t r o p n o &#347; c i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0521',
                        'name' => 'XXI Maja',
                        'content' => 'O szcz&#281;&#347;ciu ubogiego.',
                        'author' => '&#8222;Cudem zaprawd&#281; by&#322;oby najwi&#281;kszym, je&#347;liby B&#243;g odm&#243;wi&#322; swej pomocy tym, kt&#243;rzy z mi&#322;o&#347;ci dla niego opu&#347;cili wszystko, co mieli.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Kto z wyboru, nie z konieczno&#347;ci jest ubogim, temu na koniecznych potrzebach nie zbraknie. &#379;yzn&#261; rol&#261; jest Bo&#380;a r&#281;ka, cokolwiek w ni&#261; z&#322;o&#380;ysz, owoc wyda setny. Wi&#281;cej daje dobrowolne ub&#243;stwo, ni&#380; los szcz&#281;&#347;liwy da&#263;, owszem, ni&#380; chciwo&#347;&#263; nasza zapragn&#261;&#263; mo&#380;e; daje bowiem: n i e p o &#380; &#261; d a n i e&nbsp;&nbsp;n i c z e g o, to jest, daje rzecz najwi&#281;ksz&#261;, jak&#261; mie&#263; mo&#380;na. Co innego jest by&#263; szcz&#281;&#347;liwym, a co innego bogatym: szcz&#281;&#347;liwym jest, kto nic nie po&#380;&#261;da; bogatym jest i maj&#281;tnym, kto wiela ma. Czem&#347; wi&#281;kszem jest szcz&#281;&#347;cie, ni&#380; bogactwo. B&#243;g jest szcz&#281;&#347;liwym, ale szcz&#281;&#347;liwym nie tak dlatego, &#380;e ma wszystko, jak raczej dlatego, &#380;e nic nie po&#380;&#261;da. P a t r z,&nbsp;&nbsp;j a k&nbsp;&nbsp;j e s t&nbsp;&nbsp;B o s k &#261;&nbsp;&nbsp;r z e c z &#261;&nbsp;&nbsp;u b &#243; s t w o! Cokolwiek natura powinna, albo los da&#263; mo&#380;e; to wszystko przewy&#380;sza ub&#243;stwo, jest nad to wszystko bogatszem. Uszcz&#281;&#347;liwionym przez natur&#281; i los, wi&#281;cej zwykle nie dostawa; ni&#380; zjednanym ub&#243;stwu, zami&#322;owanym w ub&#243;stwie.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0522',
                        'name' => 'XXII Maja',
                        'content' => 'O nieprzywi&#261;zywaniu si&#281; do bogactw.',
                        'author' => '&#8222;Bogacz wzgl&#281;dem bogactw tak si&#281; winien postawi&#263;, aby on bogactwa, nie jego bogactwa posiada&#322;y.&#8221;',
                        'description' => '(S. Ignat. apud Nolarci c. ult.)',
                        'description2' => 'Wielu m&#281;czy si&#281; bezpo&#380;ytecznie, panowania nad bogactwami posi&#261;&#347;&#263; nie mog&#261;, raczej ich bogactwa w swe posiadanie bior&#261;, nad nimi bogactwa panuj&#261;, tak, &#380;e rola podw&#322;adnych dostaje si&#281; tym, kt&#243;rzyby panami by&#263; winni. Kto mi&#322;uje, ten si&#281; w niewol&#281; zaprz&#281;ga; im bardziej kto bogactwa mi&#322;uje, tem si&#281; na ci&#281;&#380;sz&#261; niewol&#281; skazuje. Ci przeto, co mieli by&#263; panami, staj&#261; si&#281; niewolnikami. G&#322;&#243;wn&#261; rzecz&#261; jest wolno&#347;&#263;; je&#347;li j&#261; stracimy, nie wiele na tem zale&#380;y, jakiemi &#322;a&#324;cuchami jeste&#347;my skr&#281;powani: z &#322; o t e m i&nbsp;&nbsp;c z y&nbsp;&nbsp;&#380; e l a z n e m i. Niewola bogactw jest nad inne gorsz&#261;; gdy je gromadzimy, &#322;asce szkodzimy: uganianiem si&#281; za niemi, uk&#322;adamy sobie jakby stopnie, po kt&#243;rych co raz ni&#380;ej zst&#281;pujemy ze szkod&#261; duszy, oby przynajmniej nie ze szkod&#261; wieczn&#261;! Jedynym ratunkiem jest nieprzywi&#261;zywanie serca do tych bogactw, odrywanie si&#281; od nich, u&#380;ywanie ich na dobre cele, robienie sobie z nich przyjaci&#243;&#322;; aby gdy ustaniemy, gdy nas do porachuku zawezw&#261;, mieli&#347;my or&#281;downik&#243;w przed Bogiem <sup>1</sup>. M y &#347; l&nbsp;&nbsp;o&nbsp;&nbsp;t e m,&nbsp;&nbsp;p &#243; k i&nbsp;&nbsp;c z a s!',
                        'description3' => '1) &#346;. &#321;ukasz 16, 9.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0523',
                        'name' => 'XXIII Maja',
                        'content' => 'O modlitwie.',
                        'author' => '&#8222;Tym, co si&#281; oddaj&#261; modlitwie, zar&#243;wno s&#322;odycz jak i osch&#322;o&#347;&#263; jest niebezpiecze&#324;stwem: pierwsza popycha nieraz umys&#322; do nad&#281;to&#347;ci, druga budzi wstr&#281;t.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Niczego tak nie potrzebujemy jak modlitwy, ona jest dusz&#261; lepszego &#380;ycia; ale z drugiej strony niczemu z&#322;y duch tak nie przeszkadza, jak modlitwie. Tym sposobem rzeczy najlepsze, najwi&#281;kszym podlegaj&#261; niebezpiecze&#324;stwom. Co jest niezwyk&#322;em, co nadzwyczajnem, o to nie pro&#347;; wi&#281;cej bowiem zawiera w sobie niebezpiecze&#324;stwa, ni&#380; korzy&#347;ci. Gonitwa za wyr&#243;&#380;nieniem si&#281; tr&#261;ci pych&#261;. N a j l e p i e j&nbsp;&nbsp;z r o b i s z,&nbsp;&nbsp;g d y&nbsp;&nbsp;m i a r &#281;&nbsp;&nbsp;z a c h o w a s z. Jak&#380;e wielu nieprzyjaci&#243;&#322; ma modlitwa! roztargnienie j&#261; zmniejsza, osch&#322;o&#347;&#263; ostudza do niej zapa&#322;, troski zwlekaj&#261;, szatan przeszkadza, i co najdziwniejsza, sama s&#322;odycz zgubnie na ni&#261; oddzia&#322;ywa, i smak do niej os&#322;abia. Wtedy modlitwa Bogu mi&#322;a, a tobie u&#380;yteczna b&#281;dzie; gdy si&#281; pokor&#261; zaleci <sup>1</sup>, gdy si&#281; w spos&#243;b og&#243;lnie przyj&#281;ty wykona, gdy raczej w skutek czyjego rozkazania, ni&#380; twojego upodobania nast&#261;pi. N i e&nbsp;&nbsp;z a w s z e&nbsp;&nbsp;j e s t&nbsp;&nbsp;p o &#380; y t e c z n e m,&nbsp;&nbsp;c o&nbsp;&nbsp;s m a k u j e.',
                        'description3' => '1) Psalm 101, 18.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0524',
                        'name' => 'XXIV Maja',
                        'content' => 'O umartwieniu.',
                        'author' => '&#8222;Nie my cia&#322;a naszego panami jeste&#347;my, ale B&#243;g; dlatego nie wszystkim te same umartwienia przys&#322;ugiwa&#263; mog&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Jak nie jeste&#347;my panami cia&#322;a swego, tak nie powinni&#347;my by&#263; s&#322;ugami; nie mamy ani jego zachciankom ulega&#263;, ani co&#347; z koniecznych jego potrzeb ujmowa&#263;. B&#261;d&#378;my tej my&#347;li, &#380;e nam nad niem, jakby nad jakiem szlachetnem zwierz&#281;ciem powierzona zosta&#322;a piecza: mamy si&#281; niem zajmowa&#263;, ale nie nad miar&#281;, aby nie wier&#380;ga&#322;o; ani zanadto po macoszemu, aby nie os&#322;ab&#322;o i do pracy niezdolnem sta&#322;o; ostrogi niechaj czuje, aby nie zgnu&#347;nia&#322;o, ale i w&#281;dzid&#322;em w po&#347;piesznym biegu niech si&#281; do odpoczynku nawo&#322;uje. &#321;atwiej jest biczem smaga&#263; cia&#322;o, ni&#380; uporn&#261; nagina&#263; wol&#281;; nie tak przykr&#261; jest rzecz&#261; noszenie na sobie szorstkiego odzienia, jak przykr&#261; jest, gdy ci&#281; kto ubierze po swojemu i poprowadzi dok&#261;d ty p&#243;j&#347;&#263; nie masz najmniejszej ch&#281;ci. Nie jedno o wiele jest lepszem nad umartwienie cia&#322;a. Ka&#380;da, a szczeg&#243;lniej ta cnota, polega na umiarkowaniu, tak, aby si&#281; nie zaniedbywa&#322;o, czego zaniedba&#263; nie mo&#380;na, i nie przeci&#261;&#380;a&#322;o cia&#322;a umartwieniem, ze szkod&#261; zdrowia. P r &#281; d z e j&nbsp;&nbsp;t u&nbsp;&nbsp;p o b &#322; &#261; d z i s z&nbsp;&nbsp;s u r o w o &#347; c i &#261;,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;r o z t r o p n &#261;&nbsp;&nbsp;&#322; a g o d n o &#347; c i &#261;.&nbsp;&nbsp;P a t r z,&nbsp;&nbsp;c o&nbsp;&nbsp;i&nbsp;&nbsp;k o m u&nbsp;&nbsp;p o t r z e b n e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0525',
                        'name' => 'XXV Maja',
                        'content' => 'O cnocie.',
                        'author' => '&#8222;Zwyczajem jest z&#322;ego ducha, &#380;e bardziej na zewn&#261;trz, ni&#380; na wewn&#261;trz gospodark&#281; swoj&#261; prowadzi; B&#243;g przeciwnie bardziej wewn&#261;trz, ni&#380; zewn&#261;trz cz&#322;owieka wyrabia i doskonali.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Prawdziwa cnota pragnie si&#281; da&#263; Bogu pozna&#263;, nie ludziom; kryj&#243;wek bardziej szuka, ni&#380; miejsc wydatnych; Boga, kt&#243;ry w skryto&#347;ci widzi, nie ludzi oczy na siebie zwraca; &#347;wiadectwem dobrego sumienia si&#281; zadawalnia. Kto si&#281; chce &#322;udzi&#263;, niech si&#281; ku zewn&#281;trznej stronie zwr&#243;ci. O, ile&#380; razy &#322;udzimy innych i &#322;udzimy si&#281; sami! ob&#322;ud&#261; &#322;udzimy innych, pozorem pobo&#380;no&#347;ci &#322;udzimy siebie samych. &#321;upin&#261; si&#281; zadawalniamy, a o o&#347;rodek nie troszczymy! O przewrotne zabiegi ludzkie! wszystkie niemal si&#281; zwracaj&#261; ku wydoskonaleniu strony zewn&#281;trznej, kiedy niekiedy tylko, na bardzo kr&#243;tki czas, i to bez wyt&#281;&#380;enia zajmuj&#261; si&#281; stron&#261; wewn&#281;trzn&#261;. Bezrozumnie post&#281;puje, kto siebie zaniedbawszy, pracuje nad wyrobieniem dobrego o sobie mniemania. G&#322;&#243;wn&#261; warto&#347;&#263; cz&#322;owieka stanowi dusza, przedni&#261; ozdob&#261; duszy jest cnota; kto jej nie piel&#281;gnuje, kto nie stara si&#281; o jej podniesienie; ten jest szpetnym, chocia&#380;by postaw&#261; sw&#261;, kszta&#322;tem, urod&#261; przewy&#380;sza&#322; Adonisa. C o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;k r y j e,&nbsp;&nbsp;d r o &#380; s z e m&nbsp;&nbsp;j e s t&nbsp;&nbsp;o d&nbsp;&nbsp;t e g o,&nbsp;&nbsp;c o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;w s z &#281; d z i e&nbsp;&nbsp;s p o t y k a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0526',
                        'name' => 'XXVI Maja',
                        'content' => 'O zachowaniu si&#281; z&#322;ego ducha.',
                        'author' => '&#8222;Z&#322;y duch, zabieraj&#261;c si&#281; do pokonania cz&#322;owieka, naprz&#243;d patrzy, z kt&#243;rej on strony jest s&#322;abszy, z kt&#243;rej bardziej zaniedbany: poczem w t&#281; stron&#281; swoje pociski zwraca, n&#261; t&#281; nacisk k&#322;adzie.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Wielk&#261; bardzo pomoc&#261; do &#380;ycia dobrego jest znajomo&#347;&#263; siebie. Cz&#281;sto &#347;cigamy nieprzyjaciela, kt&#243;ry nam nie wiele szkodzi; tymczasem g&#322;&#243;wny, poniewa&#380; si&#281; kryje i jest nieznany, bezpiecznie na zgub&#281; nasz&#261; nastaje. Na podobie&#324;stwo szermierz&#243;w, walczymy z zamkni&#281;temi oczyma; i my jak oni, niewiemy kt&#243;rego nieprzyjaciela bi&#263; nam potrzeba, miotamy pociski na chybi&#322; trafi&#322;, na niepewne, z pewn&#261; nasz&#261; zgub&#261;, bez &#380;adnej korzy&#347;ci. Bezbronnym by&#322;by wzgl&#281;dem nas szatan, gdyby z naszemi wadami nie wszed&#322; w sojusz; przy ich pomocy nas zwyci&#281;&#380;a. T u&nbsp;&nbsp;w i &#281; c&nbsp;&nbsp;w y s i &#322; k i,&nbsp;&nbsp;t u&nbsp;&nbsp;b r o &#324;;&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;w a d y&nbsp;&nbsp;n a s z e&nbsp;&nbsp;u j a r z m i m y,&nbsp;&nbsp;p i e k &#322; a&nbsp;&nbsp;n i e&nbsp;&nbsp;p o t r z e b u j e m y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;o b a w i a &#263;. Gdyby&#347;my dla dobra naszej duszy tak zabiegliwymi byli, jak jest nieprzyjaciel dla jej zguby; o jak&#380;e pr&#281;dko, jak &#322;atwo zostaliby&#347;my &#347;wi&#281;tymi! Pierwsz&#261; tu rzecz&#261; jest pozna&#263; i wykorzeni&#263; t&#281; z naszych wad, z naszych nami&#281;tno&#347;ci, kt&#243;ra jest g&#322;&#243;wn&#261;, kt&#243;ra najcz&#281;&#347;ciej i najbardziej w nas si&#281; objawia. Za jej usuni&#281;ciem, usun&#261; si&#281; i inne.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0527',
                        'name' => 'XXVII Maja',
                        'content' => 'O ustawicznej nad sob&#261; pracy.',
                        'author' => '&#8222;Co by&#322;o, o tem, prosz&#281; dla mi&#322;o&#347;ci Jezusa Chrystusa, zapomnijcie, i jakgdyby&#347;cie teraz dopiero &#380;ycie rozpoczynali, drog&#261; cnoty bez przerwy ochoczo post&#281;pujcie.&#8221;',
                        'description' => '(S. Ignat. ep. ad Hisp.)',
                        'description2' => 'Jak stygnie ognisko, gdy w niem codziennie nie palimy, tak ku wyst&#281;pkom przechyla si&#281; natura; gdy codziennie nie pracujemy nad ich usuni&#281;ciem od siebie. Nie ma dnia, kt&#243;regoby s&#322;o&#324;ce swej s&#322;u&#380;by nie wykonywa&#322;o; nie powinno by&#263; dnia, kt&#243;regoby&#347;my si&#281; w cnocie nie zaprawiali, w cnocie naprz&#243;d nie posuwali. Dla czego odmawiamy duszy, co tak ch&#281;tnie dajemy cia&#322;u? &#379;eby nie os&#322;ab&#322;o, &#380;eby do pracy by&#322;o zdolne, codziennie nowym pokarmem cia&#322;o posilamy; duszy r&#243;wnie&#380;, &#380;eby sw&#243;j obowi&#261;zek pe&#322;ni&#322;a, nale&#380;y si&#281; pokarm w&#322;a&#347;ciwy. Je&#347;li oleju w lamp&#281; nie dolejesz, to &#347;wiat&#322;a mie&#263; nie b&#281;dziesz; naprz&#243;d s&#322;abo, potem ca&#322;kiem &#347;wieci&#263; przestanie &#8212; zga&#347;nie. Co d&#322;ugie staranie o skarb duchowny nagromadzi&#322;o, to &#322;atwo jeden dzie&#324; rozproszy; je&#347;li czujno&#347;ci zaniechamy, je&#347;li w dawaniu baczenia na siebie zwolniejemy. N a&nbsp;&nbsp;c o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p r z y d a,&nbsp;&nbsp;&#380; e &#347;&nbsp;&nbsp;t y l e&nbsp;&nbsp;r a z y&nbsp;&nbsp;z w y c i &#281; &#380; y &#322;,&nbsp;&nbsp;s k o r o &#347;&nbsp;&nbsp;w&nbsp;&nbsp;k o &#324; c u&nbsp;&nbsp;u p a d &#322;? Nie dobrze sko&#324;czy, kto nie codziennie zaczyna. Upa&#347;&#263; mo&#380;na dnia ka&#380;dego, wi&#281;c przypomina&#263; nale&#380;y duszy dnia ka&#380;dego jej chwalebne postanowienia, wo&#322;a&#263; na ni&#261; bez przestanku: &#380; y j&nbsp;&nbsp;d z i s i a j!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0528',
                        'name' => 'XXVIII Maja',
                        'content' => 'O nietrwo&#380;eniu si&#281; lada powodem.',
                        'author' => '&#8222;Pewn&#261; jest rzecz&#261;, &#380;e leniwi, poniewa&#380; si&#281; nie pokonuj&#261;, wi&#281;c nigdy ani do pokoju duszy, ani do doskona&#322;ego posiadania cnoty nie przychodz&#261;; pracowici przeciwnie, jedno i drugie w kr&#243;tkim czasie &#322;atwo pozyskuj&#261;.&#8221;',
                        'description' => '(S. Ignat. ep. ad Hisp.)',
                        'description2' => 'Co ze strony walk i przykro&#347;ci cierpimy, to w nas jest. Napr&#243;&#380;no przyczyn niezg&#243;d i &#378;r&#243;de&#322; zak&#322;&#243;conego pokoju szukamy gdzieindziej, napr&#243;&#380;no utyskujemy, &#380;e zk&#261;din&#261;d pochodz&#261;: w&nbsp;&nbsp;d o m u&nbsp;&nbsp;i&nbsp;&nbsp;z&nbsp;&nbsp;d o m u&nbsp;&nbsp;p o c z &#261; t e k&nbsp;&nbsp;s w &#243; j&nbsp;&nbsp;b i o r &#261; &#8212;&nbsp;&nbsp;t a m&nbsp;&nbsp;i c h&nbsp;&nbsp;s i e d l i s k o. Ka&#380;dy swego losu, bo ka&#380;dy swego pokoju sprawc&#261; jest; zewn&#281;trzne starcia wewn&#281;trznej spokojno&#347;ci nic nie zaszkodz&#261;; je&#347;li ty ich nie zechcesz przypu&#347;ci&#263;, to nigdy a&#380; do duszy nie przenikn&#261;, nigdy serca nie przygn&#281;bi&#261;. Dziwna rzecz! s&#322;owo, kt&#243;re ciebie rani bardzo dotkliwie, drugiego wcale nie obra&#380;a. R&#243;wnie&#380; przypadek, kt&#243;ry ciebie ubezw&#322;adnia, o ziemi&#281; niejako ciska, innego wcale nie porusza; zatem idzie, &#380;e g&#322;&#243;wnie zale&#380;y wszystko od tego, jak przyjmujemy krzy&#380;e, kt&#243;re nas spotykaj&#261;, &#380;e mniejsze lub wi&#281;ksze cierpienie jest niejako w naszych r&#281;kach, &#380;e zale&#380;y od nas. C z e m u &#380;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;d r &#281; c z y s z? Z twojej, nie z innych winy to si&#281; sta&#322;o, co pok&#243;j duszy twojej naruszy&#322;o; w r&#281;kach twoich losy twoje.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0529',
                        'name' => 'XXIX Maja',
                        'content' => 'O nieuchylaniu si&#281; od walki.',
                        'author' => '&#8222;Je&#347;li na wojnie dzielniej walczy &#380;o&#322;nierz dla pozyskania znikomej chwa&#322;y i &#322;up&#243;w, ni&#380; wy z samymi sob&#261; dla pozyskania wiecznej chwa&#322;y w kr&#243;lestwie niebieskiem; to ani na nazw&#281; Chrystusowych &#380;o&#322;nierzy nie zas&#322;ugujecie, ani ich ducha nie macie.&#8221;',
                        'description' => '(S. Ignat. ep. ad Hisp.)',
                        'description2' => 'Nie ma szpetniejszego dziwol&#261;ga, jak mie&#263; nazw&#281; &#380;o&#322;nierza, a usposobienie niewie&#347;ciucha. Tch&#243;rz w he&#322;mie na &#347;miech zas&#322;uguje, nie na chwa&#322;&#281;, odpowiedniejszy jest do k&#261;dzieli, ni&#380; do walki. Im dzielniejszym jest w&#243;dz, tem trudniej znosi, &#380;eby pod jego sztandarem by&#322; &#380;o&#322;nierz leniwy. Komu ty s&#322;u&#380;ysz, czyim jeste&#347; &#380;o&#322;nierzem? Ach! je&#347;li si&#281; w m&#281;ztwo nie uzbroisz, zmie&#324; nazw&#281;, przesta&#324; mianowa&#263; si&#281; &#380;o&#322;nierzem. J e &#347; l i&nbsp;&nbsp;b o j o w a n i e m&nbsp;&nbsp;j e s t&nbsp;&nbsp;&#380; y c i e&nbsp;&nbsp;c z &#322; o w i e k a <sup>1</sup>, to dlaczego&#380; w gnu&#347;no&#347;ci zasypiasz? dlaczego na my&#347;l ognia, na mo&#378;liwo&#347;&#263; rany bledniejesz? Nie jestto walczy&#263;, nie nazywa si&#281; bojowa&#263;, ale lenistwu i gnu&#347;no&#347;ci si&#281; oddawa&#263;. Szpetnie jest chcie&#263; si&#281; cieszy&#263; &#380;o&#322;dem, a niechcie&#263; odbywa&#263; nocnych stra&#380;y: szpetniej spodziewa&#263; si&#281; rzeczy wiecznych, a uchyla&#263; przed trudem ma&#322;ego czasu &#8212; kr&#243;tkiej chwili.',
                        'description3' => '1) Hiob 7, 1.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0530',
                        'name' => 'XXX Maja',
                        'content' => 'O czynieniu dobrze.',
                        'author' => '&#8222;Najkosztowniejsza korona czeka w niebie na tych, kt&#243;rzy wszystkie sprawy swoje wykonywuj&#261; z ca&#322;&#261; jak&#261; mog&#261; pilno&#347;ci&#261;: nie dosy&#263; bowiem dobre rzeczy czyni&#263;, ale potrzeba je dobrze czyni&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Nolarc.)',
                        'description2' => 'Co innego jest dobre rzeczy czyni&#263;, a co innego dobrym by&#263;; nie zaraz dobrym zostaniesz, gdy dobre rzeczy uczynisz, ale gdy je dobrze uczynisz. Rzeczy dobre nie dobrze czyni&#263;, to tyle znaczy, jakby litery, kt&#243;re piszesz, jak&#261;&#347; mazanin&#261; zamazywa&#263;. Dzie&#322;o zaleca sztukmistrza. Wi&#281;cej jest warta jedna linia Apelesa, ni&#380; tysi&#261;ce obraz&#243;w innego malarza, kt&#243;ry g&#322;&#243;wnie na kolory zwa&#380;a, nie na spos&#243;b malowania. T y&nbsp;&nbsp;m a l u j e s z&nbsp;&nbsp;d l a&nbsp;&nbsp;w i e c z n o &#347; c i. W szkole cnoty czyny si&#281; wa&#380;&#261;, nie licz&#261;. Byt tej lub owej rzeczy, nadaje kszta&#322;t, nie materya. Nie tyle jaki urz&#261;d, ile jak go sprawowa&#322;e&#347;, bierze si&#281; na uwag&#281;. Dobrze czyni&#263;, to znaczy co&#347; &#347;ci&#347;le wedle przepis&#243;w czyni&#263;, we w&#322;a&#347;ciwym czasie i wskazanym sposobem; nawet na w&#322;os nie chybia&#263;. K t o&nbsp;&nbsp;t a k&nbsp;&nbsp;c z y n i,&nbsp;&nbsp;w i e l e&nbsp;&nbsp;c z y n i,&nbsp;&nbsp;c h o c i a &#380; b y&nbsp;&nbsp;r z e c z y&nbsp;&nbsp;w i e l k i c h&nbsp;&nbsp;n i e&nbsp;&nbsp;c z y n i&#322;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0531',
                        'name' => 'XXXI Maja',
                        'content' => 'O podejmowaniu wszystkiego dla Boga.',
                        'author' => '&#8222;Nadewszystko chcia&#322;bym, aby ka&#380;dy z was ja&#347;nia&#322; czyst&#261; i szczer&#261; mi&#322;o&#347;ci&#261; Zbawiciela naszego Jezusa Chrystusa; aby co podejmuje, podejmowa&#322; to dla chwa&#322;y Boga i zbawienia bli&#378;nich.&#8221;',
                        'description' => '(S. Ignat. Epist. de perf.)',
                        'description2' => 'Mniejszem jest od ciebie to, co mi&#322;ujesz: godno&#347;&#263; swoj&#261; poni&#380;asz, ile razy co&#347; pr&#243;cz Boga mi&#322;ujesz: b o&nbsp;&nbsp;t o&nbsp;&nbsp;w s z y s t k o&nbsp;&nbsp;j e s t&nbsp;&nbsp;z i e m i a&nbsp;&nbsp;a l b o&nbsp;&nbsp;z&nbsp;&nbsp;z i e m i&nbsp;&nbsp;p o w s t a &#322; e. Nad czem ci&#281; prze&#322;o&#380;y&#322;a natura, pod to z wielk&#261; ha&#324;b&#261; twoj&#261; podda&#322;a ci&#281; &#380;&#261;dza. Chocia&#380;by&#347; wszystko z&#322;oto, kt&#243;re dot&#261;d sztuka lub natura wyda&#322;a, za mi&#322;o&#347;&#263; m&#243;g&#322; kupi&#263;, to kupowa&#263; nie powiniene&#347;; wi&#281;cej jest warta mi&#322;o&#347;&#263;, ni&#380; wszystkie skarby. Je&#347;li rzeczom stworzonym swoj&#261; mi&#322;o&#347;&#263; po&#347;wi&#281;casz, to siebie gubisz; bo co dajesz, tego nie odzyskasz; co ofiarujesz, tego ci nie zwr&#243;c&#261;. Kto si&#281; w podobn&#261; mi&#322;o&#347;&#263; uwik&#322;a&#322;, kto w niej trwa, ten jest bardzo biedny; bo jest to bieda nad biedy nie mie&#263; siebie, nie nale&#380;e&#263; do siebie. Bez serca s&#261; te rzeczy, kt&#243;re mi&#322;ujesz, wzajemno&#347;ci&#261; ci nie odp&#322;ac&#261;. Tam si&#281; z twoj&#261; mi&#322;o&#347;ci&#261; zwracaj, zk&#261;d si&#281; mo&#380;esz wzajemno&#347;ci spodziewa&#263;, wzajemno&#347;ci prawdziwej i wiecznej; p o z a&nbsp;&nbsp;B o g i e m&nbsp;&nbsp;j e j&nbsp;&nbsp;n i e&nbsp;&nbsp;z n a j d z i e s z,&nbsp;&nbsp;w i e r z&nbsp;&nbsp;m i!',
                        'description3' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_06',
                'name' => 'June',
                'colour_value' => '#e6a4b5',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_0601',
                        'name' => 'I Czerwca',
                        'content' => 'O zmierzaniu do celu.',
                        'author' => '&#8222;Ku czemu wezwani jeste&#347;cie, ku temu z ca&#322;ych si&#322; zmierzajcie, pomn&#261;c, &#380;e B&#243;g pomocy ze swej strony nie odmawia.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Gdy nas B&#243;g ku czemu wzywa, wiele nam &#322;ask u&#380;ycza. Jak w &#322;a&#324;cuchu ogniwo z ogniwem, tak w wezwaniu &#322;aska z &#322;ask&#261; si&#281; &#322;&#261;czy, &#322;aska po &#322;asce nast&#281;puje. W&nbsp;&nbsp;m i a r &#281;&nbsp;&nbsp;j e d n a k&nbsp;&nbsp;p o m n a &#380; a n i a&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;d a r &#243; w,&nbsp;&nbsp;p o m n a &#380; a j &#261;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;i&nbsp;&nbsp;o b o w i &#261; z k i. Kto wiele ponapo&#380;ycza&#322;, ten wiele winien. Strze&#380; si&#281;, aby&#347; ogromem nie by&#322; przywalony, aby ci&#281; sama Bo&#380;a szczodrobliwo&#347;&#263; nieszcz&#281;&#347;liwym nie uczyni&#322;a; im wi&#281;cej otrzyma&#322;e&#347;, tem bardziej jeste&#347; skr&#281;powany, tem wi&#281;kszy na tobie d&#322;ug ci&#261;&#380;y. P a t r z,&nbsp;&nbsp;c z e m&nbsp;&nbsp;s p &#322; a c i s z. Wznios&#322;y cel B&#243;g ci naznaczy&#322;, hojnemi do jego osi&#261;gnienia &#347;rodkami opatrzy&#322;; w stosowaniu tych &#347;rodk&#243;w, nigdy z pami&#281;ci nie wypuszczaj, &#380;e wielkich rzeczy bez wielkiego usi&#322;owania osi&#261;gn&#261;&#263; nie mo&#380;na. Niebezpiecze&#324;stwami i trudno&#347;ciami si&#281; nie zra&#380;aj, zar&#243;wno jedne jak i drugie &#322;aska wezwania zmniejszy, si&#322; tobie doda, tak si&#281; wzgl&#281;dem ciebie postawi, i&#380; gdzieby inny zgin&#261;&#322;, ty wyjdziesz bez szwanku.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0602',
                        'name' => 'II Czerwca',
                        'content' => 'O korzystaniu z krwi Chrystusowej.',
                        'author' => '&#8222;Jak ma&#322;o jest takich, kt&#243;rzy cen&#281; krwi Chrystusowej na zbawienie sobie obracaj&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Upada osio&#322;, jest kto&#347;, co go podnosi; a je&#347;li upada dusza, kt&#243;&#380; jej podaje r&#281;k&#281;? W takiej jest pogardzie cena krwi Chrystusowej, cena oznaczy&#263; si&#281; nie daj&#261;ca! Zgubionego grosza, z jak&#261;&#380; pilno&#347;ci&#261; szukamy <sup>1</sup>; a o stracon&#261; &#322;ask&#281;, jak&#380;e si&#281; ma&#322;o troszczymy, pomimo, &#380;e jej cena o wiele przewy&#380;sza ca&#322;ego &#347;wiata skarby! Krew Chrystusa na okup wszystkich jest dana, a jednak &#8212; z b&#243;lem to wyzna&#263; przychodzi &#8212; ma&#322;o jest takich, kt&#243;rym si&#281; na zbawienie obraca. W i e l e&nbsp;&nbsp;w e z w a n y c h,&nbsp;&nbsp;m a &#322; o&nbsp;&nbsp;w y b r a n y c h <sup>2</sup>. Krew Chrystusa, bardziej ni&#380; sprawiedliwego Abla, wo&#322;a z ziemi o pomst&#281; do nieba <sup>3</sup>. Tak, wylan&#261; zosta&#322;a na zbawienie, a obraca si&#281; na pot&#281;pienie; mia&#322;a s&#322;u&#380;y&#263; za okup, a staje si&#281; przyczyn&#261; zguby. J a k i &#380; - t o&nbsp;&nbsp;n i e r o z u m&nbsp;&nbsp;z&nbsp;&nbsp;n a s z e j&nbsp;&nbsp;s t r o n y,&nbsp;&nbsp;j a k i e&nbsp;&nbsp;s z a l e &#324; s t w o!',
                        'description3' => '1) &#346;. &#321;ukasz 15, 8.<br/>
    2) &#346;. Mateusz 22, 14.<br/>
    3) Genes. 4, 10.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0603',
                        'name' => 'III Czerwca',
                        'content' => 'O przymiotach mi&#322;o&#347;ci.',
                        'author' => '&#8222;Nietylko si&#281; sami nawzajem mi&#322;owa&#263; macie, ale mi&#322;o&#347;&#263; wasz&#261; na wszystkich rozci&#261;ga&#263; powinni&#347;cie.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Prawdziwa mi&#322;o&#347;&#263; jest jak s&#322;o&#324;ce na &#347;wiecie, lub jak &#347;rodek w kole. Na podobie&#324;stwo s&#322;o&#324;ca zar&#243;wno ogarnia wszystkich, zar&#243;wno wszystkim stara si&#281; by&#263; po&#380;yteczn&#261;. W kt&#243;r&#261;kolwiek stron&#281; j&#261; skierujesz, ona zawsze jednakowo p&#243;jdzie; jak linie ze &#347;rodka ko&#322;a do kt&#243;regokolwiek punktu na jego obwodzie. Ka&#380;demu jeste&#347;my co&#347; winni, z ka&#380;dym zatem winni&#347;my by&#263; jak najlepiej. I to nie na poz&#243;r tylko, ale w rzeczywisto&#347;ci, z serca; gdy&#380; inaczej byliby&#347;my pochlebcami, zwodziliby&#347;my naszych bli&#378;nich, pope&#322;nialiby&#347;my wyst&#281;pek niegodny ludzkiej spo&#322;eczno&#347;ci. Jest to prawd&#261; dowiedzion&#261;, &#380;e mi&#322;o&#347;&#263; wywo&#322;uje mi&#322;o&#347;&#263;; &#380;e kto mi&#322;uje wszystkich, ten jest nawzajem od wszystkich mi&#322;owany. Echem jest mi&#322;o&#347;&#263;, za uczucie p&#322;aci uczuciem. J e d y n a - to&nbsp;&nbsp;p r a w a&nbsp;&nbsp;d r o g a&nbsp;&nbsp;z y s k i w a n i a&nbsp;&nbsp;s o b i e&nbsp;&nbsp;l u d z k i e j&nbsp;&nbsp;&#380; y c z l i w o &#347; c i. Jeste&#347;my na&#347;ladowcami tego, kt&#243;ry dla nauczenia nas mi&#322;o&#347;ci, nie mniej za jednego, jak za wszystkich &#347;mier&#263; podj&#261;&#322;. Mi&#322;o&#347;&#263; w odniesieniu do os&#243;b kilku lub kilkunastu, mi&#322;o&#347;&#263; nieog&#243;lna, ale cz&#261;stkowa bywa powodem nienawi&#347;ci, powodem rozterek, s&#322;owem, poci&#261;ga za sob&#261; skutki niedobre.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0604',
                        'name' => 'IV Czerwca',
                        'content' => 'O powierzeniu si&#281; w zupe&#322;no&#347;ci Bogu.',
                        'author' => '&#8222;Bardzo nie wielu jest takich, kt&#243;rzyby rozumieli, coby z nimi B&#243;g uczyni&#322;, gdyby si&#281; mu ca&#322;kiem, powierzyli.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Niepewne s&#261; przewidywania nasze, s&#322;abe oczy, ma&#322;o widz&#261;, jeszcze mniej rozr&#243;&#380;niaj&#261;; zatem idzie, &#380;e inne oko za nas patrze&#263;, inne przewidywaniem o nas mie&#263; piecz&#281; powinno, to mianowicie; p r z e d&nbsp;&nbsp;k t &#243; r e m&nbsp;&nbsp;n i e&nbsp;&nbsp;m a&nbsp;&nbsp;n i c&nbsp;&nbsp;s k r y t e g o,&nbsp;&nbsp;a&nbsp;&nbsp;w s z y s t k o&nbsp;&nbsp;o t w a r t e. Jest rzecz&#261; nader niebezpieczn&#261; przedsi&#281;branie czego&#347; wbrew Bo&#380;ej woli, uchylanie si&#281; od Bo&#380;ego polecenia. Uciek&#322; Jonasz i narazi&#322; si&#281; na zgub&#281; <sup>1</sup>. Niktby nie zgin&#261;&#322;, gdyby Boskiego po&#347;rednictwa od siebie nie odpycha&#322;. Je&#347;li &#347;lepy &#347;lepego prowadzi, obaj w d&#243;&#322; wpadaj&#261;; gdzie &#347;lep&#261; wol&#261; kieruj&#261; za&#347;lepione nami&#281;tno&#347;ci, c&#243;&#380; pozostaje, je&#347;li nie zguba? Ten nad innego szcz&#281;&#347;liwszy, kto wol&#281; Boga lepiej pozna&#322;; gdy za ni&#261; idzie, gdy wedle niej czyni, kr&#243;lewsk&#261; drog&#261; do szcz&#281;&#347;cia pod&#261;&#380;a, na manowce nie zb&#322;&#261;dzi; bo pod przewodnictwem tego zostaje,&nbsp;&nbsp;k t &#243; r y&nbsp;&nbsp;j e s t&nbsp;&nbsp;d r o g &#261;,&nbsp;&nbsp;p r a w d &#261;&nbsp;&nbsp;i&nbsp;&nbsp;&#380; y c i e m <sup>2</sup>.',
                        'description3' => '1) Jonasz 1, 12.<br/>
    2) &#346;. Jan 14, 6.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0605',
                        'name' => 'V Czerwca',
                        'content' => 'O s&#322;ugach niedobrych.',
                        'author' => '&#8222;Do s&#322;ug niedobrych nale&#380;&#261; tacy, kt&#243;rzy rozkazy swych pan&#243;w wykonuj&#261; niech&#281;tnie, z szemraniem.&#8221;',
                        'description' => '(S. Ignat. apud Maff. l. 3).',
                        'description2' => 'Charakter szlachetny, prawy, ostr&#243;g nie potrzebuje; ku ka&#380;dej cnocie za najl&#380;ejszem napomknieniem ochoczo si&#281; przechyla: twardy i nieust&#281;pny ca&#322;kiem przeciwnie, nie ju&#380; s&#322;owami, chocia&#380;by&#347; ich wypowiedzia&#322; tysi&#261;ce, ale nawet karami ledwie nie ledwie ku dobremu nak&#322;oni&#263; si&#281; pozwala. Opiesza&#322;o&#347;&#263; i zw&#322;oka bardzo szkodzi &#322;asce, czy-to idzie o dobrodziejstwa, czy o pos&#322;usze&#324;stwo. Bo je&#347;li ch&#281;tnego dawc&#281; mi&#322;uje B&#243;g <sup>1</sup>, to opiesza&#322;ym, niech&#281;tnym, z pewno&#347;ci&#261; si&#281; brzydzi. C z y &#324;,&nbsp;&nbsp;co&nbsp;&nbsp;c z y n i &#263;&nbsp;&nbsp;n a l e &#380; y,&nbsp;&nbsp;al e&nbsp;&nbsp;c z y &#324;&nbsp;&nbsp;c h &#281; t n i e. Co jest wymuszonem, to ani przyjemnem, ani trwa&#322;em by&#263; nie mo&#380;e. Na surowe rozkazy nie wyczekuje, samemu skinieniu ludzkiej woli jest powolny; kto si&#281; z uczu&#263; szlachetnych nie wyzu&#322;, w kim jest charakter dobry. Ile&#380; przykro&#347;ci sprawia zwierzchnikowi, jakim jest ci&#281;&#380;arem podw&#322;adny, kt&#243;ry opieszale rozkazy wykonuje! Wola&#322;bym sam zrobi&#263;, nieraz m&#243;wi, ni&#380; tobie porucza&#263; t&#281; spraw&#281;; skoro widz&#281;, &#380;e pr&#281;dzejby si&#281; kamie&#324; poruszy&#322; na rozkaz m&#243;j, ni&#380; ty si&#281; poruszasz.',
                        'description3' => '1) 2. Kor. 9, 7.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0606',
                        'name' => 'VI Czerwca',
                        'content' => 'O zadosy&#263; uczynieniu za winy.',
                        'author' => '&#8222;Jakie&#347;my si&#322; cia&#322;a i duszy nadu&#380;yli dla przekroczenia Bo&#380;ego prawa; tak po odzyskaniu &#322;aski przez pokut&#281;, tych samych si&#322; u&#380;yjmy ku poprawie naszej, ku wydoskonaleniu si&#281;.&#8221;',
                        'description' => '(S. Ignat. apud Orland. l. 5).',
                        'description2' => 'R&#243;wnem za r&#243;wne odda&#263;, prawem jest sprawiedliwo&#347;ci; kto mniej odda&#322; ni&#380; by&#322; winien, ten prawa nie wype&#322;ni&#322;. Ach! biada nam, tyle&#347;my pozaci&#261;gali d&#322;ug&#243;w, a tak leniwi jeste&#347;my w ich sp&#322;acaniu! &#379;ycie ca&#322;e, a nawet wieczno&#347;&#263; nie wystarcza na sp&#322;acenie jednego grzechu z&#322;o&#347;ci; a c&#243;&#380; dopiero m&#243;wi&#263; o wynagrodzeniu za wyrz&#261;dzon&#261; zniewag&#281;, o wdzi&#281;czno&#347;ci za odpuszczon&#261; win&#281;, o zadosy&#263; uczynieniu za kar&#281;. N i e&nbsp;&nbsp;w c h o d &#378;&nbsp;&nbsp;w&nbsp;&nbsp;s &#261; d&nbsp;&nbsp;z e&nbsp;&nbsp;s &#322; u g &#261;&nbsp;&nbsp;t w o i m,&nbsp;&nbsp;P a n i e <sup>1</sup>. Najw&#322;a&#347;ciwsz&#261; jest rzecz&#261;, a&#380;eby to co by&#322;o &#347;rodkiem do niegodziwo&#347;ci, sta&#322;o si&#281; narz&#281;dziem do zdrowia; aby cz&#322;onki, kt&#243;re s&#322;u&#380;y&#322;y wyst&#281;pkom, odda&#322;y si&#281; na pos&#322;ug&#281; cnoty. Czy cia&#322;o bardziej zawini&#322;o, czy dusza, napr&#243;&#380;no tem sobie g&#322;ow&#281; zaprz&#261;tasz; wina tu jednakowa obojga i kara czeka jednakowa, je&#347;li si&#281; przez pokut&#281; nie oczy&#347;ci, zar&#243;wno dusza jak i cia&#322;o.',
                        'description3' => '1) Psalm 142, 2.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0607',
                        'name' => 'VII Czerwca',
                        'content' => 'O mi&#322;owaniu dobrych.',
                        'author' => '&#8222;A&#380;eby mi&#322;o&#347;nik ludzkiego zbawienia pozyska&#322; wszystkich, do wszystkich si&#281; zastosowa&#263; powinien, chocia&#380;by skutek nie odpowiada&#322; w zupe&#322;no&#347;ci usi&#322;owaniom.&#8221;',
                        'description' => '(S. Ignat. in vita l. 5. c. 11).',
                        'description2' => 'W wielkich rzeczach, nawet sama ch&#281;&#263;, samo usi&#322;owanie, zas&#322;uguje na pochwa&#322;&#281;, chocia&#380;by skutek nie odpowiada&#322; zamiarom. Nie skutek, ale usi&#322;owanie ma stanowi&#263; o naszej zas&#322;udze. T o&nbsp;&nbsp;b o w i e m&nbsp;&nbsp;j e d n o&nbsp;&nbsp;j e s t&nbsp;&nbsp;w&nbsp;&nbsp;n a s z e j&nbsp;&nbsp;m o c y,&nbsp;&nbsp;t a m t e n&nbsp;&nbsp;z a l e &#380; y&nbsp;&nbsp;o d&nbsp;&nbsp;B o g a. B&#243;g tak jest dla nas &#322;askaw, i&#380; naszego ub&#243;stwa &#347;wiadom, nic od nas nie wymaga, pr&#243;cz dobrej woli; reszt&#281; bierze na siebie. Zt&#261;d, kto uczyni&#322;, co m&#243;g&#322;, ten prawo wype&#322;ni&#322;. Nawet w rzeczach zdaniem naszem najlepszych, je&#347;li trudy nasze pozostaj&#261; bez skutku, winni&#347;my wierzy&#263;, &#380;e co&#347; jest lepszego, o czem wprawdzie my nie wiemy, ale wie ten, przed kt&#243;rym nie ma nic skrytego. Je&#347;li usi&#322;owanie twoje pe&#322;znie na niczem, zas&#322;uga twoja w tem nic a nic nie cierpi; ale tylko pr&#243;&#380;no&#347;&#263;; masz natomiast sposobno&#347;&#263; do &#263;wiczenia si&#281; w cierpliwo&#347;ci, do wielbienia Bo&#380;ych s&#261;d&#243;w. Patrz, ile dobrego w dobrem, kt&#243;re si&#281; nie spe&#322;ni&#322;o! C z y &#324;&nbsp;&nbsp;c o&nbsp;&nbsp;m o &#380; e s z,&nbsp;&nbsp;B &#243; g&nbsp;&nbsp;c i &#281;&nbsp;&nbsp;z a s t &#261; p i&nbsp;&nbsp;w&nbsp;&nbsp;t e m,&nbsp;&nbsp;c z e g o&nbsp;&nbsp;n i e&nbsp;&nbsp;m o &#380; e s z.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0608',
                        'name' => 'VIII Czerwca',
                        'content' => 'O obawie niebezpiecze&#324;stwa.',
                        'author' => '&#8222;Gdzie wszystko idzie po my&#347;li, miejmy podejrzenie, czy tam s&#322;u&#380;ba Bo&#380;a jest, jak nale&#380;y.&#8221;',
                        'description' => '(S. Ignat. in vita l. 5. c. 11).',
                        'description2' => 'Zbytnia morza spokojno&#347;&#263; dla &#380;eglarzy bywa podejrzan&#261;; d&#322;uga bowiem cisza jest zwykle przepowiedni&#261; wi&#281;kszych burz. Nie dobrze si&#281; rzecz uskutecznia, gdzie si&#281; na poz&#243;r zawsze dobrze uskutecznia. Pomy&#347;lno&#347;&#263; ci&#261;g&#322;a sprowadza zapomnienie si&#281;, znosi obaw&#281; niebezpiecze&#324;stwa, czyni nas nieostro&#380;nymi, wystawia na zasadzki nieprzyjaci&#243;&#322;, wytwarza zbytni&#261; ufno&#347;&#263; w siebie i, co jest najgorszem, jakby w zanadrzu kryje jadowit&#261; &#380;mij&#281;. &#321;od&#378; Piotrowa pasuje si&#281; z ba&#322;wanami. W&#347;r&#243;d przeciwno&#347;ci ro&#347;nie ko&#347;ci&#243;&#322;,&nbsp;&nbsp;k r e w&nbsp;&nbsp;m &#281; c z e n n i k &#243; w&nbsp;&nbsp;b y &#322; a&nbsp;&nbsp;n a s i e n i e m&nbsp;&nbsp;c h r z e &#347; c i a n <sup>1</sup>: tak i dobre powstaje przez &#347;cieranie si&#281; ze z&#322;em. Jak bez podcinania nie prosperuje wino, bez orania nie ma nadziei &#380;niwa, i ogie&#324; nie wybucha p&#322;omieniem, gdy na&#324; wiatr nie wieje lub cz&#322;owiek nie dmucha; tak bez przeciwno&#347;ci s&#322;abnie cnota, i nie ma zas&#322;ugi, gdzie nie ma walki.',
                        'description3' => '1) Tertulian.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0609',
                        'name' => 'IX Czerwca',
                        'content' => 'O niewychodzeniu poza przepis.',
                        'author' => '&#8222;Podejmowanie umartwienia dobrowolnego jawnie, ponad przepis, zabrania si&#281;: ju&#380;-to ze wzgl&#281;du, &#380;e pos&#322;usze&#324;stwo jest rzecz&#261; lepsz&#261; ni&#380; ofiara; ju&#380; &#380;e che&#322;pienie si&#281;, wynoszenie jest rzecz&#261; nagann&#261;.&#8221;',
                        'description' => '(S. Ignat. in Hist. soc.)',
                        'description2' => 'Je&#347;li si&#281; tryumf odnosi z rzeczy mniejszych, nie ma bod&#378;ca do wi&#281;kszych. Pomi&#281;dzy zwyci&#281;ztwami, kt&#243;re nas obowi&#261;zuj&#261;, pierwsze&#324;stwo trzyma wola. Gdy g&#322;&#243;wne z&#322;e pokonamy, inne &#322;atwiej dadz&#261; si&#281; pokona&#263;. Umartwienia maj&#261; poz&#243;r czego&#347; wielkiego, dla osoby umartwiaj&#261;cej si&#281; wywo&#322;uj&#261; pochwa&#322;y; ale wad same przez si&#281; nie usuwaj&#261;, owszem wywo&#322;aniem pochwa&#322;, jakby zakrywaj&#261;. T y m c z a s e m&nbsp;&nbsp;z &#322; e&nbsp;&nbsp;w&nbsp;&nbsp;z a r o d z i e&nbsp;&nbsp;n a l e &#380; y&nbsp;&nbsp;n i s z c z e &#263;. Co si&#281; nad przepis podejmuje, nad zwyczaj przyj&#281;ty, to niech b&#281;dzie w podejrzeniu; zw&#322;aszcza, gdy si&#281; lekko zbywa to, co winno by&#263; sp&#243;lnem dla wszystkich: wtedy za rzecz niew&#261;tpliw&#261; miej, &#380;e pod p&#322;aszczykiem nadzwyczajno&#347;ci kryje si&#281; albo ob&#322;uda albo jaki inny grzech. Drogi dla cnoty &#380;adnej tak bezpiecznej nie ma, jak zwyczajna. Szli ni&#261; i utarli w znacznej liczbie poprzednicy, wskazuje j&#261; regu&#322;a, podyktowa&#322; Duch &#346;wi&#281;ty; k t o&nbsp;&nbsp;o d&nbsp;&nbsp;n i e j&nbsp;&nbsp;o d s t &#281; p u j e,&nbsp;&nbsp;t e n&nbsp;&nbsp;d o&nbsp;&nbsp;b &#322; &#281; d &#243; w&nbsp;&nbsp;p r z y s t &#281; p u j e,&nbsp;&nbsp;n a&nbsp;&nbsp;b &#322; &#281; d y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;w y s t a w i a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0610',
                        'name' => 'X Czerwca',
                        'content' => 'O walce przeciw z&#322;emu duchowi.',
                        'author' => '&#8222;Tej samej broni do zbawienia przeciw z&#322;emu duchowi u&#380;ywa&#263; nale&#380;y, kt&#243;rej on u&#380;ywa ku naszej zgubie.&#8221;',
                        'description' => '(S. Ignat. in Histor. Societ. l. 3).',
                        'description2' => 'Prawem odwetu pos&#322;ugujmy si&#281; wzgl&#281;dem piek&#322;a, aby poha&#324;bione wstydzi&#322;o si&#281; wraca&#263; do walki; zdrady, kt&#243;remi nas chce podej&#347;&#263;, niech samo odczuje. J e &#347; l i&nbsp;&nbsp;p y c h &#281;&nbsp;&nbsp;p o d n i e c a;&nbsp;&nbsp;p o k o r &#261;&nbsp;&nbsp;w a l c z m y. Je&#347;li ma tysi&#261;ce sposob&#243;w do szkodzenia, my tyle&#380; mamy sza&#324;c&#243;w do stawiania oporu; niczego si&#281; nie l&#281;kajmy; temi samemi pociskami, kt&#243;re przeciw nam zwraca, mo&#380;e by&#263; zwyci&#281;&#380;one, byleby&#347;my ich tylko u&#380;y&#263; umieli. Za sprzymierze&#324;c&#243;w do swych zamiar&#243;w i naszej zguby pos&#322;uguj&#261; mu nasze z&#322;e sk&#322;onno&#347;ci; cokolwiek w nas dokonuje, to za ich po&#347;rednictwem dokonuje. Gdyby&#347;my, poddawszy je pod jarzmo rozumu, zmusili siebie do s&#322;u&#380;enia cnocie, ach! jak&#380;eby wzdycha&#322; szatan, jak&#380;eby&#347;my go rozbroili! Do tyla bowiem jest bezsilnym, &#380;e gdy my sami nie dostarczymy mu broni; nic wzgl&#281;dem nas zdzia&#322;a&#263; nie mo&#380;e. W a d y&nbsp;&nbsp;n a s z e&nbsp;&nbsp;p o s &#322; u &#380; &#261;&nbsp;&nbsp;n a m&nbsp;&nbsp;d o&nbsp;&nbsp;t r y u m f &#243; w,&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;j e&nbsp;&nbsp;w e &#378; m i e m y&nbsp;&nbsp;z a&nbsp;&nbsp;p r z e d m i o t&nbsp;&nbsp;n a s z e g o&nbsp;&nbsp;z w y c i &#281; z t w a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0611',
                        'name' => 'XI Czerwca',
                        'content' => 'O ofiarach.',
                        'author' => '&#8222;Kto na wy&#380;sze stanowisko ma by&#263; wyniesiony, ten zwykle i w szerzeniu chwa&#322;y Bo&#380;ej wi&#281;ksze ma powodzenie.&#8221;',
                        'description' => '(S. Ignat. apud Bartol. l. 1).',
                        'description2' => 'Bardzo nagannem jest post&#281;powanie rodzic&#243;w przeznaczaj&#261;cych do stanu duchownego te z swoich dzieci, kt&#243;rym natura odm&#243;wi&#322;a urody lub zdolno&#347;ci. J e s t - t o&nbsp;&nbsp;r a z e m&nbsp;&nbsp;z&nbsp;&nbsp;K a i n e m&nbsp;&nbsp;r z e c z&nbsp;&nbsp;g o r s z &#261;&nbsp;&nbsp;s k &#322; a d a &#263;&nbsp;&nbsp;B o g u&nbsp;&nbsp;n a&nbsp;&nbsp;o f i a r &#281;. Cz&#261;stka najlepsza nale&#380;y si&#281; Najlepszemu. Nie &#322;ask&#281;, ale gniew &#347;ci&#261;gnie na siebie, kto chromego lub &#347;lepego ofiaruje na s&#322;u&#380;b&#281; Bogu. Wielka si&#281; Bo&#380;emu Majestatowi wyrz&#261;dza zniewaga, gdy go si&#281; czci jak&#261;&#347; lichot&#261;. Hojnym jest B&#243;g, ale dla hojnych. Rodzina na tem nic nie straci, z jej blasku ani odrobiny nie ub&#281;dzie, gdy si&#281; Bogu najlepsze, najzdolniejsze z dzieci po&#347;wi&#281;ci. Tak straci&#263; zyskiem jest, bo ani sposob&#243;w Bogu nie zbraknie, ani dobroci, aby za datek dla siebie, nagrodzi&#322; sowicie, ze znaczn&#261; przewy&#380;k&#261;. &#346;wi&#281;tokradzkimi dochod&#243;w ko&#347;cielnych &#322;upie&#380;cami s&#261; ci, kt&#243;rzy niechc&#261; sami s&#322;u&#380;y&#263;, ale chc&#261; &#380;eby im s&#322;u&#380;ono, kt&#243;rzy nie o u&#347;wi&#281;ceniu si&#281;, ale o uteczeniu przy o&#322;tarzu my&#347;l&#261;; we&#322;ny, nie owiec; siebie, nie Boga szukaj&#261;. J a k a &#380;&nbsp;&nbsp;t a k i c h&nbsp;&nbsp;n a g r o d a,&nbsp;&nbsp;a c h!&nbsp;&nbsp;c o&nbsp;&nbsp;m &#243; w i &#281;,&nbsp;&nbsp;j a k a &#380;&nbsp;&nbsp;i c h&nbsp;&nbsp;k a r a&nbsp;&nbsp;n i e&nbsp;&nbsp;c z e k a?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0612',
                        'name' => 'XII Czerwca',
                        'content' => 'O potrzebie cierpliwo&#347;ci.',
                        'author' => '&#8222;Niezwyk&#322;e doznawanie przykro&#347;ci bez winy, jest pewn&#261; oznak&#261; wkr&#243;tce nast&#261;pi&#263; maj&#261;cej pomy&#347;lno&#347;ci.&#8221;',
                        'description' => '(S. Ignat. in Hist. soc. l. 11).',
                        'description2' => 'Gdzie si&#281; bardzo sro&#380;y burza, tam nied&#322;ugo zjawia si&#281; pogoda; gdzie ostatni wysi&#322;ek zrobi&#322;a wzgl&#281;dem nas nienawi&#347;&#263;, tam jako zm&#281;czona dalszych krok&#243;w zaniecha. W&nbsp;&nbsp;n a d z i e i&nbsp;&nbsp;n i e c h&nbsp;&nbsp;m o c&nbsp;&nbsp;t w o j a&nbsp;&nbsp;b &#281; d z i e. Ka&#380;da chwila naszego szcz&#281;&#347;cia zale&#380;y od cierpliwo&#347;ci; w niej si&#281; kryje wielka tajemnica domowego pokoju; ona jest schronieniem bezpiecznem, rzecznikiem i r&#281;kojmi&#261; powodzenia. Z n o &#347; m y&nbsp;&nbsp;c i e r p l i w i e,&nbsp;&nbsp;c z e g o&nbsp;&nbsp;z m i e n i &#263;&nbsp;&nbsp;n i e&nbsp;&nbsp;m o &#380; e m y. Jak nic nie ma cz&#281;stszego nad cierpienia, tak nic potrzebniejszego nad cierpliwo&#347;&#263;. &#346;wi&#281;ty Pawe&#322; m&#243;wi: c i e r p l i w o &#347; &#263;&nbsp;&nbsp;w a m&nbsp;&nbsp;j e s t&nbsp;&nbsp;p o t r z e b n a <sup>1</sup>. Ona jest wsp&#243;lnem na wszelkie z&#322;e lekarstwem, ni&#261;, jak dyptanem jelenie, za&#380;egnujemy ka&#380;de nieszcz&#281;&#347;cie, &#322;agodzimy ka&#380;d&#261; bole&#347;&#263;, ka&#380;dy cios. I nie s&#261;d&#378;, &#380;eby czem&#347; ma&#322;em by&#322;a cierpliwo&#347;&#263;. &#321;atwo od b&#243;lu i m&#261;k tak &#380;ycia, jak nieprzyjaci&#243;&#322; si&#281; uwalnia, kto cierpie&#263; umie. Niedost&#281;pnym dla rany staje si&#281; umys&#322; przez sam&#261; cierpliwo&#347;&#263;. S p o d z i e w a j&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;l e p s z y c h&nbsp;&nbsp;c z a s &#243; w.',
                        'description3' => '1) &#379;yd&#243;w 10, 36.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0613',
                        'name' => 'XIII Czerwca',
                        'content' => 'O po&#380;ytkach prze&#347;ladowania.',
                        'author' => '&#8222;Prze&#347;ladowanie jest jakby narz&#281;dziem, kt&#243;rem si&#281; nasza cnota pobudza; gdyby go nie by&#322;o, toby zmarnia&#322;a, i obowi&#261;zkuby swego nale&#380;ycie nie pe&#322;ni&#322;a.&#8221;',
                        'description' => '(S. Ignat. apud Corn. a Lap. in Prophet. maj. c. 13).',
                        'description2' => 'Prze&#347;ladowanie, im jest silniejsze, tem bardziej w cnocie utwierdza, tak samo, jak silniejsze wiatry zmuszaj&#261; niejako drzewo, aby g&#322;&#281;biej w ziemi&#281; korzenie zapuszcza&#322;o. Ono nas bacznymi czyni, uwag&#281; nasz&#261; zwraca, aby si&#281; w nas co&#347; nie znajdowa&#322;o, coby s&#322;usznie na prze&#347;ladowanie zas&#322;ugiwa&#322;o. Ci&#261;g&#322;e wzgl&#281;dy ludzkie i og&#243;lny poklask &#322;atwo umys&#322; nadymaj&#261; i na obowi&#261;zek niepami&#281;tnym czyni&#261;. D o b r z e,&nbsp;&nbsp;P a n i e,&nbsp;&nbsp;&#380; e &#347;&nbsp;&nbsp;p o n i &#380; y &#322;&nbsp;&nbsp;m n i e <sup>1</sup>. Gdy nas &#347;wiat nienawidzi, wielkie nam dobrodziejstwo wy&#347;wiadcza: bo nam sposobno&#347;&#263; daje do zas&#322;ugi, hartuje nasz&#261; cnot&#281;, przedstawia pow&#243;d do niemi&#322;owania siebie, owszem do gardzenia sob&#261;. Je&#347;li &#380;adnej nie mamy nadziei w ludziach, jeste&#347;my zmuszeni ca&#322;&#261; nadziej&#281; po&#322;o&#380;y&#263; w Bogu: gdy spostrzegamy, &#380;e ludzie na nas z niech&#281;ci&#261; patrz&#261;, tem samem otrzymujemy napomnienie, aby&#347;my si&#281; starali zas&#322;ugiwa&#263; na wzgl&#281;dy Boga.',
                        'description3' => '1) Psalm 118, 71.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0614',
                        'name' => 'XIV Czerwca',
                        'content' => 'O pragnieniu Boga.',
                        'author' => '&#8222;Panie, czeg&#243;&#380; ja chc&#281;; albo czego chcie&#263; mog&#281;, pr&#243;cz Ciebie?&#8221;',
                        'description' => '(S. Ignat, apud Ribaden. l. 5).',
                        'description2' => 'Maluczkiem jest serce cz&#322;owieka, ale wiele pragn&#261;&#263; mo&#380;e. Pragnie&#324; jego &#347;wiat ca&#322;y nie zasyci; dusz&#281; stworzon&#261; dla Boga nie zaspokoi to, co mniejszem jest od Boga. Zmiennem jest wszystko i niesta&#322;em <sup>1</sup>; je&#347;li serca ku czemu&#347; sta&#322;emu nie zwr&#243;cisz, wci&#261;&#380; si&#281; chwia&#263; b&#281;dziesz. Kotwic&#281; zatknij w Bogu. Zatknij przez wiar&#281;, zatknij przez nadziej&#281;, zatknij przez mi&#322;o&#347;&#263;. Sznureczek ten potr&#243;jny nigdy si&#281; nie zerwie. Szcz&#281;&#347;liw&#261; jest ta tylko wola, kt&#243;ra ma co chce; co jest w r&#281;ce naszego serca, tego nikt nam wyrwa&#263; nie mo&#380;e &#8212; wszystko inne od losu zale&#380;y. Je&#347;li Boga mi&#322;ujesz, nikt tobie tego skarbu wydrze&#263; nie jest w stanie. J e &#347; l i&nbsp;&nbsp;s z u k a j &#261; c e m u&nbsp;&nbsp;k r &#243; l e s t w a&nbsp;&nbsp;B o &#380; e g o,&nbsp;&nbsp;w s z y s t k o&nbsp;&nbsp;i n n e&nbsp;&nbsp;z o s t a n i e&nbsp;&nbsp;p r z y d a n e <sup>2</sup>;&nbsp;&nbsp;t o&nbsp;&nbsp;c z e g o &#380;&nbsp;&nbsp;m o &#380; e&nbsp;&nbsp;b r a k o w a &#263;&nbsp;&nbsp;s z u k a j &#261; c e m u&nbsp;&nbsp;B o g a? Tym, nic nie maj&#261;c, zasyci&#263; si&#281; mo&#380;esz; bez tego, wszystko maj&#261;c, biednym pozostaniesz, niedostatek wci&#261;&#380; cierpie&#263; b&#281;dziesz.',
                        'description3' => '1) I. &#346;. Jan 2, 17.<br/>
    2) &#346;. Mateusz 6, 33.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0615',
                        'name' => 'XV Czerwca',
                        'content' => 'O zgodzie rozumu z wol&#261;.',
                        'author' => '&#8222;By&#263; pos&#322;usznym tylko wol&#261;, bez udzia&#322;u rozumu, owszem przy jego uporze; znaczy tyle, jakgdyby jedn&#261; tylko nog&#261; przebywa&#263; w zakonie.&#8221;',
                        'description' => '(S. Ignat. apud Maff.)',
                        'description2' => 'Niebezpiecznem jest po&#322;o&#380;enie na jednej nodze sta&#263;, zw&#322;aszcza tam, gdzie si&#281; bardzo &#322;atwo w przepa&#347;&#263; mo&#380;na pogr&#261;&#380;y&#263;. Gdy stoisz na wynios&#322;o&#347;ci znacznej, jakby nad ca&#322;y &#347;wiat wy&#380;szy; pami&#281;taj, &#380;e lada podmuch wystarcza, aby&#347; z tego miejsca spad&#322;. Gdzie domowe trwaj&#261; niezgody, tam d&#322;ugo nie potrwa rzeczpospolita: r&#243;wnie&#380; gdy wola jest w niezgodzie z rozumem, wtedy nie mo&#380;na liczy&#263; ani na sta&#322;o&#347;&#263; w czynie, ani na powodzenie. Rozum i wola, to jakby brat i siostra, tak od siebie zale&#380;ni, tak dla siebie potrzebni, &#380;e bez wzajemnej pomocy cnotliwymi nie b&#281;d&#261;. Gdy rozum i wola prowadz&#261; ze sob&#261; wojn&#281;, post&#281;pu tam nie ujrzysz; z jednej strony usi&#322;owanie, z drugiej odwodzenie, wci&#261;&#380; stoj&#261; na przeszkodzie post&#281;powi; tym sposobem i o nagrodzie za pos&#322;usze&#324;stwo mowy by&#263; nie mo&#380;e. G&#322;&#243;wna rzecz, kt&#243;ra si&#281; Bogu w nas podoba, jest ducha gotowo&#347;&#263;; bez niej martwem jest pos&#322;usze&#324;stwo i chocia&#380; do spe&#322;nienia rozkaz&#243;w niby si&#281; zabieramy, jeste&#347;my jednak trupem, brakuje nam duszy, w kt&#243;rej &#380;ycie i si&#322;&#281; czerpa&#263; winni&#347;my.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0616',
                        'name' => 'XVI Czerwca',
                        'content' => 'O poznaniu Boga.',
                        'author' => '&#8222;Serdecznym i wielkim b&#243;lem przejmujcie si&#281;, patrz&#261;c, jak prawie wsz&#281;dzie B&#243;g jest nieznany.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Ach! jaka&#380; ciemnota, gdy idzie o poznanie Boga; &#380;yjemy jak sowy, wiecznego &#347;wiat&#322;a pozbawieni! Ciemno&#347;ci tych, nie tak tajemnicy wznios&#322;o&#347;&#263;, jak raczej gnu&#347;no&#347;ci naszej niewzruszono&#347;&#263;, jest przyczyn&#261;. Ile&#380; lat si&#281; nie obraca na poznanie rzeczy stworzonych, ile si&#322; nie zu&#380;ywa; co m&#243;wi&#281;, &#380;ycie ca&#322;e po&#347;wi&#281;camy, aby&#347;my poznali rzeczy szkodliwe: a na nabycie umiej&#281;tno&#347;ci &#347;wi&#281;tych, na poznawanie Boga, ani czasu nie mamy, ani trudu &#322;o&#380;y&#263; nie chcemy. O czcze ludzkie zabiegi! aby bogactwa, aby godno&#347;&#263; jak&#261; otrzyma&#263;, aby stosunki z lud&#378;mi zachowa&#263;; ile&#380; trosk, jakie usi&#322;owania podejmuj&#261;! Tymczasem, jak&#380;e jest nie wielu, jak ma&#322;a garstka takich, kt&#243;rzy sercem rozwa&#380;aj&#261;, co winni Bogu? Siedz&#261; w ciemno&#347;ci i cieniach &#347;mierci tyle tysi&#281;cy ludzi! <sup>1</sup> w otch&#322;a&#324; wieczn&#261; si&#281; pogr&#261;&#380;&#261;, na zgub&#281; p&#243;jd&#261;, je&#347;li ty przed nimi pochodni nie zapalisz, przy kt&#243;rej pomocy przyszliby do poznania Boga, do &#347;wiat&#322;a prawdziwej wiary. C z e m u&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;o c i &#261; g a s z,&nbsp;&nbsp;c z e m u&nbsp;&nbsp;z w l e k a s z?',
                        'description3' => '1) &#346;. &#321;ukasz 1, 79.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0617',
                        'name' => 'XVII Czerwca',
                        'content' => 'O d&#261;&#380;eniu do doskona&#322;o&#347;ci.',
                        'author' => '&#8222;Wszystkich si&#322; nale&#380;y do&#322;o&#380;y&#263;, aby&#347;my to osi&#261;gn&#281;li, ku czemu zmierzamy, i wszed&#322;szy na drog&#281; doskona&#322;o&#347;ci, aby&#347;my do tego przyszli, co jest najdoskonalszem.&#8221;',
                        'description' => '(S. Ignat. apud Lancic.)',
                        'description2' => 'Wielu, chocia&#380; dobrze zacz&#281;li, &#378;le sko&#324;czyli, raczej przygany, ni&#380; pochwa&#322;y godni: poniewa&#380; albo si&#281; nieopatrznie rzucili na co&#347; wi&#281;kszego, ni&#380; si&#322;y podo&#322;a&#263; mog&#322;y; albo po dobrych pocz&#261;tkach, z czasem zaniedbali si&#281;, i od postanowie&#324; swych chwalebnych z wielk&#261; swej duszy szkod&#261; odbiegli. Na brzegu &#347;piewa si&#281; pie&#347;&#324; tryumfu! Na co si&#281; przyda silnem ramieniem pr&#243;&#263; morze, przedziera&#263; si&#281; przez ba&#322;wany, unika&#263; zr&#281;cznie miejsc niebezpiecznych, ska&#322; podwodnych, je&#347;li nigdy nie docieramy do zamierzonego brzegu? Niesta&#322;ego umys&#322;u jest cech&#261; wiele rozpoczyna&#263;. Lepiej jest po&#347;wi&#281;ci&#263; si&#281; jednemu; dop&#243;ki nie osi&#261;gniesz, co&#347; zamierzy&#322;. Nie otrzymuje nic, kto chce wiele. Jedno jest ci potrzebnem <sup>1</sup>. N a&nbsp;&nbsp;c o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p r z y d a&nbsp;&nbsp;i &#347; &#263;&nbsp;&nbsp;z a&nbsp;&nbsp;C h r y s t u s e m,&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;g o&nbsp;&nbsp;n i e&nbsp;&nbsp;o s i &#261; g n i e s z?',
                        'description3' => '1) &#346;. &#321;ukasz 10, 41.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0618',
                        'name' => 'XVIII Czerwca',
                        'content' => 'O zawzi&#281;to&#347;ci z&#322;ego ducha.',
                        'author' => '&#8222;Nie ma na ziemi, &#380;adnej innej bestyi, tak dzikiej, tak okrutnej, tak zawzi&#281;tej na cz&#322;owieka, jak szatan. Co sobie wzgl&#281;dem nas uplanuje, to z ca&#322;&#261; sw&#261; przebieg&#322;o&#347;ci&#261; uskutecznia.&#8221;',
                        'description' => '(S. Ignat. de spir. dignit.)',
                        'description2' => 'Skoro z nieba wypad&#322; Anio&#322;, z grona Aposto&#322;&#243;w Judasz; to kt&#243;&#380; pomn&#261;c na siebie nie zadr&#380;y, kto si&#281; boja&#378;ni&#261; nie przejmie? Ani&#347; nad Salomona m&#281;drszy, ani nad Dawida &#347;wi&#281;tszy, ani nad Piotra m&#281;&#380;niejszy; i&nbsp;&nbsp;n i e&nbsp;&nbsp;l &#281; k a s z&nbsp;&nbsp;s i &#281;? Nie ma tak &#347;wi&#281;tego i w cnocie wyprobowanego, kt&#243;ryby bez boja&#378;ni &#380;y&#263; m&#243;g&#322;. Patrz na kolumne niebieskie, one dr&#380;&#261;; patrz na gwiazdy, o t o&nbsp;&nbsp;z&nbsp;&nbsp;n i e b a&nbsp;&nbsp;p o s p a d a &#322; y. Patrz na u&#322;omno&#347;&#263; twej natury w grzechu pocz&#281;tej, we&#378; na uwag&#281; przebieg&#322;o&#347;&#263; nieprzyjaciela twego, ze wszystkich stron na ci&#281; czyhaj&#261;cego. Policz, je&#347;li zdo&#322;asz, smutne upadk&#243;w okoliczno&#347;ci, nieukrywaj przed sob&#261;, &#380;e&#347; nielepszy: t a k&nbsp;&nbsp;z&nbsp;&nbsp;b o j a &#378; n i &#261;&nbsp;&nbsp;i&nbsp;&nbsp;d r &#380; e n i e m&nbsp;&nbsp;s p r a w u j&nbsp;&nbsp;z b a w i e n i e&nbsp;&nbsp;t w o j e <sup>1</sup>. Pocz&#261;tkiem m&#261;dro&#347;ci boja&#378;&#324; Pa&#324;ska, bez niej wszystkie kroki na drodze cnoty niebezpiecznie stawiamy: b o&nbsp;&nbsp;a l b o&nbsp;&nbsp;w&nbsp;&nbsp;p y c h &#281;&nbsp;&nbsp;w p a d a m y,&nbsp;&nbsp;a l b o&nbsp;&nbsp;w&nbsp;&nbsp;g n u &#347; n o &#347; &#263;.',
                        'description3' => '1) Filipen. 2, 12.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0619',
                        'name' => 'XIX Czerwca',
                        'content' => 'O skutkach rozmowy dobrej.',
                        'author' => '&#8222;Rozmowa o rzeczach Bo&#380;ych, chocia&#380;by by&#322;a prowadzona z cz&#322;owiekiem jak najgorszym, nie pozostaje bez korzy&#347;ci.&#8221;',
                        'description' => '(S. Ignat. apud Nad. 31 Julii).',
                        'description2' => 'Wielk&#261; jest si&#322;a &#322;aski! w jednej chwili z Saula czyni Aposto&#322;a, najgorszego przemienia w najlepszego <sup>1</sup>. Podobnie jak &#347;wiat&#322;o za zjawieniem si&#281; swojem w jednej chwili wszelkie ciemno&#347;ci rozprasza. Jedno s&#322;owo nad obosieczny miecz dzielniejsze, dusz&#281; tak przenika, &#380;e j&#261; ca&#322;kiem zmienia. Kr&#243;tka mowa staje si&#281; od d&#322;ugiej o wiele skuteczniejsz&#261;, gdy j&#261; o&#347;wieci promie&#324; tego, w kt&#243;rego r&#281;ku s&#261; serca wszystkich. Gdyby si&#281; owoc zaraz nie ukazywa&#322;, nie rozpaczaj, przyjdzie czas i na owoc; dosy&#263; je&#347;li&#347; teraz rzuci&#322; nasionko, &#380;niwo b&#281;dzie, i obfite &#380;niwo, lubo teraz wszystko zdaje si&#281; jakby pod &#347;niegiem zlodowacia&#322;e. N i e&nbsp;&nbsp;w s z y s t k o&nbsp;&nbsp;r a z e m&nbsp;&nbsp;d o j r z e w a. Bodajby wielu do nas przychodzi&#322;o, &#380;eby si&#281; &#347;wi&#281;tszymi stawali, nie a&#380;eby bogatszymi w swych nadziejach wracali. Do nas nale&#380;y z&#322;e ich zamiary tak poprawia&#263;, aby co&#347; lepszego znale&#378;li, ni&#380; szukali.',
                        'description3' => '1) Dzieje Apost. 9, 6.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0620',
                        'name' => 'XX Czerwca',
                        'content' => 'O obietnicach.',
                        'author' => '&#8222;Nigdy takiemi obietnicami nie nale&#380;y uszu wzbogaca&#263;, kt&#243;rym czyny nie zdo&#322;aj&#261; wyr&#243;wna&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Bartol. l. 4).',
                        'description2' => 'Nie powiniene&#347; obiecywa&#263;, czego nie chcesz, a tem mniej, czego nie mo&#380;esz spe&#322;ni&#263;. Gdy zaufanie stracisz, to nie masz ju&#380; nic do stracenia. Upada powaga, owszem towarzystwo si&#281; ludzkie rozwi&#261;zuje. Jeden tylko j&#281;zyk da&#322;a natura, a r&#261;k dwie; aby nas nauczy&#322;a, &#380;e winni&#347;my by&#263; hojniejsi czynem, ni&#380; j&#281;zykiem. S&#322;owo nasze, gdy je wymawiamy, niech ma znaczenie; niech pow&#261;tpiewa&#324; w drugich nie budzi. &#321;atwiej obietnic&#281; uczyni&#263;, ni&#380; jej dotrzyma&#263;; lepiej przeto nie robi&#263; nadziei, gdy jej wype&#322;ni&#263; nie mo&#380;esz lub nie chcesz. Gdy czego odmawiasz, czy&#324; to uprzejmie, aby&#347; serca dwa razy nie rani&#322;: o d m o w &#261;&nbsp;&nbsp;i&nbsp;&nbsp;s p o s o b e m,&nbsp;&nbsp;w&nbsp;&nbsp;j a k i&nbsp;&nbsp;j &#261;&nbsp;&nbsp;u s k u t e c z n i a s z. Cz&#281;sto odmowa za dobrodziejstwo si&#281; poczytuje, je&#347;li odmawiaj&#261;cy przekona, &#380;e mu na ch&#281;ci uczynienia zado&#347;&#263; pro&#347;bie nie zbywa; ale &#380;e rzecz, o kt&#243;r&#261; si&#281; pro&#347;ba zanosi, b&#281;dzie szkodliw&#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0621',
                        'name' => 'XXI Czerwca',
                        'content' => 'O miarkowaniu kary.',
                        'author' => '&#8222;Zbytnie cudzych wad &#347;ciganie, raczej zra&#380;a ni&#380; poprawia; przyczynia si&#281; bardziej do stronienia od nas, ni&#380; do zapobie&#380;enia z&#322;emu.&#8221;',
                        'description' => '(S. Ignat. in Comp. vitae).',
                        'description2' => 'Cz&#281;sto wad&#281;, gorsz&#261; wad&#261; poprawiamy, gdy zbyt naszej w&#322;asnej nami&#281;tno&#347;ci pob&#322;a&#380;amy; zatem idzie, &#380;e nie tyle pragniemy innych poprawi&#263;, ile gniewowi naszemu zado&#347;&#263;uczyni&#263;. Kt&#243;&#380;by poto wzywa&#322; lekarza, aby si&#281; na chorego gniewa&#322; i raczej chorego ni&#380; chorob&#281; &#347;ciga&#322;? Im ci&#281;&#380;sza choroba, tem wi&#281;kszego godna politowania &#8212; serdecznego zaj&#281;cia si&#281; potrzebuje, nie gniewu. Nierozwa&#380;na gorliwo&#347;&#263; cz&#281;sto sprawia, &#380;e gdy zwracamy uwag&#281; na karno&#347;&#263;, zapominamy o mi&#322;o&#347;ci; to jest, zachowujemy &#322;upin&#281;, a marnujemy ziarnko. Na brata, chocia&#380; winnego, ten si&#281; chyba gniewa; kto w sobie jak kret w&#322;asnych b&#322;&#281;d&#243;w nie widzi. Pod wieloma wzgl&#281;dami b&#322;&#261;dzimy wszyscy; pomy&#347;l, jakby&#347; chcia&#322;, aby za twoje b&#322;&#281;dy z tob&#261; si&#281; obchodzono? L e p i e j&nbsp;&nbsp;j e s t&nbsp;&nbsp;d o b r o c i &#261;&nbsp;&nbsp;g r z e s z y &#263;,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;s u r o w o &#347; c i &#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0622',
                        'name' => 'XXII Czerwca',
                        'content' => 'O miarkowaniu si&#281; w umartwieniach.',
                        'author' => '&#8222;Z pomi&#281;dzy umartwie&#324; te przenosi&#263; nale&#380;y, kt&#243;re silniej si&#281; daj&#261; uczu&#263;, ale mniejsz&#261; sprawiaj&#261; szkod&#281;.&#8221;',
                        'description' => '(S. Ignat. in vita apud Maff.)',
                        'description2' => 'Umartwieniem niech kieruje roztropno&#347;&#263;, tak, aby nie by&#322;o przesady i nie zmniejsza&#322;o si&#281; zanadto. Potrzeba tu hamulca i na mi&#322;o&#347;&#263; w&#322;asn&#261; i na gorliwo&#347;&#263; zbytni&#261;. Pierwsza uszczupla, druga miar&#281; przebiera. Celem umartwie&#324; zadawanych cia&#322;u, jest trzymanie w karbach cia&#322;a, nie sprawianie mu szkody. Wi&#281;cej robi, kto d&#322;u&#380;ej robi: przesada ze sta&#322;o&#347;ci&#261; nie chodz&#261; w parze; umiarkowanie niech si&#281; umartwia, kto si&#281; chce d&#322;ugo umartwia&#263;. O d&nbsp;&nbsp;t e g o&nbsp;&nbsp;z a l e &#380; y&nbsp;&nbsp;w y t r w a &#322; o &#347; &#263;. Lepiej jest cz&#281;&#347;ciej i w pewnych przerwach, ni&#380; silniej i bez ustanku cia&#322;o trapi&#263;: gdy trapienie jest ci&#261;g&#322;e, wtedy nawykamy do niego i nie odczuwamy go; gdy jest za silne, wtedy pod ci&#281;&#380;arem upada osio&#322;. I dokuczanie komar&#243;w mo&#380;e nam zgotowa&#263; palm&#281; m&#281;cze&#324;stwa; nie zawsze potrzeba a&#380; krwi rozlewu, albo cz&#322;onk&#243;w poszarpania.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0623',
                        'name' => 'XXIII Czerwca',
                        'content' => 'O baczno&#347;ci w pisaniu.',
                        'author' => '&#8222;Nic nie nale&#380;y pisa&#263;, ani czyni&#263; takiego, coby zawzi&#281;to&#347;&#263; lub gorycz jak&#261; wywo&#322;a&#263; mog&#322;o.&#8221;',
                        'description' => '(S. Ignat. in vita apud Maff.)',
                        'description2' => 'Nikomu s&#322;usznej przyczyny do obrazy dawa&#263; nie powinni&#347;my. Nikt tak ma&#322;ym, tak nic nieznacz&#261;cym nie jest, aby szkodzi&#263; nie m&#243;g&#322;. I muchy swoj&#261; &#380;&#243;&#322;&#263; maj&#261;, i komary &#380;&#261;d&#322;o, kt&#243;re b&#243;l sprawia i opuchni&#281;cie. Co si&#281; pisze, to pod surow&#261; nale&#380;y bra&#263; krytyk&#281;, przez r&#281;ce bowiem i oczy przechodzi, poza wiek si&#281;ga, wielu ci&#281;&#380;ko rani. G&#322;oska napisana pozostaje niezmienn&#261;. Niech bez &#380;&#243;&#322;ci b&#281;dzie, bez &#380;&#261;d&#322;a, cokolwiek piszesz. Nawet gdy o popraw&#281; idzie, ta bez goryczy by&#263; winna; ale jak lekarstwo miodem lub cukrem zaprawia lekarz, tak i tu post&#261;pi&#263; nale&#380;y, aby poprawy potrzebuj&#261;cy, post&#261;pienie z nim nasze, nie za kar&#281;, ale za dobrodziejstwo uwa&#380;a&#322;. Nikogo do poprawy nie sk&#322;onimy, chyba &#380;e pierwiej jego serce ni&#380; wyst&#281;pki podbijemy: a l e&nbsp;&nbsp;n i k t&nbsp;&nbsp;n a m&nbsp;&nbsp;s e r c a&nbsp;&nbsp;n i e&nbsp;&nbsp;o d d a,&nbsp;&nbsp;d o p &#243; k i&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n i e&nbsp;&nbsp;p r z e k o n a,&nbsp;&nbsp;&#380; e&nbsp;&nbsp;g o&nbsp;&nbsp;m i &#322; u j e m y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0624',
                        'name' => 'XXIV Czerwca',
                        'content' => 'O zasi&#281;ganiu rady.',
                        'author' => 'Wielk&#261; pociech&#261; dla szatana jest dusza lekkomy&#347;lnie post&#281;puj&#261;ca, bez w&#281;dzid&#322;a, kt&#243;rem hamowana by&#263; winna; im si&#281; bowiem wy&#380;ej taka wynosi, tem ni&#380;ej spadnie.&#8221;',
                        'description' => '(S. Ignat. apud Nolar.)',
                        'description2' => 'Nikt tak nie upada, jak ten, kt&#243;ry si&#281; uwa&#380;a za najbezpieczniejszego: nie&#347;wiadomo&#347;&#263; niebezpiecze&#324;stwa najwi&#281;kszem jest niebezpiecze&#324;stwem: nieostro&#380;na pewno&#347;&#263; jest drog&#261; do przepa&#347;ci &#8212; &#322;atwo si&#281; do niej dosta&#263;, ale trudno wydosta&#263;. Kto pod przewodnictwem innego post&#281;puje, ten bezpieczniej post&#281;puje. Gdy jest wi&#281;cej ocz&#243;w, wi&#281;cej widz&#261; i wi&#281;cej przewiduj&#261;. Biada samemu! bo gdy upadnie, nie ma ktoby go podni&#243;s&#322;. Nikt na swojem zdaniu niechaj nie polega, nawet w rzeczach najlepszych; gdy&#380; cz&#281;sto z rzeczy najlepszych, je&#347;li si&#281; popsuj&#261;, staj&#261; si&#281; najgorsze. K t o&nbsp;&nbsp;s w e j&nbsp;&nbsp;c n o c i e&nbsp;&nbsp;u f a,&nbsp;&nbsp;&#380; a d n e j&nbsp;&nbsp;n i e&nbsp;&nbsp;m a. Wynios&#322;e miejsce zawsze niebezpiecze&#324;stwom podlega. Zawrotu g&#322;owy si&#281; l&#281;kaj. Kto o sobie pokornie trzyma, ten si&#281; go &#322;atwo ustrze&#380;e. Zbytnia ufno&#347;&#263; jest p&#322;ocho&#347;ci matk&#261;, upadek za sob&#261; poci&#261;ga niezawodny.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0625',
                        'name' => 'XXV Czerwca',
                        'content' => 'O miarkowaniu si&#281; w mowie.',
                        'author' => '&#8222;Potrzeba ma&#322;o m&#243;wi&#263;, a wiele s&#322;ucha&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Po s&#322;owach poznajemy ducha, g&#322;os zdradza usposobienie; za jego po&#347;rednictwem otwieraj&#261; si&#281; przed nami tajniki serca, kt&#243;re natura tak zakry&#263; usi&#322;uje, i&#380;by i najlepszy przyjaciel o nich nie wiedzia&#322;. Przez wielom&#243;stwo traci si&#281; powaga, kto milcz&#261;c uchodzi&#322;by za m&#261;drego, ten m&#243;wi&#261;c os&#322;abia takie o sobie mniemanie. Za co&#347; wi&#281;kszego nier&#243;wnie uwa&#380;a&#322;oby si&#281; to, o czemby&#347;my roztropnie przymilczeli, ni&#380; to, co&#347;my nierozwa&#380;nie wypowiedzieli. Gdzie s&#322;&#243;w jest potok, tam my&#347;li zaledwie kropla. Roztropny wiele m&#243;wi&#263; nie mo&#380;e; bo przewiduje, jak wielkie burze mog&#322;oby wywo&#322;a&#263; ma&#322;e nieraz s&#322;owo. I nie ma nic zaszczytniejszego, nad miarkowanie si&#281; w s&#322;owach. Nawet g&#322;upi, dop&#243;ki milczy, za m&#261;drego uchodzi. N a t u r &#281;&nbsp;&nbsp;n a &#347; l a d u j m y,&nbsp;&nbsp;k t &#243; r a&nbsp;&nbsp;n a m&nbsp;&nbsp;d a &#322; a&nbsp;&nbsp;d w a&nbsp;&nbsp;u s z y,&nbsp;&nbsp;z a w s z e&nbsp;&nbsp;o t w a r t e;&nbsp;&nbsp;a&nbsp;&nbsp;j e d e n&nbsp;&nbsp;t y l k o&nbsp;&nbsp;j &#281; z y k&nbsp;&nbsp;i&nbsp;&nbsp;t o&nbsp;&nbsp;z a&nbsp;&nbsp;t y l o m a&nbsp;&nbsp;r y g l a m i&nbsp;&nbsp;u m i e s z c z o n y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0626',
                        'name' => 'XXVI Czerwca',
                        'content' => 'O &#378;r&#243;dle szczerej rado&#347;ci.',
                        'author' => '&#8222;Kto w sercu Boga nosi, ten raj ze sob&#261; nosi.&#8221;',
                        'description' => '(S. Ignat. in compend. vitae).',
                        'description2' => 'Jedynie mi&#322;o&#347;&#263; Boga jest &#378;r&#243;d&#322;em szczerej rado&#347;ci, &#378;r&#243;d&#322;em najczystszem, bez domieszki ob&#322;udy, &#378;r&#243;d&#322;em ci&#261;gle bij&#261;cem, bez obawy wyczerpania si&#281; kiedykolwiek. P o&nbsp;&nbsp;c o&nbsp;&nbsp;s o b i e&nbsp;&nbsp;k o p i e m y&nbsp;&nbsp;c y s t e r n y&nbsp;&nbsp;r o z w a l o n e? <sup>1</sup> Je&#347;li z Bogiem zawar&#322;e&#347; przymierze mi&#322;o&#347;ci, to szcz&#281;&#347;cie twoje sta&#322;em b&#281;dzie, nie masz powodu do pow&#261;tpiewania; bo ani B&#243;g, ani jego mi&#322;o&#347;&#263; zagin&#261;&#263; nie mo&#380;e. Woli swojej lekkomy&#347;lnie nie zmienia, nikt te&#380; jej zmieni&#263; nie jest w mo&#380;no&#347;ci. Nigdy nie po&#380;a&#322;uj&#261;, &#380;e Boga mi&#322;owali, mi&#322;o&#347;nicy jego. Wszelka inna mi&#322;o&#347;&#263; jest niesta&#322;&#261;: ten, kt&#243;rego mi&#322;ujesz, mo&#380;e przesta&#263; ci&#281; mi&#322;owa&#263;; mo&#380;e sam zgin&#261;&#263;, chocia&#380; mi&#322;o&#347;&#263; w &#380;yj&#261;cymby nie zgin&#281;&#322;a. S z c z &#281; &#347; c i e m&nbsp;&nbsp;n i e&nbsp;&nbsp;j e s t,&nbsp;&nbsp;c o&nbsp;&nbsp;w i e c z n e m&nbsp;&nbsp;n i e&nbsp;&nbsp;j e s t <sup>2</sup>. Wszelkie inne umowy mog&#261; si&#281; rozwi&#261;za&#263;, bo t&#261; sam&#261; wol&#261;, kt&#243;r&#261; si&#281; zawi&#261;za&#322;y, mog&#261; by&#263; rozwi&#261;zane; rzecz inna z mi&#322;o&#347;ci&#261;, tu matery&#261; umowy jest wola sama, kt&#243;ra przez zawarcie umowy tak si&#281; kr&#281;puje, tak ubezw&#322;adnia, &#380;e przestaje by&#263; pani&#261; siebie, utraca prawo rozrz&#261;dzania sob&#261;, ca&#322;a oddaje si&#281; przedmiotowi, kt&#243;ry umi&#322;owa&#322;a, ca&#322;a zale&#380;y od niego.',
                        'description3' => '1) Jeremiasz 2, 13.<br/>
    2) &#346;. Augustyn.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0627',
                        'name' => 'XXVII Czerwca',
                        'content' => 'O jedynej drodze do &#347;wi&#281;to&#347;ci.',
                        'author' => '&#8222;Naj&#322;atwiejsza i prawie jedyna do &#347;wi&#281;to&#347;ci droga, jest stronienie od tego wszystkiego; co &#347;wiat mi&#322;uje, za czem si&#281; ugania.&#8221;',
                        'description' => '(S. Ignat. in Exam. c. 4).',
                        'description2' => 'Dawna skarga rzymskiego m&#281;drca jest zarazem skarg&#261; cnoty: z&#322;ego przyczyn&#261; jest to, &#380;e si&#281; nie rozs&#261;dkiem, ale zapatrywaniem na drugich kierujemy. &#379;yjemy jak si&#281; powszechnie &#380;yje. Nie jak si&#281; idzie, ale jak i&#347;&#263; nale&#380;y, post&#281;puje ten, kto zmierza do doskona&#322;o&#347;ci; ten si&#281; bieg&#322;ym sternikiem wykazuje, kto przeciw pr&#261;dowi wody p&#322;yn&#261;&#263; umie. Nie trzymaj z og&#243;&#322;em, nie my&#347;l, &#380;eby zaraz na&#347;ladowa&#263; potrzeba by&#322;o, co og&#243;&#322; doradza; wyst&#281;pkiem by&#263; nie przestaje, co si&#281; licznemi przyk&#322;adami zastawia, co si&#281; na licznych przyk&#322;adach opiera. Zdania nale&#380;y wa&#380;y&#263;, n i e&nbsp;&nbsp;l i c z y &#263;. B&#322;&#281;dy innych niech b&#281;d&#261; powodem do ostro&#380;no&#347;ci, nie zach&#281;t&#261; do na&#347;ladowania. Kto si&#281; obawia by&#263; do z&#322;ych niepodobnym, ten na z&#322;ego wychodzi. N i e w i e l u&nbsp;&nbsp;j e s t,&nbsp;&nbsp;o w s z e m,&nbsp;&nbsp;j e d e n&nbsp;&nbsp;t y l k o&nbsp;&nbsp;S y n&nbsp;&nbsp;B o &#380; y,&nbsp;&nbsp;k t &#243; r e g o&nbsp;&nbsp;p r z y k &#322; a d y&nbsp;&nbsp;z a&nbsp;&nbsp;n o r m &#281;&nbsp;&nbsp;w&nbsp;&nbsp;p o s t &#281; p o w a n i u&nbsp;&nbsp;b e z&nbsp;&nbsp;z a s t r z e &#380; e n i a&nbsp;&nbsp;s &#322; u &#380; &#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0628',
                        'name' => 'XXVIII Czerwca',
                        'content' => 'O post&#281;pach w cnocie.',
                        'author' => '&#8222;Wyrokowanie o doskona&#322;o&#347;ci z twarzy, z ruch&#243;w, z usposobienia, z samotno&#347;ci zami&#322;owania, jest niew&#322;a&#347;ciwe i bywa mylne. Z pracy nad sob&#261;, jak&#261; kto podejmuje, z pokonywania siebie, nale&#380;y wnosi&#263; o post&#281;pach w cnocie zrobionych.&#8221;',
                        'description' => '(S. Ignat. apud Maff.)',
                        'description2' => 'W&#261;tpliw&#261; jest &#347;wi&#281;to&#347;&#263;, kt&#243;ra chwa&#322;y szuka z tego, co raczej pewne zdr&#281;twienie natury, ni&#380; moc duszy dzia&#322;a: chyba &#380;eby&#347; &#347;wi&#281;tym nazwa&#322; drzewo, kt&#243;re si&#281; nigdy nie gniewa, nigdy zmys&#322;owo&#347;ci w sobie nie odczuwa. Czy i na jak&#261; pochwa&#322;&#281; zas&#322;uguje ta lub owa czynno&#347;&#263;, wno&#347; z usi&#322;owa&#324; przy jej wykonywaniu u&#380;ytych; z pobudki, kt&#243;ra do jej podj&#281;cia nak&#322;oni&#322;a. T r u d n o &#347; &#263;&nbsp;&nbsp;t u&nbsp;&nbsp;o&nbsp;&nbsp;c e n i e&nbsp;&nbsp;s t a n o w i,&nbsp;&nbsp;w a r t o &#347; c i&nbsp;&nbsp;d o d a j e. &#379;e nie s&#261; z&#322;ymi niekt&#243;rzy, przypadek tak zrz&#261;dzi&#322;: poniewa&#380; nie trafili na z&#322;e przyk&#322;ady, nie znale&#378;li si&#281; w sprzyjaj&#261;cych ku temu okoliczno&#347;ciach; inaczej byliby jak najgorszymi. C o &#380;&nbsp;&nbsp;w i e,&nbsp;&nbsp;k t o&nbsp;&nbsp;n i e&nbsp;&nbsp;j e s t&nbsp;&nbsp;w y s t a w i o n y&nbsp;&nbsp;n a&nbsp;&nbsp;p o k u s &#281;? Bez walki nie spodziewaj si&#281; korony. Samotno&#347;&#263;, wrodzone milczenia zami&#322;owanie, od ludzi stronienie, nie uwa&#380;a si&#281; tak dalece za cnot&#281;, mo&#380;e nawet czasami sprzyja&#263; naszej gnu&#347;no&#347;ci, by&#263; dziwactwem, poczytywa&#263; si&#281; za wad&#281;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0629',
                        'name' => 'XXIX Czerwca',
                        'content' => 'O zgorszeniu.',
                        'author' => '&#8222;O ile po&#380;yteczn&#261; jest gorliwego z drugimi rozmowa dobra, o tyle szkodliw&#261; rozwi&#261;z&#322;a.&#8221;',
                        'description' => '(S. Ignat. apud Nolarc. c. ult.)',
                        'description2' => 'Plamy s&#322;o&#324;ca albo za&#263;mienia ksi&#281;&#380;yca widoczne s&#261; wszystkim; podobnie szeroko rozchodzi si&#281; zgorszenie, kt&#243;re da&#322;a osoba, skutkiem swego powo&#322;ania wysoko postawiona w hierarchii spo&#322;ecznej. Biada cz&#322;owiekowi onemu, przez kt&#243;rego przychodzi zgorszenie! <sup>1</sup> zaledwie usi&#322;owanie wielu naprawia, co z&#322;y przyk&#322;ad jednego popsu&#322;. Na oczach, j&#281;zyku i r&#281;kach ka&#380;dy ca&#322;ego zakonu zaszczyt nosi, albo go niweczy. Z jednego ludzie o wszystkich wnosz&#261;, nies&#322;usznie, wprawdzie ale bardzo cz&#281;sto; s&#261;dy ludzkie o ile s&#261; ku z&#322;emu sk&#322;onniejsze, o tyle wi&#281;ksz&#261; ostro&#380;no&#347;&#263; doradzaj&#261; tym, na kt&#243;rych ka&#380;dy uwag&#281; zwraca. S&#243;l, kt&#243;r&#261; zaprawiany by&#263; winien lud, je&#347;li si&#281; popsuje, na co si&#281; przyda? &#8212; chyba, &#380;eby j&#261; precz wyrzucono <sup>2</sup>. L e p i e j&nbsp;&nbsp;j e s t,&nbsp;&nbsp;a b y&nbsp;&nbsp;z g i n &#261; &#322;&nbsp;&nbsp;j e d e n&nbsp;&nbsp;c z &#322; o w i e k,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;c a &#322; y&nbsp;&nbsp;n a r &#243; d.',
                        'description3' => '1) &#346;. Mateusz 18, 7.<br/>
    2) Mateusz 5, 13.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0630',
                        'name' => 'XXX Czerwca',
                        'content' => 'O upominaniu.',
                        'author' => '&#8222;Bardzo zbawienn&#261; jest rzecz&#261;, je&#347;li masz przyjaciela, kt&#243;remu pozwoli&#322;e&#347;, aby ci&#281; napomina&#322; w wadach.&#8221;',
                        'description' => '(S. Ignat. in compend. vitae).',
                        'description2' => 'Jak twarzy, tak szaty i post&#281;powania swego nikt nie widzi, albo raczej nie dosy&#263; wyra&#378;nie widzi; innego tu potrzeba oka, kt&#243;reby ciebie i wszystko, co twoje, pod nale&#380;yt&#261; ocen&#281; wzi&#281;&#322;o. Chcie&#263;, aby nas zawsze chwalono, albo utrzymywa&#263;, &#380;e si&#281; w nas nic nie znajduje, coby na przygan&#281; zas&#322;ugiwa&#322;o; wielk&#261; jest zarozumia&#322;o&#347;ci&#261;. Kto m&#243;wi, &#380;e jest bez grzechu, k&#322;amc&#261; jest. I m&nbsp;&nbsp;m n i e j&nbsp;&nbsp;d o s t r z e g a s z,&nbsp;&nbsp;t e m&nbsp;&nbsp;w i &#281; c e j&nbsp;&nbsp;&#380; y w i s z&nbsp;&nbsp;w&nbsp;&nbsp;s o b i e&nbsp;&nbsp;w a d. Je&#347;li za zrobienie uwagi, &#380;e masz plam&#281; na twarzy, &#380;e suknia &#378;le le&#380;y, dzi&#281;kujesz; dlaczego&#380; si&#281; gniewasz, je&#347;li ci&#281; kto upomni o to, co i bardziej szpeci i bardziej szkodzi? Lepiej mi&#322;uje, kto za z&#322;e upomina, ni&#380; kto chwali. Ten jest pochlebc&#261;, tamten dobrodziejem. Pragnie, &#380;eby&#347; by&#322; dobrym, &#380;eby&#347; na pochwa&#322;&#281; i mi&#322;o&#347;&#263; wszystkich zas&#322;u&#380;y&#322;. D o&nbsp;&nbsp;d o b r o c z y &#324; c &#243; w&nbsp;&nbsp;z a l i c z a j&nbsp;&nbsp;t y c h,&nbsp;&nbsp;k t &#243; r z y&nbsp;&nbsp;t a k &#261;&nbsp;&nbsp;o&nbsp;&nbsp;t o b i e&nbsp;&nbsp;p i e c z &#281;&nbsp;&nbsp;m a j &#261;.',
                        'description3' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_07',
                'name' => 'July',
                'colour_value' => '#ea8384',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_0701',
                        'name' => 'I Lipca',
                        'content' => 'O wdra&#380;aniu do s&#322;u&#380;by Bo&#380;ej.',
                        'author' => '&#8222;Dobrego zakonnika obowi&#261;zkiem jest: do Bo&#380;ej, nie do ksi&#261;&#380;&#281;cej s&#322;u&#380;by ludzi sposobi&#263;, aby okaza&#322;, &#380;e najlepiej zrobi&#322; takiego Pana wybieraj&#261;c.&#8221;',
                        'description' => '(S. Ignat. apud Maff. l. 3).',
                        'description2' => 'Jak&#380;e wielu, gdy si&#281; wynosz&#261; w g&#243;r&#281;, gotuj&#261; sobie zgub&#281;, mo&#380;e wieczn&#261;, kt&#243;raby ich nigdy nie spotka&#322;a, gdyby si&#281; byli tak wysoko nie wznosili. Zawrotu doznaj&#261;, gdy stoj&#261; na wysoko&#347;ci; gdyby stali na nizinie, byliby ca&#322;kiem bezpieczni. Patrz, aby&#347; nie zgotowa&#322; zguby temu, kt&#243;remu gotujesz &#322;ask&#281;. I c&#243;&#380;, je&#347;li z r&#261;k twoich za&#380;&#261;daj&#261; duszy tego, kt&#243;rego wzgl&#281;dy ksi&#281;cia, wy&#380;sze miejsce, szcz&#281;&#347;liwszy los popchn&#281;&#322;y do przewrotno&#347;ci? Pomaga&#263; z&#322;emu do z&#322;ego, to znaczy pomaga&#263; mu do zguby, sta&#263; si&#281; w pewien spos&#243;b przyczyn&#261; jego zguby. W jednem go posuniesz, a w wielu zaszkodzisz! por&#243;wnaj szkody z ma&#322;ym, bo nic nieznacz&#261;cym zyskiem. Mo&#380;e i posuni&#281;ty nie uzna dobrodziejstwa; po wystawieniu budynku nie troszcz&#261; si&#281; zwykle o rusztowanie, przy pomocy kt&#243;rego budynek si&#281; wznosi&#322;. Owszem, cz&#281;sto si&#281; nog&#261; potr&#261;ca drabina, kt&#243;ra do wzniesienia si&#281; pomog&#322;a. S &#322; u &#380; y &#263;&nbsp;&nbsp;B o g u,&nbsp;&nbsp;t o&nbsp;&nbsp;z n a c z y&nbsp;&nbsp;k r &#243; l o w a &#263;. Nad ten zaszczyt nie ma wy&#380;szego, nie ma pot&#281;&#380;niejszego. S&#322;u&#380;ba ta przyrzeka wieczn&#261; wolno&#347;&#263;, do tej s&#322;u&#380;by usposabia&#263;, nak&#322;ania&#263;, nier&#243;wnie jest lepsz&#261; rzecz&#261;, ni&#380; usposabia&#263; do kr&#243;lowania.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0702',
                        'name' => 'II Lipca',
                        'content' => 'O wyrozumia&#322;o&#347;ci.',
                        'author' => '&#8222;Dobry dusz &#322;owca niejedno winien przymilcze&#263;, jakby o tem nie wiedzia&#322;; z czasem gdy zostanie panem serca, pokieruje drugimi jak zechce.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => '&#321;agodnie nale&#380;y post&#281;powa&#263; z m&#322;odymi. Od ostrego powietrza gin&#261; w&#261;t&#322;e ro&#347;linki, kt&#243;reby przy &#322;agodnem wybornie ros&#322;y. Cierpliwo&#347;&#263; i wyrozumia&#322;o&#347;&#263; niezb&#281;dna jest z pocz&#261;tku. Co jest do wykonania mozolniejsze, to bywa trwalsze. &#321;atwo jest na wosku wycisn&#261;&#263; obraz cnoty, ale te&#380; &#322;atwo zetrze&#263;; inaczej z marmurem, musisz si&#281; dobrze namozoli&#263;, nim obraz odrobisz, ale i usuni&#281;cie go nie tak &#322;atwo przychodzi. Jestto rzecz, kt&#243;ra d&#322;ugo potrwa. Je&#347;li pomimo starannego piel&#281;gnowania drzewka, owoc otrzymujesz nieszczeg&#243;lny; nie idzie zatem, aby&#347; zaraz wyrywa&#322; drzewko: ten ci rok nie dopisa&#322;, ale nast&#281;pny mo&#380;e dopisze. C z e k a j,&nbsp;&nbsp;p o l e w a j,&nbsp;&nbsp;w z r o &#347; n i e;&nbsp;&nbsp;c i e r p l i w o &#347; &#263;&nbsp;&nbsp;i&nbsp;&nbsp;p r a c &#281;&nbsp;&nbsp;t w o j &#261;&nbsp;&nbsp;o b f i t o &#347; c i &#261;&nbsp;&nbsp;o w o c &#243; w&nbsp;&nbsp;h o j n i e&nbsp;&nbsp;n a g r o d z i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0703',
                        'name' => 'III Lipca',
                        'content' => 'O trudno&#347;ci w kierowaniu duszami.',
                        'author' => '&#8222;Ach! jak&#380;e b&#322;&#261;dz&#261;, kt&#243;rzy mniemaj&#261;c, &#380;e s&#261; pe&#322;ni ducha, kierunku dusz si&#281; podejmuj&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Nikt si&#281; za stolarza, nikt za mechanika nie uwa&#380;a, je&#347;li pierwiej nie po&#347;wi&#281;ci&#322; kilka lat na wyuczenie si&#281; swej sztuki; sama&#380; tylko umiej&#281;tno&#347;&#263; kierowania duszami takby &#322;atw&#261; by&#263; mia&#322;a, &#380;e lada pocz&#261;tkuj&#261;cy ju&#380; si&#281; za mistrza uwa&#380;a? Kierunek dusz jest-to sztuka nad sztukami, kto utrzymuje, &#380;e j&#261; wybornie zna, ten z pewno&#347;ci&#261; nale&#380;ycie jej nie pozna&#322;. Sprawa-to Boska, nie ludzka, bo B&#243;g tylko serca porusza&#263;, sercami kierowa&#263; mo&#380;e. Mo&#380;na ludzi do s&#322;u&#380;by zmusi&#263;, mo&#380;na ich sztuk i r&#243;&#380;nych umiej&#281;tno&#347;ci nauczy&#263;; ale do rzeczy, kt&#243;re ludzki rozum przechodz&#261;, do rzeczy nadnaturalnych, ludzkim sposobem poci&#261;gn&#261;&#263; ich nie mo&#380;na. Duch Bo&#380;y tu wsp&#243;&#322;dzia&#322;a&#263; winien. Stra&#380; rzeczy najdro&#380;szej powierzona jest dusz pasterzom, cena krwi Chrystusowej. B i a d a,&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;z&nbsp;&nbsp;n i e d b a l s t w a&nbsp;&nbsp;p a s t e r z a&nbsp;&nbsp;z g i n i e&nbsp;&nbsp;d u s z a&nbsp;&nbsp;k t &#243; r a;&nbsp;&nbsp;z&nbsp;&nbsp;r &#261; k&nbsp;&nbsp;j e g o&nbsp;&nbsp;d o p o m n i&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;o&nbsp;&nbsp;n i &#261;&nbsp;&nbsp;Z b a w i c i e l <sup>1</sup>.',
                        'description3' => '1) Ezechiel 3.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0704',
                        'name' => 'IV Lipca',
                        'content' => 'O baczno&#347;ci w kierowaniu duszami.',
                        'author' => '&#8222;Rzecz&#261; nader jest niebezpieczn&#261; chcie&#263; wszystkich jedn&#261; drog&#261; do doskona&#322;o&#347;ci prowadzi&#263;. Kto tak czyni, ten chyba nie wie, jak rozmaite i jak liczne s&#261; dary Ducha &#346;wi&#281;tego.&#8221;',
                        'description' => '(S. Ignat. apud Quart.)',
                        'description2' => 'Nietylko ile g&#322;&#243;w, tyle zda&#324;; ale tak&#380;e ile ludzi, tyle wizerunk&#243;w. Dzie&#322;o to wszechmocnego, i&#380; si&#281; ka&#380;dy wi&#281;cej w duszy r&#243;&#380;ni, ni&#380; na twarzy. Je&#347;li gdzie, to w kierowaniu duszami wielkiej potrzeba ostro&#380;no&#347;ci. Z pomi&#281;dzy lekarstw nie wszystkie wszystkim pomagaj&#261;; to co jednego uzdrowi&#322;o, drugiego zabije, je&#347;li pod wzgl&#281;dem jako&#347;ci i ilo&#347;ci nie b&#281;dzie zastosowane. Chcie&#263; u&#380;ywa&#263; jednego sposobu w kierowaniu wszystkimi, znaczy to samo, co chcie&#263; stosowa&#263; do wszystkich g&#322;&#243;w jedn&#261; czapk&#281;, do wszystkich n&#243;g jeden trzewik. Nie wiele na tem zale&#380;y, kto jak&#261; idzie drog&#261;, g&#322;adk&#261; czy chropowat&#261;, byleby tylko bezpiecznie doszed&#322; do wytkni&#281;tego celu. Pod postaci&#261; rozdzielonych j&#281;zyk&#243;w na ka&#380;dego z Aposto&#322;&#243;w zst&#261;pi&#322; Mistrz Duch &#346;wi&#281;ty <sup>1</sup>. D w a n a &#347; c i e&nbsp;&nbsp;j e s t&nbsp;&nbsp;b r a m&nbsp;&nbsp;n i e b a,&nbsp;&nbsp;n i e&nbsp;&nbsp;p o t r z e b a&nbsp;&nbsp;z m u s z a &#263;,&nbsp;&nbsp;a b y&nbsp;&nbsp;w s z y s c y&nbsp;&nbsp;w c h o d z i l i&nbsp;&nbsp;p r z e z&nbsp;&nbsp;j e d n &#261;&nbsp;&nbsp;i&nbsp;&nbsp;t &#281; &#380;&nbsp;&nbsp;s a m &#261; <sup>2</sup>.',
                        'description3' => '1) Dzieje Apostolskie 2, 3.<br/>
    2) Apocalypsis 21, 21.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0705',
                        'name' => 'V Lipca',
                        'content' => 'O mi&#322;o&#347;ci wzajemnej.',
                        'author' => '&#8222;Nic tak &#347;wiatu nie obrzydza zakonnik&#243;w, jak wzajemna ich niezgoda, podzia&#322; na r&#243;&#380;ne stronnictwa.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'O ile nie szuka, o tyle na szacunek zas&#322;uguje mi&#322;o&#347;nik cnoty, dop&#243;ki si&#281; o ni&#261; troszczy; gdy jej odbiegnie, s&#322;usznie pogard&#281; odbiera, jako nagrod&#281;. Nie zakon jest, ale niewiadomo co, je&#347;li szczera mi&#322;o&#347;&#263; nie &#322;&#261;czy tych, kt&#243;rych &#347;ci&#347;le po&#322;&#261;czy&#322;o jedno powo&#322;anie, jedna regu&#322;a, jeden cel. T a m&nbsp;&nbsp;c n o t y&nbsp;&nbsp;n i e&nbsp;&nbsp;p i e l &#281; g n o w a n i e&nbsp;&nbsp;j e s t,&nbsp;&nbsp;a l e&nbsp;&nbsp;n i s z c z e n i e. Promienie s&#322;o&#324;ca, gdy si&#281; w jeden punkt zbiegn&#261;, mocno pal&#261;, ale gdy s&#261; rozstrzelone, takiej si&#322;y nie maj&#261;. I jakiej&#380;e tam korzy&#347;ci duchownej spodziewa&#263; si&#281; mo&#380;na, gdzie co jeden zbuduje, to drugi zniszczy? Lepszy przyk&#322;ad s&#261; obowi&#261;zani dawa&#263; ci, kt&#243;rych powo&#322;anie na wydatniejszem postawi&#322;o miejscu. Nie nak&#322;oni&#261; do cnoty, kt&#243;rzy sami pilnie jej nie strzeg&#261;; dobrze m&#243;wi&#263;, a &#378;le czyni&#263;, to znaczy pogard&#261; do tego, co si&#281; m&#243;wi, przejmowa&#263;, jak najgorzej usposabia&#263;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0706',
                        'name' => 'VI Lipca',
                        'content' => 'O jedno&#347;ci z Bogiem.',
                        'author' => '&#8222;Wielk&#261;, ale rzadk&#261; sztuk&#261; jest: dzia&#322;a&#263; z wieloma, a jednak ani od siebie, ani od Boga nigdy nie odst&#281;powa&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Quart. in Gl.)',
                        'description2' => 'Nawa&#322; zaj&#281;&#263; bardzo szkodzi pobo&#380;no&#347;ci: wyczerpuje zapa&#322;, budzi niesmak do modlitwy, pozorami zape&#322;nia serce, roztargnieniami g&#322;ow&#281;. Je&#347;li wi&#281;cej, ni&#380; powiniene&#347;, chcesz; to ju&#380; wi&#281;cej, ni&#380; mo&#380;esz, nie chciej. Porz&#261;dku si&#281; trzymaj, jak ka&#380;da rzecz inna; patrz, ogie&#324; silniejszym jest i d&#322;u&#380;ej trwa sam w sobie, ni&#380; w czem innem, jakby dla przestrogi, aby&#347; wprz&#243;d siebie doskonali&#322;, ni&#380; innych. N a&nbsp;&nbsp;c o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p r z y d a&nbsp;&nbsp;o g r z e w a n i e&nbsp;&nbsp;i n n y c h,&nbsp;&nbsp;s k o r o &#347;&nbsp;&nbsp;s a m&nbsp;&nbsp;z i m n y? Niew&#322;a&#347;ciwie innych szukasz, gdy siebie gubisz; pierwiej siebie mocno postaw na drodze zbawienia i doskona&#322;o&#347;ci, potem sw&#261; piecz&#281; na innych rozci&#261;gnij. Ig&#322;a magnesowa z biegunem tak si&#281; silnie &#322;&#261;czy, &#380;e si&#281; ode&#324; nie odwraca, &#380;e zawsze si&#281; ku niemu kieruje, bez wzgl&#281;du na to, w kt&#243;r&#261; stron&#281; okr&#281;t pop&#322;ynie. J e &#347; l i&nbsp;&nbsp;w&nbsp;&nbsp;&#347; r &#243; d&nbsp;&nbsp;z a j &#281; &#263;&nbsp;&nbsp;s e r c e&nbsp;&nbsp;n a s z e&nbsp;&nbsp;p o d o b n i e&nbsp;&nbsp;z&nbsp;&nbsp;B o g i e m&nbsp;&nbsp;j e s t&nbsp;&nbsp;z &#322; &#261; c z o n e,&nbsp;&nbsp;z a&nbsp;&nbsp;s z c z &#281; &#347; l i w y c h&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;m i e j m y&nbsp;&nbsp;r o b o t n i k &#243; w.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0707',
                        'name' => 'VII Lipca',
                        'content' => 'O sile &#347;wi&#281;to&#347;ci.',
                        'author' => '&#8222;Cnota i &#347;wi&#281;to&#347;&#263; &#380;ycia nietylko u Boga, ale i u ludzi, albo wszystko mog&#261;, albo bardzo wiele.&#8221;',
                        'description' => '(S. Ignat. apud Quart. in Gl.)',
                        'description2' => 'Jak ry&#347; zwierz&#281;ta woni&#261;, magnes &#380;elazo powinowactwem; tak pobo&#380;no&#347;&#263; przyk&#322;adem ci&#261;gnie nas ku sobie, nie potrzeba ani pochwa&#322;y, ani zalecenia; gdzie wzywa cnota, tam ch&#281;tnemi do na&#347;ladowania okazuj&#261; si&#281; serca. Patrzenie na cnot&#281; przynosi zawsze korzy&#347;&#263;. Gdy patrzymy na s&#322;o&#324;ce, ono nas o&#347;wieca; gdy si&#281; zbli&#380;amy do ognia, on nas ogrzewa. Niemem wprawdzie, ale bardzo skutecznem kazaniem jest &#347;wi&#281;to&#347;&#263;. B a z y l i s z e k&nbsp;&nbsp;w z r o k i e m&nbsp;&nbsp;s z k o d z i,&nbsp;&nbsp;m &#261; &#380;&nbsp;&nbsp;&#347; w i &#281; t y&nbsp;&nbsp;p o m a g a. Poci&#261;gaj&#261;ca w rozmowie uprzejmo&#347;&#263;, mi&#322;y w oczach pok&#243;j, zr&#281;czne zastosowanie wszystkich ruch&#243;w jest kluczem do serc, i pr&#281;dzej si&#281; nim otwieraj&#261;, ni&#380; jak&#261; machin&#261;, serca nawet spi&#380;owe. Skuteczniejszym jest g&#322;os czynu, ni&#380; g&#322;os ust. D &#322; u g a&nbsp;&nbsp;d r o g a&nbsp;&nbsp;p r z e z&nbsp;&nbsp;p r z e p i s y,&nbsp;&nbsp;k r &#243; t k a&nbsp;&nbsp;p r z e z&nbsp;&nbsp;p r z y k &#322; a d y <sup>1</sup>. Pewniej cel osi&#261;ga, kto do przekonania m&#243;wi czynem, ni&#380; kto s&#322;owem.',
                        'description3' => '1) Seneka.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0708',
                        'name' => 'VIII Lipca',
                        'content' => 'O zmianie zwyczaju.',
                        'author' => '&#8222;Usi&#322;owanie usi&#322;owaniem, zwyczajem zwyczaj, jak klin klinem si&#281; usuwaj&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Maff.)',
                        'description2' => 'Twarde jarzmo zwyczaju! nie &#380;elazem, ale &#380;elazn&#261; wyst&#281;pku konieczno&#347;ci&#261; swoich kr&#281;puje; nic zwykle w sprawach ludzkich nie bywa tak trudnem, jak zastarza&#322;ego zwyczaju tyrania. Strze&#380; si&#281;, aby&#347; nie by&#322; zwi&#261;zany jego powrozami. Jest jednak co&#347;, co d&#322;ugi i niezno&#347;ny &#322;a&#324;cuch zwyczaju rozrywa; tem &#8212; co&#347; &#8212; jest zwyczaj przeciwny. Wielkie &#322;aski dobrodziejstwo, gdy cz&#322;owiek chce si&#281; poprawi&#263;; za zjawieniem si&#281; tej ch&#281;ci, otucha winna w nas wst&#281;powa&#263;. Jakkolwiek z&#322;e cz&#281;sto powtarzane zamienia si&#281; w natur&#281;, mo&#380;esz jednak w sobie inn&#261;, wedle wskaz&#243;wek rozumu i Bo&#380;ego prawa, wyrobi&#263; natur&#281;, za pomoc&#261; nowego zwyczaju. Czas ci&#281; przekona, o ile ta zmiana b&#281;dzie z dobrem twojem. S&#322;udzy, gdy si&#281; nie podobaj&#261; panom, zast&#281;puj&#261; si&#281; innymi; podobnie i zwyczaj niedobry, gdy si&#281; tobie nie podoba, zast&#261;p go innym dobrym: t e n&nbsp;&nbsp;n a p r a w i,&nbsp;&nbsp;c o&nbsp;&nbsp;p o p r z e d n i&nbsp;&nbsp;p o p s u &#322;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0709',
                        'name' => 'IX Lipca',
                        'content' => 'O dzia&#322;aniu dobrze zaraz.',
                        'author' => '&#8222;Dla dalekiej nadziei robienia wiele dla chwa&#322;y Boga, nierozwa&#380;nie pomija si&#281; obecna sposobno&#347;&#263;; stanie si&#281; bowiem, &#380;e i ta si&#281; pominie, i inna si&#281; nie nadarzy&#8221;',
                        'description' => '(S. Ignat. apud Maff.)',
                        'description2' => 'Jak obietnicami, tak zamiarami bogaci&#263; si&#281;, nie wielka to sztuka: ani trudu, ani zdolno&#347;ci tu nie potrzeba. Przychodzi &#322;atwo, ale po&#380;ytku nie przynosi, ani w &#347;wieckiej, ani w duchownej gospodarce. Po co przysz&#322;o&#347;ci&#261; rozporz&#261;dzasz? jest to trud pr&#243;&#380;niak&#243;w. Tu Rodus, tu skok. W obecnem, jakie masz, zaj&#281;ciu, popisz si&#281; ze swemi si&#322;ami, wyka&#380; dowodnie, co gotujesz na przysz&#322;o&#347;&#263;. S a m a&nbsp;&nbsp;o b i e t n i c a&nbsp;&nbsp;n i k o g o&nbsp;&nbsp;n i e&nbsp;&nbsp;u t u c z y. Je&#347;li ka&#380;da czynno&#347;&#263;, do kt&#243;rej si&#281; zabierasz, doskona&#322;&#261; z twych r&#261;k wyjdzie; je&#347;li, co dzisiaj dobrego zrobi&#263; mo&#380;esz, na jutro nie odk&#322;adasz; to wkr&#243;tkim czasie wielkie zas&#322;ugi sobie zgromadzisz i kr&#243;lewsk&#261; do doskona&#322;o&#347;ci drog&#261;, nie tak p&#243;jdziesz, jak raczej polecisz. Owe czyny wielkie i heroiczne, za kt&#243;remi wzdychasz, rzadkie s&#261; i mo&#380;e nigdy nie nast&#261;pi&#261;. Probuj na mniejszem, aby&#347; si&#281; przekona&#322;, co zdo&#322;asz w wi&#281;kszem. P a t r z,&nbsp;&nbsp;&#380; o &#322; n i e r z&nbsp;&nbsp;z a p r a w i a&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n a&nbsp;&nbsp;o s o b n o &#347; c i&nbsp;&nbsp;d o&nbsp;&nbsp;t e g o,&nbsp;&nbsp;c o&nbsp;&nbsp;m a&nbsp;&nbsp;c z y n i &#263;&nbsp;&nbsp;n a&nbsp;&nbsp;p l a c u&nbsp;&nbsp;w a l k i,&nbsp;&nbsp;w o b e c&nbsp;&nbsp;w s z y s t k i c h.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0710',
                        'name' => 'X Lipca',
                        'content' => 'O przypominaniu sobie dobrodziejstw.',
                        'author' => '&#8222;Gdy szatan poddaje nam my&#347;li ma&#322;oduszne, podno&#347;my si&#281;, przypominaj&#261;c sobie dobrodziejstwa poprzednio od Boga otrzymane.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Przypomnienie sobie dobrodziejstw pobudza do wdzi&#281;czno&#347;ci i rozbudza na nowo nadziej&#281;. Kto takie rzeczy da&#322;, kto tyle da&#322;, ten si&#281; nie sta&#322; ani sk&#261;pszym, ani ubo&#380;szym. Niesko&#324;czono&#347;&#263; nie zna wyczerpania, niezmierzono&#347;&#263; poch&#322;oni&#281;cia. Przejrzyj, je&#347;li mo&#380;esz, rachunek otrzymanych od Boga &#322;ask. Czy to &#380;ycie przesz&#322;e, czy dzie&#324; dzisiejszy, czy chwil&#281; obecn&#261; we&#378;miesz pod uwag&#281;; nies&#322;ychan&#261; tych &#322;ask liczb&#281; ujrzysz przed sob&#261;. Ka&#380;da winna ci by&#263; pobudk&#261; do wdzi&#281;czno&#347;ci i zarazem otuch&#261;, &#380;e otrzymasz nowe &#322;aski, ka&#380;da winna w tobie o&#380;ywia&#263;, podnosi&#263; nadziej&#281;. Wieleby&#347;my mogli, gdyby&#347;my si&#281; wa&#380;yli na wiele. Sprzymierze&#324;cem naszym jest B&#243;g, ani na mocy mu nie zbywa, ani na woli: ty o takich rzeczach nawet pomy&#347;li&#263; nie mo&#380;esz, jakieby wszechmocno&#347;&#263; jego mog&#322;a, a niesko&#324;czona dobro&#263; chcia&#322;a da&#263;. Czem&#347; gorszem od wojny, jest obawa wojny. Cz&#281;sto nas boja&#378;&#324; powstrzymuje, gdzieby nadzieja pobudza&#263; winna. Pozorami nas zra&#380;a ten, kt&#243;ry jest ksi&#281;ciem ciemno&#347;ci, nieufno&#347;&#263; w nas rozbudza, ma&#322;oduszno&#347;ci&#261; przejmuje, do zaniechania rzeczy chwalebnej jakby zniewala. O p i e r a j m y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;t a k i e m u&nbsp;&nbsp;p o d s t &#281; p o w i!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0711',
                        'name' => 'XI Lipca',
                        'content' => 'O zasadzkach z&#322;ego ducha.',
                        'author' => '&#8222;Je&#347;li ci&#281; szatan do grzechu nak&#322;oni&#263; nie mo&#380;e, to i tem si&#281; zadawalnia, &#380;e ci sprawi&#322; przykro&#347;&#263;, &#380;e zmniejszy&#322; ducha twego pogod&#281;.&#8221;',
                        'description' => '(S. Ignat. de discr. spir.)',
                        'description2' => 'Piek&#322;o raduje si&#281; i ma&#322;emi zyskami, oszcz&#281;dno&#347;&#263; uwa&#380;a za najwi&#281;kszy doch&#243;d, niczego nie zaniedbuje, co pochwyci&#263; mo&#380;e. Je&#347;li trudno mu do wi&#281;kszych, pobudza do mniejszych grzech&#243;w; je&#347;li si&#281; i to nie udaje, m&#261;ci spok&#243;j serca, a&#380;eby zmniejszy&#322; pobo&#380;no&#347;&#263;, ostudzi&#322; zapa&#322; do ofiar. Za podejrzan&#261; miej cz&#281;st&#261; w my&#347;li trwog&#281;, ustawiczna owa chmura wi&#281;ksz&#261;, ni&#380; zwykle s&#261;dzimy, gotuje burz&#281;; rozbudza szatan trwog&#281; w ma&#322;ych rzeczach wielk&#261;, a&#380;eby pod pozorem dobrego nak&#322;oni&#322; do najwi&#281;kszych b&#322;&#281;d&#243;w. Zbytnia nawet u &#347;wi&#281;tych trwoga, &#347;wi&#281;to&#347;ci&#261; nie jest. Owe ci&#261;g&#322;e w duszy niepokoje, ci&#261;g&#322;e na jedn&#261; i drug&#261; stron&#281; wahania si&#281;, s&#261; sumienia katowni&#261;, pewnego rodzaju m&#281;cze&#324;stwem, ale m&#281;cze&#324;stwem szatana; bo bez po&#380;ytku, bo ze szkod&#261; domowego spokoju. Umys&#322; wahaj&#261;cy si&#281;, ztruty, nie jest zdolny do pe&#322;nienia swego obowi&#261;zku. Z takiego zam&#281;tu korzysta szatan, do z&#322;ego nak&#322;ania, chocia&#380; pod najlepszym pozorem, niby uspokojenia nas, a w rzeczy samej sprawienia nam wielkiej szkody. J e &#347; l i&nbsp;&nbsp;w&nbsp;&nbsp;t y m&nbsp;&nbsp;p r z y p a d k u&nbsp;&nbsp;n a&nbsp;&nbsp;s o b i e&nbsp;&nbsp;t y l k o&nbsp;&nbsp;p o l e g a s z,&nbsp;&nbsp;z a s a d z k i&nbsp;&nbsp;n i e&nbsp;&nbsp;u j d z i e s z.&nbsp;&nbsp;W i e r z a j.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0712',
                        'name' => 'XII Lipca',
                        'content' => 'O godzeniu si&#281; z wol&#261; Bo&#380;&#261;.',
                        'author' => '&#8222;O tyle Pan B&#243;g rzecz ka&#380;d&#261; zwykle ceni, o ile si&#281; ta z my&#347;l&#261; Bo&#380;&#261; godzi, i o ile cz&#322;owiek, jako narz&#281;dzie, przy jej wykonaniu z Bogiem si&#281; &#322;&#261;czy.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 1).',
                        'description2' => 'Nie ka&#380;dy potrafi rozr&#243;&#380;ni&#263; dyament od szk&#322;a, szczere z&#322;oto od podrobionego, ogie&#324; zmy&#347;lony od prawdziwego. Samo patrzenie nie wystarcza, potrzeba tu pewnej wprawy, pewnego do&#347;wiadczenia. Podobnie i w rzeczach duchowych, aby je rozr&#243;&#380;ni&#263;, nie zwyk&#322;ego, ale Boskiego potrzeba &#347;wiat&#322;a. Po&#380;&#261;dasz wyniesienia si&#281;, a nie wiesz &#380;e po&#380;&#261;dasz dla siebie zguby; chorujesz na zawr&#243;t g&#322;owy, wi&#281;c z wysoko&#347;ci spadniesz. Wy&#380;szy &#243;w stopie&#324;, o kt&#243;ry ci idzie, bezpieczniejszym dla ciebie nie jest; bo ci&#281; nie z Bogiem, ale z pr&#243;&#380;no&#347;ci&#261; po&#322;&#261;czy. S&#261;dy Boga s&#261; przepa&#347;ci&#261; niezg&#322;&#281;bion&#261;; gdyby&#347; je pozna&#322;, toby&#347; si&#281; przekona&#322;, o ile bezpieczniej jest dla ciebie, urz&#281;du, o kt&#243;ry ci tak mocno idzie, nie mie&#263;; stopnia, za kt&#243;rym tak wzdychasz, nie otrzyma&#263;. Z d a j&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n a&nbsp;&nbsp;B o g a. C&#243;&#380; dro&#380;szego nad z&#322;oto? &#8212; Bogaci &#8212; wzrok napawa, ale &#380;o&#322;&#261;dka nie zasyca; po&#380;yteczniejsz&#261; jest do zjedzenia sk&#243;rka chleba, ni&#380; funt z&#322;ota. Im &#347;rodek do osi&#261;gni&#281;cia celu jest odpowiedniejszy, tem po&#380;yteczniejszy. Co ci&#281; z Bogiem bardziej &#322;&#261;czy, jak poznasz? &#346;lepym jeste&#347; w twej w&#322;asnej sprawie. B &#243; g&nbsp;&nbsp;c a &#322; y&nbsp;&nbsp;j e s t&nbsp;&nbsp;o k i e m.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0713',
                        'name' => 'XIII Lipca',
                        'content' => 'O niezra&#380;aniu si&#281; osch&#322;o&#347;ci&#261;.',
                        'author' => '&#8222;Cz&#322;owiek oddany modlitwie, ani osch&#322;o&#347;ci&#261; niechaj si&#281; nie zra&#380;a, ani z pociech niech si&#281; nie wynosi: w osch&#322;o&#347;ci niechaj wspomni na &#322;aski, kt&#243;rych poprzednio dozna&#322;, pociechy niechaj uwa&#380;a za ja&#322;mu&#380;n&#281; darmo sobie od Boga udzielon&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Nie zawsze niebo ja&#347;nieje t&#261; sam&#261; pogod&#261;, bardzo cz&#281;sto powleka si&#281; czarnemi chmurami: z lud&#378;mi, kt&#243;rzy si&#281; oddaj&#261; modlitwie bywa podobnie: a l b o&nbsp;&nbsp;d o z n a j &#261;&nbsp;&nbsp;p o c i e c h,&nbsp;&nbsp;a l b o&nbsp;&nbsp;c z u j &#261;&nbsp;&nbsp;o s c h &#322; o &#347; &#263;. I&nbsp;&nbsp;j e d n o&nbsp;&nbsp;i&nbsp;&nbsp;d r u g i e&nbsp;&nbsp;z&nbsp;&nbsp;n i e b a. Przybywa B&#243;g, aby do mi&#322;owania zach&#281;ci&#322;; odst&#281;puje, aby&#347;my w&#322;asne si&#322;y poznali. Przybywa, aby mi&#322;owanie nasze nagrodzi&#322;; odst&#281;puje, aby do&#347;wiadczy&#322;, czy bez nagrody mi&#322;owa&#263; go b&#281;dziemy. Przybywa, aby przedsmak nieba sprawi&#322;; odst&#281;puje, aby pokaza&#322;, jak gorzko jest &#380;y&#263; bez Boga. W obu razach ten sam B&#243;g. O cenie modlitwy ani osch&#322;o&#347;&#263;, ani pociecha nie stanowi. Ani ta lepsza, kt&#243;ra w pociechy obfitsza; ani ta, kt&#243;ra suchsza, jest zaraz gorsza. W a r t o &#347; &#263;&nbsp;&nbsp;k a &#380; d e j&nbsp;&nbsp;n a d a j e&nbsp;&nbsp;w o l a&nbsp;&nbsp;n a s z a. Jak w ludzkich, tak w Boskich sprawach po smutnych nast&#281;puj&#261; radosne i odwrotnie, albo dlatego, &#380;e tak&#261; jest Bo&#380;a wola, &#380;e B&#243;g sobie w takiej rozmaito&#347;ci podoba; albo te&#380; dlatego, aby zawsze jeden, zawsze niezmienny stan, nie wyrodzi&#322; zniech&#281;cenia, nie wbija&#322; w pych&#281;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0714',
                        'name' => 'XIV Lipca',
                        'content' => 'O godzeniu &#380;arliwo&#347;ci z po&#380;ytkiem.',
                        'author' => '&#8222;Zaj&#281;ci dusz zbawieniem tak powinni post&#281;powa&#263;, aby si&#281; mi&#322;ymi nietylko Bogu, ale i ludziom dla Boga stali, i aby &#380;arliwo&#347;&#263; o chwa&#322;&#281; Bo&#380;&#261;, z po&#380;ytkiem bli&#378;niego godzili.&#8221;',
                        'description' => '(S. Ignat. apud Bart).',
                        'description2' => 'Siostrami s&#261; cnoty, nie walcz&#261; ze sob&#261;, spokojnie w tem samem sercu mieszkaj&#261;. Mi&#322;o&#347;&#263; Boga nie sprzeciwia si&#281; w niczem mi&#322;o&#347;ci bli&#378;niego; jedna wspiera drug&#261; i, jakby ogniwa w &#322;a&#324;cuchu, nierozdzielnym &#322;&#261;cz&#261; si&#281; w&#281;z&#322;em. Gdy z wielu s&#322;uszn&#261; obraz&#261; szuka si&#281; chwa&#322;y Boga, nie jest to gorliwo&#347;&#263;, ale nami&#281;tno&#347;&#263;, che&#322;pliwo&#347;&#263;, pycha; tem obrzydliwsza przed Bogiem, im wi&#281;kszem jest nadu&#380;yciem wyst&#281;pki os&#322;ania&#263; cnot&#261;. G d y b y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;b y &#322;&nbsp;&nbsp;p o d o b a &#322;&nbsp;&nbsp;l u d z i o m,&nbsp;&nbsp;n i e&nbsp;&nbsp;b y &#322; b y&nbsp;&nbsp;C h r y s t u s a&nbsp;&nbsp;s &#322; u g &#261;&nbsp;&nbsp;A p o s t o &#322; <sup>1</sup>: to jest, gdyby by&#322; wzgl&#281;dy ludzkie za cel uwa&#380;a&#322;, gdyby by&#322; dla swojej korzy&#347;ci, lub przyjemno&#347;ci to czyni&#322;. O wzgl&#281;dy ludzkie sposobem godziwym bez wy&#322;&#261;czania cnoty stara&#263; si&#281; mo&#380;na, owszem potrzeba, aby&#347;my je pozyskawszy, pozyskali tak&#380;e serca i zaszczepili w nich ku Bogu mi&#322;o&#347;&#263;. T e n&nbsp;&nbsp;c i &#281;&nbsp;&nbsp;n i e&nbsp;&nbsp;u s &#322; u c h a,&nbsp;&nbsp;k t o&nbsp;&nbsp;c i &#281;&nbsp;&nbsp;n i e&nbsp;&nbsp;n a w i d z i.',
                        'description3' => '1) Galat. 1, 10.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0715',
                        'name' => 'XV Lipca',
                        'content' => 'O wsp&#243;&#322;czuciu dla drugich.',
                        'author' => '&#8222;Dla wyst&#281;pnych takie miej wsp&#243;&#322;czucie, jakie ma dobra matka dla chorego syna; jak mo&#380;e tak mu chorob&#281; os&#322;adza: pilno&#347;ci&#261; sw&#261;, czujno&#347;ci&#261;, bardzo si&#281; do jej usuni&#281;cia lub b&#243;l&#243;w zmniejszenia przyczynia.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'O ile trudniej lecz&#261; si&#281; choroby duszy, ni&#380; cia&#322;a; o tyle wi&#281;cej wciska si&#281; pomy&#322;ek przy leczeniu duszy, ni&#380; przy leczeniu cia&#322;a. W obu razach przez niesposobno&#347;&#263; lekarzy. W leczeniu dusz to miej za podstaw&#281;: &#380; e&nbsp;&nbsp;z &#322; e m u&nbsp;&nbsp;l e k a r s t w o&nbsp;&nbsp;w t e d y&nbsp;&nbsp;d o p i e r o&nbsp;&nbsp;o k a &#380; e&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;s k u t e c z n em,&nbsp;&nbsp;g d y&nbsp;&nbsp;m u&nbsp;&nbsp;j e&nbsp;&nbsp;p o d a&nbsp;&nbsp;t e n,&nbsp;&nbsp;k o g o&nbsp;&nbsp;o n&nbsp;&nbsp;l u b i. Przed zabraniem si&#281; do wykorzeniania wyst&#281;pk&#243;w, nale&#380;y naprz&#243;d pozyska&#263; serce wyst&#281;pnego. Paznogie&#263; w ranie powi&#281;ksza b&#243;l, nie usuwa. Ci&#261;g&#322;e dokuczanie, jak b&#243;l, tak nienawi&#347;&#263; roznieca. Zr&#281;cznie i lekko dotyka&#263; nale&#380;y wrzod&#243;w, inaczej niezno&#347;nem b&#281;dzie leczenie. Patrz, nieszcz&#281;&#347;liwy chwieje si&#281; pod ci&#281;&#380;arem. Je&#347;li go popchniesz, upadnie; je&#347;li mu podasz pomocn&#261; r&#281;k&#281;, utrzymasz, od upadku uchronisz. W z g l &#261; d&nbsp;&nbsp;m i e &#263;&nbsp;&nbsp;n a l e &#380; y&nbsp;&nbsp;n a&nbsp;&nbsp;c z a s,&nbsp;&nbsp;n a&nbsp;&nbsp;w i e k,&nbsp;&nbsp;i&nbsp;&nbsp;n a&nbsp;&nbsp;k r e w k o &#347; &#263;&nbsp;&nbsp;l u d z k &#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0716',
                        'name' => 'XVI Lipca',
                        'content' => 'O nieprzecenianiu spraw w&#322;asnych.',
                        'author' => '&#8222;W ocenianiu spraw, kt&#243;re dokonujemy, aby nas mi&#322;o&#347;&#263; w&#322;asna nie uwodzi&#322;a, nale&#380;y je uwa&#380;a&#263; jako cudze, nie jako swoje: tym sposobem wyrok wypadnie s&#322;uszny, podyktuje go rozs&#261;dek, nie uczucie.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Oczy cia&#322;a tak natura urz&#261;dzi&#322;a, &#380;e chocia&#380; wszystko inne widz&#261;, siebie jednak widzie&#263; nie mog&#261;. Podobnie si&#281; rzecz ma i z okiem my&#347;li, s&#261;d o innych mo&#380;na mu powierzy&#263;, ale o sobie samem &#8212; nigdy. Ka&#380;demu swoje milsze, ni&#380; drugich; ka&#380;dy ch&#281;tnie na to patrzy, ch&#281;tnie si&#281; tem zajmuje, co sam zrobi&#322;. Co jest bli&#380;ej, wydaje si&#281; wi&#281;kszem; w oddaleniu, maleje. J a k&nbsp;&nbsp;t o b i e&nbsp;&nbsp;n i k t&nbsp;&nbsp;o d&nbsp;&nbsp;c i e b i e&nbsp;&nbsp;n i e&nbsp;&nbsp;j e s t&nbsp;&nbsp;b l i &#380; s z y m,&nbsp;&nbsp;t a k&nbsp;&nbsp;n i k t&nbsp;&nbsp;d r o &#380; s z y m. Z&#322;ym w rzeczach w&#261;tpliwych s&#281;dzi&#261; jest serce, na t&#281; stron&#281; wag&#281; przechyla, na kt&#243;r&#261; si&#281; samo przechyla, o ile nie dostaje z zas&#322;ugi, o tyle przydaje z &#322;aski; c&#243;&#380; dziwnego, &#380;e przewa&#380;y? Tem szczerzej ka&#380;dy siebie mi&#322;uje, im si&#281; bardziej w&#322;asnej mi&#322;o&#347;ci pozbywa. W ten spos&#243;b, co dobrem jest, nie co si&#281; dobrem wydaje, b&#281;dziesz dla siebie pragn&#261;&#322;. J e &#347; l i&nbsp;&nbsp;p &#243; j d z i e s z&nbsp;&nbsp;z a&nbsp;&nbsp;w &#322; a s n &#261;&nbsp;&nbsp;w o l &#261;&nbsp;&nbsp;n a&nbsp;&nbsp;o &#347; l e p,&nbsp;&nbsp;d o k &#261; d &#380; e&nbsp;&nbsp;o n a&nbsp;&nbsp;c i e b i e&nbsp;&nbsp;n i e&nbsp;&nbsp;z a p r o w a d z i?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0717',
                        'name' => 'XVII Lipca',
                        'content' => 'O uciekaniu si&#281; do Boga.',
                        'author' => '&#8222;Ani rozmowy, ani dowody, cho&#263;by najwyszuka&#324;sze, tyle nas nie naucz&#261;, ile pokorna do Boga ucieczka.&#8221;',
                        'description' => '(S. Ignat. apud Nolar.)',
                        'description2' => 'Nie &#322;ud&#378;my si&#281; nadziej&#261; znalezienia prawdziwej wiedzy w szumnych ludzkiej m&#261;dro&#347;ci s&#322;owach, albo w ksi&#261;&#380;kach. &#377;r&#243;d&#322;a jej gdzieindziej szuka&#263; nale&#380;y, tam mianowicie, gdzie jest skarb m&#261;dro&#347;ci i umiej&#281;tno&#347;ci Bo&#380;ej zakryty <sup>1</sup>. Bibliotek&#261; Bonawentury by&#322; Ukrzy&#380;owany; wi&#281;cej si&#281; on ztamt&#261;d modlitw&#261; nauczy&#322;, ni&#380; inni z tysi&#261;ca ksi&#261;g nauczy&#263;by si&#281; mogli. Nic przez to nauce nie uw&#322;aczamy, gdy tyle pobo&#380;no&#347;ci przyznajemy. Nauka, kt&#243;ra swej si&#322;y nie czerpie w pobo&#380;no&#347;ci, nie na wiele si&#281; przyda: jak nie ka&#380;de nasienie p&#322;odne, tak nie ka&#380;da nauka po&#380;yteczna: nazw&#281; nauki nosi, ale korzy&#347;ci nie przynosi, jak skarb ukryty, z kt&#243;rego nikt nie u&#380;ytkuje &#8212; k t &#243; r y&nbsp;&nbsp;j e s t,&nbsp;&nbsp;j a k b y&nbsp;&nbsp;n i e&nbsp;&nbsp;b y &#322;. Wielu uczonych ma&#322;&#261; ze swej nauki korzy&#347;&#263; odnosz&#261;, po tylu latach studyom po&#347;wi&#281;conych bezp&#322;odny zawsze grunt orz&#261;, a lubo du&#380;o posieli, ma&#322;o zbieraj&#261;, i wi&#281;cej k&#261;kolu, ni&#380; zbo&#380;a: b o&nbsp;&nbsp;b e z&nbsp;&nbsp;b &#322; o g o s &#322; a w i e &#324; s t w a&nbsp;&nbsp;B o &#380; e g o&nbsp;&nbsp;p r a c a&nbsp;&nbsp;n i e&nbsp;&nbsp;p l o n u j e <sup>2</sup>.',
                        'description3' => '1) Kolos. 2, 3.<br/>
    2) Psalm 126, 1.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0718',
                        'name' => 'XVIII Lipca',
                        'content' => 'O nieust&#281;powaniu z&#322;emu duchowi.',
                        'author' => '&#8222;Twoja ma&#322;oduszno&#347;&#263; z&#322;ego ducha o&#347;miela: tak samo, jak &#347;mia&#322;emi si&#281; staj&#261; niewiasty, gdy zobacz&#261; bezsilnych niewie&#347;ciuch&#243;w.&#8221;',
                        'description' => '(S. Ignat. in Exerc.)',
                        'description2' => 'Takim wzgl&#281;dem nas jest duch z&#322;y, jakim go sami mie&#263; chcemy. Traci odwag&#281;, gdy my jej nabieramy; uzuchwala si&#281;, natarczywszym si&#281; staje, gdy my upadamy na duchu. W skutek naszej ma&#322;oduszno&#347;ci staje si&#281; silniejszym, a w skutek si&#322;y s&#322;abszym. Jeste&#347;my nieroztropnymi, siebie samych najwi&#281;kszymi nieprzyjacio&#322;mi; gdy zamiast wrogowi bro&#324; t&#281;pi&#263;, my j&#261; ostrzymy, zamiast pozbawia&#263; go &#347;rodk&#243;w szkodzenia nam, my ich dostarczamy. N i e&nbsp;&nbsp;m i a &#322; b y&nbsp;&nbsp;p r z e c i w&nbsp;&nbsp;n a m&nbsp;&nbsp;s i &#322; y,&nbsp;&nbsp;g d y b y &#347; m y&nbsp;&nbsp;n i e&nbsp;&nbsp;c h c i e l i,&nbsp;&nbsp;g d y b y &#347; m y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;o p a r l i. Kto si&#281; l&#281;ka, ten ju&#380; na wp&#243;&#322; i z lepszej swej strony jest pokonany; nie si&#322;&#261; nieprzyjaciela, ale w&#322;asn&#261; gnu&#347;no&#347;ci&#261;. I kt&#243;&#380;by si&#281; nad takim niebacznym szermierzem litowa&#322;? Zuchwa&#322;ym i nieub&#322;aganym jest nieprzyjaciel, ale dla l&#281;kliwego; je&#347;li ust&#281;pujesz, on naciera: oprzyj si&#281;, a nie zaszkodzi, mo&#380;e nawet pokusy zaniecha. P o r a &#380; k i&nbsp;&nbsp;b o w i e m&nbsp;&nbsp;n i e&nbsp;&nbsp;l u b i,&nbsp;&nbsp;i&nbsp;&nbsp;w o l i&nbsp;&nbsp;n i e&nbsp;&nbsp;r o z p o c z y n a &#263;&nbsp;&nbsp;w a l k i,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;w i d z i e &#263;&nbsp;&nbsp;z w y c i &#281; &#380; o n y m.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0719',
                        'name' => 'XIX Lipca',
                        'content' => 'O strofowaniu.',
                        'author' => '&#8222;Przy strofowaniu potrzeba, aby strofuj&#261;cy mia&#322; odpowiedni&#261; w&#322;adz&#281;, albo &#380;eby strofowany wiedzia&#322;, i&#380; on to czyni z mi&#322;o&#347;ci ku niemu.&#8221;',
                        'description' => '(S. Ignatius apud Bar.)',
                        'description2' => 'Tyle na &#347;wiecie kar, tyle wsz&#281;dzie wi&#281;zie&#324;, a jak ma&#322;a poprawa! Mniejby by&#322;o winnych, gdyby rzadszemi by&#322;y kary. Strach nie poprawia: m&#281;czy&#263;, zabi&#263;, to znaczy zbrodni&#281; przeci&#261;&#263;, nie poprawi&#263;. Mi&#322;o&#347;&#263; poprawiaj&#261;cego wi&#281;cej tu nier&#243;wnie zdzia&#322;a&#263; mo&#380;e. Wachlarz ognia nie gasi, ale p&#322;omie&#324; wywo&#322;uje; woda kroplami na ogie&#324; ciskana, raczej ogie&#324; wzmacnia, ni&#380; os&#322;abia: r&#243;wnie&#380; strofowanie, gdy nam zbywa na odpowiedniej w&#322;adzy, gdy nie mamy do tego prawa; raczej umys&#322; rozdra&#380;nia, ni&#380; uspakaja. Aby&#347; drugiego poprawi&#322;, musisz mie&#263; na to odpowiedni&#261; powag&#281;, kt&#243;rej ci nie nada ani w&#322;asne twoje mniemanie, ani sam wiek, ani pycha; ale cnota. Nie poprawi drugiego, kto sam potrzebuje poprawy; winien by&#263; bez wady, kto z wady drugich chce poprawia&#263;. Je&#347;li ju&#380; masz tak&#261; do poprawiania &#347;wierzbi&#261;czk&#281;, oto rada: nie przebieraj miary, nie posuwaj si&#281; za daleko, w siebie samego wnikaj, w&#322;asne post&#281;powanie roztrz&#261;saj. Ach, jak&#380;e wiele znajdziesz do poprawy! N i m&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p r z e t o&nbsp;&nbsp;w e &#378; m i e s z&nbsp;&nbsp;d o&nbsp;&nbsp;&#380; n i w a&nbsp;&nbsp;n a&nbsp;&nbsp;c u d z e m&nbsp;&nbsp;p o l u,&nbsp;&nbsp;p i e r w i e j&nbsp;&nbsp;n a&nbsp;&nbsp;s w o j e m&nbsp;&nbsp;w s z y s t k o&nbsp;&nbsp;p o p r z &#261; t a j.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0720',
                        'name' => 'XX Lipca',
                        'content' => 'O bogactwach.',
                        'author' => '&#8222;Kto dla Boga wszystkiego opu&#347;ci&#263; nie chce; niech wszystko przynajmniej ku niemu odnosi, za wszystko dzi&#281;kuje; na poz&#243;r to wiele, a w istocie mniej, ni&#380; ono jedno, o kt&#243;rem Chrystus powiedzia&#322;, &#380;e jest niezb&#281;dne.&#8221;',
                        'description' => '(S. Ignat. apud Bart. fol. 378).',
                        'description2' => 'Jakkolwiek trudno <sup>1</sup>, nie jest jednak niemo&#380;ebnem przy bogactwach niebo sobie otworzy&#263;. S&#261; one przeszkod&#261;, nie zagub&#261; zbawienia; z&#322;emi nie s&#261;, chyba &#380;e je takiemi uczyni u&#380;ywanie lub przywi&#261;zanie. Maj&#261; i bogactwa swoj&#261; dobr&#261; stron&#281;. Kt&#243;&#380;by biednego wspar&#322;, kt&#243;&#380;by &#347;wi&#261;tynie i o&#322;tarze wznosi&#322;; gdyby ubogimi byli wszyscy? Gdyby nie by&#322;o bogatych, nie &#380;yliby ubodzy; bo znik&#261;d nie mieliby pomocy, niktby ich nie wspiera&#322;. Nie wszystkich do tego samego doskona&#322;o&#347;ci stopnia powo&#322;a&#322; B&#243;g. Kto chce by&#263; najlepszym, niech si&#281; stara, aby w tym stopniu, na kt&#243;rym go B&#243;g umie&#347;ci&#322;, by&#322; dobrym; bo nie zaraz z&#322;y, kto nie najlepszy. Nie tak na bogactwa patrze&#263; nale&#380;y, jak na serce. Cz&#281;sto mniej jest wart bogacz przy klejnotach i z&#322;ocie, ni&#380; ubogi przy swym p&#322;ugu; i o tyle bogacz wi&#281;kszej godzien jest pogardy, o ile lichszem jest to, w czem si&#281; do szale&#324;stwa rozmi&#322;owa&#322;.',
                        'description3' => '1) &#346;. Mateusz 19, 23.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0721',
                        'name' => 'XXI Lipca',
                        'content' => 'O potrzebach cia&#322;a.',
                        'author' => '&#8222;Zar&#243;wno przed Bogiem zda&#263; trzeba rachunek, czy cia&#322;o nasze wyniszczamy przez zmys&#322;owo&#347;&#263;, czy przez zbytni&#261; surowo&#347;&#263;, chocia&#380;by si&#281; ta wed&#322;ug nas podejmowa&#322;a dla chwa&#322;y Bo&#380;ej i zas&#322;ugi naszej.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Czy surowo&#347;ci&#261;, czy zmys&#322;owo&#347;ci&#261; pr&#281;dzej niszczy si&#281; cia&#322;o, jest-to zagadka do rozwi&#261;zania trudna. W pierwszym razie bole&#347;nie, w drugim przyjemnie przy&#347;piesza mu si&#281; zguba; ale w obu razach przy&#347;piesza. &#379;elazo si&#281; niszczy i w skutek u&#380;ywania, i w skutek rdzy, nie tym samym sposobem, ale z t&#261; sam&#261; szkod&#261;. Wi&#281;cej zabiera ob&#380;arstwo, ni&#380; miecz. Rozpusta liczb&#281; nies&#322;ychan&#261; ofiar poch&#322;ania, przyjemnie, ale bardzo zgubnie. Cia&#322;u na poz&#243;r dogadza, a w rzeczy samej psuje, si&#322;y wycie&#324;cza, choroby sprowadza, &#380;ycie skraca. Cia&#322;o nasze jest w&#322;asno&#347;ci&#261; wielkiego Boga, dan&#261; nam w opiek&#281;; bez pope&#322;nienia zbrodni nie mo&#380;emy go ani na niebezpiecze&#324;stwo wystawia&#263;, ani wed&#322;ug naszego widzimisi&#281; niem rozrz&#261;dza&#263;. Przyjdzie B&#243;g i za&#380;&#261;da rachunku z opieki naszej nad niem. Panie! jestem jako mu&#322; przed tob&#261;. Z rozkazu Pana winienem wzgl&#261;d mie&#263; na siebie: co mu&#322;owi, to si&#281; i cia&#322;u nale&#380;y; &#380;eby do d&#378;wigania ci&#281;&#380;ar&#243;w by&#322;o sposobne, &#380;eby rozkazy ducha mog&#322;o spe&#322;nia&#263;; potrzebuje odpowiedniego pokarmu, stosownego wypoczynku. C o&nbsp;&nbsp;r o z s &#261; d e k&nbsp;&nbsp;k a &#380; e,&nbsp;&nbsp;c z e g o&nbsp;&nbsp;s &#322; u s z n o &#347; &#263;&nbsp;&nbsp;w y m a g a;&nbsp;&nbsp;n a&nbsp;&nbsp;t e m&nbsp;&nbsp;m u&nbsp;&nbsp;z b y w a &#263;&nbsp;&nbsp;n i e&nbsp;&nbsp;p o w i n n o.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0722',
                        'name' => 'XXII Lipca',
                        'content' => 'O niezajmowaniu si&#281; cudzemi wadami.',
                        'author' => '&#8222;Im kto jest skorszym do wnikania w wady cudze, tem zwykle bywa opieszalszym w poznawaniu swoich.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Na co si&#281; przyda zna&#263; wszystkich, je&#347;li siebie nie znasz? Chcesz, &#380;eby wszyscy byli bez skazy, a na swoje nie zwa&#380;asz. W&nbsp;&nbsp;o k u&nbsp;&nbsp;b l i &#378; n i e g o&nbsp;&nbsp;&#378; d &#378; b &#322; o&nbsp;&nbsp;w i d z i s z,&nbsp;&nbsp;a&nbsp;&nbsp;w e&nbsp;&nbsp;w &#322; a s n e m&nbsp;&nbsp;i&nbsp;&nbsp;b e l k i&nbsp;&nbsp;n i e&nbsp;&nbsp;d o s t r z e g a s z <sup>1</sup>. S&#261; jak chrab&#261;szcze ci wszyscy, kt&#243;rzy bez ustanku innych upadki &#347;ledz&#261;, i ca&#322;y czas swego &#380;ycia na szarpaniu cudzych obyczaj&#243;w trawi&#261;. Nikt do tyla wyst&#281;pnym nie jest, aby w sobie czego&#347; nie mia&#322;, coby nie zas&#322;ugiwa&#322;o na pochwa&#322;&#281;; czemu bardziej na jego wady ni&#380; na cnoty patrzysz? O t o&nbsp;&nbsp;d l a t e g o,&nbsp;&nbsp;&#380; e&nbsp;&nbsp;o k o&nbsp;&nbsp;t w o j e&nbsp;&nbsp;z &#322; e&nbsp;&nbsp;j e s t <sup>2</sup>. Kto jest dobrym, ten dobrze o innych trzyma; i nikt tak do zn&#281;cania si&#281; nad b&#322;&#281;dami drugich nie jest got&#243;w, jak ten, kt&#243;ry ich sam ma najwi&#281;cej; z&nbsp;&nbsp;s i e b i e&nbsp;&nbsp;w n i o s k u j e&nbsp;&nbsp;o&nbsp;&nbsp;d r u g i c h.',
                        'description3' => '1) &#346;. Mateusz 7, 5.<br/>
    2) &#346;. Mateusz 20, l5.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0723',
                        'name' => 'XXIII Lipca',
                        'content' => 'O dobrej s&#322;awie.',
                        'author' => '&#8222;Pochwa&#322;a s&#322;awy i cnoty przez m&#281;&#380;a powa&#380;nego, wielu bardziej ni&#380; sama cnota do mi&#322;o&#347;ci w&#322;asnej pobudza.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Umys&#322; wielki o imi&#281; dobre i s&#322;aw&#281; dobr&#261; bardzo jest troskliwy, wszelkich si&#322; dok&#322;ada, aby je przekaza&#322; wiekom potomnym bez skazy. &#379;ycie dobre jest nam potrzebne, dla nas; s&#322;awa dobra, dla innych. Bez niej nie wiele cz&#322;owiek doka&#380;e, chocia&#380;by by&#322; w wysokim stopniu &#347;wi&#281;to&#347;ci. S&#322;aw&#261; bardziej ni&#380; broni&#261; za&#322;atwiaj&#261; si&#281; i wojny i inne sprawy. S&#322;aw&#281; dobr&#261; naby&#263; mo&#380;na tylko &#380;yciem dobrem; strona wewn&#281;trzna, kt&#243;r&#261; zna tylko B&#243;g, stanowi o naszej cenie; strona zewn&#281;trzna o naszej s&#322;awie. Z tego, co si&#281; oczom przedstawia, co pod zmys&#322;y podpada, s&#261;dz&#261; nas ludzie <sup>1</sup>. S t r z e &#380;&nbsp;&nbsp;s i &#281;,&nbsp;&nbsp;a b y &#347;&nbsp;&nbsp;s o b i e&nbsp;&nbsp;i&nbsp;&nbsp;d r u g i m&nbsp;&nbsp;n i e&nbsp;&nbsp;z a s z k o d z i &#322;. Z&#322;ej s&#322;awy, podobnie jak ognia, ukry&#263; nie mo&#380;na; rozchodzi si&#281; na wsze strony, leci jak ptak, trudno j&#261; odwo&#322;a&#263;, nawet stoma s&#322;owami. Delikatn&#261; jest s&#322;awa, piecz&#281; o ni&#261; mie&#263; nale&#380;y wi&#281;ksz&#261;, ni&#380; o bogactwa, chocia&#380;by najwi&#281;ksze.',
                        'description3' => '1) I. Kr&#243;l. 16, 7.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0724',
                        'name' => 'XXIV Lipca',
                        'content' => 'O zach&#281;tach do cnoty.',
                        'author' => '&#8222;Malcy nawet podarunkami i &#322;akociami, jako tem co si&#281; podoba i smakuje, mog&#261; by&#263; da cnoty zach&#281;cani.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Od m&#322;odo&#347;ci do cnoty nawykn&#261;&#263;, wielkim jest &#380;ycia poczciwego zadatkiem. Z trudno&#347;ci&#261; w latach starszych porzucaj&#261; si&#281; obyczaje, do kt&#243;rych nawykli&#347;my w m&#322;odszych. Tak, we&#322;na kolor sw&#243;j pierwotny nie &#322;atwo zmienia. Kto si&#281; wcze&#347;nie m&#322;odzie&#380;&#261; nie zaj&#261;&#322;; kto od lat najm&#322;odszych pieczy o niej nie mia&#322;; ten odpowiedni czas po temu straci&#322;. Prawda, &#380;e m&#322;odo&#347;&#263; wzdryga si&#281; przed surowo&#347;ci&#261;: milczenie, powaga, skromno&#347;&#263;, cicho&#347;&#263;, s&#261; dla niej m&#281;czarni&#261;. Potrzeba pewnej sztuki, aby to wszystko uczyni&#263; jej mi&#322;em, a przynajmniej nie tyle wstr&#281;tnem. Jak ptaki &#322;api&#261; si&#281; na &#380;er, kt&#243;ry lubi&#261;; tak m&#322;odzie&#380; rzeczami zabawnemi do powa&#380;nych prowadzi&#263; nale&#380;y. T&#261; sztuk&#261; podszed&#322; swoich A p o s t o &#322;,&nbsp;&nbsp;s t a w s z y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;w s z y s t k i e m&nbsp;&nbsp;d l a&nbsp;&nbsp;w s z y s t k i c h <sup>1</sup>. Pochlebstwami chorego zjednywa lekarz, aby si&#281; zgodzi&#322; na spos&#243;b leczenia, kt&#243;ry jest niezb&#281;dny w danym przypadku. C&#243;&#380; na tem zale&#380;y, czy &#380;artem, czy seryo; czy gro&#378;bami, czy podarunkami sk&#322;onisz malca; byleby si&#281; tylko uczy&#322; tego, co z jego jest korzy&#347;ci&#261;, co mu jest potrzebne.',
                        'description3' => '1) I. Kor. 9, 22.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0725',
                        'name' => 'XXV Lipca',
                        'content' => 'O unikaniu k&#322;&#243;tni.',
                        'author' => '&#8222;Lepiej jest pro&#347;b&#261; lub pieni&#281;dzmi, ni&#380; k&#322;&#243;tni&#261; otrzyma&#263; to, czego pragniesz.&#8221;',
                        'description' => '(S. Ignat. apud Ribad. in Vita).',
                        'description2' => 'K&#322;&#243;tnie wi&#281;cej ci&#261;gn&#261; za sob&#261; przykro&#347;ci ni&#380; korzy&#347;ci, i je&#347;li s&#281;dziom i obro&#324;com s&#261; na r&#281;k&#281;, to k&#322;&#243;c&#261;cym si&#281; szkodz&#261; bardzo, bo ich r&#243;&#380;ni&#261; ze sob&#261;. Skutek k&#322;&#243;tni zawsze niepewny, a szkody pewne; korzy&#347;ci w&#261;tpliwe, a straty niezawodne &#8212; i kt&#243;&#380;by tak w&#261;t&#322;ej &#322;odzi siebie i swoj&#261; w&#322;asno&#347;&#263; powierza&#322;? W &#347; r &#243; d&nbsp;&nbsp;n i e s n a s e k&nbsp;&nbsp;&#380; y &#263;,&nbsp;&nbsp;n i e s z c z &#281; &#347; c i e m&nbsp;&nbsp;j e s t,&nbsp;&nbsp;n i e&nbsp;&nbsp;&#380; y c i e m. Pok&#243;j jest najlepsz&#261; z rzeczy, jakie cz&#322;owiekowi da&#322;a natura. Pozbawia&#263; si&#281; jej dla p&#322;onnej nadziei, jest jak najgorszem gospodarstwem: b o&nbsp;&nbsp;t o&nbsp;&nbsp;z n a c z y&nbsp;&nbsp;w i &#281; c e j&nbsp;&nbsp;s t r a c i &#263;,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;z y s k a &#263;. Dwojak&#261; szkod&#281; ka&#380;da k&#322;&#243;tnia za sob&#261; poci&#261;ga: pierwsz&#261; jest zmniejszenie albo i zupe&#322;ne zabicie mi&#322;o&#347;ci, drug&#261; strata czasu, je&#347;li nadto nie strata pieni&#281;dzy. W e &#378;&nbsp;&nbsp;t o&nbsp;&nbsp;n a&nbsp;&nbsp;u w a g &#281;&nbsp;&nbsp;i&nbsp;&nbsp;z a n i e c h a j&nbsp;&nbsp;k &#322; &#243; t n i,&nbsp;&nbsp;o&nbsp;&nbsp;k t &#243; r e j&nbsp;&nbsp;m y &#347; l a &#322; e &#347;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0726',
                        'name' => 'XXVI Lipca',
                        'content' => 'O poskramianiu &#380;&#261;dz.',
                        'author' => '&#8222;Umartwieniom obudw&#243;m oddawa&#263; si&#281; nale&#380;y; z t&#261; jednak r&#243;&#380;nic&#261;, &#380;e wewn&#281;trznemu g&#322;&#243;wnie, ci&#261;gle i wszyscy oddawa&#263; si&#281; maj&#261;; zewn&#281;trznemu o tyle, o ile wymaga okoliczno&#347;&#263; osoby, miejsca i czasu.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Niepow&#347;ci&#261;gliwo&#347;&#263; &#380;&#261;dz jest przyczyn&#261; wszystkich nieszcz&#281;&#347;&#263;, jakie &#347;wiat trapi&#261;; zatem idzie, &#380;e ich poskramianie za pomoc&#261; umartwienia jest dobrem nietylko osobistem, ale i og&#243;lnem. Jeden nieposkromionego serca pop&#281;d, ile&#380; z&#322;ego wyrz&#261;dza! jedna &#380;&#261;dza panowania, iloma&#380; wojnami &#347;wiat zakrwawi&#322;a! Niemniejsze i w ma&#322;ym &#347;wiecie, jakim jest cz&#322;owiek, niebezpiecze&#324;stwo. Kto pragnie pokoju, niech &#380;&#261;dzom podyktuje prawo, poza kt&#243;re przekroczy&#263; nie by&#322;oby im wolno. Nikt nie wie, ile przynosz&#261; korzy&#347;ci &#380;&#261;dze, gdy s&#261; w karbach trzymane; dop&#243;ki nie do&#347;wiadczy, ile sprawiaj&#261; nieszcz&#281;&#347;&#263;, gdy s&#261; puszczone samopas. Serce nasze, przybytek Boga, czynimy tylu dzikich zwierz&#261;t jaskini&#261;, ile nieuskromionych &#380;&#261;dz w niem piel&#281;gnujemy. Z w i e r z &#281; c e&nbsp;&nbsp;s &#261;&nbsp;&nbsp;i&nbsp;&nbsp;o d&nbsp;&nbsp;z w i e r z &#261; t&nbsp;&nbsp;g o r s z e;&nbsp;&nbsp;b o&nbsp;&nbsp;j a r z m o&nbsp;&nbsp;r o z u m u,&nbsp;&nbsp;k t &#243; r e g o&nbsp;&nbsp;z w i e r z &#281; t a&nbsp;&nbsp;s &#261;&nbsp;&nbsp;p o z b a w i o n e,&nbsp;&nbsp;z e&nbsp;&nbsp;s i e b i e&nbsp;&nbsp;z r z u c a j &#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0727',
                        'name' => 'XXVII Lipca',
                        'content' => 'O nienawykaniu do z&#322;ego.',
                        'author' => '&#8222;Co z pocz&#261;tku &#322;atwoby mog&#322;o by&#263; usuni&#281;te, to z up&#322;ywem czasu, w skutek nawyknienia, staje si&#281; niepodobnem do usuni&#281;cia.&#8221;',
                        'description' => '(S. Ignatius apud Bart.)',
                        'description2' => 'Lekko i bez trudu, wedle swej woli, naginasz m&#322;ode drzewko; ale gdy wzro&#347;nie, dla nagi&#281;cia go, a raczej dla obalenia, potrzeba siekiery i d&#322;ugiego r&#261;bania. Podobnie wzrastaj&#261; wyst&#281;pki i si&#322;y nabieraj&#261; z czasem. Chwasty &#322;atwo i pr&#281;dko wzrastaj&#261;; je&#347;li w por&#281; nie zostan&#261; wyrwane, p&#243;&#378;niej sobie szydz&#261; z wszelkich zabieg&#243;w ogrodnika. Wybuja&#322;e, rozro&#347;ni&#281;te, rozszerzaj&#261; si&#281; coraz bardziej i przez cie&#324;, przez niedopuszczanie s&#322;o&#324;ca zgubnie oddzia&#322;ywaj&#261; na wszelkie inne szlachetniejsze ro&#347;liny, o kt&#243;re nam chodzi g&#322;&#243;wnie. Gdy z&#322;e wzro&#347;nie, zabiegi nic nie pomog&#261;: iskierk&#281; mo&#380;na by&#322;o palcem przydusi&#263;, ale po&#380;arowi, kt&#243;ry z niej powsta&#322;, nie poradzimy, pomimo, &#380;e si&#281; bardzo nam&#281;czymy &#8212; s z k o d l i w &#261;&nbsp;&nbsp;j e s t&nbsp;&nbsp;t a&nbsp;&nbsp;o p i e s z a &#322; o &#347; &#263;. Najwi&#281;ksze sprawy za&#322;atwia szcz&#281;&#347;liwie po&#347;piech, od zw&#322;oki czego&#380; dobrego mo&#380;esz si&#281; spodziewa&#263;? Odk&#322;ada zwykle ten, co nie chce. Za p&#243;&#378;no daje si&#281; lekarstwo na trucizn&#281;, gdy ta ca&#322;&#261; krew zakazi&#322;a; z a w s z e&nbsp;&nbsp;o d&nbsp;&nbsp;d n i a&nbsp;&nbsp;j u t r z e j s z e g o&nbsp;&nbsp;z a&nbsp;&nbsp;&#322; a s k a w s z y&nbsp;&nbsp;u w a &#380; a &#263;&nbsp;&nbsp;n a l e &#380; y&nbsp;&nbsp;d z i e &#324;&nbsp;&nbsp;d z i s i e j s z y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0728',
                        'name' => 'XXVIII Lipca',
                        'content' => 'O zwa&#380;aniu na wol&#281; Bo&#380;&#261;.',
                        'author' => '&#8222;Zwa&#380;ajmy tylko na Bosk&#261; wol&#281;, a B&#243;g sam nas w to, co jest niezb&#281;dne, zaopatrzy.&#8221;',
                        'description' => '(S. Ignat. apud Bart. f. 345).',
                        'description2' => 'Zbyteczna o rzeczy doczesne troska, nieufno&#347;ci albo chciwo&#347;ci jest dowodem. Ten, co karmi ptaki niebieskie, o swoich nie zapomni. Niepotrzebnie si&#281; tak troszczymy. Gdyby&#347;my bardziej wgl&#261;dali w siebie, wi&#281;cej pami&#281;tali o duszy; rzadziejby nam przychodzi&#322;y na my&#347;l rzeczy doczesne, kt&#243;remi, je&#347;li si&#281; umys&#322; nad miar&#281; zajmuje, nie mo&#380;e bez pewnej ze sob&#261; utarczki podnie&#347;&#263; si&#281; ku rzeczom niebieskim. B a r d z o&nbsp;&nbsp;z &#322; a&nbsp;&nbsp;z a m i a n a,&nbsp;&nbsp;z e&nbsp;&nbsp;s z k o d &#261;&nbsp;&nbsp;t y c h&nbsp;&nbsp;o s t a t n i c h&nbsp;&nbsp;w y n o s i &#263;&nbsp;&nbsp;t a m t e. Po co si&#281; tak uganiasz? napr&#243;&#380;no siejesz, napr&#243;&#380;no podlewasz, je&#347;li B&#243;g nie da wzrostu. W jego r&#281;ku mno&#380;&#261; si&#281; chleby, tak, &#380;e wystarczaj&#261; na tysi&#261;ce <sup>1</sup>. H o j n i&nbsp;&nbsp;d l a&nbsp;&nbsp;B o g a&nbsp;&nbsp;n i e&nbsp;&nbsp;p o t r z e b u j &#261;&nbsp;&nbsp;o b a w i a &#263;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n i e d o s t a t k u. Kto szuka obfito&#347;ci, niech szuka przez Boga, inaczej jej nie znajdzie. We&#378;mie si&#281; niewiadomo zk&#261;d, gdy jej udzieli ten, od kt&#243;rego pochodzi wszystko. Je&#347;li w rzeczach doczesnych pokaza&#322; si&#281; jaki niedostatek, patrz, czy wprz&#243;d go nie by&#322;o w rzeczach duchownych, czy&#347; si&#281; pod tym wzgl&#281;dem nie zaniedba&#322;?',
                        'description3' => '1) &#346;. Marek 8.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0729',
                        'name' => 'XXIX Lipca',
                        'content' => 'O usuni&#281;ciu &#380;&#261;dz niedobrych.',
                        'author' => '&#8222;Cz&#322;owiek, kt&#243;ry &#380;&#261;dze swoje poskramia, wi&#281;cej odniesie korzy&#347;ci przez jeden kwadrans rozmy&#347;lania, ni&#380; inny, kt&#243;ry swych &#380;&#261;dz nie kr&#281;puje, przez kilka kwadrans&#243;w.&#8221;',
                        'description' => '(S. Ignat. apud Ribad.)',
                        'description2' => 'Dusz&#261; modlitwy jest skupienie my&#347;li. Gdzie si&#281; wci&#261;&#380; burz&#261; nieposkromione &#380;&#261;dze, tam o skupieniu mowy nie ma. Taki stan rozrywa, nie skupia; rozprasza ducha, nie podnosi. Dlatego rzadki tylu modlitw owoc, poniewa&#380; rzadko im towarzyszy umartwienie. Drzewo nale&#380;ycie wysuszone zapala si&#281; bez trudno&#347;ci, podczas gdy &#347;wie&#380;o &#347;ci&#281;te d&#322;ugo si&#281; opiera, ogie&#324; z wilgoci&#261; w niem zawart&#261; niema&#322;&#261; walk&#281; stacza. Zmniejszenie &#380;&#261;dzy jest powi&#281;kszeniem mi&#322;o&#347;ci; gdzie nie ma wcale &#380;&#261;dzy, tam doskona&#322;a mi&#322;o&#347;&#263;: o&nbsp;&nbsp;t y l e&nbsp;&nbsp;s e r c e&nbsp;&nbsp;d o&nbsp;&nbsp;B o g a&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;w z n o s i,&nbsp;&nbsp;o&nbsp;&nbsp;i l e&nbsp;&nbsp;o d&nbsp;&nbsp;w r o d z o n y c h&nbsp;&nbsp;&#380; &#261; d z&nbsp;&nbsp;o d s t &#281; p u j e. Jak ogie&#324;, po usuni&#281;ciu przeszk&#243;d, kt&#243;re jego p&#281;d powstrzymuj&#261;, natychmiast do &#347;rodka si&#281; dobiera; tak serce po usuni&#281;ciu &#380;&#261;dz niedobrych, innych skrzyde&#322; nie potrzebuje, aby pr&#281;dzej do Boga w&#378;lecia&#322;o.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0730',
                        'name' => 'XXX Lipca',
                        'content' => 'O niezwa&#380;aniu na oszczerstwa.',
                        'author' => '&#8222;Mowy oszczerc&#243;w nale&#380;y niweczy&#263; &#347;wiadectwami powa&#380;nych m&#281;&#380;&#243;w, a usta niegodziwc&#243;w zamyka&#263; dobrodziejstwami.&#8221;',
                        'description' => '(S. Ignat. apud Nolar.)',
                        'description2' => 'Kto pocisk&#243;w z&#322;orzecze&#324; unikn&#261;&#263; nie mo&#380;e, ten niech im pier&#347; spi&#380;ow&#261; przeciwstawi, to jest, pier&#347; dobrem sumieniem opatrzon&#261;. W ten spos&#243;b st&#281;pi si&#281; wszelki pocisk, jakiegoby si&#281; mo&#380;na by&#322;o obawia&#263;, duszy nie zabije, ani obrazi. Je&#347;li za s&#322;owa obel&#380;ywe, takiemi samemi odp&#322;aci&#263; zechcesz, z&#322;e bardziej pogorszysz. Ogie&#324;, kt&#243;ry poma&#322;u mo&#380;eby by&#322; przygas&#322;, wybuchnie p&#322;omieniem; tem silniejszym, im silniejsz&#261; wywi&#261;&#380;e si&#281; sprzeczka, ze s&#322;&#243;w nawzajem wypowiedzianych. Nier&#243;wnie jest lepiej nie zwa&#380;a&#263; na oszczerstwa, pogardza&#263; niemi; nie wyja&#347;ni&#261; si&#281; wprawdzie, ale ucichn&#261;: gdy ty zamilkniesz, zamilknie tak&#380;e i echo. Przez &#347;cieranie si&#281; wzajemne wiadomo&#347;&#263; o zaj&#347;ciu rozszerza si&#281; daleko; tak samo jak p&#322;omie&#324; wci&#261;&#380; podsycany zamienia si&#281; w po&#380;ar, podczas gdy bez tego podsycania pr&#281;dkoby przygas&#322; i zaledwie przez otaczaj&#261;cych by&#322;by widziany. Je&#347;li si&#281; m&#347;ci&#263; zamierzasz, nieprzyjacielowi r&#281;k&#281; podajesz, bo swoim &#380;alem, swoj&#261; skarg&#261; oznajmiasz mu, &#380;e&#347; otrzyma&#322; ran&#281;, o kt&#243;rej on my&#347;la&#322;. Wi&#281;kszym jest nad oszczerstwa, kto si&#281; nauczy&#322; nie troszczy&#263; o nie. N i e&nbsp;&nbsp;t y,&nbsp;&nbsp;a l e&nbsp;&nbsp;&#380; y c i e&nbsp;&nbsp;t w o j e&nbsp;&nbsp;n i e c h&nbsp;&nbsp;j e&nbsp;&nbsp;z b i j a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0731',
                        'name' => 'XXXI Lipca',
                        'content' => 'O ofierze z &#380;ycia.',
                        'author' => '&#8222;Nic si&#281; przydarzy&#263; nie mo&#380;e ani po&#380;&#261;da&#324;szego, ani milszego, jak umrze&#263; za Chrystusa i bli&#378;nich zbawienie.&#8221;',
                        'description' => '(S. Ignat. apud Nad. in Glor. S. Ignat.)',
                        'description2' => 'Dop&#243;ki &#380;yjesz, dop&#243;ty w&#347;r&#243;d tysi&#261;ca nieszcz&#281;&#347;&#263; przebywasz; by&#322;oby- to ma&#322;&#261;, owszem dobr&#261; rzecz&#261;: ale ty si&#281; znajdujesz w&#347;r&#243;d niebezpiecze&#324;stw zbawienia, kt&#243;rych nie wprz&#243;d unikniesz, a&#380; z tego &#347;wiata szcz&#281;&#347;liw&#261; &#347;mierci&#261; zejdziesz. P r z e d&nbsp;&nbsp;g r o b e m&nbsp;&nbsp;n i e&nbsp;&nbsp;m a s z&nbsp;&nbsp;b e z p i e c z e &#324; s t w a. Skoro umrze&#263; potrzeba, lepiej pa&#347;&#263; na placu, w walce za Boga i bli&#378;niego. Nie zaszczytna to &#347;mier&#263;, gdy nas czas poch&#322;onie, gor&#261;czka strawi, przypadek zg&#322;adzi. Za Chrystusa da&#263; &#380;ycie, jest to &#347;mier&#263; nad wszelkie &#380;ycie s&#322;odsza. Do najwi&#281;kszych dobrodziejstw Bo&#380;ych zaliczy&#263; nale&#380;y, gdy za Boga umrze&#263; mo&#380;emy. Jest-to znak szczeg&#243;lnej jego wzgl&#281;dem nas mi&#322;o&#347;ci, kt&#243;rej nietylko si&#281; obawia&#263; nie powinni&#347;my, ale owszem z ca&#322;ej si&#322;y jak najgor&#281;cej po&#380;&#261;da&#263;. Je&#347;li &#380;ycie za ciebie Chrystus po&#322;o&#380;y&#322;, jest-&#380;e co wielkiego, gdy ty swoje za Niego k&#322;adziesz? Pomy&#347;l kto, za kogo po&#322;o&#380;y&#322;? Czem jest B&#243;g? a czem &#380;ycie ludzkie? nie wie, kto rzeczy tak lichej, tylu niebezpiecze&#324;stwom podleg&#322;ej, tak wielkiemu i takiemu Panu ofiarowa&#263; nie chce. C o&nbsp;&nbsp;c i &#281;&nbsp;&nbsp;w s t r z y m u j e?',
                        'description3' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_08',
                'name' => 'August',
                'colour_value' => '#efae3d',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_0801',
                        'name' => 'I Sierpnia',
                        'content' => 'O lenistwie.',
                        'author' => '&#8222;W dobrych waszych i &#347;wi&#281;tych &#263;wiczeniach strze&#380;cie si&#281; wszelkiej opiesza&#322;o&#347;ci i gnu&#347;no&#347;ci; jako g&#322;&#243;wnego nieprzyjaciela.&#8221;',
                        'description' => '(S. Ignatius in epist. de perf.)',
                        'description2' => 'Najgorszy ten nieprzyjaciel, kt&#243;ry nie bogactwa odbiera, ale zas&#322;ug&#281;; czycha na &#380;ycie nie cia&#322;a, ale czynu; wszystko dobre psuje; i, co najgorsza, tak po cichu szkodzi, i&#380; pociski jego zaledwo cokolwiek czu&#263; si&#281; daj&#261;, i nieraz pr&#281;dzej dusz&#281; o zgub&#281; przyprawi&#261;, ni&#380; si&#281; poznamy na nich. Nieprzyjacielem jest lenistwo, i to nieprzyjacielem od ka&#380;dego innego gorszym. Grzech nawet sam&#261; nazw&#261; wstr&#281;t budzi; lenistwo przeciwnie, podoba si&#281;: zatem idzie, &#380;e pr&#281;dzej z grzechu si&#281; poprawiamy, ni&#380; z lenistwa. O wiele wi&#281;cej ludzi z ka&#322;u&#380;y grzech&#243;w, ni&#380; z letargu lenistwa podnios&#322;o si&#281; na znakomity stopie&#324; &#347;wi&#281;to&#347;ci. Zapa&#322; i gorliwo&#347;&#263; stanowi&#261; o cenie czyn&#243;w. &#346;wi&#281;te s&#261;, je&#347;li si&#281; &#347;wi&#281;cie wykonuj&#261;; je&#347;li po&#347;piesznie i ozi&#281;b&#322;em sercem, staj&#261; si&#281; z&#322;emi; i te&#380; same czyny, kt&#243;re mog&#322;y nam zjedna&#263; nagrod&#281;, &#347;ci&#261;gaj&#261; na nas kar&#281;. Im jeste&#347; gorliwszym, tem Bogu milszym. B i a d a&nbsp;&nbsp;o z i &#281; b &#322; y m! Jak woda, ani zimna, ani gor&#261;ca, odraz&#281; budzi; tak czyn leniwie, opieszale dokonany, jest bez zas&#322;ugi w obec nieba, gniew jego nawet &#347;ci&#261;ga <sup>1</sup>.',
                        'description3' => '1) Objawienie &#346;. Jana 3, 16.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0802',
                        'name' => 'II Sierpnia',
                        'content' => 'O wielkich zdolno&#347;ciach.',
                        'author' => '&#8222;Ci co wysokiem urodzeniem, nauk&#261;, albo zdolno&#347;ciami celuj&#261;, nad innych w zaparciu siebie samych wy&#263;wiczeni by&#263; maj&#261;; inaczej bardziej szkodzi&#263; mog&#261;, ni&#380; prostacy i nizkiego urodzenia ludzie.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Wielkie zdolno&#347;ci wielkiemi gro&#380;&#261; niebezpiecze&#324;stwami, je&#347;li nie s&#261; pod rz&#261;dem cnoty. Miecz lepiej wyostrzony, mocniej rani i wi&#281;ksz&#261; groz&#281; szerzy. Od wielkich zdolno&#347;ci czego&#347; si&#281; miernego nie oczekuje: albo si&#281; ca&#322;kiem oddaj&#261; cnocie, albo na wskro&#347; przejmuj&#261; pych&#261;. Od nikogo kraj nie ponosi tyle szkody, ile od wielkich zdolno&#347;ci &#378;le pokierowanych, z cnot&#261; rozwiedzionych i pych&#261; nad&#281;tych. Ani szlachetne urodzenie, ani znakomite zdolno&#347;ci z chwa&#322;&#261; nie b&#281;d&#261;, je&#347;li si&#281; kto&#347; swem post&#281;powaniem poni&#380;y. P r z y c z y n i&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;t o&nbsp;&nbsp;r a c z e j&nbsp;&nbsp;d o&nbsp;&nbsp;w i &#281; k s z e j&nbsp;&nbsp;h a &#324; b y,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;d o&nbsp;&nbsp;c h w a &#322; y. Gdzie wielka zdolno&#347;&#263;, tam cz&#281;sto &#380;adnej nie ma roztropno&#347;ci; a w jej braku, jak cia&#322;o bez oka, jak w&#243;z bez woznicy, dok&#261;d, je&#347;li nie w przepa&#347;&#263; zmierza? Miern&#261; zdolno&#347;&#263;, jak wi&#281;cej miewa rozs&#261;dku, tak wi&#281;cej obiecuje po&#380;ytku.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0803',
                        'name' => 'III Sierpnia',
                        'content' => 'O nieodk&#322;adaniu dobrego.',
                        'author' => '&#8222;Aby&#347;my zaniechali dobra, kt&#243;re spe&#322;niamy, cz&#281;sto szatan zach&#281;ca do wi&#281;kszego; aby jednak to nie nast&#261;pi&#322;o, nowe stawia przeszkody.&#8221;',
                        'description' => '(S. Ignat. de discr. spir.)',
                        'description2' => 'Pod pozorem dobrych czyn&#243;w przysz&#322;ych, szatan przeszkadza obecnym; gdy przysz&#322;e stan&#261; si&#281; obecnemi nowe wynajdzie przeszkody. W ten spos&#243;b ci&#261;gle wszystkiemu przeszkadzaj&#261;c sprawia, &#380;e nic si&#281; nie czyni, coby nieba, coby Boga godnem by&#322;o. P r z e z&nbsp;&nbsp;o d s u w a n i e&nbsp;&nbsp;z y s k u,&nbsp;&nbsp;j a k&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n i k t&nbsp;&nbsp;n i e&nbsp;&nbsp;s t a &#322;&nbsp;&nbsp;b o g a t s z y m,&nbsp;&nbsp;t a k&nbsp;&nbsp;n i k t&nbsp;&nbsp;&#347;wi &#281; t s z y m. Ten co dzi&#347; nagrod&#281; za czyn dobry obieca&#322;, &#380;e jutra doczekamy, nie obieca&#322;; leci &#380;ycie i niespodzianie ulatuje. Jaki&#380; wtedy z zamiar&#243;w po&#380;ytek? &#8212; dzisiejszych zaniedba&#322;e&#347;, jutrzejsze nie od ciebie zale&#380;&#261;, z go&#322;emi wi&#281;c r&#281;kami tkwisz na mieli&#378;nie. Jakim sposobem jutro wielkich rzeczy dokona, kto dzisiaj sobie przykrzy w najmniejszej? Kto dzi&#347; z Milonem nie mo&#380;e unie&#347;&#263; ciel&#281;cia, jutro z pewno&#347;ci&#261; nie uniesie wo&#322;u. G d y&nbsp;&nbsp;d a j e m y&nbsp;&nbsp;r a d &#281;&nbsp;&nbsp;m n i e j s z y m&nbsp;&nbsp;r z e c z o m,&nbsp;&nbsp;m o &#380; n a&nbsp;&nbsp;m i e &#263;&nbsp;&nbsp;n a d z i e j &#281;,&nbsp;&nbsp;&#380; e&nbsp;&nbsp;p o d o &#322; a m y&nbsp;&nbsp;i&nbsp;&nbsp;w i &#281; k s z y m. Znaczna cz&#281;&#347;&#263; ludzi na zamiarach ko&#324;czy: &#380;ycie wedle Boga z dnia na dzie&#324; odk&#322;adaj&#261;, i tak poma&#322;u do tego przychodz&#261;, &#380;e chocia&#380;by chcieli, nie mog&#261;; wpo&#347;r&#243;d usi&#322;owa&#324; &#347;mier&#263; ich zaskakuje, tem przykrzejsza, im natarczywsza.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0804',
                        'name' => 'IV Sierpnia',
                        'content' => 'O niespieszeniu si&#281; z kar&#261;.',
                        'author' => '&#8222;Tak si&#281; z podw&#322;adnym niech obchodzi zwierzchnik, aby rze&#378;ko obadwaj bez wyrzeka&#324; &#380;yli, i Bogu pogodn&#261; my&#347;l&#261; s&#322;u&#380;yli.&#8221;',
                        'description' => '(S. Ignat. apud Nolar.)',
                        'description2' => 'Nawykaj&#261; do kar, kt&#243;rzy ci&#261;gle s&#261; karani, i to poczucie, jakie mieli, w skutek ustawicznej kary, trac&#261;. Innej korzy&#347;ci zt&#261;d nie ma, jeno niedbanie, lekcewa&#380;enie i kary i karz&#261;cego. Znieczulony na boja&#378;&#324; umys&#322;, gorszym si&#281; staje; po wyzuciu si&#281; ze wstydu zuchwalej na niegodziwo&#347;&#263; si&#281; puszcza, ani obietnicami, ani gro&#378;bami powstrzyma&#263; go nie mo&#380;na. Niewczesna nagana, to samo powoduje co zanadto silne, nieodpowiednie lekarstwo; wi&#281;cej cz&#281;sto szkodzi, ni&#380; choroba; gorszym jest &#347;rodek zaradczy, ni&#380; samo z&#322;e; bo pr&#281;dzej &#380;ycia pozbawia, ni&#380; choroba, z kt&#243;rejby czas wyleczy&#322; lub piel&#281;gnowanie staranne. Sposobu poprawy niech si&#281; zwierzchnik uczy od Boga. Ile&#380; razy On milczy? jako rzadko i niewielu karze? jak takiego tylko, kt&#243;ry mocno zas&#322;u&#380;y&#322;. Gdzieby&#347;my byli, gdyby B&#243;g ka&#380;de nasze uchybienie &#347;ci&#347;le roztrz&#261;sa&#322; i zaraz kara&#322;? &#379; e &#347; m y&nbsp;&nbsp;n i e&nbsp;&nbsp;z n i s z c z e l i,&nbsp;&nbsp;t o&nbsp;&nbsp;m i &#322; o s i e r d z i a&nbsp;&nbsp;P a &#324; s k i e&nbsp;&nbsp;s p r a w i &#322; y <sup>1</sup>.',
                        'description3' => '1) Treny 3, 22.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0805',
                        'name' => 'V Sierpnia',
                        'content' => 'O rozwadze w dzia&#322;aniu.',
                        'author' => '&#8222;Tak starego cz&#322;owieka umartwia&#263; nale&#380;y przy zaprawianiu si&#281; do cnoty, aby nie umar&#322; nowy.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Co pr&#281;dko wzrasta, to pr&#281;dko ginie. Jest to wada m&#322;odych, &#380;e jednym tchem chc&#261; ca&#322;&#261; doskona&#322;o&#347;ci drog&#281; przebiedz; brak im do&#347;wiadczenia, najlepszego wszystkich rzeczy mistrza; spostrzeg&#261; si&#281; i pomiarkuj&#261;, ale po niewczasie i z wielk&#261; swoj&#261; szkod&#261;. Pierwszy zapa&#322;, je&#347;li nie jest rozwa&#380;ny, wi&#281;cej cnocie szkodzi, ni&#380; pomaga. Je&#347;li konie w czw&#243;rk&#281; zaprz&#281;&#380;one, od pocz&#261;tku biegn&#261; jak tylko mog&#261; wyskoczy&#263;, pr&#281;dzej w&#243;z wywr&#243;c&#261;, ni&#380; do zamierzonego miejsca doci&#261;gn&#261;. N a t &#281; &#380; e n i e&nbsp;&nbsp;z b y t n i e&nbsp;&nbsp;d &#322; u g o&nbsp;&nbsp;t r w a &#263;&nbsp;&nbsp;n i e&nbsp;&nbsp;m o &#380; e. Dzie&#324;, po doj&#347;ciu do najwi&#281;kszej swej d&#322;ugo&#347;ci, zaczyna si&#281; potem zmniejsza&#263;; podobnie si&#281; dzieje z tymi, kt&#243;rych cnota, na pocz&#261;tku olbrzymia, codziennie maleje. Nie powiem wi&#281;cej, porad&#378; si&#281; do&#347;wiadczenia. Pewniejsza jest budowla, kt&#243;r&#261; wznosz&#261; powoli, z zachowaniem wszystkich przepis&#243;w, ni&#380; ta, kt&#243;r&#261; szybko z wielkim wysi&#322;kiem stawiaj&#261;. Wszystkie owoce z natury swej nie pr&#281;dko dojrzewaj&#261;, na zupe&#322;ne dojrzenie d&#322;ugo czeka&#263; potrzeba. B a r d z o&nbsp;&nbsp;b &#322; &#261; d z i,&nbsp;&nbsp;k t o&nbsp;&nbsp;b &#322; &#261; d z i&nbsp;&nbsp;n a&nbsp;&nbsp;p o c z &#261; t k u.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0806',
                        'name' => 'VI Sierpnia',
                        'content' => 'O niepuszczaniu si&#281; na niepewne.',
                        'author' => '&#8222;Rzeczy szczeg&#243;lniej publiczne, na kt&#243;re wielu swe oczy i s&#261;dy zwraca, nie powinny si&#281; rozpoczyna&#263;, dop&#243;ki nie zostan&#261; zapewnione &#347;rodki doprowadzenia ich od ko&#324;ca.&#8221;',
                        'description' => '(S. Ignat. apud Martini in Nov.)',
                        'description2' => 'Nieroztropnie robi, kto powodzenie jakiej rzeczy na przypadek zdaje; je&#347;li ta rzecz po my&#347;li p&#243;jdzie, to zas&#322;uga nie tobie, ale przypadkowi przyznan&#261; zostanie. Lekkomy&#347;lnym jest, kto do celu d&#261;&#380;y, do kt&#243;rego drogi nie zna. P&#243;&#378;no staj&#261; si&#281; m&#261;drymi Frygijczycy, bo zadawalniaj&#261; si&#281; tylko tera&#378;niejszo&#347;ci&#261;, bez pami&#281;ci na przysz&#322;o&#347;&#263;. &#379;adnych nieszcz&#281;&#347;&#263; tyle obawia&#263; si&#281; nie nale&#380;y, ile tych, kt&#243;re najmniejszej obawy nie wzbudza&#322;y. J a k&nbsp;&nbsp;p r z e w i d z i a n e&nbsp;&nbsp;p o c i s k i&nbsp;&nbsp;m n i e j,&nbsp;&nbsp;t a k&nbsp;&nbsp;n i e s p o d z i e w a n e&nbsp;&nbsp;b a r d z i e j&nbsp;&nbsp;r a &#380; &#261;. Zbyt p&#243;&#378;nem jest lekarstwo, o kt&#243;rem my&#347;limy dopiero wtedy, gdy choroba do ostateczno&#347;ci ju&#380; dosz&#322;a. Na nic si&#281; nie przyda w&#243;wczas rozpytywanie si&#281;, z jakiego powodu, jak d&#322;ugo trwa, o ile dolega? Wtedy jest po niewczasie, chocia&#380; przedtem lekki &#347;rodek zaradczy by&#322;by przeszkodzi&#322; z&#322;emu. C&#243;&#380; dziwnego, &#380;e upada kto&#347;, skoro jest &#347;lepym, i nie widzi, czy d&#243;&#322;, czy dobra droga, gdzie nog&#281; stawia. Oczy m&#281;drca w g&#322;owie s&#261;, a g&#322;upiego w nogach. Tamten na pocz&#261;tku obmy&#347;la &#347;rodki, ten na ko&#324;cu &#380;a&#322;uje, &#380;e pob&#322;&#261;dzi&#322;. &#379; a l&nbsp;&nbsp;p &#243; &#378; n y!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0807',
                        'name' => 'VII Sierpnia',
                        'content' => 'O korzystaniu z cudzych b&#322;&#281;d&#243;w.',
                        'author' => '&#8222;Je&#347;li b&#322;&#281;dy, jak to zwykle bywa, w innych spotykasz; uwa&#380;aj je za &#378;wierciad&#322;o, kt&#243;re ci pokazuje, co masz niedobrego ze siebie usun&#261;&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Ribad.)',
                        'description2' => 'Wszelka bli&#378;niego czynno&#347;&#263; niech b&#281;dzie dla ciebie nauk&#261;; &#380;adnej bowiem nie ma, z kt&#243;rejby nie mo&#380;na by&#322;o czego&#347; si&#281; nauczy&#263;. Co zas&#322;uguje na pochwa&#322;&#281;, niech ci b&#281;dzie do cnoty bod&#378;cem; co jest nagannem, niech ostrzega, aby&#347; by&#322; od tego zdaleka. Nawet z trucizny lekarstwo przygotowa&#263; umiej&#261; aptekarze; ty w podobny spos&#243;b, z pewniejsz&#261; korzy&#347;ci&#261;, uchybieniami innych lecz swoj&#261; krewko&#347;&#263;. Gdzie widzisz, &#380;e inny upad&#322;, tam ty jakby na lodzie ostro&#380;niej stawiaj nog&#281;. Nauka z w&#322;asnego niebezpiecze&#324;stwa drogo kosztuje; szcz&#281;&#347;liwy, kogo obce ucz&#261;: nie tak pr&#281;dko w doskona&#322;o&#347;ci post&#261;pi, kto do niej drogi na w&#322;asnych b&#322;&#281;dach zechce si&#281; uczy&#263;. D r o g a&nbsp;&nbsp;p r z e z&nbsp;&nbsp;n i e b e z p i e c z e &#324; s t w a&nbsp;&nbsp;n i e&nbsp;&nbsp;m o &#380; e&nbsp;&nbsp;b y &#263;&nbsp;&nbsp;b e z&nbsp;&nbsp;n i e b e z p i e c z e &#324; s t w a. Nikt cnocie, a tem mniej roztropno&#347;ci swej ufa&#263; nie powinien; na przyk&#322;ady niech patrzy, kr&#243;tsza-to i bezpieczniejsza droga <sup>1</sup>; kto jej zaniedba, ten si&#281; wykolei i p&#322;ocho&#347;&#263; sw&#261; strasznie przep&#322;aci.',
                        'description3' => '1) Seneka.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0808',
                        'name' => 'VIII Sierpnia',
                        'content' => 'O &#347;wiadectwie sumienia.',
                        'author' => '&#8222;Niech ka&#380;dy sam siebie naprz&#243;d zaleci, potem inni &#322;atwo to przyznaj&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Ribad.)',
                        'description2' => 'Najlepszym s&#281;dzi&#261; sumienie twoje; ono widzi, co przed oczami innych zakryte jest; je&#347;li ci&#281; ono z wszelkiej winy zwolni, je&#347;li godnym pochwa&#322;y og&#322;osi, &#322;atwo znajdziesz, potwierdzenie w innych, wszyscy po jego stronie stan&#261;. Jak nie &#322;atwo ukry&#263; ogie&#324;, aby si&#281; jakim znakiem nie zdradzi&#322;, chocia&#380;by w nieprzyst&#281;pnej skrytce by&#322; schowany; albo ciep&#322;em albo dymem daje zna&#263; o sobie: tak napr&#243;&#380;no domowe skrywaj&#261; si&#281; wady. Ma sumienie zdrajc&#243;w. Co nam si&#281; zdaje, &#380;e&#347;my w sercu g&#322;&#281;boko schowali, to twarz zdradzi i oko; pomimo twego zakazu, przedstawi si&#281; w tym teatrze wszystkim to, coby&#347; pragn&#261;&#322;, aby by&#322;o zas&#322;on&#261; pokryte. Ka&#380;dy w sobie ma sprawc&#281; pochwa&#322;y lub nagany, ka&#380;dy sam z siebie jest albo szcz&#281;&#347;liwym albo nieszcz&#281;&#347;liwym. G&#322;&#243;wn&#261; zatem niech twoj&#261; trosk&#261; b&#281;dzie, aby ci&#281; twoje nie oskar&#380;a&#322;o sumienie. C o d z i e &#324;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p y t a j&nbsp;&nbsp;o&nbsp;&nbsp;j e g o&nbsp;&nbsp;z d a n i e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0809',
                        'name' => 'IX Sierpnia',
                        'content' => 'O pilno&#347;ci w dzia&#322;aniu.',
                        'author' => '&#8222;Tak wszystko czyni&#263; nale&#380;y, aby po&#380;&#261;dana chwa&#322;a od czynu by&#322;a zdaleka: takiem jednak wszystko niech b&#281;dzie, aby na s&#322;uszn&#261; nie zas&#322;ugiwa&#322;o przygan&#281;.&#8221;',
                        'description' => '(S. Ignat. apud Ribad.)',
                        'description2' => 'Kto za chwa&#322;&#261; goni, jest pr&#243;&#380;nym; kto j&#261; otrzymuje, szcz&#281;&#347;liwym; kto na ni&#261; zas&#322;uguje, cnotliwym; poniewa&#380; ona zale&#380;y od drugich, by&#322;oby nierozs&#261;dnem jej si&#281; domaga&#263;: kto jej prac&#261;, trudem, mozo&#322;em szuka, ten zawsze znajdzie. W&nbsp;&nbsp;t &#281;&nbsp;&nbsp;s t r o n &#281;&nbsp;&nbsp;s k i e r u j&nbsp;&nbsp;t w o j e&nbsp;&nbsp;u s i &#322; o w a n i a! Staraj si&#281;, aby czyny twoje by&#322;y z&#322;ote, nie poz&#322;acane; to jest, aby dobremi by&#322;y w istocie, nie dobremi si&#281; tylko wydawa&#322;y; warto&#347;&#263; niech maj&#261;, nie kupuj&#261;: ani oko, ani s&#261;d drugich da&#263; jej nie mo&#380;e. W s z y s t k o&nbsp;&nbsp;s w o j e&nbsp;&nbsp;z e&nbsp;&nbsp;s o b &#261;&nbsp;&nbsp;n o s i s z. Dyament nic na swej cenie nie traci, chocia&#380; nie znaj&#261;cy si&#281; na nim ma&#322;o go ceni; tyle wart, ile wa&#380;y, w&#322;asn&#261; swoj&#261; warto&#347;ci&#261; dosy&#263; bogaty. T e n&nbsp;&nbsp;w e d &#322; u g&nbsp;&nbsp;m n i e&nbsp;&nbsp;g o d z i e n&nbsp;&nbsp;j e s t&nbsp;&nbsp;p o c h w a &#322; y,&nbsp;&nbsp;k t o&nbsp;&nbsp;w s z y s t k o&nbsp;&nbsp;n a&nbsp;&nbsp;s o b i e&nbsp;&nbsp;s a m y m&nbsp;&nbsp;z a k &#322; a d a. Krytyki &#243;cz unikn&#261;&#263; nie mo&#380;emy, przyw&#322;aszczaj&#261; one sobie s&#261;d nad wszystkimi. Tak przeto robi&#263; potrzeba wobec drugich, aby si&#281; nic pod oczy nie nawija&#322;o, coby wyko&#324;czonem i doskona&#322;em nie by&#322;o. C i &#281; &#380; e j&nbsp;&nbsp;g r z e s z y,&nbsp;&nbsp;k t o&nbsp;&nbsp;w o b e c&nbsp;&nbsp;i n n y c h&nbsp;&nbsp;g r z e s z y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0810',
                        'name' => 'X Sierpnia',
                        'content' => 'O wyborze przyjaciela.',
                        'author' => '&#8222;Pierwiej dobrze poznaj osob&#281;, nim zawrzesz z ni&#261; przyja&#378;&#324;.&#8221;',
                        'description' => '(S. Ignat. apud Ribad.)',
                        'description2' => 'Kto si&#281; nie chce utopi&#263;, pierwiej wod&#281; zg&#322;&#281;bia, nim siebie lub rzeczy swoje jej powierzy. Dla bezpiecze&#324;stwa, lepiej jest kijem sobie drog&#281; torowa&#263;, aby zamiast po&#380;&#261;danego schronienia, nie znale&#378;&#263; grobu. Ile&#380; zgubnych wir&#243;w nie kryje si&#281; pod spokojnemi na poz&#243;r wodami? &#379;adnej nie ma rzeki nad ludzkie serce g&#322;&#281;bszej, kryje si&#281; tu bardzo wiele, i nie ma tak przenikliwego oka, kt&#243;reby wszystko dojrze&#263; mog&#322;o; napr&#243;&#380;no tu okna szuka&#322; Momus <sup>1</sup>. Spodziewa&#322; si&#281; znale&#378;&#263;, ale nadzieja si&#281; nie zi&#347;ci&#322;a. Niezg&#322;&#281;bionem jest serce cz&#322;owieka. Sztuka jednak sztuk&#281; pokonywa, jest nawet do tajemnic serca droga, nie otwarta wprawdzie, ale przez szpary da si&#281; dojrze&#263;. Zdradzaj&#261; si&#281; uczucia, nawet pomimo woli, z czyn&#243;w wygl&#261;da dusza, jak lis z jamy, gdy s&#261;dzi, &#380;e na&#324; nie patrz&#261;. Drog&#261; rzecz&#261; jest przyjaciel, ostro&#380;nie jednak wybieraj, nim wybierzesz, aby&#347; zamiast dyamentu szk&#322;a nie dosta&#322;; ten sam wygl&#261;d obudwu, lecz o ile rzadszym jest dyament, o tyle dro&#380;szym od szk&#322;a. J e &#347; l i&nbsp;&nbsp;m a s z&nbsp;&nbsp;m i e &#263;&nbsp;&nbsp;p r z y j a c i e l a,&nbsp;&nbsp;t o&nbsp;&nbsp;n i e c h&nbsp;&nbsp;b &#281; d z i e&nbsp;&nbsp;n a j l e p s z y.',
                        'description3' => '1) Satyryk.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0811',
                        'name' => 'XI Sierpnia',
                        'content' => 'O podarunkach.',
                        'author' => '&#8222;Ach! ile&#380; nietylko na swobodzie, ale i na powadze i na szacunku traci, kto podarunki przyjmuje.&#8221;',
                        'description' => '(S. Ignat. apud Ribad.)',
                        'description2' => 'Gdy chwyta &#380;er ryba, sama si&#281; &#322;apie i przez szkodliw&#261; zamian&#281; wi&#281;cej traci, ni&#380; zyskuje; dostawszy robaka, gubi siebie. Nie lepsze jest po&#322;o&#380;enie chciwego: dostaje podarunek, a lepsz&#261; cz&#281;&#347;&#263; siebie, niezale&#380;no&#347;&#263;, swobod&#281;, sprzedaje. Jest-to lichego charakteru znamieniem na podarunki czycha&#263;. Tylko najemnik nic bez zysku nie robi, ale cz&#322;owiek szlachetniej my&#347;l&#261;cy nigdy si&#281; tak do rzeczy ziemskich nie przywi&#261;zuje, aby u&#380;yteczne przek&#322;ada&#322; nad dobre. Smutne-to bardzo, je&#347;li z rzeczy duchownych zysk si&#281; ci&#261;gnie, i to si&#281; zamienia na podniet&#281; do chciwo&#347;ci, co mia&#322;o by&#263; narz&#281;dziem do jej wykorzenienia. Zdarza si&#281; jednak, i&#380; blask z&#322;ota tak za&#347;lepia, &#380;e nawet rzeczy wieczne zmusza do s&#322;u&#380;enia znikomym. Je&#347;li za tw&#261; prac&#281; odbierasz tu zap&#322;at&#281;, nie masz si&#281; czego spodziewa&#263; w przysz&#322;o&#347;ci. Za drobnostk&#281; pozbywasz si&#281; niezmierno&#347;ci. N i e&nbsp;&nbsp;j e s t&nbsp;&nbsp;t o&nbsp;&nbsp;z y s k a &#263;,&nbsp;&nbsp;a l e&nbsp;&nbsp;s t r a c i &#263;;&nbsp;&nbsp;z a&nbsp;&nbsp;r z e c z&nbsp;&nbsp;c i e &#324;&nbsp;&nbsp;w z i &#261; &#263;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0812',
                        'name' => 'XII Sierpnia',
                        'content' => 'O rozwadze w dzia&#322;aniu.',
                        'author' => '&#8222;Ani w uniesieniu, ani w rozdra&#378;nieniu wielkiem nic stanowi&#263; nie nale&#380;y; ale gdy si&#281; cz&#322;owiek uspokoi, to zrobi&#263;, co rozs&#261;dek ka&#380;e, nie to co nami&#281;tno&#347;&#263; radzi.&#8221;',
                        'description' => '(S. Ignatius de elect.)',
                        'description2' => 'Z rozwag&#261; wszystko robi&#263; nale&#380;y, co si&#281; wykonuje bez niej, to bardzo cz&#281;sto jest powodem &#380;alu albo wielkiej szkody. Rozwag&#261;, zastanowieniem, r&#243;&#380;nimy si&#281; od zwierz&#261;t. &#346;pieszy&#263; i b&#322;&#261;dzi&#263;, ca&#322;kiem pokrewne s&#261; sobie czynno&#347;ci: niejeden pob&#322;&#261;dzi&#322;, dlatego i&#380; z po&#347;piechem to lub owo wykona&#322;. Postanowienie bez namys&#322;u, o ile z jednej strony &#322;atwe, o tyle z drugiej nie bardzo po&#380;yteczne. Z&#322;ym doradzc&#261; jest po&#347;piech, nic nie doradzi umiarkowanego. Je&#347;li dobrze zastanawia&#263; si&#281; nale&#380;y, gdy idzie o jakie sprawy ziemskie; to o ile&#380; bardziej potrzebnem jest zastanowienie, rozwaga, narada, gdy idzie o dusz&#281;, o wieczno&#347;&#263;; gdzie o b&#322;&#261;d &#322;atwiej, a o napraw&#281; trudniej. W i e l e&nbsp;&nbsp;u c z y&nbsp;&nbsp;n a w e t&nbsp;&nbsp;s a m&nbsp;&nbsp;c z a s. Czekaj, cz&#281;sto zw&#322;oka da rad&#281;, jakiej zaledwie od najm&#281;drszego m&#243;g&#322;by&#347; si&#281; spodziewa&#263;. Zwlekaj z czynem, co zrobisz, tego odwo&#322;a&#263; nie mo&#380;na.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0813',
                        'name' => 'XIII Sierpnia',
                        'content' => 'O wewn&#281;trznem wyrobieniu.',
                        'author' => '&#8222;Tak si&#281; urabia&#263; winien cz&#322;owiek na wewn&#261;trz, aby to wyrobienie ujawnia&#322;o si&#281; na zewn&#261;trz.&#8221;',
                        'description' => '(S. Ignat. apud Nolar.)',
                        'description2' => 'Zewn&#281;trzne cz&#322;owieka u&#322;o&#380;enie, je&#347;li od wewn&#281;trznego, jakby od korzenia nie pochodzi, bli&#380;szem jest ob&#322;udy, ni&#380; skromno&#347;ci; ani na nazw&#281; cnoty nie zas&#322;uguje, ani sta&#322;o&#347;ci r&#281;kojmi nie daje. Jak k&#243;&#322;ka w zegarku, przy pomocy kt&#243;rych zegarek idzie, ujawniaj&#261; si&#281; na zewn&#261;trz wskaz&#243;wk&#261;; jak z jej ruchu wnosimy o dobrem lub z&#322;em urz&#261;dzeniu tych k&#243;&#322;ek: tak podobnie&#380; natura wskaza&#322;a nam spos&#243;b poznawania ludzi. Wewn&#281;trzny duszy pok&#243;j nam samym, zewn&#281;trzny innym pomaga; prawdziwie dobrym jest dopiero wtedy, gdy si&#281; jeden z drugim po&#322;&#261;czy: bo z tego po&#322;&#261;czenia, pr&#243;cz zadowolenia w sumieniu, nast&#281;puje nadto publiczne zbudowanie. Skarb, dop&#243;ki si&#281; ukrywa, ma&#322;o jest u&#380;yteczny; wewn&#281;trzny pok&#243;j, dop&#243;ki sam w sobie jest, tobie, nie innym pomaga; zewn&#281;trzny innym, nie tobie; je&#347;li si&#281; jeden na drugim zasadza, jeden z drugiego wyp&#322;ywa, tobie i innym, zar&#243;wno jeden jak i drugi, jest po&#380;yteczny.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0814',
                        'name' => 'XIV Sierpnia',
                        'content' => 'O pracy nad sob&#261;.',
                        'author' => '&#8222;Zabieraj&#261;cy si&#281; do poprawy &#347;wiata, niech od siebie samego rozpocznie; inaczej praca jego daremna.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Tak by&#322;o i tak zawsze b&#281;dzie: mamy piecz&#281; o rzeczach zbytecznych, a nie troszczymy si&#281; o rzeczy niezb&#281;dnie potrzebne. Skoro chcesz innych ze wszystkich b&#322;&#281;d&#243;w uwolni&#263;, to uczy&#324; siebie idea&#322;em, poczem, je&#347;li b&#281;dzie doskona&#322;y, bezpiecznie si&#281; zabierzesz do poprawy &#347;wiata. Gdyby&#347;my dziesi&#261;t&#261; cz&#281;&#347;&#263; troski, jak&#261; po&#347;wi&#281;camy innym, dla siebie obracali, jak&#380;eby&#347;my lepszymi byli! ale &#380;e j&#261; obracamy dla innych i obracamy g&#322;&#243;wnie, ma&#322;y wewn&#261;trz post&#281;p, nazewn&#261;trz &#380;aden. T y l e&nbsp;&nbsp;t y l k o&nbsp;&nbsp;d o s k o n a &#322; o &#347; c i&nbsp;&nbsp;n a&nbsp;&nbsp;i n n y c h&nbsp;&nbsp;p r z e l e w a m y,&nbsp;&nbsp;i l e&nbsp;&nbsp;j e j&nbsp;&nbsp;s a m i&nbsp;&nbsp;p o s i a d a m y. Chcesz uczy&#263; innych? &#380;yj przyk&#322;adnie; tem ucz, czem chcesz, aby si&#281; stali: sam si&#281; sta&#324; pierwiej pilnym uczniem, potem spodziewaj si&#281; tego samego po innych. W obco tylko &#380;niwo sierp zapuszcza&#263;, to znaczy wiele &#380;&#261;&#263;, ale nic do stodo&#322;y nie chowa&#263;, pracowa&#263;, ale bez po&#380;ytku. Owszem, je&#347;li ze s&#322;owami rozmijaj&#261; si&#281; czyny; to nietylko nie oddzia&#322;ywasz korzystnie na s&#322;uchacz&#243;w, ale im szkodzisz bardzo, bo gdy rzeczy tyloma wys&#322;awionej pochwa&#322;ami sam nie wykonujesz, ju&#380; jakby jej niemo&#380;ebno&#347;ci dowodzisz.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0815',
                        'name' => 'XV Sierpnia',
                        'content' => 'O gwa&#322;towno&#347;ci pokusy.',
                        'author' => '&#8222;Je&#347;li upadek bli&#378;niego jest zbyt widoczny i wym&#243;wi&#263; si&#281; nie daje, natenczas win&#281; sk&#322;adaj nie tak na upad&#322;ego, jak raczej na gwa&#322;towno&#347;&#263; pokusy, pod kt&#243;rej naciskiem tyby&#347; mo&#380;e podobnie, albo gorzej nawet upad&#322;.&#8221;',
                        'description' => '(S. Ignat, apud Bart. f. 387).',
                        'description2' => 'Nale&#380;y ubolewa&#263; nad chorym, nie natrz&#261;sa&#263; si&#281; z niego, bo nie wiesz jaki ciebie los czeka: dzie&#324; dzisiejszy przeszed&#322; szcz&#281;&#347;liwie, ale jutrzejszy mo&#380;e by&#263; bardzo straszny: dop&#243;ki &#380;yjemy, dop&#243;ty si&#281; za bezpiecznych mie&#263; nie mo&#380;emy. Ka&#380;dy upadek bli&#378;niego niech b&#281;dzie napomnieniem dla ciebie. Nie natrz&#261;saj si&#281;, nie rozbudzaj w sobie ku upad&#322;emu wstr&#281;tu; ale ucz si&#281; jak masz post&#281;powa&#263; sam, aby&#347; podobnemu nie uleg&#322; losowi. Niejeden bardzo p&#243;&#378;niej &#380;a&#322;owa&#322;, &#380;e z takiej przestrogi nie korzysta&#322;. W&#322;asny jego upadek i to upadek ci&#281;&#380;ki by&#322; kar&#261; za lekcewa&#380;enie danej mu przestrogi. Gdy pies mocno uderzony j&#281;czy, lew si&#281; l&#281;ka; ani na twej niewinno&#347;ci przesz&#322;ej, ani na twem postanowieniu do tyla nie polegaj, aby&#347; si&#281; z boja&#378;ni popadni&#281;cia w grzech zupe&#322;nie wyzu&#322;; by&#322;aby-to zarozumia&#322;o&#347;&#263;. Je&#347;li gwiazdy z nieba spadaj&#261;, to c&#243;&#380; m&#243;wi&#263; o g&#322;owniach? U p a d k i&nbsp;&nbsp;i n n y c h&nbsp;&nbsp;n i e c h&nbsp;&nbsp;d l a&nbsp;&nbsp;c i e b i e&nbsp;&nbsp;b &#281; d &#261;&nbsp;&nbsp;p r z e s t r o g a m i. Kto ci&#281; cudzych m&#243;w i czyn&#243;w postanowi&#322; s&#281;dzi&#261;? Na jakiej zasadzie urz&#261;d s&#281;dziego sobie przyw&#322;aszczasz? Wi&#281;cej teraz jest t&#322;umacz&#243;w ni&#380; autor&#243;w, wi&#281;cej s&#281;dzi&#243;w ni&#380; winnych; chyba &#380;e do ich liczby w&#322;&#261;czymy samych s&#281;dzi&#243;w, na kt&#243;rych kary domaga si&#281; pogwa&#322;cona mi&#322;o&#347;&#263; bli&#378;niego.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0816',
                        'name' => 'XVI Sierpnia',
                        'content' => 'O powadze.',
                        'author' => '&#8222;Przy sprawowaniu drugich zbawienia potrzebna jest powaga, ale taka, kt&#243;ra nie ma nic wsp&#243;lnego z ow&#261; pr&#243;&#380;n&#261; powag&#261; &#347;wiata.&#8221;',
                        'description' => '(S. Ignatius apud Bart.)',
                        'description2' => 'Co innego jest duma, a co innego powaga: dum&#281; wytwarza cz&#281;sto nauka, szlachectwo, godno&#347;&#263;, i inne natury dary; powag&#281; nadaje &#380;ycie nieposzlakowane, cnota; o ile ta dla dusz zbawienia jest po&#380;yteczna, o tyle tamta szkodliwa. Ani wielkiej nauki, ani wysokiej godno&#347;ci, ani bogactw do powagi nie potrzeba; mie&#263; j&#261; mo&#380;na bez tego wszystkiego. Ca&#322;em jej bogactwem jest cnota, nizkie cz&#322;owieka o sobie trzymanie. Duma raczej przera&#380;a, ni&#380; poci&#261;ga; raczej od siebie odpycha, ni&#380; sobie zjednywa. Bez pozyskania serca, wszelki wysi&#322;ek daremny; nie przekonasz, dop&#243;ki serca sobie nie zyskasz. Kark nieugi&#281;ty, czo&#322;o surowe, s&#261; cechami wroga, nie przyjaciela; umys&#322; si&#281; im bardziej sprzeciwia, ni&#380; poddaje. Nie ma pewniejszego sposobu do zdobycia serc ludzkich, nad robienie im ust&#281;pstw. P o c i &#261; g a j &#261; c e j&nbsp;&nbsp;p o k o r z e&nbsp;&nbsp;o t w o r z &#261;&nbsp;&nbsp;s k r y t o &#347; c i,&nbsp;&nbsp;k t &#243; r e b y&nbsp;&nbsp;p r z e d&nbsp;&nbsp;p y c h &#261;&nbsp;&nbsp;j a k&nbsp;&nbsp;n a j s z c z e l n i e j&nbsp;&nbsp;z a m k n &#281; &#322; y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0817',
                        'name' => 'XVII Sierpnia',
                        'content' => 'O uporze.',
                        'author' => '&#8222;Od wszelkiego uporu dalekim b&#261;d&#378;, ale przy rzeczy dobrze rozpocz&#281;tej mocno st&#243;j; i dla b&#322;ahego powodu jej nie opuszczaj.&#8221;',
                        'description' => '(S. Ignatius apud Bart.)',
                        'description2' => 'Wytrwa&#322;o&#347;&#263; w dobrem jest chwalebna, ale gani&#263; nie nale&#380;y, je&#347;li si&#281; kto&#347; ku lepszemu sk&#322;ania. Odst&#261;pienie od b&#322;&#281;du nie jest lekko&#347;ci&#261;, ale oznak&#261; &#380;e w umy&#347;le naszym zmiana nast&#261;pi&#322;a, &#380;e&#347;my si&#281; pomiarkowali i na inny tor weszli. By&#322;by bardzo zarozumia&#322;ym, owszem bardzo nierozs&#261;dnym, ktoby bez wzgl&#281;du na to jaki zamiar powzi&#261;&#322;, tak przy nim sta&#322;, i&#380;by raczej wola&#322; b&#322;&#261;d wymawia&#263;, ni&#380; zamiar sw&#243;j zmieni&#263;. Kto kiedy tak przenikliwym by&#322;, aby utrzymywa&#322;, &#380;e ani jemu samemu, ani drugim nie zdarzy si&#281; nigdy pomy&#347;le&#263; co&#347; lepszego, nad to, co raz postanowi&#322;. Przypuszcza&#263;, &#380;e nikogo nad nas nie ma m&#281;drszego, ani roztropniejszego jest g&#322;upot&#261; nies&#322;ychan&#261;. M&#281;drzec stosownie do potrzeby zmienia swoje zdanie. Niezmiernie trudny jest stosunek z cz&#322;owiekiem takim, kt&#243;ry ani na przedstawione mu powody nie zwa&#380;a, ani rady od kogo innego pochodz&#261;cej nie przyjmuje. I m&nbsp;&nbsp;k t o&nbsp;&nbsp;j e s t&nbsp;&nbsp;m &#281; d r s z y,&nbsp;&nbsp;t e m&nbsp;&nbsp;d l a&nbsp;&nbsp;r o z s &#261; d k u&nbsp;&nbsp;b y w a&nbsp;&nbsp;p o w o l n i e j s z y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0818',
                        'name' => 'XVIII Sierpnia',
                        'content' => 'O opiesza&#322;o&#347;ci w s&#322;u&#380;bie Bo&#380;ej.',
                        'author' => '&#8222;Nie wiele na tem zale&#380;y, gdy &#347;wiatu niedbale s&#322;u&#380;ysz; ale to jest niezno&#347;nem, gdy Bogu niedbale s&#322;u&#380;ysz.&#8221;',
                        'description' => '(S. Ignatius apud Maff.)',
                        'description2' => 'Niedba&#322;e s&#322;u&#380;enie Panu wzgard&#261; jest, nie czci&#261;, na kar&#281;, nie na nagrod&#281; zas&#322;uguje. Tym bowiem sposobem pokazujemy, &#380;e o ile nam przy wykonywaniu jakiej rzeczy przyby&#322;o niedbalstwa, o tyle uby&#322;o szacunku dla Pana. Mo&#380;no&#347;&#263; s&#322;u&#380;enia Bogu uwa&#380;a&#263; si&#281; winna za &#322;ask&#281; niezwyk&#322;&#261;, tym jej B&#243;g udziela, kt&#243;rych przeznaczy&#322; do szcz&#281;&#347;liwej wieczno&#347;ci; je&#347;li si&#281; ozi&#281;ble wzgl&#281;dem tej &#322;aski zachowujesz, na jej utrat&#281; si&#281; nara&#380;asz &#8212; k t o&nbsp;&nbsp;d a r u&nbsp;&nbsp;n i e&nbsp;&nbsp;c e n i,&nbsp;&nbsp;t e n&nbsp;&nbsp;z a s &#322; u g u j e,&nbsp;&nbsp;a b y&nbsp;&nbsp;m u&nbsp;&nbsp;b y &#322;&nbsp;&nbsp;o d j &#281; t y. &#346;wiat s&#322;ugi swe dymem, B&#243;g niebem nagradza; za tak nier&#243;wn&#261; nagrod&#281;, pomi&#281;dzy spe&#322;nianiem jednej i drugiej s&#322;u&#380;by, w&#322;a&#347;ciwy winien by&#263; przedzia&#322;. Wstyd, &#380;e my si&#281; bardziej ubiegamy o chwilowe, ni&#380; o wieczne nagrody. O nic tyle si&#281; troszczy&#263; nie powinni&#347;my, ile o cnot&#281;; nic bardziej tej troski nie utrudnia, jak troska o wszystko. Zaniechanie wszystkiego, zerwanie ze wszystkiem, nietylko wyst&#281;pkiem nie jest, ale i chlub&#261; by&#263; mo&#380;e. Zaniedbanie si&#281; za&#347; w cnocie, rozbrat z cnot&#261;, niczem si&#281; nie da wym&#243;wi&#263;. J e s t&nbsp;&nbsp;h a &#324; b &#261;!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0819',
                        'name' => 'XIX Sierpnia',
                        'content' => 'O trudno&#347;ci poznania wad.',
                        'author' => '&#8222;Ma&#322;oby kto swoje wady wszechstronnie pozna&#322;, gdyby mu B&#243;g nie dopom&#243;g&#322;.&#8221;',
                        'description' => '(S. Ignat. apud Martin.)',
                        'description2' => 'Najgorsze jest po&#322;o&#380;enie chorego, gdy choroby, kt&#243;rej najbardziej podlega, kt&#243;ra mu najsilniej zagra&#380;a, nie czuje. Jak dobrym jest znakiem, gdy chory za chorego si&#281; ma; tak r&#243;wnie&#380; jest dobrym i bardzo pocieszaj&#261;cym, gdy upad&#322;y swoje upadki widzi. O b a d w a j&nbsp;&nbsp;o&nbsp;&nbsp;w y l e c z e n i u&nbsp;&nbsp;m y &#347; l &#261;&nbsp;&nbsp;i&nbsp;&nbsp;o b a d w a j&nbsp;&nbsp;n a d z i e j &#281;&nbsp;&nbsp;w y l e c z e n i a&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;m a j &#261;. Wrodzon&#261; jest nam &#347;lepota. Jak swej twarzy nikt nie widzi, tak i swych wad: bywaj&#261; one tak subtelne, tak napoz&#243;r nieznaczne, i&#380; nawet oko bystrzejsze z trudno&#347;ci&#261; je od cnoty rozr&#243;&#380;nia. Nie wiele ma zdolno&#347;ci, kto swych wad nie umie wym&#243;wi&#263;; jest-to sztuka, o kt&#243;rej malcy bez nauczyciela wiedz&#261;. Czego nie zdo&#322;aj&#261; wym&#243;wi&#263;, to umiej&#261; upozorowa&#263;, dodaniem pi&#281;knych nazw, zr&#281;cznem rzuceniem zas&#322;ony, innem rzeczy przedstawieniem. Mi&#322;o&#347;&#263; w&#322;asna wielk&#261; w &#347;wiecie odgrywa rol&#281;, i tak&#261; skaz&#281; na oczach robi, &#380;e wszystko co w&#322;asnem jest, &#347;wi&#281;tem si&#281; wydaje. &#321; a t w o b y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;u s u n &#281; &#322; y&nbsp;&nbsp;w a d y,&nbsp;&nbsp;a l e&nbsp;&nbsp;&#380; e&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;k r y j &#261;,&nbsp;&nbsp;&#380; e&nbsp;&nbsp;i c h&nbsp;&nbsp;n i e&nbsp;&nbsp;z n a m y,&nbsp;&nbsp;p r z e t o&nbsp;&nbsp;c o r a z&nbsp;&nbsp;g &#322; &#281; b i e j&nbsp;&nbsp;z a p u s z c z a j &#261;&nbsp;&nbsp;k o r z e n i e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0820',
                        'name' => 'XX Sierpnia',
                        'content' => 'O potrzebie Ducha &#347;w. dla pasterzy.',
                        'author' => '&#8222;Pasterzom dusz nic bardziej nie potrzeba nad Ducha &#346;wi&#281;tego, aby podczas gdy si&#281; zajmuj&#261; zbawieniem drugich, swego w&#322;asnego nie narazili na niebezpiecze&#324;stwo.&#8221;',
                        'description' => '(S. Ignat. apud Ribad. l. 7).',
                        'description2' => 'Wielu z pasterzy nie po&#380;ytku owiec, ale mleka i we&#322;ny z nich szukaj&#261;; nie a&#380;eby one wiecznie &#380;y&#322;y, ale &#380;eby sami do czasu &#380;yli, zabiegaj&#261;. Czem si&#281; tacy r&#243;&#380;ni&#261; od kupc&#243;w, czem od najemnik&#243;w? &#8212; doch&#243;d&#378;, je&#347;li&#347; m&#261;dry. Aby z o&#322;tarza &#380;y&#322;, kto o&#322;tarzowi s&#322;u&#380;y, nie ma w tem nic zdro&#380;nego; ale &#380;eby o&#322;tarza u&#380;ywa&#322; na podsycenie pychy, na rozdmuchiwanie pr&#243;&#380;no&#347;ci, na podtrzymywanie wyst&#281;pk&#243;w, jest-to rzecz przera&#380;aj&#261;ca, znaczy tyle, co trwonienie dziedzictwa Chrystusowego, dopuszczenie si&#281; najwi&#281;kszej, jaka by&#263; mo&#380;e, zbrodni. O owce, nie o Ducha si&#281; troszczy&#263;, jest-to i siebie zgubi&#263; i ich nie zbawi&#263;. Nie wiele jest nawr&#243;ce&#324;, bo nie wiele jest dobrych pasterz&#243;w; co s&#322;owami buduj&#261;, to r&#281;kami niszcz&#261;, wi&#281;cej daj&#261; zgorszenia, ni&#380; zbudowania. Powo&#322;anie do zajmowania si&#281; dusz zbawieniem nale&#380;y bra&#263; pod piln&#261; uwag&#281;; je&#347;li si&#281; kt&#243;&#347; do tej sprawy zabiera dla kawa&#322;ka chleba, dla sutych dochod&#243;w, dla zwolnienia si&#281; od pracy; ten o ciele my&#347;li, cia&#322;o zabezpiecza, ale dusz&#281; na zgub&#281; skazuje. W&nbsp;&nbsp;t e n&nbsp;&nbsp;s p o s &#243; b&nbsp;&nbsp;&#347; l e p i&nbsp;&nbsp;s t a j &#261;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;w o d z a m i&nbsp;&nbsp;&#347; l e p y c h,&nbsp;&nbsp;i&nbsp;&nbsp;t a k&nbsp;&nbsp;r a z e m&nbsp;&nbsp;z m i e r z a j &#261;&nbsp;&nbsp;d o&nbsp;&nbsp;p r z e p a &#347; c i!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0821',
                        'name' => 'XXI Sierpnia',
                        'content' => 'O wyrzeczeniu si&#281; woli w&#322;asnej.',
                        'author' => '&#8222;Nie chc&#281; i chc&#281; w jednym i tym samym domu nie mieszkaj&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'W &#347;wi&#261;tyni pokoju burzyciele miejsca mie&#263; nie mog&#261;; z woli pochodzi, cokolwiek pok&#243;j narusza; gdzie wola g&#243;ruje, tam ci&#261;g&#322;a wojna; nie masz nawet nadziei pokoju, dop&#243;ki jej w karby nie we&#378;miesz. Pomi&#281;dzy temi rzeczami, kt&#243;rych si&#281; masz wyrzec, wola pierwsze&#324;stwo trzyma; je&#347;li przy niej pozostaniesz, Chrystusa nie osi&#261;gniesz, ani dla ciebie, ani dla zgromadzenia, nie masz od niej wi&#281;kszego nieprzyjaciela; je&#347;li si&#281; z ni&#261; rozstaniesz, ju&#380; po trudno&#347;ci wszelkiej. Niczego niechcie&#263;, przed niczem si&#281; nie wzdryga&#263;, szcz&#281;&#347;cie stanowi; kto do tego przyszed&#322;, ten si&#281; wszystkich trosk pozby&#322;. Wy&#380;szym jest nad obaw&#281;, nic mu si&#281; smutnego, nic przykrego przydarze&#263; nie mo&#380;e. Tak w niebie &#347;wi&#281;ci &#380;yj&#261;, &#380;adnych &#380;&#261;dz, &#380;adnych obaw nie znaj&#261;, oto niebo przed niebem! Nie ma pewniejszej do nieba drogi, nad drog&#281; bez woli; gdy si&#281; jej pozb&#281;dziesz, ka&#380;dy tw&#243;j czyn, ruch ka&#380;dy, przynosi ci zas&#322;ug&#281;. Ile zrobisz krok&#243;w, o tyle stopni zbli&#380;ysz si&#281; do nieba. N i e&nbsp;&nbsp;i d z i e&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;w&nbsp;&nbsp;t e n&nbsp;&nbsp;s p o s &#243; b,&nbsp;&nbsp;a l e&nbsp;&nbsp;b i e g n i e&nbsp;&nbsp;d o&nbsp;&nbsp;n i e b a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0822',
                        'name' => 'XXII Sierpnia',
                        'content' => 'O umartwieniu.',
                        'author' => '&#8222;Je&#347;li cia&#322;o pod pozorem zdrowia uskar&#380;a si&#281; na przykro&#347;&#263;, o zupe&#322;nem zwolnieniu od niej my&#347;le&#263; nie nale&#380;y; ale tylko o zamienieniu na inn&#261; podobn&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Zmys&#322;owo&#347;&#263; jest podst&#281;pn&#261; jak lis, dla uchylenia si&#281; od przykro&#347;ci zmy&#347;la chorob&#281;. Wa&#380;ny mi pow&#243;d, je&#347;li mi&#322;o&#347;&#263; w&#322;asna wydaje wyrok; usunie si&#281; umartwienie, o&#380;yje zmys&#322;owo&#347;&#263;, ale z ni&#261; o&#380;yj&#261; i wyst&#281;pki. Kto dla Boga opuszcza wszystko, ten tyle zdrowia nie wa&#380;y, aby si&#281; ze szkod&#261; duszy obawia&#322; pewnych pozornych dla&#324; niebezpiecze&#324;stw, chyba &#380;eby chcia&#322; przydusi&#263; cnot&#281;, a da&#263; pierwsze&#324;stwo zmys&#322;owo&#347;ci. O zdrowie twoje idzie, nie o dusz&#281;. S&#261; umartwie&#324; rodzaje takie, kt&#243;re dla zdrowia &#380;adnem nie gro&#380;&#261; niebezpiecze&#324;stwem; przykro&#347;&#263; przecie&#380; sprawiaj&#261; i zas&#322;ugi przyczyniaj&#261;. Ci co si&#281; zbytnie o cia&#322;o troszcz&#261;, co je piel&#281;gnuj&#261;, pr&#281;dzej umieraj&#261;; ci co si&#281; hartuj&#261;, co do niewyg&#243;d nawykaj&#261;, d&#322;u&#380;ej &#380;yj&#261;; dogadzanie os&#322;abia i koniec przy&#347;piesza. Ile wyst&#281;pk&#243;w, tyle dla cia&#322;a kat&#243;w; ile cn&#243;t, tyle do &#380;ycia podp&#243;r. J e &#347; l i&nbsp;&nbsp;c h c e s z&nbsp;&nbsp;d &#322; u g o&nbsp;&nbsp;&#380; y &#263;,&nbsp;&nbsp;z a m i &#322; u j&nbsp;&nbsp;c n o t &#281;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0823',
                        'name' => 'XXIII Sierpnia',
                        'content' => 'O dogodno&#347;ci pory rannej.',
                        'author' => '&#8222;Z osobami &#347;wieckiemi lepiej jest zrana o rzeczach zbawienia m&#243;wi&#263;, a po po&#322;udniu o rzeczach doczesnych.&#8221;',
                        'description' => '(S. Ignat. apud Ribad.)',
                        'description2' => 'Jutrzenka nietylko poezyi, ale i pobo&#380;no&#347;ci sprzyja; z&#322;ota godzina, nic j&#261; nie m&#261;ci, nic nie rozrywa, nauk&#281; &#322;atwiej przyjmuje, i silniej zatrzymuje. P i e r w s z a&nbsp;&nbsp;c h w i l a&nbsp;&nbsp;p i e r w s z y m&nbsp;&nbsp;s p r a w o m&nbsp;&nbsp;s &#322; u s z n i e&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n a l e &#380; y. Walka przeciw &#380;&#261;dzom z rana jest &#322;atwiejsz&#261;, ma si&#281; do czynienia z sam&#261; tylko wol&#261;; po po&#322;udniu nieprzyjaci&#243;&#322; zjawia si&#281; wi&#281;cej, wino i pokarmy cia&#322;u mocy dodaj&#261;. Lenistwo i po&#380;&#261;dliwo&#347;&#263; swoje robi&#261;. Kt&#243;&#380; tak sprzymierzonym wrogom podo&#322;a? Jak&#380;e cz&#322;owiek jest innym w rannej i po po&#322;udniowej porze! zrana baranek, po po&#322;udniu lew; zrana oddycha pobo&#380;no&#347;ci&#261;, po po&#322;udniu zuchwalstwem. Nami&#281;tno&#347;ci wzmagaj&#261; si&#281; w skutek pokarmu, wierzga osio&#322; suto od&#380;ywiony. Zrana nale&#380;y umys&#322; przysposabia&#263; i przeciw wszelkim pokusom uzbraja&#263;; aby w ci&#261;gu dnia, je&#347;li jaka zaraza wionie, znalaz&#322;o si&#281; w pogotowiu do jej umorzenia lekarstwo. J e &#347; l i&nbsp;&nbsp;z r a n a&nbsp;&nbsp;d o&nbsp;&nbsp;b o j u&nbsp;&nbsp;w o j s k o&nbsp;&nbsp;u s t a w i s z,&nbsp;&nbsp;n i e p r z y j a c i e l a&nbsp;&nbsp;l &#281; k a &#263;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n i e&nbsp;&nbsp;p o t r z e b u j e s z.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0824',
                        'name' => 'XXIV Sierpnia',
                        'content' => 'O trwaniu w dobrem.',
                        'author' => '&#8222;Je&#347;li co samo z siebie z&#322;em nie jest, tego dla lada nadu&#380;ycia, jakie si&#281; przydarzy, usuwa&#263; nie nale&#380;y; bo inaczej zamyka&#322;aby si&#281; droga do wielkiego wzrostu chwa&#322;y Bo&#380;ej.&#8221;',
                        'description' => '(S. Ignat. apud Gonzal.)',
                        'description2' => 'Nic nie ma tak &#347;wi&#281;tego, czegoby z&#322;y na z&#322;e u&#380;y&#263; nie m&#243;g&#322;, albo przypadkiem, albo ze z&#322;o&#347;ci; jak nie ma kwiatu, z kt&#243;regoby paj&#261;k nie ssa&#322; trucizny. Ale zatem nie idzie, a&#380;eby kwiat dla paj&#261;ka, a rzecz &#347;wi&#281;ta dla nadu&#380;ycia warto&#347;&#263; swoj&#261; traci&#322;a i zaraz si&#281; znosi&#263; mia&#322;a. Niewinne s&#261; stworzenia, kt&#243;re o winy oskar&#380;amy; nie one, ale z&#322;e ich u&#380;ycie pogr&#261;&#380;a nas w wyst&#281;pki. I wino dobrem jest i miecz, chocia&#380; tego na drugich, a tamtego na w&#322;asn&#261; zgub&#281; u&#380;y&#263; mo&#380;esz. Gdyby kto wszystkiego z&#322;ego przyczyny pousuwa&#263; chcia&#322;, musia&#322;by pousuwa&#263; wszystko, gdy&#380; wszystkiego na jedn&#261; lub drug&#261; stron&#281; u&#380;y&#263;, albo nadu&#380;y&#263; mo&#380;emy. C&#243;&#380; &#347;wi&#281;tszem jest nad Pismo &#346;wi&#281;te? A ile&#380; ze z&#322;ego zrozumienia Pisma powsta&#322;o herezyj? Nic wszechstronnie nie jest doskona&#322;em. Wszystkie stworzenia podlegaj&#261; wadom; te z nich za najlepsze uwa&#380;a&#263; nale&#380;y, kt&#243;re tych wad maj&#261; najmniej. I&nbsp;&nbsp;s &#322; o &#324; c e&nbsp;&nbsp;c i e &#324;&nbsp;&nbsp;r z u c a,&nbsp;&nbsp;a l e&nbsp;&nbsp;c z y &#380;&nbsp;&nbsp;d l a t e g o&nbsp;&nbsp;m a&nbsp;&nbsp;b y &#263;&nbsp;&nbsp;u s u n i &#281; t e&nbsp;&nbsp;z&nbsp;&nbsp;f i r m a m e n t u?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0825',
                        'name' => 'XXV Sierpnia',
                        'content' => 'O potrzebie zdrowia.',
                        'author' => '&#8222;W dusz pasterstwie wi&#281;cej znaczy uncya &#347;wi&#281;to&#347;ci przy dobrem zdrowiu cia&#322;a, ni&#380; wysoka &#347;wi&#281;to&#347;&#263; przy uncyi zdrowia.&#8221;',
                        'description' => '(S. Ignat. apud Lyrae. f. 353).',
                        'description2' => 'Pomi&#281;dzy ascet&#261; i Aposto&#322;em wielka zachodzi r&#243;&#380;nica; pierwszy, chocia&#380; chory, powinno&#347;ci swej zado&#347;&#263; czyni; drugi, je&#347;li chory, nawet w cz&#281;&#347;ci jej nie spe&#322;nia. Obowi&#261;zek pierwszego jest ca&#322;y na wewn&#261;trz, drugiego na zewn&#261;trz. Czem miecz bez r&#281;koje&#347;ci, tem gorliwo&#347;&#263; bez si&#322;; uskutecznienie tego, co zamierzamy, w obu razach jest niemo&#380;liwe. Wielki umys&#322; bez zdrowia cia&#322;a, jest cia&#322;em bez r&#261;k; k&#322;opot sprawia, ale obowi&#261;zku nie pe&#322;ni. Zdrowie ciebie zachowuje, ale innym pomaga; jak nie dla siebie, ale dla innych &#380;yjesz; tak nie dla siebie, ale dla innych zdrowie piel&#281;gnujesz, bez kt&#243;rego nie b&#281;dziesz Aposto&#322;em, chocia&#380;by&#347; by&#322; wielkim &#346;wi&#281;tym. Tak jednak dbaj o zdrowie, aby&#347; nie szkodzi&#322; &#347;wi&#281;to&#347;ci. Cz&#281;sto nic tyle nie szkodzi &#347;wi&#281;to&#347;ci, ile zbytnia troska o zdrowie, pod kt&#243;rej pozorem &#380;yj&#261; wady, os&#322;aniaj&#261; si&#281; nami&#281;tno&#347;ci. T a k i e&nbsp;&nbsp;z d r ow i e&nbsp;&nbsp;n i e&nbsp;&nbsp;w s p i e r a&nbsp;&nbsp;g o r l i w o &#347; c i,&nbsp;&nbsp;a l e&nbsp;&nbsp;j &#261;&nbsp;&nbsp;n i w e c z y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0826',
                        'name' => 'XXVI Sierpnia',
                        'content' => 'O &#380;yciu dobrem.',
                        'author' => '&#8222;Czy ci&#281; B&#243;g umie&#347;ci&#322; na &#347;wiecie, aby&#347; tu &#380;y&#322;, jak gdyby nieba i piek&#322;a nie by&#322;o; albo czy zbawienie jest rzecz&#261; tak &#322;atw&#261;, i&#380; starania nie potrzebuje?&#8221;',
                        'description' => '(S. Ignat. epist. ad Eccles.)',
                        'description2' => 'Ach! jak&#380;e ma&#322;o o rzeczy wieczne dba &#347;wiat, &#380;yje, aby &#380;y&#263;. Wszyscy niemal &#380;yjemy, jakby&#347;my nigdy umiera&#263; nie mieli, bez pami&#281;ci na przysz&#322;o&#347;&#263;, jakby nie by&#322;o &#380;adnej kary za zbrodnie, ani &#380;adnej nagrody za cnoty. Wyst&#281;pki tak &#347;wiat&#322;o rozumu os&#322;abiaj&#261;, a &#380;&#261;dze tak serce nasze w swe sid&#322;a ci&#261;gn&#261;, tak g&#281;st&#261; mg&#322;&#261; umys&#322; zas&#281;piaj&#261;, &#380;e my&#347;lenie o rzeczach wiecznych albo si&#281; nam wydaje przykrem, albo niepo&#380;ytecznem. Gnu&#347;no&#347;&#263; ostatecznie nas w tem utwierdza. Nazwie katolik&#243;w, kt&#243;r&#261; nosimy, obyczaje k&#322;am zadaj&#261;: zmys&#322;owo&#347;&#263;, w kt&#243;rej si&#281; pogr&#261;&#380;amy, o kt&#243;rej my&#347;limy, r&#243;wna nas z ateuszami albo zwierz&#281;tami. Natura da&#322;a nam twarz wzniesion&#261; ku g&#243;rze, aby&#347;my spogl&#261;dali w niebo i ci&#261;gle sobie przypominali, &#380;e tam si&#281; kiedy&#347; znale&#378;&#263; mamy; my jednak na to nie zwa&#380;amy. O jak&#380;e to smutne, jak niem&#261;dre! Mo&#380;e kiedy&#347; sw&#243;j b&#322;&#261;d poznamy, mo&#380;e si&#281; do pokuty zabierzemy; ale pokuta p&#243;&#378;na, jak&#380;e rzadko bywa prawdziwa; odk&#322;adanie jej &#347;wiadczy, &#380;e twe dotychczasowe &#380;ycie chcesz przed&#322;u&#380;y&#263;, nie poprawi&#263;. T a k&nbsp;&nbsp;&#380; y j,&nbsp;&nbsp;a b y &#347;&nbsp;&nbsp;t e g o&nbsp;&nbsp;n i e&nbsp;&nbsp;&#380; a &#322; o w a &#322;;&nbsp;&nbsp;t a k&nbsp;&nbsp;p o s t &#281; p u j,&nbsp;&nbsp;a b y &#347;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;i&nbsp;&nbsp;u m r z e &#263;&nbsp;&nbsp;n i e&nbsp;&nbsp;l &#281; k a &#322;,&nbsp;&nbsp;i&nbsp;&nbsp;&#380; y &#263;&nbsp;&nbsp;n i e&nbsp;&nbsp;w s t y d z i &#322;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0827',
                        'name' => 'XXVII Sierpnia',
                        'content' => 'O gotowo&#347;ci na &#347;mier&#263;.',
                        'author' => '&#8222;Je&#347;liby zaraz umrze&#263; przysz&#322;o, coby si&#281; z nami sta&#322;o; jakiby by&#322; nasz rachunek z dostatk&#243;w, z &#322;ask tylu i towarzysz&#243;w przez nas zgin&#261;&#263; maj&#261;cych.&#8221;',
                        'description' => '(S. Ignat. ad Eccles.)',
                        'description2' => 'Nieszcz&#281;&#347;liwy, kto wtedy dopiero o rachunku my&#347;li, gdy ju&#380; umiera&#263; potrzeba. &#346;mier&#263; jak nieprzyjaciel czycha, znienacka napada; B&#243;g, kt&#243;ry dzisiaj przebaczenie ofiaruje, dnia jutrzejszego nie przyrzek&#322; <sup>1</sup>. Takie ma by&#263; &#380;ycie, aby by&#322;o ci&#261;g&#322;em do &#347;mierci przygotowaniem; nic tam nie odwlekaj, gdzie usi&#322;owania nic nie pomog&#261;. Nieznana nam jest ostatnia &#380;ycia godzina, aby&#347;my ka&#380;dej byli gotowi <sup>2</sup>. O &#347;mierci, jako o rzeczy od nas dalekiej, my&#347;limy, gdy ona tu&#380; za nami jest, i bez r&#243;&#380;nicy wieku zabiera nas z po&#347;r&#243;d &#380;ywych, gdy si&#281; najmniej tego spodziewamy. Kto chce dobrze umrze&#263;, niech teraz umiera&#263; zaczyna; wszystko niech codziennie do &#347;mierci przygotowuje; gdzie &#347;mier&#263; zagra&#380;a, tam si&#322;y, zmys&#322;y, wszystko ustaje &#8212; i najgorzej wyjdziesz, je&#347;li&#347; a&#380; do tej chwili ze wszystkiem zwleka&#322;. B &#243; g&nbsp;&nbsp;z r z &#261; d z i,&nbsp;&nbsp;z a&nbsp;&nbsp;k a r &#281;,&nbsp;&nbsp;c a &#322; k i e m&nbsp;&nbsp;s &#322; u s z n i e,&nbsp;&nbsp;a b y&nbsp;&nbsp;t e n&nbsp;&nbsp;k t o&nbsp;&nbsp;n i e&nbsp;&nbsp;c h c i a &#322;,&nbsp;&nbsp;g d y&nbsp;&nbsp;m &#243; g &#322;;&nbsp;&nbsp;n i e&nbsp;&nbsp;m &#243; g &#322;,&nbsp;&nbsp;g d y&nbsp;&nbsp;z e c h c e.',
                        'description3' => '1) &#346;. Augustyn.<br/>
    2) &#346;. Mateusz 24, 44.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0828',
                        'name' => 'XXVIII Sierpnia',
                        'content' => 'O przebieg&#322;o&#347;ci z&#322;ego ducha.',
                        'author' => '&#8222;Szatan, ju&#380;-to wyzuwa ci&#281; z boja&#378;ni, aby&#347; zgrzeszy&#322;; ju&#380; j&#261; wzmacnia, aby&#347; rozpacza&#322;, a w obu razach na twoj&#261; zgub&#281; czycha.&#8221;',
                        'description' => '(S. Ignat. apud Nolar.)',
                        'description2' => 'Przebieg&#322;y-to szalbierz! gdy do z&#322;ego nak&#322;oni, wielko&#347;&#263; zbrodni powi&#281;ksza, a&#380;eby do rozpaczy przywi&#243;d&#322;. M a&nbsp;&nbsp;t y s i &#261; c e&nbsp;&nbsp;s p o s o b &#243; w&nbsp;&nbsp;s z y d z e n i a&nbsp;&nbsp;z&nbsp;&nbsp;n a s. &#379;e&#347; dotychczas w niewinno&#347;ci &#380;y&#322;, ciesz si&#281;, ale zbytnio sobie nie ufaj; ka&#380;dy z tych co teraz gorej&#261; w piekle, by&#322; kiedy&#347; niewinny; nie znajdowanie si&#281; przez jaki&#347; czas w niewinno&#347;ci, ale wytrwanie do ko&#324;ca w niewinno&#347;ci zwalnia z obawy. Zna si&#281; wr&#243;g piekielny na warto&#347;ci duszy, skoro takie o jej pochwycenie czyni zabiegi. Gdyby cenn&#261; nie by&#322;a, toby chciwo&#347;ci nigdy w nim nie rozbudza&#322;a. My strasznie jeste&#347;my gnu&#347;ni, strasznie niedbali, gdy mniej si&#281; troszczymy o zbawienie duszy, ni&#380; on o jej zgub&#281;. I m&nbsp;&nbsp;s k a r b&nbsp;&nbsp;w i &#281; k s z y,&nbsp;&nbsp;t e m&nbsp;&nbsp;b a c z e n i e&nbsp;&nbsp;w i n n o&nbsp;&nbsp;b y &#263;&nbsp;&nbsp;p i l n i e j s z e. Wieczn&#261; jest dusza, niebo i piek&#322;o o jej posiadanie walcz&#261;; zar&#243;wno zbytnia boja&#378;&#324; jak zbytnia ufno&#347;&#263; jest dla niej szkodliw&#261;: trzyma&#263; si&#281; nale&#380;y drogi po&#347;redniej, tak, aby nadzieja nie by&#322;a bez boja&#378;ni, a boja&#378;&#324; bez nadziei.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0829',
                        'name' => 'XXIX Sierpnia',
                        'content' => 'O niesprzeciwianiu si&#281; drugim.',
                        'author' => '&#8222;Nigdy nie powiniene&#347; si&#281; sprzeciwia&#263; nikomu, czy ma s&#322;uszno&#347;&#263;, czy nie: zawsze za&#347; przyj&#261;&#263;, co si&#281; innym podoba.&#8221;',
                        'description' => '(S. Ignat. apud Lyrae. in anteloq.)',
                        'description2' => 'P&#322;omie&#324; si&#281; wzmaga rozdmuchiwaniem, i tem silniejszy si&#281; staje, tem wy&#380;ej si&#281; wznosi, im mocniejsze jest dmuchanie; dop&#243;ty nie os&#322;abnie, dop&#243;ki si&#281; wszelkiego podmuchu nie zaniecha. Milczeniem twojem usta z&#322;o&#347;nikowi zamkniesz. Nie z&#261;b obcy, ale w&#322;asne sumienie ci dokucza: nikt ci&#281; nie obrazi, je&#347;li si&#281; sam nie obrazisz; je&#347;li&#347; sam sobie rany nie zada&#322;, pociski innych ci&#281; nie zrani&#261;. Wszelkie wysi&#322;ki pokonasz, je&#347;li umys&#322; odpowiednio na ich przyj&#281;cie przygotujesz. Jest-to cech&#261; s&#322;abego umys&#322;u, je&#347;li si&#281; dla lada powodu obra&#380;a; inny bardziej hartowny na toby nie zwa&#380;a&#322;, alboby na swoj&#261; korzy&#347;&#263; obr&#243;ci&#322;. Wszelk&#261; obraz&#281;, jak&#261; bywa dotkni&#281;ty, albo za pr&#243;b&#281; swej cnoty poczytuje, albo jako kar&#281; za grzech znosi. Nic &#322;atwiejszego, jak o czem&#347; z&#322;em od z&#322;ych s&#322;ysze&#263;; nikt im nie wierzy, chyba &#380;e ty sam, bardzo si&#281; t&#322;&#243;macz&#261;c, w podejrzenie si&#281; podajesz. Milcz, milczeniem zwyci&#281;&#380;ysz. K &#322; &#243; t n i e&nbsp;&nbsp;d o&nbsp;&nbsp;n i c z e g o&nbsp;&nbsp;n i e&nbsp;&nbsp;p r o w a d z &#261;,&nbsp;&nbsp;m i &#322; o &#347; &#263;&nbsp;&nbsp;t y l k o&nbsp;&nbsp;n a r u s z a j &#261;,&nbsp;&nbsp;a&nbsp;&nbsp;p r a w d y&nbsp;&nbsp;n i e&nbsp;&nbsp;w y &#347; w i e c a j &#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0830',
                        'name' => 'XXX Sierpnia',
                        'content' => 'O truci&#378;nie ksi&#261;&#380;kowej.',
                        'author' => '&#8222;Co w ki&#261;&#380;kach trucizn&#261; jest zaprawione, to si&#281; szerzy daleko, je&#347;li w pocz&#261;tkach temu nie zaradzimy.&#8221;',
                        'description' => '(S. Ignat. apud Ribad.)',
                        'description2' => 'Nieszcz&#281;sne pi&#243;ro! tylu kl&#281;sk sprawca. Z pomi&#281;dzy r&#243;&#380;nych chor&#243;b, ta jest najgorsza, kt&#243;ra jest nieuleczalna. Co piszemy, to pozostaje, przez r&#243;&#380;ne r&#281;ce przechodzi, wieki ca&#322;e zatruwa, wszystkim i zawsze szkodzi. Inne trucizny z czasem trac&#261; si&#322;&#281;, ale te, kt&#243;re si&#281; powierzaj&#261; ksi&#261;&#380;kom swoich nie trac&#261;, zdaleka dzia&#322;aj&#261;, i tam si&#281; dostaj&#261;, gdzieby si&#281; ich autor dosta&#263; nie m&#243;g&#322;. Pewne prawo dla twego pi&#243;ra ustan&#243;w, aby z pod niego nic nie wysz&#322;o, czemby si&#281; niewinne oko obrazi&#263; mog&#322;o, albo coby dwuznaczno&#347;ci&#261; tchn&#281;&#322;o. Pisz, coby z po&#380;ytkiem czytelnik&#243;w by&#322;o, coby ich budowa&#322;o, cieszy&#322;o, w cnocie utwierdza&#322;o. Trucizna, cho&#263;by&#347; j&#261; poz&#322;oci&#322;, szkodzi. Szukanie nauki w brudach jadem trucizny zaprawionych, mo&#380;e ci&#281; kszta&#322;ci, ale i wyst&#281;pnym czyni. Podobne rzeczy bezkarnie si&#281; nie czytaj&#261;, z&#322;e pomimo woli si&#281; wciska i zgubnie dzia&#322;a. U c i e c z k a&nbsp;&nbsp;j e s t&nbsp;&nbsp;t u&nbsp;&nbsp;z w y c i &#281; z t w e m.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0831',
                        'name' => 'XXXI Sierpnia',
                        'content' => 'O sposobie pozyskiwania dusz.',
                        'author' => '&#8222;Z lud&#378;mi zaj&#281;tymi &#347;wiatem nie nale&#380;y od razu o sprawach duszy m&#243;wi&#263;, boby to znaczy&#322;o w&#281;dk&#281; bez przyn&#281;ty w wod&#281; zapuszcza&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Bartol. l. 4).',
                        'description2' => 'Drzewo mokre nie chce si&#281; pali&#263;, naprz&#243;d trzeba je wysuszy&#263;, nast&#281;pnie ogrza&#263;, i tak sposobnem uczyni&#263; do przyj&#281;cia ognia, kt&#243;remu si&#281; pierwiej ca&#322;&#261; si&#322;&#261; opiera&#322;o. Podobnie trzeba si&#281; zachowa&#263; i z umys&#322;em, aby go nak&#322;oni&#263; do tego, na co niech&#281;tnie patrzy natura. O&nbsp;&nbsp;n i c z y j e m&nbsp;&nbsp;n a w r &#243; c e n i u&nbsp;&nbsp;n i e&nbsp;&nbsp;n a l e &#380; y&nbsp;&nbsp;p o w &#261; t p i e w a &#263;,&nbsp;&nbsp;c o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n a m&nbsp;&nbsp;z d a j e&nbsp;&nbsp;n i e p o d o b n e,&nbsp;&nbsp;t o&nbsp;&nbsp;s t a n i e&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p o d o b n e m,&nbsp;&nbsp;b y l e b y &#347; m y&nbsp;&nbsp;s t o s o w n y c h&nbsp;&nbsp;u &#380; y l i&nbsp;&nbsp;&#347; r o d k &#243; w. Ca&#322;a rzecz na tem polega, &#380;eby si&#281; nie zra&#380;a&#263;, &#380;eby nas ch&#281;&#263; przyprowadzenia do skutku, co&#347;my zamierzyli, nie opuszcza&#322;a. Nag&#322;e przemiany s&#261; dzie&#322;em Boga, nie ludzi; do&#347;wiadczenie i natura uczy nas, aby&#347;my dzia&#322;ali zwolna, stopniowo; prob&#243;j, &#322;askawie, jakby podst&#281;pem, po przyjacielsku na pr&#243;&#380;no&#347;&#263; natrze&#263;, a wkr&#243;tce od rzeczy ziemskich ku zami&#322;owaniu niebieskich nak&#322;onisz. Je&#347;li si&#281; za pierwsz&#261; raz&#261; nie powiedzie, b&#261;d&#378; cierpliwym, czekaj na czas odpowiedni; patrz, kropla po kropli na kamie&#324; padaj&#261;c tworzy w nim wy&#380;&#322;obienie, nawskro&#347; przedr&#261;&#380;a, podczas gdy gwa&#322;towny p&#281;d wody skruszy&#322;by go niezawodnie.',
                        'description3' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_09',
                'name' => 'September',
                'colour_value' => '#646b3b',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_0901',
                        'name' => 'I Wrze&#347;nia',
                        'content' => 'O dzielno&#347;ci cnoty.',
                        'author' => '&#8222;M&#281;&#380;owie wielkiej cnoty, chocia&#380; niewielkiej nauki, z wielk&#261; korzy&#347;ci&#261; do swoich przemawiaj&#261;, i pr&#281;dzej ich do poczciwo&#347;ci nak&#322;oni&#261;, ni&#380;by to zdo&#322;ali nawet najuczensi.&#8221;',
                        'description' => '(S. Ignat. apud Bart. f. 388).',
                        'description2' => 'Co innego jest wielom&#243;wno&#347;&#263;, a co innego dusz w&#322;adczyni, wymowa. M&#243;wi&#261;cych jest wielu, ale nie wielu w&#322;adn&#261;cych duszami; bo wielu troszczy si&#281; o to, co nale&#380;y m&#243;wi&#263;, a nie troszczy si&#281; o to, co nale&#380;y czyni&#263;. S&#322;owa p&#322;yn&#261;, ale serca nie poruszaj&#261;; je&#347;li z cnoty nie p&#322;yn&#261;. Kto chce innych do cnoty nak&#322;oni&#263;, niech siebie pierwiej nak&#322;oni, inaczej bezskuteczn&#261; b&#281;dzie mowa; ha&#322;asu narobi, ale dusz nie poci&#261;gnie. Zabawne s&#261; wielu s&#261;dy! tych najlepszymi nazywaj&#261; kaznodziejami, kt&#243;rym na s&#322;owach nie zbywa, kt&#243;rzy si&#281; z wyszukaniem wyra&#380;aj&#261;; jakgdyby g&#322;&#243;wn&#261; zalet&#261; kaznodziei by&#322; poklask ludzi, nie dusz nawr&#243;cenie. Pr&#281;dzej &#347;wi&#281;to&#347;ci&#261; obyczaj&#243;w poprawisz zepsute ludu obyczaje, ni&#380; gdyby&#347; z tysi&#261;ca katedr o cnocie naucza&#322;. P r &#281; d z e j&nbsp;&nbsp;m o &#380; n a&nbsp;&nbsp;p o w i e d z i e &#263;,&nbsp;&nbsp;&#380; e&nbsp;&nbsp;n a t u r a&nbsp;&nbsp;b &#322; &#261; d z i;&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;&#380; e&nbsp;&nbsp;l u d&nbsp;&nbsp;o d&nbsp;&nbsp;o b y c z a j &#243; w&nbsp;&nbsp;s w y c h&nbsp;&nbsp;p r z e w o d n i k &#243; w&nbsp;&nbsp;o d s t &#281; p u j e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0902',
                        'name' => 'II Wrze&#347;nia',
                        'content' => 'O nale&#380;ytem ujarzmieniu &#380;&#261;dz niedobrych.',
                        'author' => '&#8222;Je&#347;li&#347;my pop&#281;d&#243;w naszych dobrze nie u&#347;mierzyli, cz&#281;sto wyrywaj&#261; si&#281; nam s&#322;owa i czyny, ca&#322;kiem odmienne od tego, z czem si&#281; jawnie o&#347;wiadczamy: dop&#243;ty nale&#380;y si&#281; surowo z niemi obchodzi&#263;, dop&#243;ki ich nale&#380;ycie nie ujarzmimy.&#8221;',
                        'description' => '(S . Ignat. Vitae l. 3).',
                        'description2' => 'Dop&#243;ty w wi&#281;zach trzyma&#263; nale&#380;y dzikie zwierz&#281;ta, dop&#243;ki si&#281; nie ob&#322;askawi&#261; i gro&#378;nemi by&#263; przestan&#261;: podobnie rygor niech uspakaja zwierz&#281;ce &#380;&#261;dze, inaczej wielkie tobie i innym przynios&#261; szkody. Dop&#243;ki &#380;yjemy, dop&#243;ty nieprzyjaci&#243;&#322; w sobie nosimy; u&#347;piony jest, nie zgaszony ogie&#324;, kt&#243;ry si&#281; kryje pod popio&#322;em; za przy&#322;o&#380;eniem lnianych paku&#322;, p&#322;omieniem wybuchnie, i wyra&#378;nie, jasno si&#281; uka&#380;e. &#321;atwo dziczej&#261; zwierz&#281;ta, kt&#243;re&#347;my mieli za oswojone; wi&#281;cej jednak ufajmy im, ni&#380; wrodzonym &#380;&#261;dzom naszym; bo te pr&#281;dzej, nawet gdy&#347;my je mieli za obumar&#322;e, do &#380;ycia wracaj&#261; i silniej szkodz&#261;. Kto nie chce rany, niech wci&#261;&#380; z broni&#261; chodzi; niech si&#281; z ni&#261; nie roz&#322;&#261;cza ani w nocy, ani we dnie, niech zawsze czuwa: bo i wrogowie gro&#378;nymi nam by&#263; nie przestan&#261;, dop&#243;ki ich &#347;mier&#263; ostatecznie nie uspokoi w grobie.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0903',
                        'name' => 'III Wrze&#347;nia',
                        'content' => 'O nieskrywaniu si&#281;.',
                        'author' => '&#8222;Pragnij, &#380;eby ci&#281; wszyscy poznali, tak wewn&#281;trznie, jak zewn&#281;trznie.&#8221;',
                        'description' => '(S. Ignat. apud Lyrae. in anteloq.)',
                        'description2' => 'Jeste&#347; na &#347;wiecie dla po&#380;ytku drugich, kry&#263; si&#281; nie nale&#380;y, boby to znaczy&#322;o chowa&#263; &#347;wiat&#322;o pod korzec <sup>1</sup>. Na coby si&#281; przyda&#322;o z&#322;oto, gdyby nazawsze pozosta&#322;o w swych kryj&#243;wkach g&#243;rnych? Ogie&#324;, gdziekolwiek jest, &#347;wiat&#322;em i ciep&#322;em si&#281; zdradza, chce s&#322;u&#380;y&#263; wszystkim, ch&#281;tnie swe us&#322;ugi ofiaruje. Podobnie i cz&#322;owiek, na wz&#243;r Aposto&#322;a, gdziekolwiek si&#281; znajdzie, niech zna&#263; o sobie daje naprz&#243;d &#347;wiat&#322;em przyk&#322;adu, potem ciep&#322;em &#347;wi&#281;tej nauki <sup>2</sup>. Ci co od drugich stroni&#261;, co si&#281; pozna&#263; nie daj&#261;, po wi&#281;kszej cz&#281;&#347;ci s&#261; synami ciemno&#347;ci <sup>3</sup>; rzadko nale&#380;&#261; tacy do dobrych. S&#322;o&#324;ce nie obawia si&#281; spojrze&#324;, owszem dzie&#324; stwarza, aby na&#324; patrzano. Wyst&#281;puje na widowni&#261; i przedstawia si&#281; wszystkim. Patrzy na&#324; ka&#380;dy i widzi jakiem jest. N i e&nbsp;&nbsp;k r y j&nbsp;&nbsp;s i &#281;,&nbsp;&nbsp;d a j&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p o z n a &#263;.',
                        'description3' => '1) &#346;. Mateusz 5, 15.<br/>
    2) Tyt. 2, 7.<br/>
    3) &#346;. Jan 3, 20.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0904',
                        'name' => 'IV Wrze&#347;nia',
                        'content' => 'O ostro&#380;no&#347;ci w przyja&#378;ni.',
                        'author' => '&#8222;Nie b&#261;d&#378; dla wsztkich otwartym, ani za&#380;y&#322;ym; ale si&#281; rad&#378; Ducha &#346;wi&#281;tego i uwa&#380;aj, do kogo ci&#281; bardziej nak&#322;ania.&#8221;',
                        'description' => '(S. Ignat. apud Lyrae. in anteloq.)',
                        'description2' => 'Znany wszystkim by&#263; mo&#380;esz, przyjazny dla nie wielu, poufa&#322;y z nikim. Powszednieje i &#322;atwo idzie w pogard&#281;, co si&#281; wci&#261;&#380; pod r&#281;k&#281; nawija, codziennie. Z&nbsp;&nbsp;d a l e k a&nbsp;&nbsp;n i e r &#243; w n i e&nbsp;&nbsp;w i &#281; k s z y&nbsp;&nbsp;s z a c u n ek. Ksi&#261;&#380;ka po przeczytaniu odk&#322;ada si&#281; na stron&#281;. Zawsze co&#347; zachowaj, czegoby si&#281; od ciebie m&#243;g&#322; inny spodziewa&#263;, nie pozw&#243;l wyczerpywa&#263; si&#281; w zupe&#322;no&#347;ci. Niech zawsze co&#347; b&#281;dzie w ukryciu, aby do ciebie n&#281;ci&#263; mog&#322;o. Wyrocznie wydaj&#261; si&#281; z ukrycia, wi&#281;ksza wiara dla takich. Co si&#281; wszystkim nastr&#281;cza, co zawsze jest na podor&#281;dziu, to si&#281; zwykle ma&#322;o ceni; obfito&#347;&#263; cen&#281; zmniejsza, a rzadko&#347;&#263; podnosi. Tak si&#281; z bli&#378;nim jak z ogniem zachowaj, ani zbyt blizko, ani zbyt daleko stawaj; je&#347;li si&#281; za bardzo zbli&#380;ysz, to si&#281; spalisz; je&#347;li si&#281; za daleko odsuniesz, to zzi&#281;bniesz, zdr&#281;twiejesz.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0905',
                        'name' => 'V Wrze&#347;nia',
                        'content' => 'O podobaniu si&#281; Bogu.',
                        'author' => '&#8222;Pozw&#243;l aby ci&#281; wszyscy mieli za g&#322;upiego, staraj si&#281; tylko, aby ci&#281; B&#243;g mia&#322; za m&#261;drego.&#8221;',
                        'description' => '(S. Ignat. apud Lyrae. in anteloq.)',
                        'description2' => 'Inne s&#261; s&#261;dy Boskie, a inne ludzkie, i to najcz&#281;&#347;ciej wprost przeciwne! Ludzie z tego s&#261;dz&#261;, co si&#281; pod oczy nawija; B&#243;g za&#347; patrzy na serce <sup>1</sup>, i to wybiera, co si&#281; dla &#347;wiata nie wiele wartem wydaje. Nie wiele na tem zale&#380;y, co o tobie ludzie my&#347;l&#261;. Na ich mowy i zdania tyle zwa&#380;aj, ile na szmer komar&#243;w; albo ile niebo zwa&#380;a na skrzeczenie &#380;ab w b&#322;ocie, dla kt&#243;rych w porz&#261;dku swym &#380;adnych zmian nie czyni. &#379;e b&#322;oto dla wieprza jest po&#380;&#261;da&#324;sze, ni&#380; r&#243;&#380;e; &#380;e brudy wieprz przenosi nad per&#322;y: nic a nic przez to nie ujmuje, per&#322;om ani r&#243;&#380;om, zar&#243;wno warto&#347;ci jednych jak pi&#281;kno&#347;ci drugich nie zmniejsza. N i e&nbsp;&nbsp;c o&nbsp;&nbsp;o&nbsp;&nbsp;t o b i e&nbsp;&nbsp;s &#261; d z i,&nbsp;&nbsp;a l e&nbsp;&nbsp;k t o&nbsp;&nbsp;s &#261; d z i,&nbsp;&nbsp;z w a &#380; a j. Takim i tyle wartym pozostaniesz, jakim i ile wartym wobec Boga jeste&#347;. Stosownie do wyroku, jaki B&#243;g wyda, sprawa twoja albo si&#281; utrzyma albo upadnie. G d y&nbsp;&nbsp;c i &#281;&nbsp;&nbsp;B &#243; g&nbsp;&nbsp;n i e&nbsp;&nbsp;o d r z u c i,&nbsp;&nbsp;g d y&nbsp;&nbsp;c o&nbsp;&nbsp;r o b i s z&nbsp;&nbsp;p o c h w a l i,&nbsp;&nbsp;g d y&nbsp;&nbsp;s u m i e n i e&nbsp;&nbsp;m a s z&nbsp;&nbsp;s p o k o j n e;&nbsp;&nbsp;t o&nbsp;&nbsp;n i c&nbsp;&nbsp;s o b i e&nbsp;&nbsp;n i e&nbsp;&nbsp;r &#243; b,&nbsp;&nbsp;n a w e t&nbsp;&nbsp;z&nbsp;&nbsp;s z y d e r s t w&nbsp;&nbsp;c a &#322; e g o&nbsp;&nbsp;&#347; w i a t a.',
                        'description3' => '1) I. Kr&#243;l. 16, 7.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0906',
                        'name' => 'VI Wrze&#347;nia',
                        'content' => 'O r&#261;czo&#347;ci.',
                        'author' => '&#8222;Najlepszy dow&#243;d pos&#322;usze&#324;stwa, gdy rozkaz z ochot&#261; przyjmujesz, gdy na naleganie lub powt&#243;rzenie nie czekasz; ale si&#281; zaraz do wype&#322;nienia zabierasz.&#8221;',
                        'description' => '(S. Ignatius in testam.)',
                        'description2' => 'Niech&#281;tne s&#322;uchanie jest cech&#261; leniwych i zwierz&#261;t, kt&#243;re bod&#378;ca potrzebuj&#261;, i nie wiele zrobi&#261;, je&#347;li ze s&#322;owami raz&#243;w nie po&#322;&#261;czysz. Szlachetny umys&#322; zabiera si&#281; do spe&#322;nienia danego rozkazu r&#261;czo. Jak dwa razy daje, kto zaraz daje; tak dwa razy s&#322;ucha, kto zaraz s&#322;ucha, i podw&#243;jnej mo&#380;e si&#281; spodziewa&#263; nagrody. Jedn&#261; koron&#281; w&#322;o&#380;y mu na skronie pos&#322;usze&#324;stwo, a drug&#261; r&#261;czo&#347;&#263; w jego spe&#322;nieniu. Pomi&#281;dzy r &#261; c z o &#347; c i &#261;&nbsp;&nbsp;i&nbsp;&nbsp;z w &#322; o k &#261; w literach r&#243;&#380;nica nie wielka, ale w rzeczy bardzo wielka; gdzie zwlekamy, tam ani dla rozkazuj&#261;cego, ani dla rozkazu mi&#322;o&#347;ci nie mamy. M i &#322; o &#347; &#263;&nbsp;&nbsp;n i e&nbsp;&nbsp;z n a&nbsp;&nbsp;z w &#322; o k i&nbsp;&nbsp;&#8212;&nbsp;&nbsp;k t o&nbsp;&nbsp;m i &#322; u j e,&nbsp;&nbsp;t e n&nbsp;&nbsp;b e z&nbsp;&nbsp;t r u d n o &#347; c i&nbsp;&nbsp;s &#322; u c h a. Nie ci&#281;&#380;y nam to, co ch&#281;tnie niesiemy: up&#243;r tylko, sobie i drugim ci&#281;&#380;ki, sprawia przykro&#347;&#263;. Rzeczy twarde, wa&#380;kie potrzebuj&#261; silnego nacisku, wi&#281;kszych wyt&#281;&#380;e&#324;, aby si&#281; z miejsca ruszy&#322;y, po&#322;o&#380;enie swoje zmieni&#322;y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0907',
                        'name' => 'VII Wrze&#347;nia',
                        'content' => 'O rych&#322;em usuwaniu wad.',
                        'author' => '&#8222;B&#322;&#281;dy jak najpr&#281;dzej usuwa&#263; powinien zwierzchnik, aby swojem pob&#322;a&#380;aniem nie upowa&#380;nia&#322; do nich, nie nadawa&#322; im mocy jakby prawa.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Ro&#347;liny szkodliwe, wcze&#347;nie nie wyrwane, pr&#281;dko si&#281; rozrastaj&#261;; podobnie z&#322;e pr&#281;dko si&#281; wzmaga; bezkarno&#347;&#263;, pob&#322;a&#380;anie toruje mu drog&#281;. Kto oszcz&#281;dza winnego, ten szkodzi niewinnym, zarazie, kt&#243;r&#261;by m&#243;g&#322; usun&#261;&#263;, pozwala si&#281; szerzy&#263;. Si&#322;a przyk&#322;adu w oddzia&#322;ywaniu jest fataln&#261;. Nawet tacy, kt&#243;rzy zk&#261;din&#261;d nie s&#261; zbyt pochopni ku z&#322;emu, pobudzeni przyk&#322;adem pogr&#261;&#380;aj&#261; si&#281; we wszelkiego rodzaju nieprawo&#347;ci. Gdzie nie ma rygoru, tam ka&#380;dy s&#261;dzi, &#380;e mu wolno wszystko. Nikt sam nie chce by&#263; z&#322;ym, towarzysza szuka; a&#380;eby go znalaz&#322; i to niejednego, nie potrzeba zach&#281;ty, wystarczy przyk&#322;ad; je&#347;li nadto patrz&#261;cy zobaczy, &#380;e z&#322;e uchodzi bezkarnie, to to go dzielniej ni&#380; jaka zach&#281;ta pobudzi do na&#347;ladowania. W&#347;r&#243;d obcych &#322;atwiej si&#281; znajdzie doradzca ni&#380; przestrzegacz; z przestrog&#261; zwykle si&#281; zwracamy do ukochanych, zach&#281;t&#281; rozci&#261;gamy i do nieprzyjaci&#243;&#322;. Drogich nam strofujemy, bo mi&#322;o&#347;&#263; jak&#261; dla nich mamy, nie pozwala nam widzie&#263; w nich wad. R a d z i b y &#347; m y,&nbsp;&nbsp;a b y&nbsp;&nbsp;j e d n e j&nbsp;&nbsp;c h w i l i,&nbsp;&nbsp;i&nbsp;&nbsp;t o&nbsp;&nbsp;c a &#322; k i e m&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;i c h&nbsp;&nbsp;p o z b y l i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0908',
                        'name' => 'VIII Wrze&#347;nia',
                        'content' => 'O zwyci&#281;&#380;aniu samego siebie.',
                        'author' => '&#8222;Zwyci&#281;&#380;aj samego siebie, je&#347;li si&#281; bowiem zwyci&#281;&#380;ysz, &#347;wietniejsz&#261; w niebie koron&#281; otrzymasz, ni&#380; inni, kt&#243;rzy s&#261; usposobienia &#322;agodnego.&#8221;',
                        'description' => '(S. Ignat. ad Edmund. Auger.)',
                        'description2' => 'Jedno z dwojga, albo zwyci&#281;&#380;y&#263; musisz, albo upa&#347;&#263;; jeste&#347; gro&#378;niejszym dla siebie nieprzyjacielem, ni&#380; Kserksesa wojsko; trudniejszym do zdobycia ni&#380; jaka twierdza. I l u &#380;&nbsp;&nbsp;t o&nbsp;&nbsp;z d o b y w c &#243; w&nbsp;&nbsp;m i a s t,&nbsp;&nbsp;s i e b i e&nbsp;&nbsp;z w y c i &#281; &#380; y &#263;&nbsp;&nbsp;n i e&nbsp;&nbsp;u m i a &#322; o! O ile szlachetniejszym jest duch od kamienia, o tyle zaszczytniejszem jego zdobycie; gdy zwyci&#281;&#380;amy nieprzyjaci&#243;&#322;, pokonywamy ich cia&#322;a, nie ducha; gdy zwyci&#281;&#380;amy siebie samych, dostaje si&#281; pod nasze rozkazy duch, nad &#347;wiat i niebo wy&#380;szy. Natury nie obwiniaj: je&#347;li jest inn&#261;, ni&#380;by&#347; sobie &#380;yczy&#322;, siebie samego obwiniaj; czemu jej nie przerabiasz na lepsz&#261;? Nie mog&#322;e&#347; czy niechcia&#322;e&#347; przedtem tego zrobi&#263;, chciej teraz, jest-to w twojej mocy, jeszcze naprawisz dotychczasowe zaniedbanie. N i e&nbsp;&nbsp;m a&nbsp;&nbsp;t a k&nbsp;&nbsp;u p a r t e j&nbsp;&nbsp;n a t u r y,&nbsp;&nbsp;k t &#243; r a b y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p o p r a w i &#263;&nbsp;&nbsp;n i e&nbsp;&nbsp;d a &#322; a. Za szcz&#281;&#347;liwegoby&#347; si&#281; mia&#322;, gdyby&#347; sobie natur&#281; wybra&#263; m&#243;g&#322;. Teraz mo&#380;esz zrobi&#263; to daleko bezpieczniej: przed sprobowaniem &#380;ycia, wybra&#322;by&#347; na chybi&#322; trafi&#322;, teraz po sprobowaniu, po nabyciu do&#347;wiadczenia, wyb&#243;r b&#281;dzie lepszy &#8212; sam siebie znasz i natur&#281; sw&#261; odpowiednio do potrzeby urz&#261;dzisz. R o z t r o p n i e j s z &#261;&nbsp;&nbsp;b y w a&nbsp;&nbsp;r a d a&nbsp;&nbsp;p o&nbsp;&nbsp;p r z e b y c i u&nbsp;&nbsp;n i e b e z p i e c z e &#324; s t w a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0909',
                        'name' => 'IX Wrze&#347;nia',
                        'content' => 'O upominaniu.',
                        'author' => '&#8222;Z lud&#378;mi nic dosy&#263; ugruntowanymi w cnocie, surowo obchodzi&#263; si&#281; nie nale&#380;y, gdy&#380; wywi&#261;zuj&#261;ca si&#281; zt&#261;d nieufno&#347;&#263; mo&#380;e wi&#281;cej zrobi&#263; z&#322;ego, ni&#380; surowe obej&#347;cie si&#281; zapowiada dobrego.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Upominanie winno mie&#263; na celu popraw&#281;; kto z innego powodu uciska, ten nie jest ojcem: co po upominaniu, je&#347;li ono przyczynia si&#281; raczej do uporu, ni&#380; do poprawy? Upominanie zbyteczne albo nie w por&#281;, gorszymi zwykle czyni upominanych. Ro&#347;link&#281; w&#261;t&#322;&#261;, s&#322;abo jeszcze zakorzenion&#261;, wiatr lub przymrozek silniejszy &#322;atwo niszczy: p&#243;&#378;niejsze ciep&#322;o, p&#243;&#378;niejszy &#322;agodny powiew wiatru, ju&#380; jej do &#380;ycia nie wr&#243;c&#261;. Kt&#243;&#380; jest tak przewrotnym, aby si&#281; nie poruszy&#322; dobroci&#261; s&#281;dziego, gdy zamiast kary, na kt&#243;r&#261; zas&#322;u&#380;y&#322;, doznaje wzgl&#281;du. Sam pewno g&#322;&#281;boko si&#281; upokorzy, i za b&#322;&#261;d pope&#322;niony &#380;a&#322;owa&#263; pocznie. Czeg&#243;&#380; wi&#281;cej potrzeba? Za wzgl&#281;dno&#347;&#263; przy upominaniu zas&#322;u&#380;y sobie upominaj&#261;cy na mi&#322;o&#347;&#263; winnego: za tem p&#243;jdzie, &#380;e winny b&#281;dzie b&#322;&#281;d&#243;w unika&#322;, aby przykro&#347;ci nie sprawia&#322; umi&#322;owanemu przez siebie. N a&nbsp;&nbsp;w y k o r z e n i e n i e&nbsp;&nbsp;w y s t &#281; p k &#243; w&nbsp;&nbsp;n i e&nbsp;&nbsp;m a&nbsp;&nbsp;p e w n i e j s z e j&nbsp;&nbsp;n a d&nbsp;&nbsp;t &#281;&nbsp;&nbsp;d r o g i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0910',
                        'name' => 'X Wrze&#347;nia',
                        'content' => 'O wnikaniu w siebie.',
                        'author' => '&#8222;Przeciwko codziennym z&#322;ego ducha napa&#347;ciom, potrzeba codziennie, w pewnych sta&#322;ych godzinach, dawa&#263; odp&#243;r, a wi&#281;c w siebie wchodzi&#263;, wszystkie s&#322;owa swoje, czyny i my&#347;li w obec Boga jak najpilniej rozbiera&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Lyr. l. 2 c. 6.)',
                        'description2' => 'Aby ogr&#243;d dobrze wygl&#261;da&#322;, potrzeba codziennej ogrodnika pilno&#347;ci: je&#347;li nie maj&#261; codziennego starania grz&#261;dki, kl&#261;biki; wkr&#243;tce zamiast kwiat&#243;w uka&#380;&#261; si&#281; i rozrosn&#261; chwasty, zamiast jarzyn, zielska. Nie dosy&#263; jest dobre nasienie zasia&#263;; je&#347;li o wypieleniu szkodliwych chwast&#243;w wcze&#347;nie nie pomy&#347;limy, nadzieja nasza, co do wzrostu czy to kwiat&#243;w czy jarzyn, daremna; zielsko wszystko przydusi. P r a c a&nbsp;&nbsp;b e z&nbsp;&nbsp;p i l n o &#347; c i&nbsp;&nbsp;n i e&nbsp;&nbsp;w i e l e&nbsp;&nbsp;o b i e c u j e,&nbsp;&nbsp;j e s t&nbsp;&nbsp;p r a w i e&nbsp;&nbsp;b e z p o &#380; y t e c z n a. Nieprzyjaciel nasz ci&#261;gle na nasz&#261; zgub&#281; czycha, ten po najwi&#281;kszej cz&#281;&#347;ci czas obiera, w kt&#243;rym najmniej bacznymi jeste&#347;my. Potajemnie rzuca swoje nasiona, i to tak potajemnie, &#380;e zaledwie je dostrzega oko bardzo przenikliwe. J a k i e g o &#380;&nbsp;&nbsp;c z u w a n i a,&nbsp;&nbsp;j a k i e j&nbsp;&nbsp;b a c z n o &#347; c i,&nbsp;&nbsp;t a k a&nbsp;&nbsp;p o d s t &#281; p n o &#347; &#263;&nbsp;&nbsp;w y m a g a! Je&#347;li &#347;pisz, to &#378;le powierzonego ci skarbu pilnujesz; niewinno&#347;&#263; twoja klejnotem jest, na kt&#243;ry piek&#322;o z ca&#322;em nat&#281;&#380;eniem czycha. &#379;adnego wysi&#322;ku nie &#380;a&#322;uj, aby&#347; ten klejnot od porwania uchroni&#322;: za ten klejnot niebo sobie kupisz. S t r z e &#380;&nbsp;&nbsp;g o&nbsp;&nbsp;p i l n i e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0911',
                        'name' => 'XI Wrze&#347;nia',
                        'content' => 'O dotrzymywaniu obietnicy.',
                        'author' => '&#8222;Je&#347;li&#347; co przyrzek&#322; na jutro, to do jutra nie odk&#322;adaj, ale raczej dzisiaj zr&#243;b.&#8221;',
                        'description' => '(S. Ignat. apud Orlandin. l. 3 c. 49).',
                        'description2' => 'Nad wolno&#347;&#263; nie ma nic dro&#380;szego; dop&#243;ki jeste&#347; co&#347; winien, dop&#243;ty jeste&#347; skr&#281;powany, ci&#281;&#380;ka to niewola, a gdy idzie o cia&#322;o, nies&#322;ychanie jest przykra. To tylko przyrzekaj, co wkr&#243;tce spe&#322;ni&#263; mo&#380;esz. &#321;atwa i nie ogl&#261;daj&#261;ca si&#281; na nic obietnica jest ma&#322;ej rozwagi p&#322;odem. Niedowierzanie budzi, kto si&#281; nie zastanawia, jakie w wykonaniu swej obietnicy przeszkody napotka. Mo&#380;e prze&#322;ama&#263; si&#281; nie dadz&#261; i obietnica spe&#322;znie na niczem. Szybkie spe&#322;nienie obietnicy podwaja &#322;ask&#281;, wzmacnia wiar&#281;, zwalnia od troski, dla daj&#261;cego lepsze i dla przyjmuj&#261;cego: dla tego, poniewa&#380; powzi&#281;ta nadzieja si&#281; i&#347;ci; dla tamtego, poniewa&#380; zaci&#261;gni&#281;te zobowi&#261;zanie si&#281; uskutecznia. Je&#347;li obietnica jest pewnego rodzaju d&#322;ugiem, o tyle przeto silniej obowi&#261;zuje, o ile jest godniejsz&#261; osoba, kt&#243;rej uczyni&#322;e&#347; obietnic&#281;. Nie podoba si&#281; Bogu nierych&#322;a i nierozwa&#380;na obietnica: a l b o&nbsp;&nbsp;n i e&nbsp;&nbsp;c z y &#324;&nbsp;&nbsp;&#347; l u b u,&nbsp;&nbsp;a l b o,&nbsp;&nbsp;j e &#347; l i &#347;&nbsp;&nbsp;u c z y n i &#322;,&nbsp;&nbsp;w y p e &#322; n i j.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0912',
                        'name' => 'XII Wrze&#347;nia',
                        'content' => 'O poszanowaniu zwierzchno&#347;ci.',
                        'author' => '&#8222;Kto na zebraniach ludowych zwierzchno&#347;&#263; gani, ten wi&#281;cej z&#322;ego ni&#380; dobrego robi.&#8221;',
                        'description' => '(S. Ignat. apud Ribad. l. 5).',
                        'description2' => 'Lud w og&#243;le dla w&#322;adzy nie jest z wielk&#261; przychylno&#347;ci&#261;, czasem to na zewn&#261;trz objawia; je&#347;li tw&#261; mow&#261; oleju dolejesz, pr&#243;cz og&#243;lnego po&#380;aru, nic innego spodziewa&#263; si&#281; nie mo&#380;esz. Jest-to rzecz bardzo niebezpieczna, &#322;atwo powstaje, a z trudno&#347;ci&#261; si&#281; gasi. Plwociny, kt&#243;re si&#281; ku niebu ciskaj&#261;, spadaj&#261; na twarz ciskaj&#261;cego. Nieroztropno&#347;ci&#261; jest sk&#322;adanie s&#261;du na tych, kt&#243;rzy jak z jednej strony maj&#261; d&#322;ugie uszy do s&#322;uchania, tak z drugiej ci&#281;&#380;kie r&#281;ce do karania. D r a &#378; n i e n i e&nbsp;&nbsp;w i e l k i c h&nbsp;&nbsp;p &#322; a z e m&nbsp;&nbsp;n i e&nbsp;&nbsp;u c h o d z i.&nbsp;&nbsp;K t o&nbsp;&nbsp;c i &#281;&nbsp;&nbsp;s &#281; d z i &#261;&nbsp;&nbsp;p o s t a n o w i &#322;? <sup>1</sup> Zdanie szewca nie o jego rzemio&#347;le bywa mylne. Cz&#281;sto s&#261;dzimy, czego nie rozumiemy. Ludzie wysoko po&#322;o&#380;eni wi&#281;cej widz&#261;, ni&#380; my: gdyby&#347;my wielu spraw powody poznali, jak&#380;eby&#347;my s&#261;dy nasze pot&#281;piali! Oszczerstw miota&#263; na nikogo nie wolno, a tem mniej na w&#322;adz&#281;. Szacunek jej si&#281; nale&#380;y i pos&#322;usze&#324;stwo, Boski urz&#261;d na ziemi sprawuje. U s t a w y&nbsp;&nbsp;i&nbsp;&nbsp;p r a w a,&nbsp;&nbsp;n i e&nbsp;&nbsp;j a k o&nbsp;&nbsp;p r z e z&nbsp;&nbsp;n i &#261;,&nbsp;&nbsp;a l e&nbsp;&nbsp;j a k o&nbsp;&nbsp;p r z e z&nbsp;&nbsp;B o g a&nbsp;&nbsp;w y d a n e,&nbsp;&nbsp;p o w a &#380; a &#263;&nbsp;&nbsp;n a l e &#380; y.',
                        'description3' => '1) &#346;. &#321;ukasz 12, 14.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0913',
                        'name' => 'XIII Wrze&#347;nia',
                        'content' => 'O zastanawianiu si&#281; nad sob&#261;.',
                        'author' => '&#8222;Nad tem, co robi&#263; mamy, zastanawia&#263; si&#281;, to co&#347;my zrobili roztrz&#261;sa&#263;; s&#261; to najpewniejsze regu&#322;y dobrego post&#281;powania.&#8221;',
                        'description' => '(S. Ignat. apud Martinium).',
                        'description2' => 'O dw&#243;ch twarzach Janusa, jak za symbol, tak za regu&#322;&#281; post&#281;powania miej; do przysz&#322;ych rzeczy przewidywania, a przesz&#322;ych rozpatrywania nawyknij; z przesz&#322;ych przysz&#322;e wyprowadzisz, przesz&#322;emi przysz&#322;e poprawisz. Nie dosy&#263; jest zrobi&#263;. Jak co zrobionem zosta&#322;o, nale&#380;y rozwa&#380;y&#263;. Lepszego nauczyciela nie ma nad wpraw&#281;. Dobre rzeczy poj&#281;cie, dok&#322;adne zrozumienie, wielce jest pomocne w przeprowadzeniu tej lub owej sprawy. Bez rozwagi do niczego si&#281; nie zabieraj, rzadko si&#281; kiedy co uda&#322;o bez rozwagi przedwsi&#281;wzi&#281;te, nagli&#263; i b&#322;&#261;dzi&#263;, to s&#261; poj&#281;cia pokrewne. N i k t&nbsp;&nbsp;t a k&nbsp;&nbsp;n i e&nbsp;&nbsp;j e s t&nbsp;&nbsp;m &#261; d r y m,&nbsp;&nbsp;a b y&nbsp;&nbsp;p r z e d&nbsp;&nbsp;z a b r a n i e m&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;d o&nbsp;&nbsp;c z e g o,&nbsp;&nbsp;n i e&nbsp;&nbsp;p o t r z e b o w a &#322;&nbsp;&nbsp;z a s t a n o w i &#263;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n a d&nbsp;&nbsp;&#347; r o d k a m i&nbsp;&nbsp;i&nbsp;&nbsp;c e l e m. Nie uwalniaj si&#281; od s&#261;dzenia siebie: rozpatruj &#380;ycie dot&#261;d sp&#281;dzone, rozpatruj dzie&#324; ubieg&#322;y, poznasz, jak si&#281; lepszym sta&#263; mo&#380;esz; je&#347;li dobrze robi&#322;e&#347;, nie ustawaj na tej drodze; je&#347;li &#378;le, nagradzaj teraz, korzystaj z czasu, jaki ci pozosta&#322;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0914',
                        'name' => 'XIV Wrze&#347;nia',
                        'content' => 'O nieupadaniu na duchu.',
                        'author' => '&#8222;Kto spostrzeg&#322;, &#380;e b&#322;&#261;dzi&#322;, niech nie upada na duchu: i b&#322;&#281;dy do zdrowia pomagaj&#261;.&#8221;',
                        'description' => '(S. Ignat. apud P. Lud. de Cam.)',
                        'description2' => 'Nie jeden Anteus po upadku powsta&#322; z ziemi silniejszy; cz&#281;sto si&#281; zdarza, &#380;e ko&#347;ci z&#322;amane, je&#347;li si&#281; dobrze z&#322;o&#380;&#261; i zrosn&#261;, to s&#261; mocniejsze od tych, kt&#243;re zawsze ca&#322;emi pozosta&#322;y. Tak z trucizny powstaje lekarstwo. Dobrym i u&#380;ytecznym nauczycielem jest b&#322;&#261;d: o d&nbsp;&nbsp;p r z y s z &#322; y c h&nbsp;&nbsp;o d u c z a. Raz zaszkodzi&#322;, a zawsze pomaga; jeden od wielu ochrania. Bacznym czyni, aby ten co raz na lodzie upad&#322;, ostro&#380;nie nog&#281; stawia&#322;. Gdyby&#347;my nigdy nie b&#322;&#261;dzili, to nie wiedzieliby&#347;my czem jeste&#347;my, co mo&#380;emy? B&#322;&#261;d jest u&#322;omno&#347;ci &#378;wierciad&#322;em; sprawia, i&#380; gdy&#347;my raz upadli, jeste&#347;my na p&#243;&#378;niej ogl&#281;dnymi. L e p s z y&nbsp;&nbsp;j e s t&nbsp;&nbsp;p o k o r n y&nbsp;&nbsp;p o k u t n i k,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;p y s z n y&nbsp;&nbsp;n i e w i n n y. &#346;wiadomo&#347;&#263; wyst&#281;pku sprowadzi&#322;a usprawiedliwienie celnikowi <sup>1</sup>, daje pokor&#281; wszystkim: sk&#322;ania do ucieczki ku Bogu, czyni, i&#380; nadobfituje &#322;aska, gdzie obfitowa&#322; wyst&#281;pek.',
                        'description3' => '1) &#346;. &#321;ukasz 18, 14.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0915',
                        'name' => 'XV Wrze&#347;nia',
                        'content' => 'O nieodk&#322;adaniu dobrego.',
                        'author' => '&#8222;Ani cia&#322;a, ani &#380;&#261;dz umartwienia, nie nale&#380;y odk&#322;ada&#263; na staro&#347;&#263;; bo ta i niepewn&#261; jest, i surowo&#347;ci nie znosi.&#8221;',
                        'description' => '(S. Ignat. apud Nolarci).',
                        'description2' => 'Je&#347;li nie dbasz o siebie za m&#322;odu, na staro&#347;&#263; tem bardziej dba&#263; nie b&#281;dziesz; ani nauki ani cnoty nie przyswoisz sobie w wieku zgrzybia&#322;ym, skoro&#347; si&#281; o jej przyswojenie nie stara&#322; w wieku do tego odpowiednim. Sterane si&#322;y, z&#322;amane zdrowie, zu&#380;yte cia&#322;o, w pracy nas nie wespr&#261;, ani gorliwo&#347;ci&#261; nie przejm&#261;. Je&#347;li sam przez si&#281; usta&#322; po&#380;ar, to lanie wody by&#322;oby zap&#243;&#378;ne, zbyteczne; w pocz&#261;tkach nale&#380;a&#322;o przyt&#322;umia&#263;. &#379;e w zimie, czy-to cia&#322;a, czy wieku, nie palisz si&#281;, nie twoja to, lecz natury chwa&#322;a. M&#281;ty z oliwy, je&#347;li daj&#261; p&#322;omie&#324;, to tylko bardzo s&#322;aby i przy&#263;miony. Skoro ci&#281; opu&#347;ci&#322;y wyst&#281;pki, skoro cia&#322;o chorob&#261; z&#322;amane zaniecha&#322;o swawoli; to karcenia nie potrzeba. Nie chcie&#263; grzeszy&#263;, gdy ju&#380; nie mo&#380;esz, i chcie&#263; dobrze robi&#263;, gdy tak&#380;e nie mo&#380;esz, jaka&#380; jest zas&#322;uga? Z&nbsp;&nbsp;w i n a&nbsp;&nbsp;p r z y&nbsp;&nbsp;k o &#324; c u&nbsp;&nbsp;z o s t a j &#261;&nbsp;&nbsp;s a m e&nbsp;&nbsp;m &#281; t y. Je&#347;li przez cale &#380;ycie panowa&#322;a &#380;&#261;dza, to nie zrzeknie si&#281; swej w&#322;adzy w staro&#347;ci; pr&#281;dzej si&#281; z&#322;amie, ni&#380; zegnie cz&#322;owiek, kt&#243;ry od lat najm&#322;odszych przywyk&#322; do z&#322;ego. J a k&nbsp;&nbsp;&#380; y &#322;&nbsp;&nbsp;z a&nbsp;&nbsp;m &#322; o d u,&nbsp;&nbsp;t a k&nbsp;&nbsp;&#380; y &#263;&nbsp;&nbsp;b &#281; d z i e&nbsp;&nbsp;w&nbsp;&nbsp;s t a r o &#347; c i,&nbsp;&nbsp;t a k&nbsp;&nbsp;u m r z e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0916',
                        'name' => 'XVI Wrze&#347;nia',
                        'content' => 'O radzeniu si&#281; na modlitwie.',
                        'author' => '&#8222;Chocia&#380;by rozum i ludzie doradzali, &#380;adnej sprawy nie rozpoczynaj, dop&#243;ki si&#281; Boga pierwiej na modlitwie nie poradzisz.&#8221;',
                        'description' => '(S. Ignat. apud Lyr.)',
                        'description2' => 'Od pocz&#261;tku zale&#380;y koniec; po&#322;ow&#281; czynu ma, kto dobrze rozpocz&#261;&#322;: pocz&#261;tek dobry wtedy jest, kiedy si&#281; wywodzi od Tego, kt&#243;ry wszystkich rzeczy pocz&#261;tkiem jest i ko&#324;cem. Je&#347;li zaczynasz, to dobrze zaczynaj; bo koniec i pocz&#261;tek s&#261; po wi&#281;kszej cz&#281;&#347;ci do siebie podobne, jutrzenka zwykle zapowiada, jakim dzie&#324; b&#281;dzie. T a k&nbsp;&nbsp;p o c z &#261; t k i&nbsp;&nbsp;s &#261;&nbsp;&nbsp;o z n a k &#261;&nbsp;&nbsp;p r z y s z &#322; o &#347; c i,&nbsp;&nbsp;j a k&nbsp;&nbsp;k w i a t y&nbsp;&nbsp;o w o c &#243; w. Gdy &#347;lepy &#347;lepego prowadzi obadwaj w d&#243;&#322; wpadn&#261; <sup>1</sup>; rozum ludzki cz&#281;sto nie dowidzi, kt&#243;&#380;by mu siebie ca&#322;kiem powierza&#322;? Nikt na sobie samym wsparty nie jest silny, kto wy&#322;&#261;cznie za ludzk&#261; rad&#261; idzie, na trzcinie si&#281; wspiera &#8212; u p a d n i e&nbsp;&nbsp;z&nbsp;&nbsp;l a d a&nbsp;&nbsp;p o w o d u. Gdy przy rozpoczynaniu spraw pierwsz&#261; spraw&#261; jest B&#243;g, wtedy wszystko idzie pomy&#347;lnie. G d y&nbsp;&nbsp;o k r &#281; t&nbsp;&nbsp;w&nbsp;&nbsp;s w y m&nbsp;&nbsp;b i e g u&nbsp;&nbsp;n a&nbsp;&nbsp;t &#281;&nbsp;&nbsp;l a t a r n i &#281;&nbsp;&nbsp;n i e&nbsp;&nbsp;z w a &#380; a,&nbsp;&nbsp;r o z b i c i e&nbsp;&nbsp;m u&nbsp;&nbsp;g r o z i;&nbsp;&nbsp;d o&nbsp;&nbsp;p o r t u,&nbsp;&nbsp;k t &#243; r y&nbsp;&nbsp;m a&nbsp;&nbsp;n a&nbsp;&nbsp;c e l u,&nbsp;&nbsp;n i e&nbsp;&nbsp;d o t r z e.',
                        'description3' => '1) &#346;. Mateusz 15, 14.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0917',
                        'name' => 'XVII Wrze&#347;nia',
                        'content' => 'O skutkach modlitwy.',
                        'author' => '&#8222;Rozmy&#347;lanie i &#322;&#261;czno&#347;&#263; z Bogiem, zuchwa&#322;ej natury si&#322;y kr&#281;puje i &#380;&#261;dze u&#347;mierza.&#8221;',
                        'description' => '(S. Ignatius apud Lyr.)',
                        'description2' => 'Oswajaj&#261; si&#281; lwy, &#322;agodniej&#261; tygrysy, kruszy &#380;elazo; nie ma tymczasem si&#322;y, kt&#243;raby cz&#322;owieka poskromi&#263; mog&#322;a. Sztuka i natura s&#261; na to za s&#322;abe. Jedynie modlitwa, poniewa&#380; jest serc pani&#261;, w kt&#243;r&#261; stron&#281; chce, w t&#281; je nak&#322;ania. Jak z surowej i bezkszta&#322;tnej bry&#322;y, gdy j&#261; wrzucimy do pieca, najczystsze p&#322;ynie z&#322;oto; jak z ziemskiej odpowiednio przyrz&#261;dzonej masy przy pomocy ognia wyrabia si&#281; kryszta&#322;: tak ziemski i zwierz&#281;cy cz&#322;owiek, modlitw&#261; oczyszczony, przemienia si&#281; w innego. Je&#347;li nie wielu jest umartwiaj&#261;cych si&#281;, nie wielu pe&#322;nych Ducha Bo&#380;ego; to nie B&#243;g temu przyczyn&#261;, ale to, &#380;e nie wielu jest, kt&#243;rzyby si&#281; mi&#322;owali w &#322;&#261;czno&#347;ci z Bogiem przez modlitw&#281;. Modlitwa szko&#322;&#261; jest; za jej po&#347;rednictwem m&#281;&#380;niejemy na duchu, poprawiamy natur&#281;, &#322;amiemy zastarza&#322;y zwyczaj, otrz&#261;samy si&#281; z ozi&#281;b&#322;o&#347;ci, uczymy cnoty. B o d a j b y&nbsp;&nbsp;w i e l u&nbsp;&nbsp;l i c z y &#322; a&nbsp;&nbsp;u c z n i &#243; w!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0918',
                        'name' => 'XVIII Wrze&#347;nia',
                        'content' => 'O sposobie poznania cz&#322;owieka.',
                        'author' => '&#8222;Je&#347;li chcesz post&#261;pi&#263; w mi&#322;o&#347;ci, to m&#243;w o mi&#322;o&#347;ci. Bo jak wiatr wznieca p&#322;omie&#324;, tak pobo&#380;ne rozmowy wzniecaj&#261; mi&#322;o&#347;&#263;.&#8221;',
                        'description' => '(S. Ign. epist. 15 Apr. 1543 data).',
                        'description2' => 'O drogiej osobie nigdy ani dosy&#263; my&#347;li&#263;, ani dosy&#263; m&#243;wi&#263; nie mo&#380;na, kto milczy, ten nie mi&#322;uje; o tym, kt&#243;rego mi&#322;ujemy, ani materyi do m&#243;wienia nie zbraknie, ani ch&#281;ci. Nie sztuka nas tej wymowy uczy, ale natura. Z obfito&#347;ci serca usta m&#243;wi&#261;. Jak trudno ogie&#324; w zanadrzu ukry&#263;, albo zapach cynamonu utrzyma&#263;, tak trudno mi&#322;o&#347;&#263; zatai&#263;. Jak tamten gor&#261;cem, ten woni&#261;, tak serce ustami si&#281; zdradza. Mi&#322;o&#347;&#263; wszystkich wprawdzie sztuk mistrzem jest, najbardziej jednak wymowy; niem&#261; by&#263; nie umie, bo wie dobrze, &#380;e jak ogie&#324; bez miecha &#322;atwo w ognisku, tak uczucie w sercu bez wzajemnego odnawiania zi&#281;bnie. M&#243;w m&#322;odzie&#324;cze, a&#380;ebym ci&#281; pozna&#322; <sup>1</sup>; jaki w szklance p&#322;yn si&#281; znajduje, poznasz po zapachu. Z&nbsp;&nbsp;r o z m o w y,&nbsp;&nbsp;j a k &#261;&nbsp;&nbsp;p r o w a d z i s z,&nbsp;&nbsp;m o &#380; n a&nbsp;&nbsp;w n i e &#347; &#263;&nbsp;&nbsp;o&nbsp;&nbsp;t w o i m&nbsp;&nbsp;u m y &#347; l e,&nbsp;&nbsp;o&nbsp;&nbsp;t w e m&nbsp;&nbsp;u s p o s o b i e n i u,&nbsp;&nbsp;o&nbsp;&nbsp;t w y c h&nbsp;&nbsp;z d o l n o &#347; c i a c h.',
                        'description3' => '1) Ekklez. 32, 10.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0919',
                        'name' => 'XIX Wrze&#347;nia',
                        'content' => 'O oboj&#281;tno&#347;ci rzeczy.',
                        'author' => '&#8222;Chc&#261;cemu nie ma nic trudnego, zw&#322;aszcza w tych rzeczach, kt&#243;re si&#281; maj&#261; uskuteczni&#263; z mi&#322;o&#347;ci.&#8221;',
                        'description' => '(S. Ignatius ad Garz.)',
                        'description2' => 'W ka&#380;dym rodzaju &#380;ycia, je&#347;li zechcesz, znajdziesz przyjemno&#347;ci; co m&#243;wimy o goryczy w rzeczach, to my sami jeste&#347;my jej powodem; rzeczy by&#322;yby dobre i z natury swojej przyjemne, gdyby nasze stronienie i odraza nie czyni&#322;y ich przykremi. Na os&#322;od&#281; pracy, natura nam mi&#322;o&#347;&#263; da&#322;a. Jakie&#380;-to wielkie dobrodziejstwo! przy jego posiadaniu nie ma nic tak trudnego, w czemby serce kochaj&#261;ce nie znalaz&#322;o pociechy. Jak dobry artysta na ka&#380;dej materyi swoj&#261; sztuk&#281; uwydatni&#263; umie; tak i mi&#322;uj&#261;cy cokolwiek go spotka, on to na swoj&#261; korzy&#347;&#263; obr&#243;ci&#263; potrafi. Coby si&#281; komu zdawa&#322;o nieprzyjemnem, on to mi&#322;o&#347;ci&#261; uczyni najprzyjemniejszem. Uczmy si&#281; mi&#322;owa&#263;, a nic nie b&#281;dzie, czegoby&#347;my si&#281; mieli l&#281;ka&#263;. Tym sposobem umys&#322; niech si&#281; do trudnych rzeczy przygotowuje. Mi&#322;uj&#261;c, bez podejrzenia o czary, staniesz si&#281; niezranionym, dla ran niedost&#281;pnym. N a d&nbsp;&nbsp;t o&nbsp;&nbsp;l e k a r s t w o,&nbsp;&nbsp;n i e&nbsp;&nbsp;m a&nbsp;&nbsp;a n i&nbsp;&nbsp;&#322; a c n i e j s z e g o,&nbsp;&nbsp;a n i&nbsp;&nbsp;p e w n i e j s z e g o&nbsp;&nbsp;n a&nbsp;&nbsp;t r u d y&nbsp;&nbsp;i&nbsp;&nbsp;p r z y k r o &#347; c i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0920',
                        'name' => 'XX Wrze&#347;nia',
                        'content' => 'O posiadaniu Boga.',
                        'author' => '&#8222;Kto Boga ma, temu si&#281; nic smutnego przydarzy&#263; nie mo&#380;e, poniewa&#380; dop&#243;ki sam nie zechce, dop&#243;ty tego dobra nie straci: wszelka za&#347; bole&#347;&#263;, wszelki smutek pochodzi z utraconego lub utraci&#263; si&#281; maj&#261;cego dobra.&#8221;',
                        'description' => '(S. Ign. in Epist. 20 Jan. 1554).',
                        'description2' => 'Jak si&#281; nie l&#281;ka ciemno&#347;ci, kto na zawo&#322;anie ma s&#322;o&#324;ce, tak si&#281; nie potrzebuje l&#281;ka&#263; z&#322;ego, kto ma takie dobro, w kt&#243;rem s&#261; wszelkie dobra i kt&#243;re wyklucza z siebie wszelkie z&#322;o. Jedyn&#261; trosk&#261; winno by&#263; czuwanie nad tym skarbem, bez kt&#243;rego niczem jest wszystko, po za kt&#243;rym samo tylko nieszcz&#281;&#347;cie i u&#322;uda. Gdy go zachowujemy, nie ma nic, coby&#347;my straci&#263; mogli, nic, czego pragn&#261;&#263;. Tem g&#322;&#243;wnie szcz&#281;&#347;liwi, &#380;e skarbu tego nikt nam wyrwa&#263; nie mo&#380;e bez naszej wiedzy i woli: zwi&#261;zek z nim wieczny, posiadanie ci&#261;g&#322;e, chyba &#380;eby&#347;my si&#281; go sami chcieli zrzec dobrowolnie. Nierozs&#261;dny kupiec, kt&#243;ry per&#322;&#281; na szk&#322;o, z&#322;oto na &#380;u&#380;el wymienia; a c&#243;&#380; dopiero m&#243;wi&#263; o nierozs&#261;dku tego, kt&#243;ry dobro niesko&#324;czone za kropelk&#281; rozkoszy, za nic oddaje? A c h!&nbsp;&nbsp;j a k &#380; e&nbsp;&nbsp;w i e l u&nbsp;&nbsp;j e s t&nbsp;&nbsp;t a k&nbsp;&nbsp;n i e r o z s &#261; d n y c h!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0921',
                        'name' => 'XXI Wrze&#347;nia',
                        'content' => 'O sposobie s&#322;u&#380;enia Bogu.',
                        'author' => '&#8222;Gdy tym s&#322;u&#380;&#281;, kt&#243;rzy s&#261; s&#322;ugami Pana mego, my&#347;l&#281;, &#380;e samemu Panu s&#322;u&#380;&#281;.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Joan. Avila.)',
                        'description2' => 'Jak zniewaga, tak i &#322;aska s&#322;udze wy&#347;wiadczona obchodzi Pana. Co&#347;cie jednemu z tych najmniejszych uczynili, mnie&#347;cie uczynili <sup>1</sup>. Naszej us&#322;ugi wielki &#243;w Pan nie potrzebuje; dobro&#263; jego sprawia, &#380;e wy&#347;wiadczon&#261; jego s&#322;udze przyjmuje, jakby by&#322;a wy&#347;wiadczona jemu samemu. Przyjacio&#322;mi Boga s&#261;, i o ile mog&#261;, tego dowodz&#261;. Zasi&#261;d&#261; kiedy&#347; jako s&#281;dziowie, dla wydania wyroku na tych, od kt&#243;rych teraz wzgard&#281; ponosz&#261;. Zrzekli si&#281; oni zaszczyt&#243;w, kt&#243;re ich mo&#380;e ku sobie wabi&#322;y, i dlatego tem wi&#281;kszych s&#261; godni. Ci co lekcewa&#380;&#261; s&#322;ugi Bo&#380;e, za grzech sw&#243;j, wed&#322;ug s&#322;usznych s&#261;d&#243;w Bo&#380;ych, b&#281;d&#261; tak ukarani, i&#380; pomocy tych s&#322;ug, gdy jej najbardziej potrzebowa&#263; b&#281;d&#261;, przy zgonie, zostan&#261; pozbawieni.',
                        'description3' => '1) &#346;. Mateusz 25, 45.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0922',
                        'name' => 'XXII Wrze&#347;nia',
                        'content' => 'O szczodrobliwo&#347;ci Boga.',
                        'author' => '&#8222;Bardzo wiele &#322;ask B&#243;g ch&#281;tnieby nam udzieli&#322;, gdyby przewrotna wola nasza szczodrobliwo&#347;ci jego tamy nie stawia&#322;a.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Kogo promienie s&#322;oneczne nie o&#347;wiecaj&#261;, ten sam sobie winien; czemu r&#243;&#380;nemi zaporami przyst&#281;p &#347;wiat&#322;a tamuje? Hojniejszym jest od stworzenia Stworzyciel, sk&#322;onniejszym do &#347;wiadczenia dobrodziejstw, ni&#380; s&#322;o&#324;ce do udzielania &#347;wiat&#322;a. Dla niedbalstwa lub z&#322;o&#347;ci naszej ubogimi jeste&#347;my. Niezdolny do przyj&#281;cia Bo&#380;ych &#322;ask taki umys&#322;, kt&#243;ry jest pe&#322;en ziemskich po&#380;&#261;dliwo&#347;ci. Jak naczynie nape&#322;nione wod&#261; innej cieczy nie przyjmuje, tak aby&#347;my u&#380;ywali pociech duchownych, z ciele&#347;nemi po&#380;egna&#263; si&#281; nale&#380;y. Jak&#380;e my sami sobie szkodzimy! ca&#322;ego &#347;wiata przeciw nam usi&#322;owania, tyle nam szkodzi&#263; nie mog&#261;, ile my sami szkodzimy sobie. A l b o w i e m&nbsp;&nbsp;&#322; a s k&nbsp;&nbsp;B o s k i c h&nbsp;&nbsp;n i k t&nbsp;&nbsp;n a s,&nbsp;&nbsp;p r &#243; c z&nbsp;&nbsp;n a s&nbsp;&nbsp;s a m y c h,&nbsp;&nbsp;p o z b a w i &#263;&nbsp;&nbsp;n i e&nbsp;&nbsp;m o &#380; e. Sk&#322;onniejszym B&#243;g jest do dania nam dobrodziejstw, ni&#380; my do ich brania. Dobru najwy&#380;szemu do udzielania si&#281; tak ch&#281;tnemu zniewag&#281; wyrz&#261;dzamy, gdy dary jego tak obficie p&#322;yn&#261;ce od siebie odpychamy. C z e m u&nbsp;&nbsp;s i e b i e&nbsp;&nbsp;s a m y c h&nbsp;&nbsp;t a k&nbsp;&nbsp;n i e n a w i d z i m y?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0923',
                        'name' => 'XXIII Wrze&#347;nia',
                        'content' => 'O &#380;yczliwo&#347;ci.',
                        'author' => '&#8222;Z po&#380;ytku i dobra Bo&#380;ego obrazu, kt&#243;ry najdro&#380;sz&#261; krwi&#261; Jezusa Chrystusa odkupiony zosta&#322;, powinni&#347;my si&#281; wszyscy wsp&#243;lnie cieszy&#263;.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'Oko z&#322;e na szcz&#281;&#347;cie i pomy&#347;lno&#347;&#263; bli&#378;niego niech&#281;tnie patrzy <sup>1</sup>; sowy &#347;wiat&#322;a s&#322;onecznego nie znosz&#261;, podczas gdy or&#322;y bardzo si&#281; niem raduj&#261;. Kto jest dobry, ten drugiemu dobra &#380;yczy i z jego dobra si&#281; cieszy. Czy na tem co stracisz, gdy drugiego co&#347; dobrego spotka? Niesko&#324;czon&#261; jest Bo&#380;a hojno&#347;&#263;, niewyczerpany skarb; gdy drugiemu daje hojnie, tobie mo&#380;e jeszcze wi&#281;cej da&#263;, je&#347;li na to zas&#322;u&#380;ysz. Ten, kt&#243;ry ma dostatki, kt&#243;remu wszystko idzie po my&#347;li; bratem twoim jest, cz&#322;onkiem tego samego co i ty cia&#322;a. Co si&#281; dostaje jemu, to sp&#322;ywa i na ciebie: aby&#347; by&#322; uczestnikiem dobra, b&#261;d&#378; i rado&#347;ci. Panem jest, kto dary daje; wed&#322;ug swej woli rozdziela je, nie wed&#322;ug naszego zachcenia: nam, kt&#243;rzy jeste&#347;my s&#322;ugami nieu&#380;ytecznymi, zostawiona jest chwa&#322;a i obowi&#261;zek s&#322;u&#380;enia mu. C z e m u&nbsp;&nbsp;w i &#281; c&nbsp;&nbsp;o k a z u j e s z&nbsp;&nbsp;n i e c h &#281; &#263;&nbsp;&nbsp;i&nbsp;&nbsp;n a&nbsp;&nbsp;j a k i e j&nbsp;&nbsp;z a s a d z i e?',
                        'description3' => '1) &#346;. Mateusz 20, 11.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0924',
                        'name' => 'XXIV Wrze&#347;nia',
                        'content' => 'O niegardzeniu ma&#322;emi sprawami.',
                        'author' => '&#8222;Aby nam z pomy&#347;lnym skutkiem posz&#322;y sprawy najwa&#380;niejsze, potrzeba je poprzedzi&#263; ma&#322;o znacz&#261;cemi, i tym sposobem uprosi&#263; sobie pomoc Tego, kt&#243;ry pokornym &#322;ask&#281; daje.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden.)',
                        'description2' => 'Jak w naturze wszystko od ma&#322;ego ku wiekszemu post&#281;puje, tak i pod wzgl&#281;dem &#322;aski, pocz&#261;wszy od ma&#322;ych, je&#347;li na to zas&#322;ugujemy, coraz wi&#281;ksze otrzymujemy. Jak nikt odrazu wielkim nie jest, tak te&#380; nikt do prowadzenia spraw odrazu sposobnym nie jest. Cz&#281;sto si&#281; &#322;udzimy i w p&#243;&#322; drogi ustajemy, poniewa&#380; si&#281; zabieramy do rzeczy nad si&#322;y nasze. Nim si&#281; odwa&#380;ymy na rzeczy wielkie, pierwiej pr&#243;bujmy swych si&#322; na ma&#322;ych, aby to co rozpoczniemy nie pozosta&#322;o niewykonane. Kto si&#281; nie chce zajmowa&#263; rzeczami ma&#322;emi, ten napr&#243;&#380;no wzdycha do wi&#281;kszych, bo chocia&#380;by jakim trafem do nich dotar&#322;, powodzenia mie&#263; nie b&#281;dzie, gdy&#380; to zgotowanem jest przez &#322;ask&#281; tylko pokornym. Pyszni, r&#243;wnie jak wszystkich pysznych ojciec, uganiaj&#261; si&#281; za rzeczami wielkiemi, owszem najwi&#281;kszemi; dlatego razem z tym&#380;e spadaj&#261; do najni&#380;szych, sprawiedliwym Boga s&#261;dem, aby, gdy lata&#263; chcieli, i chodzi&#263; nie mogli.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0925',
                        'name' => 'XXV Wrze&#347;nia',
                        'content' => 'O post&#281;pie w dobrem.',
                        'author' => '&#8222;Najwy&#380;sza Boga dobro&#263;, niezmierzona mi&#322;o&#347;&#263;, i serce ojcowskie ch&#281;tniejsze s&#261; do udzielania nam doskona&#322;o&#347;ci, ni&#380; my do jej szukania.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => '&#377;r&#243;d&#322;em niewyczerpanem, wci&#261;&#380; p&#322;yn&#261;cem B&#243;g jest, ub&#243;stwo nasze gnu&#347;no&#347;ci przypiszmy, &#380;e do &#378;r&#243;d&#322;a tego nie zbli&#380;amy si&#281;. Lubi B&#243;g dobrze czyni&#263;: bo gdy jest hojnym, pokazuje si&#281; Bogiem. Sk&#261;pstwo nasze jest wielk&#261; Boga obraz&#261;: bo albo go mamy za biednego, albo za nieszczodrego, a jedna i druga my&#347;l jest blu&#378;nierstwem. Ani na ch&#281;ci, ani na mo&#380;no&#347;ci mu nie zbywa. Kto mniej otrzymuje, to dlatego, &#380;e mniej pragnie, o mniej prosi. Dobrodziejstwa Bo&#380;e wi&#281;zami s&#261;, kto je przyjmuje, traci wolno&#347;&#263;; szcz&#281;&#347;liwa niewola, kt&#243;ra nas z Bogiem wi&#261;&#380;e! On z nami, a my z nim przez na&#347;ladowanie &#322;&#261;czymy si&#281;, tem doskonalsi, im Chrystusowego &#380;ycia bli&#380;si. Podstaw&#261; cnoty jest post&#281;p: w dobrem nikt sta&#263; nie mo&#380;e, je&#347;li si&#281; nie posuwa, to si&#281; cofa. Z a w s z e&nbsp;&nbsp;p r z e c i w&nbsp;&nbsp;p r &#261; d o w i&nbsp;&nbsp;w o d y&nbsp;&nbsp;p &#322; y n &#261; &#263;&nbsp;&nbsp;m u s i m y,&nbsp;&nbsp;a b y &#347; m y&nbsp;&nbsp;p r z e z&nbsp;&nbsp;j e j&nbsp;&nbsp;f a l e&nbsp;&nbsp;n i e&nbsp;&nbsp;z o s t a l i&nbsp;&nbsp;p o c h &#322; o n i &#281; c i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0926',
                        'name' => 'XXVI Wrze&#347;nia',
                        'content' => 'O r&#243;wnowadze.',
                        'author' => '&#8222;Zar&#243;wno z ozi&#281;b&#322;o&#347;ci, jak ze zbytniej gorliwo&#347;ci choroby umys&#322;u pochodz&#261;.&#8221;',
                        'description' => '(S. Ignat. ad Hisp.)',
                        'description2' => 'Ta sama regu&#322;a, kt&#243;ra jest potrzebna dla cia&#322;a naszego, aby na zdrowiu nie szwankowa&#322;o; potrzebna jest tak&#380;e dla duszy naszej, aby zas&#322;ug&#281; mia&#322;a. Umiarkowanie jest t&#261; regu&#322;&#261;. &#377;le z obojgiem, to jest, z cia&#322;em i dusz&#261;, gdy czy to ciep&#322;o, czy zimno jest nadmierne. C&#243;&#380; na tem zale&#380;y, kto ci&#281; z zas&#322;ugi obdziera, zbytnia gorliwo&#347;&#263;, czy te&#380; ozi&#281;b&#322;o&#347;&#263;? R&#243;wnowaga, jak wiadomo, zatrzymuje skoczka od upadku. Trudniejsz&#261; jest o wiele &#347;cie&#380;ka cnoty; na niej bez r&#243;wnowagi o upadku, nie o post&#281;pie my&#347;l. Jak strzelec celu, tak mi&#322;o&#347;nik cnoty, &#347;rodka zawsze patrze&#263; powinien, aby si&#281; z nagrod&#261; nie min&#261;&#322;, a czy j&#261; przez nadmiar, czy przez brak utraci, zawsze &#378;le zrobi &#8212; pob&#322;&#261;dzi. Pomi&#281;dzy nieprzyjacio&#322;mi przebywa cnota, z kt&#243;rych ka&#380;dy jest w mo&#380;no&#347;ci stan&#261;&#263; jej na przeszkodzie; i gnu&#347;no&#347;&#263; i zbytni&#261; &#347;mia&#322;o&#347;&#263; nale&#380;y umorzy&#263;, aby&#347;my po ich trupach, jakby po stopniach przyszli do szczytu cnoty. T a k&nbsp;&nbsp;s &#322; o &#324; c e&nbsp;&nbsp;p o&nbsp;&nbsp;r &#243; &#380; n y c h&nbsp;&nbsp;d z i w o t w o r a c h&nbsp;&nbsp;k r o c z y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0927',
                        'name' => 'XXVII Wrze&#347;nia',
                        'content' => 'O zajmowaniu si&#281; duszami.',
                        'author' => '&#8222;Bardzo ma&#322;o jest takich pracownik&#243;w, kt&#243;rzy szukaj&#261; nie tego, co ich jest, ale co Jezusa Chrystusa.&#8221;',
                        'description' => '(S. Ignat. ad Hisp.)',
                        'description2' => '&#379;adnej korzy&#347;ci nie odnosz&#261; dusze, gdy siebie ci&#261;gle mamy na wzgl&#281;dzie. S&#322;u&#380;ba Bo&#380;a idzie w zaniedbanie, gdy si&#281; domowemi zaprz&#261;tamy sprawami. Kupiec i pasterz, handlarz i str&#243;&#380; owiec do siebie nie przystaj&#261;. Zajmowanie si&#281; duszami jest spraw&#261; pe&#322;n&#261; trudu. Wymaga, aby&#347;my si&#281; jej ca&#322;kiem po&#347;wi&#281;cili; je&#347;li si&#281; dzielimy, je&#347;li si&#281; ku doczesno&#347;ci zwracamy, bardzo na tem cierpi, niczem nienagrodzone szkody ponosi. J e d e n&nbsp;&nbsp;c z &#322; o w i e k&nbsp;&nbsp;p r z y&nbsp;&nbsp;j e d n e m&nbsp;&nbsp;z a j &#281; c i u&nbsp;&nbsp;n i e c h&nbsp;&nbsp;p o z o s t a n i e. Cud&#243;wby dokazali dusz pasterze, przemieniliby &#347;wiat w z&#322;em pogr&#261;&#380;ony, gdyby si&#281; z Archimedesem ponad &#347;wiat wznie&#347;&#263; umieli. T a k&nbsp;&nbsp;o w c e,&nbsp;&nbsp;n i e&nbsp;&nbsp;s i e b i e&nbsp;&nbsp;b y&nbsp;&nbsp;p a &#347; l i;&nbsp;&nbsp;o&nbsp;&nbsp;o w c e,&nbsp;&nbsp;n i e&nbsp;&nbsp;o&nbsp;&nbsp;m l e k o&nbsp;&nbsp;i&nbsp;&nbsp;w e &#322; n &#281; b y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;t r o s z c z y l i. Gdy dusz B&#243;g za&#380;&#261;da z r&#261;k kap&#322;an&#243;w <sup>1</sup>, ach! jak&#380;e ci&#281;&#380;kim dla nich s&#261;d b&#281;dzie: k a &#380; d a&nbsp;&nbsp;w i &#281; c e j&nbsp;&nbsp;w a &#380; y,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;s k a r b&nbsp;&nbsp;c a &#322; e g o&nbsp;&nbsp;&#347; w i a t a;&nbsp;&nbsp;k a &#380; d a&nbsp;&nbsp;c e n &#261;&nbsp;&nbsp;j e s t&nbsp;&nbsp;k r w i&nbsp;&nbsp;C h r y s t u s o w e j.',
                        'description3' => '1) &#379;yd&#243;w 13, 17.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0928',
                        'name' => 'XXVIII Wrze&#347;nia',
                        'content' => 'O przeszkodach w pracy.',
                        'author' => '&#8222;Cz&#281;sto si&#281; zdarza, &#380;e prace innych z naszego powodu doznaj&#261; przeszkody; podczas gdy my nasze innym ofiarowa&#263; byli&#347;my powinni.&#8221;',
                        'description' => '(S. Ignat. ad Hisp.)',
                        'description2' => 'Nikt sam nie chce by&#263; z&#322;ym; maj&#261; swoj&#261; zaraz&#281; wyst&#281;pki, udzielaj&#261; trucizny innym: z&#322;y pewnej ulgi doznaje, gdy drugiemu przeszkodzi w dobrem. Jako&#347;by si&#281; &#380;enowa&#322; swej z&#322;o&#347;ci, gdyby nie mia&#322; towarzysz&#243;w. Szata&#324;ska-to sztuka, cnoty, kt&#243;rej sami nie mamy, innym zazdro&#347;ci&#263;. Podw&#243;jne zt&#261;d z&#322;e nast&#281;puje: i tego dobra, kt&#243;reby&#347;my mogli sami zrobi&#263;, zaniedbujemy, i temu, kt&#243;reby inni chcieli zrobi&#263;, przeszkadzamy; to znaczy z obcego nieszcz&#281;&#347;cia chcie&#263; si&#281; sta&#263; szcz&#281;&#347;liwym. Mniej winnemi s&#261; te wyst&#281;pki, kt&#243;re maj&#261; poz&#243;r jakiego&#347; dobra, ale okropnym, szata&#324;skim jest ten, kt&#243;ry ani sobie nie chce dobra, ani drugiemu. Dobremu przeszkadza&#263; zawsze jest &#378;le, a najgorzej, gdy to czyni ten, kt&#243;rego obowi&#261;zkiem jest ku dobremu nak&#322;ania&#263;, dobrego uczy&#263;. Je&#347;li wr&#243;g zabiera maj&#281;tno&#347;&#263;, szkoda wydaje si&#281; zno&#347;niejsz&#261;; ale je&#347;li j&#261; uszczupla ten, kt&#243;ry winien by&#322; pomna&#380;a&#263;, strata jest podw&#243;jna: w&nbsp;&nbsp;k i e s z e n i&nbsp;&nbsp;i&nbsp;&nbsp;w&nbsp;&nbsp;d u s z y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0929',
                        'name' => 'XXIX Wrze&#347;nia',
                        'content' => 'O z&#322;ych przyk&#322;adach.',
                        'author' => '&#8222;Jednego upadek dla innych jest postrachem, i wielu zapa&#322; na drodze cnoty ostudza.&#8221;',
                        'description' => '(S. Ignat. epist. ad Hispan).',
                        'description2' => 'Biada cz&#322;owiekowi, kt&#243;ry zgorszenie daje <sup>1</sup>, godzien, aby tyle &#347;mierci poni&#243;s&#322;, ile jest tych, kt&#243;rym si&#281; przyczyni&#322; z&#322;ym przyk&#322;adem do upadku na duchu. G r z e c h y&nbsp;&nbsp;s t a r s z y c h&nbsp;&nbsp;s &#261;&nbsp;&nbsp;w i e l k &#261;&nbsp;&nbsp;p o d n i e t &#261;&nbsp;&nbsp;k u&nbsp;&nbsp;z &#322; e m u&nbsp;&nbsp;d l a&nbsp;&nbsp;m &#322; o d s z y c h. T&#281;&#380;sza z&#322;ego, ni&#380; dobrego przyk&#322;adu si&#322;a jest! tamten natur&#281; ma za pomocniczk&#281;. Nie lada kto oprze si&#281; obudw&#243;m. Wi&#281;cej w jednej godzinie m&#322;ot zniszczy&#263; mo&#380;e, ni&#380; w stu godzinach naprawi&#263;. Przyk&#322;ady m&#281;&#380;&#243;w do doskona&#322;o&#347;ci obowi&#261;zanych, je&#347;li z&#322;e s&#261;, to bardziej szkodz&#261;; nietylko ucz&#261; z&#322;ego, ale i wstydu pozbawiaj&#261;, w z&#322;em uzuchwalaj&#261;. Patrz&#261;cy na nie s&#261;dz&#261;, &#380;e dobrze robi&#261;, gdy tych na&#347;laduj&#261;, kt&#243;rzy s&#261; za wz&#243;r dla trzody postawieni. Je&#347;li &#378;r&#243;d&#322;a wodne, z kt&#243;rych pij&#261; wszyscy, s&#261; zatrute, jaka&#380;-to dla ludu kl&#281;ska! Tak&#261; sam&#261; dla dusz kl&#281;sk&#261; jest, gdy popsuwszy obyczaje obr&#243;cili si&#281; w zgnilizn&#281; ci, kt&#243;rzy winni byli grzechom stawia&#263; zapory, od grzech&#243;w powstrzymywa&#263;.',
                        'description3' => '1) &#346;. Mateusz 18, 7.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_0930',
                        'name' => 'XXX Wrze&#347;nia',
                        'content' => 'O szcz&#281;&#347;ciu.',
                        'author' => '&#8222;Czuj&#281; w sercu muzyk&#281;, ale bez g&#322;osu; s&#322;ysz&#281; harmoni&#281;, ale bez d&#378;wi&#281;ku; tak mi si&#281; jednak mi&#322;&#261; wydaje, i&#380; z niczem jej na &#347;wiecie por&#243;wna&#263; nie mo&#380;na.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Umys&#322; tw&#243;j jest s&#281;dzi&#261; szcz&#281;&#347;cia twego, owszem tw&#243;rc&#261;; tyle masz, ile chcesz. Napr&#243;&#380;no obwiniamy los, nie s&#322;usznie oskar&#380;amy natur&#281;, jakby macochami by&#322;y: jeden i druga s&#261; nie winne. C a &#322; e&nbsp;&nbsp;s z c z &#281; &#347; c i e&nbsp;&nbsp;w&nbsp;&nbsp;t o b i e&nbsp;&nbsp;s a m y m&nbsp;&nbsp;j e s t. Nieszcz&#281;&#347;cie i smutek jest wynalazkiem naszej gnu&#347;no&#347;ci: c&#243;&#380; bowiem &#322;atwiejszego, c&#243;&#380; bardziej prostszego, jak nie mie&#263; &#380;adnych pragnie&#324;, nie po&#380;&#261;da&#263; nic od stworze&#324;: gdy si&#281; to stanie, ciche, spokojne, najmilsze jest wszystko. &#346;rodka na wszelkie nieszcz&#281;&#347;cie nie nale&#380;y szuka&#263; po za nami, on w nas jest. Jak rzeczy przyjmujemy, tak na nas dzia&#322;aj&#261;; &#380;aden pocisk bole&#347;niej nie rani nad ten, kt&#243;ry sam sobie zadajesz. Prawdziwa rozkosz r&#243;wnie&#380; w nas si&#281; rodzi, i w miar&#281; poznania wzrasta; im wi&#281;ksze poznanie, tem wi&#281;ksza rozkosz. Nic po za sob&#261; nic szukaj, nic nie pragnij; o&nbsp;&nbsp;t o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;s t a r a j,&nbsp;&nbsp;a b y&nbsp;&nbsp;B &#243; g&nbsp;&nbsp;s e r c e&nbsp;&nbsp;t w o j e&nbsp;&nbsp;n a p e &#322; n i a &#322;;&nbsp;&nbsp;r e s z t y&nbsp;&nbsp;b e z&nbsp;&nbsp;s z k o d y&nbsp;&nbsp;m o &#380; e s z&nbsp;&nbsp;z a n i e c h a &#263;.',
                        'description3' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_10',
                'name' => 'October',
                'colour_value' => '#235b4f',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_1001',
                        'name' => 'I Pa&#378;dziernika',
                        'content' => 'O roztrzygni&#281;ciu niepewno&#347;ci.',
                        'author' => '&#8222;Je&#347;li w roztrzygni&#281;ciu jakiej rzeczy znajdujecie trudno&#347;&#263;, je&#347;li si&#281; wahacie i na jedn&#261; i na drug&#261; stron&#281;; przez pos&#322;usze&#324;stwo, do kt&#243;rego si&#281; nale&#380;y uciec, k&#322;ad&#378;cie niepewno&#347;ci koniec i uspakajajcie si&#281; tym sposobem.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'Jak strzelec odpowiedniem narz&#281;dziem, tak ty zdaniem zwierzchnika pomagaj sobie, je&#347;li si&#281; z celem nie chcesz min&#261;&#263;. Zawik&#322;ana doskona&#322;o&#347;ci droga jest; je&#347;li ci&#281; pos&#322;usze&#324;stwo, jakby ni&#263; Ariadny, po niej nie poprowadzi, to pr&#281;dzej zb&#322;&#261;dzisz, ni&#380; szcz&#281;&#347;liwie do ko&#324;ca dojdziesz. Przy wynios&#322;ej i ciasnej &#347;cie&#380;ce, jak&#261; jest ta, kt&#243;ra prowadzi do nieba, na prawo i lewo znajduj&#261; si&#281; przepa&#347;cie. Szcz&#281;&#347;liwi ci, kt&#243;rych pos&#322;usze&#324;stwo, jakby za r&#281;k&#281; prowadzi! ono swoich uchroni i od upadku i od wszelkiego innego niebezpiecze&#324;stwa. Ci, co chc&#261; by&#263; bardzo &#347;wi&#281;tymi, cz&#281;sto nader ci&#281;&#380;ko b&#322;&#261;dz&#261;; to znaczy, &#380;e na wynios&#322;em miejscu o zawr&#243;t g&#322;owy nie trudno. Tu, kto pod swoim, nie pod zwierzchnika kierunkiem idzie, nieraz bardzo nizko upada. D r &#380; y j c i e&nbsp;&nbsp;s t o p y. Na co si&#281; przyda pru&#263; morza i wiatrom wystawia&#263; si&#281; na po&#347;miewisko? do portu nie dotrzesz, je&#347;li wed&#322;ug polarnej gwiazdy okr&#281;tem nic pokierujesz. W &#322; a s n y&nbsp;&nbsp;t w &#243; j&nbsp;&nbsp;s &#261; d&nbsp;&nbsp;b &#322; &#281;d n y m&nbsp;&nbsp;j e s t&nbsp;&nbsp;o g n i k i e m&nbsp;&nbsp;&#8212;&nbsp;&nbsp;z w o d z i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1002',
                        'name' => 'II Pa&#378;dziernika',
                        'content' => 'O wyt&#281;&#380;eniu.',
                        'author' => '&#8222;Gdy si&#281; wiele ci&#281;&#380;ar&#243;w nad si&#322;y gromadzi, ostrogi si&#281; tylko sposobi&#261;, nie w&#281;dzid&#322;o na konia nieoswojonego i nieuje&#380;d&#380;onego.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'Nie gorliwo&#347;&#263; to, ale p&#322;ocho&#347;&#263; przedsi&#281;bra&#263; co&#347; nad si&#322;y; pierwiej trzeba sprobowa&#263;, co barki unie&#347;&#263; mog&#261;, nim si&#281; do niesienia ci&#281;&#380;aru zabierzemy: ugn&#261; si&#281; albo i ca&#322;kiem skrusz&#261;, je&#347;liby chcia&#322;y nie&#347;&#263; wi&#281;cej, ni&#380; mog&#261;. Jednym wysi&#322;kiem zbytecznym cz&#322;owiek si&#281; podrywa, choroby nabawia. Co to za &#347;wi&#281;to&#347;&#263;, komu si&#281; podoba, je&#347;li si&#281; raz wyt&#281;&#380;ymy, aby przez ca&#322;e &#380;ycie nic albo bardzo ma&#322;o robi&#263;? Przy umiarkowaniu trwa&#322;o&#347;&#263;. R &#243; b&nbsp;&nbsp;m a &#322; o,&nbsp;&nbsp;a b y &#347;&nbsp;&nbsp;w i e l e&nbsp;&nbsp;i&nbsp;&nbsp;d &#322; u g o&nbsp;&nbsp;m &#243; g &#322;&nbsp;&nbsp;r o b i &#263;. B&#243;g, kt&#243;remu si&#281; staramy podoba&#263;, ca&#322;y my&#347;l&#261; i rozumem jest; p&#322;ocha i nierozwa&#380;na pobo&#380;no&#347;&#263; nie mo&#380;e mu si&#281; podoba&#263;. O ile przekracza miar&#281;, o tyle traci na zas&#322;udze. Gdy zbyt wre m&#322;ode wino, rozrywa beczk&#281;; nieumiarkowana gorliwo&#347;&#263; niszczy cia&#322;o. Ten jest zbytniej gorliwo&#347;ci owoc, i&#380; raz wysiliwszy si&#281; zanadto i wyczerpawszy, potem do niczego niezdolna. S t r u n y&nbsp;&nbsp;b a r d z o&nbsp;&nbsp;w y c i &#261; g n i &#281; t e&nbsp;&nbsp;p &#281; k a j &#261;:&nbsp;&nbsp;z d r o w i e&nbsp;&nbsp;n a s z e&nbsp;&nbsp;n i e&nbsp;&nbsp;j e s t&nbsp;&nbsp;&#380; e l a z n e m,&nbsp;&nbsp;&#322; a t w o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n a d w e r &#281; &#380; a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1003',
                        'name' => 'III Pa&#378;dziernika',
                        'content' => 'O dobrych ch&#281;ciach.',
                        'author' => '&#8222;Wiele robicie sam&#261; ch&#281;ci&#261; podj&#281;cia pracy dla zbawienia dusz.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'W rzeczach wielkich i &#347;wi&#281;tych nawet ch&#281;ci, je&#347;li s&#261;, bardzo powinny by&#263; cenione, zw&#322;aszcza wtedy, gdy wykonanie dzie&#322;a nie zale&#380;y od woli chc&#261;cego. Jak&#380;e szcz&#281;&#347;liwi jeste&#347;my, skoro sam&#261; my&#347;l&#261;, sam&#261; gotowo&#347;ci&#261; podj&#281;cia pracy bogacimy si&#281; w zas&#322;ugi! Wi&#281;cej B&#243;g cieszy si&#281; nasz&#261; ch&#281;ci&#261;, ni&#380; wykonaniem, bardziej nasz&#261; wol&#261;, ni&#380; rzecz&#261; sam&#261;; stosownie do tamtej, nie do tej nagrod&#281; nam przeznacza. Je&#347;li nie masz sposobno&#347;ci pozyskiwania dusz niebu, to miej ch&#281;&#263;, &#380;yw pragnienia; nigdy i nigdzie, ani miejsce, ani czas tego ci&#281; nie pozbawi. T y m&nbsp;&nbsp;s p o s o b e m&nbsp;&nbsp;n a w e t&nbsp;&nbsp;m a l u c z c y&nbsp;&nbsp;w y j &#347; &#263;&nbsp;&nbsp;n a&nbsp;&nbsp;A p o st o &#322; &#243; w&nbsp;&nbsp;m o g &#261;. Gdyby chciwcy sam&#261; wol&#261; mogli z&#322;oto gromadzi&#263;, jakie&#380;by bogactwa w kr&#243;tkim czasie nagromadzili! Wstyd nam, wstyd nam, wstyd wielki, je&#347;li w gromadzeniu skarb&#243;w wiecznych jeste&#347;my leniwszymi! B &#243; g&nbsp;&nbsp;z w a &#380; a&nbsp;&nbsp;n a&nbsp;&nbsp;c h &#281; c i,&nbsp;&nbsp;n a&nbsp;&nbsp;p r a g n i e n i a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1004',
                        'name' => 'IV Pa&#378;dziernika',
                        'content' => 'O przyk&#322;adno&#347;ci &#380;ycia.',
                        'author' => '&#8222;Tak do zrozumienia jak i pozyskania dar&#243;w Ducha &#346;wi&#281;tego, &#380;ycie przyk&#322;adne o wiele jest lepsze od nauki.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'S&#322;abemi s&#261; i nie wiele znacz&#261;cemi nauki, owoc&#243;w duchownych nie wydaj&#261;, bezsilnemi s&#261; i martwemi, je&#347;li &#380;ycia i rze&#378;ko&#347;ci z ducha nie nabior&#261;. Doczesn&#261; korzy&#347;&#263; przynosz&#261;, ale gdy idzie o wieczn&#261;, pr&#243;&#380;na nadzieja. Ach! jak&#380;e b&#322;&#261;dzimy, uczonych szukamy, gdzieby szuka&#263; nale&#380;a&#322;o pobo&#380;nych; dlatego tak rzadki i prawie nie widzialny dla dusz po&#380;ytek, &#380;e za wiele przyznajemy nauce. Tego tylko powa&#380;amy, tego cenimy, kt&#243;ry si&#281; niepospolit&#261; nauk&#261; zaleca. Tymczasem nieraz si&#281; zdarza, &#380;e kto&#347; g&#322;&#281;boko my&#347;li, wiedz&#261; i zdolno&#347;ciami celuje, wymowny jest, bieg&#322;y we wszystkiem i&nbsp;&nbsp;p r z e b i e g &#322; y;&nbsp;&nbsp;a l e&nbsp;&nbsp;d o&nbsp;&nbsp;n a w r a c a n i a&nbsp;&nbsp;d u s z&nbsp;&nbsp;c a &#322; k i e m&nbsp;&nbsp;n i e s p o s o b n y. Dzielniej nad miecz obosieczny przenika dusz&#281; Duch &#346;wi&#281;ty <sup>1</sup>, pot&#281;&#380;niej nad piorun usuwa wszelkie zawady pobo&#380;no&#347;&#263;; d o k &#261; d&nbsp;&nbsp;c h c e,&nbsp;&nbsp;t a m&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;d o s t a j e,&nbsp;&nbsp;c o&nbsp;&nbsp;c h c e,&nbsp;&nbsp;w y j e d n y w a&nbsp;&nbsp;&#8212;&nbsp;&nbsp;c u d a&nbsp;&nbsp;c z y n i.',
                        'description3' => '1) &#379;yd&#243;w 3, 12.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1005',
                        'name' => 'V Pa&#378;dziernika',
                        'content' => 'O pomaganiu drugim.',
                        'author' => '&#8222;Spos&#243;b dopomagania bli&#378;niemu bywa r&#243;&#380;ny, ale uskutecznia si&#281; tak&#380;e dobremi ch&#281;ciami i modlitwami.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'Gdzie nie mog&#261; r&#281;ce; tam si&#281;gaj&#261; ch&#281;ci: te &#380;adn&#261; zapor&#261;, &#380;adn&#261; przestrzeni&#261;, &#380;adn&#261; czasu trudno&#347;ci&#261; powstrzyma&#263; si&#281; nie daj&#261; od zamierzonego celu. Przestrze&#324;, kt&#243;rejby nogi z powodu przepa&#347;ci nie podo&#322;a&#322;y, ch&#281;ci przebiegn&#261; w momencie. Je&#347;li do odleg&#322;ych, zamorskich kraj&#243;w dosta&#263; si&#281; nie mo&#380;esz, to nie uskar&#380;aj si&#281; tak bardzo; sposobem &#322;atwiejszym, ch&#281;ciami drog&#281; odbywaj, wiele wkr&#243;tce i bez wielkiego trudu zas&#322;ug sobie zgromadzisz. Aby jednak ch&#281;ci nie by&#322;y czczemi, dodawaj im wagi modlitw&#261; gor&#261;c&#261;; aby, skoro sam nie mo&#380;esz, B&#243;g da&#322; innym &#322;ask&#281; zyskiwania dusz czynem. W ten spos&#243;b wielu bardziej twojej pobo&#380;no&#347;ci, ni&#380; trudom tamtych zawdzi&#281;cza&#263; b&#281;dzie swoje nawr&#243;cenie. Ch&#281;ci jednak opiesza&#322;e, md&#322;e, owocu nie przynosz&#261;; wie&#324;ca si&#281; za nie nie spodziewaj; co innego jest chwilowa zachcianka, a co innego silna wola: pierwsza jest przemijaj&#261;cem, druga sta&#322;em mi&#322;owaniem. O&nbsp;&nbsp;t &#281;&nbsp;&nbsp;d r u g &#261;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;s t a r a j,&nbsp;&nbsp;c h &#281; c i&nbsp;&nbsp;t w o j e,&nbsp;&nbsp;z a m i a r y,&nbsp;&nbsp;p r a g n i e n i a&nbsp;&nbsp;d o&nbsp;&nbsp;t e j&nbsp;&nbsp;d r u g i e j&nbsp;&nbsp;p o d n o &#347;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1006',
                        'name' => 'VI Pa&#378;dziernika',
                        'content' => 'O przymiotach Aposto&#322;a.',
                        'author' => '&#8222;Id&#378;cie i &#347;wiat zapalcie ca&#322;y.&#8221;',
                        'description' => '(S. Ignat. Cardin. Ludovis.)',
                        'description2' => 'Je&#347;li mniejsza, ni&#380; w ogniu, jest Aposto&#322;a gor&#261;co&#347;&#263;, to nie wystarczy, aby zlodowacia&#322;e ludzkie serca rozgrza&#322;a. Na roztopienie &#380;u&#380;la, na skierowanie &#380;elaznych serc ku dobremu; potrzeba ognia, &#322;agodniejszym &#347;rodkom nie ust&#261;pi z&#322;e zastarza&#322;e. Pr&#281;dko robi si&#281; zimno, gdzie nie ma ognia. Wytrwa&#322;o&#347;ci w oczyszczaniu &#347;wiata potrzeba; je&#347;li na niej zbywa, w brudach pozostanie, do dawnych nowe z dniem ka&#380;dym przybywa&#263; b&#281;d&#261;. A zk&#261;d&#380;e si&#281; we&#378;mie takie ciep&#322;o, je&#347;li w domowem ognisku nie &#380;ywimy ognia? &#346;wieci ogie&#324; i grzeje: podobne s&#261; obowi&#261;zki Aposto&#322;a: dwojakim mianowicie sposobem poprawia&#263; nale&#380;y &#347;wiat, przepowiadaniem s&#322;owa i okazywaniem czynu. K u l e j e&nbsp;&nbsp;g o r l i w o &#347; &#263;,&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;j e d n e g o&nbsp;&nbsp;z&nbsp;&nbsp;n i c h&nbsp;&nbsp;n i e&nbsp;&nbsp;d o s t a j e. Ca&#322;y &#347;wiat w z&#322;em jest pogr&#261;&#380;ony, dot&#261;d goreje, jak Sodoma, i nie inaczej ten ogie&#324; si&#281; zagasi, tylko innym ogniem, ale silniejszym. Gdzie z&#322;o&#347;&#263; ludzka bardzo wezbra&#322;a, tam niech twoja troskliwo&#347;&#263; b&#281;dzie szczeg&#243;ln&#261;; niech si&#281; stara wszelkiemi si&#322;ami o wykorzenienie z&#322;ego.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1007',
                        'name' => 'VII Pa&#378;dziernika',
                        'content' => 'O &#380;arliwo&#347;ci.',
                        'author' => '&#8222;Na kim ci&#261;&#380;y taki obowi&#261;zek s&#322;u&#380;enia Bogu, jak na was, z tego s&#322;u&#380;by i pracy zwyk&#322;ej B&#243;g nie jest zadowolony.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'Kto si&#281; do wielu rzeczy zobowi&#261;za&#322;, ten lada czem swej powinno&#347;ci zby&#263; nie mo&#380;e; dop&#243;ty b&#281;dzie w d&#322;ugu, dop&#243;ki nie sp&#322;aci a&#380; do ostatniego szel&#261;&#380;ka. Za wielkie dary wielkiej oczekuje si&#281; wdzi&#281;czno&#347;ci. Kogo Bo&#380;a &#322;aska na wysokiem umie&#347;ci&#322;a stanowisku, to zobowi&#261;za&#322;a go tem samem do wielkich czyn&#243;w. Innych ma&#322;&#261; ofiar&#261; B&#243;g si&#281; zadawalnia, nawet kubek zimnej wody nie zostawi bez nagrody <sup>1</sup>; ale od ciebie oczekuje ofiary sto razy wi&#281;kszej. Kto chce by&#263; na&#347;ladowc&#261; Chrystusa, ten s&#322;abemi wysi&#322;kami i ma&#322;emi krokami wielkich jego &#347;lad&#243;w nie zape&#322;ni. Tak doskona&#322;y pod ka&#380;dym wzgl&#281;dem orygina&#322;, poprawnego w kopii wymaga p&#281;dzla, je&#347;li zamiast obrazu nie chcesz przedstawi&#263; jakiej&#347; mazaniny. Miejsca &#347;wi&#281;to&#347;&#263;, &#347;rodk&#243;w dostatek, &#322;ask obfito&#347;&#263;, pobo&#380;nych, w&#347;r&#243;d kt&#243;rych &#380;yjesz, przyk&#322;ady, s&#261; tyloma dla ciebie bod&#378;cami, do wielkich czyn&#243;w ci&#281; zach&#281;caj&#261;cemi. W s t y d &#378;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;s w e j&nbsp;&nbsp;g n u &#347; n o &#347; c i.',
                        'description3' => '1) &#346;. Mateusz 10, 42.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1008',
                        'name' => 'VIII Pa&#378;dziernika',
                        'content' => 'O niewinno&#347;ci sumienia.',
                        'author' => '&#8222;Na jakie&#380; niebezpiecze&#324;stwo nara&#380;a si&#281; zbawienie i niewinno&#347;&#263; w tych napoz&#243;r ma&#322;ych burzach, kt&#243;re ju&#380;-to dostatk&#243;w i bogactw, ju&#380; zaszczyt&#243;w i chwa&#322;y, ju&#380; rozkoszy chciwy wicher wznieca.&#8221;',
                        'description' => '(S. Ignat. ad Hispan.)',
                        'description2' => 'Nieszcz&#281;&#347;liwi ci ludzie! jak ryby na w&#281;dk&#281;, tak oni powabem jakiej rzeczy mi&#322;ej uj&#281;ci, &#322;upem si&#281; staj&#261; i podczas gdy si&#281; &#322;udz&#261; rozkosz&#261; nader kr&#243;tk&#261;, dostaj&#261; si&#281; sami w pu&#322;apk&#281;, naraz wolno&#347;&#263;, rado&#347;&#263; i spok&#243;j trac&#261;c. Kto si&#281; cieszy, o tym m&#243;wi&#261;, &#380;e jest zadowolony; poniewa&#380; wtedy cieszy si&#281; wola, kiedy ma co chce, to jest, co sobie &#380;yczy. Wszystko, pr&#243;cz Boga, jest ma&#322;ostk&#261; wielk&#261;, nie zape&#322;nia naszej duszy, a jednak j&#261; m&#281;czy. Niech ginie to, co na niebezpiecze&#324;stwo narazi&#263; mo&#380;e dusz&#281;; niech raczej samo przepadnie, ni&#380;by mia&#322;o nam zgotowa&#263; przepa&#347;&#263;. Kt&#243;&#380;by za bagatel&#281; tak wielk&#261; wyrz&#261;dza&#322; sobie szkod&#281;; nikt roztropny za dym zniszczenia, za wiatr, zguby sobie nie nabywa. Chocia&#380;by si&#281; rozszerza&#322;y, chocia&#380;by nadyma&#322;y te ma&#322;ostki, kt&#243;re ludzie nazw&#261; d&#243;br zaszczycaj&#261;; wszystko niczem, je&#347;li na uwadze mamy sumienie, kt&#243;re wtedy tylko jest spokojne i szcz&#281;&#347;liwe, gdy czuje, &#380;e B&#243;g si&#281; na&#324; nie gniewa. R e s z t a&nbsp;&nbsp;n i e&nbsp;&nbsp;z a d a w a l n i a,&nbsp;&nbsp;a l e&nbsp;&nbsp;s t r a c h e m&nbsp;&nbsp;p r z e j m u j e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1009',
                        'name' => 'IX Pa&#378;dziernika',
                        'content' => 'O ufno&#347;ci w Bogu.',
                        'author' => '&#8222;S&#322;usznie mie&#263; nale&#380;y nadziej&#281;, &#380;e razem z duchownemi i materyalne dobra znacznie si&#281; wzmog&#261;.&#8221;',
                        'description' => '(S. Ignat. Epist. ad regem Abyss.)',
                        'description2' => 'Hojnym jest nader B&#243;g, nieprzyjacio&#322;om wiele daje, przyjacio&#322;om udziela nier&#243;wnie wi&#281;cej. Bardzo &#380;yzn&#261; rol&#261; jest prawica jego, gdy jej co z twego powierzysz, odda ci z naddatkiem setnym. Kto wi&#281;ksze daje rzeczy, ten mniejszych nie odm&#243;wi. Dary, kt&#243;re duszy, kt&#243;re nieba dotycz&#261; prawdziwemi darami s&#261;; doczesne do b&#322;ahostek si&#281; licz&#261;; &#380;e jednak s&#261; potrzebne, B&#243;g nie pozwala, aby nam na nich zbywa&#322;o. Oddanych swej s&#322;u&#380;bie B&#243;g nie jako s&#322;ugi, ale jako drogie dzieci piecz&#261; sw&#261; otacza; jak dobra matka o swem niemowl&#281;ciu nie zapomina, tak tem bardziej B&#243;g nie pozbawi swej pomocy tych, kt&#243;re za swoje przyzna&#322;. Opatrzno&#347;&#263; jego pami&#281;ta o wszystkich, &#378;wierz&#281;ta i ptactwo dostatnio &#380;ywi, odziewa lilie i r&#243;&#380;e, swoich nawet na puszczy z wielk&#261; hojno&#347;ci&#261; karmi <sup>1</sup>. D a j&nbsp;&nbsp;p o k &#243; j&nbsp;&nbsp;z b y t n i m&nbsp;&nbsp;z a b i e g o m&nbsp;&nbsp;o&nbsp;&nbsp;r z e c z y&nbsp;&nbsp;d o c z e s n e,&nbsp;&nbsp;z a b i e g a j&nbsp;&nbsp;o&nbsp;&nbsp;t o,&nbsp;&nbsp;c o&nbsp;&nbsp;j e s t&nbsp;&nbsp;B o &#380; e g o,&nbsp;&nbsp;a&nbsp;&nbsp;o&nbsp;&nbsp;r e s z c i e&nbsp;&nbsp;p o m y &#347; l i&nbsp;&nbsp;W s z e c h m o g &#261; c y.',
                        'description3' => '1) &#346;. Marek 8, 8.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1010',
                        'name' => 'X Pa&#378;dziernika',
                        'content' => 'O niezwracaniu si&#281; do &#347;wiata.',
                        'author' => '&#8222;Wybra&#322; was B&#243;g, aby duszy waszej b&#322;ache i znikome rzeczy ludzkie nie usidli&#322;y, i aby serca waszego, zwr&#243;ciwszy je ku sobie, nie opanowa&#322;y.&#8221;',
                        'description' => '(S. Ignat. ad Hispan.)',
                        'description2' => 'Do niebezpiecze&#324;stw, przed kt&#243;remi si&#281; niegdy&#347; szlachetnie cofn&#261;&#322;e&#347;; po cichu, pragnieniem, my&#347;l&#261; nie wracaj. I teraz omylny, niebezpiecze&#324;stw i zdrad pe&#322;ny jest &#347;wiat, jak by&#322;, gdy&#347; nim wzgardzi&#322;. Goreje jeszcze z&#322;ym ogniem Sodoma, szkaradn&#261; wo&#324; smo&#322;y i siarki roznosi daleko; nawet okiem si&#281; nie zwracaj w t&#281; stron&#281;, z kt&#243;rej przedtem nietylko twe stopy, ale ducha wycofa&#322;e&#347;. Z w r a c a n i e&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;j e s t&nbsp;&nbsp;b a r d z o&nbsp;&nbsp;n i e b e z p i e c z n e. &#379;e, wy&#380;szy nad rzeczy ziemskie, pogardzi&#322;e&#347; niemi, &#380;e mi&#322;o&#347;&#263; swoj&#261; od znikomych ku wiecznym zwr&#243;ci&#322;e&#347;; dzie&#322;o to nie natury, ale &#322;aski. Biada! je&#347;li mu przygotowujesz ksi&#261;&#380;eczk&#281; rozwodow&#261;. &#379;yje i &#380;y&#263; b&#281;dzie B&#243;g, kt&#243;remu siebie i co twoje po&#347;wi&#281;ci&#322;e&#347;. Mann&#261; ci&#281; karmi niebo, czemu za czosnkiem i cebul&#261; wzdychasz? Pewny to znak popsutego &#380;o&#322;&#261;dka, zdrowemi pokarmami gardzi&#263;, a po&#380;&#261;da&#263; szkodliwych. J e &#347; l i&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;z a&nbsp;&nbsp;g a r n k a m i&nbsp;&nbsp;z&nbsp;&nbsp;m i &#281; s e m&nbsp;&nbsp;o g l &#261; d a s z,&nbsp;&nbsp;s t r z e &#380;&nbsp;&nbsp;s i &#281;,&nbsp;&nbsp;a b y &#347;&nbsp;&nbsp;r a z e m&nbsp;&nbsp;z&nbsp;&nbsp;n i e m&nbsp;&nbsp;z g n i e l i &#378; n i e&nbsp;&nbsp;n i e&nbsp;&nbsp;u l e g&#322;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1011',
                        'name' => 'XI Pa&#378;dziernika',
                        'content' => 'O unikaniu przesady.',
                        'author' => '&#8222;Czysto&#347;&#263; w miar&#281;, bez wyszukania, jest chwalebn&#261;, &#347;wiadczy o porz&#261;dku w duszy; ale czysto&#347;&#263; przesadna, w ch&#281;ci podobania si&#281;, jest nagann&#261;.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Ch&#281;&#263; podobania si&#281; ludziom, jak z jednej strony jest nader powszechn&#261;, tak z drugiej nader &#347;mieszn&#261;. Staraj&#261; si&#281; jedni, &#380;eby ich widziano, jaka zt&#261;d korzy&#347;&#263;? drudzy usi&#322;uj&#261; podoba&#263; si&#281;, jaki z tego po&#380;ytek? Nierozs&#261;dkiem jest po&#347;wi&#281;ca&#263; czas na upi&#281;kszenie cia&#322;a, kt&#243;ry po&#347;wi&#281;cony by&#263; winien na pozyskanie wieczno&#347;ci. Uk&#322;adanie w&#322;os&#243;w, pilne przestrzeganie mody, zwa&#380;anie na ka&#380;d&#261; drobnostk&#281; w ubiorze, aby si&#281; przedstawi&#322;a powabnie; jakie&#380;-to marne zaj&#281;cie! Gdyby&#347;my si&#281; tak starali o ozdob&#281; i czysto&#347;&#263; duszy, gdyby&#347;my tak&#261; pa&#322;ali &#380;&#261;dz&#261; podobania si&#281; raczej oczom Boskim ni&#380; ludzkim, a c h!&nbsp;&nbsp;j a k &#380; e b y &#347; m y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p r &#281; d k o&nbsp;&nbsp;s t a l i&nbsp;&nbsp;i&nbsp;&nbsp;j a k&nbsp;&nbsp;w i e l k i m i&nbsp;&nbsp;&#347; w i &#281; t y m i. Zbytnia troska o czysto&#347;&#263; cia&#322;a powoduje brud duszy; jak twarz powabna jest sid&#322;em na oczy, ska&#322;&#261; zgorszenia, ruin&#261; dla niewinnych; tak czysto&#347;&#263; przesadna, wyszukana bardziej ci&#281; piek&#322;u zaleci ni&#380; cz&#322;owiekowi.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1012',
                        'name' => 'XII Pa&#378;dziernika',
                        'content' => 'O zwracaniu si&#281; do nieba.',
                        'author' => '&#8222;Kto szczerem okiem w niebo spogl&#261;da, tan lepiej widzi ciemno&#347;&#263; rzeczy ziemskich; bo jakkolwiek maj&#261; one pewien poz&#243;r &#347;wiat&#322;a, ale to przy blasku nieba niknie ca&#322;kiem.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => '&#346;wiat&#322;o wi&#281;ksze poch&#322;ania mniejsze; gwiazdy s&#261;, gdy s&#322;o&#324;ce &#347;wieci, ale ich nie wida&#263;, jako mniejsze, nikn&#261; wobec wi&#281;kszego: tak wszelka ozdoba i rozkosz, je&#347;li je ma ziemia, por&#243;wnane z niebem, zdaj&#261; si&#281; by&#263; niczem. W niebo kaza&#322;a nam spogl&#261;da&#263; natura, aby nas nauczy&#322;a, &#380;e wszystko co nie jest niebem, na nasz&#261; uwag&#281; nie zas&#322;uguje. Jak&#380;e b&#322;&#261;dzi, kto si&#281; sercem do ziemi wi&#261;&#380;e! co jest dla Boga, to si&#281; kropl&#261; miodu, albo odrobin&#261; b&#322;ota nie zadowolni. Widok nagrody czyni niebacznymi na rany szermierz&#243;w; to samo w nas sprawia widok nieba; wieczna nas tam korona czeka, lecz nie dla leniwc&#243;w zgotowana, nie w podarunku, ale za zas&#322;ug&#281; ma si&#281; nam dosta&#263;. W niebo spojrzyj; tam ojczyzna, do kt&#243;rej d&#261;&#380;ysz; ale nie przez niebo ziemskie do wiecznego droga. C i&nbsp;&nbsp;c o&nbsp;&nbsp;w&nbsp;&nbsp;w y g o d a c h&nbsp;&nbsp;s w e&nbsp;&nbsp;d n i&nbsp;&nbsp;p &#281; d z &#261;,&nbsp;&nbsp;n a&nbsp;&nbsp;n i e b o&nbsp;&nbsp;n i e c h&nbsp;&nbsp;n i e&nbsp;&nbsp;r a c h u j &#261;;&nbsp;&nbsp;n a d z i e i&nbsp;&nbsp;i m&nbsp;&nbsp;o n o&nbsp;&nbsp;n i e z a p e w n i a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1013',
                        'name' => 'XIII Pa&#378;dziernika',
                        'content' => 'O r&#243;&#380;nicy pomi&#281;dzy uciechami ziemskiemi i niebieskiemi.',
                        'author' => '&#8222;Pomi&#281;dzy pobo&#380;nym i &#347;wiatowym cz&#322;owiekiem ta jest r&#243;&#380;nica: pierwszy wstrzymuje si&#281; od ziemskich a obfituje w duchowne pociechy; drugi, raduje si&#281; na zewn&#261;trz, a cierpi wewn&#281;trznie.&#8221;',
                        'description' => '(S. Ignat. apud Nolarc.)',
                        'description2' => 'Niechc&#281; pociechy, po kt&#243;rej nast&#281;puje niesmak, zgn&#281;bienie; wol&#281; smutek, za kt&#243;rym idzie wieczna rado&#347;&#263;. Niech si&#281; cieszy, kto chce; niech p&#281;dzi w rozkoszach dni swoje. Uciechy te serca nie zadowolni&#261;. Je&#347;li chcesz, aby uciechy &#347;wiatowe nie ur&#261;ga&#322;y tobie, to szyd&#378; z nich i nakszta&#322;t pi&#322;ki daleko odrzucaj od siebie; bardzo wielu one nieszcz&#281;&#347;liwymi uczyni&#322;y. N a j p r a w d z i w s z e j,&nbsp;&nbsp;n a j t r w a l s z e j&nbsp;&nbsp;p o c i e c h y&nbsp;&nbsp;d o z n a s z&nbsp;&nbsp;w t e d y,&nbsp;&nbsp;g d y&nbsp;&nbsp;t a m t e m i&nbsp;&nbsp;p o g a r d z i s z. Pobo&#380;ny i bezbo&#380;ny mog&#261; jednakow&#261; na twarzy okaza&#263; rado&#347;&#263;, ale w sercu takiej mie&#263; nie mog&#261;: pierwszego sumienie niebem jest, wieczny tam pok&#243;j bez obawy; dusza drugiego, jak morze wzburzone, zawsze w niepokoju i strachu. Jedna r&#243;&#380;a ile&#380; ma cierni! jest ona obrazem pociech &#347;wiatowych: chwilowa rozkosz tysi&#261;czne za sob&#261; poci&#261;ga gorycze. N i e&nbsp;&nbsp;m a&nbsp;&nbsp;l e p s z e j&nbsp;&nbsp;r o z k o s z y,&nbsp;&nbsp;n a d&nbsp;&nbsp;o d m a w i a n i e&nbsp;&nbsp;s o b i e&nbsp;&nbsp;r o z k o s z y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1014',
                        'name' => 'XIV Pa&#378;dziernika',
                        'content' => 'O niepodejrzywaniu.',
                        'author' => '&#8222;Kto sam z&#322;y, ten innych &#322;atwo podejrzywa; podobnie jak kto cierpi na zawr&#243;t g&#322;owy, to s&#261;dzi, &#380;e wszystko si&#281; kr&#281;ci; nie &#380;eby tak by&#322;o, ale &#380;e mu si&#281; tak zdaje, z powodu choroby, kt&#243;rej podlega.&#8221;',
                        'description' => '(S. Ignat. apud Maff.)',
                        'description2' => 'W ciemno&#347;ciach chodzi, kto si&#281; podejrzeniami zajmuje: my&#347;li, &#380;e widzi, a tu ciemno&#347;&#263; oczy mu zas&#322;ania. Najgorszymi oceniaczami s&#261; ci, kt&#243;rzy wed&#322;ug siebie wszystkich oceniaj&#261;, i sami przed sob&#261; k&#322;ami&#261;, fa&#322;szywem mniemaniem si&#281; powoduj&#261;c. Kto pr&#281;dko wierzy, ten pr&#281;dko si&#281; myli. C&#243;&#380; dziwnego, &#380;e tyle razy pob&#322;&#261;dzili ci, kt&#243;rzy na podejrzeniach sw&#243;j s&#261;d opierali? N i c&nbsp;&nbsp;n a t u r a l n i e j s z e g o&nbsp;&nbsp;j a k&nbsp;&nbsp;w&nbsp;&nbsp;c i e m n o &#347; c i a c h&nbsp;&nbsp;u t y k a &#263;,&nbsp;&nbsp;z a t a c z a &#263;&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;&#8212;&nbsp;&nbsp;u p a &#347; &#263;. W skutek s&#322;usznej pomsty Bo&#380;ej, kto kogo o jaki wyst&#281;pek pos&#261;dza, tego&#380; win&#281; na siebie &#347;ci&#261;ga &#8212; jest-to kara odwetu. N a j g o r z e j&nbsp;&nbsp;s &#261; d z &#261;&nbsp;&nbsp;o&nbsp;&nbsp;d r u g i c h&nbsp;&nbsp;t a c y,&nbsp;&nbsp;k t &#243; r z y&nbsp;&nbsp;w&nbsp;&nbsp;s o b i e&nbsp;&nbsp;s a m y c h&nbsp;&nbsp;n i c&nbsp;&nbsp;n i e&nbsp;&nbsp;z n a j d u j &#261;&nbsp;&nbsp;d o b r e g o. Siebie zaniedbuj&#261;, a w post&#281;powanie drugich wgl&#261;daj&#261;; staranie, kt&#243;reby powinni po&#347;wi&#281;ci&#263; na usuni&#281;cie swych wad, oni po&#347;wi&#281;caj&#261; na roztrz&#261;sanie urojonych wad obcych; z&nbsp;&nbsp;w &#322; a s n &#261;&nbsp;&nbsp;s z k o d &#261;&nbsp;&nbsp;w&nbsp;&nbsp;c u d z e&nbsp;&nbsp;&#380; n i w o&nbsp;&nbsp;s w &#243; j&nbsp;&nbsp;s i e r p&nbsp;&nbsp;z a p u s z c z a j &#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1015',
                        'name' => 'XV Pa&#378;dziernika',
                        'content' => 'O trwaniu w jedno&#347;ci.',
                        'author' => '&#8222;Oderwany od cia&#322;a cz&#322;onek, ani ruchu, ani czucia, ani jakiegokolwiek o&#380;ywienia od cia&#322;a swego nie otrzymuje.&#8221;',
                        'description' => '(S. Ignat. apud Orland. l. 15).',
                        'description2' => 'Dop&#243;ty przynosi owoce i jest we czci latoro&#347;l, dop&#243;ki jedno stanowi ze szczepem; je&#347;li si&#281; odetnie, ju&#380; si&#281; do niczego nie nadaje, chyba na ogie&#324;. W oderwaniu od szczepu nie ma &#380;ycia, nie ma si&#322;y, nie wydaje owocu. Nie od latoro&#347;li, ale od szczepu p&#322;odno&#347;&#263; zale&#380;y; latoro&#347;l podtrzymuje grona, ale szczep je wydaje i &#380;ywi. Kto si&#281; od grona wiernych wy&#322;&#261;cza, ten si&#281; Boskiego b&#322;ogos&#322;awie&#324;stwa pozbawia, kt&#243;re nie jednostce, ale dla ca&#322;ej rzeszy jest przeznaczone. Jak cz&#322;onek w ciele zwichni&#281;ty albo z&#322;amany, sobie i innym b&#243;l sprawia, tak wy&#322;&#261;czaj&#261;cy si&#281; od wiernych, sobie i innym szkodzi. C &#243; &#380;&nbsp;&nbsp;d z i w n e g o,&nbsp;&nbsp;&#380; e&nbsp;&nbsp;w&nbsp;&nbsp;t a k i m&nbsp;&nbsp;r a z i e&nbsp;&nbsp;o d c i &#281; c i e&nbsp;&nbsp;c h i r u r g o w i e&nbsp;&nbsp;r a d z &#261;? Pu&#347;ci&#263; krew, to nie znaczy zmarnowa&#263;; ale owszem dobrze zrobi&#263;, je&#347;li puszczeniem usuwa si&#281; szkodliwa, aby nie zkazi&#322;a pozosta&#322;ej, od kt&#243;rej zdrowie i moc ca&#322;ego cia&#322;a zale&#380;y. T o&nbsp;&nbsp;p r z e d e w s z y s t k i e m&nbsp;&nbsp;p o t r z e b a&nbsp;&nbsp;l e c z y &#263;,&nbsp;&nbsp;c o&nbsp;&nbsp;j e s t&nbsp;&nbsp;z&nbsp;&nbsp;d o b r e m&nbsp;&nbsp;c a &#322; e g o&nbsp;&nbsp;c i a &#322; a,&nbsp;&nbsp;n i e&nbsp;&nbsp;p o j e d y &#324; c z e g o&nbsp;&nbsp;j a k i e g o&nbsp;&nbsp;c z &#322; o n k a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1016',
                        'name' => 'XVI Pa&#378;dziernika',
                        'content' => 'O krzy&#380;u Chrystusa.',
                        'author' => '&#8222;Pomi&#281;dzy szcz&#281;&#347;ciem ziemskiem, a krzy&#380;em Chrystusa ta jest r&#243;&#380;nica, &#380;e tamto po skosztowaniu niesmak budzi; a ten w miar&#281; jak jest poznawany, tem wi&#281;ksze pragnienie wznieca.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden.)',
                        'description2' => 'Nawet gorzkie rzeczy mo&#380;na tak przyprawi&#263;, &#380;eby nietylko by&#322;y po&#380;yteczne, ale nadto, &#380;eby smakowa&#322;y i ku sobie ci&#261;gn&#281;&#322;y. Kt&#243;&#380;by uwierzy&#322;, gdyby historya nie zapewnia&#322;a, &#380;e &#347;wi&#281;temu Wawrzy&#324;cowi p&#322;omienie wydawa&#322;y si&#281; r&#243;&#380;ami. Takie lub inne przyj&#281;cie jakiej rzeczy zale&#380;y od nas: pszczo&#322;a nawet z gorzkiej dzi&#281;cieliny umie mi&#243;d zrobi&#263;; z najtwardszego drzewa, przy pomocy odpowiedniego przyrz&#261;du, wydostaj&#261; si&#281; po&#380;ywne soki. C o&nbsp;&nbsp;t a m&nbsp;&nbsp;d z i a &#322; a&nbsp;&nbsp;s z t u k a,&nbsp;&nbsp;t o&nbsp;&nbsp;w&nbsp;&nbsp;n a s&nbsp;&nbsp;z d z i a &#322; a&nbsp;&nbsp;&#322; a s k a. Ucz&#261;c si&#281; cierpie&#263;, zapominamy o biedzie; kochaj&#261;c krzy&#380;, wi&#281;cej zt&#261;d mamy pociech, ni&#380; kto&#347; ze swoich rozkoszy. Tak, r&#243;&#380;a ze swoich cierni jest rada, kto inny uwa&#380;a&#322;by je za kar&#281; dla siebie, ona je mi&#322;uje jako str&#243;&#380;&#243;w swej pi&#281;kno&#347;ci. Tak czy&#380;yk w&#347;r&#243;d ostu swe &#347;piewy wywodzi. I nie nale&#380;y to do tajemnic, rzeczy ci&#281;&#380;kie znosi&#263; nie ci&#281;&#380;ko: je&#347;li z&#322;e jest przysz&#322;e, nie potrzeba przed czasem si&#281; dr&#281;czy&#263;; je&#347;li przesz&#322;e, to ju&#380; przemin&#281;&#322;o; je&#347;li obecne, my&#347;lmy &#380;e wkr&#243;tce przeminie. T a k,&nbsp;&nbsp;s t o s o w n i e&nbsp;&nbsp;d o&nbsp;&nbsp;n a s z e j&nbsp;&nbsp;m y &#347; l i,&nbsp;&nbsp;d o&nbsp;&nbsp;n a s z e g o&nbsp;&nbsp;u s p o s o b i e n i a;&nbsp;&nbsp;w z r a s t a&nbsp;&nbsp;l u b&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;z m n i e j s z a&nbsp;&nbsp;b &#243; l, c i &#281; &#380; s z y m&nbsp;&nbsp;l u b&nbsp;&nbsp;l &#380; e j s z y m&nbsp;&nbsp;w y d a j e&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;k r z y &#380;,&nbsp;&nbsp;k t &#243; r y&nbsp;&nbsp;n i e s i e m y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1017',
                        'name' => 'XVII Pa&#378;dziernika',
                        'content' => 'O wym&#243;wkach cia&#322;a.',
                        'author' => '&#8222;Wym&#243;wki cia&#322;a zawsze nale&#380;y mie&#263; w podejrzeniu, gdy&#380; cia&#322;o zwykle od trud&#243;w stroni, zastawiaj&#261;c si&#281; si&#322; os&#322;abieniem.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Z&#322;ym doradzc&#261; jest zmys&#322;owo&#347;&#263;, bardzo na swoj&#261; stron&#281; ci&#261;gnie, je&#347;li jedna przyczyna nie wystarcza, tysi&#261;ce ma w pogotowiu; kt&#243;remi o pob&#322;a&#380;anie dla siebie ko&#322;ace; trudno&#347;ci, niewyg&#243;d unika, je&#347;li nie mo&#380;e wszystkich, to przynajmniej znaczniejszych. Wzgl&#261;d na zdrowie jest ze wszech miar s&#322;uszny, zas&#322;uguje, &#380;eby by&#322; uszanowany; ale jak&#380;e cz&#281;sto pod tem zdrowiem mi&#281;kko&#347;&#263;, lenistwo, dogadzanie nami&#281;tno&#347;ciom, i inne przer&#243;&#380;ne wyst&#281;pki kryj&#261; si&#281;, jakby pod jak&#261; zas&#322;on&#261;. Nie wie cia&#322;o, co jest z jego dobrem. Obecno&#347;&#263; odczuwa, na przysz&#322;o&#347;&#263; nie zwa&#380;a; jak&#261; szkod&#281; z dogadzania sobie odniesie, nie widzi: bo o wszystkiem wed&#322;ug po&#380;&#261;dliwo&#347;ci, nie wed&#322;ug rozs&#261;dku nawyk&#322;o s&#261;dzi&#263;. I n a c z e j&nbsp;&nbsp;z&nbsp;&nbsp;c z a s e m&nbsp;&nbsp;o s &#261; d z i. W miar&#281; cierpie&#324; otrzyma chwa&#322;&#281;, kara niewielkim si&#281; trudem nabywa, ale zaszczytna korona wielkim. Niech teraz &#378;le b&#281;dzie, a&#380;eby w wieczno&#347;ci by&#322;o dobrze. &#321; a t w o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;z &#322; e&nbsp;&nbsp;z n o s i,&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;o b f i t a&nbsp;&nbsp;z a&nbsp;&nbsp;t o&nbsp;&nbsp;c z e k a&nbsp;&nbsp;n a g r o d a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1018',
                        'name' => 'XVIII Pa&#378;dziernika',
                        'content' => 'O mi&#322;o&#347;ci w&#322;asnej.',
                        'author' => '&#8222;Czarownikiem jest mi&#322;o&#347;&#263; w&#322;asna; oczy naszej duszy cz&#261;sto oczarowuje, aby&#347;my uwa&#380;ali za niemo&#380;liwe, co we w&#322;a&#347;ciwem &#347;wietle przedstawione, nie tylko jest mo&#380;liwe, ale i konieczne.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => '&#377;le b&#281;dzie leczy&#322; lekarz, je&#347;li za zdaniem chorego p&#243;jdzie; gorzej je&#347;li za jego po&#380;&#261;daniem. Niechaj boli, byleby pomog&#322;o, nie potrzeba &#380;a&#322;owa&#263; ani &#380;elaza, ani ognia; niechaj j&#281;czy, niechaj si&#281; rzuca chory, byle zadawane mu rany do zdrowia prowadzi&#322;y. Poczciwa-to katownia, co b&#243;l chwilowy zdrowiem, jako nieoszacowanym skarbem nagradza. Nie ma gorszej &#322;askawo&#347;ci nad pob&#322;a&#380;anie choremu, dla jego zguby, to jest, nad odejmowanie mu &#347;rodka wyzdrowienia. Wielk&#261; niemoc&#261; jest mi&#322;o&#347;&#263; w&#322;asna, rzadko na sobie samej si&#281; ogranicza, cz&#281;sto bywa innych wad rodzicielk&#261; i kierowniczk&#261;; gdy jej schlebiamy, wiele nieszcz&#281;&#347;&#263; sobie gotujemy, i dop&#243;ty si&#281; od nich nie uwolnimy, dop&#243;ki mi&#322;o&#347;ci w&#322;asnej w sobie nie umorzymy. Co ona uwa&#380;a do zniesienia za niemo&#380;liwe, to wprawa pokazuje, &#380;e jest zno&#347;ne, nawyknienie &#380;e mo&#380;liwe, &#322;aska &#380;e nawet przyjemne. T y c h&nbsp;&nbsp;p r z e t o&nbsp;&nbsp;d o r a d z c &#243; w&nbsp;&nbsp;n a d&nbsp;&nbsp;n i &#261;&nbsp;&nbsp;p r z e n o s i &#263;&nbsp;&nbsp;n a l e &#380; y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1019',
                        'name' => 'XIX Pa&#378;dziernika',
                        'content' => 'O obfito&#347;ci Bo&#380;ej pociechy.',
                        'author' => '&#8222;Tak wielk&#261; jest obfito&#347;&#263; Bo&#380;ej pociechy, &#380;e jej s&#322;odycz nietylko na dusz&#281;, ale i na cia&#322;o sp&#322;ywa.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'W zami&#322;owaniu cnoty nietylko dusza, ale i cia&#322;o Bo&#380;ej podlega woli: zt&#261;d hojna r&#281;ka Bo&#380;a tyle w nagrod&#281; udziela pociech, &#380;e niemi nietylko napawa si&#281; dusza, ale i cia&#322;o w trudach bior&#261;ce udzia&#322;. Pociechy cia&#322;a, jakie &#347;wiat ofiaruje, s&#261; brudne i chwilowe; pociechy, jakich niebo dostarcza, s&#261; czyste i trwa&#322;e. N a d e r&nbsp;&nbsp;m &#261; d r z e&nbsp;&nbsp;i&nbsp;&nbsp;r o z t r o p n i e&nbsp;&nbsp;r o b i,&nbsp;&nbsp;k t o&nbsp;&nbsp;t e&nbsp;&nbsp;n a b y w a&nbsp;&nbsp;k o s z t e m&nbsp;&nbsp;t a m t y c h. Z wielu wzgl&#281;d&#243;w winni&#347;my Bogu to wszystko, co czynimy. Jaka&#380; nies&#322;ychana jego hojno&#347;&#263;, gdy za us&#322;ugi, kt&#243;rychby m&#243;g&#322; od nas s&#322;usznie wymaga&#263;, p&#322;aci, nawet na tej ziemi. Przedsmak nieba daje nam B&#243;g, aby&#347;my pociechami, kt&#243;rych tu doznajemy, zach&#281;cani, umi&#322;owali i wzdychali za wiecznemi. J a k &#380; e&nbsp;&nbsp;s &#322; o d k o&nbsp;&nbsp;t a k&nbsp;&nbsp;h o j n e m u&nbsp;&nbsp;P a n u&nbsp;&nbsp;s &#322; u &#380; y &#263;!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1020',
                        'name' => 'XX Pa&#378;dziernika',
                        'content' => 'O wzrastaniu w mi&#322;o&#347;ci.',
                        'author' => '&#8222;Gdy przedmiot mi&#322;o&#347;ci jest niesko&#324;czony, zawsze w mi&#322;owaniu post&#281;powa&#263; i doskonali&#263; si&#281; mo&#380;na.&#8221;',
                        'description' => '(S. Ignat. Epist. 15 April. 1543).',
                        'description2' => 'Inne uczucia zmienne s&#261;, koniec maj&#261;; sama mi&#322;o&#347;&#263; jest nie&#347;miertelna, ko&#324;ca nie zna; przedmiot, ku kt&#243;remu si&#281; zwraca, jest niesko&#324;czony, &#380;eby wi&#281;c ten ogie&#324; p&#322;on&#261;&#322;, wci&#261;&#380; materya&#322;u dostarcza i nigdy dostarcza&#263; nie przestanie. Ch&#281;tnie mi&#322;ujemy, co chcemy; nie mo&#380;emy jednak czego&#347; nie mi&#322;owa&#263;; nienawi&#347;ci mo&#380;emy si&#281; pozby&#263;, ale mi&#322;o&#347;ci ca&#322;kiem pozby&#263; si&#281; nie mo&#380;emy; zawsze musimy czego&#347; chcie&#263;. Mi&#322;o&#347;&#263; wi&#281;c sama pokazuje, &#380;e jest stworzon&#261; do mi&#322;owania niesko&#324;czonego dobra. Inne uczucia z czasem si&#322;&#281; trac&#261;, starzej&#261; si&#281;: sama jeno mi&#322;o&#347;&#263; niezmordowana, nigdy nie s&#322;abnie, zm&#281;czenia nie zna, zrodzona do nie&#347;miertelno&#347;ci. Im d&#322;u&#380;ej trwa, tem bardziej wzrasta, i gdy wieczno&#347;&#263; innym uczuciom koniec k&#322;adzie, ona silniejsz&#261; si&#281; staje. Od zm&#281;czenia i gnu&#347;no&#347;ci natura zwolni&#322;a mi&#322;o&#347;&#263;, do ci&#261;g&#322;ego u&#380;ytku j&#261; stworzy&#322;a, dni swobodnych odm&#243;wi&#322;a, i &#380;eby&#347;my kiedykowiek dosy&#263; jej mieli, nie chcia&#322;a. M i &#322; u j &#261; c&nbsp;&nbsp;i&nbsp;&nbsp;w&nbsp;&nbsp;m i &#322; o &#347; c i&nbsp;&nbsp;w z r a s t a j &#261; c,&nbsp;&nbsp;s z c z &#281; &#347; l i w i&nbsp;&nbsp;b &#281; d z i e m y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1021',
                        'name' => 'XXI Pa&#378;dziernika',
                        'content' => 'O po&#380;&#261;dliwo&#347;ci ludzkiej.',
                        'author' => '&#8222;Mi&#322;o&#347;nik dobrowolnego ub&#243;stwa niech si&#281; statu&#261; niejako stanie, aby z takim samem usposobieniem przyjmowa&#322; siermi&#281;g&#281;, z jakiemby przyj&#261;&#322; bisior lub purpur&#281;.&#8221;',
                        'description' => '(S. Ignat. apud Maff.)',
                        'description2' => 'Ludzka po&#380;&#261;dliwo&#347;&#263; nigdy si&#281; nie zasyca, koniec jej jest wsz&#281;dzie i pocz&#261;tek wsz&#281;dzie; po wielu s&#261; inne, po innych wszystkie; po wszystkich, jeszcze nie zbywa na pragnieniach, na zachceniach. Nigdy nie m&#243;wi: dosy&#263;. Zwierz&#281; nienasycone! Z&#322;e, kt&#243;re si&#281; nam od natury dostaje, &#322;aska poprawia; gdy tak nas uspasabia, aby&#347;my nietylko ma&#322;em si&#281; zadawalniali, ale i niedostatek rzeczy niezb&#281;dnych ch&#281;tnie znosili. A wi&#281;c nie bez ratunku jest ub&#243;stwo; czego nie doka&#380;&#261; inne sposoby, doka&#380;e wola wyrobiona, to jest, wola bez &#380;&#261;dzy, bez chciwo&#347;ci. M a &#322; e m&nbsp;&nbsp;j e s t&nbsp;&nbsp;t o,&nbsp;&nbsp;c o&nbsp;&nbsp;w y s t a r c z a,&nbsp;&nbsp;c z e m u &#380;&nbsp;&nbsp;o&nbsp;&nbsp;w i e l e&nbsp;&nbsp;z a b i e g a m y? Jaka ci&#281; suknia odziewa? jaki kapelusz g&#322;ow&#281; nakrywa? &#8212; co na tem zale&#380;y? &#8212; tamta, je&#347;li nago&#347;&#263; os&#322;ania, ten, je&#347;li od s&#322;o&#324;ca albo deszczu chroni, spe&#322;ni&#322;y obowi&#261;zek, reszta zbywa, nie daje ozdoby, ale zabiera.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1022',
                        'name' => 'XXII Pa&#378;dziernika',
                        'content' => 'O &#347;wi&#281;to&#347;ci.',
                        'author' => '&#8222;Gdy si&#281; do cnoty przyk&#322;adacie, ju&#380; tem samem o zbawieniu bli&#378;niego my&#347;licie.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'Najlepiej si&#281; czasu u&#380;ywa, gdy go si&#281; w&#322;a&#347;ciwie u&#380;ywa. Gdy nadchodz&#261; &#380;niwa, u&#380;y&#263; go nale&#380;y na &#380;niwa; ale &#380;eby &#380;niwa posz&#322;y dobrze, potrzeba ochoty; gdy jej nie ma, to nie wiele zrobimy. Duch nadaje &#380;ycie tym czynno&#347;ciom, kt&#243;re dotycz&#261; wewn&#281;trznego po&#380;ytku bli&#378;niego; bez ducha praca jest nieskuteczn&#261;; o uszy si&#281; obija, ale do serca przenikn&#261;&#263; nie zdo&#322;a g&#322;os, kt&#243;ry wymow&#261; tylko, nie duchem jest o&#380;ywiony. Jak najlepsza armata nic nie zrobi bez ognia, tak najzdolniejszy cz&#322;owiek nic bez Ducha; wszelkie tu przygotowania, wysi&#322;ki i trudy pozostan&#261; daremne. &#379;adne Apostolstwo tyle po&#380;ytku nie przynosi, ile to, kt&#243;re si&#322;y swej gorliwo&#347;ci zwraca najprz&#243;d do siebie; n i k t&nbsp;&nbsp;d l a&nbsp;&nbsp;c i e b i e&nbsp;&nbsp;o d&nbsp;&nbsp;c i e b i e&nbsp;&nbsp;n i e&nbsp;&nbsp;j e s t&nbsp;&nbsp;b l i &#380; s z y m; &#347; w i &#281; t o &#347; &#263;,&nbsp;&nbsp;k t &#243; r &#261;&nbsp;&nbsp;c h c e s z&nbsp;&nbsp;w i d z i e &#263;&nbsp;&nbsp;w&nbsp;&nbsp;i n n y c h,&nbsp;&nbsp;p i e r w i e j&nbsp;&nbsp;p r z e d s t a w&nbsp;&nbsp;n a&nbsp;&nbsp;s o b i e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1023',
                        'name' => 'XXIII Pa&#378;dziernika',
                        'content' => 'O przeciwno&#347;ciach losu.',
                        'author' => '&#8222;Sprawiedliwemu nawet przeciwnego losu pociski, s&#261; po&#380;yteczne, szkodz&#261;c pomagaj&#261;: podobnie jakgdyby grad z kosztownych kamieni postr&#261;ca&#322; li&#347;cie w winnicy, a natomiast wzbogaci&#322; je sob&#261;, to jest, skarbem o wiele lepszym.&#8221;',
                        'description' => '(S. Ignat. apud Bart.)',
                        'description2' => 'Cokolwiek si&#281; nam przykrego wydarza, to si&#281; nie z przypadku wydarza, nie z ludzkiej zazdro&#347;ci albo nienawi&#347;ci; lecz z woli mi&#322;uj&#261;cego nas Boga, dla naszego dobra. Los nic a nic tu nie wp&#322;ywa, tylko sam B&#243;g. Bardzo nam to pomaga, na co jako na przykro&#347;&#263; utyskujemy. Choroba cia&#322;a leczy dusz&#281;, kt&#243;re&#380; wi&#281;ksze dobro? dosy&#263; czyni za grzechy, do Boga prowadzi, grzeszy&#263; nie pozwala; mogli&#380;by&#347;my sami co&#347; lepszego wybra&#263;? C o&nbsp;&nbsp;s z k o d z i,&nbsp;&nbsp;t o&nbsp;&nbsp;l e c z y. Oboj&#281;tne s&#261; wszystkie rzeczy; jakiemi chcesz, takiemi je czynisz. Nieszcz&#281;&#347;cie nikogo nie zawodzi, takiem jest, za jakie si&#281; uwa&#380;a: je&#347;li co&#347; poczytujesz dla siebie za nieszcz&#281;&#347;cie, prawdziwie nieszcz&#281;&#347;liwym b&#281;dziesz; jak tylko s&#261;d sw&#243;j zmienisz, zaraz si&#281; szcz&#281;&#347;liwym uczujesz. Zadowolenie we wszystkiem znajdzie, kto si&#281; z rzeczami obej&#347;&#263; umie; ale to ten jeno zdo&#322;a, kto za pop&#281;dem cnoty, nie natury p&#243;jdzie. M o g &#261;&nbsp;&nbsp;t r u c i z n y,&nbsp;&nbsp;c z e m u &#380; b y&nbsp;&nbsp;p r z e c i w n o &#347; c i&nbsp;&nbsp;n i e&nbsp;&nbsp;m o g &#322; y&nbsp;&nbsp;l e c z y &#263;?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1024',
                        'name' => 'XXIV Pa&#378;;dziernika',
                        'content' => 'O duszy skalanej grzechem.',
                        'author' => '&#8222;O m&#243;j Bo&#380;e! najwy&#380;sze dobro! jakim sposobem mnie tak strasznego grzesznika znosisz?&#8221;',
                        'description' => '(S. I gnat. apud Ribad.)',
                        'description2' => '&#379;adne brudy, jakie dot&#261;d &#347;wiat mia&#322;, nie sprawiaj&#261; takiej odrazy, jak&#261; sprawia dusza grzesznika. &#379;aden ust&#281;p nie jest tak brudem skalany, jak jest skalane sumienie, gdy na niem grzech ci&#261;&#380;y. Napr&#243;&#380;no cia&#322;o odziewasz bisiorem i purpur&#261;, czczym jest zapach pomady, kt&#243;rym napawasz w&#322;osy, daremnie twarz powlekasz bielid&#322;em; je&#347;li si&#281; brzydota w duszy kryje, to jeste&#347; grobem ozdobionym zewn&#261;trz a pe&#322;nym zgnilizny wewn&#261;trz <sup>1</sup>. Dusza! obraz Bo&#380;y, Bozkiej natury uczestniczka <sup>2</sup>, niegdy&#347; nieba dziedziczka; teraz, w skutek zbrodni, staje si&#281; potworem, jakiego nie ma i Afryka, g&#322;owni&#261; piek&#322;a, szatana niewolnikiem, strachem dla Anio&#322;&#243;w, obrzydliwo&#347;ci&#261; dla Boga! I to z jakiego powodu? &#8212; Oto dla chwilowej rozkoszy, dla szczypty dymu. O&nbsp;&nbsp;l u d z i e!&nbsp;&nbsp;m i &#322; u j c i e&nbsp;&nbsp;n i e w i n n e j&nbsp;&nbsp;d u s z y&nbsp;&nbsp;p i &#281; k n o &#347; &#263;,&nbsp;&nbsp;o z d o b y&nbsp;&nbsp;c &#243; r k i&nbsp;&nbsp;k r &#243; l e w s k i e j&nbsp;&nbsp;n i e&nbsp;&nbsp;z b y w a j c i e&nbsp;&nbsp;z a&nbsp;&nbsp;t a k i e&nbsp;&nbsp;b r u d y! <sup>3</sup>',
                        'description3' => '1) &#346;. Mateusz 23, 27.<br/>
    2) II. &#346;. Piotr 1, 4.<br/>
    3) Psalm 44, 14.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1025',
                        'name' => 'XXV Pa&#378;dziernika',
                        'content' => 'O po&#380;ytkach pokory.',
                        'author' => '&#8222;Mi&#322;o&#347;nik doskona&#322;o&#347;ci tak winien w pokor&#281; obfitowa&#263;, jak lampa w olej: niech go nape&#322;nia, niech si&#281; objawia na zewn&#261;trz, i w kt&#243;r&#261;kolwiek stron&#281; si&#281; obr&#243;ci, niech ni&#261; &#347;wieci.&#8221;',
                        'description' => '(S. Ignat. ad S. Magdal. de Paz.)',
                        'description2' => 'Bez g&#322;&#281;bokiej pokory i pokoju wewn&#261;trz, nie ma i przyk&#322;adu na zewn&#261;trz; pokorze i pok&#243;j towarzyszy i dobry przyk&#322;ad, cz&#322;owiek pokorny i sam szcz&#281;&#347;liwy i drugich uszcz&#281;&#347;liwia. Wszelka burza, jaka si&#281; czy to w domu, czy poza domem pojawia, z pychy powstaje; niespokojne z&#322;e! nie zna ani ko&#324;ca, ani miary. St&#322;umiaj pych&#281;, wykorzeniaj j&#261;, a ze sob&#261; i z innymi sta&#322;e zawrzesz przymierze. Je&#347;li pycha twoja pora&#380;k&#281; ponios&#322;a, je&#347;li godno&#347;ci jakiej nie otrzyma&#322;e&#347;, my&#347;l, &#380;e chocia&#380; nie masz, czego pragn&#261;&#322;e&#347;, masz jednak to, czego pragn&#261;&#263; winiene&#347;. Zawr&#243;tby ci sprawi&#322;a godno&#347;&#263;, &#243;w zaszczyt, o kt&#243;rym my&#347;la&#322;e&#347;, przyprawi&#322;by ci&#281; o zgub&#281;. Jak&#380;eby&#347;my szcz&#281;&#347;liwi byli, gdyby&#347;my z losu naszego zadowoleni pragnienia swoje na wodzy trzymali: wielu, a&#380;eby by&#263; szcz&#281;&#347;liwymi, dobrowolnie odrzucili te zaszczyty, za kt&#243;remi ty tak gonisz. O&nbsp;&nbsp;d y m&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;u b i e g a s z,&nbsp;&nbsp;i&nbsp;&nbsp;o&nbsp;&nbsp;n i c&nbsp;&nbsp;w i &#281; c e j.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1026',
                        'name' => 'XXVI Pa&#378;dziernika',
                        'content' => 'O nieche&#322;pieniu si&#281;.',
                        'author' => '&#8222;Je&#347;li w sobie widzisz jakie &#322;aski Boga, my&#347;l, &#380;e to z&#322;oto i drogie kamienie, kt&#243;remi trupa dobro&#263; Boga &#322;askawie powlek&#322;a.&#8221;',
                        'description' => '(S. Ignat. ad S. Magdal. de Paz.)',
                        'description2' => 'Im liczniejsze i wi&#281;ksze s&#261; dary Boga, tem silniejsza pobudka do pokory. Biedniejszy ten, kt&#243;ry wi&#281;cej winien; wi&#281;kszy ci&#281;&#380;ar d&#378;wiga, kto wi&#281;cej otrzyma&#322;. Pieczy twojej zosta&#322;y powierzone te dary, kt&#243;re posiadasz, za&#380;&#261;daj&#261; z nich od ciebie rachunku. Jakie str&#243;&#380; skarbu starania, takie i ty rozwin&#261;&#263; winiene&#347;, owszem wi&#281;ksze; dla niego dosy&#263;, je&#347;li nic ze skarbu nie uroni, dla ciebie to nie wystarcza, musisz co&#347; przyrobi&#263;, jaki&#347; z talentu zysk wyci&#261;gn&#261;&#263;. P a t r z,&nbsp;&nbsp;j a k i e&nbsp;&nbsp;c i&nbsp;&nbsp;c i &#281; &#380; a r y&nbsp;&nbsp;p r z y b y w a j &#261;&nbsp;&nbsp;z&nbsp;&nbsp;d a r a m i&nbsp;&nbsp;B o g a. Pie&#324; chocia&#380;by pi&#281;knym p&#322;aszczem by&#322; odziany, z&#322;otem ozdobiony, od z&#322;ota b&#322;yszcza&#322;, pniem pozostanie: tak ma&#322;o ma zt&#261;d powodu do pysznienia si&#281;, jak osio&#322;, kt&#243;ry skarb d&#378;wiga. Je&#347;li jakie dary, czy to natury, czy &#322;aski posiadasz, to nie s&#261; twoje; dane tobie zosta&#322;y z g&#243;ry, lada chwila mog&#261; ci by&#263; odj&#281;te. C o&nbsp;&nbsp;m a s z,&nbsp;&nbsp;c z e g o b y &#347;&nbsp;&nbsp;n i e&nbsp;&nbsp;w z i &#261; &#322;,&nbsp;&nbsp;a&nbsp;&nbsp;j e &#347; l i &#347;&nbsp;&nbsp;w z i &#261; &#322;&nbsp;&nbsp;c z e m u&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;c h e &#322; p i s z,&nbsp;&nbsp;j a k o b y &#347;&nbsp;&nbsp;n i e&nbsp;&nbsp;w z i &#261; &#322;? <sup>1</sup> t y l k o&nbsp;&nbsp;w r o n a&nbsp;&nbsp;g &#322; u p i o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;w&nbsp;&nbsp;c u d z y c h&nbsp;&nbsp;p i &#243; r a c h&nbsp;&nbsp;l u b u j e.',
                        'description3' => '1) I. Koryn. 4, 7.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1027',
                        'name' => 'XXVII Pa&#378;dziernika',
                        'content' => 'O &#380;yciu dla Boga.',
                        'author' => '&#8222;Lepiej nie &#380;y&#263;, ni&#380; &#380;y&#263; dla pr&#243;&#380;no&#347;ci.&#8221;',
                        'description' => '(S. Ignat. apud Nolarci).',
                        'description2' => 'Je&#347;li dusza, kt&#243;ra zgrzeszy&#322;a, jest dla Boga umar&#322;&#261;; to &#380;ycie takie raczej &#347;mierci&#261; ni&#380; &#380;yciem nazwa&#263; nale&#380;y. Nietylko to cia&#322;o jest trupem, kt&#243;re spoczywa w grobie, ale i to w kt&#243;rem dusza jeszcze przebywa, ale w skutek grzechu straci&#322;a Bo&#380;&#261; &#322;ask&#281;. Kto dla Boga nie &#380;yje, ten g&#322;osu rozumu nie s&#322;ucha; kto trosk&#281; o dusz&#281; uwa&#380;a za rzecz ma&#322;ej wagi, tego ja &#380;ycie uwa&#380;am za gorsze od &#347;mierci; gdyby umar&#322;, toby Boga nie obra&#380;a&#322;, sobieby nie szkodzi&#322;, bli&#378;niegoby nie gorszy&#322;. B&#243;g dobrodziejstwo wy&#347;wiadcza, gdy w skutek jakiej choroby &#380;ycie pr&#281;dzej odbiera; bo tym sposobem odejmuje mo&#380;no&#347;&#263; grzeszenia i mo&#380;no&#347;&#263; zwi&#281;kszania sobie kar w piekle. K t o&nbsp;&nbsp;n i e&nbsp;&nbsp;c h c e&nbsp;&nbsp;d o b r z e&nbsp;&nbsp;c z y n i &#263;,&nbsp;&nbsp;g d y&nbsp;&nbsp;m o &#380; e;&nbsp;&nbsp;t e m u&nbsp;&nbsp;&#322; a s k &#281;&nbsp;&nbsp;r o b i m y,&nbsp;&nbsp;g d y&nbsp;&nbsp;m u&nbsp;&nbsp;d o&nbsp;&nbsp;c z y n i e n i a&nbsp;&nbsp;&#378; l e&nbsp;&nbsp;d r o g &#281;&nbsp;&nbsp;z a g r a d z a m y. &#346;mier&#263; nie jest tak z&#322;&#261;, jak wielu s&#261;dzi; zbrodniarze przenosili j&#261; cz&#281;sto nad tortury sumienia, aby kar&#281; odnie&#347;li, na kt&#243;r&#261; zas&#322;u&#380;yli i kt&#243;r&#261; wycierpie&#263; musieli.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1028',
                        'name' => 'XXVIII Pa&#378;dziernika',
                        'content' => 'O p&#243;j&#347;ciu za prawd&#261;.',
                        'author' => '&#8222;Chocia&#380;by rozum co&#347; uwa&#380;a&#322; za prawdziwe i za tem obstawa&#322;, jednak w wielu razach, kiedy nam kto&#347; prawd&#281; jasno przedstawi i ta gwa&#322;tu rozumowi nie zadaje, nale&#380;y ci&#281;&#380;arem woli raczej na t&#281; stron&#281; si&#281; przechyli&#263;, ni&#380; na tamt&#261;.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'Niekiedy oku choremu zdaje si&#281;, &#380;e jasno widzi, &#380;adnej w&#261;tpliwo&#347;ci nie przypuszcza, a jednak si&#281; myli, i zdrowemu raczej ni&#380; sobie zaufa&#263; powinno; z s&#261;dem bywa to samo, cz&#281;sto lepiej jest zda&#263; si&#281; na s&#261;d obcy. Z&#322;y-to trybuna&#322;, gdzie s&#281;dzia i winny jedn&#261; s&#261; osob&#261;; na zdaniu w&#322;asnem nigdy zbytnio polega&#263; nie nale&#380;y: wtedy za&#347; najmniej, gdy albo sprawa nasza, albo s&#322;uszno&#347;&#263; zdania nie do&#347;&#263; jasno si&#281; przedstawiaj&#261;. Nikt nie jest tak przezornym, nikt tak pewnym siebie, aby nie m&#243;g&#322; b&#322;&#261;dzi&#263;; wi&#281;cej widz&#261; oczy, ni&#380; oko; nauk&#281; i zdolno&#347;ci nie zawsze mo&#380;na uwa&#380;a&#263; za wyroczni&#281;, czasami cz&#322;owiek prosty lepiej rzecz rozstrzyga. W&#322;adza rozumu jest konieczn&#261;, tak jednak rozkazowi woli ma by&#263; podleg&#322;a, aby gdy sw&#243;j b&#322;&#261;d spostrze&#380;e, za skinieniem woli i&#347;&#263; si&#281; nie waha&#322;a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1029',
                        'name' => 'XXIX Pa&#378;dziernika',
                        'content' => 'O &#378;r&#243;dle pokoju.',
                        'author' => '&#8222;Je&#347;li idzie o pok&#243;j duszy, to go nie zazna ten, kt&#243;ry w sobie nosi przyczyn&#281; niepokoju i zamieszania.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'Nic na &#347;wiecie nie ma lepszego nad niewinne sumienie: &#380;adna wolno&#347;&#263; nie jest tak wielk&#261;, jak niel&#281;kanie si&#281; niczego; ten j&#261; osi&#261;gnie, kto si&#281; siebie nie l&#281;ka. Kogo nie obwinia sumienie, ten si&#281; &#380;adnego s&#281;dziego nie obawia. Jak dla z&#322;ego sumienia nie ma znik&#261;d pociechy; tak dla dobrego znik&#261;d zgryzoty. Trudno tam o pok&#243;j, gdzie si&#281; &#347;ciera wiele sprzecznych uczu&#263;. Nasza niestanowczo&#347;&#263;, nasze chwianie si&#281; codzienne zt&#261;d pochodzi, &#380;e nas dzisiaj to bawi, co wczoraj mieli&#347;my w obrzydzeniu, &#380;e nam si&#281; dzisiaj to podoba, co wczoraj nas razi&#322;o. Jak okr&#281;t burz&#261; miotany, tak umys&#322; nami&#281;tno&#347;ciom podleg&#322;y, zawsze si&#281; waha, zawsze z ba&#322;wanami &#347;ciera. Rado&#347;&#263; w nas si&#281; rodzi, dary losu lub natury nie w naszej s&#261; mocy, ani do smutku, ani do rado&#347;ci prawdziwej pochopu z nich bra&#263; nie mo&#380;na, bo zmianie podlegaj&#261;. P o k &#243; j&nbsp;&nbsp;s t a &#322; y,&nbsp;&nbsp;n i e z a m &#261; c o n y,&nbsp;&nbsp;r o d z i&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;z&nbsp;&nbsp;n i e w i n n e g o&nbsp;&nbsp;s u m i e n i a,&nbsp;&nbsp;z&nbsp;&nbsp;p o k o j u&nbsp;&nbsp;d u s z y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1030',
                        'name' => 'XXX Pa&#378;dziernika',
                        'content' => 'O szczodrobliwo&#347;ci Boga.',
                        'author' => '&#8222;Szczodrobliwo&#347;&#263; Boga zysk, kt&#243;rego si&#281; dla niej zrzekamy, obficie nam nagradza.&#8221;',
                        'description' => '(S. Ignatius l. 3 n. 7).',
                        'description2' => 'Co innego jest wydawa&#263; si&#281;, a co innego by&#263; bogatym; nie kiesze&#324;, ale duch o bogactwie stanowi; nie mniemanie, ale sumienie bogatym czyni, nie obcy s&#261;d, ale w&#322;asny. T e n&nbsp;&nbsp;j e s t&nbsp;&nbsp;b o g a t y m,&nbsp;&nbsp;k t o&nbsp;&nbsp;m a&nbsp;&nbsp;d o s y &#263;. Kto ma wiele c&#243;rek na wydaniu, ten chocia&#380;by najwi&#281;ksze posiada&#322; dochody, uwa&#380;a si&#281; za biednego; jak&#380;e b&#281;dzie bogatym, kto mn&#243;stwo &#380;ywi &#380;&#261;dz, a nawet dla jednej z nich &#347;wiat nie starczy? Nie ten jest ubogim, kto nie ma, ale ten kto potrzebuje; nie ka&#380;dy potrzebuje, kt&#243;ry nie ma, ale ten kto po&#380;&#261;da, kto pragnie. Je&#347;li &#380;&#261;dzom popu&#347;cisz cugle, to chocia&#380;by&#347; op&#322;ywa&#322; w bogactwa, biednym b&#281;dziesz; je&#347;li je powstrzymujesz, to chocia&#380;by ci na czem zbywa&#322;o, b&#281;dziesz mia&#322; dosy&#263;. Ani si&#281; skurczy&#322;a, ani wyczerpa&#322;a r&#281;ka Pa&#324;ska, nietylko rzeczy koniecznych dot&#261;d swoim dostarcza&#322;; ale a&#380; do syto&#347;ci, nawet na puszczy kilka tysi&#281;cy nakarmi&#322; <sup>1</sup>.',
                        'description3' => '1) &#346;. Marek 8, 9.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1031',
                        'name' => 'XXXI Pa&#378;dziernika',
                        'content' => 'O skutkach cierpliwo&#347;ci.',
                        'author' => '&#8222;Byleby wam nie zbywa&#322;o na pokorze, na cicho&#347;ci, to dobro&#263; Bo&#380;a z pewno&#347;ci&#261; wam swej pomocy nie odm&#243;wi.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'Z&#322;o&#347;ci nigdy z&#322;o&#347;ci&#261; nie pokonamy, nale&#380;y j&#261; pokonywa&#263; dobroci&#261;. I chocia&#380;by z&#322;e z&#322;em, jak klin klinem mo&#380;na by&#322;o usun&#261;&#263;, lepiej jednak t&#281; chwa&#322;&#281; zostawi&#263; cnocie, aby usun&#281;&#322;a ona. Nieraz czego nie mog&#322;a si&#322;a, tego dokaza&#322;a cicho&#347;&#263;; i nie ma dzielniejszej do przekonania wymowy, nad cierpliwo&#347;&#263;: ta z&#322;e i z&#322;ych zwyci&#281;&#380;a, zuchwa&#322;o&#347;&#263; u&#347;mierza. Czem jest strawienie pokarm&#243;w dla zdrowia cia&#322;a; tem cicho&#347;&#263;, &#322;agodno&#347;&#263; dla publicznego pokoju. Przy jej pomocy cz&#322;owiek wszelkie z&#322;o zamienia: n a&nbsp;&nbsp;s w o j e&nbsp;&nbsp;d o b r o. Dwojakie jest &#322;agodno&#347;ci dobrodziejstwo: zmniejsza szkody cia&#322;a, a zwi&#281;ksza dobra duszy. Dwojakie r&#243;wnie&#380; jest dobrodziejstwo pokoju: powodu do obrazy nie daje i danego nie przyjmuje; ale i dwojaka nagroda: B o g u&nbsp;&nbsp;j e s t&nbsp;&nbsp;m i &#322; y&nbsp;&nbsp;i&nbsp;&nbsp;l u d z i o m.',
                        'description3' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_11',
                'name' => 'November',
                'colour_value' => '#234aa6',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_1101',
                        'name' => 'I Listopada',
                        'content' => 'O &#322;asce Ducha &#347;w.',
                        'author' => '&#8222;Nie ogrom nauki, ale jej zami&#322;owanie zwykle zaspakaja pragnienie duszy naszej.&#8221;',
                        'description' => '(S. Ignat. in ann. Exerc.)',
                        'description2' => 'Mniemanie nie usuwa choroby, wyobra&#378;nia nie zaspakaja g&#322;odu; podobnie i samo zg&#322;&#281;bianie rzeczy duchownych nie czyni cz&#322;owieka pobo&#380;nym, je&#347;li mu zbywa na rzeczy g&#322;&#243;wnej, kt&#243;ra zale&#380;y na poruszeniu woli, na skrusze serca. Samo zg&#322;&#281;bianie jest prac&#261;, ale bez po&#380;ytku; sieje si&#281; wiele a zbiera ma&#322;o, bo serce, kt&#243;re o po&#380;ytku stanowi, nie bierze udzia&#322;u: poznawa&#263; prawd&#281;, nie jest-to j&#261; wykonywa&#263;. &#379;aden z ludzi nad szatana nie jest m&#281;drszy: on wie o wszystkiem, najskrytsze tajemnice nie s&#261; mu obce, prawdy wiary i w og&#243;le i ka&#380;d&#261; zosobna zna dok&#322;adnie; a pomimo to w z&#322;em trwa upornie. P a t r z,&nbsp;&nbsp;i l e&nbsp;&nbsp;p o z n a n i e&nbsp;&nbsp;p o m a g a&nbsp;&nbsp;d o&nbsp;&nbsp;&#347; w i &#281; t o &#347; c i! Zami&#322;owania do rzeczy Bo&#380;ych ani w szkole nie nabywamy, ani z ksi&#261;g nie czerpiemy, &#380;aden ze sposob&#243;w ludzkich nie nauczy nas tego. Jeden Duch &#346;wi&#281;ty jest serc kierownikiem, &#347;wi&#281;tych uczu&#263; mistrzem. O n&nbsp;&nbsp;w a s&nbsp;&nbsp;n a u c z y&nbsp;&nbsp;w s z y s t k i e g o <sup>1</sup>.',
                        'description3' => '1) &#346;. Jan 16, 13.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1102',
                        'name' => 'II Listopada',
                        'content' => 'O zachowaniu miary.',
                        'author' => '&#8222;Je&#347;li regu&#322;y i umiarkowania nie ma, dobre w z&#322;e przechodzi, a cnota w wyst&#281;pek.&#8221;',
                        'description' => '(S. Ignat. in ann. Exerc.)',
                        'description2' => 'Nie ma rzeczy tak &#347;wi&#281;tej, kt&#243;raby przez z&#322;e u&#380;ycie nie sta&#322;a si&#281; nadu&#380;yciem. Wszystkie stworzenia wed&#322;ug my&#347;li Stw&#243;rcy dobre s&#261;; widzia&#322; B&#243;g wszystkie rzeczy, kt&#243;re uczyni&#322;, i by&#322;y bardzo dobre <sup>1</sup>: u&#380;ycie jednak nasze, ile&#380; razy! z&#322;emi je czyni. Z&#322;ym w dzia&#322;aniu doradzc&#261; jest natury pop&#281;d, gorszym zastarza&#322;y zwyczaj, najgorszym naszej duszy nieprzyjaciel, szatan: kto pod wp&#322;ywem tych doradzc&#243;w dzia&#322;a, temu nawet lekarstwa zamieniaj&#261; si&#281; w trucizn&#281;. Bogu nietylko nie mi&#322;em, ale owszem wstr&#281;tnem jest to wszystko, co z pop&#281;du lub nami&#281;tno&#347;ci pochodzi; chce &#380;eby&#347;my si&#281; we wszystkiem kierowali rozs&#261;dkiem, &#380;eby&#347;my o ka&#380;dej rzeczy wyrokowali po dobrym namy&#347;le. O&nbsp;&nbsp;t y l e&nbsp;&nbsp;c z &#322; o w i e k&nbsp;&nbsp;n i e&nbsp;&nbsp;j e s t&nbsp;&nbsp;z w i e rz &#281; c i e m,&nbsp;&nbsp;o&nbsp;&nbsp;i l e&nbsp;&nbsp;r z &#261; d z i&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;r o z u m e m. Bez regu&#322;y nic si&#281; dobrze zrobi&#263; nie mo&#380;e, nale&#380;y j&#261; stosowa&#263; do wszystkich czynno&#347;ci naszych; o ile te od niej odst&#281;puj&#261;, o tyle na warto&#347;ci trac&#261;. Budowle nie prawid&#322;owo stawiane, wkr&#243;tce si&#281; rozpadaj&#261;, zamiast pi&#281;knego gmachu, niekszta&#322;tn&#261; mas&#281; gruz&#243;w przedstawiaj&#261;.',
                        'description3' => '1) Genesis 1, 31.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1103',
                        'name' => 'III Listopada',
                        'content' => 'O nieskracaniu modlitwy.',
                        'author' => '&#8222;Bardzo cz&#281;sto z&#322;y duch sprawia, &#380;e czas na rozmy&#347;lanie lub modlitw&#281; przeznaczony skracamy.&#8221;',
                        'description' => '(S. Ignat. in ann. Exerc.)',
                        'description2' => 'Czego si&#281; najbardziej l&#281;ka piek&#322;o, na to si&#281; najbardziej sro&#380;y; poniewa&#380; do&#347;wiadczenie nauczy&#322;o, &#380;e wszelka przeciw niemu bro&#324; najlepiej si&#281; ostrzy w modlitwie, przeto wszystkich spr&#281;&#380;yn u&#380;ywa, a&#380;eby j&#261; przynajmniej skr&#243;ci&#263;, je&#347;li zupe&#322;nie znie&#347;&#263; nie mo&#380;e. Ofiary obci&#281;te Bogu si&#281; nie podobaj&#261;. Nie nale&#380;y tego wykrada&#263; co jest dla Boga, ani zabiera&#263; co&#347; z o&#322;tarza. O chwilach sobie nale&#380;nych B&#243;g wie dobrze, gdy kt&#243;rej jemu nie po&#347;wi&#281;cimy; bezkarnie nam nie pu&#347;ci. Powodzenie spraw od Boga zale&#380;y, bez jego pomocy wysi&#322;ki nasze daremne. Je&#347;li po&#347;wi&#281;cisz na inne zaj&#281;cia czas, kt&#243;ry by&#322; przeznaczony na modlitw&#281;, jakiego&#380; po&#380;ytku spodziewa&#263; si&#281; mo&#380;esz? B&#243;g nie wesprze dzia&#322;aj&#261;cego przeciw sobie. W s z y s t k o&nbsp;&nbsp;m a&nbsp;&nbsp;s w &#243; j&nbsp;&nbsp;c z a s <sup>1</sup>. Wiele na tem zale&#380;y, w jakim czasie ogrodnik sieje, w jakim drzewa podcina, nie ka&#380;dy czas na t&#281; czynno&#347;&#263; jest odpowiedni; pracowa&#263;, gdy nale&#380;a&#322;o si&#281; modli&#263;, nie znaczy to korzysta&#263;. W pewnych chwilach B&#243;g &#322;aski daje, do pewnych chwil je przywi&#261;za&#322;; nie powr&#243;c&#261;, gdy o tych chwilach zapomnimy, gdy si&#281; wzgl&#281;dem tych chwil opieszale zachowamy, gdy im nasz&#261; wol&#261; nie odpowiemy!',
                        'description3' => '1) Ekkl. 3, 1.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1104',
                        'name' => 'IV Listopada',
                        'content' => 'O rozstaniu si&#281; z krewnymi i przyjaci&#243;&#322;mi.',
                        'author' => '&#8222;Tem wi&#281;kszy ka&#380;dy w &#380;yciu duchownem post&#281;p uczyni, im si&#281; bardziej od przyjaci&#243;&#322;, znajomych odsunie, i od wszelkiej o rzeczy ziemskie troski.&#8221;',
                        'description' => '(S. Ignat. in ann. Excerc.)',
                        'description2' => 'Nie ma w&#281;z&#322;a silniejszego nad krew, wszelki inny &#322;atwiej rozwi&#261;&#380;esz; ten tak kr&#281;puje, &#380;e prawie nic nad ziemi&#281; wzleci&#263; nie pozwala. Je&#347;li ca&#322;kiem cnoty nie zabrania, to jej przeszkadza; je&#347;li nie gasi zapa&#322;u, to go zmniejsza. Cia&#322;o i krew nie objawi&#261; tych rzeczy, kt&#243;re s&#261; Jezusa Chrystusa <sup>1</sup>; nieprzyjacio&#322;mi cz&#322;owieka domownicy jego; skrytymi wrogami s&#261; ci, kt&#243;rych rady maj&#261; na wzgl&#281;dzie siebie, nie Boga: przy wyborze lub dzia&#322;aniu, najgorsi to doradzcy. Chrystus rozpoczynaj&#261;c spraw&#281; ludzkiego okupu rozsta&#322; si&#281; z matk&#261; tak &#347;wi&#281;t&#261; i tak drog&#261;; a ty na &#322;onie matki chcesz by&#263; Prorokiem lub Aposto&#322;em? N a t u r y - t o&nbsp;&nbsp;p o d s z e p t,&nbsp;&nbsp;n i e&nbsp;&nbsp;&#322; a s k i. B&#243;g chce, &#380;eby&#347;my go ca&#322;em sercem mi&#322;owali, je&#347;li je dzielimy, oczekiwaniu jego nie odpowiadamy. B o&nbsp;&nbsp;m n i e j&nbsp;&nbsp;B o g a&nbsp;&nbsp;m i &#322; u j e,&nbsp;&nbsp;k t o&nbsp;&nbsp;c o &#347;&nbsp;&nbsp;p o z a&nbsp;&nbsp;N i m&nbsp;&nbsp;m i &#322; u j e.',
                        'description3' => '1) &#346;. Mateusz 16, 17.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1105',
                        'name' => 'V Listopada',
                        'content' => 'O pos&#322;usze&#324;stwie.',
                        'author' => '&#8222;Gdy idzie o prze&#322;o&#380;onego, nie nale&#380;y zwraca&#263; uwagi na to, czy on jest najwi&#281;kszy, &#347;redni, czy najmniejszy; bo takie rozr&#243;&#380;nienie &#378;le wp&#322;ywa na pos&#322;usze&#324;stwo, os&#322;abia je.&#8221;',
                        'description' => '(S. Ignatius in Testam.)',
                        'description2' => 'Jedno oko powinno mie&#263; pos&#322;usze&#324;stwo, zawsze si&#281; niem ku Bogu zwraca&#263;, na inne rzeczy nie patrze&#263;. Je&#347;li si&#281; to oko od Boga ku innym rzeczom zwr&#243;ci, ju&#380; nie ma pos&#322;usze&#324;stwa, ani cnoty; ale tylko schlebianie lub polityka. Pose&#322;, kt&#243;ry ci Pa&#324;skie rozkazy przynosi, ma&#322;y jest czy wielki, nic na tem nie zale&#380;y; bo nie na niego, ale na rozkazy, kt&#243;re on ci oznajmi&#322;, masz zwraca&#263; sw&#261; uwag&#281;. J a k i e m u&nbsp;&nbsp;P a n u&nbsp;&nbsp;s &#322; u &#380; y s z? Ka&#380;dy prze&#322;o&#380;ony jest jak podw&#322;adny, ani lepszy ani gorszy od niego nie jest, obaj zar&#243;wno dobrzy i zar&#243;wno drodzy; bo podw&#322;adny nikomu, tylko Bogu, zawsze i we wszystkiem podlega, innych jako pos&#322;&#243;w uwa&#380;a, kt&#243;rzy przynosz&#261; mu rozkazy Najwy&#380;szego Kr&#243;la. Prze&#322;o&#380;ony Boskiej woli jest t&#322;umaczem, gdy go s&#322;uchamy, jeste&#347;my godni nagrody, gdy nie s&#322;uchamy, zas&#322;ugujemy na kar&#281;; reszta nie idzie w rachub&#281;, nie powinna zajmowa&#263; podw&#322;adnego, nie powinna go do siebie poci&#261;ga&#263; lub od siebie odstr&#281;cza&#263; &#8212; m a&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;w z g l &#281; d e m&nbsp;&nbsp;n i e j&nbsp;&nbsp;z a c h o w a &#263;&nbsp;&nbsp;o b o j &#281; t n i e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1106',
                        'name' => 'VI Listopada',
                        'content' => 'O zbli&#380;eniu si&#281; do Boga.',
                        'author' => '&#8222;Im si&#281; kto bardziej zbli&#380;a do Boga, tem si&#281; lepiej uspasabia na przyj&#281;cie dar&#243;w Boskiej dobroci.&#8221;',
                        'description' => '(S. Ignat. in ann. Exercit.)',
                        'description2' => 'Kto bli&#380;ej &#347;wiat&#322;a, temu ja&#347;niej; kto bli&#380;ej ognia, temu cieplej: podobnie, kto si&#281; &#347;ci&#347;lej &#322;&#261;czy z niesko&#324;czon&#261; &#347;wi&#281;to&#347;ci&#261;, temu si&#281; wi&#281;cej dostaje &#347;wi&#281;to&#347;ci. Jak stworzenie tak Stw&#243;rca odpowiednio do naszego zachowania si&#281; dzia&#322;a. Ten tylko do Boga si&#281; zbli&#380;a, kto si&#281; od ziemi oddala; ktoby chcia&#322; do ziemi i do Boga lgn&#261;&#263;, tego wysi&#322;ki daremne. Jednem trzeba si&#281; zadawalnia&#263;. G d y&nbsp;&nbsp;w z g a r d z i s z&nbsp;&nbsp;p o c i e c h a m i&nbsp;&nbsp;z i e m s k i e m i,&nbsp;&nbsp;o t r z y m a s z&nbsp;&nbsp;n i e b i e s k i e. Nie napr&#243;&#380;no si&#281; nam Chrystus odda&#322;, &#380;&#261;da i od nas ofiary; cz&#322;owiekiem si&#281; sta&#322;, aby si&#281; cz&#322;owiek z przywi&#261;zania do wszystkiego wyzu&#322;; uprzedzi&#322;, aby&#347;my w jego &#347;lady wst&#281;powali; i to jest jedyna droga, kt&#243;ra prowadzi do cnoty. I do ciebie m&#243;wi: przyjd&#378; i p&#243;jd&#378; za mn&#261; <sup>1</sup>. Stro&#324; od mistrz&#243;w &#322;echc&#261;cych uszy, ten s&#322;owa &#380;ywota wiecznego ma; je&#347;li za jego nauk&#261; p&#243;jdziemy, wiedz&#281; wszystkich ludzi i &#347;wi&#281;tych posi&#261;dziemy. P r z y b l i &#380; c i e&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;d o&nbsp;&nbsp;N i e g o,&nbsp;&nbsp;a&nbsp;&nbsp;o &#347; w i e c i&nbsp;&nbsp;w a s.',
                        'description3' => '1) &#346;. Mateusz 9, 9.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1107',
                        'name' => 'VII Listopada',
                        'content' => 'O t&#322;umaczeniu zdania drugich na dobre.',
                        'author' => '&#8222;Ka&#380;dy chrze&#347;cianin, przyciemne nieco zdanie drugiego, winien raczej na dobr&#261;, ni&#380; na z&#322;&#261; stron&#281; t&#322;umaczy&#263;.&#8221;',
                        'description' => '(S. Ignat. in Exerc.)',
                        'description2' => 'Wszystko, coby pszcz&#243;&#322;ka w mi&#243;d obr&#243;ci&#322;a, paj&#261;k zamienia w trucizn&#281;, nie z winy rzeczy, ale z winy swej natury: gdy &#380;o&#322;&#261;dek nie trawi, gdy to co spo&#380;ywasz, w &#380;&#243;&#322;&#263; si&#281; obraca, znak-to niew&#261;tpliwy, &#380;e&#347; chory. Je&#347;li mo&#380;na rozgrzeszy&#263; tego, kt&#243;rego przed tw&#243;j trybuna&#322; powo&#322;ujesz, czemu&#380; go winnym nazywasz? &#8212; niesprawiedliwo&#347;&#263;-to, owszem tyrania jest. Je&#347;li wyst&#281;pek nie jest widoczny, nikogo nie nale&#380;y pot&#281;pia&#263;. Gdy nie jeste&#347; pewny, gdy w&#261;tpisz, to rozgrzesz, niewinnym uznaj. Jak dla twoich m&#243;w i czyn&#243;w chcia&#322;by&#347; mie&#263; &#322;askawych t&#322;umacz&#243;w, dla twoich my&#347;li wyrozumia&#322;ych s&#281;dzi&#243;w; tak b&#261;d&#378; &#322;askawym i wyrozumia&#322;ym dla drugich, aby&#347; w odwecie nie dosta&#322; zanadto surowych. J a k &#261;&nbsp;&nbsp;m  i a r&#261;&nbsp;&nbsp;m i e r z y s z,&nbsp;&nbsp;t a k &#261;&nbsp;&nbsp;c i&nbsp;&nbsp;o d m i e r z &#261; <sup>1</sup>. Nawet to, co si&#281; z&#322;em wydaje, nale&#380;y wymawia&#263;; gdy&#380; oko cz&#281;sto zawodzi, ucho cz&#281;&#347;ciej, a podejrzliwo&#347;&#263; najcz&#281;&#347;ciej. Nie ma nic nad ni&#261; zjadliwszego, w jednej chwili z muchy mo&#380;e zrobi&#263; s&#322;onia.',
                        'description3' => '1) &#346;. Mateusz 7, 2.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1108',
                        'name' => 'VIII Listopada',
                        'content' => 'O niewyjawianiu wad cudzych.',
                        'author' => '&#8222;Ile razy cudz&#261; wad&#281; wyjawiamy, tyle razy wad&#281; nasz&#261; w&#322;asn&#261; pokazujemy.&#8221;',
                        'description' => '(S. Ignat. in Exam.)',
                        'description2' => 'Jak wstr&#281;t budz&#261; ci, kt&#243;rych cia&#322;o ranami jest okryte, a w ranach robaki si&#281; znajduj&#261;; tak wstr&#281;tem przejmowa&#263; powinni ci, kt&#243;rzy si&#281; w wykrywaniu cudzych wad lubuj&#261;: r a n a m i&nbsp;&nbsp;b o w i e m&nbsp;&nbsp;d u s z y&nbsp;&nbsp;s &#261;&nbsp;&nbsp;w a d y. Niebo, ziemia i ca&#322;e stworzenie, jak&#380;e ci obfitej do m&#243;wienia dostarczaj&#261; materyi! Czemu si&#281; w niej nie lubujesz? czemu przeciwnie, wtedy jeste&#347; najwymowniejszy, gdy cudze obyczaje roztrz&#261;sasz? Os&#322;ania&#263; raczej nale&#380;y, ni&#380; wyjawia&#263; brudy; kto si&#281; ich dotyka i sam si&#281; brudzi. Dokucza wo&#324;, gdy poruszaj&#261; ust&#281;py. Na c&#243;&#380; si&#281; przyda dawn&#261; odnawia&#263; blizn&#281;, chyba &#380;e dla sprawienia nowego b&#243;lu bratu? Nietylko m&#243;wienie, ale i s&#322;uchanie o cudzych wadach jest wyst&#281;pnem; bo gdyby nie by&#322;o ch&#281;tnych s&#322;uchacz&#243;w, mniejby by&#322;o i tych, co je rozpowiadaj&#261;. O s &#322; o &#324;&nbsp;&nbsp;u s z y&nbsp;&nbsp;t w o j e&nbsp;&nbsp;c i e r n i e m.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1109',
                        'name' => 'IX Listopada',
                        'content' => 'O poprawie b&#322;&#281;du.',
                        'author' => '&#8222;Je&#347;li kto wybra&#322; co nieprzezornie, i je&#347;li tego nie mo&#380;na odmieni&#263;, winien, jak tylko sw&#243;j b&#322;&#261;d spostrze&#380;e, nagradza&#263; to poczciwo&#347;ci&#261; &#380;ycia i dobremi czynami.&#8221;',
                        'description' => '(S. Ignat. de regul. elect.)',
                        'description2' => 'Ach! ile&#380; razy &#380;a&#322;uj&#261; ludzie swego post&#281;pku, ale ci, kt&#243;rzy nie zastanowiwszy si&#281; poszli jedynie za &#347;lepym pop&#281;dem. Zabiera&#263; si&#281; do rzeczy wielkich bez rozwagi, to tyle znaczy jakby z zamkni&#281;temi oczyma rzuci&#263; si&#281; w przepa&#347;&#263;. Je&#347;li nie mo&#380;esz zmieni&#263; tego, co&#347; wybra&#322;, mo&#380;esz poprawi&#263;. P&#243;jd&#378; do g&#322;owy po rozum, sta&#324; si&#281; z konieczno&#347;ci cnotliwym, i poprzedni&#261; nieroztropno&#347;&#263; z&#322;agod&#378; obecnem wzi&#281;ciem rzeczy na uwag&#281;. Je&#347;li tego, co&#347; zrobi&#322;, nie mo&#380;na odrobi&#263;, to przynajmniej nadal tak nie r&#243;b. Nawet w rzeczach &#378;le wybranych jest jeszcze miejsce na pociech&#281;, Bozka Opatrzno&#347;&#263; tak zrz&#261;dzi&#322;a, aby&#347;my si&#281; z jednego b&#322;&#281;du uczyli unika&#263; innych. Drogo w ten spos&#243;b, ale nie bez pewnego zysku nabywa si&#281; roztropno&#347;&#263;. Nawet z&#322;y wyb&#243;r, je&#347;li go zr&#281;cznie u&#380;y&#263; umiemy, dobre owoce wyda. Przykro&#347;ci, mozo&#322;y, je&#347;li s&#261; nieuniknione, niech id&#261; na zadosy&#263; uczynienie za zbrodnie, na popraw&#281; obyczaj&#243;w, na pomno&#380;enie zas&#322;ugi. T a k&nbsp;&nbsp;z&nbsp;&nbsp;c i e r n i&nbsp;&nbsp;c i e r p l i w o &#347; &#263;&nbsp;&nbsp;p o z b i e r a&nbsp;&nbsp;r &#243; &#380; e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1110',
                        'name' => 'X Listopada',
                        'content' => 'O budowaniu drugich.',
                        'author' => '&#8222;Skromno&#347;&#263;, za samem na ni&#261; wejrzeniem, niech ka&#380;demu b&#281;dzie pobudk&#261; do dobrego.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden.)',
                        'description2' => 'Jak na s&#322;o&#324;ce, tak na cz&#322;owieka cnotliwego oczy wielu si&#281; zwracaj&#261;, ukry&#263; si&#281; nie mo&#380;e, chocia&#380;by chcia&#322;; nawet za zas&#322;on&#261;; jak na s&#322;o&#324;ce za chmur&#261;, tak na niego zwa&#380;aj&#261;. A wi&#281;c, niech tak post&#281;puje, aby by&#322; dla patrz&#261;cych zbudowaniem. M&#243;wcy niemi lepsi s&#261; od w&#322;adaj&#261;cych mow&#261;, ci ustami, tamci r&#281;k&#261; przemawiaj&#261;, dlatego &#322;atwiej do na&#347;ladowania sk&#322;aniaj&#261;; kto jest blizko ognia, temu jasno i ciep&#322;o; kto przystaje z dobrym, ten si&#281; niech staje lepszym. Chrystusa dobr&#261; woni&#261; b&#261;d&#378;; kto na ciebie patrzy, niech si&#281; cnoty od ciebie uczy. Tak dawa&#263;, to znaczy nic nie traci&#263;; drugiego bogacisz, a sam nie ubo&#380;ejesz. Ty nic nie dajesz, a on wiele otrzymuje. S a m e m&nbsp;&nbsp;p a t r z e n i e m&nbsp;&nbsp;n a&nbsp;&nbsp;s k a r b&nbsp;&nbsp;s t a j e&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;b o g a t y m. Bazyliszek nawet wzrokiem trucizn&#281; ws&#261;cza; ty wzrokiem ws&#261;czaj nauk&#281;; milczeniem poskramiaj gadatliwo&#347;&#263;, powag&#261; &#8212; lekko&#347;&#263;, skromno&#347;ci&#261; &#8212; rozwi&#261;z&#322;o&#347;&#263;, &#322;agodno&#347;ci&#261; &#8212; gniewliwo&#347;&#263;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1111',
                        'name' => 'XI Listopada',
                        'content' => 'O wyborze.',
                        'author' => '&#8222;Czyni&#261;cy wyb&#243;r, winien si&#281; bada&#263;, czy przywi&#261;zanie, jakie ma do tej lub owej rzeczy, jedynie ze wzgl&#281;du na Boga i z mi&#322;o&#347;ci Boga wyp&#322;ywa.&#8221;',
                        'description' => '(S. Ignat. in regul. elect.)',
                        'description2' => 'To g&#322;&#243;wnie miej na uwadze, oto si&#281; troszcz, aby&#347; dobrze i dobre rzeczy wybiera&#322;. B&#322;&#261;d wyboru nigdy nie jest sam jeden, ci&#261;gnie za sob&#261; wiele innych; teraz zwa&#380;aj na &#378;r&#243;d&#322;o b&#322;&#281;d&#243;w; potem b&#281;dzie zap&#243;&#378;no, nie zdo&#322;asz go zatamowa&#263;. Trudn&#261; rzecz&#261; jest wyb&#243;r, wiele nale&#380;y rozwa&#380;a&#263;, wi&#281;cej przewidywa&#263;, a najwi&#281;cej si&#281; l&#281;ka&#263;, w tych zw&#322;aszcza wypadkach, w kt&#243;rych wyb&#243;r, jaki czynimy, znosi wolno&#347;&#263;; w kt&#243;rych trudno&#347;ci, jakie napotkamy, nie mo&#380;na zmieni&#263;, chyba ze &#347;mierci&#261;. Z&#322;ym doradzc&#261; wyboru jest przywi&#261;zanie, je&#347;li je z mi&#322;o&#347;ci&#261; w&#322;asn&#261; powo&#322;amy do rady, &#347;lepy &#347;lepego poprowadzi i obadwa w d&#243;&#322; wpadn&#261; <sup>1</sup>, z kt&#243;rego nie tak &#322;atwo, a mo&#380;e i wcale wydoby&#263; si&#281; nie b&#281;d&#261; mogli. Opieranie si&#281; na sobie samym jest za s&#322;abe; powody, na kt&#243;rych si&#281; opiera tw&#243;j wyb&#243;r, niech b&#281;d&#261; silne i wieczne, na takich tylko bezpiecznie si&#281; stoi, inne si&#281; usuwaj&#261; za lada wiatrem. B o &#380; a&nbsp;&nbsp;w o l a&nbsp;&nbsp;n i e c h&nbsp;&nbsp;b &#281; d z i e&nbsp;&nbsp;d l a&nbsp;&nbsp;c i e b i e&nbsp;&nbsp;g r u n t e m ,&nbsp;&nbsp;n a&nbsp;&nbsp;k t &#243; r y m&nbsp;&nbsp;f u n d a m e n t&nbsp;&nbsp;p o &#322; &#243; &#380;&nbsp;&nbsp;i&nbsp;&nbsp;b u d o w a &#263;&nbsp;&nbsp;z a c z n i j.',
                        'description3' => '1) &#346;. Mateusz 15, 14.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1112',
                        'name' => 'XII Listopada',
                        'content' => 'O postanowieniach.',
                        'author' => '&#8222;Jest-to w&#322;asno&#347;&#263; Boga i ka&#380;dego dobrego Anio&#322;a wlewa&#263; w dusz&#281; prawdziw&#261; rado&#347;&#263; duchow&#261;.&#8221;',
                        'description' => '(S. Ignat. reg. discret.)',
                        'description2' => 'W m&#281;tnej wodzie lubi szatan ryby &#322;owi&#263;; my&#347;l zaciemnia, wol&#281; ubezw&#322;adnia, do melancholii przywodzi cz&#322;owieka, aby tak udr&#281;czonego sk&#322;oni&#322; do gonienia za temi uciechami, kt&#243;re si&#281; Bogu nie podobaj&#261; i ducha gasz&#261;. Umys&#322; zm&#261;cony nie jest zdatny do wype&#322;nienia swojego obowi&#261;zku i nikt si&#281; tak nie b&#322;&#261;ka, jak ten, kt&#243;ry zostaje w ciemno&#347;ci. Gdy smutek tw&#243;j umys&#322; nawiedzi, nie czy&#324; &#380;adnego postanowienia, czekaj pogody, aby&#347; rzecz lepiej rozr&#243;&#380;ni&#322;. Pok&#243;j ducha i pok&#243;j my&#347;li jest wskaz&#243;wk&#261;, &#380;e &#322;aska Bo&#380;a w nas przebywa, jest pewnym przedsmakiem nieba; jak nawzajem zamieszanie, niespokojno&#347;&#263; jest cech&#261; przewrotnego ducha, pewnem uobecnieniem piek&#322;a. Niewolnicy szatana maj&#261; czego si&#281; smuci&#263;, dla syn&#243;w Bo&#380;ych przyczyny do tego smutku nie ma. P o w i e d z c i e&nbsp;&nbsp;s p r a w i e d l i w e m u,&nbsp;&nbsp;&#380; e&nbsp;&nbsp;d o b r z e <sup>1</sup>. &#377;r&#243;d&#322;em rado&#347;ci i smutku jest jedno i to&#380; samo sumienie w&#322;asne: r a d o &#347; c i&nbsp;&nbsp;&#8212;&nbsp;&nbsp;d o b r e,&nbsp;&nbsp;s m u t k u&nbsp;&nbsp;&#8212;&nbsp;&nbsp;z &#322; e.',
                        'description3' => '1) Izajasz 3, 10.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1113',
                        'name' => 'XIII Listopada',
                        'content' => 'O skrupu&#322;ach.',
                        'author' => '&#8222;Skrupu&#322; przez pewien czas, zw&#322;aszcza gdy&#347;my si&#281; niedawno zabrali do lepszego &#380;ycia, niema&#322;&#261; jest pomoc&#261; dla duszy, po&#347;wi&#281;caj&#261;cej si&#281; sprawom duchownym.&#8221;',
                        'description' => '(S. Ignat. de scrup.)',
                        'description2' => 'Kto nigdy nie w&#261;tpi, nigdy do prawdziwego rzeczy poznania nie przychodzi; podobnie, kto w rzeczach duszy dotycz&#261;cych zachowuje si&#281; ozi&#281;ble, nigdy sam siebie dobrze nie pozna. Delikatne sumienie jest na kszta&#322;t oka; poczuje najl&#380;ejszy w&#322;os, najdrobniejszy py&#322;ek, i dop&#243;ty si&#281; niepokoi, dop&#243;ki nie usunie tej nalecia&#322;o&#347;ci; rzecz inna z sumieniem twardem, niewyrobionem: t o&nbsp;&nbsp;n a w e t&nbsp;&nbsp;b e l k i&nbsp;&nbsp;n i e&nbsp;&nbsp;o d c z u w a <sup>1</sup>. &#377;le jest bardzo ze zdrowiem, gdy pomimo choroby &#380;adnego b&#243;lu nie czujemy; chorzy, kt&#243;rym si&#281; wydaje, &#380;e s&#261; zdrowi, &#380;e maj&#261; si&#281; dobrze, nale&#380;&#261; do najniebezpieczniejszych. O b y&nbsp;&nbsp;d u s z e&nbsp;&nbsp;w i e l u&nbsp;&nbsp;w&nbsp;&nbsp;p o d o b n y&nbsp;&nbsp;l e t a r g&nbsp;&nbsp;n i e&nbsp;&nbsp;w p a d a &#322; y! Jak&#380;e pilnie rzeczy doczesnych prowadz&#261; si&#281; rachunki! jak dok&#322;adnie por&#243;wnywaj&#261; si&#281; zyski i szkody; wszystko poma&#322;u, z rozwag&#261; si&#281; rozbiera, dok&#322;adnie ocenia, i albo zadowolenie albo smutek wywo&#322;uje, stosownie do tego, czy pomy&#347;lnie czy niepomy&#347;lnie posz&#322;o. S a m a&nbsp;&nbsp;t y l k o&nbsp;&nbsp;d u s z a&nbsp;&nbsp;w&nbsp;&nbsp;w i e l k i e m&nbsp;&nbsp;j e s t&nbsp;&nbsp;z a n i e d b a n i u;&nbsp;&nbsp;a n i&nbsp;&nbsp;c z a s u,&nbsp;&nbsp;a n i&nbsp;&nbsp;o c h o t y&nbsp;&nbsp;n i e&nbsp;&nbsp;m a m y,&nbsp;&nbsp;a b y &#347; m y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n i &#261;&nbsp;&nbsp;z a j &#281; l i.',
                        'description3' => '1) &#346;. Mateusz 7, 3.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1114',
                        'name' => 'XIV Listopada',
                        'content' => 'O zwierzchno&#347;ci.',
                        'author' => '&#8222;Jak jest rzecz&#261; niedobr&#261; publicznie w obec ludu wytyka&#263; wady zwierzchno&#347;ci, tak z drugiej strony jest obowi&#261;zkiem upomina&#263; prywatnie tych, kt&#243;rzy z&#322;emu zaradzi&#263; mog&#261;, je&#347;li zechc&#261;.&#8221;',
                        'description' => '(S. Ignat. ad sentien. cum Eccl.)',
                        'description2' => 'Lud w og&#243;le sam przez si&#281; ku z&#322;emu si&#281; przechyla i na zwierzchno&#347;&#263; nie bardzo ch&#281;tnem okiem patrzy: nie podsycaj ognia sw&#261; mow&#261;, je&#347;li niechcesz, aby zt&#261;d wielki wybuch&#322; po&#380;ar. Kto wy&#380;ej stoi, ten dalej widzi, gdyby&#347; ty by&#322; w po&#322;o&#380;eniu podobnem, pewnieby&#347; inaczej s&#261;dzi&#322;. Tobie si&#281; dosta&#322;a chwa&#322;a s&#322;uchania, nie s&#261;dzenia. O wymierzaniu kary publicznie nie my&#347;l, bo w&#322;adzy do tego nie masz. Publiczne wielkich dra&#378;nienie nikomu nie przynosi po&#380;ytku: nie przynosi zwierzchno&#347;ci, gdy&#380; ta s&#322;usznie si&#281; na to oburza; nie przynosi ludowi, gdy&#380; ten do zwierzchno&#347;ci, kt&#243;r&#261; powinien mi&#322;owa&#263;, wstr&#281;tu nabiera; nie przynosi dra&#378;ni&#261;cemu, gdy&#380; ten w pogard&#281; idzie. W s z e l k a&nbsp;&nbsp;w &#322; a d z a&nbsp;&nbsp;j e s t&nbsp;&nbsp;o d&nbsp;&nbsp;P a n a,&nbsp;&nbsp;k t o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;j e j&nbsp;&nbsp;s p r z e c i w i a,&nbsp;&nbsp;P a n u&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;s p r z e ci w i a <sup>1</sup>. Dla wyprobowania naszej wiary, B&#243;g chcia&#322;, aby ludzie nami rz&#261;dzili, aby&#347;my podobnie jak poza chmurami s&#322;o&#324;ce, tak poza b&#322;&#281;dami, a raczej pomimo b&#322;&#281;d&#243;w, we w&#322;adzy uznali Boga.',
                        'description3' => '1) Rzym. 13, l.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1115',
                        'name' => 'XV Listopada',
                        'content' => 'O uleg&#322;o&#347;ci Ko&#347;cio&#322;owi.',
                        'author' => '&#8222;Z ko&#347;cio&#322;em katolickim tak powinni&#347;my trzyma&#263;, aby nawet to, co si&#281; nam wydaje bia&#322;em, uznali&#347;my za czarne, je&#347;li ko&#347;ci&#243;&#322; zawyrokuje, &#380;e jest czarne.&#8221;',
                        'description' => '(S. Ignat. ad sentien. cum Eccl.)',
                        'description2' => 'Rozum winien ulega&#263; wierze; tajemnic on nie zg&#322;&#281;bi, bo gdyby zg&#322;&#281;bi&#322;, nie by&#322;aby to ju&#380; wiara, ale wiedza. Za g&#322;&#281;bokie to morze, aby&#347; si&#281; o w&#322;asnych si&#322;ach sam na nie puszcza&#322;, chyba &#380;e zgin&#261;&#263; gwa&#322;tem pragniesz. Jedynie &#322;&#243;d&#378; Piotrowa od zatoni&#281;cia ci&#281; ochrania; na tyle nawa&#322;no&#347;ci si&#281; wystawiasz, ilu obcym opiniom ho&#322;dujesz, miej si&#281; na baczno&#347;ci i trzymaj tej opoki, p r z e c i w&nbsp;&nbsp;k t &#243; r e j&nbsp;&nbsp;b r a m y&nbsp;&nbsp;p i e k i e l n e&nbsp;&nbsp;n i e&nbsp;&nbsp;p r z e m o g &#261; <sup>1</sup>. M&#261;dro&#347;&#263; i ludzkie rozumowanie zawodz&#261;; kto si&#281; na nich opiera, sow&#261; jest, w&#347;r&#243;d bia&#322;ego dnia utyka. Ja&#347;niej w allegoryi, ni&#380; przy s&#322;abej w&#322;asnego rozumu pochodni, ukazuj&#261; si&#281; wiary tajemnice. Wiara jest darem i &#347;wiat&#322;em Boga; nie natury, nie wiedzy, nie ludzi. Kto za tem &#347;wiat&#322;em nie post&#281;puje, ten przy s&#322;abem &#347;wiate&#322;ku w&#322;asnem w b&#322;&#281;dy si&#281; pogr&#261;&#380;a.',
                        'description3' => '1) &#346;. Mateusz 16, 18.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1116',
                        'name' => 'XVI Listopada',
                        'content' => 'O poznaniu dok&#322;adnem.',
                        'author' => '&#8222;Im dok&#322;adniej prze&#322;o&#380;eni swych podw&#322;adnych usposobienie poznaj&#261;, tem lepiej im pomaga&#263; b&#281;d&#261; mogli.&#8221;',
                        'description' => '(S. Ignat. in Exam.)',
                        'description2' => 'Niezg&#322;&#281;bionem jest serce ludzkie, narz&#281;dzia, kt&#243;remby&#347; je zbada&#322;, nie ma, zawsze tajemnicze, dop&#243;ki samo si&#281; nie otworzy: pod tak szczeg&#243;lnym zamkiem zostaje, &#380;e przyst&#281;p do niego ten tylko znajdzie, komu ono samo dozwoli. Mo&#380;na cz&#322;owieka pomimo jego woli zmusi&#263; do pracy, skaza&#263; na m&#281;ki, na &#347;mier&#263;; ale nie mo&#380;na go &#380;adn&#261; si&#322;&#261;, ani &#380;adn&#261; maszyn&#261;, bez jego woli, zmusi&#263; do wydania tajemnic serca. Bez poznania za&#347; cz&#322;owieka wewn&#281;trznie, bez zbadania jego duszy, wszelki trud nad nim tak ma&#322;o przynosi korzy&#347;ci; jak ma&#322;o lekarz zaradza chorobie, kt&#243;rej nie zna. Zewn&#281;trzne znaki zawodz&#261;, ju&#380;-to dlatego &#380;e si&#281; w nie przystraja nieraz ob&#322;uda; ju&#380; dlatego, &#380;e jak suknia teatralna, bywaj&#261; tylko na pewien czas przybierane; ju&#380; dlatego &#380;e nawet ten sam znak mo&#380;e by&#263; wyrazem r&#243;&#380;nych usposobie&#324;. T a k&nbsp;&nbsp;p a r a&nbsp;&nbsp;o z n a c z a&nbsp;&nbsp;o g i e &#324;&nbsp;&nbsp;i&nbsp;&nbsp;w o d &#281;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1117',
                        'name' => 'XVII Listopada',
                        'content' => 'O uprzejmo&#347;ci.',
                        'author' => '&#8222;W stosunkach z lud&#378;mi uprzejmo&#347;&#263; jest nader po&#380;&#261;dana.&#8221;',
                        'description' => '(S. Ignatius p. 1 c. 2).',
                        'description2' => 'Jak kwiaty, gdy s&#322;o&#324;ce zab&#322;y&#347;nie, ch&#281;tnie si&#281; otwieraj&#261;, i kielichy, kt&#243;re z powodu pos&#281;pnej nocy by&#322;y postula&#322;y, rozszerzaj&#261;; tak i cz&#322;owiek za ujrzeniem twarzy pogodnej, za pos&#322;yszeniem g&#322;osu mi&#322;ego, serca swego nie &#347;cie&#347;nia, ale owszem je rozszerza i za uprzejmo&#347;&#263; uprzejmo&#347;ci&#261; p&#322;aci. Jest ludzkiego rodzaju nieprzyjacielem, kto si&#281; z ludzko&#347;ci wyzuwa; niczem innem tylko ni&#261; jednamy sobie wszystkich, nieco innego tylko ona jest og&#243;lnym kluczem do serc ludzkich; naprz&#243;d jak magnes wszystkich ku nam poci&#261;ga, potem do na&#347;ladowania zniewala. Wi&#281;cej kilkoma s&#322;owami zdzia&#322;a uprzejmy, ni&#380; inny sto razy nawet powt&#243;rzonemi wymys&#322;ami. Cynik nikomu nieprzepu&#347;ci, a&#380;eby go nie zadrasn&#261;&#322;, ale te&#380; i sam staje si&#281; przedmiotem og&#243;lnej nienawi&#347;ci u wszystkich. Wielkim natury darem jest uprzejmo&#347;&#263;, je&#347;li jej komu natura odm&#243;wi&#322;a, ten niech prac&#261; usi&#322;uje j&#261; w sobie wyrobi&#263;. Nieraz rzeczy sztuczne przewy&#380;sza&#322;y natur&#281;. U p r z e j m o &#347; &#263;&nbsp;&nbsp;w y r o b i o n a&nbsp;&nbsp;o&nbsp;&nbsp;t y l e&nbsp;&nbsp;j e s t&nbsp;&nbsp;w y &#380; s z &#261;&nbsp;&nbsp;o d&nbsp;&nbsp;n a t u r a l n e j,&nbsp;&nbsp;o&nbsp;&nbsp;i l e&nbsp;&nbsp;s z t u k a&nbsp;&nbsp;o d&nbsp;&nbsp;n a t u r y&nbsp;&nbsp;p e w n i e j s z &#261;&nbsp;&nbsp;j e s t&nbsp;&nbsp;m i s t r z y n i &#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1118',
                        'name' => 'XVIII Listopada',
                        'content' => 'O przyczynie niezg&#243;d.',
                        'author' => '&#8222;Do jedno&#347;ci wiele si&#281; przyczynia d&#243;br doczesnych, wzgarda; albowiem w ubieganiu si&#281; o nie, mi&#322;o&#347;&#263; w&#322;asna, &#243;w najzaci&#281;tszy wr&#243;g tej jedno&#347;ci, wiele b&#322;&#281;d&#243;w pope&#322;nia!&#8221;',
                        'description' => '(S. Ignat. p. 8 c. 1).',
                        'description2' => 'Wszystkie wojny, jakie by&#322;y dot&#261;d na &#347;wiecie, wywo&#322;a&#322;o owo s&#322;owo zawzi&#281;te: m o j e&nbsp;&nbsp;i&nbsp;&nbsp;t w o j e, s&#322;owo, kt&#243;rego cz&#281;sto inaczej roztrzygn&#261;&#263; nie mo&#380;na, tylko k&#322;&#243;tni&#261; albo wojn&#261;; gdzie si&#281; to s&#322;owo odezwie, tam ju&#380; po jedno&#347;ci, po zgodzie! R&#243;wnowagi spodziewa&#263; si&#281; nie mo&#380;na, dop&#243;ki jedn&#261; z szal ci&#281;&#380;ar ku ziemi ci&#261;gnie; nast&#281;puje ona dopiero wtenczas, gdy obiedwie szale s&#261; puste. Z jedno&#347;ci&#261;, zgod&#261;, ma si&#281; rzecz podobnie. &#321;atwo si&#281; zawi&#261;zuje i &#322;atwo utrzymuje, gdzie gonitwa za rzeczami doczesnemi usta&#322;a. Po&#380;ary, zar&#243;wno publicznych jak i prywatnych wojen, nie pierwiej ustan&#261;, a&#380; si&#281; drwa od ognia usun&#261;, to jest, za ziemskiemi rzeczami gonitwa; nie co bowiem innego, tylko ona materya&#322;u na te po&#380;ary dostarcza. Gdy si&#281; Chrystus narodzi&#322;, pok&#243;j w owem miejscu by&#322;; bo z&#322;o&#380;ony w &#380;&#322;&#243;bku Zbawca &#380;adnych dostatk&#243;w od &#347;wiata nie pragn&#261;&#322;. Ale skoro Herodowi M&#281;drcy napomkn&#281;li o tytule kr&#243;lewskim, wkrad&#322; si&#281; zaraz niepok&#243;j, rze&#378; niewini&#261;tek zak&#322;&#243;ci&#322;a cisz&#281;. T y l e&nbsp;&nbsp;i c h&nbsp;&nbsp;z g i n &#281; &#322; o!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1119',
                        'name' => 'XIX Listopada',
                        'content' => 'O pokrzepianiu si&#281; podczas pokusy.',
                        'author' => '&#8222;W czasie pokusy nale&#380;y si&#281; pokrzepia&#263; my&#347;l&#261; rych&#322;ej pociechy, bo w ten spos&#243;b powoli si&#281; pokonuj&#261; udr&#281;czenia ze smutku p&#322;yn&#261;ce.&#8221;',
                        'description' => '(S. Ignat. in Exercit.)',
                        'description2' => 'Nie jest-to tylko natury w&#322;asno&#347;ci&#261;, &#380;e po dniu nast&#281;puje noc, po rado&#347;ci smutek; ale i &#322;aski: g d y b y&nbsp;&nbsp;n i e&nbsp;&nbsp;b y &#322; o&nbsp;&nbsp;s &#322; o t y,&nbsp;&nbsp;n i e&nbsp;&nbsp;u m i e l i b y &#347; m y&nbsp;&nbsp;o c e n i &#263;&nbsp;&nbsp;p o g o d y. Utrapienia zsy&#322;a Pan B&#243;g, ju&#380;-to aby&#347;my si&#281; w znoszeniu i takiego losu zaprawili, ju&#380; aby&#347;my si&#281; podczas ustawicznego pokoju, zbytnio nie wynosili; ju&#380;, a to najpewniej, aby&#347;my si&#281; nauczyli, zk&#261;d pomocy oczekiwa&#263; i kogo o ni&#261; prosi&#263; mamy. Nawet pomimo ba&#322;wan&#243;w przyp&#322;ywa si&#281; do brzegu. Dusza mi&#322;uj&#261;ca Boga t&#281; ma pociech&#281;, &#380;e zar&#243;wno w smutku jak rado&#347;ci mo&#380;e lgn&#261;&#263; do Boga, &#322;&#261;czy&#263; si&#281; z Bogiem. I nic nie ma, coby si&#281; jej nie podoba&#263; mog&#322;o, je&#347;li wie, &#380;e to z r&#281;ki Ojca pochodzi. Ktoby utrapienia duszy chcia&#322; nagradza&#263; uciechami cia&#322;a, tenby tak samo post&#281;powa&#322; jak &#243;w, kt&#243;ryby cz&#322;onk&#243;w os&#322;abienie chcia&#322; leczy&#263; trucizn&#261;, chorob&#281; &#8212; &#347;mierci&#261;. Szatan w takich razach najwi&#281;cej korzysta, dusze, jak ryby w m&#281;tnej wodzie na sw&#261; w&#281;dk&#281; &#322;owi.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1120',
                        'name' => 'XX Listopada',
                        'content' => 'O zachowaniu si&#281; zwierzchnika.',
                        'author' => '&#8222;Prze&#322;o&#380;ony winien bardzo na to zwa&#380;a&#263;, aby przez mi&#322;o&#347;&#263; jak&#261; szczeg&#243;ln&#261;, nie szkodzi&#322; og&#243;lnej.&#8221;',
                        'description' => '(S. Ignat. p. 1 c. 3).',
                        'description2' => 'Zwierzchnik dla swoich jest osob&#261; niezmiernie wa&#380;n&#261;, na niego ogl&#261;daj&#261; si&#281; wszyscy, dop&#243;ki on dla ka&#380;dego jest z r&#243;wnem uczuciem, dop&#243;ki nie opuszcza &#347;rodka; je&#347;li si&#281; na prawo albo na lewo przechyli, zaraz ko&#322;o b&#322;&#281;dne tworzy, nie&#322;ad wprowadza. Wsp&#243;&#322;zawodnictwo, zazdro&#347;&#263;, niesnaski, nie tak podw&#322;adnych, jak zwierzchnika s&#261; wadami; gdyby on nie &#380;ywi&#322; jakiej szczeg&#243;lnej mi&#322;o&#347;ci ku niekt&#243;rym, nie by&#322;oby tych wad, bo nie by&#322;oby do nich powodu. &#379;aden z podw&#322;adnych nie mia&#322;by drugiemu czego zazdro&#347;ci&#263;, gdyby prze&#322;o&#380;ony dla wszystkich by&#322; jednakowy. W po&#347;rodku uczni&#243;w stan&#261;&#322; Chrystus, gdy rzek&#322;: p o k &#243; j&nbsp;&nbsp;w a m <sup>1</sup>. W zgromadzeniu nie b&#281;dzie pokoju, je&#347;li prze&#322;o&#380;ony nie jest jakby punktem &#347;rodkowym dla wszystkich, je&#347;li ku wszystkim nie &#380;ywi jednego usposobienia, o wszystkich nie ma jednej pieczy. C&#243;&#380; to jest prze&#322;o&#380;ony? Oto nic innego tylko wsp&#243;ln&#261; podw&#322;adnych p&#322;ac&#261;, albo wsp&#243;lnem pos&#322;usze&#324;stwem naj&#281;ty s&#322;uga. Wypada zatem, aby ten, kt&#243;ry jednakowej od wszystkich zap&#322;aty wymaga, jednakowo dla wszystkich by&#322; usposobiony i jednakow&#261; na wszystkich rozci&#261;ga&#322; piecz&#281;.',
                        'description3' => '1) &#346;. Jan 20, 19.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1121',
                        'name' => 'XXI Listopada',
                        'content' => 'O posiadaniu &#322;aski.',
                        'author' => '&#8222;Pobyt na ziemi jest strasznym trudem, je&#347;li cz&#281;&#347;ciej na ziemi i z sob&#261; samym przebywasz, ni&#380; w niebie i z Bogiem przez mi&#322;o&#347;&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Najmniejszy stopie&#324; Bo&#380;ej &#322;aski winien by&#263; dla ciebie dro&#380;szym, ni&#380; skarby ca&#322;ego &#347;wiata; bo chocia&#380;by&#347; wszystkie skarby posiad&#322;, te ci&#281; szcz&#281;&#347;liwym nie uczyni&#261;; &#322;aska przeciwnie, uczyni ci&#281; Synem Bo&#380;ym i dziedzicem nieba. Jak &#322;atwo, jak wielkie otrzymujemy zyski! za bagatelk&#281; nabywamy niesko&#324;czono&#347;&#263;; politowania godni jeste&#347;my, je&#347;li innych towar&#243;w szukamy; patrzmy: o t o&nbsp;&nbsp;&#322; a s k a&nbsp;&nbsp;B o &#380; a&nbsp;&nbsp;p r z e d&nbsp;&nbsp;n a m i,&nbsp;&nbsp;i&nbsp;&nbsp;b e z&nbsp;&nbsp;z &#322; o t a&nbsp;&nbsp;i&nbsp;&nbsp;b e z&nbsp;&nbsp;s r e b r a&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n a b y w a. Od mi&#322;o&#347;ci nikt si&#281; wymawia&#263; nie powinien. Ani ci&#281;&#380;k&#261;, ani trudn&#261; nie jest. Czemu b&#322;&#261;dz&#261; my&#347;li nasze po bezdro&#380;ach! kopiemy sobie cysterny rozwalone, kt&#243;re nie mog&#261; zatrzyma&#263; wody <sup>1</sup>, kiedy w jednym wszystko razem mamy, kiedy i na pewno go znale&#347;&#263; mo&#380;emy i bezpiecznie posiada&#263;. Nikt nam go nie zabierze, je&#347;li sami nie zechcemy. Nie ju&#380; chciwy, ale nienasycony jest, komu B&#243;g nie wystarcza, B&#243;g, w kt&#243;rym jest wszystko, bez kt&#243;rego niczem jest wszystko. O tyle tylko ka&#380;da rzecz jest dobr&#261;, o ile zaczerpnie tej dobroci z dobra niesko&#324;czonego. W&nbsp;&nbsp;g &#243; r &#281;&nbsp;&nbsp;s e r c a!',
                        'description3' => '1) Jerem. 2, 13.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1122',
                        'name' => 'XXII Listopada',
                        'content' => 'O wp&#322;ywie z&#322;ego ducha.',
                        'author' => '&#8222;W czasie smutku z&#322;y duch ma wielki wp&#322;yw na cz&#322;owieka; pod jego wp&#322;ywem nic si&#281; nigdy dobrego nie zrobi.&#8221;',
                        'description' => '(S. Ignat. in dign. Spir.)',
                        'description2' => 'Po ciemku niebezpiecznie jest i&#347;&#263;, zw&#322;aszcza gdy wyboj&#243;w pe&#322;no, kt&#243;rych albo wcale nie mo&#380;na, albo bardzo trudno wymin&#261;&#263;; najlepiej do dnia zaczeka&#263;, aby&#347; dobrze m&#243;g&#322; widzie&#263;, jak&#261; masz przed sob&#261; drog&#281;, nim si&#281; w ni&#261; wybierzesz. W smutku zostawiamy nas samych sobie, dlatego dusz nieprzyjaciele bardzo si&#281; uzuchwalaj&#261;. Baczno&#347;ci tu wielkiej potrzeba, dop&#243;ki nam z pomoc&#261; nie przyb&#281;dzie Bo&#380;a &#322;aska, kt&#243;ra i umys&#322; o&#347;wieci i wol&#281; zapali. Smutek nic dobrego nie doradzi: bo umys&#322; zaniepokojony nie jest zdolny do wype&#322;nienia swego obowi&#261;zku, idzie na o&#347;lep, nie gdzie rozum, ale gdzie &#243;w niepok&#243;j wskazuje. Jak podczas burzy na morzu zarzucaj&#261; si&#281; kotwice, &#347;ci&#261;gaj&#261; &#380;agle, wstrzymuje z ci&#281;&#380;arem okr&#281;t, dop&#243;ki pogoda nie zaja&#347;nieje; tak nic nie nale&#380;y o sprawach stanowi&#263;, dop&#243;ki umys&#322;, sro&#380;sze ni&#380; morze gotuj&#261;cy burze, nie uspokoi si&#281;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1123',
                        'name' => 'XXIII Listopada',
                        'content' => 'O zasi&#281;ganiu rady.',
                        'author' => '&#8222;Cech&#261; jest prawdziwie roztropnego, na w&#322;asn&#261; roztropno&#347;&#263; jak najmniej liczy&#263;, zw&#322;aszcza w rzeczach siebie dotycz&#261;cych, w kt&#243;rych ludziom przy niepokoju umys&#322;owym dobrymi s&#281;dziami by&#263; trudno.&#8221;',
                        'description' => '(S. Ignat. in Epist. ad Hispan.)',
                        'description2' => 'Nikt sam sobie nie wystarcza. Gdy si&#281; rodzimy, obcej pomocy potrzebujemy, podobnie gdy umieramy: na samym wst&#281;pie do &#380;ycia chcia&#322;a natura, aby&#347;my wiedzieli, ile innym winni&#347;my. Ten bezpieczniej rz&#261;dzi innymi, kto ma pewn&#261; obaw&#281; rz&#261;dzi&#263; sob&#261; samym; kto za&#347; sobie i swej roztropno&#347;ci zbyt ufa, ten nie jest sposobny do rz&#261;dzenia ani sob&#261;, ani innymi. S a m a&nbsp;&nbsp;O d w i e c z n e g o&nbsp;&nbsp;O j c a&nbsp;&nbsp;M &#261; d r o &#347; &#263;&nbsp;&nbsp;w y b r a &#322; a&nbsp;&nbsp;s o b i e&nbsp;&nbsp;n a&nbsp;&nbsp;z i e m i&nbsp;&nbsp;p r z e w o d n i k a. Nie ma wi&#281;kszego b&#322;&#281;du, nad mniemanie, &#380;e si&#281; b&#322;&#261;dzi&#263; nie mo&#380;e. Zapami&#281;tali swych pomys&#322;&#243;w obro&#324;cy, zdobywszy si&#281; na cokolwiek, my&#347;l&#261; &#380;e to jest Minerwa, podczas gdy to tylko sowa. Niezawodnym takiej zarozumia&#322;o&#347;ci skutkiem jest upadek, kt&#243;ry B&#243;g dopuszcza dlatego, aby gdy&#347;my inaczej nie chcieli, od zbytniego w siebie ufania oduczy&#322;o nas nieszcz&#281;&#347;cie w&#322;asne. S z c z &#281; &#347; l i w y!&nbsp;&nbsp;k t o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;o d u c z y &#322;&nbsp;&nbsp;p r z e z&nbsp;&nbsp;n i e s z c z &#281; &#347; c i e&nbsp;&nbsp;o b c e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1124',
                        'name' => 'XXIV Listopada',
                        'content' => 'O nietrwo&#380;eniu si&#281; ub&#243;stwem.',
                        'author' => '&#8222;Zakonnik bardziej l&#281;ka&#263; si&#281; winien obawy ub&#243;stwa, ni&#380; samego ub&#243;stwa.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Od ubogiego ubo&#380;szym jest ten, kto nie chce by&#263; ubogim, bo je&#347;li ubogiemu wiele brakuje, to niechc&#261;cemu ub&#243;stwa brakuje wszystkiego. Je&#347;li ci&#281;&#380;kim jest dla ciebie worek, w kt&#243;rym nic nie ma, czy&#380; s&#261;dzisz, &#380;e b&#281;dzie l&#380;ejszym, gdy si&#281; wieloma obci&#261;&#380;ysz? O obietnicach Prawdy niechaj nikt nie w&#261;tpi: s t o k r o &#263;&nbsp;&nbsp;o t r z y m a c i e. Patrz, jak jest czcz&#261; obawa, nie l&#281;kaj si&#281; niedostatku: wi&#281;cej jest tych rzeczy, kt&#243;re nas przera&#380;aj&#261; ni&#380; tych, kt&#243;re nam dokuczaj&#261;. C i e &#324;&nbsp;&nbsp;p r z e r a &#380; a&nbsp;&nbsp;d z i e c i,&nbsp;&nbsp;c h o c i a &#380;&nbsp;&nbsp;n i c z e m&nbsp;&nbsp;z &#322; e m&nbsp;&nbsp;n i e&nbsp;&nbsp;j e s t. W my&#347;li cz&#281;&#347;ciej, ni&#380; w rzeczy samej chorujemy; tam si&#281; nieraz obawiamy, gdzie nie ma obawy; mniej potrzebujemy, ni&#380; po&#380;&#261;damy; zamy&#347;lamy o wzniesieniu gumien, o przygotowaniu zapas&#243;w na d&#322;ugie &#380;ycie, nie pomn&#261;c, &#380;e mo&#380;e dzi&#347; &#347;mier&#263; nas zaskoczy <sup>1</sup>. Zbytnia o przysz&#322;o&#347;&#263; troska jest c&#243;rk&#261; ma&#322;oduszno&#347;ci; umys&#322; ku Bogu zwr&#243;cony ufa, &#380;e dobro&#263; jego zaopatrzy swoich w rzeczy konieczne, &#380;e nie pozwoli, aby byli ich pozbawieni. B o g a t e g o&nbsp;&nbsp;m a m y&nbsp;&nbsp;O j c a,&nbsp;&nbsp;b y l e &#347; m y&nbsp;&nbsp;t y l k o&nbsp;&nbsp;d o b r e m i&nbsp;&nbsp;b y l i&nbsp;&nbsp;d z i e &#263; m i.',
                        'description3' => '1) &#346;. &#321;ukasz 12, 20.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1125',
                        'name' => 'XXV Listopada',
                        'content' => 'O &#322;&#261;czno&#347;ci z dobrymi.',
                        'author' => '&#8222;Im do wi&#281;kszej ze sob&#261; &#322;&#261;czno&#347;ci m&#281;&#380;&#243;w duchownych przypu&#347;cisz, tem wi&#281;ksz&#261; w Panu pociech&#281; odniesiesz.&#8221;',
                        'description' => '(S. Ignat. apud Orland. l. 15).',
                        'description2' => 'Jak wonno&#347;ci, gdy si&#281; ich r&#281;kami dotkniemy, mi&#322;y nam zapach po sobie w nagrod&#281; zostawiaj&#261;; jak ogie&#324;, gdy si&#281; do&#324; zbli&#380;ymy, ogrzewa nas, nawet pomimo woli naszej: tak i przystawanie, &#322;&#261;czenie si&#281; z m&#281;&#380;ami duchownymi bez korzy&#347;ci nie pozostaje. M&#281;&#380;owie ci, ducha pe&#322;ni; obraz cnoty, jaki sami g&#322;&#281;boko w sercu wyryty nosz&#261;, i na tych, z kt&#243;rymi obcuj&#261;, jakby na wosku wyciskaj&#261;. Dobrzy z&#322;ym tylko s&#261; obmierzli; jak sowy nienawidz&#261; &#347;wiat&#322;a, tak zakonnik&#243;w oszczercy nie s&#261; dobrymi chrze&#347;cianami; zas&#322;uguj&#261; na to, aby jak nimi gardzili za &#380;ycia, tak ich pomocy byli pozbawieni przy &#347;mierci; aby sposobem takim ukarani zostali, jakim grzeszyli. Przewrotnej natury cech&#261; jest tem si&#281; najmocniej brzydzi&#263;, coby najbardziej pomog&#322;o. Chory ma wstr&#281;t najcz&#281;&#347;ciej do tych lekarstw, kt&#243;reby by&#322;y najskuteczniejszemi. W i e l u&nbsp;&nbsp;w k r &#243; t c e&nbsp;&nbsp;s t a &#322; o b y&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;l e p s z y m i,&nbsp;&nbsp;g d y b y&nbsp;&nbsp;o b c o w a l i&nbsp;&nbsp;z&nbsp;&nbsp;l e p s z y m i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1126',
                        'name' => 'XXVI Listopada',
                        'content' => 'O do&#347;wiadczeniu dobrych.',
                        'author' => '&#8222;Opatrzno&#347;&#263; najdro&#380;szego Ojca naszego i najm&#281;drszego lekarza tych bardziej na &#347;wiecie do&#347;wiadcza, tych bardziej r&#243;&#380;nemi utrapieniami nawiedza, kt&#243;rych najbardziej mi&#322;uje i kt&#243;rych jak najpr&#281;dzej chce po &#347;mierci doprowadzi&#263; do wiecznej szcz&#281;&#347;liwo&#347;ci.&#8221;',
                        'description' => '(S. Ignat. in epist. 20 Jan. 1552 an.)',
                        'description2' => 'Mi&#322;owa&#263; nie jest-to samo co pochlebia&#263;. Niekt&#243;rym si&#281; zdaje, &#380;e mi&#322;o&#347;&#263; na tem polega, aby si&#281; spe&#322;ni&#322;a umi&#322;owanego wola; tak mi&#322;owa&#263;, to znaczy zabi&#263;: inaczej mi&#322;uje, kto prawdziwie mi&#322;uje; bo ten pragnie dla mi&#322;owanego dobra, nie jakiego&#347; znikomego, ale wiecznego. Jak mi&#322;uje chorego lekarz, gdy go pali i tnie, poniewa&#380; wie, &#380;e te rany b&#281;d&#261; mu pomocne; tak B&#243;g mi&#322;uje swoich, i chocia&#380; teraz do b&#243;lu b&#243;l przydaje, z wielk&#261; to jednak jest ich korzy&#347;ci&#261;, bo z korzy&#347;ci&#261; wieczn&#261;. Tem mi&#322;o&#347;&#263; wi&#281;ksza i szczersza, im wi&#281;ksze jest dobro, o kt&#243;re si&#281; dla umi&#322;owanego staramy, chocia&#380;by jego osi&#261;gnienie przychodzi&#322;o z trudno&#347;ci&#261; niema&#322;&#261;. Nie ma korony bez walki, ani nagrody bez pracy. P r o w a d z i&nbsp;&nbsp;B &#243; g&nbsp;&nbsp;p o&nbsp;&nbsp;c i e r n i a c h,&nbsp;&nbsp;a l e&nbsp;&nbsp;p r o w a d z i&nbsp;&nbsp;d o&nbsp;&nbsp;r &#243; &#380;. Mi&#322;o&#347;&#263; &#347;wiata, pr&#243;cz tego &#380;e jest brzydk&#261;, jeszcze szkodzi; kogo mi&#322;uje, tego zabija. Tak ma&#322;pa nieraz swoje male&#324;kie w obj&#281;ciach dusi. Bodajby wi&#281;cej nienawidzi&#322;a, ni&#380; mi&#322;uje! M i &#322; o &#347; &#263;&nbsp;&nbsp;B o g a&nbsp;&nbsp;j e s t&nbsp;&nbsp;s i l n &#261;&nbsp;&nbsp;i&nbsp;&nbsp;p o &#380; y t e c z n &#261;,&nbsp;&nbsp;t y c h&nbsp;&nbsp;b a r d z i e j&nbsp;&nbsp;m i &#322; u j e,&nbsp;&nbsp;k t &#243; r y c h&nbsp;&nbsp;b a r d z i e j&nbsp;&nbsp;&#347; w i a t&nbsp;&nbsp;n i e n a w i d z i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1127',
                        'name' => 'XXVII Listopada',
                        'content' => 'O pami&#281;ci na Boga.',
                        'author' => '&#8222;Do tego&#347;my nawykn&#261;&#263; powinni, aby&#347;my we wszystkich rzeczach obecno&#347;&#263; Bo&#380;&#261; widzieli, i my&#347;li nasze nietylko podczas modlitwy ku niebu wznosili.&#8221;',
                        'description' => '(S. Ignat. vitae l. 5 c. 1).',
                        'description2' => 'Z tylu wyst&#281;pk&#243;w nie by&#322;oby i po&#322;owy, gdyby przy pope&#322;niaj&#261;cych je by&#322; &#347;wiadek; a c&#243;&#380; dopiero s&#281;dzia? Tych co nie powstrzymuje od grzechu obawa kary, pr&#281;dzej powstrzyma wstyd. Nie ma tak skrytego miejsca, gdzieby nie by&#322;o Boga. Jak z ukazaniem si&#281; s&#322;o&#324;ca, ukazuje si&#281; &#347;wiat&#322;o; tak z obecno&#347;ci&#261; Bo&#380;&#261; zjawia si&#281; w duszy naszej &#347;wiat&#322;o, kt&#243;re si&#322;y ksi&#281;cia ciemno&#347;ci ubezw&#322;adnia i zasadzki wykrywa. Je&#347;li wtedy tylko na Boga pami&#281;tamy, gdy si&#281; modlimy, jak&#380;e nie dobrze z Nim, jak nie dobrze sami ze sob&#261; post&#281;pujemy! Ile&#380; godzin dnia zabieraj&#261; inne zaj&#281;cia! a czy&#380;by ju&#380; na &#380;adn&#261; nie zas&#322;ugiwa&#322; B&#243;g, na &#380;adn&#261; dobro naszej duszy? Zawsze o nas my&#347;li B&#243;g, nigdy nas ze swej troski nie wypuszcza, ci&#261;gle nam dobrze czyni. &#379; a d n a&nbsp;&nbsp;c h w i l a&nbsp;&nbsp;n i e&nbsp;&nbsp;m i j a, &#380; e b y&nbsp;&nbsp;n a m&nbsp;&nbsp;d a r u&nbsp;&nbsp;j a k i e g o&nbsp;&nbsp;n i e&nbsp;&nbsp;z e s &#322; a &#322;;&nbsp;&nbsp;a&nbsp;&nbsp;m y&nbsp;&nbsp;j a k &#380; e&nbsp;&nbsp;r z a d k o&nbsp;&nbsp;o&nbsp;&nbsp;N i m&nbsp;&nbsp;p a m i &#281; t a m y!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1128',
                        'name' => 'XXVIII Listopada',
                        'content' => 'O pami&#281;ci na S&#261;d.',
                        'author' => '&#8222;O tem g&#322;&#243;wnie my&#347;le&#263; nale&#380;y: czego po nas B&#243;g na s&#261;dzie wymaga&#263; b&#281;dzie? jakiego ze spraw rachunku za&#380;&#261;da? aby&#347;my &#380;ycie nasze urz&#261;dzili nie wed&#322;ug naszego rozumienia, ale wed&#322;ug jego woli.&#8221;',
                        'description' => '(S. Ignat. vitae l. 5 c. 10).',
                        'description2' => 'O czcze ludzkie zabiegi! jakim sposobem bogatym, uczonym sta&#263; si&#281; mog&#281;, jakim sposobem zaszczyty i rozkosze osi&#261;gn&#261;&#263; zdo&#322;am; o to si&#281; troszcz&#281;: a jaki z tego wszystkiego Bogu rachunek zda&#263; mi przyjdzie, o tem nie my&#347;l&#281;, to mi na sercu nie le&#380;y. S&#261;d b&#281;dzie ze wszystkiego. Nie ma tak ma&#322;ej czynno&#347;ci, tak nieznacz&#261;cej my&#347;li, tak pr&#243;&#380;nego s&#322;owa, z kt&#243;regoby przed Bogiem nie trzeba si&#281; by&#322;o rachowa&#263;. A jak rzadko, jak prawie nigdy o tem nie my&#347;limy! Ze &#347;wiecami B&#243;g wonczas szpera&#263; b&#281;dzie Jeruzalem miasto &#347;wi&#281;te <sup>1</sup>; mo&#380;e znajdzie w niem wi&#281;cej szychu ni&#380; z&#322;ota, wi&#281;cej pozoru ni&#380; prawdy; a c&#243;&#380; si&#281; stanie z Jerychem, co z Sodom&#261;? jaki s&#261;d dla nich? Schodzi dzie&#324;, up&#322;ywaj&#261; lata, mija wiek; rachunek jednak z tych wszystkich chwil, owszem z ka&#380;dej czeka, coraz si&#281; bardziej przybli&#380;a. Teraz trzeba si&#281; nim zajmowa&#263;, teraz trzeba o nim my&#347;le&#263;. P o t e m&nbsp;&nbsp;b &#281; d z i e&nbsp;&nbsp;z a&nbsp;&nbsp;p &#243; &#378; n o,&nbsp;&nbsp;&#380; a l&nbsp;&nbsp;n i e&nbsp;&nbsp;p r z y d a&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n a&nbsp;&nbsp;n i c;&nbsp;&nbsp;b o&nbsp;&nbsp;z a p a d n i e&nbsp;&nbsp;n i e c o f n i o n a&nbsp;&nbsp;w i e c z n o &#347; &#263;.',
                        'description3' => '1) Sofoniasz 1, 12.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1129',
                        'name' => 'XXIX Listopada',
                        'content' => 'O lekarstwie na smutek.',
                        'author' => '&#8222;Spos&#243;b unikni&#281;cia smutk&#243;w i udr&#281;cze&#324; my&#347;li w tem &#380;yciu na tem polega, aby&#347;my wol&#281; nasz&#261; usi&#322;owali ca&#322;kiem stosowa&#263; do woli Bo&#380;ej.&#8221;',
                        'description' => '(S. Ignat. in epist. 20 Jan. 1554 a.)',
                        'description2' => 'Jak&#261; nas drog&#261; Pan B&#243;g prowadzi do siebie, to zostawmy Jemu; na wo&#378;nic&#281; nie nalegamy, aby nic a nic z drogi nie zbacza&#322;, pozwalamy si&#281; wie&#347;&#263; wed&#322;ug jego woli, byle nas dowi&#243;z&#322;, dok&#261;d chcemy. Czemu za smutne i z&#322;e to uwa&#380;asz? od Boga nic takiego nie pochodzi. B&#243;g chcia&#322;, cokolwiek si&#281; nam przydarzy&#322;o; czyli&#380; mniejszej wagi jest Bo&#380;a wola, ni&#380; twoje uczucie, czy&#380; B&#243;g raczej do ciebie ma si&#281; stosowa&#263;, ni&#380; ty do Boga? Gniewaj si&#281;, ile chcesz, oburzaj, ile podoba, wiedz jednak, &#380;e tym sposobem b&#243;lu wcale nie usuniesz. Niecierpliwo&#347;&#263; &#380;adnego nieszcz&#281;&#347;cia nie zmniejsza, owszem ka&#380;de powi&#281;ksza; b&#243;l potrzeba znosi&#263; cierpliwie; je&#347;li niechcesz, to bardziej go sobie powi&#281;kszysz. Do szcz&#281;&#347;cia inna jest droga; kr&#243;tko ci j&#261; przedstawi&#281;: kto mo&#380;e co chce, i kto niechce, czego nie mo&#380;e, ten jest szcz&#281;&#347;liwy: pierwsze w&#322;a&#347;ciwem jest tylko Bogu; drugie zale&#380;y od nas. B &#281; d z i e m y&nbsp;&nbsp;s z c z &#281; &#347; l i w i,&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n i e&nbsp;&nbsp;p o k u s i m y&nbsp;&nbsp;o t o,&nbsp;&nbsp;c z e g o&nbsp;&nbsp;o s i &#261; g n &#261; &#263;&nbsp;&nbsp;n i e&nbsp;&nbsp;m o &#380; e m y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1130',
                        'name' => 'XXX Listopada',
                        'content' => 'O podst&#281;pach z&#322;ego ducha.',
                        'author' => '&#8222;Do&#347;wiadczenie nauczy&#322;o, &#380;e gdzie jest wi&#281;cej przeciwno&#347;ci, tam wi&#281;kszy nast&#281;puje po&#380;ytek.&#8221;',
                        'description' => '(S. Ignat. epist. 14 Julii 1556 an.)',
                        'description2' => 'Nie zasypia swej sprawy szatan, usi&#322;uje przeszkodzi&#263;, skoro spostrze&#380;e, &#380;e jego zamiary ma co&#347; zniweczy&#263;. B o&nbsp;&nbsp;j a k a &#380;&nbsp;&nbsp;p o m i &#281; d z y&nbsp;&nbsp;&#347; w i a t &#322; e m&nbsp;&nbsp;i&nbsp;&nbsp;c i e m n o &#347; c i &#261;&nbsp;&nbsp;m o &#380; e&nbsp;&nbsp;b y &#263;&nbsp;&nbsp;z g o d a? Chytry nieprzyjaciel wcze&#347;nie przewiduje szkody swoje, dlatego si&#281; stara, aby w samym zawi&#261;zku przydusi&#322; zamiary, wiedz&#261;c, &#380;e w pocz&#261;tkach &#322;atwiej wszystkiemu zapobiedz, ni&#380; w czasie p&#243;&#378;niejszym; gdy drzewo g&#322;&#281;boko zapu&#347;ci korzenie, trudniej je wyrwa&#263;. &#379;e za&#347; jest niepewny siebie, chyba &#380;e go nasz&#261; gnu&#347;no&#347;ci&#261; o&#347;mielimy, wi&#281;c na w&#322;asne si&#322;y ca&#322;kiem nie liczy, ale ludzi na pomoc bierze, aby ci z przeciwno&#347;ciami wyst&#281;powali, aby tym sposobem zra&#380;eni Aposto&#322;owie rozpocz&#281;te dzie&#322;o zaniechali. Biada wys&#322;annikom szatana! kt&#243;rzy powstrzymuj&#261; to, czego on nie mo&#380;e. Miechami s&#261;, kt&#243;remi piek&#322;o swe po&#380;ary rozdmuchuje, aby &#347;wi&#281;tej budowli zacz&#261;tki w popi&#243;&#322; obr&#243;ci&#322;o. &#377; l i&nbsp;&nbsp;n i e&nbsp;&nbsp;c h c &#261;,&nbsp;&nbsp;a b y&nbsp;&nbsp;i n n i&nbsp;&nbsp;b y l i&nbsp;&nbsp;l e p s z y m i.',
                        'description3' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'code' => 'ANN_MONTH_12',
                'name' => 'December',
                'colour_value' => '#ce2493',
                'is_annual' => true
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'DICTA_IL_1201',
                        'name' => 'I Grudnia',
                        'content' => 'O niewynoszeniu si&#281;.',
                        'author' => '&#8222;Je&#347;li szatan napotka czyje sumienie boja&#378;liwe, usi&#322;uje je uczyni&#263; jeszcze boja&#378;liwszem, a nast&#281;pnie doprowadzi&#263; do ostatniego stopnia niepokoju, aby tym sposobem ca&#322;kiem zrazi&#263; i odwie&#347;&#263; od &#380;ycia doskona&#322;ego.&#8221;',
                        'description' => '(S. Ignatius de scrup.)',
                        'description2' => 'Pi&#261;&#263; si&#281; na wy&#380;yny, to znaczy nara&#380;a&#263; si&#281; na niebezpiecze&#324;stwo. Przyj&#281;te przez m&#281;drc&#243;w zdanie, a &#380; e b y&nbsp;&nbsp;n i c&nbsp;&nbsp;n a d t o, i w &#347;wi&#281;to&#347;ci ma miejsce. Ciernie owe we w&#322;asnej wyobra&#378;ni powsta&#322;e, raczej do dr&#281;czenia umys&#322;u, ni&#380; do jego u&#347;wi&#281;cenia s&#261; przydatne. Je&#347;li ziemia jaka uprawia&#263; si&#281; nie pozwala, to c&#243;&#380; dziwnego, &#380;e ciernie i chwasty wydaje? S&#322;uszna-to uporu kara, bo je&#347;liby si&#281; uprawi&#263; pozwoli&#322;a, wkr&#243;tceby zamiast cierni kwiaty rodzi&#322;a. Wprawdzie chc&#261;cemu nie dzieje si&#281; krzywda, dzieje si&#281; jednak szkoda. Nierozwa&#380;na ca&#322;kiem &#347;wi&#281;to&#347;&#263;! cierpie&#263; bez zas&#322;ugi, bez po&#380;ytku pracowa&#263;, jest-to w&#322;asnego zdania, w&#322;asnej my&#347;li m&#281;czennikiem by&#263;. Mniejsze z&#322;e by&#322;oby dla takich: nie rwa&#263; si&#281; naprz&#243;d, nie pi&#261;&#263; si&#281; w g&#243;r&#281;, nie zamy&#347;la&#263; o czem&#347; wielkiem. Skutkiem bowiem swojej nierozwagi, swego uporu bardzo &#378;le ko&#324;cz&#261;. Z pocz&#261;tku komary przecedzaj&#261; a potem i wielb&#322;&#261;dy po&#322;yka&#263; zaczynaj&#261; <sup>1</sup>. T o&nbsp;&nbsp;z y s k&nbsp;&nbsp;b &#322; &#281; d n i e&nbsp;&nbsp;p o j &#281; t e j&nbsp;&nbsp;&#347; w i &#281; t o &#347; c i,&nbsp;&nbsp;t o&nbsp;&nbsp;m y &#347; l&nbsp;&nbsp;s z a t a n a.',
                        'description3' => '1) &#346;. Mateusz 23, 25.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1202',
                        'name' => 'II Grudnia',
                        'content' => 'O gorliwo&#347;ci w s&#322;u&#380;bie Bo&#380;ej.',
                        'author' => '&#8222;Do&#347;wiadczenie nas uczy, &#380;e nie leniwi i ozi&#281;bli; ale ch&#281;tni i &#380;arliwi w s&#322;u&#380;bie Bo&#380;ej, ciesz&#261; si&#281; pokojem ducha.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'Szalonym jest, kto po bezdro&#380;ach szuka, co w domu znale&#378;&#263; mo&#380;e. My podobnie robimy, daleko szukamy, co blizko mamy, u obcych drzwi jako o ja&#322;mu&#380;n&#281; prosimy o to, co w naszych r&#281;ku jest, i co sami sobie da&#263;, owszem sami tylko mo&#380;emy. Wielkie to jest szcz&#281;&#347;cie prawdziwego w tem &#380;yciu szcz&#281;&#347;cia, &#380;e ono od nas, nie od rzeczy zale&#380;y, &#380;e w nas, nie w rzeczach powstaje i trwa. Ka&#380;dy swojej rado&#347;ci ojcem jest i matk&#261;. Ducha si&#281; porad&#378;, &#380;arliwo&#347;ci pos&#322;uchaj; jak&#261; jest ona, takim tak&#380;e b&#281;dzie i duszy pok&#243;j. Ka&#380;dy sztukmistrz o to si&#281; najbardziej stara, aby dzie&#322;o jego r&#281;ki nie podpad&#322;o czyje&#347; naganie: czemu&#380; my, co czynimy, tak czynimy, &#380;e gniew Boski na siebie &#347;ci&#261;gamy? Ca&#322;a warto&#347;&#263;, nie w tem co kto zrobi&#322;, ale w tem jak zrobi&#322;, nie tak w czynie, jak w gorliwo&#347;ci spoczywa. By&#263; tylko bez wad, nieszczeg&#243;lna to dobro&#263;; ku czemu&#347; wi&#281;kszemu niech zmierza, kto na pochwa&#322;&#281; chce zas&#322;u&#380;y&#263;. Co robi, niechaj dobrze robi, niechaj tak robi, &#380;e ju&#380; lepiej nie mo&#380;e. K i l k a&nbsp;&nbsp;c z y n &#243; w&nbsp;&nbsp;g o r l i w i e&nbsp;&nbsp;d o k o n a n y c h&nbsp;&nbsp;b a r d z i e j&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;c e n i &#261;,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;w i e l e&nbsp;&nbsp;n i e d b a l e,&nbsp;&nbsp;j a k&nbsp;&nbsp;o d&nbsp;&nbsp;n i e c h c e n i a&nbsp;&nbsp;s p e &#322; n i o n y c h.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1203',
                        'name' => 'III Grudnia',
                        'content' => 'O zachowaniu pierwotnego ducha.',
                        'author' => '&#8222;Na zachowaniu pierwotnego ducha polega niemal ca&#322;e &#380;ycie zakonnych zgromadze&#324;.&#8221;',
                        'description' => '(S. Ignat. apud Orland. l. 6).',
                        'description2' => 'Rzeczy ma&#322;e z pocz&#261;tku natura zwyk&#322;a z czasem wi&#281;kszemi czyni&#263;; ca&#322;kiem innego porz&#261;dku trzyma si&#281; &#322;aska; zapa&#322;, jakiego udziela, jest odrazu wielki; od nas zale&#380;y, &#380;eby z czasem, skutkiem naszego niedbalstwa, nie zmala&#322;. Opatrzno&#347;&#263; Bo&#380;a za&#322;o&#380;ycielom zakon&#243;w udziela ducha obficie, regu&#322;a, jak&#261; oni, tym duchem wsparci, podaj&#261;, bywa wyborn&#261;. Kto w ich &#347;lady wiernie wst&#281;puje i kto si&#281; tej regu&#322;y &#347;ci&#347;le trzyma, ten na sobie prawdziwy obraz cnoty przedstawia. O g l &#261; d a j&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;z a w s z e&nbsp;&nbsp;n a&nbsp;&nbsp;p o c z &#261; t e k. Ha&#324;b&#261; jest dla dzieci, je&#347;li od bohater&#243;w pochodz&#261;, a ich s&#322;awy pi&#281;knemi czynami sobie nie zdobywaj&#261;. Czyny przodk&#243;w winny by&#263; bod&#378;cem dla potomk&#243;w, aby nie wygl&#261;da&#322;o, &#380;e z olbrzym&#243;w porodzi&#322;y si&#281; kar&#322;y, z or&#322;&#243;w, jakie niedo&#322;&#281;&#380;ne piskl&#281;ta. Podtrzymywa&#263; nale&#380;y pierwszy zapa&#322;, inaczej ognisko wystygnie; zupe&#322;nie nawet wszystko wyga&#347;nie, je&#347;li cz&#281;sto drew na ogie&#324; przyk&#322;ada&#263; nie b&#281;dziesz. S y n e m&nbsp;&nbsp;o g n i a&nbsp;&nbsp;j e s t e &#347;,&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;o &#347; w i e c a s z,&nbsp;&nbsp;o g r z e w a s z;&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;t e g o&nbsp;&nbsp;n i e&nbsp;&nbsp;c z y n i s z;&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;l e d w i e&nbsp;&nbsp;n i e&nbsp;&nbsp;l e d w i e&nbsp;&nbsp;t l e j e s z&nbsp;&nbsp;&#8212;&nbsp;&nbsp;d y m e m&nbsp;&nbsp;j e s t e &#347;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1204',
                        'name' => 'IV Grudnia',
                        'content' => 'O trzymaniu si&#281; jednego.',
                        'author' => '&#8222;Im bardziej dusza jest od drugich oddzielona i osamotniona, tem si&#281; sposobniejsza staje do szukania i znalezienia Stw&#243;rcy.&#8221;',
                        'description' => '(S. Ignat. in ann. Exercit.)',
                        'description2' => 'Gdzie zgie&#322;k, gdzie ludzi i spraw wiele, tam zamieszanie; w&#347;r&#243;d kt&#243;rego o miejsce i czas na pobo&#380;no&#347;&#263; trudno. Tak, gdy si&#281; o wiele troszczymy, najlepsz&#261; rzecz tracimy: nic bowiem nie ma lepszego nad nasz&#261; z Bogiem &#322;&#261;czno&#347;&#263;. Kto si&#281; wszystkiego chwyta, ten nic nie osi&#261;gnie; kto si&#281; w r&#243;&#380;ne strony zwraca, ten si&#281; od &#347;rodka odwraca. Je&#347;li si&#281; promienie s&#322;o&#324;ca w jednym punkcie nie skupiaj&#261;, je&#347;li s&#261; rozdzielone, to ognia nie wzniec&#261;. Jedynie Boga szuka&#263; nale&#380;y, ze wszystkich si&#322; go mi&#322;owa&#263;, je&#347;li chcemy, aby by&#322; nasz&#261; w&#322;asno&#347;ci&#261;, aby nas nie opuszcza&#322; i z nami przebywa&#322;. Wolny od innych trosk, umys&#322;, niech si&#281; wprost do najwy&#380;szego dobra wznosi, jako do swego celu; gdy od niego zbacza, b&#322;&#261;dzi; my&#347;li rozproszone, b&#322;&#261;kaj&#261;ce si&#281;, serca nie porusz&#261;, a z sercem zimnem do Boga, kt&#243;ry jest trawi&#261;cym ogniem, nie przychodzi si&#281;. Kto wsz&#281;dzie jest, ten nigdzie nie jest; kto si&#281; skupia&#263; nie nauczy&#322;, ten ani w naukach, ani w poznawaniu Boga, ani w jego mi&#322;o&#347;ci daleko nie zajdzie. Umys&#322; wieloma rzeczami zaj&#281;ty, na ka&#380;d&#261; z osobna ledwie nie ledwie zwraca uwag&#281;; kto jedn&#261; r&#281;k&#261; wiele chce obj&#261;&#263;, ten nic nie utrzyma.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1205',
                        'name' => 'V Grudnia',
                        'content' => 'O uleg&#322;o&#347;ci.',
                        'author' => '&#8222;Bardzo b&#322;&#261;dz&#261; ci, kt&#243;rych mi&#322;o&#347;&#263; w&#322;asna za&#347;lepi&#322;a i kt&#243;rzy si&#281; za pos&#322;usznych maj&#261;, pomimo &#380;e zwierzchnika do tego, co sami chcieli; jakim sposobem nak&#322;onili.&#8221;',
                        'description' => '(S. Ignat. in Epist. de obedien.)',
                        'description2' => 'Przedrze&#378;niaczk&#281; sw&#261; ka&#380;da cnota ma: jak pi&#281;kna twarz cz&#281;sto &#322;udzi pozorem, tak i cnota cz&#281;sto jest tylko wytworn&#261; mask&#261;, ale bez gruntu, bez tre&#347;ci. Pos&#322;usze&#324;stwo g&#322;&#243;wnie na tem polega, aby si&#281; nie twoja, ale zwierzchnika wola pe&#322;ni&#322;a. Co innego jest, gdy ty zwierzchnikowi, a co innego, gdy on tobie ulega; w tym drugim przypadku rozkazuje tobie, nie coby sam chcia&#322;, ale co rozumie, &#380;e si&#281; tobie podoba. Niewiem, czyja jest wi&#281;ksza wina, czy zwierzchnika? &#8212; &#380;e si&#281; ze swej w&#322;adzy wyzuwa; czy podw&#322;adnego? &#8212; &#380;e o swem pos&#322;usze&#324;stwie zapomina. Je&#347;li zwierzchnik podw&#322;adnego si&#281; obawia, je&#347;li si&#281; jemu podoba&#263; usi&#322;uje, to ju&#380; po jego w&#322;adzy; wtedy bowiem nie to czyni, czego s&#322;uszno&#347;&#263; wymaga, ale to czego wola podw&#322;adnego &#380;&#261;da: p o r z &#261; d e k&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;c a &#322; k i e m&nbsp;&nbsp;z m i e n i a,&nbsp;&nbsp;t e n&nbsp;&nbsp;c o&nbsp;&nbsp;m i a &#322;&nbsp;&nbsp;b y &#263;&nbsp;&nbsp;z w i e r z c h n i k i e m,&nbsp;&nbsp;s t a j e&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;s &#322; u g &#261;. Inna rzecz, gdy podw&#322;adny jest chory, wtedy nale&#380;y si&#281; z nim obchodzi&#263; &#322;agodniej, pe&#322;ni&#263; niejako jego wol&#281;; aby surowo&#347;&#263; choroby nie pogorszy&#322;a. Jest-to przypadek, w kt&#243;rym jak z jednej strony chwalebn&#261; jest zwierzchnika wyrozumia&#322;o&#347;&#263;, tak z drugiej nagann&#261; podw&#322;adnego zaci&#281;to&#347;&#263;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1206',
                        'name' => 'VI Grudnia',
                        'content' => 'O unikaniu zasadzek.',
                        'author' => '&#8222;Aby dusza mog&#322;a post&#281;powa&#263; na drodze doskona&#322;o&#347;ci, potrzeba a&#380;eby si&#281; zwraca&#322;a w stron&#281; wprost przeciwn&#261;, ni&#380; j&#261; usi&#322;uje zwr&#243;ci&#263; nieprzyjaciel.&#8221;',
                        'description' => '(S. Ignat. in Exercit.)',
                        'description2' => 'Kto p&#281;dem gwa&#322;townej rzeki nie chce by&#263; porwany na miejsce niebezpieczne, ten jej pr&#261;dowi opiera&#263; si&#281; winien ca&#322;&#261; si&#322;&#261;; je&#347;li nie uczyni tego, to ju&#380; po statku, po towarach i po &#380;yciu: bo albo si&#281; rozbije o ska&#322;y podwodne, albo pogr&#261;&#380;y w przepa&#347;ci, albo osi&#261;dzie na mieli&#378;nie. Nigdy nie nale&#380;y zawiera&#263; przymierza z nieprzyjacielem, kt&#243;ry jest nieub&#322;agany, kt&#243;rego jedynem pragnieniem jest nasza zguba. Cokolwiek przedsi&#281;bierze on, to na nasz&#261; zgub&#281; przedsi&#281;bierze. Ty z a m y s &#322; o m&nbsp;&nbsp;j e g o&nbsp;&nbsp;b &#261; d &#378;&nbsp;&nbsp;z a w s z e&nbsp;&nbsp;p r z e c i w n y. Ci&#261;gle b&#261;d&#378; przy broni, nigdy jej nie sk&#322;adaj; o wypoczynku tam mowy nie ma, gdzie we dnie i w nocy nieprzyjaciel czycha na twoj&#261; zgub&#281;; gdzie swych zasadzek ani na chwil&#281; nie zaprzestaje. U c i e c z k a&nbsp;&nbsp;j e s t&nbsp;&nbsp;t u&nbsp;&nbsp;z w y c i &#281; z t w e m. Kto zdala od Jowisza, ten zdala od piorunu; im silniej odpychasz od siebie podszepty nieprzyjaciela, tem pewniej unikasz niebezpiecze&#324;stw: lepiej wcale si&#281; nie spotyka&#263;, ni&#380; porozumiewa&#263; z nieprzyjacielem. U c i e k a j,&nbsp;&nbsp;a&nbsp;&nbsp;o c a l i s z&nbsp;&nbsp;s i &#281;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1207',
                        'name' => 'VII Grudnia',
                        'content' => 'O nierozwadze w cnocie.',
                        'author' => '&#8222;Nieprzyjaciel nasz niczem tyle nie t&#322;umi mi&#322;o&#347;ci, ile nadmiernym i nierozwa&#380;nym w cnocie post&#281;pem.&#8221;',
                        'description' => '(S. Ignat. Epist. ad Hispan.)',
                        'description2' => 'Jak balastu ilo&#347;&#263; odpowiednia ochrania okr&#281;t od wiatr&#243;w, a zatapia go ilo&#347;&#263; nadmierna; jak oliwa po trochu dolewana p&#322;omie&#324; utrzymuje, a zanadto wlana gasi; tak i umiarkowanie jest matk&#261; cnoty, a nierozwaga, nadmiar &#8212; macoch&#261;. Nieraz s&#261;dzimy, &#380;e to lub owo z pobo&#380;no&#347;ci pochodzi; gdy tymczasem p&#243;&#378;niej przekonujemy si&#281;, &#380;e z pychy, os&#322;oni&#281;tej wprawdzie gorliwo&#347;ci&#261;, ale szkodliwej. Niepomierny &#243;w zapa&#322; cz&#281;sto ma na wzgl&#281;dzie chwa&#322;&#281; w&#322;asn&#261;, nie chwa&#322;&#281; Boga. R z e c z y&nbsp;&nbsp;n a d z w y c z a j n e,&nbsp;&nbsp;n i e b e z p i e c z n e&nbsp;&nbsp;s &#261;. Ten coby wielkie na drodze cnoty uczyni&#322; post&#281;py, gdyby si&#281; kierowa&#322; umiarkowaniem, nie &#347;pieszy&#322; zbytnio, ze stopnia na stopie&#324; bez przeskakiwania wst&#281;powa&#322;; postawiwszy sobie przeszkod&#281; nierozwa&#380;nym biegiem, ugrz&#261;z&#322; i ani kroku nie robi, jako taki, kt&#243;ry kiedy&#347; wiele bardzo chcia&#322;, a teraz nic nie mo&#380;e. Nies&#322;ychane dla nieba szkody, a dla piek&#322;a zyski powoduje nieroztropna gorliwo&#347;&#263;: bo ileby mog&#322;a pom&#243;dz duszom, tyle przez swoj&#281; nierozwag&#281; sprawia pociechy piek&#322;u, a ujmuje niebu. N a w e t&nbsp;&nbsp;w&nbsp;&nbsp;d o b r e j&nbsp;&nbsp;m y &#347; l i&nbsp;&nbsp;&#8212;&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;t a&nbsp;&nbsp;n a&nbsp;&nbsp;n i c&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n i e&nbsp;&nbsp;o g l &#261; d a,&nbsp;&nbsp;&#380; a d n y m&nbsp;&nbsp;p r a w o m&nbsp;&nbsp;u l e d z&nbsp;&nbsp;n i e c h c e&nbsp;&nbsp;&#8212;&nbsp;&nbsp;b a r d z o&nbsp;&nbsp;b &#322; &#261; d z i &#263;&nbsp;&nbsp;m o &#380; n a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1208',
                        'name' => 'VIII Grudnia',
                        'content' => 'O bole&#347;ciach Maryi Panny.',
                        'author' => '&#8222;Wi&#281;cej Marya Panna boleje kiedy ludzie grzechem obra&#380;aj&#261; Jej jednorodzonego Syna, ni&#380; bola&#322;a, kiedy Go krzy&#380;owali.&#8221;',
                        'description' => '(S. Ign. apud Nad. in a. Mar. n. 670).',
                        'description2' => 'Jak &#347;wiat&#322;o z ciemno&#347;ci&#261;, tak Marya z grzechem, czy-to uczynkowym, czy pierworodnym, nie ma &#380;adnej &#322;&#261;czno&#347;ci; s&#261;-to rzeczy ca&#322;kiem sobie przeciwne. Jak przyczyn&#261; kary jest wyst&#281;pek, tak przyczyn&#261; ukrzy&#380;owania Chrystusa jest grzech, kt&#243;re tyle razy powtarzasz, ile razy grzeszysz, i to z nies&#322;ychanym b&#243;lem Maryi! &#379;ydzi, co krzy&#380;owali Chrystusa, nie znali Go, ty wiesz kogo obra&#380;asz; za nich jak za ciebie, jeszcze nie cierpia&#322; by&#322; Chrystus; oni &#380;adnych nowego prawa na pomoc nie otrzymali Sakrament&#243;w, a ty&#347; tyle otrzyma&#322;. P a t r z,&nbsp;&nbsp;o&nbsp;&nbsp;i l e&nbsp;&nbsp;g o r s z y m&nbsp;&nbsp;o d&nbsp;&nbsp;&#379; y d &#243; w&nbsp;&nbsp;j e s t e &#347;! &#346;mier&#263; Chrystusa tak z&#322;&#261; nie jest, aby si&#281; i za dobr&#261; uwa&#380;a&#263; nie mog&#322;a; by&#322;a bowiem sp&#322;aceniem d&#322;ug&#243;w przez ludzko&#347;&#263; zaci&#261;gni&#281;tych, wiecznej szcz&#281;&#347;liwo&#347;ci drzwiami; grzech za&#347; tak z&#322;em jest, i&#380; tylko z&#322;em i niczem wi&#281;cej. Je&#347;li chcesz czci&#263; Mary&#261;, nie obra&#380;aj Jej Syna; w ten spos&#243;b i Matki i Syna synem si&#281; oka&#380;esz: jak&#380;eby si&#281; m&#243;g&#322; podoba&#263; Matce, kto jest nieprzyjacielem jej Syna, Boga? T o&nbsp;&nbsp;t r e &#347; &#263;&nbsp;&nbsp;p o b o &#380; n o &#347; c i,&nbsp;&nbsp;b e z&nbsp;&nbsp;t e g o&nbsp;&nbsp;w s z y s t k o&nbsp;&nbsp;n a&nbsp;&nbsp;n i c.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1209',
                        'name' => 'IX Grudnia',
                        'content' => 'O uleg&#322;o&#347;ci przez wzgl&#261;d na Boga.',
                        'author' => '&#8222;Zwierzchnika nie dlatego s&#322;ucha&#263; nale&#380;y, &#380;e jest obdarzony wieloma zaletami, &#380;e jest roztropny, dobry, m&#261;dry, ale dlatego tylko, &#380;e miejsce Boga zast&#281;puje, &#380;e urz&#261;d jego spe&#322;nia.&#8221;',
                        'description' => '(S. Ignat. in epist. de perf.)',
                        'description2' => 'Kto ze wzgl&#281;d&#243;w ludzkich s&#322;ucha, ten si&#281; od ludzi niech nagrody spodziewa; wiecznej nie otrzyma, bo j&#261; B&#243;g zachowuje tylko tym, kt&#243;rzy przez wzgl&#261;d na Niego s&#322;uchaj&#261;. Nikt ch&#281;tnie darmo nie pracuje. C o&nbsp;&nbsp;r o b i s z,&nbsp;&nbsp;r &#243; b&nbsp;&nbsp;t a k,&nbsp;&nbsp;a b y &#347;&nbsp;&nbsp;z a s &#322; u g &#281;&nbsp;&nbsp;m i a &#322;. S&#322;ugami Boga jeste&#347;my, nie niewolnikami ludzi. Czemu&#380; bardziej ze wzgl&#281;du na ludzi, ni&#380; ze wzgl&#281;du na Boga s&#322;uchamy? S&#322;udzy tacy ci&#281;&#380;ar d&#378;wigaj&#261;, ale po&#380;ytku nie odnosz&#261;. Kto si&#281; na ludzkiej, czy-to roztropno&#347;ci, czy &#380;yczliwo&#347;ci opiera, ach! jak&#380;e na s&#322;abej opiera si&#281; podstawie. Jedna i druga jest niepewn&#261;, zawodn&#261;. C&#243;&#380; nad &#380;yczliwo&#347;&#263; cz&#322;owieka zmienniejszego? c&#243;&#380; nad jego roztropno&#347;&#263; bardziej b&#322;&#281;dowi podleg&#322;ego? Ten tylko dobroci swego czynu i nagrody za prac&#281; pewny jest, kto cz&#322;owiekowi nie dla cz&#322;owieka, ale dla Boga ulega; c &#243; &#380;&nbsp;&nbsp;c i&nbsp;&nbsp;c z &#322; o w i e k&nbsp;&nbsp;m o &#380; e&nbsp;&nbsp;z r o b i &#263;&nbsp;&nbsp;d o b r e g o&nbsp;&nbsp;b e z&nbsp;&nbsp;B o g a,&nbsp;&nbsp;a&nbsp;&nbsp;c z y &#380;&nbsp;&nbsp;n i e&nbsp;&nbsp;w s z y s t k o&nbsp;&nbsp;B &#243; g&nbsp;&nbsp;b e z&nbsp;&nbsp;c z &#322; o w i e k a?',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1210',
                        'name' => 'X Grudnia',
                        'content' => 'O na&#347;ladowaniu dobrych.',
                        'author' => '&#8222;Tych ka&#380;dy niechaj si&#281; stara na&#347;ladowa&#263;, o kt&#243;rych doskona&#322;o&#347;ci si&#281; prze&#347;wiadczy, kt&#243;rych gorliwymi i wielkodusznymi ujrzy.&#8221;',
                        'description' => '(S. Ignat. epist. de perf.)',
                        'description2' => 'Wielkie wielkich m&#281;&#380;&#243;w przyk&#322;ady zach&#281;t&#261; s&#261;, dzielnie pobudzaj&#261; do tego, co czyni&#263; nale&#380;y; g&#322;os ich bardzo dono&#347;ny jest, silniej przemawia ni&#380; najwymowniejsze usta. Dlatego przodk&#243;w Pan B&#243;g ozdobi&#322; szczeg&#243;lnemi darami, aby nast&#281;pcy mieli pobudk&#281; do stania si&#281; im podobnymi. S&#322;abo&#347;ci si&#322;, maluczko&#347;ci&#261; swoj&#261;, niech si&#281; nikt nie wymawia. Mogli tamci, dlaczeg&#243;&#380;by&#347; nie m&#243;g&#322; ty? cia&#322;o twe z tej samej co ich powsta&#322;o ziemi, &#322;aska ta sama; je&#347;li czego brakuje, to chyba ch&#281;ci. Nies&#322;usznie natur&#281; obwiniamy, naszych si&#281; ona l&#281;ka rozkaz&#243;w; lenistwa naszego, opiesza&#322;o&#347;ci, nie braku si&#322; jest win&#261;, &#380;e w chwalebne &#347;lady przodk&#243;w nie wst&#281;pujemy, &#380;e od owych wielkich przyk&#322;ad&#243;w tak bardzo odbiegamy. Przyzwyczajenie jest drug&#261; natur&#261;: p o s t a r a j&nbsp;&nbsp;s i &#281;,&nbsp;&nbsp;a b y&nbsp;&nbsp;t a&nbsp;&nbsp;d r u g a&nbsp;&nbsp;o d&nbsp;&nbsp;p i e r w s z e j&nbsp;&nbsp;b y &#322; a&nbsp;&nbsp;l e p s z &#261;. Regu&#322;a przy budowaniu winna by&#263; doskona&#322;&#261;; inaczej mury si&#281; pochyl&#261; i pierwiej upadn&#261;, ni&#380; dachu dosi&#281;gn&#261;. Kopia od orygina&#322;u nie bywa lepsz&#261;. C i,&nbsp;&nbsp;k t &#243; r y c h&nbsp;&nbsp;s o b i e&nbsp;&nbsp;z a&nbsp;&nbsp;w z &#243; r&nbsp;&nbsp;d o&nbsp;&nbsp;n a &#347; l a d o w a n i a&nbsp;&nbsp;w y b i e r a m y,&nbsp;&nbsp;n i e c h&nbsp;&nbsp;b &#281; d &#261;&nbsp;&nbsp;n a j l e p s z y m i.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1211',
                        'name' => 'XI Grudnia',
                        'content' => 'O u&#347;mierzaniu ducha.',
                        'author' => '&#8222;Trudniej jest ducha u&#347;mierzy&#263;, ni&#380; cia&#322;o poskromi&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Orland.)',
                        'description2' => 'Odm&#243;wienie wyg&#243;d cia&#322;u, zadanie mu pewnego b&#243;lu, trudn&#261; jest rzecz&#261;; ale nie tak&#261;, &#380;eby si&#281; na ni&#261; zdoby&#263; nie mog&#322;a cnota filozoficzna, kt&#243;ra nieraz, jak wiadomo, pogardzi&#322;a wszystkiem i &#380;yciem. Co innego niecenienie siebie, ch&#281;tne znoszenie wyrz&#261;dzanej sobie pogardy; taka rzecz jak z jednej strony porz&#261;dek natury, tak z drugiej wszelkie poj&#281;cie filozoficzne przewy&#380;sza: ten tylko tej cnoty jest mistrzem, kt&#243;ry by&#322; cichym i pokornego serca <sup>1</sup>. Zewn&#281;trzne nieszcz&#281;&#347;cia bez szemrania znosi&#263; nie jest jeszcze tak wielk&#261; rzecz&#261;; ale te spokojnie znie&#347;&#263;, kt&#243;re dusz&#281; rani&#261;, to dopiero rzecz podziwu godna. Tu Rodus, tu skok. T o&nbsp;&nbsp;c n o t y&nbsp;&nbsp;p r a w d z i w e j&nbsp;&nbsp;k a m i e &#324;&nbsp;&nbsp;p r o b i e r c z y. Cia&#322;a znosi&#263; przykro&#347;ci, czasami che&#322;pliwo&#347;&#263;, czasami up&#243;r doradza: ale j&#281;ki obra&#380;onego ducha st&#322;umi&#263;, sw&#261; wy&#380;szo&#347;&#263; umys&#322;ow&#261; we w&#322;a&#347;ciwych granicach utrzyma&#263;, to tylko prawdziwe m&#281;ztwo mo&#380;e, owa jedna z cn&#243;t kardynalnych.',
                        'description3' => '1) &#346;. Mateusz 11, 29.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1212',
                        'name' => 'XII Grudnia',
                        'content' => 'O ozi&#281;b&#322;o&#347;ci.',
                        'author' => '&#8222;Lenistwo i ozi&#281;b&#322;o&#347;&#263;, wszelkie prace, zaj&#281;cia, czyni&#261; leniwcowi zawsze przykremi.&#8221;',
                        'description' => '(S. Ignat. in epist. de perfect.)',
                        'description2' => 'Kto mniej pracuje, temu ci&#281;&#380;ej wszystko przychodzi. Pr&#243;&#380;niacy pr&#281;dzej na si&#322;ach ustaj&#261;, ni&#380; ludzie do pracy wdro&#380;eni; ci co swoim dogadzaj&#261; &#380;&#261;dzom, wi&#281;cej cierpi&#261;, ni&#380; ci, co cia&#322;o swoje wraz z &#380;&#261;dzami swemi ukrzy&#380;owali. Gdzie zapa&#322; jest, tam zm&#281;czenia nie ma; mi&#322;o&#347;&#263; na trud si&#281; nie uskar&#380;a, owszem, sam trud mi&#322;uje. Wi&#281;cej nas przera&#380;a trudu obawa, ni&#380; sam trud. Krzy&#380; opiesza&#322;ych jest najci&#281;&#380;szy. Ten sam razem z gorliwymi ci&#281;&#380;ar czuj&#261;, ale pociechy razem z nimi nie otrzymuj&#261;. Ta bowiem duszy gorliwej dodaje ochoty, sprawia, &#380;e jak ptakowi pi&#243;ra, tak jej przykro&#347;ci nie ci&#261;&#380;&#261;, owszem, do wzniesienia si&#281; w g&#243;r&#281; pomagaj&#261;. Z&#322;e, kt&#243;re w nas si&#281; rodzi, do nader wielkich nale&#380;y, zawsze tu&#380; jest, zawsze przygniata i, co najgorsza, pomocn&#261; r&#281;k&#261; odtr&#261;ca; n i e&nbsp;&nbsp;i n a c z e j&nbsp;&nbsp;w y l e c z o n e&nbsp;&nbsp;b y &#263;&nbsp;&nbsp;m o &#380; e,&nbsp;&nbsp;t y l k o&nbsp;&nbsp;w &#322; a s n &#261;&nbsp;&nbsp;t r o s k &#261;&nbsp;&nbsp;i&nbsp;&nbsp;s i e b i e&nbsp;&nbsp;w y n i s z c z e n i e m.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1213',
                        'name' => 'XIII Grudnia',
                        'content' => 'O hojno&#347;ci Boga.',
                        'author' => '&#8222;Prawd&#261; jest, &#380;e B&#243;g zawsze do hojno&#347;ci wzgl&#281;dem nas jest got&#243;w, byleby tylko w nas znalaz&#322; pokor&#281; prawdziw&#261;, g&#322;&#281;bok&#261;.&#8221;',
                        'description' => '(S. Ignat. in epist. ad Hispan.)',
                        'description2' => 'Jak pr&#281;dko z g&#243;r na doliny sp&#322;ywaj&#261; wody, tak &#380;aden obfitszych &#322;ask od Najwy&#380;szego dop&#243;ty niech si&#281; nie spodziewa, dop&#243;ki si&#281; g&#322;&#281;boko nie upokorzy i wysokiego o sobie trzymania daleko od siebie nie odrzuci. Je&#347;li naczynie pr&#243;&#380;nem nie jest, to wody nie przyjmie; ale i obfitszych &#322;ask od Boga nie otrzyma, kto o nie pe&#322;en &#380;&#261;dz ambitnych prosi. Pyszny &#243;w Faryzeusz z niczem od Pana odszed&#322;, nie z winy Boskiej szczodrobliwo&#347;ci, ale z winy w&#322;asnej pychy <sup>1</sup>. Nikt tak bezpiecznym nie jest, jak pokorny. To tylko drzewo gwa&#322;townym opiera si&#281; wiatrom, kt&#243;re w ziemi&#281; jak najg&#322;&#281;biej zapu&#347;ci&#322;o korzenie. O wysokie wie&#380;e uderzaj&#261; pioruny, podczas gdy tamaryszki rosn&#261; sobie swobodnie, bez najmniejszego uszkodzenia. Wejrza&#322; Pan na nizko&#347;&#263; s&#322;u&#380;ebnicy swojej, dlatego wielkie uczyni&#322; jej rzeczy, poniewa&#380; mo&#380;ny jest <sup>2</sup>; i teraz wielkie czyni rzeczy, ale tylko tym, kt&#243;rzy si&#281; uni&#380;aj&#261;. M a &#322; o&nbsp;&nbsp;o&nbsp;&nbsp;s o b i e&nbsp;&nbsp;t r z y m a j &#261; c y&nbsp;&nbsp;c u d &#243; w&nbsp;&nbsp;d o k a &#380; &#261;.',
                        'description3' => '1) &#346;. &#321;ukasz 18, 11.<br/>
    2) &#346;. &#321;ukasz 1, 48.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1214',
                        'name' => 'XIV Grudnia',
                        'content' => 'O rozwadze w dzia&#322;aniu.',
                        'author' => '&#8222;Wiele, cz&#281;sto nawet dobrych rzeczy, opu&#347;ci&#263;, i takich, kt&#243;rychby czyni&#263; nie nale&#380;a&#322;o, byleby grzechem nie by&#322;y, uczyni&#263; mo&#380;na, przez wzgl&#261;d na ludzi, kt&#243;rym dopom&#243;dz chcemy.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden.)',
                        'description2' => 'Czy dobrem, czy z&#322;em jest co&#347;, nie tak rzecz sama, jak okoliczno&#347;ci wskazuj&#261;; w tych okoliczno&#347;ciach cz&#281;sto si&#281; z&#322;em staje, co w innych by&#322;oby zno&#347;nem, a jeszcze w innych pochwa&#322;y albo nagrody godnem. Nie wszystkich chorych jedno lekarstwo leczy; przy zapisywaniu ma si&#281; wzgl&#261;d na chorob&#281; i na chorego. Ma&#322;a na poz&#243;r rzecz wymaga zaraz zmiany. Podobnie, je&#347;li okoliczno&#347;&#263; jaka przeszkadza, &#380;eby to lub owo by&#322;o dobrem, wtedy przestaje by&#263; dobrem, owszem staje si&#281; z&#322;em. Z uszczerbkiem lub niepokojem innych chcie&#263; dobrze czyni&#263;, nie jest-to mi&#322;&#261; Bogu ofiar&#281; gotowa&#263;: poniewa&#380; B&#243;g jest mi&#322;o&#347;ci&#261;, przeto nic mu si&#281; nie podoba bez mi&#322;o&#347;ci. Milszy mu szel&#261;&#380;ek z pokojem, ni&#380; skarby ofiarowane z szemraniem wielu. Z&#322;otem jest mi&#322;o&#347;&#263;: jak od z&#322;ota, inne metale lub drzewo blasku, tak od mi&#322;o&#347;ci ma&#322;e czyny, owszem nawet takie, kt&#243;re prawie s&#261; niczem, warto&#347;ci nabieraj&#261;. T a k&nbsp;&nbsp;p o s t &#281; p u j,&nbsp;&nbsp;a b y &#347;&nbsp;&nbsp;n i k o m u&nbsp;&nbsp;p r z y c z y n y&nbsp;&nbsp;d o&nbsp;&nbsp;s &#322; u s z n e j&nbsp;&nbsp;o b r a z y&nbsp;&nbsp;n i e&nbsp;&nbsp;d a &#322;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1215',
                        'name' => 'XV Grudnia',
                        'content' => 'O milczeniu.',
                        'author' => '&#8222;S&#322;ucha&#263; &#322;atwiej jest, ni&#380; m&#243;wi&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Nolarci).',
                        'description2' => '&#379;adna ze sztuk nie wymaga tylu przepis&#243;w, ile sztuka dobrego m&#243;wienia; bo &#380;adna tylu nie podlega b&#322;&#281;dom: j&#281;zyk tyloma natura opatrzy&#322;a zaporami, na stra&#380;y postawi&#322;a usta i z&#281;by, aby rzadko si&#281; pokazywa&#322; i tem samem cz&#281;sto nie b&#322;&#261;dzi&#322;. Najbli&#380;ej j&#281;zyka umie&#347;ci&#322;a natura m&#243;zg, siedlisko rozumu, do patrzenia da&#322;a dwa oczy, aby tylko to wymawia&#322;, co si&#281; rozs&#261;dkiem zaleca i co si&#281; dobrze oczom przedstawi&#322;o. Ach! jakich&#380;e jedna mowa nierozwa&#380;na nie poruszy&#322;a wojen? jakich nie wszcz&#281;&#322;a po&#380;ar&#243;w? &#8212; leci niecofnione s&#322;owo i na kszta&#322;t wypuszczonego pocisku wielu rani. Od wielu niebezpiecze&#324;stw si&#281; uwolnisz, od wielu udr&#281;cze&#324;, je&#347;li si&#281; milczy&#263; nauczysz. Wielki zawsze u wszystkich dla milczenia by&#322; szacunek; ile milczenia, tyle ka&#380;demu wiary i powagi. D z i w n a&nbsp;&nbsp;r z e c z,&nbsp;&nbsp;&#380; e&nbsp;&nbsp;m y&nbsp;&nbsp;t a k&nbsp;&nbsp;j e s t e &#347; m y&nbsp;&nbsp;s k &#322; o n n i&nbsp;&nbsp;d o&nbsp;&nbsp;m &#243; w i e n i a,&nbsp;&nbsp;p o m i m o,&nbsp;&nbsp;&#380; e&nbsp;&nbsp;t o&nbsp;&nbsp;b a r d z o&nbsp;&nbsp;c z &#281; s t o&nbsp;&nbsp;z&nbsp;&nbsp;s z a c u n k u&nbsp;&nbsp;n a s&nbsp;&nbsp;u&nbsp;&nbsp;i n n y c h&nbsp;&nbsp;w y z u w a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1216',
                        'name' => 'XVI Grudnia',
                        'content' => 'O rozwadze w wyrokowaniu.',
                        'author' => '&#8222;&#377;le robi s&#281;dzia, gdy ca&#322;kiem wierzy oskar&#380;aj&#261;cemu, i bez wys&#322;uchania oskar&#380;onego, winnym go uznaje.&#8221;',
                        'description' => '(S. Ignat. apud Nolarci).',
                        'description2' => 'Nikt tak cz&#281;sto nie b&#322;&#261;dzi, jak &#322;atwowierny: potrzeba dobrze rozwa&#380;a&#263; rzeczy, o kt&#243;rych si&#281; dowiadujemy, zw&#322;aszcza, ile razy uw&#322;aczaj&#261; obcej s&#322;awie, i wiary im dop&#243;ty nie dawa&#263;, dop&#243;ki prawda nie jest jakby namacaln&#261;. Gdyby samo oskar&#380;enie wystarcza&#322;o, aby si&#281; kto&#347; uwa&#380;a&#322; za winnego, toby nikt niewinnym nie pozosta&#322;; zwyczaj m&#243;wienia o innych, s&#261;dzenia innych, tak bardzo si&#281; zakorzeni&#322;; i&#380; &#380;adna rzecz zdaje si&#281; nie wymaga&#263; wi&#281;kszej ostro&#380;no&#347;ci, nad oskar&#380;enie. &#377;li oszuka&#263;, dobrzy oszukani by&#263; mog&#261;; ani jednym, ani drugim nie nale&#380;y &#322;atwo wierzy&#263;. My sami, jak&#380;e cz&#281;sto si&#281; mylimy! jak&#380;e nietrudno, aby w rzeczy albo osobie b&#322;&#261;d si&#281; jaki ukrywa&#322;! &#321;atwiej si&#281; przebacza temu, kto p&#243;&#378;no, ni&#380; temu, kto po&#347;piesznie uwierzy&#322;. Bez wys&#322;uchania winnego, nic napewno stanowi&#263; nie mo&#380;na; je&#347;li pozwolili&#347;my m&#243;wi&#263; donosicielowi, nie odmawiajmy g&#322;osu i obwinionemu. Miejsce dla siebie mie&#263; musi i obrona, gdy rzecz niejasna wzi&#261;&#263; stron&#281; winnego nale&#380;y. K t o&nbsp;&nbsp;l u b i&nbsp;&nbsp;d o n i e s i e &#324;&nbsp;&nbsp;s &#322; u c h a &#263;,&nbsp;&nbsp;t e n&nbsp;&nbsp;p r z y j e m n o &#347; c i&nbsp;&nbsp;w&nbsp;&nbsp;b r u d a c h&nbsp;&nbsp;s z u k a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1217',
                        'name' => 'XVII Grudnia',
                        'content' => 'O radzeniu si&#281; Boga.',
                        'author' => '&#8222;Bez poradzenia si&#281; Boga nic nie nale&#380;y przedsi&#281;bra&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Ludov. Gonza.)',
                        'description2' => 'Ludzkie rady podw&#243;jnie zawodz&#261;: raz, &#380;e rzadko s&#261; szczere, powt&#243;re, &#380;e s&#322;abe; na tych tylko radach bez obawy oprze&#263; si&#281; mog&#281;, kt&#243;re od Najwy&#380;szego pochodz&#261;: bo tym ani na szczero&#347;ci zbywa&#263; nie mo&#380;e, ani na gruntowno&#347;ci. Wielu jest autor&#243;w dzie&#322;a niedoskona&#322;ego; bo wielu nie poradziwszy si&#281; nieba, dzie&#322;o swe rozpoczynaj&#261;; niech si&#281; nie spodziewa dobrego swych spraw ko&#324;ca, kto ich nie rozpoczyna od Boga, jako pierwszego wszystkich rzeczy pocz&#261;tku. Tego zaniedba&#263;, to znaczy pob&#322;&#261;dzi&#263;. Prosi&#263; nale&#380;y Boga, aby nam swego udzieli&#322; &#347;wiat&#322;a, bez kt&#243;rego wszyscy w g&#281;stych zostajemy ciemno&#347;ciach: nawet przed najm&#281;drszym pycha i mi&#322;o&#347;&#263; w&#322;asna niejedno zas&#322;ania. B&#243;g si&#281; &#347;mieje z naszych nierozwa&#380;nych przedsi&#281;wzi&#281;&#263;, gdy nam si&#281; zdaje &#380;e jak najpomy&#347;lniej id&#261;, wtedy zwykle upadaj&#261;, na niczem si&#281; ko&#324;cz&#261;. B i e r z&nbsp;&nbsp;n a u k &#281;&nbsp;&nbsp;z&nbsp;&nbsp;b a b i l o &#324; s k i c h&nbsp;&nbsp;b u d o w n i k &#243; w,&nbsp;&nbsp;n a&nbsp;&nbsp;c o&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;p r z y d a&nbsp;&nbsp;w b r e w&nbsp;&nbsp;w o l i&nbsp;&nbsp;B o g a&nbsp;&nbsp;b u d o w a &#263;&nbsp;&nbsp;w i e &#380; &#281;? <sup>1</sup>',
                        'description3' => '1) Genesis 11.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1218',
                        'name' => 'XVIII Grudnia',
                        'content' => 'O sile prawdy.',
                        'author' => '&#8222;Prawda zawsze ma sw&#243;j blask w&#322;a&#347;ciwy; gdy j&#261; k&#322;amstwo ciemno&#347;ciami zakrywa, to dla usuni&#281;cia tych&#380;e, sama prawdy obecno&#347;&#263; wystarcza.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 2).',
                        'description2' => 'Ci co k&#322;amstwami chc&#261; zatai&#263; prawd&#281;, nie innego nie czyni&#261;, tylko jakby paj&#281;cze sieci tkaj&#261;; napr&#243;&#380;no wysilaj&#261; sw&#243;j rozum, lada wiatr rozerwie &#378;le przez nich zastawione sieci. Jak ogie&#324; w zanadrzu, tak prawda w ukryciu d&#322;ugo by&#263; nie mo&#380;e. Wojn&#281; cedrom wiatry wypowiedzie&#263; mog&#261;, szumie&#263;, li&#347;cie porusza&#263;, ga&#322;&#281;zie ugina&#263;, zwyk&#322;&#261; cisz&#281; zam&#261;ci&#263; mog&#261;; ale z&#322;ama&#263; albo zupe&#322;nie wyrwa&#263; nie mog&#261;: podobnie siln&#261; jest prawda, wyrwa&#263; si&#281; nie da. Je&#347;li prawd&#281; masz po sobie, nietylko kogo&#347;, ale i wielu si&#281; nie l&#281;kaj; samo dobre sumienie zas&#322;oni ci&#281; przed tysi&#261;cami przeciwnik&#243;w, i wszystkie poczynione na ciebie zasadzki, gdy si&#281; uka&#380;&#261;, w niwec obr&#243;ci. Prawda ukrywa&#263; si&#281; nie zwyk&#322;a: przybytek sw&#243;j umie&#347;ci&#322;a na s&#322;o&#324;cu, lubi jawno&#347;&#263;, napr&#243;&#380;no j&#261; zas&#322;aniasz; nawet pomimo twej woli na widok wyjdzie prawda, je&#347;li j&#281;zyk zaprzeczy, to czo&#322;o, oczy, rumieniec zdradz&#261;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1219',
                        'name' => 'XIX Grudnia',
                        'content' => 'O mi&#322;o&#347;ci wzajemnej.',
                        'author' => '&#8222;Tego najbardziej przestrzegajcie, aby&#347;cie jeden o drugim dobrze trzymali, i jeden drugiego mi&#322;owali.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Mi&#322;o&#347;&#263; Boga bardzo daleko si&#281;ga; tyle ma mi&#322;o&#347;ci dodatkowych, ile ludzi; jak z oceanu rzeki, po wr&#243;ceniu do&#324;, znowu si&#281; rozchodz&#261;, tak ze szczerej mi&#322;o&#347;ci Boga, bardzo wiele pochodzi mi&#322;o&#347;ci, kt&#243;re si&#281; odnosz&#261; do Boga. Je&#347;li u przyjaci&#243;&#322; wszystko jest wsp&#243;lne, to i mi&#322;o&#347;ci powinny by&#263; wsp&#243;lne. Boga nie mi&#322;uje, kto tego samego, co i On nie mi&#322;uje. Patrz, jak wszechmocn&#261; jest mi&#322;o&#347;&#263; Boga! &#8212; zmusza wszystkich do mi&#322;o&#347;ci wszystkich. Mi&#322;o&#347;&#263; &#347;wiatowa, dla mi&#322;o&#347;ci jednego, nienawidzi wielu, obra&#380;a wszystkich, zawsze &#347;lepa: i wtedy gdy mi&#322;uje, i wtedy gdy nienawidzi. Mi&#322;o&#347;&#263; Boga wtedy lepiej mi&#322;uje jednego, gdy najczulej mi&#322;uje wszystkich, i gdy nienawi&#347;ci nie &#380;ywi ku nikomu, wtedy dowodzi, &#380;e tylko jednego prawdziwie mi&#322;uje. Natura chcia&#322;a, &#380;eby&#347;my byli lud&#378;mi, to jest, &#380;eby&#347;my byli towarzyskimi; nie inaczej za&#347; takimi b&#281;dziemy, tylko przy pomocy mi&#322;o&#347;ci, kto si&#281; z niej wyzuwa, ten &#347;ci&#261;ga na siebie &#243;w wyrok, &#380;e cz&#322;owiek dla cz&#322;owieka jest wilkiem: kto wierzga nog&#261; jak ko&#324;, ryczy jak lew, gryzie jak pies, bodzie rogiem jak w&#243;&#322;, ten nie jest cz&#322;owiekiem.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1220',
                        'name' => 'XX Grudnia',
                        'content' => 'O pob&#322;a&#380;liwo&#347;ci.',
                        'author' => '&#8222;Dla kogo nieu&#380;yteczn&#261; okaza&#322;a si&#281; &#322;askawo&#347;&#263;, dla tego mo&#380;e u&#380;yteczn&#261; b&#281;dzie surowo&#347;&#263;.&#8221;',
                        'description' => '(S. Ignat. apud Ribaden. l. 5 c. 7).',
                        'description2' => 'Jak surowo&#347;&#263;, tak i pob&#322;a&#380;anie, gdy miary nie zna, rozkazy w niwec obraca. Pob&#322;a&#380;anie matek wielu syn&#243;w o zgub&#281; przyprawi&#322;o, podczas gdy roztropna surowo&#347;&#263; ojca by&#322;aby ich ocali&#263; mog&#322;a. Z&#322;y zwierzchnik, pod kt&#243;rym nic nikomu nie wolno; gorszy, pod kt&#243;rym ka&#380;demu wszystko wolno. Kto si&#281; pob&#322;a&#380;liwo&#347;ci&#261; chce podoba&#263; swym podw&#322;adnym, ten si&#281; nie podoba Bogu, bo do wiela z&#322;ego otwiera drog&#281;, kt&#243;re p&#243;&#378;niej nie tak &#322;atwo mo&#380;e by&#263; wykorzenione. Za p&#243;&#378;na jest lekarza surowo&#347;&#263;, gdy rak opanowa&#322; ca&#322;e cia&#322;o. Tem wi&#281;ksze jest z&#322;e, im wi&#281;kszej liczbie os&#243;b szkodzi. Kto pob&#322;a&#380;a z&#322;ym, ten szkodzi wszystkim: z&#322;ym, poniewa&#380; si&#281; nie poprawiaj&#261;; innym, poniewa&#380; przed oczyma z&#322;e przyk&#322;ady maj&#261; i &#322;atwiej je na&#347;laduj&#261;. W i &#281; c e j&nbsp;&nbsp;p o b &#322; a &#380; l i w o &#347; &#263;,&nbsp;&nbsp;n i &#380;&nbsp;&nbsp;s u r o w o &#347; &#263;&nbsp;&nbsp;s z k &#243; d&nbsp;&nbsp;p r z y n o s i&nbsp;&nbsp;r z e c z y p o s p o l i t e j. Rana, kt&#243;raby &#322;atwo uleczy&#263; si&#281; mog&#322;a, skutkiem pob&#322;a&#380;liwo&#347;ci zaniedbana, staje si&#281; nieuleczaln&#261;. Straszna-to &#322;aska! gdy z&#322;e, kt&#243;re z pocz&#261;tku mo&#380;na by&#322;o poprawi&#263; najl&#380;ejszemi &#347;rodkami; z czasem &#380;elazem i ogniem &#8212; bodajby nie wiecznym &#8212; usuwa&#263; si&#281; musi!',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1221',
                        'name' => 'XXI Grudnia',
                        'content' => 'O nieobra&#380;aniu nikogo.',
                        'author' => '&#8222;Nikogo, ale tych najbardziej obra&#380;a&#263; nie nale&#380;y, kt&#243;rzy, gdyby byli naszymi przeciwnikami, mogliby nam zaszkodzi&#263; w s&#322;u&#380;bie Bo&#380;ej i w pracy oko&#322;o ludzkiego zbawienia.&#8221;',
                        'description' => '(S. Ignat. in Hist. Soc. l. 16).',
                        'description2' => 'Z trudno&#347;ci&#261; posuwa si&#281; &#322;&#243;d&#378; Piotrowa, gdy j&#261; silne powstrzymuj&#261; wiatry; w braku dzielnego sternika wielkie jej niebezpiecze&#324;stwo grozi. Przeciwnie, gdy wiatry s&#261; pomy&#347;lne, bardzo szybko p&#322;ynie. Na co si&#281; przyda osy dra&#378;ni&#263;? nie zabij&#261;, ale dokuczaj&#261;, i prac&#281;, kt&#243;r&#261;by na co&#347; lepszego mo&#380;na by&#322;o po&#347;wi&#281;ci&#263;, nale&#380;y obr&#243;ci&#263; na ich odganianie. S p r z e c i w i a n i e&nbsp;&nbsp;s i &#281;,&nbsp;&nbsp;&#347; c i e r a n i e,&nbsp;&nbsp;w i e l k i e g o&nbsp;&nbsp;p o &#380; y t k u&nbsp;&nbsp;n i e&nbsp;&nbsp;p r z y n o s i. Pora dla siej&#261;cego znaczy wiele: podobnie Bo&#380;ego s&#322;owa nasienie, wtedy setny zapewnia owoc, kiedy si&#281; w odpowiedniej porze i we w&#322;a&#347;ciwy spos&#243;b sieje. Jak przy ma&#322;ych zdolno&#347;ciach nie wiele si&#281; nauczysz, tak bez pomocy Boga, po zagniewaniu na siebie Boga, po straceniu Jego &#322;aski, a zatem o maluczkich si&#322;ach w&#322;asnych, w doskona&#322;o&#347;ci nic nie post&#261;pisz, ani sobie ani drugim nieba nie zapewnisz. P o m n i j&nbsp;&nbsp;n a&nbsp;&nbsp;t o! Wi&#281;cej po&#380;ytkowi dusz jeden zaszkodzi&#263;, ni&#380; stu pom&#243;dz mo&#380;e, zw&#322;aszcza, je&#347;li ten kt&#243;ry bru&#378;dzi, w dostatki obfituje, znaczenie ma. R&#243;b co mo&#380;esz, nie coby&#347; chcia&#322;. Lepiej jest ma&#322;ym, ale pewnym zyskiem si&#281; zadawalnia&#263;, ni&#380; za wielkim goni&#263;, ale w&#261;tpliwym i z niebezpiecze&#324;stwami po&#322;&#261;czonym.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1222',
                        'name' => 'XXII Grudnia',
                        'content' => 'O pokucie.',
                        'author' => '&#8222;Tak nale&#380;y pokutowa&#263;, aby w sercu skrucha, w ustach wyznanie, a w uczynku zado&#347;&#263;uczynienie by&#322;o.&#8221;',
                        'description' => '(S. Ignat. in Ms. Catech).',
                        'description2' => 'Wielka-to rzecz pokuta! &#322;atwiej jest dusz&#281; niewinn&#261; od zbrodni uchroni&#263;, ni&#380; stosown&#261; za zbrodni&#281; pokut&#281; uczyni&#263;. Ma i krokodyl &#322;zy swoje; nie na ich obfito&#347;&#263;, ale na ich prawdziwo&#347;&#263; zwa&#380;a&#263; potrzeba, nie ile, ale jakie s&#261;? Pokuta od zbrodni mniejsz&#261; by&#263; nie powinna; ile w sobie grzesznik dozna&#322; uciech, tyle ze siebie uczyni&#263; winien ofiar: owszem, ca&#322;y cz&#322;owiek po&#347;wi&#281;ci&#263; si&#281; winien Bogu przez pokut&#281;, poniewa&#380; ca&#322;y Go obra&#380;a przez grzech. &#379;e&#347; zbrodni&#281; pope&#322;ni&#322;, to wiesz; ale czy&#347; przez swoj&#261; pokut&#281; zadosy&#263;uczyni&#322;, tego wiedzie&#263; nie mo&#380;esz; dlatego nigdy nie potrzeba ustawa&#263; w pokucie, &#380;al &#380;e si&#281; obrazi&#322;o dobrego Boga, nie pr&#281;dzej a&#380; z &#380;yciem niech si&#281; ko&#324;czy. Czemu&#380; zwlekasz ze swem nawr&#243;ceniem ku Panu? czy ci tak mi&#322;&#261; jest niewola szatana? je&#347;li w nadziei przebaczenia zbrodni&#281; do zbrodni przydajesz, to l&#281;kaj si&#281;, aby&#347; przed jej otrzymaniem nie zgin&#261;&#322;. P o k u t a,&nbsp;&nbsp;k t &#243; r &#261;&nbsp;&nbsp;s &#322; a b y&nbsp;&nbsp;c z y n i,&nbsp;&nbsp;j e s t&nbsp;&nbsp;s &#322; a b a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1223',
                        'name' => 'XXIII Grudnia',
                        'content' => 'O potrzebie &#347;wiat&#322;a z nieba.',
                        'author' => '&#8222;Ca&#322;y porz&#261;dek i spos&#243;b wyboru, Duch &#346;wi&#281;ty, kt&#243;ry do wyboru pobudza, &#322;atwo dope&#322;ni.&#8221;',
                        'description' => '(S. Ignat. p. 8 c. 6).',
                        'description2' => 'Szczeg&#243;lnym mistrzem jest Duch &#346;wi&#281;ty, ani regu&#322;ami, ani przyk&#322;adami kr&#281;powa&#263; si&#281; nie pozwala; dzia&#322;a gdzie i jak chce. Co wiatrowi, to tak&#380;e Boskiemu p&#322;omieniowi jest w&#322;a&#347;ciwem, &#380;e zk&#261;d przychodzi i dok&#261;d idzie, niewiemy. Szcz&#281;&#347;liwy! kto mu si&#281; kierowa&#263; pozwala. Do&#347;wiadczajcie ducha, czy z Boga jest? Nie wszystko, co si&#281; &#347;wi&#281;tem wydaje, &#347;wi&#281;tem jest w istocie; cz&#281;sto pod mask&#261; pobo&#380;no&#347;ci, ukrywa&#263; si&#281; mo&#380;e bezbo&#380;no&#347;&#263;: k t &#243; &#380;&nbsp;&nbsp;w y j a &#347; n i? Rozum nasz za s&#322;aby, aby w rzeczach odnosz&#261;cych si&#281; do Boga, duszy i wieczno&#347;ci, na pewno m&#243;g&#322; co&#347; wybra&#263;: potrzeba prosi&#263; o &#347;wiat&#322;o z nieba, potrzeba serce dla Ducha &#346;wi&#281;tego przygotowa&#263;. Rozum nasz za s&#322;aby, aby w rzeczach odnosz&#261;cych si&#281; do Boga, duszy i wieczno&#347;ci na pewno m&#243;g&#322; co&#347; wybra&#263;: potrzeba prosi&#263; o &#347;wiat&#322;o z nieba, potrzeba serce dla Ducha &#346;wi&#281;tego przygotowywa&#263;. Jak go&#322;&#281;bie tylko bia&#322;e dachy lubi&#261;, tak czysto&#347;&#263; duszy najlepszem jest przygotowaniem na przyj&#281;cie &#347;wiat&#322;a Bo&#380;ej &#322;aski, &#347;wiat&#322;a, bez kt&#243;rego wszelka m&#261;dro&#347;&#263; ludzka ciemnieje, najwi&#281;kszy geniusz utyka.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1224',
                        'name' => 'XXIV Grudnia',
                        'content' => 'O roztropno&#347;ci.',
                        'author' => '&#8222;Niewinno&#347;&#263; &#380;ycia i &#347;wi&#281;to&#347;&#263; wiele sama przez si&#281; znaczy, i wszystkie inne rzeczy si&#322;a przewy&#380;sza, ale je&#347;li z roztropno&#347;ci&#261; i umiej&#281;tno&#347;ci&#261; wychodzenia z lud&#378;mi nie jest po&#322;&#261;czona, s&#322;ab&#261; i niedok&#322;adn&#261; b&#281;dzie.&#8221;',
                        'description' => '(S. Ignat. vitae l. 5. c. 10).',
                        'description2' => 'Z&#322;oto ma swoj&#261; warto&#347;&#263; nawet gdy si&#281; we wn&#281;trzu g&#243;r ukrywa; ale mniejsz&#261;, ni&#380; gdy ludziom na u&#380;ytek s&#322;u&#380;y: tak i &#347;wi&#281;to&#347;&#263; ma sw&#243;j u&#380;ytek domowy, ukryty, ale poza domem wtedy dopiero zaczyna by&#263; po&#380;yteczn&#261;, gdy si&#281; innym udziela, gdy w innnych cnot&#281;, w kt&#243;r&#261; sama jest bogata, wpaja. Na co si&#281; przyda mie&#263; pe&#322;en sklep najlepszych towar&#243;w, je&#347;li ich na sprzeda&#380; nie wystawiasz? Pozostan&#261; ukryte i &#380;adnego zysku nie przynios&#261;. Kto umie lepiej swoje rzeczy sprzeda&#263;, ten lepszy ma zarobek. Dlatego B&#243;g ci&#281; opatrzy&#322; darami swej &#322;aski, aby si&#281; te i innym dostawa&#322;y. Je&#347;li ponura i przykra jest twoja &#347;wi&#281;to&#347;&#263;, to nietylko od siebie, ale i od zami&#322;owania cnoty oddalasz ludzi; pomy&#347;l&#261;, &#380;e ona jest powodem smutku, gdy przeciwnie ona jest matk&#261; prawdziwej rado&#347;ci: i nikt tak szczerze cieszy&#263; si&#281; nie mo&#380;e, jak ten, kto jest dobry, poczciwy, szlachetny. Twarz pogodna, mowa uprzejma, oko &#322;askawe, obej&#347;cie si&#281; ujmuj&#261;ce, gdy ze &#347;wi&#281;to&#347;ci&#261; s&#261; po&#322;&#261;czone, to najlepiej mog&#261; do cnoty zach&#281;ci&#263;, w cnocie utwierdzi&#263;. Bez tego napr&#243;&#380;no b&#281;dziesz wzywa&#322; do post&#281;powania za sob&#261; tych, kt&#243;rych twarz&#261; pos&#281;pn&#261;, surow&#261;, zmuszasz do ucieczki.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1225',
                        'name' => 'XXV Grudnia',
                        'content' => 'O s&#322;u&#380;eniu Bogu.',
                        'author' => '&#8222;Je&#347;li si&#281; kto&#347; na dworze kr&#243;lewskim znajduje i aby wzgl&#281;dy kr&#243;la zyska&#322;, daleko gorliwiej mu s&#322;u&#380;y, ni&#380; wy, aby&#347;cie si&#281; stali mi&#322;ymi Niebieskiemu Kr&#243;lowi, to si&#281; za bezrozumnych i wzgardy godnych uwa&#380;ajcie.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 4).',
                        'description2' => 'Najwi&#281;ksze &#347;wiata szcz&#281;&#347;cie wtedy ju&#380; si&#281; ko&#324;czy, gdy kto na dw&#243;r kr&#243;lewski wzi&#281;ty, kr&#243;lewskim ministrem zostaje. Ile&#380;-to zabieg&#243;w potrzeba, ile usi&#322;owa&#324;? Oto je&#347;li chcesz, B&#243;g ci u siebie, na dworze swoim, nier&#243;wnie zaszczytniejsz&#261; ofiaruje s&#322;u&#380;b&#281;. O ile ziemskiego kr&#243;la chwa&#322;&#281;, przewy&#380;sza wiecznego majestat, o tyle temu bardziej ni&#380; tamtemu s&#322;u&#380;y&#263; winiene&#347;, i o tyle ta od tamtej s&#322;u&#380;ba jest zaszczytniejsza. Z w a &#380;&nbsp;&nbsp;t y l k o. Kr&#243;l r&#243;wnie jak ty z m&#243;&#322;u ziemi jest utworzony, podobnym jak ty kolejom losu podlega, podobnie jak ty w proch si&#281; obr&#243;ci: B&#243;g w swym majestacie jest wieczny i niezmienny. P a t r z,&nbsp;&nbsp;c o&nbsp;&nbsp;k o m u&nbsp;&nbsp;w i n i e n e &#347;! B&#243;g si&#281; sta&#322; cz&#322;owiekiem, aby ci&#281; do post&#281;powania za sob&#261;, do s&#322;u&#380;enia sobie bardziej pobudzi&#322;. Albo wiary w nas nie ma, albo na niezwyk&#322;e kary piek&#322;a zas&#322;ugujemy, &#380;e takiemu Panu tak opieszale s&#322;u&#380;ymy. S&#322;u&#380;ba nasza dla Niego nie jest bez zap&#322;aty; za troch&#281; trudu, p&#322;aci wieczn&#261; nagrod&#261;.  W s t y d,&nbsp;&nbsp;w s t y d&nbsp;&nbsp;w i e l k i&nbsp;&nbsp;d l a&nbsp;&nbsp;n a s,&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;z a&nbsp;&nbsp;p o &#380; y t k a m i&nbsp;&nbsp;d o c z e s n e m i&nbsp;&nbsp;t a k&nbsp;&nbsp;g o n i m y,&nbsp;&nbsp;a&nbsp;&nbsp;o&nbsp;&nbsp;w i e c z n e&nbsp;&nbsp;t a k&nbsp;&nbsp;n i e d b a m y.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1226',
                        'name' => 'XXVI Grudnia',
                        'content' => 'O wychodzeniu wszystkiego na wierzch.',
                        'author' => '&#8222;Wszystkie s&#322;owa twoje i czyny na wierzch wyp&#322;yn&#261;, my&#347;l o tem, &#380;e co w skryto&#347;ci powiedzia&#322;e&#347;, to na jaw wyjdzie!&#8221;',
                        'description' => '(S. Ignat. in histor. Soc. l. 13).',
                        'description2' => 'Oczy ludzkie s&#261; nadzwyczaj przenikliwe, nic si&#281; przed niemi nie ukryje, to co&#347;my uwa&#380;ali za pogrzebane w&#347;r&#243;d &#347;cian domowych, z czasem na jaw wyjdzie; nie ma takiej skrytki, gdzieby szczelina jaka&#347; oczom przyst&#281;pu nie da&#322;a. Gdzie nie mo&#380;e oko, tam przenika podejrzenie, kt&#243;re je&#347;li raz powsta&#322;o, nie spocznie, ale jak chart dop&#243;ty tropi&#263; b&#281;dzie, dop&#243;ki zdobyczy nie osi&#261;gnie. Ciekawo&#347;&#263; ludzka jest nienasycon&#261;, roztrz&#261;sa wszystko, &#347;ledzi za wszystkiem, wywiaduje si&#281; dop&#243;ty, dop&#243;ki si&#281; o rzeczach tajemnych nie dowie. Rzucone w ziemi&#281; zbo&#380;e chowa si&#281; wprawdzie, ale do czasu, po up&#322;ywie kt&#243;rego, zwolna, w postaci kie&#322;ka wychodzi na wierzch. Podobnie i to co przyjacielowi powierzysz, chocia&#380;by w najwi&#281;kszej tajemnicy, na jaw si&#281; wydostanie. Mi&#322;uj jakby&#347; w przysz&#322;o&#347;ci mia&#322; nienawidzie&#263;; a gdy ci&#281; mi&#322;uj&#261;, to my&#347;l, &#380;e ci&#281; kiedy&#347; b&#281;d&#261; nienawidzie&#263;: tak siebie i swoj&#261; w&#322;asno&#347;&#263; powierzaj przyjacielowi, aby nawet gdy zechce szkodzi&#263; ci nie m&#243;g&#322;. I m g w a &#322; t o w n i e j s z &#261; j e s t m i &#322; o &#347; &#263;, t e m p r &#281; d z e j i w tem w i &#281; k s z &#261; z a m i e n i a s i &#281; n i e n a w i &#347; &#263;.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1227',
                        'name' => 'XXVII Grudnia',
                        'content' => 'O boja&#378;liwo&#347;ci.',
                        'author' => '&#8222;Zbyt ostro&#380;ni w rzeczach Bo&#380;ych rzadko co&#347; wielkiego i znakomitego przedsi&#281;bior&#261;; bo gdy si&#281; w czem jaka trudno&#347;&#263; przedstawia, to ju&#380; r&#281;ki do tego nie przy&#322;o&#380;&#261;, l&#281;kaj&#261; si&#281;.&#8221;',
                        'description' => '(S. Ignat. apud Nolar. c. ult.)',
                        'description2' => 'Kto na wichry zwa&#380;a, ten si&#281; ani na morze nic puszcza, ani sieje, boby go jakie niebezpiecze&#324;stwo albo i &#347;mier&#263; spotka&#263; mog&#322;a. Przy takiej boja&#378;liwo&#347;ci, tch&#243;rzostwie powiem, na nic si&#281; nigdy nie odwa&#380;ysz. Dzieckiem jest, kogo lada cie&#324; przera&#380;a; cz&#322;owiek dojrzalszy wiekiem i cnot&#261;, nier&#243;wnie wi&#281;cej ma odwagi. Cz&#281;&#347;ciej wyobra&#378;nia ni&#380; trudno&#347;&#263; wstrzymuje nas od dzia&#322;ania. Zawsze si&#281; zabieraj&#261;c, nigdy nie rozpoczynamy. Mo&#380;e niebezpiecze&#324;stwo, kt&#243;rego si&#281; tak l&#281;kamy, nigdy nie nast&#261;pi, dlaczego si&#281; przed czasem dr&#281;czymy? Byliby&#347;my szcz&#281;&#347;liwi, gdyby&#347;my zamiast obawy &#380;ywili w sobie nadziej&#281;. Nikt nam tyle nie przeszkadza, ile my sami sobie; gdy zbyt m&#261;drymi by&#263; chcemy, rozum tracimy. Napr&#243;&#380;no si&#281; dr&#281;czysz, za s&#322;ab&#261; jest ludzka przenikliwo&#347;&#263;, aby wszystko przewidzie&#263; mog&#322;a; czem si&#281; tak niepokoisz, to nigdy nie nast&#261;pi; mo&#380;e si&#281; sta&#263; co innego, o czem ani pomy&#347;la&#322;e&#347;. N a l e &#380; y&nbsp;&nbsp;c o &#347;&nbsp;&nbsp;z o s t a w i &#263;&nbsp;&nbsp;B o s k i e j&nbsp;&nbsp;O p a t r z n o &#347; c i&nbsp;&nbsp;i&nbsp;&nbsp;z&nbsp;&nbsp;n a d z i e i&nbsp;&nbsp;s i &#281;&nbsp;&nbsp;n i e&nbsp;&nbsp;w y z u w a &#263;,&nbsp;&nbsp;n i e&nbsp;&nbsp;o d p y c h a &#263;&nbsp;&nbsp;j e j&nbsp;&nbsp;o d&nbsp;&nbsp;s i e b i e.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1228',
                        'name' => 'XXVIII Grudnia',
                        'content' => 'O radach.',
                        'author' => '&#8222;Po roztrz&#261;&#347;nieniu i postanowieniu ju&#380; rzeczy, noc ostatni&#261; winna da&#263; rad&#281;.&#8221;',
                        'description' => '(S. Ignat. apud Bart. l. 3).',
                        'description2' => 'Roztropno&#347;&#263; nie by&#322;aby cnot&#261;, gdyby wszystko co nam na my&#347;l przyjdzie, by&#322;o rad&#261;; jak pi&#281;knie wtedy wszystko, jak rozwa&#380;nieby si&#281; odbywa&#322;o; ale jak nie ka&#380;da g&#322;owa jest Minerw&#261;, tak i nie ka&#380;da my&#347;l jest rad&#261;. Rady, aby bezpiecznie na nich poledz mo&#380;na by&#322;o, po&#347;pieszne niech nie b&#281;d&#261;; co si&#281; bowiem przedsi&#281;bierze bez namys&#322;u, to zwykle bywa niedobre. Jak pochodnia pochodni przydaje &#347;wiat&#322;a, tak i my&#347;l my&#347;l&#261; si&#281; roz&#347;wieca, aby&#347; ja&#347;niej widzia&#322;, co czyni&#263; nale&#380;y. Niejedno przez po&#347;piech uwa&#380;asz za s&#322;uszne, co po zastanowieniu si&#281; pot&#281;pisz. Cz&#281;sto nami&#281;tno&#347;&#263; za&#347;lepia umys&#322;, w skutek tego s&#261;d o rzeczach staje si&#281; spaczonym: w miar&#281; jak nami&#281;tno&#347;&#263; s&#322;abnie, &#347;wiat&#322;a nam przybywa. Nie ka&#380;da chwila jest szcz&#281;&#347;liw&#261;. Niekt&#243;re dnie s&#261; fatalne, wszystko na nasz&#261; zgub&#281; jakby si&#281; sprzysi&#281;ga, wtedy si&#281; wstrzymajmy z wype&#322;nieniem tego lub owego zamiaru, po przej&#347;ciu nocy, mo&#380;e szcz&#281;&#347;liwszy dzie&#324; zab&#322;y&#347;nie. C o&nbsp;&nbsp;o d &#322; o &#380; y m y,&nbsp;&nbsp;t o&nbsp;&nbsp;z r o b i &#263;&nbsp;&nbsp;m o &#380; n a;&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;&#378; l e&nbsp;&nbsp;c o &#347;&nbsp;&nbsp;z r o b i m y,&nbsp;&nbsp;t o&nbsp;&nbsp;n i e&nbsp;&nbsp;z a w s z e&nbsp;&nbsp;z m i e n i &#263;&nbsp;&nbsp;m o &#380; n a.',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1229',
                        'name' => 'XXIX Grudnia',
                        'content' => 'O lenistwie.',
                        'author' => '&#8222;Lenistwo jest wszystkiego z&#322;ego pocz&#261;tkiem; o ile z nas, chro&#324;my si&#281; go bardzo.&#8221;',
                        'description' => '(S. Ignat. p. 3 c. 1).',
                        'description2' => 'Adama dzie&#263;mi jeste&#347;my, nie zapominajmy co si&#281; nam w dziedzictwie dosta&#322;o, &#380;e w pocie czo&#322;a chleb nasz po&#380;ywa&#263; mamy. K t o&nbsp;&nbsp;n i e&nbsp;&nbsp;p r a c u j e,&nbsp;&nbsp;n i e c h&nbsp;&nbsp;n i e&nbsp;&nbsp;j e, m&#243;wi Aposto&#322; <sup>1</sup>. Napr&#243;&#380;no si&#281; spodziewasz, &#380;e za nadej&#347;ciem wieczora otrzymasz zap&#322;at&#281;, je&#347;li w winnicy nie pracujesz. Cz&#322;owiek rodzi si&#281; do pracy; nic nie robi&#263;, to tyle znaczy co nie &#380;y&#263;. &#379;ycie cia&#322;a na ruchu polega, je&#347;li puls ustaje, oddechu nie ma, to ju&#380; po &#380;yciu; tak i dusza nie uwa&#380;a si&#281; za &#380;yw&#261;, je&#347;li nie robi tego, co powinna. Czas &#243;w za stracony uwa&#380;a&#263; nale&#380;y, kt&#243;rego&#347;my na po&#380;ytek duszy nie obr&#243;cili. Nie ka&#380;dy co d&#322;ugo by&#322;, d&#322;ugo &#380;y&#322;. Starzec wyst&#281;pny ze wzgl&#281;du na cnot&#281; dzieckiem jest; m&#322;odzieniec cnotliwy, pomimo &#380;e nie wiele lat liczy&#322;, d&#322;ugo jednak &#380;y&#322;. W naturze nic nie stoi. Wszystko jest w ruchu, p&#322;yn&#261; wody, kr&#261;&#380;&#261; gwiazdy, wydobywa si&#281; ogie&#324;; dla nauki naszej, aby&#347;my w gnu&#347;no&#347;ci i lenistwie nie p&#281;dzili czasu, ale skoro nam dopisuje, aby&#347;my czynili dobrze, &#380;yli cnotliwie.',
                        'description3' => '1) II Tesal. 3, 10.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1230',
                        'name' => 'XXX Grudnia',
                        'content' => 'O stosowaniu si&#281; do natchnie&#324; dobrych.',
                        'author' => '&#8222;Jak z jednej strony wielk&#261; w niebie otrzyma nagrod&#281;, kto oddala od siebie my&#347;l z&#322;&#261;; tak z drugiej strony na wielkie wystawia si&#281; niebezpiecze&#324;stwo popadni&#281;cia w grzechy, kto gardzi natchnieniami dobremi.&#8221;',
                        'description' => '(S. Ignat. apud Nolar. c. ult).',
                        'description2' => 'B&#243;g &#322;ask&#281; ofiaruje, nie narzuca; do dobrego zaprasza, nie zmusza; je&#347;li Go kto upornie odrzuca, c&#243;&#380; dziwnego, &#380;e bywa nawzajem odrzucony? T a k&nbsp;&nbsp;o n&nbsp;&nbsp;n a s&nbsp;&nbsp;n a w i e d z a,&nbsp;&nbsp;j a k&nbsp;&nbsp;m y&nbsp;&nbsp;G o&nbsp;&nbsp;c z c i m y. Kto gardzi ofiarowanem dobrodziejstwem, ten nie na &#322;ask&#281;, ale na nienawi&#347;&#263; zas&#322;uguje; gdy pierwsze ch&#281;tnie przyjmuje, ju&#380; tem samem nast&#281;pne sobie przysposabia. Najlepsz&#261; dobrodziejstwa nagrod&#261; jest wdzi&#281;czno&#347;&#263;. Pilnie zwa&#380;a&#263; potrzeba na natchnienia: s&#261; to warunki, do kt&#243;rych B&#243;g twoje zbawienie przywi&#261;za&#322;; je&#347;li ich zaniedbasz, zgin&#261;&#322;e&#347;, nie z Boskiej niehojno&#347;ci, ale z w&#322;asnej opiesza&#322;o&#347;ci. D z i &#347;,&nbsp;&nbsp;j e &#347; l i&nbsp;&nbsp;g &#322; o s&nbsp;&nbsp;P a n a&nbsp;&nbsp;u s &#322; y s z y c i e,&nbsp;&nbsp;n i e&nbsp;&nbsp;z a t w a r d z a j c i e &#380;&nbsp;&nbsp;s e r c&nbsp;&nbsp;w a s z y c h <sup>1</sup>. Gdy sztuka B&#243;g do drzwi, gdy ucho cuci, nie zatulaj ucha serca; je&#347;li napomina, Ojciec jest; je&#347;li grozi, Pan jest, zawsze Zbawiciel, o twojem szcz&#281;&#347;ciu my&#347;l&#261;cy, rzeknij: M &#243; w&nbsp;&nbsp;P a n i e,&nbsp;&nbsp;b o&nbsp;&nbsp;s &#322; u c h a&nbsp;&nbsp;s &#322; u g a&nbsp;&nbsp;T w &#243; j <sup>2</sup>.',
                        'description3' => '1) Psalm 94, 9.<br/>
    2) I Samuela 3, 9.',
                    ]
                ],
                [
                    'data' => [
                        'code' => 'DICTA_IL_1231',
                        'name' => 'XXXI Grudnia',
                        'content' => 'O wdzi&#281;czno&#347;ci.',
                        'author' => '&#8222;Chwa&#322;a niech b&#281;dzie i dzi&#281;ki Stw&#243;rcy naszemu, z kt&#243;rego hojno&#347;ci wszystkie dary na nas sp&#322;ywaj&#261;.&#8221;',
                        'description' => '(S. Ignat. in Epist. ad Hisp.)',
                        'description2' => 'Wi&#281;cej liczyliby&#347;my &#322;ask, gdyby&#347;my byli wdzi&#281;czniejsi: wdzi&#281;czno&#347;&#263; za jedno dobrodziejstwo wywo&#322;uje drugie. Pragnie ten dobrze czyni&#263;, kto ca&#322;y jest dobroci&#261;, ca&#322;y hojno&#347;ci&#261;. Policz gwiazdy, je&#347;li mo&#380;esz; i policz &#322;aski, chocia&#380;by w tym dniu lub w tym roku otrzymane. I c&#243;&#380; nam winien Najwy&#380;szy? da&#322; &#322;aski wprz&#243;d nime&#347;my na nie zas&#322;u&#380;yli lub po&#380;&#261;da&#263; ich mogli; daje dotychczas, a jak&#380;e je sp&#322;acamy? daje nie czekaj&#261;c, daje darmo, bez liku, hojnie. Wielko&#347;&#263; dobrodziejstwa i to powi&#281;ksza, &#380;e tak ma&#322;ym ziemi robaczkom, owszem tak niewdzi&#281;cznym, niesfornym, niech&#281;tnym dobrze czyni, i, co wszelkie poj&#281;cie przechodzi, chocia&#380; jest obra&#380;any, dobrze czyni&#263; nie przestaje. Pomy&#347;lmy, &#380;e nawet dzikie zwierz&#281;ta oswajaj&#261; si&#281; dobrodziejstwami! C&#243;&#380; dasz Panu za wszystko? je&#347;li siebie, je&#347;li to co masz, dasz; nic nie dasz, ale oddasz, co jego jest. D a j&nbsp;&nbsp;t e n&nbsp;&nbsp;r o k,&nbsp;&nbsp;d a j&nbsp;&nbsp;p r z y s z &#322; y,&nbsp;&nbsp;d a j&nbsp;&nbsp;c a &#322; &#261;&nbsp;&nbsp;B o g u&nbsp;&nbsp;w i e c z n o &#347; &#263;&nbsp;&nbsp;i&nbsp;&nbsp;c z y &#324;&nbsp;&nbsp;w s z y s t k o: NA WI&#280;KSZ&#260; CHWA&#321;&#280; BOGA!',
                        'description3' => ''
                    ]
                ]
            ]
        ]
    ];

    /**
     * @inheritDoc
     */
    public function execute(string $language = Language::LANGUAGE_PL): void
    {
        $this->install(self::CUSTOM_QUOTES_MAXIMES_OF_IGNACY_LOYOLA);
    }
}

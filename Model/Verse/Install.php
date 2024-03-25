<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Verse;

use JaroslawZielinski\TorahVerse\Model\GroupManagement;
use JaroslawZielinski\TorahVerse\Model\GroupFactory;
use JaroslawZielinski\TorahVerse\Api\VerseRepositoryInterface;
use JaroslawZielinski\TorahVerse\Model\VerseFactory;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders\Language;

class Install
{
    /**
     * @var GroupFactory
     */
    private $groupFactory;

    /**
     * @var GroupManagement
     */
    private $groupManagement;

    /**
     * @var VerseFactory
     */
    private $verseFactory;

    /**
     * @var VerseRepositoryInterface
     */
    private $verseRepository;

    private const CUSTOM_GROUPS_AND_VERSES_PL = [
        [
            'data' => [
                'name' => 'Boję się',
                'code' => 'CGAV_001',
                'colour_value' => '#5020df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_001',
                        'name' => 'Nie bójcie się tych, którzy zabijają ciało',
                        'siglum' => 'bw/mt/10/28',
                        'content' => '(28) I nie bójcie się tych, którzy zabijają ciało, ale duszy zabić nie mogą; bójcie się raczej tego, który może i duszę i ciało zniszczyć w piekle.',
                        'unordered' => 'I nie bójcie się tych, którzy zabijają ciało, ale duszy zabić nie mogą; bójcie się raczej tego, który może i duszę i ciało zniszczyć w piekle.',
                        'description' => 'Ewangelia Mateusza 10:28, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_002',
                        'name' => 'Bójcie się raczej tego, który może i duszę i ciało zniszczyć w piekle',
                        'siglum' => 'bw/jas/4/12',
                        'content' => '(12) Jeden jest zakonodawca i sędzia, Ten, który może zbawić i zatracić. Ty zaś kim jesteś, że osądzasz bliźniego?',
                        'unordered' => 'Jeden jest zakonodawca i sędzia, Ten, który może zbawić i zatracić. Ty zaś kim jesteś, że osądzasz bliźniego?',
                        'description' => 'List Jakuba 4:12, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_003',
                        'name' => 'Nie mamy ducha bojaźni',
                        'siglum' => 'bw/2tm/1/7',
                        'content' => '(7) Albowiem nie dał nam Bóg ducha bojaźni, lecz mocy i miłości, i powściągliwości.',
                        'unordered' => 'Albowiem nie dał nam Bóg ducha bojaźni, lecz mocy i miłości, i powściągliwości.',
                        'description' => '2 List do Tymoteusza 1:7, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_004',
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'bw/hebr/13/5-6',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Jestem niespokojny',
                'code' => 'CGAV_002',
                'colour_value' => '#7020df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_005',
                        'name' => 'O nic się nie martwcie',
                        'siglum' => 'bw/mt/6/19-34',
                        'content' => '(19) Nie gromadźcie sobie skarbów na ziemi, gdzie je mól i rdza niszczą i gdzie złodzieje podkopują i kradną; (20) ale gromadźcie sobie skarby w niebie, gdzie ani mól, ani rdza nie niszczą i gdzie złodzieje nie podkopują i nie kradną. (21) Albowiem gdzie jest skarb twój - tam będzie i serce twoje. (22) Światłem ciała jest oko. Jeśli tedy oko twoje jest zdrowe, całe ciało twoje jasne będzie. (23) A jeśliby oko twoje było chore, całe ciało twoje będzie ciemne. Jeśli tedy światło, które jest w tobie, jest ciemnością, sama ciemność jakaż będzie! (24) Nikt nie może dwom panom służyć, gdyż albo jednego nienawidzić będzie, a drugiego miłować, albo jednego trzymać się będzie, a drugim pogardzi. Nie możecie Bogu służyć i mamonie. (25) Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? (26) Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? (27) A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? (28) A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. (29) A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. (30) Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? (31) Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? (32) Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. (33) Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. (34) Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'unordered' => 'Nie gromadźcie sobie skarbów na ziemi, gdzie je mól i rdza niszczą i gdzie złodzieje podkopują i kradną; ale gromadźcie sobie skarby w niebie, gdzie ani mól, ani rdza nie niszczą i gdzie złodzieje nie podkopują i nie kradną. Albowiem gdzie jest skarb twój - tam będzie i serce twoje. Światłem ciała jest oko. Jeśli tedy oko twoje jest zdrowe, całe ciało twoje jasne będzie. A jeśliby oko twoje było chore, całe ciało twoje będzie ciemne. Jeśli tedy światło, które jest w tobie, jest ciemnością, sama ciemność jakaż będzie! Nikt nie może dwom panom służyć, gdyż albo jednego nienawidzić będzie, a drugiego miłować, albo jednego trzymać się będzie, a drugim pogardzi. Nie możecie Bogu służyć i mamonie. Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'description' => 'Ewangelia Mateusza 6:19-34, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_006',
                        'name' => 'Nie troszczcie się o nic',
                        'siglum' => 'bw/php/4/6',
                        'content' => '(6) Nie troszczcie się o nic, ale we wszystkim w modlitwie i błaganiach z dziękczynieniem powierzcie prośby wasze Bogu.',
                        'unordered' => 'Nie troszczcie się o nic, ale we wszystkim w modlitwie i błaganiach z dziękczynieniem powierzcie prośby wasze Bogu.',
                        'description' => 'List do Filipian 4:6, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_007',
                        'name' => 'Wszelką troskę złóż na Jezusa Chrystusa',
                        'siglum' => 'bw/1pe/5/6-7',
                        'content' => '(6) Ukórzcie się więc pod mocną rękę Bożą, aby was wywyższył czasu swego. (7) Wszelką troskę swoją złóżcie na niego, gdyż On ma o was staranie.',
                        'unordered' => 'Ukórzcie się więc pod mocną rękę Bożą, aby was wywyższył czasu swego. Wszelką troskę swoją złóżcie na niego, gdyż On ma o was staranie.',
                        'description' => '1 List Piotra 5:6-7, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Updam w wierze',
                'code' => 'CGAV_003',
                'colour_value' => '#208fdf'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_008',
                        'name' => 'Wyznawajmy grzechy swoje',
                        'siglum' => 'bw/1jn/1/4-9',
                        'content' => '(4) A to piszemy, aby radość nasza była pełna. (5) A zwiastowanie to, które słyszeliśmy od niego i które wam ogłaszamy, jest takie, że Bóg jest światłością, a nie ma w nim żadnej ciemności. (6) Jeśli mówimy, że z nim społeczność mamy, a chodzimy w ciemności, kłamiemy i nie trzymamy się prawdy. (7) Jeśli zaś chodzimy w światłości, jak On sam jest w światłości, społeczność mamy z sobą, i krew Jezusa Chrystusa, Syna jego, oczyszcza nas od wszelkiego grzechu. (8) Jeśli mówimy, że grzechu nie mamy, sami siebie zwodzimy, i prawdy w nas nie ma. (9) Jeśli wyznajemy grzechy swoje, wierny jest Bóg i sprawiedliwy i odpuści nam grzechy, i oczyści nas od wszelkiej nieprawości.',
                        'unordered' => 'A to piszemy, aby radość nasza była pełna. A zwiastowanie to, które słyszeliśmy od niego i które wam ogłaszamy, jest takie, że Bóg jest światłością, a nie ma w nim żadnej ciemności. Jeśli mówimy, że z nim społeczność mamy, a chodzimy w ciemności, kłamiemy i nie trzymamy się prawdy. Jeśli zaś chodzimy w światłości, jak On sam jest w światłości, społeczność mamy z sobą, i krew Jezusa Chrystusa, Syna jego, oczyszcza nas od wszelkiego grzechu. Jeśli mówimy, że grzechu nie mamy, sami siebie zwodzimy, i prawdy w nas nie ma. Jeśli wyznajemy grzechy swoje, wierny jest Bóg i sprawiedliwy i odpuści nam grzechy, i oczyści nas od wszelkiej nieprawości.',
                        'description' => '1 List Jana 1:4-9, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Jestem w żałobie',
                'code' => 'CGAV_004',
                'colour_value' => '#2020df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_009',
                        'name' => 'Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni',
                        'siglum' => 'bw/mt/5/4',
                        'content' => '(4) Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni.',
                        'unordered' => 'Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni.',
                        'description' => 'Ewangelia Mateusza 5:4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_010',
                        'name' => 'Bóg pociesza, więc pocieszajmy się tak wzajemnie',
                        'siglum' => 'bw/2co/1/3-4',
                        'content' => '(3) Błogosławiony niech będzie Bóg i Ojciec Pana naszego Jezusa Chrystusa, Ojciec miłosierdzia i Bóg wszelkiej pociechy, (4) który pociesza nas we wszelkim utrapieniu naszym, abyśmy tych, którzy są w jakimkolwiek utrapieniu, pocieszać mogli taką pociechą, jaką nas samych Bóg pociesza.',
                        'unordered' => 'Błogosławiony niech będzie Bóg i Ojciec Pana naszego Jezusa Chrystusa, Ojciec miłosierdzia i Bóg wszelkiej pociechy, który pociesza nas we wszelkim utrapieniu naszym, abyśmy tych, którzy są w jakimkolwiek utrapieniu, pocieszać mogli taką pociechą, jaką nas samych Bóg pociesza.',
                        'description' => '2 list do Koryntian 1:3-4, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Jestem zgorzkniały lub krytyczny',
                'code' => 'CGAV_005',
                'colour_value' => '#20df70'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_011',
                        'name' => 'Choćbym mówił językami ludzkimi i anielskimi',
                        'siglum' => 'bw/1co/13/1-13',
                        'content' => '(1) Choćbym mówił językami ludzkimi i anielskimi, a miłości bym nie miał, byłbym miedzią dźwięczącą lub cymbałem brzmiącym. (2) I choćbym miał dar prorokowania, i znał wszystkie tajemnice, i posiadał całą wiedzę, i choćbym miał pełnię wiary, tak żebym góry przenosił, a miłości bym nie miał, byłbym niczym. (3) I choćbym rozdał całe mienie swoje, i choćbym ciało swoje wydał na spalenie, a miłości bym nie miał, nic mi to nie pomoże. (4) Miłość jest cierpliwa, miłość jest dobrotliwa, nie zazdrości, miłość nie jest chełpliwa, nie nadyma się, (5) nie postępuje nieprzystojnie, nie szuka swego, nie unosi się, nie myśli nic złego, (6) nie raduje się z niesprawiedliwości, ale się raduje z prawdy; (7) wszystko zakrywa, wszystkiemu wierzy, wszystkiego się spodziewa, wszystko znosi. (8) Miłość nigdy nie ustaje; bo jeśli są proroctwa, przeminą; jeśli języki, ustaną, jeśli wiedza, wniwecz się obróci. (9) Bo cząstkowa jest nasza wiedza i cząstkowe nasze prorokowanie; (10) lecz gdy nastanie doskonałość, to, co cząstkowe, przeminie. (11) Gdy byłem dziecięciem, mówiłem jak dziecię, myślałem jak dziecię, rozumowałem jak dziecię; lecz gdy na męża wyrosłem, zaniechałem tego, co dziecięce. (12) Teraz bowiem widzimy jakby przez zwierciadło i niby w zagadce, ale wówczas twarzą w twarz. Teraz poznanie moje jest cząstkowe, ale wówczas poznam tak, jak jestem poznany. (13) Teraz więc pozostaje wiara, nadzieja, miłość, te trzy; lecz z nich największa jest miłość.',
                        'unordered' => 'Choćbym mówił językami ludzkimi i anielskimi, a miłości bym nie miał, byłbym miedzią dźwięczącą lub cymbałem brzmiącym. I choćbym miał dar prorokowania, i znał wszystkie tajemnice, i posiadał całą wiedzę, i choćbym miał pełnię wiary, tak żebym góry przenosił, a miłości bym nie miał, byłbym niczym. I choćbym rozdał całe mienie swoje, i choćbym ciało swoje wydał na spalenie, a miłości bym nie miał, nic mi to nie pomoże. Miłość jest cierpliwa, miłość jest dobrotliwa, nie zazdrości, miłość nie jest chełpliwa, nie nadyma się, nie postępuje nieprzystojnie, nie szuka swego, nie unosi się, nie myśli nic złego, nie raduje się z niesprawiedliwości, ale się raduje z prawdy; wszystko zakrywa, wszystkiemu wierzy, wszystkiego się spodziewa, wszystko znosi. Miłość nigdy nie ustaje; bo jeśli są proroctwa, przeminą; jeśli języki, ustaną, jeśli wiedza, wniwecz się obróci. Bo cząstkowa jest nasza wiedza i cząstkowe nasze prorokowanie; lecz gdy nastanie doskonałość, to, co cząstkowe, przeminie. Gdy byłem dziecięciem, mówiłem jak dziecię, myślałem jak dziecię, rozumowałem jak dziecię; lecz gdy na męża wyrosłem, zaniechałem tego, co dziecięce. Teraz bowiem widzimy jakby przez zwierciadło i niby w zagadce, ale wówczas twarzą w twarz. Teraz poznanie moje jest cząstkowe, ale wówczas poznam tak, jak jestem poznany. Teraz więc pozostaje wiara, nadzieja, miłość, te trzy; lecz z nich największa jest miłość.',
                        'description' => '1 list do Koryntian 13:1-13, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Jestem pokonany',
                'code' => 'CGAV_006',
                'colour_value' => '#df20bf'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_012',
                        'name' => 'Nic ani nikt nie zdoła nas odłączyć od miłości Bożej',
                        'siglum' => 'bw/ro/8/31-39',
                        'content' => '(31) Cóż tedy na to powiemy? Jeśli Bóg za nami, któż przeciwko nam? (32) On, który nawet własnego Syna nie oszczędził, ale go za nas wszystkich wydał, jakżeby nie miał z nim darować nam wszystkiego? (33) Któż będzie oskarżał wybranych Bożych? Przecież Bóg usprawiedliwia. (34) Któż będzie potępiał? Jezus Chrystus, który umarł, więcej, zmartwychwstał, który jest po prawicy Boga, Ten przecież wstawia się za nami. (35) Któż nas odłączy od miłości Chrystusowej? Czy utrapienie, czy ucisk, czy prześladowanie, czy głód, czy nagość, czy niebezpieczeństwo, czy miecz? (36) Jak napisano: Z powodu ciebie co dzień nas zabijają, uważają nas za owce ofiarne. (37) Ale w tym wszystkim zwyciężamy przez tego, który nas umiłował. (38) Albowiem jestem tego pewien, że ani śmierć, ani życie, ani aniołowie, ani potęgi niebieskie, ani teraźniejszość, ani przyszłość, ani moce, (39) ani wysokość, ani głębokość, ani żadne inne stworzenie nie zdoła nas odłączyć od miłości Bożej, która jest w Chrystusie Jezusie, Panu naszym.',
                        'unordered' => 'Cóż tedy na to powiemy? Jeśli Bóg za nami, któż przeciwko nam? On, który nawet własnego Syna nie oszczędził, ale go za nas wszystkich wydał, jakżeby nie miał z nim darować nam wszystkiego? Któż będzie oskarżał wybranych Bożych? Przecież Bóg usprawiedliwia. Któż będzie potępiał? Jezus Chrystus, który umarł, więcej, zmartwychwstał, który jest po prawicy Boga, Ten przecież wstawia się za nami. Któż nas odłączy od miłości Chrystusowej? Czy utrapienie, czy ucisk, czy prześladowanie, czy głód, czy nagość, czy niebezpieczeństwo, czy miecz? Jak napisano: Z powodu ciebie co dzień nas zabijają, uważają nas za owce ofiarne. Ale w tym wszystkim zwyciężamy przez tego, który nas umiłował. Albowiem jestem tego pewien, że ani śmierć, ani życie, ani aniołowie, ani potęgi niebieskie, ani teraźniejszość, ani przyszłość, ani moce, ani wysokość, ani głębokość, ani żadne inne stworzenie nie zdoła nas odłączyć od miłości Bożej, która jest w Chrystusie Jezusie, Panu naszym.',
                        'description' => 'List do Rzymian 8:31-39, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Spotkało mnie nieszczęście',
                'code' => 'CGAV_007',
                'colour_value' => '#20df50'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_013',
                        'name' => 'Gdzież jest wiara wasza?',
                        'siglum' => 'bw/lk/8/22-25',
                        'content' => '(22) I stało się pewnego dnia, że wstąpił do łodzi On i uczniowie jego i rzekł do nich: Przeprawmy się na drugi brzeg jeziora. I odbili od brzegu. (23) A gdy płynęli, On zasnął. I zerwał się gwałtowny wicher na jeziorze i fale ich zalewały, i byli w niebezpieczeństwie. (24) Tedy przystąpili do niego i zbudzili go, mówiąc: Mistrzu, Mistrzu, giniemy. A On obudziwszy się, zgromił wiatr i wzburzone fale, a one uspokoiły się i nastała cisza. (25) I rzekł do nich: Gdzież jest wiara wasza? Oni zaś, przestraszywszy się, zdumiewali się i mówili jedni do drugich: Któż to jest ten, że nawet wiatrom i wodzie rozkazuje i słuchają go?',
                        'unordered' => 'I stało się pewnego dnia, że wstąpił do łodzi On i uczniowie jego i rzekł do nich: Przeprawmy się na drugi brzeg jeziora. I odbili od brzegu. A gdy płynęli, On zasnął. I zerwał się gwałtowny wicher na jeziorze i fale ich zalewały, i byli w niebezpieczeństwie. Tedy przystąpili do niego i zbudzili go, mówiąc: Mistrzu, Mistrzu, giniemy. A On obudziwszy się, zgromił wiatr i wzburzone fale, a one uspokoiły się i nastała cisza. I rzekł do nich: Gdzież jest wiara wasza? Oni zaś, przestraszywszy się, zdumiewali się i mówili jedni do drugich: Któż to jest ten, że nawet wiatrom i wodzie rozkazuje i słuchają go?',
                        'description' => 'Ewangelia Łukasza 8:22-25, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Jestem zniechęcony',
                'code' => 'CGAV_008',
                'colour_value' => '#afdf20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_014',
                        'name' => 'Błogosławieni jesteście',
                        'siglum' => 'bw/mt/5/11-12',
                        'content' => '(11) Błogosławieni jesteście, gdy wam złorzeczyć i prześladować was będą i kłamliwie mówić na was wszelkie zło ze względu na mnie! (12) Radujcie i weselcie się, albowiem zapłata wasza obfita jest w niebie; tak bowiem prześladowali proroków, którzy byli przed wami.',
                        'unordered' => 'Błogosławieni jesteście, gdy wam złorzeczyć i prześladować was będą i kłamliwie mówić na was wszelkie zło ze względu na mnie! Radujcie i weselcie się, albowiem zapłata wasza obfita jest w niebie; tak bowiem prześladowali proroków, którzy byli przed wami.',
                        'description' => 'Ewangelia Mateusza 5:11-12, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_015',
                        'name' => 'Dlatego nie upadamy na duchu',
                        'siglum' => 'bw/2co/4/8-18',
                        'content' => '(8) Zewsząd uciskani, nie jesteśmy jednak pognębieni, zakłopotani, ale nie zrozpaczeni, (9) prześladowani, ale nie opuszczeni, powaleni, ale nie pokonani, (10) zawsze śmierć Jezusa na ciele swoim noszący, aby i życie Jezusa na ciele naszym się ujawniło. (11) Zawsze bowiem my, którzy żyjemy, dla Jezusa na śmierć wydawani bywamy, aby i życie Jezusa na śmiertelnym ciele naszym się ujawniło. (12) Tak tedy śmierć wykonuje dzieło swoje w nas, a życie w was. (13) Mając zaś tego samego ducha wiary, jak to jest napisane: Uwierzyłem, przeto powiedziałem, i my wierzymy, i dlatego też mówimy, (14) wiedząc, że Ten, który wzbudził Pana Jezusa, także i nas z Jezusem wzbudził i razem z wami przed sobą stawi. (15) Wszystko to bowiem dzieje się ze względu na was, aby, im więcej jest uczestników łaski, tym bardziej obfitowało dziękczynienie ku chwale Bożej. (16) Dlatego nie upadamy na duchu; bo choć zewnętrzny nasz człowiek niszczeje, to jednak ten nasz wewnętrzny odnawia się z każdym dniem. (17) Albowiem nieznaczny chwilowy ucisk przynosi nam przeogromną obfitość wiekuistej chwały, (18) nam, którzy nie patrzymy na to, co widzialne, ale na to, co niewidzialne; albowiem to, co widzialne, jest doczesne, a to, co niewidzialne, jest wieczne.',
                        'unordered' => 'Zewsząd uciskani, nie jesteśmy jednak pognębieni, zakłopotani, ale nie zrozpaczeni, prześladowani, ale nie opuszczeni, powaleni, ale nie pokonani, zawsze śmierć Jezusa na ciele swoim noszący, aby i życie Jezusa na ciele naszym się ujawniło. Zawsze bowiem my, którzy żyjemy, dla Jezusa na śmierć wydawani bywamy, aby i życie Jezusa na śmiertelnym ciele naszym się ujawniło. Tak tedy śmierć wykonuje dzieło swoje w nas, a życie w was. Mając zaś tego samego ducha wiary, jak to jest napisane: Uwierzyłem, przeto powiedziałem, i my wierzymy, i dlatego też mówimy, wiedząc, że Ten, który wzbudził Pana Jezusa, także i nas z Jezusem wzbudził i razem z wami przed sobą stawi. Wszystko to bowiem dzieje się ze względu na was, aby, im więcej jest uczestników łaski, tym bardziej obfitowało dziękczynienie ku chwale Bożej. Dlatego nie upadamy na duchu; bo choć zewnętrzny nasz człowiek niszczeje, to jednak ten nasz wewnętrzny odnawia się z każdym dniem. Albowiem nieznaczny chwilowy ucisk przynosi nam przeogromną obfitość wiekuistej chwały, nam, którzy nie patrzymy na to, co widzialne, ale na to, co niewidzialne; albowiem to, co widzialne, jest doczesne, a to, co niewidzialne, jest wieczne.',
                        'description' => '2 list do Koryntian 4:8-18, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_016',
                        'name' => 'Radujcie się w Panu zawsze',
                        'siglum' => 'bw/php/4/4-7',
                        'content' => '(4) Radujcie się w Panu zawsze; powtarzam, radujcie się. (5) Skromność wasza niech będzie znana wszystkim ludziom: Pan jest blisko. (6) Nie troszczcie się o nic, ale we wszystkim w modlitwie i błaganiach z dziękczynieniem powierzcie prośby wasze Bogu. (7) A pokój Boży, który przewyższa wszelki rozum, strzec będzie serc waszych i myśli waszych w Chrystusie Jezusie.',
                        'unordered' => 'Radujcie się w Panu zawsze; powtarzam, radujcie się. Skromność wasza niech będzie znana wszystkim ludziom: Pan jest blisko. Nie troszczcie się o nic, ale we wszystkim w modlitwie i błaganiach z dziękczynieniem powierzcie prośby wasze Bogu. A pokój Boży, który przewyższa wszelki rozum, strzec będzie serc waszych i myśli waszych w Chrystusie Jezusie.',
                        'description' => 'List do Filipian 4:4-7, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Wątpię',
                'code' => 'CGAV_009',
                'colour_value' => '#20dfbf'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_017',
                        'name' => 'Czemu jesteście bojaźliwi, małowierni?',
                        'siglum' => 'bw/mt/8/26',
                        'content' => '(26) A On rzekł do nich: Czemu jesteście bojaźliwi, małowierni? Potem wstał, zgromił wiatry i morze i nastała wielka cisza.',
                        'unordered' => 'A On rzekł do nich: Czemu jesteście bojaźliwi, małowierni? Potem wstał, zgromił wiatry i morze i nastała wielka cisza.',
                        'description' => 'Ewangelia Mateusza 8:26, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_018',
                        'name' => 'A wiara jest pewnością tego, czego się spodziewamy',
                        'siglum' => 'bw/hebr/11/1-40',
                        'content' => '(1) A wiara jest pewnością tego, czego się spodziewamy, przeświadczeniem o tym, czego nie widzimy. (2) Wszak jej zawdzięczają przodkowie chlubne świadectwo. (3) Przez wiarę poznajemy, że światy zostały ukształtowane słowem Boga, tak iż to, co widzialne, nie powstało ze świata zjawisk. (4) Przez wiarę złożył Abel Bogu wartościowszą ofiarę niż Kain, dzięki czemu otrzymał świadectwo, że jest sprawiedliwy, gdy Bóg przyznał się do jego darów, i przez nią jeszcze po śmierci przemawia. (5) Przez wiarę zabrany został Henoch, aby nie oglądał śmierci i nie znaleziono go, gdyż zabrał go Bóg. Zanim jednak został zabrany, otrzymał świadectwo, że się podobał Bogu. (6) Bez wiary zaś nie można podobać się Bogu; kto bowiem przystępuje do Boga, musi uwierzyć, że On istnieje i że nagradza tych, którzy go szukają. (7) Przez wiarę zbudował Noe, ostrzeżony cudownie o tym, czego jeszcze nie można było widzieć, pełen bojaźni, arkę dla ocalenia rodziny swojej; przez nią wydał wyrok na świat i odziedziczył usprawiedliwienie, które jest z wiary. (8) Przez wiarę usłuchał Abraham, gdy został powołany, aby pójść na miejsce, które miał wziąć w dziedzictwo, i wyszedł, nie wiedząc, dokąd idzie. (9) Przez wiarę osiedlił się jako cudzoziemiec w ziemi obiecanej na obczyźnie, zamieszkawszy pod namiotami z Izaakiem i Jakubem, współdziedzicami tejże obietnicy. (10) Oczekiwał bowiem miasta mającego mocne fundamenty, którego budowniczym i twórcą jest Bóg. (11) Przez wiarę również sama Sara otrzymała moc poczęcia i to mimo podeszłego wieku, ponieważ uważała za godnego zaufania tego, który dał obietnicę. (12) Przeto też z jednego człowieka, i to nieomal obumarłego, zrodziło się potomstwo tak liczne jak gwiazdy na niebie i jak piasek na brzegu morskim, którego zliczyć nie można. (13) Wszyscy oni poumierali w wierze, nie otrzymawszy tego, co głosiły obietnice, lecz ujrzeli i powitali je z dala; wyznali też, że są gośćmi i pielgrzymami na ziemi. (14) Bo ci, którzy tak mówią, okazują, że ojczyzny szukają. (15) I gdyby mieli na myśli tę, z której wyszli, byliby mieli sposobność, aby do niej powrócić; (16) lecz oni zdążają do lepszej, to jest do niebieskiej. Dlatego Bóg nie wstydzi się być nazywany ich Bogiem, gdyż przygotował dla nich miasto. (17) Przez wiarę Abraham przyniósł na ofiarę Izaaka, gdy był wystawiony na próbę, i ofiarował jednorodzonego, on, który otrzymał obietnicę, (18) do którego powiedziano: Od Izaaka nazwane będzie potomstwo twoje. (19) Sądził, że Bóg ma moc wskrzeszać nawet umarłych; toteż jakby z umarłych, mówiąc obrazowo, otrzymał go z powrotem. (20) Przez wiarę Izaak udzielił Jakubowi i Ezawowi błogosławieństwa, zapewniającego przyszłość. (21) Przez wiarę pobłogosławił umierający Jakub każdego z synów Józefa i skłonił się nabożnie, wsparty o wierzch swojej laski. (22) Przez wiarę wspomniał umierający Józef o wyjściu Izraelitów i dał polecenie dotyczące swoich kości. (23) Przez wiarę był Mojżesz po narodzeniu ukrywany przez rodziców swoich w ciągu trzech miesięcy, ponieważ widzieli, iż dziecię było śliczne, i nie ulękli się rozkazu królewskiego. (24) Przez wiarę Mojżesz, kiedy dorósł, nie zgodził się, by go zwano synem córki faraona, (25) i wolał raczej znosić uciski wespół z ludem Bożym, aniżeli zażywać przemijającej rozkoszy grzechu, (26) uznawszy hańbę Chrystusową za większe bogactwo niż skarby Egiptu; skierował bowiem oczy na zapłatę. (27) Przez wiarę opuścił Egipt, nie uląkłszy się gniewu królewskiego; trzymał się bowiem tego, który jest niewidzialny, jak gdyby go widział. (28) Przez wiarę obchodził Paschę i dokonał pokropienia krwią, aby ten, który zabijał pierworodne, nie dotknął się ich. (29) Przez wiarę przeszli przez Morze Czerwone jak po suchej ziemi, gdy zaś Egipcjanie podjęli tę próbę, potonęli. (30) Przez wiarę runęły mury Jerycha, okrążane przez siedem dni. (31) Przez wiarę nie zginęła nierządnica Rachab wraz z nieposłusznymi, bo przyjęła przyjaźnie wywiadowców. (32) I cóż powiem jeszcze? Zabrakłoby mi przecież czasu, gdybym miał opowiadać o Gedeonie, Baraku, Samsonie, Jeftem, Dawidzie i Samuelu, i o prorokach, (33) którzy przez wiarę podbili królestwa, zaprowadzili sprawiedliwość, otrzymali obietnice, zamknęli paszcze lwom, (34) zgasili moc ognia, uniknęli ostrza miecza, podźwignęli się z niemocy, stali się mężni na wojnie, zmusili do ucieczki obce wojska. (35) Kobiety otrzymały z powrotem swoich zmarłych przez wskrzeszenie; inni zaś zostali zamęczeni na śmierć, nie przyjąwszy uwolnienia, aby dostąpić lepszego zmartwychwstania. (36) Drudzy zaś doznali szyderstw i biczowania, a nadto więzów i więzienia; (37) byli kamienowani, paleni, przerzynani piłą, zabijani mieczem, błąkali się w owczych i kozich skórach, wyzuci ze wszystkiego, uciskani, poniewierani; (38) ci, których świat nie był godny, tułali się po pustyniach i górach, po jaskiniach i rozpadlinach ziemi. (39) A wszyscy ci, choć dla swej wiary zdobyli chlubne świadectwo, nie otrzymali tego, co głosiła obietnica, (40) ponieważ Bóg przewidział ze względu na nas coś lepszego, mianowicie, aby oni nie osiągnęli celu bez nas.',
                        'unordered' => 'A wiara jest pewnością tego, czego się spodziewamy, przeświadczeniem o tym, czego nie widzimy. Wszak jej zawdzięczają przodkowie chlubne świadectwo. Przez wiarę poznajemy, że światy zostały ukształtowane słowem Boga, tak iż to, co widzialne, nie powstało ze świata zjawisk. Przez wiarę złożył Abel Bogu wartościowszą ofiarę niż Kain, dzięki czemu otrzymał świadectwo, że jest sprawiedliwy, gdy Bóg przyznał się do jego darów, i przez nią jeszcze po śmierci przemawia. Przez wiarę zabrany został Henoch, aby nie oglądał śmierci i nie znaleziono go, gdyż zabrał go Bóg. Zanim jednak został zabrany, otrzymał świadectwo, że się podobał Bogu. Bez wiary zaś nie można podobać się Bogu; kto bowiem przystępuje do Boga, musi uwierzyć, że On istnieje i że nagradza tych, którzy go szukają. Przez wiarę zbudował Noe, ostrzeżony cudownie o tym, czego jeszcze nie można było widzieć, pełen bojaźni, arkę dla ocalenia rodziny swojej; przez nią wydał wyrok na świat i odziedziczył usprawiedliwienie, które jest z wiary. Przez wiarę usłuchał Abraham, gdy został powołany, aby pójść na miejsce, które miał wziąć w dziedzictwo, i wyszedł, nie wiedząc, dokąd idzie. Przez wiarę osiedlił się jako cudzoziemiec w ziemi obiecanej na obczyźnie, zamieszkawszy pod namiotami z Izaakiem i Jakubem, współdziedzicami tejże obietnicy. Oczekiwał bowiem miasta mającego mocne fundamenty, którego budowniczym i twórcą jest Bóg. Przez wiarę również sama Sara otrzymała moc poczęcia i to mimo podeszłego wieku, ponieważ uważała za godnego zaufania tego, który dał obietnicę. Przeto też z jednego człowieka, i to nieomal obumarłego, zrodziło się potomstwo tak liczne jak gwiazdy na niebie i jak piasek na brzegu morskim, którego zliczyć nie można. Wszyscy oni poumierali w wierze, nie otrzymawszy tego, co głosiły obietnice, lecz ujrzeli i powitali je z dala; wyznali też, że są gośćmi i pielgrzymami na ziemi. Bo ci, którzy tak mówią, okazują, że ojczyzny szukają. I gdyby mieli na myśli tę, z której wyszli, byliby mieli sposobność, aby do niej powrócić; lecz oni zdążają do lepszej, to jest do niebieskiej. Dlatego Bóg nie wstydzi się być nazywany ich Bogiem, gdyż przygotował dla nich miasto. Przez wiarę Abraham przyniósł na ofiarę Izaaka, gdy był wystawiony na próbę, i ofiarował jednorodzonego, on, który otrzymał obietnicę, do którego powiedziano: Od Izaaka nazwane będzie potomstwo twoje. Sądził, że Bóg ma moc wskrzeszać nawet umarłych; toteż jakby z umarłych, mówiąc obrazowo, otrzymał go z powrotem. Przez wiarę Izaak udzielił Jakubowi i Ezawowi błogosławieństwa, zapewniającego przyszłość. Przez wiarę pobłogosławił umierający Jakub każdego z synów Józefa i skłonił się nabożnie, wsparty o wierzch swojej laski. Przez wiarę wspomniał umierający Józef o wyjściu Izraelitów i dał polecenie dotyczące swoich kości. Przez wiarę był Mojżesz po narodzeniu ukrywany przez rodziców swoich w ciągu trzech miesięcy, ponieważ widzieli, iż dziecię było śliczne, i nie ulękli się rozkazu królewskiego. Przez wiarę Mojżesz, kiedy dorósł, nie zgodził się, by go zwano synem córki faraona, i wolał raczej znosić uciski wespół z ludem Bożym, aniżeli zażywać przemijającej rozkoszy grzechu, uznawszy hańbę Chrystusową za większe bogactwo niż skarby Egiptu; skierował bowiem oczy na zapłatę. Przez wiarę opuścił Egipt, nie uląkłszy się gniewu królewskiego; trzymał się bowiem tego, który jest niewidzialny, jak gdyby go widział. Przez wiarę obchodził Paschę i dokonał pokropienia krwią, aby ten, który zabijał pierworodne, nie dotknął się ich. Przez wiarę przeszli przez Morze Czerwone jak po suchej ziemi, gdy zaś Egipcjanie podjęli tę próbę, potonęli. Przez wiarę runęły mury Jerycha, okrążane przez siedem dni. Przez wiarę nie zginęła nierządnica Rachab wraz z nieposłusznymi, bo przyjęła przyjaźnie wywiadowców. I cóż powiem jeszcze? Zabrakłoby mi przecież czasu, gdybym miał opowiadać o Gedeonie, Baraku, Samsonie, Jeftem, Dawidzie i Samuelu, i o prorokach, którzy przez wiarę podbili królestwa, zaprowadzili sprawiedliwość, otrzymali obietnice, zamknęli paszcze lwom, zgasili moc ognia, uniknęli ostrza miecza, podźwignęli się z niemocy, stali się mężni na wojnie, zmusili do ucieczki obce wojska. Kobiety otrzymały z powrotem swoich zmarłych przez wskrzeszenie; inni zaś zostali zamęczeni na śmierć, nie przyjąwszy uwolnienia, aby dostąpić lepszego zmartwychwstania. Drudzy zaś doznali szyderstw i biczowania, a nadto więzów i więzienia; byli kamienowani, paleni, przerzynani piłą, zabijani mieczem, błąkali się w owczych i kozich skórach, wyzuci ze wszystkiego, uciskani, poniewierani; ci, których świat nie był godny, tułali się po pustyniach i górach, po jaskiniach i rozpadlinach ziemi. A wszyscy ci, choć dla swej wiary zdobyli chlubne świadectwo, nie otrzymali tego, co głosiła obietnica, ponieważ Bóg przewidział ze względu na nas coś lepszego, mianowicie, aby oni nie osiągnęli celu bez nas.',
                        'description' => 'List do Hebrajczyków 11:1-40, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Przeżywam kryzys',
                'code' => 'CGAV_010',
                'colour_value' => '#df9f20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_019',
                        'name' => 'Nie troszczcie się o życie swoje',
                        'siglum' => 'bw/mt/6/25-34',
                        'content' => '(25) Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? (26) Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? (27) A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? (28) A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. (29) A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. (30) Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? (31) Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? (32) Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. (33) Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. (34) Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'unordered' => 'Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'description' => 'Ewangelia Mateusza 6:25-34, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_020',
                        'name' => 'Przystąpmy tedy z ufną odwagą do tronu łaski',
                        'siglum' => 'bw/hebr/4/16',
                        'content' => '(16) Przystąpmy tedy z ufną odwagą do tronu łaski, abyśmy dostąpili miłosierdzia i znaleźli łaskę ku pomocy w stosownej porze.',
                        'unordered' => 'Przystąpmy tedy z ufną odwagą do tronu łaski, abyśmy dostąpili miłosierdzia i znaleźli łaskę ku pomocy w stosownej porze.',
                        'description' => 'List do Hebrajczyków 4:16, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Zawodzi wiara',
                'code' => 'CGAV_011',
                'colour_value' => '#dfdf20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_021',
                        'name' => 'A wiara jest pewnością tego, czego się spodziewamy',
                        'siglum' => 'bw/hebr/11/1-40',
                        'content' => '(1) A wiara jest pewnością tego, czego się spodziewamy, przeświadczeniem o tym, czego nie widzimy. (2) Wszak jej zawdzięczają przodkowie chlubne świadectwo. (3) Przez wiarę poznajemy, że światy zostały ukształtowane słowem Boga, tak iż to, co widzialne, nie powstało ze świata zjawisk. (4) Przez wiarę złożył Abel Bogu wartościowszą ofiarę niż Kain, dzięki czemu otrzymał świadectwo, że jest sprawiedliwy, gdy Bóg przyznał się do jego darów, i przez nią jeszcze po śmierci przemawia. (5) Przez wiarę zabrany został Henoch, aby nie oglądał śmierci i nie znaleziono go, gdyż zabrał go Bóg. Zanim jednak został zabrany, otrzymał świadectwo, że się podobał Bogu. (6) Bez wiary zaś nie można podobać się Bogu; kto bowiem przystępuje do Boga, musi uwierzyć, że On istnieje i że nagradza tych, którzy go szukają. (7) Przez wiarę zbudował Noe, ostrzeżony cudownie o tym, czego jeszcze nie można było widzieć, pełen bojaźni, arkę dla ocalenia rodziny swojej; przez nią wydał wyrok na świat i odziedziczył usprawiedliwienie, które jest z wiary. (8) Przez wiarę usłuchał Abraham, gdy został powołany, aby pójść na miejsce, które miał wziąć w dziedzictwo, i wyszedł, nie wiedząc, dokąd idzie. (9) Przez wiarę osiedlił się jako cudzoziemiec w ziemi obiecanej na obczyźnie, zamieszkawszy pod namiotami z Izaakiem i Jakubem, współdziedzicami tejże obietnicy. (10) Oczekiwał bowiem miasta mającego mocne fundamenty, którego budowniczym i twórcą jest Bóg. (11) Przez wiarę również sama Sara otrzymała moc poczęcia i to mimo podeszłego wieku, ponieważ uważała za godnego zaufania tego, który dał obietnicę. (12) Przeto też z jednego człowieka, i to nieomal obumarłego, zrodziło się potomstwo tak liczne jak gwiazdy na niebie i jak piasek na brzegu morskim, którego zliczyć nie można. (13) Wszyscy oni poumierali w wierze, nie otrzymawszy tego, co głosiły obietnice, lecz ujrzeli i powitali je z dala; wyznali też, że są gośćmi i pielgrzymami na ziemi. (14) Bo ci, którzy tak mówią, okazują, że ojczyzny szukają. (15) I gdyby mieli na myśli tę, z której wyszli, byliby mieli sposobność, aby do niej powrócić; (16) lecz oni zdążają do lepszej, to jest do niebieskiej. Dlatego Bóg nie wstydzi się być nazywany ich Bogiem, gdyż przygotował dla nich miasto. (17) Przez wiarę Abraham przyniósł na ofiarę Izaaka, gdy był wystawiony na próbę, i ofiarował jednorodzonego, on, który otrzymał obietnicę, (18) do którego powiedziano: Od Izaaka nazwane będzie potomstwo twoje. (19) Sądził, że Bóg ma moc wskrzeszać nawet umarłych; toteż jakby z umarłych, mówiąc obrazowo, otrzymał go z powrotem. (20) Przez wiarę Izaak udzielił Jakubowi i Ezawowi błogosławieństwa, zapewniającego przyszłość. (21) Przez wiarę pobłogosławił umierający Jakub każdego z synów Józefa i skłonił się nabożnie, wsparty o wierzch swojej laski. (22) Przez wiarę wspomniał umierający Józef o wyjściu Izraelitów i dał polecenie dotyczące swoich kości. (23) Przez wiarę był Mojżesz po narodzeniu ukrywany przez rodziców swoich w ciągu trzech miesięcy, ponieważ widzieli, iż dziecię było śliczne, i nie ulękli się rozkazu królewskiego. (24) Przez wiarę Mojżesz, kiedy dorósł, nie zgodził się, by go zwano synem córki faraona, (25) i wolał raczej znosić uciski wespół z ludem Bożym, aniżeli zażywać przemijającej rozkoszy grzechu, (26) uznawszy hańbę Chrystusową za większe bogactwo niż skarby Egiptu; skierował bowiem oczy na zapłatę. (27) Przez wiarę opuścił Egipt, nie uląkłszy się gniewu królewskiego; trzymał się bowiem tego, który jest niewidzialny, jak gdyby go widział. (28) Przez wiarę obchodził Paschę i dokonał pokropienia krwią, aby ten, który zabijał pierworodne, nie dotknął się ich. (29) Przez wiarę przeszli przez Morze Czerwone jak po suchej ziemi, gdy zaś Egipcjanie podjęli tę próbę, potonęli. (30) Przez wiarę runęły mury Jerycha, okrążane przez siedem dni. (31) Przez wiarę nie zginęła nierządnica Rachab wraz z nieposłusznymi, bo przyjęła przyjaźnie wywiadowców. (32) I cóż powiem jeszcze? Zabrakłoby mi przecież czasu, gdybym miał opowiadać o Gedeonie, Baraku, Samsonie, Jeftem, Dawidzie i Samuelu, i o prorokach, (33) którzy przez wiarę podbili królestwa, zaprowadzili sprawiedliwość, otrzymali obietnice, zamknęli paszcze lwom, (34) zgasili moc ognia, uniknęli ostrza miecza, podźwignęli się z niemocy, stali się mężni na wojnie, zmusili do ucieczki obce wojska. (35) Kobiety otrzymały z powrotem swoich zmarłych przez wskrzeszenie; inni zaś zostali zamęczeni na śmierć, nie przyjąwszy uwolnienia, aby dostąpić lepszego zmartwychwstania. (36) Drudzy zaś doznali szyderstw i biczowania, a nadto więzów i więzienia; (37) byli kamienowani, paleni, przerzynani piłą, zabijani mieczem, błąkali się w owczych i kozich skórach, wyzuci ze wszystkiego, uciskani, poniewierani; (38) ci, których świat nie był godny, tułali się po pustyniach i górach, po jaskiniach i rozpadlinach ziemi. (39) A wszyscy ci, choć dla swej wiary zdobyli chlubne świadectwo, nie otrzymali tego, co głosiła obietnica, (40) ponieważ Bóg przewidział ze względu na nas coś lepszego, mianowicie, aby oni nie osiągnęli celu bez nas.',
                        'unordered' => 'A wiara jest pewnością tego, czego się spodziewamy, przeświadczeniem o tym, czego nie widzimy. Wszak jej zawdzięczają przodkowie chlubne świadectwo. Przez wiarę poznajemy, że światy zostały ukształtowane słowem Boga, tak iż to, co widzialne, nie powstało ze świata zjawisk. Przez wiarę złożył Abel Bogu wartościowszą ofiarę niż Kain, dzięki czemu otrzymał świadectwo, że jest sprawiedliwy, gdy Bóg przyznał się do jego darów, i przez nią jeszcze po śmierci przemawia. Przez wiarę zabrany został Henoch, aby nie oglądał śmierci i nie znaleziono go, gdyż zabrał go Bóg. Zanim jednak został zabrany, otrzymał świadectwo, że się podobał Bogu. Bez wiary zaś nie można podobać się Bogu; kto bowiem przystępuje do Boga, musi uwierzyć, że On istnieje i że nagradza tych, którzy go szukają. Przez wiarę zbudował Noe, ostrzeżony cudownie o tym, czego jeszcze nie można było widzieć, pełen bojaźni, arkę dla ocalenia rodziny swojej; przez nią wydał wyrok na świat i odziedziczył usprawiedliwienie, które jest z wiary. Przez wiarę usłuchał Abraham, gdy został powołany, aby pójść na miejsce, które miał wziąć w dziedzictwo, i wyszedł, nie wiedząc, dokąd idzie. Przez wiarę osiedlił się jako cudzoziemiec w ziemi obiecanej na obczyźnie, zamieszkawszy pod namiotami z Izaakiem i Jakubem, współdziedzicami tejże obietnicy. Oczekiwał bowiem miasta mającego mocne fundamenty, którego budowniczym i twórcą jest Bóg. Przez wiarę również sama Sara otrzymała moc poczęcia i to mimo podeszłego wieku, ponieważ uważała za godnego zaufania tego, który dał obietnicę. Przeto też z jednego człowieka, i to nieomal obumarłego, zrodziło się potomstwo tak liczne jak gwiazdy na niebie i jak piasek na brzegu morskim, którego zliczyć nie można. Wszyscy oni poumierali w wierze, nie otrzymawszy tego, co głosiły obietnice, lecz ujrzeli i powitali je z dala; wyznali też, że są gośćmi i pielgrzymami na ziemi. Bo ci, którzy tak mówią, okazują, że ojczyzny szukają. I gdyby mieli na myśli tę, z której wyszli, byliby mieli sposobność, aby do niej powrócić; lecz oni zdążają do lepszej, to jest do niebieskiej. Dlatego Bóg nie wstydzi się być nazywany ich Bogiem, gdyż przygotował dla nich miasto. Przez wiarę Abraham przyniósł na ofiarę Izaaka, gdy był wystawiony na próbę, i ofiarował jednorodzonego, on, który otrzymał obietnicę, do którego powiedziano: Od Izaaka nazwane będzie potomstwo twoje. Sądził, że Bóg ma moc wskrzeszać nawet umarłych; toteż jakby z umarłych, mówiąc obrazowo, otrzymał go z powrotem. Przez wiarę Izaak udzielił Jakubowi i Ezawowi błogosławieństwa, zapewniającego przyszłość. Przez wiarę pobłogosławił umierający Jakub każdego z synów Józefa i skłonił się nabożnie, wsparty o wierzch swojej laski. Przez wiarę wspomniał umierający Józef o wyjściu Izraelitów i dał polecenie dotyczące swoich kości. Przez wiarę był Mojżesz po narodzeniu ukrywany przez rodziców swoich w ciągu trzech miesięcy, ponieważ widzieli, iż dziecię było śliczne, i nie ulękli się rozkazu królewskiego. Przez wiarę Mojżesz, kiedy dorósł, nie zgodził się, by go zwano synem córki faraona, i wolał raczej znosić uciski wespół z ludem Bożym, aniżeli zażywać przemijającej rozkoszy grzechu, uznawszy hańbę Chrystusową za większe bogactwo niż skarby Egiptu; skierował bowiem oczy na zapłatę. Przez wiarę opuścił Egipt, nie uląkłszy się gniewu królewskiego; trzymał się bowiem tego, który jest niewidzialny, jak gdyby go widział. Przez wiarę obchodził Paschę i dokonał pokropienia krwią, aby ten, który zabijał pierworodne, nie dotknął się ich. Przez wiarę przeszli przez Morze Czerwone jak po suchej ziemi, gdy zaś Egipcjanie podjęli tę próbę, potonęli. Przez wiarę runęły mury Jerycha, okrążane przez siedem dni. Przez wiarę nie zginęła nierządnica Rachab wraz z nieposłusznymi, bo przyjęła przyjaźnie wywiadowców. I cóż powiem jeszcze? Zabrakłoby mi przecież czasu, gdybym miał opowiadać o Gedeonie, Baraku, Samsonie, Jeftem, Dawidzie i Samuelu, i o prorokach, którzy przez wiarę podbili królestwa, zaprowadzili sprawiedliwość, otrzymali obietnice, zamknęli paszcze lwom, zgasili moc ognia, uniknęli ostrza miecza, podźwignęli się z niemocy, stali się mężni na wojnie, zmusili do ucieczki obce wojska. Kobiety otrzymały z powrotem swoich zmarłych przez wskrzeszenie; inni zaś zostali zamęczeni na śmierć, nie przyjąwszy uwolnienia, aby dostąpić lepszego zmartwychwstania. Drudzy zaś doznali szyderstw i biczowania, a nadto więzów i więzienia; byli kamienowani, paleni, przerzynani piłą, zabijani mieczem, błąkali się w owczych i kozich skórach, wyzuci ze wszystkiego, uciskani, poniewierani; ci, których świat nie był godny, tułali się po pustyniach i górach, po jaskiniach i rozpadlinach ziemi. A wszyscy ci, choć dla swej wiary zdobyli chlubne świadectwo, nie otrzymali tego, co głosiła obietnica, ponieważ Bóg przewidział ze względu na nas coś lepszego, mianowicie, aby oni nie osiągnęli celu bez nas.',
                        'description' => 'List do Hebrajczyków 11:1-40, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Zawodzą przyjaciele',
                'code' => 'CGAV_012',
                'colour_value' => '#7020df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_022',
                        'name' => 'Miejcie się na baczności',
                        'siglum' => 'bw/lk/17/3-4',
                        'content' => '(3) Miejcie się na baczności. Jeśliby zgrzeszył twój brat, strofuj go, a jeśli się upamięta, odpuść mu. (4) A jeśliby siedemkroć na dzień zgrzeszył przeciwko tobie, i siedemkroć zwrócił się do ciebie, mówiąc: Żałuję tego, odpuść mu.',
                        'unordered' => 'Miejcie się na baczności. Jeśliby zgrzeszył twój brat, strofuj go, a jeśli się upamięta, odpuść mu. A jeśliby siedemkroć na dzień zgrzeszył przeciwko tobie, i siedemkroć zwrócił się do ciebie, mówiąc: Żałuję tego, odpuść mu.',
                        'description' => 'Ewangelia Łukasza 17:3-4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_023',
                        'name' => 'Błogosławcie tych, którzy was prześladują',
                        'siglum' => 'bw/ro/12/14-17',
                        'content' => '(14) Błogosławcie tych, którzy was prześladują, błogosławcie, a nie przeklinajcie. (15) Weselcie się z weselącymi się, płaczcie z płaczącymi. (16) Bądźcie wobec siebie jednakowo usposobieni; nie bądźcie wyniośli, lecz się do niskich skłaniajcie; nie uważajcie sami siebie za mądrych. (17) Nikomu złem za złe nie oddawajcie, starajcie się o to, co jest dobre w oczach wszystkich ludzi.',
                        'unordered' => 'Błogosławcie tych, którzy was prześladują, błogosławcie, a nie przeklinajcie. Weselcie się z weselącymi się, płaczcie z płaczącymi. Bądźcie wobec siebie jednakowo usposobieni; nie bądźcie wyniośli, lecz się do niskich skłaniajcie; nie uważajcie sami siebie za mądrych. Nikomu złem za złe nie oddawajcie, starajcie się o to, co jest dobre w oczach wszystkich ludzi.',
                        'description' => 'List do Rzymian 12:14-17, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_024',
                        'name' => 'Nie mścijcie się sami, ale pozostawcie to gniewowi Bożemu',
                        'siglum' => 'bw/ro/12/19-21',
                        'content' => '(19) Najmilsi! Nie mścijcie się sami, ale pozostawcie to gniewowi Bożemu, albowiem napisano: Pomsta do mnie należy, Ja odpłacę, mówi Pan. (20) Jeśli tedy łaknie nieprzyjaciel twój, nakarm go; jeśli pragnie, napój go; bo czyniąc to, węgle rozżarzone zgarniesz na jego głowę. (21) Nie daj się zwyciężyć złu, ale zło dobrem zwyciężaj.',
                        'unordered' => 'Najmilsi! Nie mścijcie się sami, ale pozostawcie to gniewowi Bożemu, albowiem napisano: Pomsta do mnie należy, Ja odpłacę, mówi Pan. Jeśli tedy łaknie nieprzyjaciel twój, nakarm go; jeśli pragnie, napój go; bo czyniąc to, węgle rozżarzone zgarniesz na jego głowę. Nie daj się zwyciężyć złu, ale zło dobrem zwyciężaj.',
                        'description' => 'List do Rzymian 12:19-21, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_025',
                        'name' => 'Pan stał przy mnie i dodał mi sił',
                        'siglum' => 'bw/2tm/4/16-18',
                        'content' => '(16) W pierwszej obronie mojej nikogo przy mnie nie było, wszyscy mnie opuścili: niech im to nie będzie policzone; (17) ale Pan stał przy mnie i dodał mi sił, aby przeze mnie dopełnione było zwiastowanie ewangelii, i aby je słyszeli wszyscy poganie; i zostałem wyrwany z paszczy lwiej. (18) Wyrwie mnie Pan ze wszystkiego złego i zachowa dla królestwa swego niebieskiego; jemu niech będzie chwała na wieki wieków. Amen.',
                        'unordered' => 'W pierwszej obronie mojej nikogo przy mnie nie było, wszyscy mnie opuścili: niech im to nie będzie policzone; ale Pan stał przy mnie i dodał mi sił, aby przeze mnie dopełnione było zwiastowanie ewangelii, i aby je słyszeli wszyscy poganie; i zostałem wyrwany z paszczy lwiej. Wyrwie mnie Pan ze wszystkiego złego i zachowa dla królestwa swego niebieskiego; jemu niech będzie chwała na wieki wieków. Amen.',
                        'description' => '2 List do Tymoteusza 4:16-18, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Odchodzę z domu',
                'code' => 'CGAV_013',
                'colour_value' => '#df5020'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_026',
                        'name' => 'Oto Ja posyłam was jak owce między wilki',
                        'siglum' => 'bw/mt/10/16-20',
                        'content' => '(16) Oto Ja posyłam was jak owce między wilki, bądźcie tedy roztropni jak węże i niewinni jak gołębice. (17) I strzeżcie się ludzi, albowiem będą was wydawać sądom i biczować w swoich synagogach. (18) I z mego powodu zawiodą was przed namiestników i królów, abyście złożyli świadectwo przed nimi i poganami. (19) A gdy was wydadzą, nie troszczcie się, jak i co macie mówić; albowiem będzie wam dane w tej godzinie, co macie mówić. (20) Bo nie wy jesteście tymi, którzy mówią, lecz Duch Ojca waszego, który mówi w was.',
                        'unordered' => 'Oto Ja posyłam was jak owce między wilki, bądźcie tedy roztropni jak węże i niewinni jak gołębice. I strzeżcie się ludzi, albowiem będą was wydawać sądom i biczować w swoich synagogach. I z mego powodu zawiodą was przed namiestników i królów, abyście złożyli świadectwo przed nimi i poganami. A gdy was wydadzą, nie troszczcie się, jak i co macie mówić; albowiem będzie wam dane w tej godzinie, co macie mówić. Bo nie wy jesteście tymi, którzy mówią, lecz Duch Ojca waszego, który mówi w was.',
                        'description' => 'Ewangelia Mateusza 10:16-20, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Jestem samotny',
                'code' => 'CGAV_014',
                'colour_value' => '#df7020'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_027',
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'bw/hebr/13/5-6',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Potrzebuję pokoju',
                'code' => 'CGAV_015',
                'colour_value' => '#50df20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_028',
                        'name' => 'Niechaj się nie trwoży serce wasze',
                        'siglum' => 'bw/jn/14/1-4',
                        'content' => '(1) Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! (2) W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. (3) A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. (4) I dokąd Ja idę, wiecie, i drogę znacie.',
                        'unordered' => 'Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. I dokąd Ja idę, wiecie, i drogę znacie.',
                        'description' => 'Ewangelia Jana 14:1-4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_029',
                        'name' => 'To powiedziałem wam, abyście we mnie pokój mieli',
                        'siglum' => 'bw/jn/16/33',
                        'content' => '(33) To powiedziałem wam, abyście we mnie pokój mieli. Na świecie ucisk mieć będziecie, ale ufajcie, Ja zwyciężyłem świat.',
                        'unordered' => 'To powiedziałem wam, abyście we mnie pokój mieli. Na świecie ucisk mieć będziecie, ale ufajcie, Ja zwyciężyłem świat.',
                        'description' => 'Ewangelia Jana 16:33, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_030',
                        'name' => 'Usprawiedliwieni tedy z wiary, pokój mamy z Bogiem',
                        'siglum' => 'bw/ro/5/1-5',
                        'content' => '(1) Usprawiedliwieni tedy z wiary, pokój mamy z Bogiem przez Pana naszego, Jezusa Chrystusa, (2) dzięki któremu też mamy dostęp przez wiarę do tej łaski, w której stoimy, i chlubimy się nadzieją chwały Bożej. (3) A nie tylko to, chlubimy się też z ucisków, wiedząc, że ucisk wywołuje cierpliwość, (4) a cierpliwość doświadczenie, doświadczenie zaś nadzieję; (5) a nadzieja nie zawodzi, bo miłość Boża rozlana jest w sercach naszych przez Ducha Świętego, który nam jest dany.',
                        'unordered' => 'Usprawiedliwieni tedy z wiary, pokój mamy z Bogiem przez Pana naszego, Jezusa Chrystusa, dzięki któremu też mamy dostęp przez wiarę do tej łaski, w której stoimy, i chlubimy się nadzieją chwały Bożej. A nie tylko to, chlubimy się też z ucisków, wiedząc, że ucisk wywołuje cierpliwość, a cierpliwość doświadczenie, doświadczenie zaś nadzieję; a nadzieja nie zawodzi, bo miłość Boża rozlana jest w sercach naszych przez Ducha Świętego, który nam jest dany.',
                        'description' => 'List do Rzymian 5:1-5, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_031',
                        'name' => 'Nie troszczcie się o nic',
                        'siglum' => 'bw/php/4/6-7',
                        'content' => '(6) Nie troszczcie się o nic, ale we wszystkim w modlitwie i błaganiach z dziękczynieniem powierzcie prośby wasze Bogu. (7) A pokój Boży, który przewyższa wszelki rozum, strzec będzie serc waszych i myśli waszych w Chrystusie Jezusie.',
                        'unordered' => 'Nie troszczcie się o nic, ale we wszystkim w modlitwie i błaganiach z dziękczynieniem powierzcie prośby wasze Bogu. A pokój Boży, który przewyższa wszelki rozum, strzec będzie serc waszych i myśli waszych w Chrystusie Jezusie.',
                        'description' => 'List do Filipian 4:6-7, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Potrzebuję wskazówek jak żyć',
                'code' => 'CGAV_016',
                'colour_value' => '#20dfdf'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_032',
                        'name' => 'Nie upodabniajcie się do tego świata',
                        'siglum' => 'bw/ro/12/1-21',
                        'content' => '(1) Wzywam was tedy, bracia, przez miłosierdzie Boże, abyście składali ciała swoje jako ofiarę żywą, świętą, miłą Bogu, bo taka winna być duchowa służba wasza. (2) A nie upodabniajcie się do tego świata, ale się przemieńcie przez odnowienie umysłu swego, abyście umieli rozróżnić, co jest wolą Bożą, co jest dobre, miłe i doskonałe. (3) Powiadam bowiem każdemu spośród was, mocą danej mi łaski, by nie rozumiał o sobie więcej, niż należy rozumieć, lecz by rozumiał z umiarem stosownie do wiary, jakiej Bóg każdemu udzielił. (4) Jak bowiem w jednym ciele wiele mamy członków, a nie wszystkie członki tę samą czynność wykonują, (5) tak my wszyscy jesteśmy jednym ciałem w Chrystusie, a z osobna jesteśmy członkami jedni drugich. (6) A mamy różne dary według udzielonej nam łaski; jeśli dar prorokowania, to niech będzie używany stosownie do wiary; (7) jeśli posługiwanie, to w usługiwaniu; jeśli kto naucza, to w nauczaniu; (8) jeśli kto napomina, to w napominaniu; jeśli kto obdarowuje, to w szczerości; kto jest przełożony, niech okaże gorliwość; kto okazuje miłosierdzie, niech to czyni z radością. (9) Miłość niech będzie nieobłudna. Brzydźcie się złem, trzymajcie się dobrego. (10) Miłością braterską jedni drugich miłujcie, wyprzedzajcie się wzajemnie w okazywaniu szacunku, (11) w gorliwości nie ustawając, płomienni duchem, Panu służcie, (12) w nadziei radośni, w ucisku cierpliwi, w modlitwie wytrwali; (13) wspierajcie świętych w potrzebach, okazujcie gościnność. (14) Błogosławcie tych, którzy was prześladują, błogosławcie, a nie przeklinajcie. (15) Weselcie się z weselącymi się, płaczcie z płaczącymi. (16) Bądźcie wobec siebie jednakowo usposobieni; nie bądźcie wyniośli, lecz się do niskich skłaniajcie; nie uważajcie sami siebie za mądrych. (17) Nikomu złem za złe nie oddawajcie, starajcie się o to, co jest dobre w oczach wszystkich ludzi. (18) Jeśli można, o ile to od was zależy, ze wszystkimi ludźmi pokój miejcie. (19) Najmilsi! Nie mścijcie się sami, ale pozostawcie to gniewowi Bożemu, albowiem napisano: Pomsta do mnie należy, Ja odpłacę, mówi Pan. (20) Jeśli tedy łaknie nieprzyjaciel twój, nakarm go; jeśli pragnie, napój go; bo czyniąc to, węgle rozżarzone zgarniesz na jego głowę. (21) Nie daj się zwyciężyć złu, ale zło dobrem zwyciężaj.',
                        'unordered' => 'Wzywam was tedy, bracia, przez miłosierdzie Boże, abyście składali ciała swoje jako ofiarę żywą, świętą, miłą Bogu, bo taka winna być duchowa służba wasza. A nie upodabniajcie się do tego świata, ale się przemieńcie przez odnowienie umysłu swego, abyście umieli rozróżnić, co jest wolą Bożą, co jest dobre, miłe i doskonałe. Powiadam bowiem każdemu spośród was, mocą danej mi łaski, by nie rozumiał o sobie więcej, niż należy rozumieć, lecz by rozumiał z umiarem stosownie do wiary, jakiej Bóg każdemu udzielił. Jak bowiem w jednym ciele wiele mamy członków, a nie wszystkie członki tę samą czynność wykonują, tak my wszyscy jesteśmy jednym ciałem w Chrystusie, a z osobna jesteśmy członkami jedni drugich. A mamy różne dary według udzielonej nam łaski; jeśli dar prorokowania, to niech będzie używany stosownie do wiary; jeśli posługiwanie, to w usługiwaniu; jeśli kto naucza, to w nauczaniu; jeśli kto napomina, to w napominaniu; jeśli kto obdarowuje, to w szczerości; kto jest przełożony, niech okaże gorliwość; kto okazuje miłosierdzie, niech to czyni z radością. Miłość niech będzie nieobłudna. Brzydźcie się złem, trzymajcie się dobrego. Miłością braterską jedni drugich miłujcie, wyprzedzajcie się wzajemnie w okazywaniu szacunku, w gorliwości nie ustawając, płomienni duchem, Panu służcie, w nadziei radośni, w ucisku cierpliwi, w modlitwie wytrwali; wspierajcie świętych w potrzebach, okazujcie gościnność. Błogosławcie tych, którzy was prześladują, błogosławcie, a nie przeklinajcie. Weselcie się z weselącymi się, płaczcie z płaczącymi. Bądźcie wobec siebie jednakowo usposobieni; nie bądźcie wyniośli, lecz się do niskich skłaniajcie; nie uważajcie sami siebie za mądrych. Nikomu złem za złe nie oddawajcie, starajcie się o to, co jest dobre w oczach wszystkich ludzi. Jeśli można, o ile to od was zależy, ze wszystkimi ludźmi pokój miejcie. Najmilsi! Nie mścijcie się sami, ale pozostawcie to gniewowi Bożemu, albowiem napisano: Pomsta do mnie należy, Ja odpłacę, mówi Pan. Jeśli tedy łaknie nieprzyjaciel twój, nakarm go; jeśli pragnie, napój go; bo czyniąc to, węgle rozżarzone zgarniesz na jego głowę. Nie daj się zwyciężyć złu, ale zło dobrem zwyciężaj.',
                        'description' => 'List do Rzymian 12:1-21, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Zwyciężam',
                'code' => 'CGAV_017',
                'colour_value' => '#40df20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_033',
                        'name' => 'Któż nas odłączy od miłości Chrystusowej?',
                        'siglum' => 'bw/ro/8/31-39',
                        'content' => '(31) Cóż tedy na to powiemy? Jeśli Bóg za nami, któż przeciwko nam? (32) On, który nawet własnego Syna nie oszczędził, ale go za nas wszystkich wydał, jakżeby nie miał z nim darować nam wszystkiego? (33) Któż będzie oskarżał wybranych Bożych? Przecież Bóg usprawiedliwia. (34) Któż będzie potępiał? Jezus Chrystus, który umarł, więcej, zmartwychwstał, który jest po prawicy Boga, Ten przecież wstawia się za nami. (35) Któż nas odłączy od miłości Chrystusowej? Czy utrapienie, czy ucisk, czy prześladowanie, czy głód, czy nagość, czy niebezpieczeństwo, czy miecz? (36) Jak napisano: Z powodu ciebie co dzień nas zabijają, uważają nas za owce ofiarne. (37) Ale w tym wszystkim zwyciężamy przez tego, który nas umiłował. (38) Albowiem jestem tego pewien, że ani śmierć, ani życie, ani aniołowie, ani potęgi niebieskie, ani teraźniejszość, ani przyszłość, ani moce, (39) ani wysokość, ani głębokość, ani żadne inne stworzenie nie zdoła nas odłączyć od miłości Bożej, która jest w Chrystusie Jezusie, Panu naszym.',
                        'unordered' => 'Cóż tedy na to powiemy? Jeśli Bóg za nami, któż przeciwko nam? On, który nawet własnego Syna nie oszczędził, ale go za nas wszystkich wydał, jakżeby nie miał z nim darować nam wszystkiego? Któż będzie oskarżał wybranych Bożych? Przecież Bóg usprawiedliwia. Któż będzie potępiał? Jezus Chrystus, który umarł, więcej, zmartwychwstał, który jest po prawicy Boga, Ten przecież wstawia się za nami. Któż nas odłączy od miłości Chrystusowej? Czy utrapienie, czy ucisk, czy prześladowanie, czy głód, czy nagość, czy niebezpieczeństwo, czy miecz? Jak napisano: Z powodu ciebie co dzień nas zabijają, uważają nas za owce ofiarne. Ale w tym wszystkim zwyciężamy przez tego, który nas umiłował. Albowiem jestem tego pewien, że ani śmierć, ani życie, ani aniołowie, ani potęgi niebieskie, ani teraźniejszość, ani przyszłość, ani moce, ani wysokość, ani głębokość, ani żadne inne stworzenie nie zdoła nas odłączyć od miłości Bożej, która jest w Chrystusie Jezusie, Panu naszym.',
                        'description' => 'List do Rzymian 8:31-39, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_034',
                        'name' => 'A to piszemy, aby radość nasza była pełna',
                        'siglum' => 'bw/1jn/1/4-9',
                        'content' => '(4) A to piszemy, aby radość nasza była pełna. (5) A zwiastowanie to, które słyszeliśmy od niego i które wam ogłaszamy, jest takie, że Bóg jest światłością, a nie ma w nim żadnej ciemności. (6) Jeśli mówimy, że z nim społeczność mamy, a chodzimy w ciemności, kłamiemy i nie trzymamy się prawdy. (7) Jeśli zaś chodzimy w światłości, jak On sam jest w światłości, społeczność mamy z sobą, i krew Jezusa Chrystusa, Syna jego, oczyszcza nas od wszelkiego grzechu. (8) Jeśli mówimy, że grzechu nie mamy, sami siebie zwodzimy, i prawdy w nas nie ma. (9) Jeśli wyznajemy grzechy swoje, wierny jest Bóg i sprawiedliwy i odpuści nam grzechy, i oczyści nas od wszelkiej nieprawości.',
                        'unordered' => 'A to piszemy, aby radość nasza była pełna. A zwiastowanie to, które słyszeliśmy od niego i które wam ogłaszamy, jest takie, że Bóg jest światłością, a nie ma w nim żadnej ciemności. Jeśli mówimy, że z nim społeczność mamy, a chodzimy w ciemności, kłamiemy i nie trzymamy się prawdy. Jeśli zaś chodzimy w światłości, jak On sam jest w światłości, społeczność mamy z sobą, i krew Jezusa Chrystusa, Syna jego, oczyszcza nas od wszelkiego grzechu. Jeśli mówimy, że grzechu nie mamy, sami siebie zwodzimy, i prawdy w nas nie ma. Jeśli wyznajemy grzechy swoje, wierny jest Bóg i sprawiedliwy i odpuści nam grzechy, i oczyści nas od wszelkiej nieprawości.',
                        'description' => '1 List Jana 1:4-9, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'W modlitwie',
                'code' => 'CGAV_018',
                'colour_value' => '#dfbf20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_035',
                        'name' => 'Panie, naucz nas modlić się',
                        'siglum' => 'bw/lk/11/1-13',
                        'content' => '(1) A gdy On w pewnym miejscu modlił się i zakończył modlitwę, ktoś z jego uczniów rzekł do niego: Panie, naucz nas modlić się, jak i Jan nauczył uczniów swoich. (2) Wtedy rzekł do nich: Gdy się modlicie, mówcie: Ojcze nasz, któryś jest w niebie, święć się imię twoje, przyjdź Królestwo twoje, (3) Bądź wola twoja, jak w niebie tak i na ziemi, chleba naszego powszedniego daj nam na każdy dzień, (4) i odpuść nam grzechy nasze, albowiem i my odpuszczamy każdemu winowajcy swemu, i nie wódź nas na pokuszenie, ale nas zbaw ode złego. (5) I rzekł do nich: Któż z was, mając przyjaciela, pójdzie do niego o północy i powie mu: Przyjacielu, pożycz mi trzy chleby, (6) albowiem przyjaciel mój przybył do mnie, będąc w podróży, a nie mam mu co podać. (7) A tamten z mieszkania odpowie mu: Nie naprzykrzaj mi się, drzwi już są zamknięte, dzieci moje są ze mną w łóżku, nie mogę wstać i dać ci. (8) Powiadam wam, jeżeli nawet nie dlatego wstanie i da mu, że jest jego przyjacielem, to dla natręctwa jego wstanie i da mu, ile potrzebuje. (9) A ja wam powiadam: Proście, a będzie wam dane; szukajcie, a znajdziecie; kołaczcie, a otworzą wam. (10) Każdy bowiem, kto prosi, otrzymuje, a kto szuka, znajduje, a kto kołacze, temu otworzą. (11) Gdzież jest taki ojciec pośród was, który, gdy syn będzie go prosił o chleb, da mu kamień? Albo gdy będzie go prosił o rybę, da mu zamiast ryby węża? (12) Albo gdy będzie prosił o jajo, da mu skorpiona? (13) Jeśli więc wy, którzy jesteście źli, umiecie dobre dary dawać dzieciom swoim, o ileż bardziej Ojciec niebieski da Ducha Świętego tym, którzy go proszą.',
                        'unordered' => 'A gdy On w pewnym miejscu modlił się i zakończył modlitwę, ktoś z jego uczniów rzekł do niego: Panie, naucz nas modlić się, jak i Jan nauczył uczniów swoich. Wtedy rzekł do nich: Gdy się modlicie, mówcie: Ojcze nasz, któryś jest w niebie, święć się imię twoje, przyjdź Królestwo twoje, Bądź wola twoja, jak w niebie tak i na ziemi, chleba naszego powszedniego daj nam na każdy dzień, i odpuść nam grzechy nasze, albowiem i my odpuszczamy każdemu winowajcy swemu, i nie wódź nas na pokuszenie, ale nas zbaw ode złego. I rzekł do nich: Któż z was, mając przyjaciela, pójdzie do niego o północy i powie mu: Przyjacielu, pożycz mi trzy chleby, albowiem przyjaciel mój przybył do mnie, będąc w podróży, a nie mam mu co podać. A tamten z mieszkania odpowie mu: Nie naprzykrzaj mi się, drzwi już są zamknięte, dzieci moje są ze mną w łóżku, nie mogę wstać i dać ci. Powiadam wam, jeżeli nawet nie dlatego wstanie i da mu, że jest jego przyjacielem, to dla natręctwa jego wstanie i da mu, ile potrzebuje. A ja wam powiadam: Proście, a będzie wam dane; szukajcie, a znajdziecie; kołaczcie, a otworzą wam. Każdy bowiem, kto prosi, otrzymuje, a kto szuka, znajduje, a kto kołacze, temu otworzą. Gdzież jest taki ojciec pośród was, który, gdy syn będzie go prosił o chleb, da mu kamień? Albo gdy będzie go prosił o rybę, da mu zamiast ryby węża? Albo gdy będzie prosił o jajo, da mu skorpiona? Jeśli więc wy, którzy jesteście źli, umiecie dobre dary dawać dzieciom swoim, o ileż bardziej Ojciec niebieski da Ducha Świętego tym, którzy go proszą.',
                        'description' => 'Ewangelia Łukasza 11:1-13, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_036',
                        'name' => 'Modlitwa arcykapłańska Jezusa Chrystusa',
                        'siglum' => 'bw/jn/17/1-26',
                        'content' => '(1) To powiedział Jezus, a podniósłszy oczy swoje ku niebu, rzekł: Ojcze! Nadeszła godzina; uwielbij Syna swego, aby Syn uwielbił ciebie; (2) jak mu dałeś władzę nad wszelkim ciałem, aby dał żywot wieczny tym wszystkim, których mu dałeś. (3) A to jest żywot wieczny, aby poznali ciebie, jedynego prawdziwego Boga i Jezusa Chrystusa, którego posłałeś. (4) Ja cię uwielbiłem na ziemi; dokonałem dzieła, które mi zleciłeś, abym je wykonał; (5) a teraz Ty mnie uwielbij, Ojcze, u siebie samego tą chwałą, którą miałem u ciebie, zanim świat powstał. (6) Objawiłem imię twoje ludziom, których mi dałeś ze świata; twoimi byli i mnie ich dałeś, i strzegli słowa twojego. (7) Teraz poznali, że wszystko, co mi dałeś, od ciebie pochodzi; (8) albowiem dałem im słowa, które mi dałeś, i oni je przyjęli i prawdziwie poznali, że od ciebie wyszedłem, i uwierzyli, że mnie posłałeś. (9) Ja za nimi proszę, nie za światem proszę, lecz za tymi, których mi dałeś, ponieważ oni są twoi; (10) i wszystko moje jest twoje, a twoje jest moje i uwielbiony jestem w nich. (11) I już nie jestem na świecie, lecz oni są na świecie, a Ja do ciebie idę. Ojcze święty, zachowaj w imieniu twoim tych, których mi dałeś, aby byli jedno, jak my. (12) Dopóki byłem z nimi na świecie, zachowywałem w imieniu twoim tych, których mi dałeś, i strzegłem, i żaden z nich nie zginął, prócz syna zatracenia, by się wypełniło Pismo. (13) Ale teraz do ciebie idę i mówię to na świecie, aby mieli w sobie moją radość w pełni. (14) Ja dałem im słowo twoje, a świat ich znienawidził, ponieważ nie są ze świata, jak Ja nie jestem ze świata. (15) Nie proszę, abyś ich wziął ze świata, lecz abyś ich zachował od złego. (16) Nie są ze świata, jak i Ja nie jestem ze świata. (17) Poświęć ich w prawdzie twojej; słowo twoje jest prawdą. (18) Jak mnie posłałeś na świat, tak i ja posłałem ich na świat; (19) i za nich poświęcam siebie samego, aby i oni byli poświęceni w prawdzie. (20) A nie tylko za nimi proszę, ale i za tymi, którzy przez ich słowo uwierzą we mnie. (21) Aby wszyscy byli jedno, jak Ty, Ojcze, we mnie, a Ja w tobie, aby i oni w nas jedno byli, aby świat uwierzył, że Ty mnie posłałeś. (22) A Ja dałem im chwałę, którą mi dałeś, aby byli jedno, jak my jedno jesteśmy. (23) Ja w nich, a Ty we mnie, aby byli doskonali w jedności, żeby świat poznał, że Ty mnie posłałeś i że ich umiłowałeś, jak i mnie umiłowałeś. (24) Ojcze! Chcę, aby ci, których mi dałeś, byli ze mną, gdzie Ja jestem, aby oglądali chwałę moją, którą mi dałeś, gdyż umiłowałeś mnie przed założeniem świata. (25) Ojcze sprawiedliwy! I świat cię nie poznał, lecz Ja cię poznałem i ci poznali, że Ty mnie posłałeś; (26) i objawiłem im imię twoje, i objawię, aby miłość, którą mnie umiłowałeś, w nich była, i Ja w nich.',
                        'unordered' => 'To powiedział Jezus, a podniósłszy oczy swoje ku niebu, rzekł: Ojcze! Nadeszła godzina; uwielbij Syna swego, aby Syn uwielbił ciebie; jak mu dałeś władzę nad wszelkim ciałem, aby dał żywot wieczny tym wszystkim, których mu dałeś. A to jest żywot wieczny, aby poznali ciebie, jedynego prawdziwego Boga i Jezusa Chrystusa, którego posłałeś. Ja cię uwielbiłem na ziemi; dokonałem dzieła, które mi zleciłeś, abym je wykonał; a teraz Ty mnie uwielbij, Ojcze, u siebie samego tą chwałą, którą miałem u ciebie, zanim świat powstał. Objawiłem imię twoje ludziom, których mi dałeś ze świata; twoimi byli i mnie ich dałeś, i strzegli słowa twojego. Teraz poznali, że wszystko, co mi dałeś, od ciebie pochodzi; albowiem dałem im słowa, które mi dałeś, i oni je przyjęli i prawdziwie poznali, że od ciebie wyszedłem, i uwierzyli, że mnie posłałeś. Ja za nimi proszę, nie za światem proszę, lecz za tymi, których mi dałeś, ponieważ oni są twoi; i wszystko moje jest twoje, a twoje jest moje i uwielbiony jestem w nich. I już nie jestem na świecie, lecz oni są na świecie, a Ja do ciebie idę. Ojcze święty, zachowaj w imieniu twoim tych, których mi dałeś, aby byli jedno, jak my. Dopóki byłem z nimi na świecie, zachowywałem w imieniu twoim tych, których mi dałeś, i strzegłem, i żaden z nich nie zginął, prócz syna zatracenia, by się wypełniło Pismo. Ale teraz do ciebie idę i mówię to na świecie, aby mieli w sobie moją radość w pełni. Ja dałem im słowo twoje, a świat ich znienawidził, ponieważ nie są ze świata, jak Ja nie jestem ze świata. Nie proszę, abyś ich wziął ze świata, lecz abyś ich zachował od złego. Nie są ze świata, jak i Ja nie jestem ze świata. Poświęć ich w prawdzie twojej; słowo twoje jest prawdą. Jak mnie posłałeś na świat, tak i ja posłałem ich na świat; i za nich poświęcam siebie samego, aby i oni byli poświęceni w prawdzie. A nie tylko za nimi proszę, ale i za tymi, którzy przez ich słowo uwierzą we mnie. Aby wszyscy byli jedno, jak Ty, Ojcze, we mnie, a Ja w tobie, aby i oni w nas jedno byli, aby świat uwierzył, że Ty mnie posłałeś. A Ja dałem im chwałę, którą mi dałeś, aby byli jedno, jak my jedno jesteśmy. Ja w nich, a Ty we mnie, aby byli doskonali w jedności, żeby świat poznał, że Ty mnie posłałeś i że ich umiłowałeś, jak i mnie umiłowałeś. Ojcze! Chcę, aby ci, których mi dałeś, byli ze mną, gdzie Ja jestem, aby oglądali chwałę moją, którą mi dałeś, gdyż umiłowałeś mnie przed założeniem świata. Ojcze sprawiedliwy! I świat cię nie poznał, lecz Ja cię poznałem i ci poznali, że Ty mnie posłałeś; i objawiłem im imię twoje, i objawię, aby miłość, którą mnie umiłowałeś, w nich była, i Ja w nich.',
                        'description' => 'Ewangelia Jana 17:1-26, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_037',
                        'name' => 'Pan Bóg wysłuchuje nas',
                        'siglum' => 'bw/1jn/5/14-15',
                        'content' => '(14) Taka zaś jest ufność, jaką mamy do niego, iż jeżeli prosimy o coś według jego woli, wysłuchuje nas. (15) A jeżeli wiemy, że nas wysłuchuje, o co prosimy, wiemy też, że otrzymaliśmy już od niego to, o co prosiliśmy.',
                        'unordered' => 'Taka zaś jest ufność, jaką mamy do niego, iż jeżeli prosimy o coś według jego woli, wysłuchuje nas. A jeżeli wiemy, że nas wysłuchuje, o co prosimy, wiemy też, że otrzymaliśmy już od niego to, o co prosiliśmy.',
                        'description' => '1 List Jana 5:14-15, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'W chorobie i bólu',
                'code' => 'CGAV_019',
                'colour_value' => '#8fdf20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_038',
                        'name' => 'Bądź wola Twoja!',
                        'siglum' => 'bw/mt/26/39',
                        'content' => '(39) Potem postąpił nieco dalej, upadł na oblicze swoje, modlił się i mówił: Ojcze mój, jeśli można, niech mnie ten kielich minie; wszakże nie jako Ja chcę, ale jako Ty.',
                        'unordered' => 'Potem postąpił nieco dalej, upadł na oblicze swoje, modlił się i mówił: Ojcze mój, jeśli można, niech mnie ten kielich minie; wszakże nie jako Ja chcę, ale jako Ty.',
                        'description' => 'Ewangelia Mateusza 26:39, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_039',
                        'name' => 'Chlubimy się z ucisków',
                        'siglum' => 'bw/ro/5/3-5',
                        'content' => '(3) A nie tylko to, chlubimy się też z ucisków, wiedząc, że ucisk wywołuje cierpliwość, (4) a cierpliwość doświadczenie, doświadczenie zaś nadzieję; (5) a nadzieja nie zawodzi, bo miłość Boża rozlana jest w sercach naszych przez Ducha Świętego, który nam jest dany.',
                        'unordered' => 'A nie tylko to, chlubimy się też z ucisków, wiedząc, że ucisk wywołuje cierpliwość, a cierpliwość doświadczenie, doświadczenie zaś nadzieję; a nadzieja nie zawodzi, bo miłość Boża rozlana jest w sercach naszych przez Ducha Świętego, który nam jest dany.',
                        'description' => 'List do Rzymian 5:3-5, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_040',
                        'name' => 'Dosyć masz, gdy masz łaskę moją',
                        'siglum' => 'bw/2co/12/9-10',
                        'content' => '(9) Lecz powiedział do mnie: Dosyć masz, gdy masz łaskę moją, albowiem pełnia mej mocy okazuje się w słabości. Najchętniej więc chlubić się będę słabościami, aby zamieszkała we mnie moc Chrystusowa. (10) Dlatego mam upodobanie w słabościach, w zniewagach, w potrzebach, w prześladowaniach, w uciskach dla Chrystusa; albowiem kiedy jestem słaby, wtedy jestem mocny.',
                        'unordered' => 'Lecz powiedział do mnie: Dosyć masz, gdy masz łaskę moją, albowiem pełnia mej mocy okazuje się w słabości. Najchętniej więc chlubić się będę słabościami, aby zamieszkała we mnie moc Chrystusowa. Dlatego mam upodobanie w słabościach, w zniewagach, w potrzebach, w prześladowaniach, w uciskach dla Chrystusa; albowiem kiedy jestem słaby, wtedy jestem mocny.',
                        'description' => '2 list do Koryntian 12:9-10, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_041',
                        'name' => 'Błogosławieni jesteście, jeśli was znieważają dla imienia Chrystusowego',
                        'siglum' => 'bw/1pe/4/12-19',
                        'content' => '(12) Najmilsi! Nie dziwcie się, jakby was coś niezwykłego spotkało, gdy was pali ogień, który służy doświadczeniu waszemu, (13) ale w tej mierze, jak jesteście uczestnikami cierpień Chrystusowych, radujcie się, abyście i podczas objawienia chwały jego radowali się i weselili. (14) Błogosławieni jesteście, jeśli was znieważają dla imienia Chrystusowego, gdyż Duch chwały, Duch Boży, spoczywa na was. (15) A niech nikt z was nie cierpi jako zabójca albo złodziej, albo złoczyńca, albo jako człowiek, który się wtrąca do cudzych spraw. (16) Wszakże jeśli cierpi jako chrześcijanin, niech tego nie uważa za hańbę, niech raczej tym imieniem wielbi Boga. (17) Nadszedł bowiem czas, aby się rozpoczął sąd od domu Bożego; a jeśli zaczyna się od nas, to jakiż koniec czeka tych, którzy nie wierzą ewangelii Bożej? (18) A jeśli sprawiedliwy z trudnością dostąpi zbawienia, to bezbożny i grzesznik gdzież się znajdą? (19) Przeto i ci, którzy cierpią według woli Bożej, niech dobrze czyniąc powierzą wiernemu Stwórcy dusze swoje.',
                        'unordered' => 'Najmilsi! Nie dziwcie się, jakby was coś niezwykłego spotkało, gdy was pali ogień, który służy doświadczeniu waszemu, ale w tej mierze, jak jesteście uczestnikami cierpień Chrystusowych, radujcie się, abyście i podczas objawienia chwały jego radowali się i weselili. Błogosławieni jesteście, jeśli was znieważają dla imienia Chrystusowego, gdyż Duch chwały, Duch Boży, spoczywa na was. A niech nikt z was nie cierpi jako zabójca albo złodziej, albo złoczyńca, albo jako człowiek, który się wtrąca do cudzych spraw. Wszakże jeśli cierpi jako chrześcijanin, niech tego nie uważa za hańbę, niech raczej tym imieniem wielbi Boga. Nadszedł bowiem czas, aby się rozpoczął sąd od domu Bożego; a jeśli zaczyna się od nas, to jakiż koniec czeka tych, którzy nie wierzą ewangelii Bożej? A jeśli sprawiedliwy z trudnością dostąpi zbawienia, to bezbożny i grzesznik gdzież się znajdą? Przeto i ci, którzy cierpią według woli Bożej, niech dobrze czyniąc powierzą wiernemu Stwórcy dusze swoje.',
                        'description' => '1 List Piotra 4:12-19, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'W znużeniu',
                'code' => 'CGAV_020',
                'colour_value' => '#df3020'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_042',
                        'name' => 'Pójdźcie do mnie wszyscy',
                        'siglum' => 'bw/mt/11/28-30',
                        'content' => '(28) Pójdźcie do mnie wszyscy, którzy jesteście spracowani i obciążeni, a Ja wam dam ukojenie. (29) Weźcie na siebie moje jarzmo i uczcie się ode mnie, że jestem cichy i pokornego serca, a znajdziecie ukojenie dla dusz waszych. (30) Albowiem jarzmo moje jest miłe, a brzemię moje lekkie.',
                        'unordered' => 'Pójdźcie do mnie wszyscy, którzy jesteście spracowani i obciążeni, a Ja wam dam ukojenie. Weźcie na siebie moje jarzmo i uczcie się ode mnie, że jestem cichy i pokornego serca, a znajdziecie ukojenie dla dusz waszych. Albowiem jarzmo moje jest miłe, a brzemię moje lekkie.',
                        'description' => 'Ewangelia Mateusza 11:28-30, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_043',
                        'name' => 'Bądźcie stali, niewzruszeni, zawsze pełni zapału do pracy dla Pana',
                        'siglum' => 'bw/1co/15/58',
                        'content' => '(58) A tak, bracia moi mili, bądźcie stali, niewzruszeni, zawsze pełni zapału do pracy dla Pana, wiedząc, że trud wasz nie jest daremny w Panu.',
                        'unordered' => 'A tak, bracia moi mili, bądźcie stali, niewzruszeni, zawsze pełni zapału do pracy dla Pana, wiedząc, że trud wasz nie jest daremny w Panu.',
                        'description' => '1 list do Koryntian 15:58, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_044',
                        'name' => 'Czynić dobrze nie ustawajmy',
                        'siglum' => 'bw/gal/6/9-10',
                        'content' => '(9) A czynić dobrze nie ustawajmy, albowiem we właściwym czasie żąć będziemy bez znużenia. (10) Przeto, póki czas mamy, dobrze czyńmy wszystkim, a najwięcej domownikom wiary.',
                        'unordered' => 'A czynić dobrze nie ustawajmy, albowiem we właściwym czasie żąć będziemy bez znużenia. Przeto, póki czas mamy, dobrze czyńmy wszystkim, a najwięcej domownikom wiary.',
                        'description' => 'List do Galatów 6:9-10, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Potrzebuję Bożej pomocy',
                'code' => 'CGAV_021',
                'colour_value' => '#df4020'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_045',
                        'name' => 'Zaspokojenie wszelkiej potrzeby',
                        'siglum' => 'bw/php/4/19',
                        'content' => '(19) A Bóg mój zaspokoi wszelką potrzebę waszą według bogactwa swego w chwale, w Chrystusie Jezusie.',
                        'unordered' => 'A Bóg mój zaspokoi wszelką potrzebę waszą według bogactwa swego w chwale, w Chrystusie Jezusie.',
                        'description' => 'List do Filipian 4:19, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'W smutku',
                'code' => 'CGAV_022',
                'colour_value' => '#2070df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_046',
                        'name' => 'Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni.',
                        'siglum' => 'bw/mt/5/4',
                        'content' => '(4) Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni.',
                        'unordered' => 'Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni.',
                        'description' => 'Ewangelia Mateusza 5:4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_047',
                        'name' => 'Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie!',
                        'siglum' => 'bw/jn/14/1-31',
                        'content' => '(1) Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! (2) W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. (3) A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. (4) I dokąd Ja idę, wiecie, i drogę znacie. (5) Rzekł do niego Tomasz: Panie, nie wiemy, dokąd idziesz, jakże możemy znać drogę? (6) Odpowiedział mu Jezus: Ja jestem droga i prawda, i żywot, nikt nie przychodzi do Ojca, tylko przeze mnie. (7) Gdybyście byli mnie poznali i Ojca mego byście znali; odtąd go znacie i widzieliście go. (8) Rzekł mu Filip: Panie, pokaż nam Ojca, a wystarczy nam. (9) Odpowiedział mu Jezus: Tak długo jestem z wami i nie poznałeś mnie, Filipie? Kto mnie widział, widział Ojca; jak możesz mówić: Pokaż nam Ojca? (10) Czy nie wierzysz, że jestem w Ojcu, a Ojciec we mnie? Słowa, które do was mówię, nie od siebie mówię, ale Ojciec, który jest we mnie, wykonuje dzieła swoje. (11) Wierzcie mi, że Ja jestem w Ojcu, a Ojciec we mnie; a jeśliby tak nie było, to dla samych uczynków wierzcie. (12) Zaprawdę, zaprawdę, powiadam wam: Kto wierzy we mnie, ten także dokonywać będzie uczynków, które Ja czynię, i większe nad te czynić będzie; bo Ja idę do Ojca. (13) I o cokolwiek prosić będziecie w imieniu moim, to uczynię, aby Ojciec był uwielbiony w Synu. (14) Jeśli o co prosić będziecie w imieniu moim, spełnię to. (15) Jeśli mnie miłujecie, przykazań moich przestrzegać będziecie. (16) Ja prosić będę Ojca i da wam innego Pocieszyciela, aby był z wami na wieki - (17) Ducha prawdy, którego świat przyjąć nie może, bo go nie widzi i nie zna; wy go znacie, bo przebywa wśród was i w was będzie. (18) Nie zostawię was sierotami, przyjdę do was. (19) Jeszcze tylko krótki czas i świat mnie oglądać nie będzie; lecz wy oglądać mnie będziecie, bo Ja żyję i wy żyć będziecie. (20) Owego dnia poznacie, że jestem w Ojcu moim i wy we mnie, a Ja w was. (21) Kto ma przykazania moje i przestrzega ich, ten mnie miłuje; a kto mnie miłuje, tego też będzie miłował Ojciec i Ja miłować go będę, i objawię mu samego siebie. (22) Rzekł mu Judasz, nie Iskariota: Panie, cóż się stało, że masz się nam objawić, a nie światu? (23) Odpowiedział Jezus i rzekł mu: Jeśli kto mnie miłuje, słowa mojego przestrzegać będzie, i Ojciec mój umiłuje go, i do niego przyjdziemy, i u niego zamieszkamy. (24) Kto mnie nie miłuje, ten słów moich nie przestrzega, a przecież słowo, które słyszycie, nie jest moim słowem, lecz Ojca, który mnie posłał. (25) To wam powiedziałem z wami przebywając. (26) Lecz Pocieszyciel, Duch Święty, którego Ojciec pośle w imieniu moim, nauczy was wszystkiego i przypomni wam wszystko, co wam powiedziałem. (27) Pokój zostawiam wam, mój pokój daję wam; nie jak świat daje, Ja wam daję. Niech się nie trwoży serce wasze i niech się nie lęka. (28) Słyszeliście, że powiedziałem wam: Odchodzę i przychodzę do was. Gdybyście mnie miłowali, tobyście się radowali, że idę do Ojca, bo Ojciec większy jest niż Ja. (29) Teraz powiedziałem wam, zanim się to stanie, abyście uwierzyli, gdy się to stanie. (30) Już wiele nie będę mówił z wami, nadchodzi bowiem władca świata, ale nie ma on nic do mnie; (31) lecz świat musi poznać, że miłuję Ojca i że tak czynię, jak mi polecił Ojciec. Wstańcie, pójdźmy stąd.',
                        'unordered' => 'Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. I dokąd Ja idę, wiecie, i drogę znacie. Rzekł do niego Tomasz: Panie, nie wiemy, dokąd idziesz, jakże możemy znać drogę? Odpowiedział mu Jezus: Ja jestem droga i prawda, i żywot, nikt nie przychodzi do Ojca, tylko przeze mnie. Gdybyście byli mnie poznali i Ojca mego byście znali; odtąd go znacie i widzieliście go. Rzekł mu Filip: Panie, pokaż nam Ojca, a wystarczy nam. Odpowiedział mu Jezus: Tak długo jestem z wami i nie poznałeś mnie, Filipie? Kto mnie widział, widział Ojca; jak możesz mówić: Pokaż nam Ojca? Czy nie wierzysz, że jestem w Ojcu, a Ojciec we mnie? Słowa, które do was mówię, nie od siebie mówię, ale Ojciec, który jest we mnie, wykonuje dzieła swoje. Wierzcie mi, że Ja jestem w Ojcu, a Ojciec we mnie; a jeśliby tak nie było, to dla samych uczynków wierzcie. Zaprawdę, zaprawdę, powiadam wam: Kto wierzy we mnie, ten także dokonywać będzie uczynków, które Ja czynię, i większe nad te czynić będzie; bo Ja idę do Ojca. I o cokolwiek prosić będziecie w imieniu moim, to uczynię, aby Ojciec był uwielbiony w Synu. Jeśli o co prosić będziecie w imieniu moim, spełnię to. Jeśli mnie miłujecie, przykazań moich przestrzegać będziecie. Ja prosić będę Ojca i da wam innego Pocieszyciela, aby był z wami na wieki - Ducha prawdy, którego świat przyjąć nie może, bo go nie widzi i nie zna; wy go znacie, bo przebywa wśród was i w was będzie. Nie zostawię was sierotami, przyjdę do was. Jeszcze tylko krótki czas i świat mnie oglądać nie będzie; lecz wy oglądać mnie będziecie, bo Ja żyję i wy żyć będziecie. Owego dnia poznacie, że jestem w Ojcu moim i wy we mnie, a Ja w was. Kto ma przykazania moje i przestrzega ich, ten mnie miłuje; a kto mnie miłuje, tego też będzie miłował Ojciec i Ja miłować go będę, i objawię mu samego siebie. Rzekł mu Judasz, nie Iskariota: Panie, cóż się stało, że masz się nam objawić, a nie światu? Odpowiedział Jezus i rzekł mu: Jeśli kto mnie miłuje, słowa mojego przestrzegać będzie, i Ojciec mój umiłuje go, i do niego przyjdziemy, i u niego zamieszkamy. Kto mnie nie miłuje, ten słów moich nie przestrzega, a przecież słowo, które słyszycie, nie jest moim słowem, lecz Ojca, który mnie posłał. To wam powiedziałem z wami przebywając. Lecz Pocieszyciel, Duch Święty, którego Ojciec pośle w imieniu moim, nauczy was wszystkiego i przypomni wam wszystko, co wam powiedziałem. Pokój zostawiam wam, mój pokój daję wam; nie jak świat daje, Ja wam daję. Niech się nie trwoży serce wasze i niech się nie lęka. Słyszeliście, że powiedziałem wam: Odchodzę i przychodzę do was. Gdybyście mnie miłowali, tobyście się radowali, że idę do Ojca, bo Ojciec większy jest niż Ja. Teraz powiedziałem wam, zanim się to stanie, abyście uwierzyli, gdy się to stanie. Już wiele nie będę mówił z wami, nadchodzi bowiem władca świata, ale nie ma on nic do mnie; lecz świat musi poznać, że miłuję Ojca i że tak czynię, jak mi polecił Ojciec. Wstańcie, pójdźmy stąd.',
                        'description' => 'Ewangelia Jana 14:1-31, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_048',
                        'name' => 'Błogosławiony niech będzie Bóg i Ojciec Pana naszego Jezusa Chrystusa',
                        'siglum' => 'bw/2co/1/3-4',
                        'content' => '(3) Błogosławiony niech będzie Bóg i Ojciec Pana naszego Jezusa Chrystusa, Ojciec miłosierdzia i Bóg wszelkiej pociechy, (4) który pociesza nas we wszelkim utrapieniu naszym, abyśmy tych, którzy są w jakimkolwiek utrapieniu, pocieszać mogli taką pociechą, jaką nas samych Bóg pociesza.',
                        'unordered' => 'Błogosławiony niech będzie Bóg i Ojciec Pana naszego Jezusa Chrystusa, Ojciec miłosierdzia i Bóg wszelkiej pociechy, który pociesza nas we wszelkim utrapieniu naszym, abyśmy tych, którzy są w jakimkolwiek utrapieniu, pocieszać mogli taką pociechą, jaką nas samych Bóg pociesza.',
                        'description' => '2 list do Koryntian 1:3-4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_049',
                        'name' => 'Pocieszajmy się, tymi słowy, że spotkamy Pana w obłokach',
                        'siglum' => 'bw/1th/4/13-18',
                        'content' => '(13) A nie chcemy, bracia, abyście byli w niepewności co do tych, którzy zasnęli, abyście się nie smucili, jak drudzy, którzy nie mają nadziei. (14) Albowiem jak wierzymy, że Jezus umarł i zmartwychwstał, tak też wierzymy, że Bóg przez Jezusa przywiedzie z nim tych, którzy zasnęli. (15) A to wam mówimy na podstawie Słowa Pana, że my, którzy pozostaniemy przy życiu aż do przyjścia Pana, nie wyprzedzimy tych, którzy zasnęli. (16) Gdyż sam Pan na dany rozkaz, na głos archanioła i trąby Bożej zstąpi z nieba; wtedy najpierw powstaną ci, którzy umarli w Chrystusie, (17) potem my, którzy pozostaniemy przy życiu, razem z nimi porwani będziemy w obłokach w powietrze, na spotkanie Pana; i tak zawsze będziemy z Panem. (18) Przeto pocieszajcie się nawzajem tymi słowy.',
                        'unordered' => 'A nie chcemy, bracia, abyście byli w niepewności co do tych, którzy zasnęli, abyście się nie smucili, jak drudzy, którzy nie mają nadziei. Albowiem jak wierzymy, że Jezus umarł i zmartwychwstał, tak też wierzymy, że Bóg przez Jezusa przywiedzie z nim tych, którzy zasnęli. A to wam mówimy na podstawie Słowa Pana, że my, którzy pozostaniemy przy życiu aż do przyjścia Pana, nie wyprzedzimy tych, którzy zasnęli. Gdyż sam Pan na dany rozkaz, na głos archanioła i trąby Bożej zstąpi z nieba; wtedy najpierw powstaną ci, którzy umarli w Chrystusie, potem my, którzy pozostaniemy przy życiu, razem z nimi porwani będziemy w obłokach w powietrze, na spotkanie Pana; i tak zawsze będziemy z Panem. Przeto pocieszajcie się nawzajem tymi słowy.',
                        'description' => '1 List do Tesaloniczan 4:13-18, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'W pokuszeniu',
                'code' => 'CGAV_023',
                'colour_value' => '#df2080'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_050',
                        'name' => 'Czuwajcie i módlcie się',
                        'siglum' => 'bw/mt/26/41',
                        'content' => '(41) Czuwajcie i módlcie się, abyście nie popadli w pokuszenie; duch wprawdzie jest ochotny, ale ciało mdłe.',
                        'unordered' => 'Czuwajcie i módlcie się, abyście nie popadli w pokuszenie; duch wprawdzie jest ochotny, ale ciało mdłe.',
                        'description' => 'Ewangelia Mateusza 26:41, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_051',
                        'name' => 'Kto mniema, że stoi, niech baczy, aby nie upadł',
                        'siglum' => 'bw/1co/10/12-14',
                        'content' => '(12) A tak, kto mniema, że stoi, niech baczy, aby nie upadł. (13) Dotąd nie przyszło na was pokuszenie, które by przekraczało siły ludzkie; lecz Bóg jest wierny i nie dopuści, abyście byli kuszeni ponad siły wasze, ale z pokuszeniem da i wyjście, abyście je mogli znieść. (14) Przeto, najmilsi moi, uciekajcie od bałwochwalstwa.',
                        'unordered' => 'A tak, kto mniema, że stoi, niech baczy, aby nie upadł. Dotąd nie przyszło na was pokuszenie, które by przekraczało siły ludzkie; lecz Bóg jest wierny i nie dopuści, abyście byli kuszeni ponad siły wasze, ale z pokuszeniem da i wyjście, abyście je mogli znieść. Przeto, najmilsi moi, uciekajcie od bałwochwalstwa.',
                        'description' => '1 list do Koryntian 10:12-14, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_052',
                        'name' => 'Myślcie tylko o tym, co Boże',
                        'siglum' => 'bw/php/4/8',
                        'content' => '(8) Wreszcie, bracia, myślcie tylko o tym, co prawdziwe, co poczciwe, co sprawiedliwe, co czyste, co miłe, co chwalebne, co jest cnotą i godne pochwały.',
                        'unordered' => 'Wreszcie, bracia, myślcie tylko o tym, co prawdziwe, co poczciwe, co sprawiedliwe, co czyste, co miłe, co chwalebne, co jest cnotą i godne pochwały.',
                        'description' => 'List do Filipian 4:8, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_053',
                        'name' => 'Poddajcie się Bogu i przeciwstawcie diabłu',
                        'siglum' => 'bw/jas/4/7',
                        'content' => '(7) Przeto poddajcie się Bogu, przeciwstawcie się diabłu, a ucieknie od was.',
                        'unordered' => 'Przeto poddajcie się Bogu, przeciwstawcie się diabłu, a ucieknie od was.',
                        'description' => 'List Jakuba 4:7, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_054',
                        'name' => 'Boża sprawiedliwość',
                        'siglum' => 'bw/2pe/2/9',
                        'content' => '(9) Umie Pan wyrwać pobożnych z pokuszenia, bezbożnych zaś zachować na dzień sądu celem ukarania,',
                        'unordered' => 'Umie Pan wyrwać pobożnych z pokuszenia, bezbożnych zaś zachować na dzień sądu celem ukarania,',
                        'description' => '2 List Piotra 2:9, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_055',
                        'name' => 'Uważaj, abyś nie dał się wyprzeć z mocnego swego stanowiska',
                        'siglum' => 'bw/2pe/3/15-17',
                        'content' => '(15) A cierpliwość Pana naszego uważajcie za ratunek, jak i umiłowany brat nasz, Paweł, w mądrości, która mu jest dana, pisał do was; (16) tak też mówi we wszystkich listach, gdzie o tym się wypowiada; są w nich pewne rzeczy niezrozumiałe, które, podobnie jak i inne pisma, ludzie niewykształceni i niezbyt umocnieni przekręcają ku swej własnej zgubie. (17) Wy tedy, umiłowani, wiedząc o tym wcześniej, miejcie się na baczności, abyście, zwiedzeni przez błędy ludzi nieprawych, nie dali się wyprzeć z mocnego swego stanowiska.',
                        'unordered' => 'A cierpliwość Pana naszego uważajcie za ratunek, jak i umiłowany brat nasz, Paweł, w mądrości, która mu jest dana, pisał do was; tak też mówi we wszystkich listach, gdzie o tym się wypowiada; są w nich pewne rzeczy niezrozumiałe, które, podobnie jak i inne pisma, ludzie niewykształceni i niezbyt umocnieni przekręcają ku swej własnej zgubie. Wy tedy, umiłowani, wiedząc o tym wcześniej, miejcie się na baczności, abyście, zwiedzeni przez błędy ludzi nieprawych, nie dali się wyprzeć z mocnego swego stanowiska.',
                        'description' => '2 List Piotra 3:15-17, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Jestem wdzięczny',
                'code' => 'CGAV_024',
                'colour_value' => '#40df20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_056',
                        'name' => 'Za wszystko dziękujcie',
                        'siglum' => 'bw/1th/5/18',
                        'content' => '(18) Za wszystko dziękujcie; taka jest bowiem wola Boża w Chrystusie Jezusie względem was.',
                        'unordered' => 'Za wszystko dziękujcie; taka jest bowiem wola Boża w Chrystusie Jezusie względem was.',
                        'description' => '1 List do Tesaloniczan 5:18, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_057',
                        'name' => 'Przez niego więc nieustannie składajmy Bogu ofiarę pochwalną',
                        'siglum' => 'bw/hebr/13/15',
                        'content' => '(15) Przez niego więc nieustannie składajmy Bogu ofiarę pochwalną, to jest owoc warg, które wyznają jego imię.',
                        'unordered' => 'Przez niego więc nieustannie składajmy Bogu ofiarę pochwalną, to jest owoc warg, które wyznają jego imię.',
                        'description' => 'List do Hebrajczyków 13:15, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'W kłopotach',
                'code' => 'CGAV_025',
                'colour_value' => '#2030df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_058',
                        'name' => 'Niechaj się nie trwoży serce wasze',
                        'siglum' => 'bw/jn/14/1-4',
                        'content' => '(1) Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! (2) W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. (3) A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. (4) I dokąd Ja idę, wiecie, i drogę znacie.',
                        'unordered' => 'Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. I dokąd Ja idę, wiecie, i drogę znacie.',
                        'description' => 'Ewangelia Jana 14:1-4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_059',
                        'name' => 'Mamy zawsze żyjącego arcykapłana, który się za nami wstawia',
                        'siglum' => 'bw/hebr/7/25',
                        'content' => '(25) Dlatego też może zbawić na zawsze tych, którzy przez niego przystępują do Boga, bo żyje zawsze, aby się wstawiać za nimi.',
                        'unordered' => 'Dlatego też może zbawić na zawsze tych, którzy przez niego przystępują do Boga, bo żyje zawsze, aby się wstawiać za nimi.',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'W zmartwieniach',
                'code' => 'CGAV_026',
                'colour_value' => '#df209f'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_060',
                        'name' => 'Nie gromadźcie sobie skarbów na ziemi',
                        'siglum' => 'bw/mt/6/19-34',
                        'content' => '(19) Nie gromadźcie sobie skarbów na ziemi, gdzie je mól i rdza niszczą i gdzie złodzieje podkopują i kradną; (20) ale gromadźcie sobie skarby w niebie, gdzie ani mól, ani rdza nie niszczą i gdzie złodzieje nie podkopują i nie kradną. (21) Albowiem gdzie jest skarb twój - tam będzie i serce twoje. (22) Światłem ciała jest oko. Jeśli tedy oko twoje jest zdrowe, całe ciało twoje jasne będzie. (23) A jeśliby oko twoje było chore, całe ciało twoje będzie ciemne. Jeśli tedy światło, które jest w tobie, jest ciemnością, sama ciemność jakaż będzie! (24) Nikt nie może dwom panom służyć, gdyż albo jednego nienawidzić będzie, a drugiego miłować, albo jednego trzymać się będzie, a drugim pogardzi. Nie możecie Bogu służyć i mamonie. (25) Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? (26) Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? (27) A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? (28) A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. (29) A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. (30) Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? (31) Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? (32) Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. (33) Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. (34) Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'unordered' => 'Nie gromadźcie sobie skarbów na ziemi, gdzie je mól i rdza niszczą i gdzie złodzieje podkopują i kradną; ale gromadźcie sobie skarby w niebie, gdzie ani mól, ani rdza nie niszczą i gdzie złodzieje nie podkopują i nie kradną. Albowiem gdzie jest skarb twój - tam będzie i serce twoje. Światłem ciała jest oko. Jeśli tedy oko twoje jest zdrowe, całe ciało twoje jasne będzie. A jeśliby oko twoje było chore, całe ciało twoje będzie ciemne. Jeśli tedy światło, które jest w tobie, jest ciemnością, sama ciemność jakaż będzie! Nikt nie może dwom panom służyć, gdyż albo jednego nienawidzić będzie, a drugiego miłować, albo jednego trzymać się będzie, a drugim pogardzi. Nie możecie Bogu służyć i mamonie. Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'description' => 'Ewangelia Mateusza 6:19-34, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_061',
                        'name' => 'Ukórzcie się więc pod mocną rękę Bożą',
                        'siglum' => 'bw/1pe/5/6-7',
                        'content' => '(6) Ukórzcie się więc pod mocną rękę Bożą, aby was wywyższył czasu swego. (7) Wszelką troskę swoją złóżcie na niego, gdyż On ma o was staranie.',
                        'unordered' => 'Ukórzcie się więc pod mocną rękę Bożą, aby was wywyższył czasu swego. Wszelką troskę swoją złóżcie na niego, gdyż On ma o was staranie.',
                        'description' => '1 List Piotra 5:6-7, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Bóg Cię kocha',
                'code' => 'CGAV_027',
                'colour_value' => '#50df20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_062',
                        'name' => 'Albowiem tak Bóg umiłował świat',
                        'siglum' => 'bw/jn/3/16',
                        'content' => '(16) Albowiem tak Bóg umiłował świat, że Syna swego jednorodzonego dał, aby każdy, kto weń wierzy, nie zginął, ale miał żywot wieczny.',
                        'unordered' => 'Albowiem tak Bóg umiłował świat, że Syna swego jednorodzonego dał, aby każdy, kto weń wierzy, nie zginął, ale miał żywot wieczny.',
                        'description' => 'Ewangelia Jana 3:16, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_063',
                        'name' => 'Bóg zaś daje dowód swojej miłości ku nam',
                        'siglum' => 'bw/ro/5/8',
                        'content' => '(8) Bóg zaś daje dowód swojej miłości ku nam przez to, że kiedy byliśmy jeszcze grzesznikami, Chrystus za nas umarł.',
                        'unordered' => 'Bóg zaś daje dowód swojej miłości ku nam przez to, że kiedy byliśmy jeszcze grzesznikami, Chrystus za nas umarł.',
                        'description' => 'List do Rzymian 5:8, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Wszyscy są grzesznikami',
                'code' => 'CGAV_028',
                'colour_value' => '#6020df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_064',
                        'name' => 'Wszyscy zgrzeszyli i brak im chwały Bożej',
                        'siglum' => 'bw/ro/3/19-26',
                        'content' => '(19) A wiemy, że cokolwiek zakon mówi, mówi do tych, którzy są pod wpływem zakonu, aby wszelkie usta były zamknięte i aby świat cały podlegał sądowi Bożemu. (20) Dlatego z uczynków zakonu nie będzie usprawiedliwiony przed nim żaden człowiek, gdyż przez zakon jest poznanie grzechu. (21) Ale teraz niezależnie od zakonu objawiona została sprawiedliwość Boża, o której świadczą zakon i prorocy, (22) i to sprawiedliwość Boża przez wiarę w Jezusa Chrystusa dla wszystkich wierzących. Nie ma bowiem różnicy, (23) gdyż wszyscy zgrzeszyli i brak im chwały Bożej, (24) i są usprawiedliwieni darmo, z łaski jego, przez odkupienie w Chrystusie Jezusie, (25) którego Bóg ustanowił jako ofiarę przebłagalną przez krew jego, skuteczną przez wiarę, dla okazania sprawiedliwości swojej przez to, że w cierpliwości Bożej pobłażliwie odniósł się do przedtem popełnionych grzechów, (26) dla okazania sprawiedliwości swojej w teraźniejszym czasie, aby On sam był sprawiedliwym i usprawiedliwiającym tego, który wierzy w Jezusa.',
                        'unordered' => 'A wiemy, że cokolwiek zakon mówi, mówi do tych, którzy są pod wpływem zakonu, aby wszelkie usta były zamknięte i aby świat cały podlegał sądowi Bożemu. Dlatego z uczynków zakonu nie będzie usprawiedliwiony przed nim żaden człowiek, gdyż przez zakon jest poznanie grzechu. Ale teraz niezależnie od zakonu objawiona została sprawiedliwość Boża, o której świadczą zakon i prorocy, i to sprawiedliwość Boża przez wiarę w Jezusa Chrystusa dla wszystkich wierzących. Nie ma bowiem różnicy, gdyż wszyscy zgrzeszyli i brak im chwały Bożej, i są usprawiedliwieni darmo, z łaski jego, przez odkupienie w Chrystusie Jezusie, którego Bóg ustanowił jako ofiarę przebłagalną przez krew jego, skuteczną przez wiarę, dla okazania sprawiedliwości swojej przez to, że w cierpliwości Bożej pobłażliwie odniósł się do przedtem popełnionych grzechów, dla okazania sprawiedliwości swojej w teraźniejszym czasie, aby On sam był sprawiedliwym i usprawiedliwiającym tego, który wierzy w Jezusa.',
                        'description' => 'List do Rzymian 3:19-26, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_065',
                        'name' => 'Nie ma ani jednego sprawiedliwego',
                        'siglum' => 'bw/ro/3/10',
                        'content' => '(10) jak napisano: Nie ma ani jednego sprawiedliwego,',
                        'unordered' => 'jak napisano: Nie ma ani jednego sprawiedliwego,',
                        'description' => 'List do Rzymian 3:10, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Boża rada dla grzeszników',
                'code' => 'CGAV_029',
                'colour_value' => '#afdf20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_066',
                        'name' => 'Albowiem zapłatą za grzech jest śmierć.',
                        'siglum' => 'bw/ro/6/23',
                        'content' => '(23) Albowiem zapłatą za grzech jest śmierć, lecz darem łaski Bożej jest żywot wieczny w Chrystusie Jezusie, Panu naszym.',
                        'unordered' => 'Albowiem zapłatą za grzech jest śmierć, lecz darem łaski Bożej jest żywot wieczny w Chrystusie Jezusie, Panu naszym.',
                        'description' => 'List do Rzymian 6:23, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_067',
                        'name' => 'Tym zaś, którzy go przyjęli, dał prawo stać się dziećmi Bożymi',
                        'siglum' => 'bw/jn/1/12',
                        'content' => '(12) Tym zaś, którzy go przyjęli, dał prawo stać się dziećmi Bożymi, tym, którzy wierzą w imię jego,',
                        'unordered' => 'Tym zaś, którzy go przyjęli, dał prawo stać się dziećmi Bożymi, tym, którzy wierzą w imię jego,',
                        'description' => 'Ewangelia Jana 1:12, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_068',
                        'name' => 'Chrystus umarł za grzechy nasze według Pism',
                        'siglum' => 'bw/1co/15/3-4',
                        'content' => '(3) Najpierw bowiem podałem wam to, co i ja przejąłem, że Chrystus umarł za grzechy nasze według Pism (4) i że został pogrzebany, i że dnia trzeciego został z martwych wzbudzony według Pism,',
                        'unordered' => 'Najpierw bowiem podałem wam to, co i ja przejąłem, że Chrystus umarł za grzechy nasze według Pism i że został pogrzebany, i że dnia trzeciego został z martwych wzbudzony według Pism,',
                        'description' => '1 list do Koryntian 15:3-4, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Teraz wszyscy mogą być zbawieni',
                'code' => 'CGAV_030',
                'colour_value' => '#40df20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_069',
                        'name' => 'Oto stoję u drzwi i kołaczę',
                        'siglum' => 'bw/rev/3/20',
                        'content' => '(20) Oto stoję u drzwi i kołaczę; jeśli ktoś usłyszy głos mój i otworzy drzwi, wstąpię do niego i będę z nim wieczerzał, a on ze mną.',
                        'unordered' => 'Oto stoję u drzwi i kołaczę; jeśli ktoś usłyszy głos mój i otworzy drzwi, wstąpię do niego i będę z nim wieczerzał, a on ze mną.',
                        'description' => 'Apokalipsa (Objawienie) 3:20, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_070',
                        'name' => 'Każdy bowiem, kto wzywa imienia Pańskiego, zbawiony będzie',
                        'siglum' => 'bw/ro/10/13',
                        'content' => '(13) Każdy bowiem, kto wzywa imienia Pańskiego, zbawiony będzie.',
                        'unordered' => 'Każdy bowiem, kto wzywa imienia Pańskiego, zbawiony będzie.',
                        'description' => 'List do Rzymian 10:13, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Zapewnienia dla wierzącego',
                'code' => 'CGAV_031',
                'colour_value' => '#df9f20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_071',
                        'name' => 'Bo jeśli ustami swoimi wyznasz, że Jezus jest Panem',
                        'siglum' => 'bw/ro/10/9',
                        'content' => '(9) Bo jeśli ustami swoimi wyznasz, że Jezus jest Panem, i uwierzysz w sercu swoim, że Bóg wzbudził go z martwych, zbawiony będziesz.',
                        'unordered' => 'Bo jeśli ustami swoimi wyznasz, że Jezus jest Panem, i uwierzysz w sercu swoim, że Bóg wzbudził go z martwych, zbawiony będziesz.',
                        'description' => 'List do Rzymian 10:9, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_072',
                        'name' => 'Kto słucha słowa mego',
                        'siglum' => 'bw/jn/5/24',
                        'content' => '(24) Zaprawdę, zaprawdę, powiadam wam, kto słucha słowa mego i wierzy temu, który mnie posłał, ma żywot wieczny i nie stanie przed sądem, lecz przeszedł ze śmierci do żywota.',
                        'unordered' => 'Zaprawdę, zaprawdę, powiadam wam, kto słucha słowa mego i wierzy temu, który mnie posłał, ma żywot wieczny i nie stanie przed sądem, lecz przeszedł ze śmierci do żywota.',
                        'description' => 'Ewangelia Jana 5:24, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_073',
                        'name' => 'To napisałem wam, którzy wierzycie w imię Syna Bożego, że macie żywot wieczny',
                        'siglum' => 'bw/1jn/5/13',
                        'content' => '(13) To napisałem wam, którzy wierzycie w imię Syna Bożego, abyście wiedzieli, że macie żywot wieczny.',
                        'unordered' => 'To napisałem wam, którzy wierzycie w imię Syna Bożego, abyście wiedzieli, że macie żywot wieczny.',
                        'description' => '1 List Jana 5:13, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_074',
                        'name' => 'Jezus jest Chrystusem, Synem Boga',
                        'siglum' => 'bw/jn/20/31',
                        'translation' => 'bw',
                        'content' => '(31) te zaś są spisane, abyście wierzyli, że Jezus jest Chrystusem, Synem Boga, i abyście wierząc mieli żywot w imieniu jego.',
                        'unordered' => 'te zaś są spisane, abyście wierzyli, że Jezus jest Chrystusem, Synem Boga, i abyście wierząc mieli żywot w imieniu jego.',
                        'description' => 'Ewangelia Jana 20:31, Biblia Warszawska'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'The Godly piece of advice',
                'code' => 'CGAV_032',
                'colour_value' => '#df6020'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_075',
                        'name' => 'Biegnij cierpliwie w wyścigu, który jest przed nami',
                        'siglum' => 'bw/hebr/12/1',
                        'content' => '(1) Przeto i my, mając około siebie tak wielki obłok świadków, złożywszy z siebie wszelki ciężar i grzech, który nas usidla, biegnijmy wytrwale w wyścigu, który jest przed nami,',
                        'unordered' => 'Przeto i my, mając około siebie tak wielki obłok świadków, złożywszy z siebie wszelki ciężar i grzech, który nas usidla, biegnijmy wytrwale w wyścigu, który jest przed nami,',
                        'description' => 'List do Hebrajczyków 12:1, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Nawróćcie się i wierzcie w Ewangelię',
                'code' => 'CGAV_033',
                'colour_value' => '#23ff09'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_076',
                        'name' => 'Jak miłe są na górach nogi tego, który zwiastuje radosną wieść',
                        'siglum' => 'bw/isa/52/7',
                        'content' => '(7) Jak miłe są na górach nogi tego, który zwiastuje radosną wieść, który ogłasza pokój, który zwiastuje dobro, który ogłasza zbawienie, który mówi do Syjonu: Twój Bóg jest królem.',
                        'unordered' => 'Jak miłe są na górach nogi tego, który zwiastuje radosną wieść, który ogłasza pokój, który zwiastuje dobro, który ogłasza zbawienie, który mówi do Syjonu: Twój Bóg jest królem.',
                        'description' => 'Ks. Izajasza 52:7, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_077',
                        'name' => 'Upamiętajcie się i wierzcie ewangelii',
                        'siglum' => 'bw/mk/1/15',
                        'content' => '(15) i mówiąc: Wypełnił się czas i przybliżyło się Królestwo Boże, upamiętajcie się i wierzcie ewangelii.',
                        'unordered' => 'i mówiąc: Wypełnił się czas i przybliżyło się Królestwo Boże, upamiętajcie się i wierzcie ewangelii.',
                        'description' => 'Ew. Marka 1:15, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_078',
                        'name' => 'Jeśli ustami swoimi wyznasz, że Jezus jest Panem',
                        'siglum' => 'bw/ro/10/9-10',
                        'content' => '(9) Bo jeśli ustami swoimi wyznasz, że Jezus jest Panem, i uwierzysz w sercu swoim, że Bóg wzbudził go z martwych, zbawiony będziesz. (10) Albowiem sercem wierzy się ku usprawiedliwieniu, a ustami wyznaje się ku zbawieniu.',
                        'unordered' => 'Bo jeśli ustami swoimi wyznasz, że Jezus jest Panem, i uwierzysz w sercu swoim, że Bóg wzbudził go z martwych, zbawiony będziesz. Albowiem sercem wierzy się ku usprawiedliwieniu, a ustami wyznaje się ku zbawieniu.',
                        'description' => 'List do Rzymian 10:9-10, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_079',
                        'name' => 'Upamiętajcie i nawróćcie się',
                        'siglum' => 'bw/ac/3/18-19',
                        'content' => '(18) Bóg zaś wypełnił w ten sposób to, co zapowiedział przez usta wszystkich proroków, że jego Chrystus cierpieć będzie. (19) Przeto upamiętajcie i nawróćcie się, aby były zgładzone grzechy wasze,',
                        'unordered' => 'Bóg zaś wypełnił w ten sposób to, co zapowiedział przez usta wszystkich proroków, że jego Chrystus cierpieć będzie. Przeto upamiętajcie i nawróćcie się, aby były zgładzone grzechy wasze,',
                        'description' => 'Dzieje Apost. 3:18-19, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_080',
                        'name' => 'Kto w niego wierzy, dostąpi odpuszczenia grzechów przez imię jego',
                        'siglum' => 'bw/ac/10/39-43',
                        'content' => '(39) A my jesteśmy świadkami tego wszystkiego, co uczynił w ziemi żydowskiej i w Jerozolimie; jego to zabili, zawiesiwszy na drzewie. (40) Ale Bóg wzbudził go trzeciego dnia i dozwolił mu się objawić. (41) Nie całemu ludowi, lecz świadkom uprzednio wybranym przez Boga, nam, którzy z nim jedliśmy i piliśmy po jego zmartwychwstaniu. (42) Przykazał nam też, abyśmy ludowi głosili i składali świadectwo, że On jest ustanowionym przez Boga sędzią żywych i umarłych. (43) O nim to świadczą wszyscy prorocy, iż każdy, kto w niego wierzy, dostąpi odpuszczenia grzechów przez imię jego.',
                        'unordered' => 'A my jesteśmy świadkami tego wszystkiego, co uczynił w ziemi żydowskiej i w Jerozolimie; jego to zabili, zawiesiwszy na drzewie. Ale Bóg wzbudził go trzeciego dnia i dozwolił mu się objawić. Nie całemu ludowi, lecz świadkom uprzednio wybranym przez Boga, nam, którzy z nim jedliśmy i piliśmy po jego zmartwychwstaniu. Przykazał nam też, abyśmy ludowi głosili i składali świadectwo, że On jest ustanowionym przez Boga sędzią żywych i umarłych. O nim to świadczą wszyscy prorocy, iż każdy, kto w niego wierzy, dostąpi odpuszczenia grzechów przez imię jego.',
                        'description' => 'Dzieje Apost. 10:39-43, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_081',
                        'name' => 'Czym jest grzech?',
                        'siglum' => 'bw/1jn/3/4',
                        'content' => '(4) Każdy kto popełnia grzech, i zakon przestępuje, a grzech jest przestępstwem zakonu.',
                        'unordered' => 'Każdy kto popełnia grzech, i zakon przestępuje, a grzech jest przestępstwem zakonu.',
                        'description' => '1 List Jana 3:4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_082',
                        'name' => 'Ostrzeżenie: nigdy was nie znałem',
                        'siglum' => 'bw/mt/7/15-23',
                        'content' => '(15) Strzeżcie się fałszywych proroków, którzy przychodzą do was w odzieniu owczym, wewnątrz zaś są wilkami drapieżnymi! (16) Po ich owocach poznacie ich. Czyż zbierają winogrona z cierni albo z ostu figi? (17) Tak każde dobre drzewo wydaje dobre owoce, ale złe drzewo wydaje złe owoce. (18) Nie może dobre drzewo rodzić złych owoców, ani złe drzewo rodzić dobrych owoców. (19) Każde drzewo, które nie wydaje dobrego owocu, wycina się i rzuca w ogień. (20) Tak więc po owocach poznacie ich. (21) Nie każdy, kto do mnie mówi: Panie, Panie, wejdzie do Królestwa Niebios; lecz tylko ten, kto pełni wolę Ojca mojego, który jest w niebie. (22) W owym dniu wielu mi powie: Panie, Panie, czyż nie prorokowaliśmy w imieniu twoim i w imieniu twoim nie wypędzaliśmy demonów, i w imieniu twoim nie czyniliśmy wielu cudów? (23) A wtedy im powiem: Nigdy was nie znałem. Idźcie precz ode mnie wy, którzy czynicie bezprawie.',
                        'unordered' => 'Strzeżcie się fałszywych proroków, którzy przychodzą do was w odzieniu owczym, wewnątrz zaś są wilkami drapieżnymi! Po ich owocach poznacie ich. Czyż zbierają winogrona z cierni albo z ostu figi? Tak każde dobre drzewo wydaje dobre owoce, ale złe drzewo wydaje złe owoce. Nie może dobre drzewo rodzić złych owoców, ani złe drzewo rodzić dobrych owoców. Każde drzewo, które nie wydaje dobrego owocu, wycina się i rzuca w ogień. Tak więc po owocach poznacie ich. Nie każdy, kto do mnie mówi: Panie, Panie, wejdzie do Królestwa Niebios; lecz tylko ten, kto pełni wolę Ojca mojego, który jest w niebie. W owym dniu wielu mi powie: Panie, Panie, czyż nie prorokowaliśmy w imieniu twoim i w imieniu twoim nie wypędzaliśmy demonów, i w imieniu twoim nie czyniliśmy wielu cudów? A wtedy im powiem: Nigdy was nie znałem. Idźcie precz ode mnie wy, którzy czynicie bezprawie.',
                        'description' => 'Ew. Mateusza 7:15-23, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_083',
                        'name' => 'Nie każdy, kto do mnie mówi: Panie, Panie',
                        'siglum' => 'bw/mt/7/21',
                        'content' => '(21) Nie każdy, kto do mnie mówi: Panie, Panie, wejdzie do Królestwa Niebios; lecz tylko ten, kto pełni wolę Ojca mojego, który jest w niebie.',
                        'unordered' => 'Nie każdy, kto do mnie mówi: Panie, Panie, wejdzie do Królestwa Niebios; lecz tylko ten, kto pełni wolę Ojca mojego, który jest w niebie.',
                        'description' => 'Ew. Mateusza 7:21, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_084',
                        'name' => 'Duch Święty przekonuje o grzechu',
                        'siglum' => 'bw/jn/16/7-11',
                        'content' => '(7) Lecz ja wam mówię prawdę: Lepiej dla was, żebym ja odszedł. Bo jeśli nie odejdę, Pocieszyciel do was nie przyjdzie, jeśli zaś odejdę, poślę go do was. (8) A On, gdy przyjdzie, przekona świat o grzechu i o sprawiedliwości, i o sądzie; (9) o grzechu, gdyż nie uwierzyli we mnie; (10) o sprawiedliwości, gdyż odchodzę do Ojca i już mnie nie ujrzycie; (11) o sądzie zaś, gdyż książę tego świata został osądzony.',
                        'unordered' => 'Lecz ja wam mówię prawdę: Lepiej dla was, żebym ja odszedł. Bo jeśli nie odejdę, Pocieszyciel do was nie przyjdzie, jeśli zaś odejdę, poślę go do was. A On, gdy przyjdzie, przekona świat o grzechu i o sprawiedliwości, i o sądzie; o grzechu, gdyż nie uwierzyli we mnie; o sprawiedliwości, gdyż odchodzę do Ojca i już mnie nie ujrzycie; o sądzie zaś, gdyż książę tego świata został osądzony.',
                        'description' => 'Ew. Jana 16:7-11, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_085',
                        'name' => 'Resztka zostawiona według łaski a nie uczynków',
                        'siglum' => 'bw/ro/11/1-12',
                        'content' => '(1) Pytam więc: Czy Bóg odrzucił swój lud? Bynajmniej. Przecież i ja jestem Izraelitą, z potomstwa Abrahama, z pokolenia Beniamina. (2) Nie odrzucił Bóg swego ludu, który uprzednio sobie upatrzył. Albo czy nie wiecie, co mówi Pismo o Eliaszu, jak się uskarża przed Bogiem na Izraela: (3) Panie, proroków twoich pozabijali, ołtarze twoje poburzyli; i zostałem tylko ja sam, lecz i na moje życie nastają. (4) Ale co mu mówi wyrocznia Boża? Zostawiłem sobie siedem tysięcy mężów, którzy nie zgięli kolan przed Baalem. (5) Podobnie i obecnie pozostała resztka według wyboru łaski. (6) A jeśli z łaski, to już nie z uczynków, bo inaczej łaska nie byłaby już łaską. (7) Cóż więc? Czego Izrael szukał, tego nie osiągnął, ale wybrani osiągnęli; pozostali zaś ulegli zatwardziałości, (8) jak napisano: Zesłał Bóg na nich ducha znieczulenia, dał im oczy, które nie widzą, i uszy, które nie słyszą, aż do dnia dzisiejszego. (9) A Dawid powiada: Niechaj stół ich stanie się dla nich sidłem i siecią, i zgorszeniem, i zapłatą; (10) niech zaćmią się ich oczy, aby nie widzieli, a grzbiet ich pochyl na zawsze. (11) Mówię tedy: Czy się potknęli, aby upaść? Bynajmniej. Wszak wskutek ich upadku zbawienie doszło do pogan, aby w nich wzbudzić zawiść. (12) Bo jeśli ich upadek stał się bogactwem świata, a ich porażka bogactwem pogan, to o ileż bardziej ich pełnia?',
                        'unordered' => 'Pytam więc: Czy Bóg odrzucił swój lud? Bynajmniej. Przecież i ja jestem Izraelitą, z potomstwa Abrahama, z pokolenia Beniamina. Nie odrzucił Bóg swego ludu, który uprzednio sobie upatrzył. Albo czy nie wiecie, co mówi Pismo o Eliaszu, jak się uskarża przed Bogiem na Izraela: Panie, proroków twoich pozabijali, ołtarze twoje poburzyli; i zostałem tylko ja sam, lecz i na moje życie nastają. Ale co mu mówi wyrocznia Boża? Zostawiłem sobie siedem tysięcy mężów, którzy nie zgięli kolan przed Baalem. Podobnie i obecnie pozostała resztka według wyboru łaski. A jeśli z łaski, to już nie z uczynków, bo inaczej łaska nie byłaby już łaską. Cóż więc? Czego Izrael szukał, tego nie osiągnął, ale wybrani osiągnęli; pozostali zaś ulegli zatwardziałości, jak napisano: Zesłał Bóg na nich ducha znieczulenia, dał im oczy, które nie widzą, i uszy, które nie słyszą, aż do dnia dzisiejszego. A Dawid powiada: Niechaj stół ich stanie się dla nich sidłem i siecią, i zgorszeniem, i zapłatą; niech zaćmią się ich oczy, aby nie widzieli, a grzbiet ich pochyl na zawsze. Mówię tedy: Czy się potknęli, aby upaść? Bynajmniej. Wszak wskutek ich upadku zbawienie doszło do pogan, aby w nich wzbudzić zawiść. Bo jeśli ich upadek stał się bogactwem świata, a ich porażka bogactwem pogan, to o ileż bardziej ich pełnia?',
                        'description' => 'List do Rzymian 11:1-12, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_086',
                        'name' => 'Usprawiedliwienie z wiary nie z uczynków',
                        'siglum' => 'bw/ro/4/13-25',
                        'content' => '(13) Albowiem nie na podstawie zakonu była dana obietnica Abrahamowi bądź jego potomstwu, że ma być dziedzicem świata, lecz na podstawie usprawiedliwienia z wiary. (14) Bo jeśli dziedzicami są tylko ci, którzy polegają na zakonie, tedy wiara jest daremna i obietnica wniwecz się obróciła; (15) gdyż zakon pociąga za sobą gniew; gdzie bowiem nie ma zakonu, nie ma też przestępstwa. (16) Przeto obietnica została dana na podstawie wiary, aby była z łaski i aby była zapewniona całemu potomstwu, nie tylko temu, które polega na zakonie, ale i temu, które ma wiarę Abrahama, ojca nas wszystkich, (17) jak napisano: Ustanowiłem cię ojcem wielu narodów, zapewniona przed Bogiem, któremu zaufał, który ożywia umarłych i który to, czego nie ma, powołuje do bytu. (18) Abraham wbrew nadziei, żywiąc nadzieję, uwierzył, aby się stać ojcem wielu narodów zgodnie z tym, co powiedziano: Takie będzie potomstwo twoje. (19) I nie zachwiał się w wierze, choć widział obumarłe ciało swoje, mając około stu lat, oraz obumarłe łono Sary; (20) i nie zwątpił z niedowiarstwa w obietnicę Bożą, lecz wzmocniony wiarą dał chwałę Bogu, (21) mając zupełną pewność, że cokolwiek On obiecał, ma moc i uczynić. (22) I dlatego poczytane mu to zostało za sprawiedliwość. (23) A nie napisano tego, że mu poczytano tylko ze względu na niego, (24) ale ze względu na nas, którym ma to być poczytane i którzy wierzymy w tego, który wzbudził Jezusa, Pana naszego, z martwych, (25) który został wydany za grzechy nasze i wzbudzony z martwych dla usprawiedliwienia naszego.',
                        'unordered' => 'Albowiem nie na podstawie zakonu była dana obietnica Abrahamowi bądź jego potomstwu, że ma być dziedzicem świata, lecz na podstawie usprawiedliwienia z wiary. Bo jeśli dziedzicami są tylko ci, którzy polegają na zakonie, tedy wiara jest daremna i obietnica wniwecz się obróciła; gdyż zakon pociąga za sobą gniew; gdzie bowiem nie ma zakonu, nie ma też przestępstwa. Przeto obietnica została dana na podstawie wiary, aby była z łaski i aby była zapewniona całemu potomstwu, nie tylko temu, które polega na zakonie, ale i temu, które ma wiarę Abrahama, ojca nas wszystkich, jak napisano: Ustanowiłem cię ojcem wielu narodów, zapewniona przed Bogiem, któremu zaufał, który ożywia umarłych i który to, czego nie ma, powołuje do bytu. Abraham wbrew nadziei, żywiąc nadzieję, uwierzył, aby się stać ojcem wielu narodów zgodnie z tym, co powiedziano: Takie będzie potomstwo twoje. I nie zachwiał się w wierze, choć widział obumarłe ciało swoje, mając około stu lat, oraz obumarłe łono Sary; i nie zwątpił z niedowiarstwa w obietnicę Bożą, lecz wzmocniony wiarą dał chwałę Bogu, mając zupełną pewność, że cokolwiek On obiecał, ma moc i uczynić. I dlatego poczytane mu to zostało za sprawiedliwość. A nie napisano tego, że mu poczytano tylko ze względu na niego, ale ze względu na nas, którym ma to być poczytane i którzy wierzymy w tego, który wzbudził Jezusa, Pana naszego, z martwych, który został wydany za grzechy nasze i wzbudzony z martwych dla usprawiedliwienia naszego.',
                        'description' => 'List do Rzymian 4:13-25, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_087',
                        'name' => 'Kto Mnie miłuje?',
                        'siglum' => 'bw/jn/14/21-25',
                        'content' => '(21) Kto ma przykazania moje i przestrzega ich, ten mnie miłuje; a kto mnie miłuje, tego też będzie miłował Ojciec i Ja miłować go będę, i objawię mu samego siebie. (22) Rzekł mu Judasz, nie Iskariota: Panie, cóż się stało, że masz się nam objawić, a nie światu? (23) Odpowiedział Jezus i rzekł mu: Jeśli kto mnie miłuje, słowa mojego przestrzegać będzie, i Ojciec mój umiłuje go, i do niego przyjdziemy, i u niego zamieszkamy. (24) Kto mnie nie miłuje, ten słów moich nie przestrzega, a przecież słowo, które słyszycie, nie jest moim słowem, lecz Ojca, który mnie posłał. (25) To wam powiedziałem z wami przebywając.',
                        'unordered' => 'Kto ma przykazania moje i przestrzega ich, ten mnie miłuje; a kto mnie miłuje, tego też będzie miłował Ojciec i Ja miłować go będę, i objawię mu samego siebie. Rzekł mu Judasz, nie Iskariota: Panie, cóż się stało, że masz się nam objawić, a nie światu? Odpowiedział Jezus i rzekł mu: Jeśli kto mnie miłuje, słowa mojego przestrzegać będzie, i Ojciec mój umiłuje go, i do niego przyjdziemy, i u niego zamieszkamy. Kto mnie nie miłuje, ten słów moich nie przestrzega, a przecież słowo, które słyszycie, nie jest moim słowem, lecz Ojca, który mnie posłał. To wam powiedziałem z wami przebywając.',
                        'description' => 'Ew. Jana 14:21-25, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_088',
                        'name' => 'Albowiem tak Bóg umiłował świat',
                        'siglum' => 'bw/jn/3/16-19',
                        'content' => '(16) Albowiem tak Bóg umiłował świat, że Syna swego jednorodzonego dał, aby każdy, kto weń wierzy, nie zginął, ale miał żywot wieczny. (17) Bo nie posłał Bóg Syna na świat, aby sądził świat, lecz aby świat był przez niego zbawiony. (18) Kto wierzy w niego, nie będzie sądzony; kto zaś nie wierzy, już jest osądzony dlatego, że nie uwierzył w imię jednorodzonego Syna Bożego. (19) A na tym polega sąd, że światłość przyszła na świat, lecz ludzie bardziej umiłowali ciemność, bo ich uczynki były złe.',
                        'unordered' => 'Albowiem tak Bóg umiłował świat, że Syna swego jednorodzonego dał, aby każdy, kto weń wierzy, nie zginął, ale miał żywot wieczny. Bo nie posłał Bóg Syna na świat, aby sądził świat, lecz aby świat był przez niego zbawiony. Kto wierzy w niego, nie będzie sądzony; kto zaś nie wierzy, już jest osądzony dlatego, że nie uwierzył w imię jednorodzonego Syna Bożego. A na tym polega sąd, że światłość przyszła na świat, lecz ludzie bardziej umiłowali ciemność, bo ich uczynki były złe.',
                        'description' => 'Ew. Jana 3:16-19, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_089',
                        'name' => 'Konieczność odrodzenia z wody i z ducha',
                        'siglum' => 'bw/jn/3/1-15',
                        'content' => '(1) A był człowiek z faryzeuszów imieniem Nikodem, dostojnik żydowski. (2) Ten przyszedł do Jezusa w nocy i rzekł mu: Mistrzu! Wiemy, że przyszedłeś od Boga jako nauczyciel; nikt bowiem takich cudów czynić by nie mógł, jakie Ty czynisz, jeśliby Bóg z nim nie był. (3) Odpowiadając Jezus, rzekł mu: Zaprawdę, zaprawdę, powiadam ci, jeśli się kto nie narodzi na nowo, nie może ujrzeć Królestwa Bożego. (4) Rzekł mu Nikodem: Jakże się może człowiek narodzić, gdy jest stary? Czyż może powtórnie wejść do łona matki swojej i urodzić się? (5) Odpowiedział Jezus: Zaprawdę, zaprawdę, powiadam ci, jeśli się kto nie narodzi z wody i z Ducha, nie może wejść do Królestwa Bożego. (6) Co się narodziło z ciała, ciałem jest, a co się narodziło z Ducha, duchem jest. (7) Nie dziw się, że ci powiedziałem: Musicie się na nowo narodzić. (8) Wiatr wieje, dokąd chce, i szum jego słyszysz, ale nie wiesz, skąd przychodzi i dokąd idzie; tak jest z każdym, kto się narodził z Ducha. (9) Odpowiedział Nikodem i rzekł do niego: Jakże to się stać może? (10) Odpowiedział Jezus i rzekł mu: Jesteś nauczycielem w Izraelu, a tego nie wiesz? (11) Zaprawdę, zaprawdę, powiadam ci, co wiemy, to mówimy, i co widzieliśmy, o tym świadczymy, ale świadectwa naszego nie przyjmujecie. (12) Jeśli nie wierzycie, gdy wam mówiłem o ziemskich sprawach, jakże uwierzycie, gdy wam będę mówił o niebieskich? (13) A nikt nie wstąpił do nieba, tylko Ten, który zstąpił z nieba, Syn Człowieczy, (14) i jak Mojżesz wywyższył węża na pustyni, tak musi być wywyższony Syn Człowieczy, (15) aby każdy, kto weń wierzy, nie zginął, ale miał żywot wieczny.',
                        'unordered' => 'A był człowiek z faryzeuszów imieniem Nikodem, dostojnik żydowski. Ten przyszedł do Jezusa w nocy i rzekł mu: Mistrzu! Wiemy, że przyszedłeś od Boga jako nauczyciel; nikt bowiem takich cudów czynić by nie mógł, jakie Ty czynisz, jeśliby Bóg z nim nie był. Odpowiadając Jezus, rzekł mu: Zaprawdę, zaprawdę, powiadam ci, jeśli się kto nie narodzi na nowo, nie może ujrzeć Królestwa Bożego. Rzekł mu Nikodem: Jakże się może człowiek narodzić, gdy jest stary? Czyż może powtórnie wejść do łona matki swojej i urodzić się? Odpowiedział Jezus: Zaprawdę, zaprawdę, powiadam ci, jeśli się kto nie narodzi z wody i z Ducha, nie może wejść do Królestwa Bożego. Co się narodziło z ciała, ciałem jest, a co się narodziło z Ducha, duchem jest. Nie dziw się, że ci powiedziałem: Musicie się na nowo narodzić. Wiatr wieje, dokąd chce, i szum jego słyszysz, ale nie wiesz, skąd przychodzi i dokąd idzie; tak jest z każdym, kto się narodził z Ducha. Odpowiedział Nikodem i rzekł do niego: Jakże to się stać może? Odpowiedział Jezus i rzekł mu: Jesteś nauczycielem w Izraelu, a tego nie wiesz? Zaprawdę, zaprawdę, powiadam ci, co wiemy, to mówimy, i co widzieliśmy, o tym świadczymy, ale świadectwa naszego nie przyjmujecie. Jeśli nie wierzycie, gdy wam mówiłem o ziemskich sprawach, jakże uwierzycie, gdy wam będę mówił o niebieskich? A nikt nie wstąpił do nieba, tylko Ten, który zstąpił z nieba, Syn Człowieczy, i jak Mojżesz wywyższył węża na pustyni, tak musi być wywyższony Syn Człowieczy, aby każdy, kto weń wierzy, nie zginął, ale miał żywot wieczny.',
                        'description' => 'Ew. Jana 3:1-15, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_090',
                        'name' => 'Jezus Chrystus jest Synem Bożym',
                        'siglum' => 'bw/ac/8/36-38',
                        'content' => '(36) A gdy tak jechali drogą, przybyli nad jakąś wodę, a eunuch rzekł: Oto woda; cóż stoi na przeszkodzie, abym został ochrzczony? (37) Filip zaś powiedział mu: Jeśli wierzysz z całego serca, możesz. A odpowiadając, rzekł: Wierzę, że Jezus Chrystus jest Synem Bożym. (38) I kazał zatrzymać wóz, zeszli obaj, Filip i eunuch, do wody, i ochrzcił go.',
                        'unordered' => 'A gdy tak jechali drogą, przybyli nad jakąś wodę, a eunuch rzekł: Oto woda; cóż stoi na przeszkodzie, abym został ochrzczony? Filip zaś powiedział mu: Jeśli wierzysz z całego serca, możesz. A odpowiadając, rzekł: Wierzę, że Jezus Chrystus jest Synem Bożym. I kazał zatrzymać wóz, zeszli obaj, Filip i eunuch, do wody, i ochrzcił go.',
                        'description' => 'Dzieje Apost. 8:36-38, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_091',
                        'name' => 'Kto uwierzy i ochrzczony zostanie, będzie zbawiony, ale kto nie uwierzy, będzie potępiony',
                        'siglum' => 'bw/mk/16/16',
                        'content' => '(16) Kto uwierzy i ochrzczony zostanie, będzie zbawiony, ale kto nie uwierzy, będzie potępiony.',
                        'unordered' => 'Kto uwierzy i ochrzczony zostanie, będzie zbawiony, ale kto nie uwierzy, będzie potępiony.',
                        'description' => 'Ew. Marka 16:16, Biblia Warszawska'
                    ]
                ]
            ]
        ]
    ];

    private const CUSTOM_GROUPS_AND_VERSES_EN = [
        [
            'data' => [
                'name' => 'I am afraid',
                'code' => 'CGAV_001',
                'colour_value' => '#5020df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_001',
                        'name' => 'Do not be afraid of those who kill the body',
                        'siglum' => 'kjv/mt/10/28',
                        'content' => '(28) And fear not them which kill the body, but are not able to kill the soul: but rather fear him which is able to destroy both soul and body in hell.',
                        'unordered' => 'And fear not them which kill the body, but are not able to kill the soul: but rather fear him which is able to destroy both soul and body in hell.',
                        'description' => 'Matthew 10:28, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_002',
                        'name' => 'Rather, be afraid of him who can destroy both soul and body in hell',
                        'siglum' => 'kjv/jas/4/12',
                        'content' => '(12) There is one lawgiver, who is able to save and to destroy: who art thou that judgest another?',
                        'unordered' => 'There is one lawgiver, who is able to save and to destroy: who art thou that judgest another?',
                        'description' => 'James 4:12, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_003',
                        'name' => 'We have no spirit of fear',
                        'siglum' => 'kjv/2tm/1/7',
                        'content' => '(7) For God hath not given us the spirit of fear; but of power, and of love, and of a sound mind.',
                        'unordered' => 'For God hath not given us the spirit of fear; but of power, and of love, and of a sound mind.',
                        'description' => '2 Timothy 1:7, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_004',
                        'name' => 'I will not abandon you or leave you',
                        'siglum' => 'kjv/hebr/13/5-6',
                        'content' => '(5) [Let your] conversation [be] without covetousness; [and be] content with such things as ye have: for he hath said, I will never leave thee, nor forsake thee. (6) So that we may boldly say, The Lord [is] my helper, and I will not fear what man shall do unto me.',
                        'unordered' => '[Let your] conversation [be] without covetousness; [and be] content with such things as ye have: for he hath said, I will never leave thee, nor forsake thee. So that we may boldly say, The Lord [is] my helper, and I will not fear what man shall do unto me.',
                        'description' => 'Hebrews 13:5-6, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I am restless',
                'code' => 'CGAV_002',
                'colour_value' => '#7020df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_005',
                        'name' => 'Don\'t worry about anything',
                        'siglum' => 'kjv/mt/6/19-34',
                        'content' => '(19) Lay not up for yourselves treasures upon earth, where moth and rust doth corrupt, and where thieves break through and steal: (20) But lay up for yourselves treasures in heaven, where neither moth nor rust doth corrupt, and where thieves do not break through nor steal: (21) For where your treasure is, there will your heart be also. (22) The light of the body is the eye: if therefore thine eye be single, thy whole body shall be full of light. (23) But if thine eye be evil, thy whole body shall be full of darkness. If therefore the light that is in thee be darkness, how great [is] that darkness! (24) No man can serve two masters: for either he will hate the one, and love the other; or else he will hold to the one, and despise the other. Ye cannot serve God and mammon. (25) Therefore I say unto you, Take no thought for your life, what ye shall eat, or what ye shall drink; nor yet for your body, what ye shall put on. Is not the life more than meat, and the body than raiment? (26) Behold the fowls of the air: for they sow not, neither do they reap, nor gather into barns; yet your heavenly Father feedeth them. Are ye not much better than they? (27) Which of you by taking thought can add one cubit unto his stature? (28) And why take ye thought for raiment? Consider the lilies of the field, how they grow; they toil not, neither do they spin: (29) And yet I say unto you, That even Solomon in all his glory was not arrayed like one of these. (30) Wherefore, if God so clothe the grass of the field, which to day is, and to morrow is cast into the oven, [shall he] not much more [clothe] you, O ye of little faith? (31) Therefore take no thought, saying, What shall we eat? or, What shall we drink? or, Wherewithal shall we be clothed? (32) (For after all these things do the Gentiles seek:) for your heavenly Father knoweth that ye have need of all these things. (33) But seek ye first the kingdom of God, and his righteousness; and all these things shall be added unto you. (34) Take therefore no thought for the morrow: for the morrow shall take thought for the things of itself. Sufficient unto the day [is] the evil thereof.',
                        'unordered' => 'Lay not up for yourselves treasures upon earth, where moth and rust doth corrupt, and where thieves break through and steal: But lay up for yourselves treasures in heaven, where neither moth nor rust doth corrupt, and where thieves do not break through nor steal: For where your treasure is, there will your heart be also. The light of the body is the eye: if therefore thine eye be single, thy whole body shall be full of light. But if thine eye be evil, thy whole body shall be full of darkness. If therefore the light that is in thee be darkness, how great [is] that darkness! No man can serve two masters: for either he will hate the one, and love the other; or else he will hold to the one, and despise the other. Ye cannot serve God and mammon. Therefore I say unto you, Take no thought for your life, what ye shall eat, or what ye shall drink; nor yet for your body, what ye shall put on. Is not the life more than meat, and the body than raiment? Behold the fowls of the air: for they sow not, neither do they reap, nor gather into barns; yet your heavenly Father feedeth them. Are ye not much better than they? Which of you by taking thought can add one cubit unto his stature? And why take ye thought for raiment? Consider the lilies of the field, how they grow; they toil not, neither do they spin: And yet I say unto you, That even Solomon in all his glory was not arrayed like one of these. Wherefore, if God so clothe the grass of the field, which to day is, and to morrow is cast into the oven, [shall he] not much more [clothe] you, O ye of little faith? Therefore take no thought, saying, What shall we eat? or, What shall we drink? or, Wherewithal shall we be clothed? (For after all these things do the Gentiles seek:) for your heavenly Father knoweth that ye have need of all these things. But seek ye first the kingdom of God, and his righteousness; and all these things shall be added unto you. Take therefore no thought for the morrow: for the morrow shall take thought for the things of itself. Sufficient unto the day [is] the evil thereof.',
                        'description' => 'Matthew 6:19-34, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_006',
                        'name' => 'Do not worry about anything',
                        'siglum' => 'kjv/php/4/6',
                        'content' => '(6) Be careful for nothing; but in every thing by prayer and supplication with thanksgiving let your requests be made known unto God.',
                        'unordered' => 'Be careful for nothing; but in every thing by prayer and supplication with thanksgiving let your requests be made known unto God.',
                        'description' => 'Philippians 4:6, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_007',
                        'name' => 'Cast all your care on Jesus Christ',
                        'siglum' => 'kjv/1pe/5/6-7',
                        'content' => '(6) Humble yourselves therefore under the mighty hand of God, that he may exalt you in due time: (7) Casting all your care upon him; for he careth for you.',
                        'unordered' => 'Humble yourselves therefore under the mighty hand of God, that he may exalt you in due time: Casting all your care upon him; for he careth for you.',
                        'description' => '1 Peter 5:6-7, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I will fall in faith',
                'code' => 'CGAV_003',
                'colour_value' => '#208fdf'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_008',
                        'name' => 'Let us confess our sins',
                        'siglum' => 'kjv/1jn/1/4-9',
                        'content' => '(4) And these things write we unto you, that your joy may be full. (5) This then is the message which we have heard of him, and declare unto you, that God is light, and in him is no darkness at all. (6) If we say that we have fellowship with him, and walk in darkness, we lie, and do not the truth: (7) But if we walk in the light, as he is in the light, we have fellowship one with another, and the blood of Jesus Christ his Son cleanseth us from all sin. (8) If we say that we have no sin, we deceive ourselves, and the truth is not in us. (9) If we confess our sins, he is faithful and just to forgive us [our] sins, and to cleanse us from all unrighteousness.',
                        'unordered' => 'And these things write we unto you, that your joy may be full. This then is the message which we have heard of him, and declare unto you, that God is light, and in him is no darkness at all. If we say that we have fellowship with him, and walk in darkness, we lie, and do not the truth: But if we walk in the light, as he is in the light, we have fellowship one with another, and the blood of Jesus Christ his Son cleanseth us from all sin. If we say that we have no sin, we deceive ourselves, and the truth is not in us. If we confess our sins, he is faithful and just to forgive us [our] sins, and to cleanse us from all unrighteousness.',
                        'description' => '1 John 1:4-9, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I am in mourning',
                'code' => 'CGAV_004',
                'colour_value' => '#2020df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_009',
                        'name' => 'Blessed are those who mourn, for they will be comforted',
                        'siglum' => 'kjv/mt/5/4',
                        'content' => '(4) Blessed [are] they that mourn: for they shall be comforted.',
                        'unordered' => 'Blessed [are] they that mourn: for they shall be comforted.',
                        'description' => 'Matthew 5:4, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_010',
                        'name' => 'God comforts, so let\'s comfort one another',
                        'siglum' => 'kjv/2co/1/3-4',
                        'content' => '(3) Blessed [be] God, even the Father of our Lord Jesus Christ, the Father of mercies, and the God of all comfort; (4) Who comforteth us in all our tribulation, that we may be able to comfort them which are in any trouble, by the comfort wherewith we ourselves are comforted of God.',
                        'unordered' => 'Blessed [be] God, even the Father of our Lord Jesus Christ, the Father of mercies, and the God of all comfort; Who comforteth us in all our tribulation, that we may be able to comfort them which are in any trouble, by the comfort wherewith we ourselves are comforted of God.',
                        'description' => '2 Corinthians 1:3-4, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I am bitter or critical',
                'code' => 'CGAV_005',
                'colour_value' => '#20df70'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_011',
                        'name' => 'Even if I spoke human and angelic tongues',
                        'siglum' => 'kjv/1co/13/1-13',
                        'content' => '(1) Though I speak with the tongues of men and of angels, and have not charity, I am become [as] sounding brass, or a tinkling cymbal. (2) And though I have [the gift of] prophecy, and understand all mysteries, and all knowledge; and though I have all faith, so that I could remove mountains, and have not charity, I am nothing. (3) And though I bestow all my goods to feed [the poor], and though I give my body to be burned, and have not charity, it profiteth me nothing. (4) Charity suffereth long, [and] is kind; charity envieth not; charity vaunteth not itself, is not puffed up, (5) Doth not behave itself unseemly, seeketh not her own, is not easily provoked, thinketh no evil; (6) Rejoiceth not in iniquity, but rejoiceth in the truth; (7) Beareth all things, believeth all things, hopeth all things, endureth all things. (8) Charity never faileth: but whether [there be] prophecies, they shall fail; whether [there be] tongues, they shall cease; whether [there be] knowledge, it shall vanish away. (9) For we know in part, and we prophesy in part. (10) But when that which is perfect is come, then that which is in part shall be done away. (11) When I was a child, I spake as a child, I understood as a child, I thought as a child: but when I became a man, I put away childish things. (12) For now we see through a glass, darkly; but then face to face: now I know in part; but then shall I know even as also I am known. (13) And now abideth faith, hope, charity, these three; but the greatest of these [is] charity.',
                        'unordered' => 'Though I speak with the tongues of men and of angels, and have not charity, I am become [as] sounding brass, or a tinkling cymbal. And though I have [the gift of] prophecy, and understand all mysteries, and all knowledge; and though I have all faith, so that I could remove mountains, and have not charity, I am nothing. And though I bestow all my goods to feed [the poor], and though I give my body to be burned, and have not charity, it profiteth me nothing. Charity suffereth long, [and] is kind; charity envieth not; charity vaunteth not itself, is not puffed up, Doth not behave itself unseemly, seeketh not her own, is not easily provoked, thinketh no evil; Rejoiceth not in iniquity, but rejoiceth in the truth; Beareth all things, believeth all things, hopeth all things, endureth all things. Charity never faileth: but whether [there be] prophecies, they shall fail; whether [there be] tongues, they shall cease; whether [there be] knowledge, it shall vanish away. For we know in part, and we prophesy in part. But when that which is perfect is come, then that which is in part shall be done away. When I was a child, I spake as a child, I understood as a child, I thought as a child: but when I became a man, I put away childish things. For now we see through a glass, darkly; but then face to face: now I know in part; but then shall I know even as also I am known. And now abideth faith, hope, charity, these three; but the greatest of these [is] charity.',
                        'description' => '1 Corinthians 13:1-13, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I am defeated',
                'code' => 'CGAV_006',
                'colour_value' => '#df20bf'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_012',
                        'name' => 'Nothing and no one can separate us from God\'s love',
                        'siglum' => 'kjv/ro/8/31-39',
                        'content' => '(31) What shall we then say to these things? If God [be] for us, who [can be] against us? (32) He that spared not his own Son, but delivered him up for us all, how shall he not with him also freely give us all things? (33) Who shall lay any thing to the charge of God&#x27;s elect? [It is] God that justifieth. (34) Who [is] he that condemneth? [It is] Christ that died, yea rather, that is risen again, who is even at the right hand of God, who also maketh intercession for us. (35) Who shall separate us from the love of Christ? [shall] tribulation, or distress, or persecution, or famine, or nakedness, or peril, or sword? (36) As it is written, For thy sake we are killed all the day long; we are accounted as sheep for the slaughter. (37) Nay, in all these things we are more than conquerors through him that loved us. (38) For I am persuaded, that neither death, nor life, nor angels, nor principalities, nor powers, nor things present, nor things to come, (39) Nor height, nor depth, nor any other creature, shall be able to separate us from the love of God, which is in Christ Jesus our Lord.',
                        'unordered' => 'What shall we then say to these things? If God [be] for us, who [can be] against us? He that spared not his own Son, but delivered him up for us all, how shall he not with him also freely give us all things? Who shall lay any thing to the charge of God&#x27;s elect? [It is] God that justifieth. Who [is] he that condemneth? [It is] Christ that died, yea rather, that is risen again, who is even at the right hand of God, who also maketh intercession for us. Who shall separate us from the love of Christ? [shall] tribulation, or distress, or persecution, or famine, or nakedness, or peril, or sword? As it is written, For thy sake we are killed all the day long; we are accounted as sheep for the slaughter. Nay, in all these things we are more than conquerors through him that loved us. For I am persuaded, that neither death, nor life, nor angels, nor principalities, nor powers, nor things present, nor things to come, Nor height, nor depth, nor any other creature, shall be able to separate us from the love of God, which is in Christ Jesus our Lord.',
                        'description' => 'Romans 8:31-39, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I had a misfortune',
                'code' => 'CGAV_007',
                'colour_value' => '#20df50'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_013',
                        'name' => 'Where is your faith?',
                        'siglum' => 'kjv/lk/8/22-25',
                        'content' => '(22) Now it came to pass on a certain day, that he went into a ship with his disciples: and he said unto them, Let us go over unto the other side of the lake. And they launched forth. (23) But as they sailed he fell asleep: and there came down a storm of wind on the lake; and they were filled [with water], and were in jeopardy. (24) And they came to him, and awoke him, saying, Master, master, we perish. Then he arose, and rebuked the wind and the raging of the water: and they ceased, and there was a calm. (25) And he said unto them, Where is your faith? And they being afraid wondered, saying one to another, What manner of man is this! for he commandeth even the winds and water, and they obey him.',
                        'unordered' => 'Now it came to pass on a certain day, that he went into a ship with his disciples: and he said unto them, Let us go over unto the other side of the lake. And they launched forth. But as they sailed he fell asleep: and there came down a storm of wind on the lake; and they were filled [with water], and were in jeopardy. And they came to him, and awoke him, saying, Master, master, we perish. Then he arose, and rebuked the wind and the raging of the water: and they ceased, and there was a calm. And he said unto them, Where is your faith? And they being afraid wondered, saying one to another, What manner of man is this! for he commandeth even the winds and water, and they obey him.',
                        'description' => 'Luke 8:22-25, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I am discouraged',
                'code' => 'CGAV_008',
                'colour_value' => '#afdf20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_014',
                        'name' => 'Blessed are you',
                        'siglum' => 'kjv/mt/5/11-12',
                        'content' => '(11) Blessed are ye, when [men] shall revile you, and persecute [you], and shall say all manner of evil against you falsely, for my sake. (12) Rejoice, and be exceeding glad: for great [is] your reward in heaven: for so persecuted they the prophets which were before you.',
                        'unordered' => 'Blessed are ye, when [men] shall revile you, and persecute [you], and shall say all manner of evil against you falsely, for my sake. Rejoice, and be exceeding glad: for great [is] your reward in heaven: for so persecuted they the prophets which were before you.',
                        'description' => 'Matthew 5:11-12, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_015',
                        'name' => 'That\'s why we don\'t lose heart',
                        'siglum' => 'kjv/2co/4/8-18',
                        'content' => '(8) [We are] troubled on every side, yet not distressed; [we are] perplexed, but not in despair; (9) Persecuted, but not forsaken; cast down, but not destroyed; (10) Always bearing about in the body the dying of the Lord Jesus, that the life also of Jesus might be made manifest in our body. (11) For we which live are alway delivered unto death for Jesus&#x27; sake, that the life also of Jesus might be made manifest in our mortal flesh. (12) So then death worketh in us, but life in you. (13) We having the same spirit of faith, according as it is written, I believed, and therefore have I spoken; we also believe, and therefore speak; (14) Knowing that he which raised up the Lord Jesus shall raise up us also by Jesus, and shall present [us] with you. (15) For all things [are] for your sakes, that the abundant grace might through the thanksgiving of many redound to the glory of God. (16) For which cause we faint not; but though our outward man perish, yet the inward [man] is renewed day by day. (17) For our light affliction, which is but for a moment, worketh for us a far more exceeding [and] eternal weight of glory; (18) While we look not at the things which are seen, but at the things which are not seen: for the things which are seen [are] temporal; but the things which are not seen [are] eternal.',
                        'unordered' => '[We are] troubled on every side, yet not distressed; [we are] perplexed, but not in despair; Persecuted, but not forsaken; cast down, but not destroyed; Always bearing about in the body the dying of the Lord Jesus, that the life also of Jesus might be made manifest in our body. For we which live are alway delivered unto death for Jesus&#x27; sake, that the life also of Jesus might be made manifest in our mortal flesh. So then death worketh in us, but life in you. We having the same spirit of faith, according as it is written, I believed, and therefore have I spoken; we also believe, and therefore speak; Knowing that he which raised up the Lord Jesus shall raise up us also by Jesus, and shall present [us] with you. For all things [are] for your sakes, that the abundant grace might through the thanksgiving of many redound to the glory of God. For which cause we faint not; but though our outward man perish, yet the inward [man] is renewed day by day. For our light affliction, which is but for a moment, worketh for us a far more exceeding [and] eternal weight of glory; While we look not at the things which are seen, but at the things which are not seen: for the things which are seen [are] temporal; but the things which are not seen [are] eternal.',
                        'description' => '2 Corinthians 4:8-18, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_016',
                        'name' => 'Rejoice in the Lord always',
                        'siglum' => 'kjv/php/4/4-7',
                        'content' => '(4) Rejoice in the Lord alway: [and] again I say, Rejoice. (5) Let your moderation be known unto all men. The Lord [is] at hand. (6) Be careful for nothing; but in every thing by prayer and supplication with thanksgiving let your requests be made known unto God. (7) And the peace of God, which passeth all understanding, shall keep your hearts and minds through Christ Jesus.',
                        'unordered' => 'Rejoice in the Lord alway: [and] again I say, Rejoice. Let your moderation be known unto all men. The Lord [is] at hand. Be careful for nothing; but in every thing by prayer and supplication with thanksgiving let your requests be made known unto God. And the peace of God, which passeth all understanding, shall keep your hearts and minds through Christ Jesus.',
                        'description' => 'Philippians 4:4-7, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I doubt it',
                'code' => 'CGAV_009',
                'colour_value' => '#20dfbf'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_017',
                        'name' => 'Why are you fearful, of little faith?',
                        'siglum' => 'kjv/mt/8/26',
                        'content' => '(26) And he saith unto them, Why are ye fearful, O ye of little faith? Then he arose, and rebuked the winds and the sea; and there was a great calm.',
                        'unordered' => 'And he saith unto them, Why are ye fearful, O ye of little faith? Then he arose, and rebuked the winds and the sea; and there was a great calm.',
                        'description' => 'Matthew 8:26, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_018',
                        'name' => 'And faith is the assurance of what we hope for',
                        'siglum' => 'kjv/hebr/11/1-40',
                        'content' => '(1) Now faith is the substance of things hoped for, the evidence of things not seen. (2) For by it the elders obtained a good report. (3) Through faith we understand that the worlds were framed by the word of God, so that things which are seen were not made of things which do appear. (4) By faith Abel offered unto God a more excellent sacrifice than Cain, by which he obtained witness that he was righteous, God testifying of his gifts: and by it he being dead yet speaketh. (5) By faith Enoch was translated that he should not see death; and was not found, because God had translated him: for before his translation he had this testimony, that he pleased God. (6) But without faith [it is] impossible to please [him]: for he that cometh to God must believe that he is, and [that] he is a rewarder of them that diligently seek him. (7) By faith Noah, being warned of God of things not seen as yet, moved with fear, prepared an ark to the saving of his house; by the which he condemned the world, and became heir of the righteousness which is by faith. (8) By faith Abraham, when he was called to go out into a place which he should after receive for an inheritance, obeyed; and he went out, not knowing whither he went. (9) By faith he sojourned in the land of promise, as [in] a strange country, dwelling in tabernacles with Isaac and Jacob, the heirs with him of the same promise: (10) For he looked for a city which hath foundations, whose builder and maker [is] God. (11) Through faith also Sara herself received strength to conceive seed, and was delivered of a child when she was past age, because she judged him faithful who had promised. (12) Therefore sprang there even of one, and him as good as dead, [so many] as the stars of the sky in multitude, and as the sand which is by the sea shore innumerable. (13) These all died in faith, not having received the promises, but having seen them afar off, and were persuaded of [them], and embraced [them], and confessed that they were strangers and pilgrims on the earth. (14) For they that say such things declare plainly that they seek a country. (15) And truly, if they had been mindful of that [country] from whence they came out, they might have had opportunity to have returned. (16) But now they desire a better [country], that is, an heavenly: wherefore God is not ashamed to be called their God: for he hath prepared for them a city. (17) By faith Abraham, when he was tried, offered up Isaac: and he that had received the promises offered up his only begotten [son], (18) Of whom it was said, That in Isaac shall thy seed be called: (19) Accounting that God [was] able to raise [him] up, even from the dead; from whence also he received him in a figure. (20) By faith Isaac blessed Jacob and Esau concerning things to come. (21) By faith Jacob, when he was a dying, blessed both the sons of Joseph; and worshipped, [leaning] upon the top of his staff. (22) By faith Joseph, when he died, made mention of the departing of the children of Israel; and gave commandment concerning his bones. (23) By faith Moses, when he was born, was hid three months of his parents, because they saw [he was] a proper child; and they were not afraid of the king&#x27;s commandment. (24) By faith Moses, when he was come to years, refused to be called the son of Pharaoh&#x27;s daughter; (25) Choosing rather to suffer affliction with the people of God, than to enjoy the pleasures of sin for a season; (26) Esteeming the reproach of Christ greater riches than the treasures in Egypt: for he had respect unto the recompence of the reward. (27) By faith he forsook Egypt, not fearing the wrath of the king: for he endured, as seeing him who is invisible. (28) Through faith he kept the passover, and the sprinkling of blood, lest he that destroyed the firstborn should touch them. (29) By faith they passed through the Red sea as by dry [land]: which the Egyptians assaying to do were drowned. (30) By faith the walls of Jericho fell down, after they were compassed about seven days. (31) By faith the harlot Rahab perished not with them that believed not, when she had received the spies with peace. (32) And what shall I more say? for the time would fail me to tell of Gedeon, and [of] Barak, and [of] Samson, and [of] Jephthae; [of] David also, and Samuel, and [of] the prophets: (33) Who through faith subdued kingdoms, wrought righteousness, obtained promises, stopped the mouths of lions, (34) Quenched the violence of fire, escaped the edge of the sword, out of weakness were made strong, waxed valiant in fight, turned to flight the armies of the aliens. (35) Women received their dead raised to life again: and others were tortured, not accepting deliverance; that they might obtain a better resurrection: (36) And others had trial of [cruel] mockings and scourgings, yea, moreover of bonds and imprisonment: (37) They were stoned, they were sawn asunder, were tempted, were slain with the sword: they wandered about in sheepskins and goatskins; being destitute, afflicted, tormented; (38) (Of whom the world was not worthy:) they wandered in deserts, and [in] mountains, and [in] dens and caves of the earth. (39) And these all, having obtained a good report through faith, received not the promise: (40) God having provided some better thing for us, that they without us should not be made perfect.',
                        'unordered' => 'Now faith is the substance of things hoped for, the evidence of things not seen. For by it the elders obtained a good report. Through faith we understand that the worlds were framed by the word of God, so that things which are seen were not made of things which do appear. By faith Abel offered unto God a more excellent sacrifice than Cain, by which he obtained witness that he was righteous, God testifying of his gifts: and by it he being dead yet speaketh. By faith Enoch was translated that he should not see death; and was not found, because God had translated him: for before his translation he had this testimony, that he pleased God. But without faith [it is] impossible to please [him]: for he that cometh to God must believe that he is, and [that] he is a rewarder of them that diligently seek him. By faith Noah, being warned of God of things not seen as yet, moved with fear, prepared an ark to the saving of his house; by the which he condemned the world, and became heir of the righteousness which is by faith. By faith Abraham, when he was called to go out into a place which he should after receive for an inheritance, obeyed; and he went out, not knowing whither he went. By faith he sojourned in the land of promise, as [in] a strange country, dwelling in tabernacles with Isaac and Jacob, the heirs with him of the same promise: For he looked for a city which hath foundations, whose builder and maker [is] God. Through faith also Sara herself received strength to conceive seed, and was delivered of a child when she was past age, because she judged him faithful who had promised. Therefore sprang there even of one, and him as good as dead, [so many] as the stars of the sky in multitude, and as the sand which is by the sea shore innumerable. These all died in faith, not having received the promises, but having seen them afar off, and were persuaded of [them], and embraced [them], and confessed that they were strangers and pilgrims on the earth. For they that say such things declare plainly that they seek a country. And truly, if they had been mindful of that [country] from whence they came out, they might have had opportunity to have returned. But now they desire a better [country], that is, an heavenly: wherefore God is not ashamed to be called their God: for he hath prepared for them a city. By faith Abraham, when he was tried, offered up Isaac: and he that had received the promises offered up his only begotten [son], Of whom it was said, That in Isaac shall thy seed be called: Accounting that God [was] able to raise [him] up, even from the dead; from whence also he received him in a figure. By faith Isaac blessed Jacob and Esau concerning things to come. By faith Jacob, when he was a dying, blessed both the sons of Joseph; and worshipped, [leaning] upon the top of his staff. By faith Joseph, when he died, made mention of the departing of the children of Israel; and gave commandment concerning his bones. By faith Moses, when he was born, was hid three months of his parents, because they saw [he was] a proper child; and they were not afraid of the king&#x27;s commandment. By faith Moses, when he was come to years, refused to be called the son of Pharaoh&#x27;s daughter; Choosing rather to suffer affliction with the people of God, than to enjoy the pleasures of sin for a season; Esteeming the reproach of Christ greater riches than the treasures in Egypt: for he had respect unto the recompence of the reward. By faith he forsook Egypt, not fearing the wrath of the king: for he endured, as seeing him who is invisible. Through faith he kept the passover, and the sprinkling of blood, lest he that destroyed the firstborn should touch them. By faith they passed through the Red sea as by dry [land]: which the Egyptians assaying to do were drowned. By faith the walls of Jericho fell down, after they were compassed about seven days. By faith the harlot Rahab perished not with them that believed not, when she had received the spies with peace. And what shall I more say? for the time would fail me to tell of Gedeon, and [of] Barak, and [of] Samson, and [of] Jephthae; [of] David also, and Samuel, and [of] the prophets: Who through faith subdued kingdoms, wrought righteousness, obtained promises, stopped the mouths of lions, Quenched the violence of fire, escaped the edge of the sword, out of weakness were made strong, waxed valiant in fight, turned to flight the armies of the aliens. Women received their dead raised to life again: and others were tortured, not accepting deliverance; that they might obtain a better resurrection: And others had trial of [cruel] mockings and scourgings, yea, moreover of bonds and imprisonment: They were stoned, they were sawn asunder, were tempted, were slain with the sword: they wandered about in sheepskins and goatskins; being destitute, afflicted, tormented; (Of whom the world was not worthy:) they wandered in deserts, and [in] mountains, and [in] dens and caves of the earth. And these all, having obtained a good report through faith, received not the promise: God having provided some better thing for us, that they without us should not be made perfect.',
                        'description' => 'Hebrews 11:1-40, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I am in a crisis',
                'code' => 'CGAV_010',
                'colour_value' => '#df9f20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_019',
                        'name' => 'Don\'t worry about your life',
                        'siglum' => 'kjv/mt/6/25-34',
                        'content' => '(25) Therefore I say unto you, Take no thought for your life, what ye shall eat, or what ye shall drink; nor yet for your body, what ye shall put on. Is not the life more than meat, and the body than raiment? (26) Behold the fowls of the air: for they sow not, neither do they reap, nor gather into barns; yet your heavenly Father feedeth them. Are ye not much better than they? (27) Which of you by taking thought can add one cubit unto his stature? (28) And why take ye thought for raiment? Consider the lilies of the field, how they grow; they toil not, neither do they spin: (29) And yet I say unto you, That even Solomon in all his glory was not arrayed like one of these. (30) Wherefore, if God so clothe the grass of the field, which to day is, and to morrow is cast into the oven, [shall he] not much more [clothe] you, O ye of little faith? (31) Therefore take no thought, saying, What shall we eat? or, What shall we drink? or, Wherewithal shall we be clothed? (32) (For after all these things do the Gentiles seek:) for your heavenly Father knoweth that ye have need of all these things. (33) But seek ye first the kingdom of God, and his righteousness; and all these things shall be added unto you. (34) Take therefore no thought for the morrow: for the morrow shall take thought for the things of itself. Sufficient unto the day [is] the evil thereof.',
                        'unordered' => 'Therefore I say unto you, Take no thought for your life, what ye shall eat, or what ye shall drink; nor yet for your body, what ye shall put on. Is not the life more than meat, and the body than raiment? Behold the fowls of the air: for they sow not, neither do they reap, nor gather into barns; yet your heavenly Father feedeth them. Are ye not much better than they? Which of you by taking thought can add one cubit unto his stature? And why take ye thought for raiment? Consider the lilies of the field, how they grow; they toil not, neither do they spin: And yet I say unto you, That even Solomon in all his glory was not arrayed like one of these. Wherefore, if God so clothe the grass of the field, which to day is, and to morrow is cast into the oven, [shall he] not much more [clothe] you, O ye of little faith? Therefore take no thought, saying, What shall we eat? or, What shall we drink? or, Wherewithal shall we be clothed? (For after all these things do the Gentiles seek:) for your heavenly Father knoweth that ye have need of all these things. But seek ye first the kingdom of God, and his righteousness; and all these things shall be added unto you. Take therefore no thought for the morrow: for the morrow shall take thought for the things of itself. Sufficient unto the day [is] the evil thereof.',
                        'description' => 'Matthew 6:25-34, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_020',
                        'name' => 'Let us therefore approach with confident courage to the throne of grace',
                        'siglum' => 'kjv/hebr/4/16',
                        'content' => '(16) Let us therefore come boldly unto the throne of grace, that we may obtain mercy, and find grace to help in time of need.',
                        'unordered' => 'Let us therefore come boldly unto the throne of grace, that we may obtain mercy, and find grace to help in time of need.',
                        'description' => 'Hebrews 4:16, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Faith fails',
                'code' => 'CGAV_011',
                'colour_value' => '#dfdf20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_021',
                        'name' => 'And faith is the assurance of what we hope for',
                        'siglum' => 'kjv/hebr/11/1-40',
                        'content' => '(1) Now faith is the substance of things hoped for, the evidence of things not seen. (2) For by it the elders obtained a good report. (3) Through faith we understand that the worlds were framed by the word of God, so that things which are seen were not made of things which do appear. (4) By faith Abel offered unto God a more excellent sacrifice than Cain, by which he obtained witness that he was righteous, God testifying of his gifts: and by it he being dead yet speaketh. (5) By faith Enoch was translated that he should not see death; and was not found, because God had translated him: for before his translation he had this testimony, that he pleased God. (6) But without faith [it is] impossible to please [him]: for he that cometh to God must believe that he is, and [that] he is a rewarder of them that diligently seek him. (7) By faith Noah, being warned of God of things not seen as yet, moved with fear, prepared an ark to the saving of his house; by the which he condemned the world, and became heir of the righteousness which is by faith. (8) By faith Abraham, when he was called to go out into a place which he should after receive for an inheritance, obeyed; and he went out, not knowing whither he went. (9) By faith he sojourned in the land of promise, as [in] a strange country, dwelling in tabernacles with Isaac and Jacob, the heirs with him of the same promise: (10) For he looked for a city which hath foundations, whose builder and maker [is] God. (11) Through faith also Sara herself received strength to conceive seed, and was delivered of a child when she was past age, because she judged him faithful who had promised. (12) Therefore sprang there even of one, and him as good as dead, [so many] as the stars of the sky in multitude, and as the sand which is by the sea shore innumerable. (13) These all died in faith, not having received the promises, but having seen them afar off, and were persuaded of [them], and embraced [them], and confessed that they were strangers and pilgrims on the earth. (14) For they that say such things declare plainly that they seek a country. (15) And truly, if they had been mindful of that [country] from whence they came out, they might have had opportunity to have returned. (16) But now they desire a better [country], that is, an heavenly: wherefore God is not ashamed to be called their God: for he hath prepared for them a city. (17) By faith Abraham, when he was tried, offered up Isaac: and he that had received the promises offered up his only begotten [son], (18) Of whom it was said, That in Isaac shall thy seed be called: (19) Accounting that God [was] able to raise [him] up, even from the dead; from whence also he received him in a figure. (20) By faith Isaac blessed Jacob and Esau concerning things to come. (21) By faith Jacob, when he was a dying, blessed both the sons of Joseph; and worshipped, [leaning] upon the top of his staff. (22) By faith Joseph, when he died, made mention of the departing of the children of Israel; and gave commandment concerning his bones. (23) By faith Moses, when he was born, was hid three months of his parents, because they saw [he was] a proper child; and they were not afraid of the king&#x27;s commandment. (24) By faith Moses, when he was come to years, refused to be called the son of Pharaoh&#x27;s daughter; (25) Choosing rather to suffer affliction with the people of God, than to enjoy the pleasures of sin for a season; (26) Esteeming the reproach of Christ greater riches than the treasures in Egypt: for he had respect unto the recompence of the reward. (27) By faith he forsook Egypt, not fearing the wrath of the king: for he endured, as seeing him who is invisible. (28) Through faith he kept the passover, and the sprinkling of blood, lest he that destroyed the firstborn should touch them. (29) By faith they passed through the Red sea as by dry [land]: which the Egyptians assaying to do were drowned. (30) By faith the walls of Jericho fell down, after they were compassed about seven days. (31) By faith the harlot Rahab perished not with them that believed not, when she had received the spies with peace. (32) And what shall I more say? for the time would fail me to tell of Gedeon, and [of] Barak, and [of] Samson, and [of] Jephthae; [of] David also, and Samuel, and [of] the prophets: (33) Who through faith subdued kingdoms, wrought righteousness, obtained promises, stopped the mouths of lions, (34) Quenched the violence of fire, escaped the edge of the sword, out of weakness were made strong, waxed valiant in fight, turned to flight the armies of the aliens. (35) Women received their dead raised to life again: and others were tortured, not accepting deliverance; that they might obtain a better resurrection: (36) And others had trial of [cruel] mockings and scourgings, yea, moreover of bonds and imprisonment: (37) They were stoned, they were sawn asunder, were tempted, were slain with the sword: they wandered about in sheepskins and goatskins; being destitute, afflicted, tormented; (38) (Of whom the world was not worthy:) they wandered in deserts, and [in] mountains, and [in] dens and caves of the earth. (39) And these all, having obtained a good report through faith, received not the promise: (40) God having provided some better thing for us, that they without us should not be made perfect.',
                        'unordered' => 'Now faith is the substance of things hoped for, the evidence of things not seen. For by it the elders obtained a good report. Through faith we understand that the worlds were framed by the word of God, so that things which are seen were not made of things which do appear. By faith Abel offered unto God a more excellent sacrifice than Cain, by which he obtained witness that he was righteous, God testifying of his gifts: and by it he being dead yet speaketh. By faith Enoch was translated that he should not see death; and was not found, because God had translated him: for before his translation he had this testimony, that he pleased God. But without faith [it is] impossible to please [him]: for he that cometh to God must believe that he is, and [that] he is a rewarder of them that diligently seek him. By faith Noah, being warned of God of things not seen as yet, moved with fear, prepared an ark to the saving of his house; by the which he condemned the world, and became heir of the righteousness which is by faith. By faith Abraham, when he was called to go out into a place which he should after receive for an inheritance, obeyed; and he went out, not knowing whither he went. By faith he sojourned in the land of promise, as [in] a strange country, dwelling in tabernacles with Isaac and Jacob, the heirs with him of the same promise: For he looked for a city which hath foundations, whose builder and maker [is] God. Through faith also Sara herself received strength to conceive seed, and was delivered of a child when she was past age, because she judged him faithful who had promised. Therefore sprang there even of one, and him as good as dead, [so many] as the stars of the sky in multitude, and as the sand which is by the sea shore innumerable. These all died in faith, not having received the promises, but having seen them afar off, and were persuaded of [them], and embraced [them], and confessed that they were strangers and pilgrims on the earth. For they that say such things declare plainly that they seek a country. And truly, if they had been mindful of that [country] from whence they came out, they might have had opportunity to have returned. But now they desire a better [country], that is, an heavenly: wherefore God is not ashamed to be called their God: for he hath prepared for them a city. By faith Abraham, when he was tried, offered up Isaac: and he that had received the promises offered up his only begotten [son], Of whom it was said, That in Isaac shall thy seed be called: Accounting that God [was] able to raise [him] up, even from the dead; from whence also he received him in a figure. By faith Isaac blessed Jacob and Esau concerning things to come. By faith Jacob, when he was a dying, blessed both the sons of Joseph; and worshipped, [leaning] upon the top of his staff. By faith Joseph, when he died, made mention of the departing of the children of Israel; and gave commandment concerning his bones. By faith Moses, when he was born, was hid three months of his parents, because they saw [he was] a proper child; and they were not afraid of the king&#x27;s commandment. By faith Moses, when he was come to years, refused to be called the son of Pharaoh&#x27;s daughter; Choosing rather to suffer affliction with the people of God, than to enjoy the pleasures of sin for a season; Esteeming the reproach of Christ greater riches than the treasures in Egypt: for he had respect unto the recompence of the reward. By faith he forsook Egypt, not fearing the wrath of the king: for he endured, as seeing him who is invisible. Through faith he kept the passover, and the sprinkling of blood, lest he that destroyed the firstborn should touch them. By faith they passed through the Red sea as by dry [land]: which the Egyptians assaying to do were drowned. By faith the walls of Jericho fell down, after they were compassed about seven days. By faith the harlot Rahab perished not with them that believed not, when she had received the spies with peace. And what shall I more say? for the time would fail me to tell of Gedeon, and [of] Barak, and [of] Samson, and [of] Jephthae; [of] David also, and Samuel, and [of] the prophets: Who through faith subdued kingdoms, wrought righteousness, obtained promises, stopped the mouths of lions, Quenched the violence of fire, escaped the edge of the sword, out of weakness were made strong, waxed valiant in fight, turned to flight the armies of the aliens. Women received their dead raised to life again: and others were tortured, not accepting deliverance; that they might obtain a better resurrection: And others had trial of [cruel] mockings and scourgings, yea, moreover of bonds and imprisonment: They were stoned, they were sawn asunder, were tempted, were slain with the sword: they wandered about in sheepskins and goatskins; being destitute, afflicted, tormented; (Of whom the world was not worthy:) they wandered in deserts, and [in] mountains, and [in] dens and caves of the earth. And these all, having obtained a good report through faith, received not the promise: God having provided some better thing for us, that they without us should not be made perfect.',
                        'description' => 'Hebrews 11:1-40, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Friends fail',
                'code' => 'CGAV_012',
                'colour_value' => '#7020df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_022',
                        'name' => 'Be careful',
                        'siglum' => 'kjv/lk/17/3-4',
                        'content' => '(3) Take heed to yourselves: If thy brother trespass against thee, rebuke him; and if he repent, forgive him. (4) And if he trespass against thee seven times in a day, and seven times in a day turn again to thee, saying, I repent; thou shalt forgive him.',
                        'unordered' => 'Take heed to yourselves: If thy brother trespass against thee, rebuke him; and if he repent, forgive him. And if he trespass against thee seven times in a day, and seven times in a day turn again to thee, saying, I repent; thou shalt forgive him.',
                        'description' => 'Luke 17:3-4, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_023',
                        'name' => 'Bless those who persecute you',
                        'siglum' => 'kjv/ro/12/14-17',
                        'content' => '(14) Bless them which persecute you: bless, and curse not. (15) Rejoice with them that do rejoice, and weep with them that weep. (16) [Be] of the same mind one toward another. Mind not high things, but condescend to men of low estate. Be not wise in your own conceits. (17) Recompense to no man evil for evil. Provide things honest in the sight of all men.',
                        'unordered' => 'Bless them which persecute you: bless, and curse not. Rejoice with them that do rejoice, and weep with them that weep. [Be] of the same mind one toward another. Mind not high things, but condescend to men of low estate. Be not wise in your own conceits. Recompense to no man evil for evil. Provide things honest in the sight of all men.',
                        'description' => 'Romans 12:14-17, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_024',
                        'name' => 'Do not avenge yourselves, but leave it to the wrath of God',
                        'siglum' => 'kjv/ro/12/19-21',
                        'content' => '(19) Dearly beloved, avenge not yourselves, but [rather] give place unto wrath: for it is written, Vengeance [is] mine; I will repay, saith the Lord. (20) Therefore if thine enemy hunger, feed him; if he thirst, give him drink: for in so doing thou shalt heap coals of fire on his head. (21) Be not overcome of evil, but overcome evil with good.',
                        'unordered' => 'Dearly beloved, avenge not yourselves, but [rather] give place unto wrath: for it is written, Vengeance [is] mine; I will repay, saith the Lord. Therefore if thine enemy hunger, feed him; if he thirst, give him drink: for in so doing thou shalt heap coals of fire on his head. Be not overcome of evil, but overcome evil with good.',
                        'description' => 'Romans 12:19-21, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_025',
                        'name' => 'The Lord stood by me and gave me strength',
                        'siglum' => 'kjv/2tm/4/16-18',
                        'content' => '(16) At my first answer no man stood with me, but all [men] forsook me: [I pray God] that it may not be laid to their charge. (17) Notwithstanding the Lord stood with me, and strengthened me; that by me the preaching might be fully known, and [that] all the Gentiles might hear: and I was delivered out of the mouth of the lion. (18) And the Lord shall deliver me from every evil work, and will preserve [me] unto his heavenly kingdom: to whom [be] glory for ever and ever. Amen.',
                        'unordered' => 'At my first answer no man stood with me, but all [men] forsook me: [I pray God] that it may not be laid to their charge. Notwithstanding the Lord stood with me, and strengthened me; that by me the preaching might be fully known, and [that] all the Gentiles might hear: and I was delivered out of the mouth of the lion. And the Lord shall deliver me from every evil work, and will preserve [me] unto his heavenly kingdom: to whom [be] glory for ever and ever. Amen.',
                        'description' => '2 Timothy 4:16-18, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I am leaving home',
                'code' => 'CGAV_013',
                'colour_value' => '#df5020'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_026',
                        'name' => 'Behold, I am sending you like sheep among wolves',
                        'siglum' => 'kjv/mt/10/16-20',
                        'content' => '(16) Behold, I send you forth as sheep in the midst of wolves: be ye therefore wise as serpents, and harmless as doves. (17) But beware of men: for they will deliver you up to the councils, and they will scourge you in their synagogues; (18) And ye shall be brought before governors and kings for my sake, for a testimony against them and the Gentiles. (19) But when they deliver you up, take no thought how or what ye shall speak: for it shall be given you in that same hour what ye shall speak. (20) For it is not ye that speak, but the Spirit of your Father which speaketh in you.',
                        'unordered' => 'Behold, I send you forth as sheep in the midst of wolves: be ye therefore wise as serpents, and harmless as doves. But beware of men: for they will deliver you up to the councils, and they will scourge you in their synagogues; And ye shall be brought before governors and kings for my sake, for a testimony against them and the Gentiles. But when they deliver you up, take no thought how or what ye shall speak: for it shall be given you in that same hour what ye shall speak. For it is not ye that speak, but the Spirit of your Father which speaketh in you.',
                        'description' => 'Matthew 10:16-20, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I am lonely',
                'code' => 'CGAV_014',
                'colour_value' => '#df7020'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_027',
                        'name' => 'I will not abandon you or leave you',
                        'siglum' => 'kjv/hebr/13/5-6',
                        'content' => '(5) [Let your] conversation [be] without covetousness; [and be] content with such things as ye have: for he hath said, I will never leave thee, nor forsake thee. (6) So that we may boldly say, The Lord [is] my helper, and I will not fear what man shall do unto me.',
                        'unordered' => '[Let your] conversation [be] without covetousness; [and be] content with such things as ye have: for he hath said, I will never leave thee, nor forsake thee. So that we may boldly say, The Lord [is] my helper, and I will not fear what man shall do unto me.',
                        'description' => 'Hebrews 13:5-6, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I need peace',
                'code' => 'CGAV_015',
                'colour_value' => '#50df20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_028',
                        'name' => 'Let not your heart be troubled',
                        'siglum' => 'kjv/jn/14/1-4',
                        'content' => '(1) Let not your heart be troubled: ye believe in God, believe also in me. (2) In my Father&#x27;s house are many mansions: if [it were] not [so], I would have told you. I go to prepare a place for you. (3) And if I go and prepare a place for you, I will come again, and receive you unto myself; that where I am, [there] ye may be also. (4) And whither I go ye know, and the way ye know.',
                        'unordered' => 'Let not your heart be troubled: ye believe in God, believe also in me. In my Father&#x27;s house are many mansions: if [it were] not [so], I would have told you. I go to prepare a place for you. And if I go and prepare a place for you, I will come again, and receive you unto myself; that where I am, [there] ye may be also. And whither I go ye know, and the way ye know.',
                        'description' => 'John 14:1-4, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_029',
                        'name' => 'I have told you this so that in me you may have peace',
                        'siglum' => 'kjv/jn/16/33',
                        'content' => '(33) These things I have spoken unto you, that in me ye might have peace. In the world ye shall have tribulation: but be of good cheer; I have overcome the world.',
                        'unordered' => 'These things I have spoken unto you, that in me ye might have peace. In the world ye shall have tribulation: but be of good cheer; I have overcome the world.',
                        'description' => 'John 16:33, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_030',
                        'name' => 'Being therefore justified by faith, we have peace with God',
                        'siglum' => 'kjv/ro/5/1-5',
                        'content' => '(1) Therefore being justified by faith, we have peace with God through our Lord Jesus Christ: (2) By whom also we have access by faith into this grace wherein we stand, and rejoice in hope of the glory of God. (3) And not only [so], but we glory in tribulations also: knowing that tribulation worketh patience; (4) And patience, experience; and experience, hope: (5) And hope maketh not ashamed; because the love of God is shed abroad in our hearts by the Holy Ghost which is given unto us.',
                        'unordered' => 'Therefore being justified by faith, we have peace with God through our Lord Jesus Christ: By whom also we have access by faith into this grace wherein we stand, and rejoice in hope of the glory of God. And not only [so], but we glory in tribulations also: knowing that tribulation worketh patience; And patience, experience; and experience, hope: And hope maketh not ashamed; because the love of God is shed abroad in our hearts by the Holy Ghost which is given unto us.',
                        'description' => 'Romans 5:1-5, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_031',
                        'name' => 'Don\'t worry about anything',
                        'siglum' => 'kjv/php/4/6-7',
                        'content' => '(6) Be careful for nothing; but in every thing by prayer and supplication with thanksgiving let your requests be made known unto God. (7) And the peace of God, which passeth all understanding, shall keep your hearts and minds through Christ Jesus.',
                        'unordered' => 'Be careful for nothing; but in every thing by prayer and supplication with thanksgiving let your requests be made known unto God. And the peace of God, which passeth all understanding, shall keep your hearts and minds through Christ Jesus.',
                        'description' => 'Philippians 4:6-7, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I need tips on how to live',
                'code' => 'CGAV_016',
                'colour_value' => '#20dfdf'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_032',
                        'name' => 'Don\'t conform to this world',
                        'siglum' => 'kjv/ro/12/1-21',
                        'content' => '(1) I beseech you therefore, brethren, by the mercies of God, that ye present your bodies a living sacrifice, holy, acceptable unto God, [which is] your reasonable service. (2) And be not conformed to this world: but be ye transformed by the renewing of your mind, that ye may prove what [is] that good, and acceptable, and perfect, will of God. (3) For I say, through the grace given unto me, to every man that is among you, not to think [of himself] more highly than he ought to think; but to think soberly, according as God hath dealt to every man the measure of faith. (4) For as we have many members in one body, and all members have not the same office: (5) So we, [being] many, are one body in Christ, and every one members one of another. (6) Having then gifts differing according to the grace that is given to us, whether prophecy, [let us prophesy] according to the proportion of faith; (7) Or ministry, [let us wait] on [our] ministering: or he that teacheth, on teaching; (8) Or he that exhorteth, on exhortation: he that giveth, [let him do it] with simplicity; he that ruleth, with diligence; he that sheweth mercy, with cheerfulness. (9) [Let] love be without dissimulation. Abhor that which is evil; cleave to that which is good. (10) [Be] kindly affectioned one to another with brotherly love; in honour preferring one another; (11) Not slothful in business; fervent in spirit; serving the Lord; (12) Rejoicing in hope; patient in tribulation; continuing instant in prayer; (13) Distributing to the necessity of saints; given to hospitality. (14) Bless them which persecute you: bless, and curse not. (15) Rejoice with them that do rejoice, and weep with them that weep. (16) [Be] of the same mind one toward another. Mind not high things, but condescend to men of low estate. Be not wise in your own conceits. (17) Recompense to no man evil for evil. Provide things honest in the sight of all men. (18) If it be possible, as much as lieth in you, live peaceably with all men. (19) Dearly beloved, avenge not yourselves, but [rather] give place unto wrath: for it is written, Vengeance [is] mine; I will repay, saith the Lord. (20) Therefore if thine enemy hunger, feed him; if he thirst, give him drink: for in so doing thou shalt heap coals of fire on his head. (21) Be not overcome of evil, but overcome evil with good.',
                        'unordered' => 'I beseech you therefore, brethren, by the mercies of God, that ye present your bodies a living sacrifice, holy, acceptable unto God, [which is] your reasonable service. And be not conformed to this world: but be ye transformed by the renewing of your mind, that ye may prove what [is] that good, and acceptable, and perfect, will of God. For I say, through the grace given unto me, to every man that is among you, not to think [of himself] more highly than he ought to think; but to think soberly, according as God hath dealt to every man the measure of faith. For as we have many members in one body, and all members have not the same office: So we, [being] many, are one body in Christ, and every one members one of another. Having then gifts differing according to the grace that is given to us, whether prophecy, [let us prophesy] according to the proportion of faith; Or ministry, [let us wait] on [our] ministering: or he that teacheth, on teaching; Or he that exhorteth, on exhortation: he that giveth, [let him do it] with simplicity; he that ruleth, with diligence; he that sheweth mercy, with cheerfulness. [Let] love be without dissimulation. Abhor that which is evil; cleave to that which is good. [Be] kindly affectioned one to another with brotherly love; in honour preferring one another; Not slothful in business; fervent in spirit; serving the Lord; Rejoicing in hope; patient in tribulation; continuing instant in prayer; Distributing to the necessity of saints; given to hospitality. Bless them which persecute you: bless, and curse not. Rejoice with them that do rejoice, and weep with them that weep. [Be] of the same mind one toward another. Mind not high things, but condescend to men of low estate. Be not wise in your own conceits. Recompense to no man evil for evil. Provide things honest in the sight of all men. If it be possible, as much as lieth in you, live peaceably with all men. Dearly beloved, avenge not yourselves, but [rather] give place unto wrath: for it is written, Vengeance [is] mine; I will repay, saith the Lord. Therefore if thine enemy hunger, feed him; if he thirst, give him drink: for in so doing thou shalt heap coals of fire on his head. Be not overcome of evil, but overcome evil with good.',
                        'description' => 'Romans 12:1-21, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I win',
                'code' => 'CGAV_017',
                'colour_value' => '#40df20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_033',
                        'name' => 'Who will separate us from the love of Christ?',
                        'siglum' => 'kjv/ro/8/31-39',
                        'content' => '(31) What shall we then say to these things? If God [be] for us, who [can be] against us? (32) He that spared not his own Son, but delivered him up for us all, how shall he not with him also freely give us all things? (33) Who shall lay any thing to the charge of God&#x27;s elect? [It is] God that justifieth. (34) Who [is] he that condemneth? [It is] Christ that died, yea rather, that is risen again, who is even at the right hand of God, who also maketh intercession for us. (35) Who shall separate us from the love of Christ? [shall] tribulation, or distress, or persecution, or famine, or nakedness, or peril, or sword? (36) As it is written, For thy sake we are killed all the day long; we are accounted as sheep for the slaughter. (37) Nay, in all these things we are more than conquerors through him that loved us. (38) For I am persuaded, that neither death, nor life, nor angels, nor principalities, nor powers, nor things present, nor things to come, (39) Nor height, nor depth, nor any other creature, shall be able to separate us from the love of God, which is in Christ Jesus our Lord.',
                        'unordered' => 'What shall we then say to these things? If God [be] for us, who [can be] against us? He that spared not his own Son, but delivered him up for us all, how shall he not with him also freely give us all things? Who shall lay any thing to the charge of God&#x27;s elect? [It is] God that justifieth. Who [is] he that condemneth? [It is] Christ that died, yea rather, that is risen again, who is even at the right hand of God, who also maketh intercession for us. Who shall separate us from the love of Christ? [shall] tribulation, or distress, or persecution, or famine, or nakedness, or peril, or sword? As it is written, For thy sake we are killed all the day long; we are accounted as sheep for the slaughter. Nay, in all these things we are more than conquerors through him that loved us. For I am persuaded, that neither death, nor life, nor angels, nor principalities, nor powers, nor things present, nor things to come, Nor height, nor depth, nor any other creature, shall be able to separate us from the love of God, which is in Christ Jesus our Lord.',
                        'description' => 'Romans 8:31-39, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_034',
                        'name' => 'And we write this so that our joy may be complete',
                        'siglum' => 'kjv/1jn/1/4-9',
                        'content' => '(4) And these things write we unto you, that your joy may be full. (5) This then is the message which we have heard of him, and declare unto you, that God is light, and in him is no darkness at all. (6) If we say that we have fellowship with him, and walk in darkness, we lie, and do not the truth: (7) But if we walk in the light, as he is in the light, we have fellowship one with another, and the blood of Jesus Christ his Son cleanseth us from all sin. (8) If we say that we have no sin, we deceive ourselves, and the truth is not in us. (9) If we confess our sins, he is faithful and just to forgive us [our] sins, and to cleanse us from all unrighteousness.',
                        'unordered' => 'And these things write we unto you, that your joy may be full. This then is the message which we have heard of him, and declare unto you, that God is light, and in him is no darkness at all. If we say that we have fellowship with him, and walk in darkness, we lie, and do not the truth: But if we walk in the light, as he is in the light, we have fellowship one with another, and the blood of Jesus Christ his Son cleanseth us from all sin. If we say that we have no sin, we deceive ourselves, and the truth is not in us. If we confess our sins, he is faithful and just to forgive us [our] sins, and to cleanse us from all unrighteousness.',
                        'description' => '1 John 1:4-9, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'In prayer',
                'code' => 'CGAV_018',
                'colour_value' => '#dfbf20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_035',
                        'name' => 'Lord, teach us to pray',
                        'siglum' => 'kjv/lk/11/1-13',
                        'content' => '(1) And it came to pass, that, as he was praying in a certain place, when he ceased, one of his disciples said unto him, Lord, teach us to pray, as John also taught his disciples. (2) And he said unto them, When ye pray, say, Our Father which art in heaven, Hallowed be thy name. Thy kingdom come. Thy will be done, as in heaven, so in earth. (3) Give us day by day our daily bread. (4) And forgive us our sins; for we also forgive every one that is indebted to us. And lead us not into temptation; but deliver us from evil. (5) And he said unto them, Which of you shall have a friend, and shall go unto him at midnight, and say unto him, Friend, lend me three loaves; (6) For a friend of mine in his journey is come to me, and I have nothing to set before him? (7) And he from within shall answer and say, Trouble me not: the door is now shut, and my children are with me in bed; I cannot rise and give thee. (8) I say unto you, Though he will not rise and give him, because he is his friend, yet because of his importunity he will rise and give him as many as he needeth. (9) And I say unto you, Ask, and it shall be given you; seek, and ye shall find; knock, and it shall be opened unto you. (10) For every one that asketh receiveth; and he that seeketh findeth; and to him that knocketh it shall be opened. (11) If a son shall ask bread of any of you that is a father, will he give him a stone? or if [he ask] a fish, will he for a fish give him a serpent? (12) Or if he shall ask an egg, will he offer him a scorpion? (13) If ye then, being evil, know how to give good gifts unto your children: how much more shall [your] heavenly Father give the Holy Spirit to them that ask him?',
                        'unordered' => 'And it came to pass, that, as he was praying in a certain place, when he ceased, one of his disciples said unto him, Lord, teach us to pray, as John also taught his disciples. And he said unto them, When ye pray, say, Our Father which art in heaven, Hallowed be thy name. Thy kingdom come. Thy will be done, as in heaven, so in earth. Give us day by day our daily bread. And forgive us our sins; for we also forgive every one that is indebted to us. And lead us not into temptation; but deliver us from evil. And he said unto them, Which of you shall have a friend, and shall go unto him at midnight, and say unto him, Friend, lend me three loaves; For a friend of mine in his journey is come to me, and I have nothing to set before him? And he from within shall answer and say, Trouble me not: the door is now shut, and my children are with me in bed; I cannot rise and give thee. I say unto you, Though he will not rise and give him, because he is his friend, yet because of his importunity he will rise and give him as many as he needeth. And I say unto you, Ask, and it shall be given you; seek, and ye shall find; knock, and it shall be opened unto you. For every one that asketh receiveth; and he that seeketh findeth; and to him that knocketh it shall be opened. If a son shall ask bread of any of you that is a father, will he give him a stone? or if [he ask] a fish, will he for a fish give him a serpent? Or if he shall ask an egg, will he offer him a scorpion? If ye then, being evil, know how to give good gifts unto your children: how much more shall [your] heavenly Father give the Holy Spirit to them that ask him?',
                        'description' => 'Luke 11:1-13, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_036',
                        'name' => 'The high priest\'s prayer of Jesus Christ',
                        'siglum' => 'kjv/jn/17/1-26',
                        'content' => '(1) These words spake Jesus, and lifted up his eyes to heaven, and said, Father, the hour is come; glorify thy Son, that thy Son also may glorify thee: (2) As thou hast given him power over all flesh, that he should give eternal life to as many as thou hast given him. (3) And this is life eternal, that they might know thee the only true God, and Jesus Christ, whom thou hast sent. (4) I have glorified thee on the earth: I have finished the work which thou gavest me to do. (5) And now, O Father, glorify thou me with thine own self with the glory which I had with thee before the world was. (6) I have manifested thy name unto the men which thou gavest me out of the world: thine they were, and thou gavest them me; and they have kept thy word. (7) Now they have known that all things whatsoever thou hast given me are of thee. (8) For I have given unto them the words which thou gavest me; and they have received [them], and have known surely that I came out from thee, and they have believed that thou didst send me. (9) I pray for them: I pray not for the world, but for them which thou hast given me; for they are thine. (10) And all mine are thine, and thine are mine; and I am glorified in them. (11) And now I am no more in the world, but these are in the world, and I come to thee. Holy Father, keep through thine own name those whom thou hast given me, that they may be one, as we [are]. (12) While I was with them in the world, I kept them in thy name: those that thou gavest me I have kept, and none of them is lost, but the son of perdition; that the scripture might be fulfilled. (13) And now come I to thee; and these things I speak in the world, that they might have my joy fulfilled in themselves. (14) I have given them thy word; and the world hath hated them, because they are not of the world, even as I am not of the world. (15) I pray not that thou shouldest take them out of the world, but that thou shouldest keep them from the evil. (16) They are not of the world, even as I am not of the world. (17) Sanctify them through thy truth: thy word is truth. (18) As thou hast sent me into the world, even so have I also sent them into the world. (19) And for their sakes I sanctify myself, that they also might be sanctified through the truth. (20) Neither pray I for these alone, but for them also which shall believe on me through their word; (21) That they all may be one; as thou, Father, [art] in me, and I in thee, that they also may be one in us: that the world may believe that thou hast sent me. (22) And the glory which thou gavest me I have given them; that they may be one, even as we are one: (23) I in them, and thou in me, that they may be made perfect in one; and that the world may know that thou hast sent me, and hast loved them, as thou hast loved me. (24) Father, I will that they also, whom thou hast given me, be with me where I am; that they may behold my glory, which thou hast given me: for thou lovedst me before the foundation of the world. (25) O righteous Father, the world hath not known thee: but I have known thee, and these have known that thou hast sent me. (26) And I have declared unto them thy name, and will declare [it]: that the love wherewith thou hast loved me may be in them, and I in them.',
                        'unordered' => 'These words spake Jesus, and lifted up his eyes to heaven, and said, Father, the hour is come; glorify thy Son, that thy Son also may glorify thee: As thou hast given him power over all flesh, that he should give eternal life to as many as thou hast given him. And this is life eternal, that they might know thee the only true God, and Jesus Christ, whom thou hast sent. I have glorified thee on the earth: I have finished the work which thou gavest me to do. And now, O Father, glorify thou me with thine own self with the glory which I had with thee before the world was. I have manifested thy name unto the men which thou gavest me out of the world: thine they were, and thou gavest them me; and they have kept thy word. Now they have known that all things whatsoever thou hast given me are of thee. For I have given unto them the words which thou gavest me; and they have received [them], and have known surely that I came out from thee, and they have believed that thou didst send me. I pray for them: I pray not for the world, but for them which thou hast given me; for they are thine. And all mine are thine, and thine are mine; and I am glorified in them. And now I am no more in the world, but these are in the world, and I come to thee. Holy Father, keep through thine own name those whom thou hast given me, that they may be one, as we [are]. While I was with them in the world, I kept them in thy name: those that thou gavest me I have kept, and none of them is lost, but the son of perdition; that the scripture might be fulfilled. And now come I to thee; and these things I speak in the world, that they might have my joy fulfilled in themselves. I have given them thy word; and the world hath hated them, because they are not of the world, even as I am not of the world. I pray not that thou shouldest take them out of the world, but that thou shouldest keep them from the evil. They are not of the world, even as I am not of the world. Sanctify them through thy truth: thy word is truth. As thou hast sent me into the world, even so have I also sent them into the world. And for their sakes I sanctify myself, that they also might be sanctified through the truth. Neither pray I for these alone, but for them also which shall believe on me through their word; That they all may be one; as thou, Father, [art] in me, and I in thee, that they also may be one in us: that the world may believe that thou hast sent me. And the glory which thou gavest me I have given them; that they may be one, even as we are one: I in them, and thou in me, that they may be made perfect in one; and that the world may know that thou hast sent me, and hast loved them, as thou hast loved me. Father, I will that they also, whom thou hast given me, be with me where I am; that they may behold my glory, which thou hast given me: for thou lovedst me before the foundation of the world. O righteous Father, the world hath not known thee: but I have known thee, and these have known that thou hast sent me. And I have declared unto them thy name, and will declare [it]: that the love wherewith thou hast loved me may be in them, and I in them.',
                        'description' => 'John 17:1-26, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_037',
                        'name' => 'God hears us',
                        'siglum' => 'kjv/1jn/5/14-15',
                        'content' => '(14) And this is the confidence that we have in him, that, if we ask any thing according to his will, he heareth us: (15) And if we know that he hear us, whatsoever we ask, we know that we have the petitions that we desired of him.',
                        'unordered' => 'And this is the confidence that we have in him, that, if we ask any thing according to his will, he heareth us: And if we know that he hear us, whatsoever we ask, we know that we have the petitions that we desired of him.',
                        'description' => '1 John 5:14-15, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'In sickness and pain',
                'code' => 'CGAV_019',
                'colour_value' => '#8fdf20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_038',
                        'name' => 'Be Your will!',
                        'siglum' => 'kjv/mt/26/39',
                        'content' => '(39) And he went a little further, and fell on his face, and prayed, saying, O my Father, if it be possible, let this cup pass from me: nevertheless not as I will, but as thou [wilt].',
                        'unordered' => 'And he went a little further, and fell on his face, and prayed, saying, O my Father, if it be possible, let this cup pass from me: nevertheless not as I will, but as thou [wilt].',
                        'description' => 'Matthew 26:39, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_039',
                        'name' => 'We glory in tribulations',
                        'siglum' => 'kjv/ro/5/3-5',
                        'content' => '(3) And not only [so], but we glory in tribulations also: knowing that tribulation worketh patience; (4) And patience, experience; and experience, hope: (5) And hope maketh not ashamed; because the love of God is shed abroad in our hearts by the Holy Ghost which is given unto us.',
                        'unordered' => 'And not only [so], but we glory in tribulations also: knowing that tribulation worketh patience; And patience, experience; and experience, hope: And hope maketh not ashamed; because the love of God is shed abroad in our hearts by the Holy Ghost which is given unto us.',
                        'description' => 'Romans 5:3-5, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_040',
                        'name' => 'You have enough when you have my grace',
                        'siglum' => 'kjv/2co/12/9-10',
                        'content' => '(9) And he said unto me, My grace is sufficient for thee: for my strength is made perfect in weakness. Most gladly therefore will I rather glory in my infirmities, that the power of Christ may rest upon me. (10) Therefore I take pleasure in infirmities, in reproaches, in necessities, in persecutions, in distresses for Christ&#x27;s sake: for when I am weak, then am I strong.',
                        'unordered' => 'And he said unto me, My grace is sufficient for thee: for my strength is made perfect in weakness. Most gladly therefore will I rather glory in my infirmities, that the power of Christ may rest upon me. Therefore I take pleasure in infirmities, in reproaches, in necessities, in persecutions, in distresses for Christ&#x27;s sake: for when I am weak, then am I strong.',
                        'description' => '2 Corinthians 12:9-10, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_041',
                        'name' => 'Blessed are you if you are insulted for the name of Christ',
                        'siglum' => 'kjv/1pe/4/12-19',
                        'content' => '(12) Beloved, think it not strange concerning the fiery trial which is to try you, as though some strange thing happened unto you: (13) But rejoice, inasmuch as ye are partakers of Christ&#x27;s sufferings; that, when his glory shall be revealed, ye may be glad also with exceeding joy. (14) If ye be reproached for the name of Christ, happy [are ye]; for the spirit of glory and of God resteth upon you: on their part he is evil spoken of, but on your part he is glorified. (15) But let none of you suffer as a murderer, or [as] a thief, or [as] an evildoer, or as a busybody in other men&#x27;s matters. (16) Yet if [any man suffer] as a Christian, let him not be ashamed; but let him glorify God on this behalf. (17) For the time [is come] that judgment must begin at the house of God: and if [it] first [begin] at us, what shall the end [be] of them that obey not the gospel of God? (18) And if the righteous scarcely be saved, where shall the ungodly and the sinner appear? (19) Wherefore let them that suffer according to the will of God commit the keeping of their souls [to him] in well doing, as unto a faithful Creator.',
                        'unordered' => 'Beloved, think it not strange concerning the fiery trial which is to try you, as though some strange thing happened unto you: But rejoice, inasmuch as ye are partakers of Christ&#x27;s sufferings; that, when his glory shall be revealed, ye may be glad also with exceeding joy. If ye be reproached for the name of Christ, happy [are ye]; for the spirit of glory and of God resteth upon you: on their part he is evil spoken of, but on your part he is glorified. But let none of you suffer as a murderer, or [as] a thief, or [as] an evildoer, or as a busybody in other men&#x27;s matters. Yet if [any man suffer] as a Christian, let him not be ashamed; but let him glorify God on this behalf. For the time [is come] that judgment must begin at the house of God: and if [it] first [begin] at us, what shall the end [be] of them that obey not the gospel of God? And if the righteous scarcely be saved, where shall the ungodly and the sinner appear? Wherefore let them that suffer according to the will of God commit the keeping of their souls [to him] in well doing, as unto a faithful Creator.',
                        'description' => '1 Peter 4:12-19, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'In weariness',
                'code' => 'CGAV_020',
                'colour_value' => '#df3020'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_042',
                        'name' => 'Come to me, everyone',
                        'siglum' => 'kjv/mt/11/28-30',
                        'content' => '(28) Come unto me, all [ye] that labour and are heavy laden, and I will give you rest. (29) Take my yoke upon you, and learn of me; for I am meek and lowly in heart: and ye shall find rest unto your souls. (30) For my yoke [is] easy, and my burden is light.',
                        'unordered' => 'Come unto me, all [ye] that labour and are heavy laden, and I will give you rest. Take my yoke upon you, and learn of me; for I am meek and lowly in heart: and ye shall find rest unto your souls. For my yoke [is] easy, and my burden is light.',
                        'description' => 'Matthew 11:28-30, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_043',
                        'name' => 'Be firm, immovable, always eager to work for the Lord',
                        'siglum' => 'kjv/1co/15/58',
                        'content' => '(58) Therefore, my beloved brethren, be ye stedfast, unmoveable, always abounding in the work of the Lord, forasmuch as ye know that your labour is not in vain in the Lord.',
                        'unordered' => 'Therefore, my beloved brethren, be ye stedfast, unmoveable, always abounding in the work of the Lord, forasmuch as ye know that your labour is not in vain in the Lord.',
                        'description' => '1 Corinthians 15:58, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_044',
                        'name' => 'Let\'s not stop doing good',
                        'siglum' => 'kjv/gal/6/9-10',
                        'content' => '(9) And let us not be weary in well doing: for in due season we shall reap, if we faint not. (10) As we have therefore opportunity, let us do good unto all [men], especially unto them who are of the household of faith.',
                        'unordered' => 'And let us not be weary in well doing: for in due season we shall reap, if we faint not. As we have therefore opportunity, let us do good unto all [men], especially unto them who are of the household of faith.',
                        'description' => 'Galatians 6:9-10, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I need God\'s help',
                'code' => 'CGAV_021',
                'colour_value' => '#df4020'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_045',
                        'name' => 'Satisfying every need',
                        'siglum' => 'kjv/php/4/19',
                        'content' => '(19) But my God shall supply all your need according to his riches in glory by Christ Jesus.',
                        'unordered' => 'But my God shall supply all your need according to his riches in glory by Christ Jesus.',
                        'description' => 'Philippians 4:19, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'In sadness',
                'code' => 'CGAV_022',
                'colour_value' => '#2070df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_046',
                        'name' => 'Blessed are those who mourn, for they will be comforted.',
                        'siglum' => 'kjv/mt/5/4',
                        'content' => '(4) Blessed [are] they that mourn: for they shall be comforted.',
                        'unordered' => 'Blessed [are] they that mourn: for they shall be comforted.',
                        'description' => 'Matthew 5:4, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_047',
                        'name' => 'Let not your heart be troubled; believe in God and believe in me!',
                        'siglum' => 'kjv/jn/14/1-31',
                        'content' => '(1) Let not your heart be troubled: ye believe in God, believe also in me. (2) In my Father&#x27;s house are many mansions: if [it were] not [so], I would have told you. I go to prepare a place for you. (3) And if I go and prepare a place for you, I will come again, and receive you unto myself; that where I am, [there] ye may be also. (4) And whither I go ye know, and the way ye know. (5) Thomas saith unto him, Lord, we know not whither thou goest; and how can we know the way? (6) Jesus saith unto him, I am the way, the truth, and the life: no man cometh unto the Father, but by me. (7) If ye had known me, ye should have known my Father also: and from henceforth ye know him, and have seen him. (8) Philip saith unto him, Lord, shew us the Father, and it sufficeth us. (9) Jesus saith unto him, Have I been so long time with you, and yet hast thou not known me, Philip? he that hath seen me hath seen the Father; and how sayest thou [then], Shew us the Father? (10) Believest thou not that I am in the Father, and the Father in me? the words that I speak unto you I speak not of myself: but the Father that dwelleth in me, he doeth the works. (11) Believe me that I [am] in the Father, and the Father in me: or else believe me for the very works&#x27; sake. (12) Verily, verily, I say unto you, He that believeth on me, the works that I do shall he do also; and greater [works] than these shall he do; because I go unto my Father. (13) And whatsoever ye shall ask in my name, that will I do, that the Father may be glorified in the Son. (14) If ye shall ask any thing in my name, I will do [it]. (15) If ye love me, keep my commandments. (16) And I will pray the Father, and he shall give you another Comforter, that he may abide with you for ever; (17) [Even] the Spirit of truth; whom the world cannot receive, because it seeth him not, neither knoweth him: but ye know him; for he dwelleth with you, and shall be in you. (18) I will not leave you comfortless: I will come to you. (19) Yet a little while, and the world seeth me no more; but ye see me: because I live, ye shall live also. (20) At that day ye shall know that I [am] in my Father, and ye in me, and I in you. (21) He that hath my commandments, and keepeth them, he it is that loveth me: and he that loveth me shall be loved of my Father, and I will love him, and will manifest myself to him. (22) Judas saith unto him, not Iscariot, Lord, how is it that thou wilt manifest thyself unto us, and not unto the world? (23) Jesus answered and said unto him, If a man love me, he will keep my words: and my Father will love him, and we will come unto him, and make our abode with him. (24) He that loveth me not keepeth not my sayings: and the word which ye hear is not mine, but the Father&#x27;s which sent me. (25) These things have I spoken unto you, being [yet] present with you. (26) But the Comforter, [which is] the Holy Ghost, whom the Father will send in my name, he shall teach you all things, and bring all things to your remembrance, whatsoever I have said unto you. (27) Peace I leave with you, my peace I give unto you: not as the world giveth, give I unto you. Let not your heart be troubled, neither let it be afraid. (28) Ye have heard how I said unto you, I go away, and come [again] unto you. If ye loved me, ye would rejoice, because I said, I go unto the Father: for my Father is greater than I. (29) And now I have told you before it come to pass, that, when it is come to pass, ye might believe. (30) Hereafter I will not talk much with you: for the prince of this world cometh, and hath nothing in me. (31) But that the world may know that I love the Father; and as the Father gave me commandment, even so I do. Arise, let us go hence.',
                        'unordered' => 'Let not your heart be troubled: ye believe in God, believe also in me. In my Father&#x27;s house are many mansions: if [it were] not [so], I would have told you. I go to prepare a place for you. And if I go and prepare a place for you, I will come again, and receive you unto myself; that where I am, [there] ye may be also. And whither I go ye know, and the way ye know. Thomas saith unto him, Lord, we know not whither thou goest; and how can we know the way? Jesus saith unto him, I am the way, the truth, and the life: no man cometh unto the Father, but by me. If ye had known me, ye should have known my Father also: and from henceforth ye know him, and have seen him. Philip saith unto him, Lord, shew us the Father, and it sufficeth us. Jesus saith unto him, Have I been so long time with you, and yet hast thou not known me, Philip? he that hath seen me hath seen the Father; and how sayest thou [then], Shew us the Father? Believest thou not that I am in the Father, and the Father in me? the words that I speak unto you I speak not of myself: but the Father that dwelleth in me, he doeth the works. Believe me that I [am] in the Father, and the Father in me: or else believe me for the very works&#x27; sake. Verily, verily, I say unto you, He that believeth on me, the works that I do shall he do also; and greater [works] than these shall he do; because I go unto my Father. And whatsoever ye shall ask in my name, that will I do, that the Father may be glorified in the Son. If ye shall ask any thing in my name, I will do [it]. If ye love me, keep my commandments. And I will pray the Father, and he shall give you another Comforter, that he may abide with you for ever; [Even] the Spirit of truth; whom the world cannot receive, because it seeth him not, neither knoweth him: but ye know him; for he dwelleth with you, and shall be in you. I will not leave you comfortless: I will come to you. Yet a little while, and the world seeth me no more; but ye see me: because I live, ye shall live also. At that day ye shall know that I [am] in my Father, and ye in me, and I in you. He that hath my commandments, and keepeth them, he it is that loveth me: and he that loveth me shall be loved of my Father, and I will love him, and will manifest myself to him. Judas saith unto him, not Iscariot, Lord, how is it that thou wilt manifest thyself unto us, and not unto the world? Jesus answered and said unto him, If a man love me, he will keep my words: and my Father will love him, and we will come unto him, and make our abode with him. He that loveth me not keepeth not my sayings: and the word which ye hear is not mine, but the Father&#x27;s which sent me. These things have I spoken unto you, being [yet] present with you. But the Comforter, [which is] the Holy Ghost, whom the Father will send in my name, he shall teach you all things, and bring all things to your remembrance, whatsoever I have said unto you. Peace I leave with you, my peace I give unto you: not as the world giveth, give I unto you. Let not your heart be troubled, neither let it be afraid. Ye have heard how I said unto you, I go away, and come [again] unto you. If ye loved me, ye would rejoice, because I said, I go unto the Father: for my Father is greater than I. And now I have told you before it come to pass, that, when it is come to pass, ye might believe. Hereafter I will not talk much with you: for the prince of this world cometh, and hath nothing in me. But that the world may know that I love the Father; and as the Father gave me commandment, even so I do. Arise, let us go hence.',
                        'description' => 'John 14:1-31, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_048',
                        'name' => 'Blessed be the God and Father of our Lord Jesus Christ',
                        'siglum' => 'kjv/2co/1/3-4',
                        'content' => '(3) Blessed [be] God, even the Father of our Lord Jesus Christ, the Father of mercies, and the God of all comfort; (4) Who comforteth us in all our tribulation, that we may be able to comfort them which are in any trouble, by the comfort wherewith we ourselves are comforted of God.',
                        'unordered' => 'Blessed [be] God, even the Father of our Lord Jesus Christ, the Father of mercies, and the God of all comfort; Who comforteth us in all our tribulation, that we may be able to comfort them which are in any trouble, by the comfort wherewith we ourselves are comforted of God.',
                        'description' => '2 Corinthians 1:3-4, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_049',
                        'name' => 'Let us console ourselves with these words that we will meet the Lord in the clouds',
                        'siglum' => 'kjv/1th/4/13-18',
                        'content' => '(13) But I would not have you to be ignorant, brethren, concerning them which are asleep, that ye sorrow not, even as others which have no hope. (14) For if we believe that Jesus died and rose again, even so them also which sleep in Jesus will God bring with him. (15) For this we say unto you by the word of the Lord, that we which are alive [and] remain unto the coming of the Lord shall not prevent them which are asleep. (16) For the Lord himself shall descend from heaven with a shout, with the voice of the archangel, and with the trump of God: and the dead in Christ shall rise first: (17) Then we which are alive [and] remain shall be caught up together with them in the clouds, to meet the Lord in the air: and so shall we ever be with the Lord. (18) Wherefore comfort one another with these words.',
                        'unordered' => 'But I would not have you to be ignorant, brethren, concerning them which are asleep, that ye sorrow not, even as others which have no hope. For if we believe that Jesus died and rose again, even so them also which sleep in Jesus will God bring with him. For this we say unto you by the word of the Lord, that we which are alive [and] remain unto the coming of the Lord shall not prevent them which are asleep. For the Lord himself shall descend from heaven with a shout, with the voice of the archangel, and with the trump of God: and the dead in Christ shall rise first: Then we which are alive [and] remain shall be caught up together with them in the clouds, to meet the Lord in the air: and so shall we ever be with the Lord. Wherefore comfort one another with these words.',
                        'description' => '1 Thessalonians 4:13-18, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'In temptation',
                'code' => 'CGAV_023',
                'colour_value' => '#df2080'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_050',
                        'name' => 'Watch and pray',
                        'siglum' => 'kjv/mt/26/41',
                        'content' => '(41) Watch and pray, that ye enter not into temptation: the spirit indeed [is] willing, but the flesh [is] weak.',
                        'unordered' => 'Watch and pray, that ye enter not into temptation: the spirit indeed [is] willing, but the flesh [is] weak.',
                        'description' => 'Matthew 26:41, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_051',
                        'name' => 'Let him who thinks he stands take heed lest he fall',
                        'siglum' => 'kjv/1co/10/12-14',
                        'content' => '(12) Wherefore let him that thinketh he standeth take heed lest he fall. (13) There hath no temptation taken you but such as is common to man: but God [is] faithful, who will not suffer you to be tempted above that ye are able; but will with the temptation also make a way to escape, that ye may be able to bear [it]. (14) Wherefore, my dearly beloved, flee from idolatry.',
                        'unordered' => 'Wherefore let him that thinketh he standeth take heed lest he fall. There hath no temptation taken you but such as is common to man: but God [is] faithful, who will not suffer you to be tempted above that ye are able; but will with the temptation also make a way to escape, that ye may be able to bear [it]. Wherefore, my dearly beloved, flee from idolatry.',
                        'description' => '1 Corinthians 10:12-14, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_052',
                        'name' => 'Think only of God',
                        'siglum' => 'kjv/php/4/8',
                        'content' => '(8) Finally, brethren, whatsoever things are true, whatsoever things [are] honest, whatsoever things [are] just, whatsoever things [are] pure, whatsoever things [are] lovely, whatsoever things [are] of good report; if [there be] any virtue, and if [there be] any praise, think on these things.',
                        'unordered' => 'Finally, brethren, whatsoever things are true, whatsoever things [are] honest, whatsoever things [are] just, whatsoever things [are] pure, whatsoever things [are] lovely, whatsoever things [are] of good report; if [there be] any virtue, and if [there be] any praise, think on these things.',
                        'description' => 'Philippians 4:8, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_053',
                        'name' => 'Submit to God and resist the devil',
                        'siglum' => 'kjv/jas/4/7',
                        'content' => '(7) Submit yourselves therefore to God. Resist the devil, and he will flee from you.',
                        'unordered' => 'Submit yourselves therefore to God. Resist the devil, and he will flee from you.',
                        'description' => 'James 4:7, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_054',
                        'name' => 'God\'s justice',
                        'siglum' => 'kjv/2pe/2/9',
                        'content' => '(9) The Lord knoweth how to deliver the godly out of temptations, and to reserve the unjust unto the day of judgment to be punished:',
                        'unordered' => 'The Lord knoweth how to deliver the godly out of temptations, and to reserve the unjust unto the day of judgment to be punished:',
                        'description' => '2 Peter 2:9, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_055',
                        'name' => 'Be careful not to let yourself be pushed out of your firm position',
                        'siglum' => 'kjv/2pe/3/15-17',
                        'content' => '(15) And account [that] the longsuffering of our Lord [is] salvation; even as our beloved brother Paul also according to the wisdom given unto him hath written unto you; (16) As also in all [his] epistles, speaking in them of these things; in which are some things hard to be understood, which they that are unlearned and unstable wrest, as [they do] also the other scriptures, unto their own destruction. (17) Ye therefore, beloved, seeing ye know [these things] before, beware lest ye also, being led away with the error of the wicked, fall from your own stedfastness.',
                        'unordered' => 'And account [that] the longsuffering of our Lord [is] salvation; even as our beloved brother Paul also according to the wisdom given unto him hath written unto you; As also in all [his] epistles, speaking in them of these things; in which are some things hard to be understood, which they that are unlearned and unstable wrest, as [they do] also the other scriptures, unto their own destruction. Ye therefore, beloved, seeing ye know [these things] before, beware lest ye also, being led away with the error of the wicked, fall from your own stedfastness.',
                        'description' => '2 Peter 3:15-17, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'I am grateful',
                'code' => 'CGAV_024',
                'colour_value' => '#40df20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_056',
                        'name' => 'Give thanks for everything',
                        'siglum' => 'kjv/1th/5/18',
                        'content' => '(18) In every thing give thanks: for this is the will of God in Christ Jesus concerning you.',
                        'unordered' => 'In every thing give thanks: for this is the will of God in Christ Jesus concerning you.',
                        'description' => '1 Thessalonians 5:18, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_057',
                        'name' => 'Through him, therefore, let us continually offer to God a sacrifice of praise',
                        'siglum' => 'kjv/hebr/13/15',
                        'content' => '(15) By him therefore let us offer the sacrifice of praise to God continually, that is, the fruit of [our] lips giving thanks to his name.',
                        'unordered' => 'By him therefore let us offer the sacrifice of praise to God continually, that is, the fruit of [our] lips giving thanks to his name.',
                        'description' => 'Hebrews 13:15, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'In trouble',
                'code' => 'CGAV_025',
                'colour_value' => '#2030df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_058',
                        'name' => 'Let not your heart be troubled',
                        'siglum' => 'kjv/jn/14/1-4',
                        'content' => '(1) Let not your heart be troubled: ye believe in God, believe also in me. (2) In my Father&#x27;s house are many mansions: if [it were] not [so], I would have told you. I go to prepare a place for you. (3) And if I go and prepare a place for you, I will come again, and receive you unto myself; that where I am, [there] ye may be also. (4) And whither I go ye know, and the way ye know.',
                        'unordered' => 'Let not your heart be troubled: ye believe in God, believe also in me. In my Father&#x27;s house are many mansions: if [it were] not [so], I would have told you. I go to prepare a place for you. And if I go and prepare a place for you, I will come again, and receive you unto myself; that where I am, [there] ye may be also. And whither I go ye know, and the way ye know.',
                        'description' => 'John 14:1-4, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_059',
                        'name' => 'We have an ever-living high priest interceding for us',
                        'siglum' => 'kjv/hebr/7/25',
                        'content' => '(25) Wherefore he is able also to save them to the uttermost that come unto God by him, seeing he ever liveth to make intercession for them.',
                        'unordered' => 'Wherefore he is able also to save them to the uttermost that come unto God by him, seeing he ever liveth to make intercession for them.',
                        'description' => 'Hebrews 7:25, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'In worries',
                'code' => 'CGAV_026',
                'colour_value' => '#df209f'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_060',
                        'name' => 'Do not lay up for yourselves treasures on earth',
                        'siglum' => 'kjv/mt/6/19-34',
                        'content' => '(19) Lay not up for yourselves treasures upon earth, where moth and rust doth corrupt, and where thieves break through and steal: (20) But lay up for yourselves treasures in heaven, where neither moth nor rust doth corrupt, and where thieves do not break through nor steal: (21) For where your treasure is, there will your heart be also. (22) The light of the body is the eye: if therefore thine eye be single, thy whole body shall be full of light. (23) But if thine eye be evil, thy whole body shall be full of darkness. If therefore the light that is in thee be darkness, how great [is] that darkness! (24) No man can serve two masters: for either he will hate the one, and love the other; or else he will hold to the one, and despise the other. Ye cannot serve God and mammon. (25) Therefore I say unto you, Take no thought for your life, what ye shall eat, or what ye shall drink; nor yet for your body, what ye shall put on. Is not the life more than meat, and the body than raiment? (26) Behold the fowls of the air: for they sow not, neither do they reap, nor gather into barns; yet your heavenly Father feedeth them. Are ye not much better than they? (27) Which of you by taking thought can add one cubit unto his stature? (28) And why take ye thought for raiment? Consider the lilies of the field, how they grow; they toil not, neither do they spin: (29) And yet I say unto you, That even Solomon in all his glory was not arrayed like one of these. (30) Wherefore, if God so clothe the grass of the field, which to day is, and to morrow is cast into the oven, [shall he] not much more [clothe] you, O ye of little faith? (31) Therefore take no thought, saying, What shall we eat? or, What shall we drink? or, Wherewithal shall we be clothed? (32) (For after all these things do the Gentiles seek:) for your heavenly Father knoweth that ye have need of all these things. (33) But seek ye first the kingdom of God, and his righteousness; and all these things shall be added unto you. (34) Take therefore no thought for the morrow: for the morrow shall take thought for the things of itself. Sufficient unto the day [is] the evil thereof.',
                        'unordered' => 'Lay not up for yourselves treasures upon earth, where moth and rust doth corrupt, and where thieves break through and steal: But lay up for yourselves treasures in heaven, where neither moth nor rust doth corrupt, and where thieves do not break through nor steal: For where your treasure is, there will your heart be also. The light of the body is the eye: if therefore thine eye be single, thy whole body shall be full of light. But if thine eye be evil, thy whole body shall be full of darkness. If therefore the light that is in thee be darkness, how great [is] that darkness! No man can serve two masters: for either he will hate the one, and love the other; or else he will hold to the one, and despise the other. Ye cannot serve God and mammon. Therefore I say unto you, Take no thought for your life, what ye shall eat, or what ye shall drink; nor yet for your body, what ye shall put on. Is not the life more than meat, and the body than raiment? Behold the fowls of the air: for they sow not, neither do they reap, nor gather into barns; yet your heavenly Father feedeth them. Are ye not much better than they? Which of you by taking thought can add one cubit unto his stature? And why take ye thought for raiment? Consider the lilies of the field, how they grow; they toil not, neither do they spin: And yet I say unto you, That even Solomon in all his glory was not arrayed like one of these. Wherefore, if God so clothe the grass of the field, which to day is, and to morrow is cast into the oven, [shall he] not much more [clothe] you, O ye of little faith? Therefore take no thought, saying, What shall we eat? or, What shall we drink? or, Wherewithal shall we be clothed? (For after all these things do the Gentiles seek:) for your heavenly Father knoweth that ye have need of all these things. But seek ye first the kingdom of God, and his righteousness; and all these things shall be added unto you. Take therefore no thought for the morrow: for the morrow shall take thought for the things of itself. Sufficient unto the day [is] the evil thereof.',
                        'description' => 'Matthew 6:19-34, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_061',
                        'name' => 'Humble yourselves, therefore, under the mighty hand of God',
                        'siglum' => 'kjv/1pe/5/6-7',
                        'content' => '(6) Humble yourselves therefore under the mighty hand of God, that he may exalt you in due time: (7) Casting all your care upon him; for he careth for you.',
                        'unordered' => 'Humble yourselves therefore under the mighty hand of God, that he may exalt you in due time: Casting all your care upon him; for he careth for you.',
                        'description' => '1 Peter 5:6-7, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'God loves you',
                'code' => 'CGAV_027',
                'colour_value' => '#50df20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_062',
                        'name' => 'For God so loved the world',
                        'siglum' => 'kjv/jn/3/16',
                        'content' => '(16) For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life.',
                        'unordered' => 'For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life.',
                        'description' => 'John 3:16, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_063',
                        'name' => 'God shows his love for us',
                        'siglum' => 'kjv/ro/5/8',
                        'content' => '(8) But God commendeth his love toward us, in that, while we were yet sinners, Christ died for us.',
                        'unordered' => 'But God commendeth his love toward us, in that, while we were yet sinners, Christ died for us.',
                        'description' => 'Romans 5:8, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'They are all sinners',
                'code' => 'CGAV_028',
                'colour_value' => '#6020df'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_064',
                        'name' => 'All have sinned and fall short of the glory of God',
                        'siglum' => 'kjv/ro/3/19-26',
                        'content' => '(19) Now we know that what things soever the law saith, it saith to them who are under the law: that every mouth may be stopped, and all the world may become guilty before God. (20) Therefore by the deeds of the law there shall no flesh be justified in his sight: for by the law [is] the knowledge of sin. (21) But now the righteousness of God without the law is manifested, being witnessed by the law and the prophets; (22) Even the righteousness of God [which is] by faith of Jesus Christ unto all and upon all them that believe: for there is no difference: (23) For all have sinned, and come short of the glory of God; (24) Being justified freely by his grace through the redemption that is in Christ Jesus: (25) Whom God hath set forth [to be] a propitiation through faith in his blood, to declare his righteousness for the remission of sins that are past, through the forbearance of God; (26) To declare, [I say], at this time his righteousness: that he might be just, and the justifier of him which believeth in Jesus.',
                        'unordered' => 'Now we know that what things soever the law saith, it saith to them who are under the law: that every mouth may be stopped, and all the world may become guilty before God. Therefore by the deeds of the law there shall no flesh be justified in his sight: for by the law [is] the knowledge of sin. But now the righteousness of God without the law is manifested, being witnessed by the law and the prophets; Even the righteousness of God [which is] by faith of Jesus Christ unto all and upon all them that believe: for there is no difference: For all have sinned, and come short of the glory of God; Being justified freely by his grace through the redemption that is in Christ Jesus: Whom God hath set forth [to be] a propitiation through faith in his blood, to declare his righteousness for the remission of sins that are past, through the forbearance of God; To declare, [I say], at this time his righteousness: that he might be just, and the justifier of him which believeth in Jesus.',
                        'description' => 'Romans 3:19-26, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_065',
                        'name' => 'There is not one fair one',
                        'siglum' => 'kjv/ro/3/10',
                        'content' => '(10) As it is written, There is none righteous, no, not one:',
                        'unordered' => 'As it is written, There is none righteous, no, not one:',
                        'description' => 'Romans 3:10, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'God\'s advice to sinners',
                'code' => 'CGAV_029',
                'colour_value' => '#afdf20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_066',
                        'name' => 'For the wages of sin is death.',
                        'siglum' => 'kjv/ro/6/23',
                        'content' => '(23) For the wages of sin [is] death; but the gift of God [is] eternal life through Jesus Christ our Lord.',
                        'unordered' => 'For the wages of sin [is] death; but the gift of God [is] eternal life through Jesus Christ our Lord.',
                        'description' => 'Romans 6:23, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_067',
                        'name' => 'And to those who received him, he gave the right to become children of God',
                        'siglum' => 'kjv/jn/1/12',
                        'content' => '(12) But as many as received him, to them gave he power to become the sons of God, [even] to them that believe on his name:',
                        'unordered' => 'But as many as received him, to them gave he power to become the sons of God, [even] to them that believe on his name:',
                        'description' => 'John 1:12, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_068',
                        'name' => 'Christ died for our sins according to the Scriptures',
                        'siglum' => 'kjv/1co/15/3-4',
                        'content' => '(3) For I delivered unto you first of all that which I also received, how that Christ died for our sins according to the scriptures; (4) And that he was buried, and that he rose again the third day according to the scriptures:',
                        'unordered' => 'For I delivered unto you first of all that which I also received, how that Christ died for our sins according to the scriptures; And that he was buried, and that he rose again the third day according to the scriptures:',
                        'description' => '1 Corinthians 15:3-4, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Now all can be saved',
                'code' => 'CGAV_030',
                'colour_value' => '#40df20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_069',
                        'name' => 'Behold, I stand at the door and knock',
                        'siglum' => 'kjv/rev/3/20',
                        'content' => '(20) Behold, I stand at the door, and knock: if any man hear my voice, and open the door, I will come in to him, and will sup with him, and he with me.',
                        'unordered' => 'Behold, I stand at the door, and knock: if any man hear my voice, and open the door, I will come in to him, and will sup with him, and he with me.',
                        'description' => 'Revelation 3:20, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_070',
                        'name' => 'For everyone who calls on the name of the Lord will be saved',
                        'siglum' => 'kjv/ro/10/13',
                        'content' => '(13) For whosoever shall call upon the name of the Lord shall be saved.',
                        'unordered' => 'For whosoever shall call upon the name of the Lord shall be saved.',
                        'description' => 'Romans 10:13, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Assurances for the believer',
                'code' => 'CGAV_031',
                'colour_value' => '#df9f20'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_071',
                        'name' => 'For if you confess with your mouth that Jesus is Lord',
                        'siglum' => 'kjv/ro/10/9',
                        'content' => '(9) That if thou shalt confess with thy mouth the Lord Jesus, and shalt believe in thine heart that God hath raised him from the dead, thou shalt be saved.',
                        'unordered' => 'That if thou shalt confess with thy mouth the Lord Jesus, and shalt believe in thine heart that God hath raised him from the dead, thou shalt be saved.',
                        'description' => 'Romans 10:9, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_072',
                        'name' => 'Who hears my word',
                        'siglum' => 'kjv/jn/5/24',
                        'content' => '(24) Verily, verily, I say unto you, He that heareth my word, and believeth on him that sent me, hath everlasting life, and shall not come into condemnation; but is passed from death unto life.',
                        'unordered' => 'Verily, verily, I say unto you, He that heareth my word, and believeth on him that sent me, hath everlasting life, and shall not come into condemnation; but is passed from death unto life.',
                        'description' => 'John 5:24, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_073',
                        'name' => 'This I have written to you who believe in the name of the Son of God, that you have eternal life',
                        'siglum' => 'kjv/1jn/5/13',
                        'content' => '(13) These things have I written unto you that believe on the name of the Son of God; that ye may know that ye have eternal life, and that ye may believe on the name of the Son of God.',
                        'unordered' => 'These things have I written unto you that believe on the name of the Son of God; that ye may know that ye have eternal life, and that ye may believe on the name of the Son of God.',
                        'description' => '1 John 5:13, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_074',
                        'name' => 'Jesus is the Christ, the Son of God',
                        'siglum' => 'kjv/jn/20/31',
                        'content' => '(31) But these are written, that ye might believe that Jesus is the Christ, the Son of God; and that believing ye might have life through his name.',
                        'unordered' => 'But these are written, that ye might believe that Jesus is the Christ, the Son of God; and that believing ye might have life through his name.',
                        'description' => 'John 20:31, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'The Godly piece of advice',
                'code' => 'CGAV_032',
                'colour_value' => '#df6020'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_075',
                        'name' => 'Run with patience the race that is set before us',
                        'siglum' => 'kjv/hebr/12/1',
                        'content' => '(1) Wherefore seeing we also are compassed about with so great a cloud of witnesses, let us lay aside every weight, and the sin which doth so easily beset [us], and let us run with patience the race that is set before us,',
                        'unordered' => 'Wherefore seeing we also are compassed about with so great a cloud of witnesses, let us lay aside every weight, and the sin which doth so easily beset [us], and let us run with patience the race that is set before us,',
                        'description' => 'Hebrews 12:1, King James Version'
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'Repent and believe in the Gospel',
                'code' => 'CGAV_033',
                'colour_value' => '#23ff09'
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'V_076',
                        'name' => 'How sweet on the mountains are the feet of him who brings glad tidings',
                        'siglum' => 'kjv/isa/52/7',
                        'content' => '(7) How beautiful upon the mountains are the feet of him that bringeth good tidings, that publisheth peace; that bringeth good tidings of good, that publisheth salvation; that saith unto Zion, Thy God reigneth!',
                        'unordered' => 'How beautiful upon the mountains are the feet of him that bringeth good tidings, that publisheth peace; that bringeth good tidings of good, that publisheth salvation; that saith unto Zion, Thy God reigneth!',
                        'description' => 'Isaiah 52:7, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_077',
                        'name' => 'Repent and believe the gospel',
                        'siglum' => 'kjv/mk/1/15',
                        'content' => '(15) And saying, The time is fulfilled, and the kingdom of God is at hand: repent ye, and believe the gospel.',
                        'unordered' => 'And saying, The time is fulfilled, and the kingdom of God is at hand: repent ye, and believe the gospel.',
                        'description' => 'Mark 1:15, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_078',
                        'name' => 'If you confess with your mouth that Jesus is Lord',
                        'siglum' => 'kjv/ro/10/9-10',
                        'content' => '(9) That if thou shalt confess with thy mouth the Lord Jesus, and shalt believe in thine heart that God hath raised him from the dead, thou shalt be saved. (10) For with the heart man believeth unto righteousness; and with the mouth confession is made unto salvation.',
                        'unordered' => 'That if thou shalt confess with thy mouth the Lord Jesus, and shalt believe in thine heart that God hath raised him from the dead, thou shalt be saved. For with the heart man believeth unto righteousness; and with the mouth confession is made unto salvation.',
                        'description' => 'Romans 10:9-10, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_079',
                        'name' => 'Repent and turn back',
                        'siglum' => 'kjv/ac/3/18-19',
                        'content' => '(18) But those things, which God before had shewed by the mouth of all his prophets, that Christ should suffer, he hath so fulfilled. (19) Repent ye therefore, and be converted, that your sins may be blotted out, when the times of refreshing shall come from the presence of the Lord;',
                        'unordered' => 'But those things, which God before had shewed by the mouth of all his prophets, that Christ should suffer, he hath so fulfilled. Repent ye therefore, and be converted, that your sins may be blotted out, when the times of refreshing shall come from the presence of the Lord;',
                        'description' => 'Acts 3:18-19, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_080',
                        'name' => 'Whoever believes in him will receive forgiveness of sins through his name',
                        'siglum' => 'kjv/ac/10/39-43',
                        'content' => '(39) And we are witnesses of all things which he did both in the land of the Jews, and in Jerusalem; whom they slew and hanged on a tree: (40) Him God raised up the third day, and shewed him openly; (41) Not to all the people, but unto witnesses chosen before of God, [even] to us, who did eat and drink with him after he rose from the dead. (42) And he commanded us to preach unto the people, and to testify that it is he which was ordained of God [to be] the Judge of quick and dead. (43) To him give all the prophets witness, that through his name whosoever believeth in him shall receive remission of sins.',
                        'unordered' => 'And we are witnesses of all things which he did both in the land of the Jews, and in Jerusalem; whom they slew and hanged on a tree: Him God raised up the third day, and shewed him openly; Not to all the people, but unto witnesses chosen before of God, [even] to us, who did eat and drink with him after he rose from the dead. And he commanded us to preach unto the people, and to testify that it is he which was ordained of God [to be] the Judge of quick and dead. To him give all the prophets witness, that through his name whosoever believeth in him shall receive remission of sins.',
                        'description' => 'Acts 10:39-43, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_081',
                        'name' => 'What is sin?',
                        'siglum' => 'kjv/1jn/3/4',
                        'content' => '(4) Whosoever committeth sin transgresseth also the law: for sin is the transgression of the law.',
                        'unordered' => 'Whosoever committeth sin transgresseth also the law: for sin is the transgression of the law.',
                        'description' => '1 John 3:4, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_082',
                        'name' => 'Warning: I never knew you',
                        'siglum' => 'kjv/mt/7/15-23',
                        'content' => '(15) Beware of false prophets, which come to you in sheep&#x27;s clothing, but inwardly they are ravening wolves. (16) Ye shall know them by their fruits. Do men gather grapes of thorns, or figs of thistles? (17) Even so every good tree bringeth forth good fruit; but a corrupt tree bringeth forth evil fruit. (18) A good tree cannot bring forth evil fruit, neither [can] a corrupt tree bring forth good fruit. (19) Every tree that bringeth not forth good fruit is hewn down, and cast into the fire. (20) Wherefore by their fruits ye shall know them. (21) Not every one that saith unto me, Lord, Lord, shall enter into the kingdom of heaven; but he that doeth the will of my Father which is in heaven. (22) Many will say to me in that day, Lord, Lord, have we not prophesied in thy name? and in thy name have cast out devils? and in thy name done many wonderful works? (23) And then will I profess unto them, I never knew you: depart from me, ye that work iniquity.',
                        'unordered' => 'Beware of false prophets, which come to you in sheep&#x27;s clothing, but inwardly they are ravening wolves. Ye shall know them by their fruits. Do men gather grapes of thorns, or figs of thistles? Even so every good tree bringeth forth good fruit; but a corrupt tree bringeth forth evil fruit. A good tree cannot bring forth evil fruit, neither [can] a corrupt tree bring forth good fruit. Every tree that bringeth not forth good fruit is hewn down, and cast into the fire. Wherefore by their fruits ye shall know them. Not every one that saith unto me, Lord, Lord, shall enter into the kingdom of heaven; but he that doeth the will of my Father which is in heaven. Many will say to me in that day, Lord, Lord, have we not prophesied in thy name? and in thy name have cast out devils? and in thy name done many wonderful works? And then will I profess unto them, I never knew you: depart from me, ye that work iniquity.',
                        'description' => 'Matthew 7:15-23, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_083',
                        'name' => 'Not everyone who says to me: Lord, Lord',
                        'siglum' => 'kjv/mt/7/21',
                        'content' => '(21) Not every one that saith unto me, Lord, Lord, shall enter into the kingdom of heaven; but he that doeth the will of my Father which is in heaven.',
                        'unordered' => 'Not every one that saith unto me, Lord, Lord, shall enter into the kingdom of heaven; but he that doeth the will of my Father which is in heaven.',
                        'description' => 'Matthew 7:21, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_084',
                        'name' => 'The Holy Spirit convicts of sin',
                        'siglum' => 'kjv/jn/16/7-11',
                        'content' => '(7) Nevertheless I tell you the truth; It is expedient for you that I go away: for if I go not away, the Comforter will not come unto you; but if I depart, I will send him unto you. (8) And when he is come, he will reprove the world of sin, and of righteousness, and of judgment: (9) Of sin, because they believe not on me; (10) Of righteousness, because I go to my Father, and ye see me no more; (11) Of judgment, because the prince of this world is judged.',
                        'unordered' => 'Nevertheless I tell you the truth; It is expedient for you that I go away: for if I go not away, the Comforter will not come unto you; but if I depart, I will send him unto you. And when he is come, he will reprove the world of sin, and of righteousness, and of judgment: Of sin, because they believe not on me; Of righteousness, because I go to my Father, and ye see me no more; Of judgment, because the prince of this world is judged.',
                        'description' => 'John 16:7-11, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_085',
                        'name' => 'The remnant left by grace, not by works',
                        'siglum' => 'kjv/ro/11/1-12',
                        'content' => '(1) I say then, Hath God cast away his people? God forbid. For I also am an Israelite, of the seed of Abraham, [of] the tribe of Benjamin. (2) God hath not cast away his people which he foreknew. Wot ye not what the scripture saith of Elias? how he maketh intercession to God against Israel, saying, (3) Lord, they have killed thy prophets, and digged down thine altars; and I am left alone, and they seek my life. (4) But what saith the answer of God unto him? I have reserved to myself seven thousand men, who have not bowed the knee to [the image of] Baal. (5) Even so then at this present time also there is a remnant according to the election of grace. (6) And if by grace, then [is it] no more of works: otherwise grace is no more grace. But if [it be] of works, then is it no more grace: otherwise work is no more work. (7) What then? Israel hath not obtained that which he seeketh for; but the election hath obtained it, and the rest were blinded (8) (According as it is written, God hath given them the spirit of slumber, eyes that they should not see, and ears that they should not hear;) unto this day. (9) And David saith, Let their table be made a snare, and a trap, and a stumblingblock, and a recompence unto them: (10) Let their eyes be darkened, that they may not see, and bow down their back alway. (11) I say then, Have they stumbled that they should fall? God forbid: but [rather] through their fall salvation [is come] unto the Gentiles, for to provoke them to jealousy. (12) Now if the fall of them [be] the riches of the world, and the diminishing of them the riches of the Gentiles; how much more their fulness?',
                        'unordered' => 'I say then, Hath God cast away his people? God forbid. For I also am an Israelite, of the seed of Abraham, [of] the tribe of Benjamin. God hath not cast away his people which he foreknew. Wot ye not what the scripture saith of Elias? how he maketh intercession to God against Israel, saying, Lord, they have killed thy prophets, and digged down thine altars; and I am left alone, and they seek my life. But what saith the answer of God unto him? I have reserved to myself seven thousand men, who have not bowed the knee to [the image of] Baal. Even so then at this present time also there is a remnant according to the election of grace. And if by grace, then [is it] no more of works: otherwise grace is no more grace. But if [it be] of works, then is it no more grace: otherwise work is no more work. What then? Israel hath not obtained that which he seeketh for; but the election hath obtained it, and the rest were blinded (According as it is written, God hath given them the spirit of slumber, eyes that they should not see, and ears that they should not hear;) unto this day. And David saith, Let their table be made a snare, and a trap, and a stumblingblock, and a recompence unto them: Let their eyes be darkened, that they may not see, and bow down their back alway. I say then, Have they stumbled that they should fall? God forbid: but [rather] through their fall salvation [is come] unto the Gentiles, for to provoke them to jealousy. Now if the fall of them [be] the riches of the world, and the diminishing of them the riches of the Gentiles; how much more their fulness?',
                        'description' => 'Romans 11:1-12, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_086',
                        'name' => 'Justification by faith not by works',
                        'siglum' => 'kjv/ro/4/13-25',
                        'content' => '(13) For the promise, that he should be the heir of the world, [was] not to Abraham, or to his seed, through the law, but through the righteousness of faith. (14) For if they which are of the law [be] heirs, faith is made void, and the promise made of none effect: (15) Because the law worketh wrath: for where no law is, [there is] no transgression. (16) Therefore [it is] of faith, that [it might be] by grace; to the end the promise might be sure to all the seed; not to that only which is of the law, but to that also which is of the faith of Abraham; who is the father of us all, (17) (As it is written, I have made thee a father of many nations,) before him whom he believed, [even] God, who quickeneth the dead, and calleth those things which be not as though they were. (18) Who against hope believed in hope, that he might become the father of many nations, according to that which was spoken, So shall thy seed be. (19) And being not weak in faith, he considered not his own body now dead, when he was about an hundred years old, neither yet the deadness of Sara&#x27;s womb: (20) He staggered not at the promise of God through unbelief; but was strong in faith, giving glory to God; (21) And being fully persuaded that, what he had promised, he was able also to perform. (22) And therefore it was imputed to him for righteousness. (23) Now it was not written for his sake alone, that it was imputed to him; (24) But for us also, to whom it shall be imputed, if we believe on him that raised up Jesus our Lord from the dead; (25) Who was delivered for our offences, and was raised again for our justification.',
                        'unordered' => 'For the promise, that he should be the heir of the world, [was] not to Abraham, or to his seed, through the law, but through the righteousness of faith. For if they which are of the law [be] heirs, faith is made void, and the promise made of none effect: Because the law worketh wrath: for where no law is, [there is] no transgression. Therefore [it is] of faith, that [it might be] by grace; to the end the promise might be sure to all the seed; not to that only which is of the law, but to that also which is of the faith of Abraham; who is the father of us all, (As it is written, I have made thee a father of many nations,) before him whom he believed, [even] God, who quickeneth the dead, and calleth those things which be not as though they were. Who against hope believed in hope, that he might become the father of many nations, according to that which was spoken, So shall thy seed be. And being not weak in faith, he considered not his own body now dead, when he was about an hundred years old, neither yet the deadness of Sara&#x27;s womb: He staggered not at the promise of God through unbelief; but was strong in faith, giving glory to God; And being fully persuaded that, what he had promised, he was able also to perform. And therefore it was imputed to him for righteousness. Now it was not written for his sake alone, that it was imputed to him; But for us also, to whom it shall be imputed, if we believe on him that raised up Jesus our Lord from the dead; Who was delivered for our offences, and was raised again for our justification.',
                        'description' => 'Romans 4:13-25, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_087',
                        'name' => 'Who loves Me?',
                        'siglum' => 'kjv/jn/14/21-25',
                        'content' => '(21) He that hath my commandments, and keepeth them, he it is that loveth me: and he that loveth me shall be loved of my Father, and I will love him, and will manifest myself to him. (22) Judas saith unto him, not Iscariot, Lord, how is it that thou wilt manifest thyself unto us, and not unto the world? (23) Jesus answered and said unto him, If a man love me, he will keep my words: and my Father will love him, and we will come unto him, and make our abode with him. (24) He that loveth me not keepeth not my sayings: and the word which ye hear is not mine, but the Father&#x27;s which sent me. (25) These things have I spoken unto you, being [yet] present with you.',
                        'unordered' => 'He that hath my commandments, and keepeth them, he it is that loveth me: and he that loveth me shall be loved of my Father, and I will love him, and will manifest myself to him. Judas saith unto him, not Iscariot, Lord, how is it that thou wilt manifest thyself unto us, and not unto the world? Jesus answered and said unto him, If a man love me, he will keep my words: and my Father will love him, and we will come unto him, and make our abode with him. He that loveth me not keepeth not my sayings: and the word which ye hear is not mine, but the Father&#x27;s which sent me. These things have I spoken unto you, being [yet] present with you.',
                        'description' => 'John 14:21-25, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_088',
                        'name' => 'For God so loved the world',
                        'siglum' => 'kjv/jn/3/16-19',
                        'content' => '(16) For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life. (17) For God sent not his Son into the world to condemn the world; but that the world through him might be saved. (18) He that believeth on him is not condemned: but he that believeth not is condemned already, because he hath not believed in the name of the only begotten Son of God. (19) And this is the condemnation, that light is come into the world, and men loved darkness rather than light, because their deeds were evil.',
                        'unordered' => 'For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life. For God sent not his Son into the world to condemn the world; but that the world through him might be saved. He that believeth on him is not condemned: but he that believeth not is condemned already, because he hath not believed in the name of the only begotten Son of God. And this is the condemnation, that light is come into the world, and men loved darkness rather than light, because their deeds were evil.',
                        'description' => 'John 3:16-19, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_089',
                        'name' => 'Rebirth of water and spirit as necessity',
                        'siglum' => 'kjv/jn/3/1-15',
                        'content' => '(1) There was a man of the Pharisees, named Nicodemus, a ruler of the Jews: (2) The same came to Jesus by night, and said unto him, Rabbi, we know that thou art a teacher come from God: for no man can do these miracles that thou doest, except God be with him. (3) Jesus answered and said unto him, Verily, verily, I say unto thee, Except a man be born again, he cannot see the kingdom of God. (4) Nicodemus saith unto him, How can a man be born when he is old? can he enter the second time into his mother&#x27;s womb, and be born? (5) Jesus answered, Verily, verily, I say unto thee, Except a man be born of water and [of] the Spirit, he cannot enter into the kingdom of God. (6) That which is born of the flesh is flesh; and that which is born of the Spirit is spirit. (7) Marvel not that I said unto thee, Ye must be born again. (8) The wind bloweth where it listeth, and thou hearest the sound thereof, but canst not tell whence it cometh, and whither it goeth: so is every one that is born of the Spirit. (9) Nicodemus answered and said unto him, How can these things be? (10) Jesus answered and said unto him, Art thou a master of Israel, and knowest not these things? (11) Verily, verily, I say unto thee, We speak that we do know, and testify that we have seen; and ye receive not our witness. (12) If I have told you earthly things, and ye believe not, how shall ye believe, if I tell you [of] heavenly things? (13) And no man hath ascended up to heaven, but he that came down from heaven, [even] the Son of man which is in heaven. (14) And as Moses lifted up the serpent in the wilderness, even so must the Son of man be lifted up: (15) That whosoever believeth in him should not perish, but have eternal life.',
                        'unordered' => 'There was a man of the Pharisees, named Nicodemus, a ruler of the Jews: The same came to Jesus by night, and said unto him, Rabbi, we know that thou art a teacher come from God: for no man can do these miracles that thou doest, except God be with him. Jesus answered and said unto him, Verily, verily, I say unto thee, Except a man be born again, he cannot see the kingdom of God. Nicodemus saith unto him, How can a man be born when he is old? can he enter the second time into his mother&#x27;s womb, and be born? Jesus answered, Verily, verily, I say unto thee, Except a man be born of water and [of] the Spirit, he cannot enter into the kingdom of God. That which is born of the flesh is flesh; and that which is born of the Spirit is spirit. Marvel not that I said unto thee, Ye must be born again. The wind bloweth where it listeth, and thou hearest the sound thereof, but canst not tell whence it cometh, and whither it goeth: so is every one that is born of the Spirit. Nicodemus answered and said unto him, How can these things be? Jesus answered and said unto him, Art thou a master of Israel, and knowest not these things? Verily, verily, I say unto thee, We speak that we do know, and testify that we have seen; and ye receive not our witness. If I have told you earthly things, and ye believe not, how shall ye believe, if I tell you [of] heavenly things? And no man hath ascended up to heaven, but he that came down from heaven, [even] the Son of man which is in heaven. And as Moses lifted up the serpent in the wilderness, even so must the Son of man be lifted up: That whosoever believeth in him should not perish, but have eternal life.',
                        'description' => 'John 3:1-15, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_090',
                        'name' => 'Jesus Christ is the Son of God',
                        'siglum' => 'kjv/ac/8/36-38',
                        'content' => '(36) And as they went on [their] way, they came unto a certain water: and the eunuch said, See, [here is] water; what doth hinder me to be baptized? (37) And Philip said, If thou believest with all thine heart, thou mayest. And he answered and said, I believe that Jesus Christ is the Son of God. (38) And he commanded the chariot to stand still: and they went down both into the water, both Philip and the eunuch; and he baptized him.',
                        'unordered' => 'And as they went on [their] way, they came unto a certain water: and the eunuch said, See, [here is] water; what doth hinder me to be baptized? And Philip said, If thou believest with all thine heart, thou mayest. And he answered and said, I believe that Jesus Christ is the Son of God. And he commanded the chariot to stand still: and they went down both into the water, both Philip and the eunuch; and he baptized him.',
                        'description' => 'Acts 8:36-38, King James Version'
                    ]
                ],
                [
                    'data' => [
                        'code' => 'V_091',
                        'name' => 'Whoever believes and is baptized will be saved, but whoever does not believe will be condemned',
                        'siglum' => 'kjv/mk/16/16',
                        'content' => '(16) He that believeth and is baptized shall be saved; but he that believeth not shall be damned.',
                        'unordered' => 'He that believeth and is baptized shall be saved; but he that believeth not shall be damned.',
                        'description' => 'Mark 16:16, King James Version'
                    ]
                ]
            ]
        ]
    ];

    public function __construct(
        GroupFactory $groupFactory,
        GroupManagement $groupManagement,
        VerseFactory $verseFactory,
        VerseRepositoryInterface $verseRepository
    ) {
        $this->groupFactory = $groupFactory;
        $this->groupManagement = $groupManagement;
        $this->verseFactory = $verseFactory;
        $this->verseRepository = $verseRepository;
    }

    private function install(array $groups): void
    {
        foreach ($groups as $groupsAndVerseArray) {
            $groupDataArray = $groupsAndVerseArray['data'];
            $groupName = $groupDataArray['name'];
            $groupCode = $groupDataArray['code'];
            $groupColourValue = $groupDataArray['colour_value'];
            $group = null;
            try {
                $group = $this->groupManagement->getByCode($groupCode);
            } catch (\Exception $e) {
                $group = $this->groupFactory->create()->getDataModel();
            }
            $groupData = $group
                ->setName($groupName)
                ->setCode($groupCode)
                ->setColourValue($groupColourValue);
            if (!empty($group->getGroupId())) {
                $groupData->setGroupId($group->getGroupId());
            }
            $groupData = $this->groupManagement->save($groupData);
            $groupDataId = $groupData->getGroupId();
            $versesArray = $groupsAndVerseArray['child'];
            foreach ($versesArray as $verseArray) {
                $verseDataArray = $verseArray['data'];
                $verseCode = $verseDataArray['code'];
                $verseName = $verseDataArray['name'];
                $verseSiglum = $verseDataArray['siglum'];
                $verseContent = $verseDataArray['content'];
                $verseUnordered = $verseDataArray['unordered'];
                $verseDescription = $verseDataArray['description'];
                $verse = null;
                try {
                    $verse = $this->verseRepository->getByCode($verseCode);
                } catch (\Exception $e) {
                    $verse = $this->verseFactory->create()->getDataModel();
                }
                $verseData = $verse
                    ->setGroupId($groupDataId)
                    ->setCode($verseCode)
                    ->setName($verseName)
                    ->setSiglum($verseSiglum)
                    ->setContent($verseContent)
                    ->setUnordered($verseUnordered)
                    ->setDescription($verseDescription);
                if (!empty($verse->getVerseId())) {
                    $verseData->setVerseId($verse->getVerseId());
                }
                $this->verseRepository->save($verseData);
            }
        }
    }

    public function execute(string $language = Language::LANGUAGE_PL): void
    {
        $groups = null;
        switch ($language) {
            case Language::LANGUAGE_EN:
                $this->install(self::CUSTOM_GROUPS_AND_VERSES_EN);
                return;
            default:
            case Language::LANGUAGE_PL:
                $this->install(self::CUSTOM_GROUPS_AND_VERSES_PL);
        }
    }
}

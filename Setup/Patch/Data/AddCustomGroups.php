<?php

declare(strict_types=1);

namespace ITZielArt\TorahVerse\Setup\Patch\Data;

use ITZielArt\TorahVerse\Api\GroupRepositoryInterface;
use ITZielArt\TorahVerse\Api\VerseRepositoryInterface;
use ITZielArt\TorahVerse\Model\GroupFactory;
use ITZielArt\TorahVerse\Model\VerseFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddCustomGroups implements DataPatchInterface
{
    /**
     * @var GroupFactory
     */
    private $groupFactory;
    /**
     * @var GroupRepositoryInterface
     */
    private $groupRepository;
    /**
     * @var VerseFactory
     */
    private $verseFactory;
    /**
     * @var VerseRepositoryInterface
     */
    private $verseRepository;

    private const CUSTOM_GROUPS_AND_VERSES = [
        [
            'data' => [
                'name' => 'Boję się',
                'code' => 'CGAV_001',
                'colour_value' => '#5020df'
            ],
            'child' => [
                [
                    'data' => [
                        'name' => 'Nie bójcie się tych, którzy zabijają ciało',
                        'siglum' => 'mt/10/28',
                        'translation' => 'bw',
                        'content' => '(28) I nie bójcie się tych, którzy zabijają ciało, ale duszy zabić nie mogą; bójcie się raczej tego, który może i duszę i ciało zniszczyć w piekle.',
                        'unordered' => 'I nie bójcie się tych, którzy zabijają ciało, ale duszy zabić nie mogą; bójcie się raczej tego, który może i duszę i ciało zniszczyć w piekle.',
                        'description' => 'Ewangelia Mateusza 10:28, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Bójcie się raczej tego, który może i duszę i ciało zniszczyć w piekle',
                        'siglum' => 'jas/4/12',
                        'translation' => 'bw',
                        'content' => '(12) Jeden jest zakonodawca i sędzia, Ten, który może zbawić i zatracić. Ty zaś kim jesteś, że osądzasz bliźniego?',
                        'unordered' => 'Jeden jest zakonodawca i sędzia, Ten, który może zbawić i zatracić. Ty zaś kim jesteś, że osądzasz bliźniego?',
                        'description' => 'List Jakuba 4:12, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Nie mamy ducha bojaźni',
                        'siglum' => '2tm/1/7',
                        'translation' => 'bw',
                        'content' => '(7) Albowiem nie dał nam Bóg ducha bojaźni, lecz mocy i miłości, i powściągliwości.',
                        'unordered' => 'Albowiem nie dał nam Bóg ducha bojaźni, lecz mocy i miłości, i powściągliwości.',
                        'description' => '2 List do Tymoteusza 1:7, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
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
                        'name' => 'O nic się nie martwcie',
                        'siglum' => 'mt/6/19-34',
                        'translation' => 'bw',
                        'content' => '(19) Nie gromadźcie sobie skarbów na ziemi, gdzie je mól i rdza niszczą i gdzie złodzieje podkopują i kradną; (20) ale gromadźcie sobie skarby w niebie, gdzie ani mól, ani rdza nie niszczą i gdzie złodzieje nie podkopują i nie kradną. (21) Albowiem gdzie jest skarb twój - tam będzie i serce twoje. (22) Światłem ciała jest oko. Jeśli tedy oko twoje jest zdrowe, całe ciało twoje jasne będzie. (23) A jeśliby oko twoje było chore, całe ciało twoje będzie ciemne. Jeśli tedy światło, które jest w tobie, jest ciemnością, sama ciemność jakaż będzie! (24) Nikt nie może dwom panom służyć, gdyż albo jednego nienawidzić będzie, a drugiego miłować, albo jednego trzymać się będzie, a drugim pogardzi. Nie możecie Bogu służyć i mamonie. (25) Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? (26) Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? (27) A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? (28) A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. (29) A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. (30) Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? (31) Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? (32) Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. (33) Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. (34) Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'unordered' => 'Nie gromadźcie sobie skarbów na ziemi, gdzie je mól i rdza niszczą i gdzie złodzieje podkopują i kradną; ale gromadźcie sobie skarby w niebie, gdzie ani mól, ani rdza nie niszczą i gdzie złodzieje nie podkopują i nie kradną. Albowiem gdzie jest skarb twój - tam będzie i serce twoje. Światłem ciała jest oko. Jeśli tedy oko twoje jest zdrowe, całe ciało twoje jasne będzie. A jeśliby oko twoje było chore, całe ciało twoje będzie ciemne. Jeśli tedy światło, które jest w tobie, jest ciemnością, sama ciemność jakaż będzie! Nikt nie może dwom panom służyć, gdyż albo jednego nienawidzić będzie, a drugiego miłować, albo jednego trzymać się będzie, a drugim pogardzi. Nie możecie Bogu służyć i mamonie. Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'description' => 'Ewangelia Mateusza 6:19-34, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Nie troszczcie się o nic',
                        'siglum' => 'flp/4/6',
                        'translation' => 'bw',
                        'content' => '(6) Nie troszczcie się o nic, ale we wszystkim w modlitwie i błaganiach z dziękczynieniem powierzcie prośby wasze Bogu.',
                        'unordered' => 'Nie troszczcie się o nic, ale we wszystkim w modlitwie i błaganiach z dziękczynieniem powierzcie prośby wasze Bogu.',
                        'description' => 'List do Filipian 4:6, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Wszelką troskę złóż na Jezusa Chrystusa',
                        'siglum' => '1p/5/6-7',
                        'translation' => 'bw',
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
                        'name' => 'Wyznawajmy grzechy swoje',
                        'siglum' => '1jn/1/4-9',
                        'translation' => 'bw',
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
                        'name' => 'Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni',
                        'siglum' => 'mt/5/4',
                        'translation' => 'bw',
                        'content' => '(4) Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni.',
                        'unordered' => 'Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni.',
                        'description' => 'Ewangelia Mateusza 5:4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Bóg pociesza, więc pocieszajmy się tak wzajemnie',
                        'siglum' => '2kor/1/3-4',
                        'translation' => 'bw',
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
                        'name' => 'Choćbym mówił językami ludzkimi i anielskimi',
                        'siglum' => '1kor/13/1-13',
                        'translation' => 'bw',
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
                        'name' => 'Nic ani nikt nie zdoła nas odłączyć od miłości Bożej',
                        'siglum' => 'ro/8/31-39',
                        'translation' => 'bw',
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
                        'name' => 'Gdzież jest wiara wasza?',
                        'siglum' => 'lk/8/22-25',
                        'translation' => 'bw',
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
                        'name' => 'Błogosławieni jesteście',
                        'siglum' => 'mt/5/11-12',
                        'translation' => 'bw',
                        'content' => '(11) Błogosławieni jesteście, gdy wam złorzeczyć i prześladować was będą i kłamliwie mówić na was wszelkie zło ze względu na mnie! (12) Radujcie i weselcie się, albowiem zapłata wasza obfita jest w niebie; tak bowiem prześladowali proroków, którzy byli przed wami.',
                        'unordered' => 'Błogosławieni jesteście, gdy wam złorzeczyć i prześladować was będą i kłamliwie mówić na was wszelkie zło ze względu na mnie! Radujcie i weselcie się, albowiem zapłata wasza obfita jest w niebie; tak bowiem prześladowali proroków, którzy byli przed wami.',
                        'description' => 'Ewangelia Mateusza 5:11-12, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Dlatego nie upadamy na duchu',
                        'siglum' => '2kor/4/8-18',
                        'translation' => 'bw',
                        'content' => '(8) Zewsząd uciskani, nie jesteśmy jednak pognębieni, zakłopotani, ale nie zrozpaczeni, (9) prześladowani, ale nie opuszczeni, powaleni, ale nie pokonani, (10) zawsze śmierć Jezusa na ciele swoim noszący, aby i życie Jezusa na ciele naszym się ujawniło. (11) Zawsze bowiem my, którzy żyjemy, dla Jezusa na śmierć wydawani bywamy, aby i życie Jezusa na śmiertelnym ciele naszym się ujawniło. (12) Tak tedy śmierć wykonuje dzieło swoje w nas, a życie w was. (13) Mając zaś tego samego ducha wiary, jak to jest napisane: Uwierzyłem, przeto powiedziałem, i my wierzymy, i dlatego też mówimy, (14) wiedząc, że Ten, który wzbudził Pana Jezusa, także i nas z Jezusem wzbudził i razem z wami przed sobą stawi. (15) Wszystko to bowiem dzieje się ze względu na was, aby, im więcej jest uczestników łaski, tym bardziej obfitowało dziękczynienie ku chwale Bożej. (16) Dlatego nie upadamy na duchu; bo choć zewnętrzny nasz człowiek niszczeje, to jednak ten nasz wewnętrzny odnawia się z każdym dniem. (17) Albowiem nieznaczny chwilowy ucisk przynosi nam przeogromną obfitość wiekuistej chwały, (18) nam, którzy nie patrzymy na to, co widzialne, ale na to, co niewidzialne; albowiem to, co widzialne, jest doczesne, a to, co niewidzialne, jest wieczne.',
                        'unordered' => 'Zewsząd uciskani, nie jesteśmy jednak pognębieni, zakłopotani, ale nie zrozpaczeni, prześladowani, ale nie opuszczeni, powaleni, ale nie pokonani, zawsze śmierć Jezusa na ciele swoim noszący, aby i życie Jezusa na ciele naszym się ujawniło. Zawsze bowiem my, którzy żyjemy, dla Jezusa na śmierć wydawani bywamy, aby i życie Jezusa na śmiertelnym ciele naszym się ujawniło. Tak tedy śmierć wykonuje dzieło swoje w nas, a życie w was. Mając zaś tego samego ducha wiary, jak to jest napisane: Uwierzyłem, przeto powiedziałem, i my wierzymy, i dlatego też mówimy, wiedząc, że Ten, który wzbudził Pana Jezusa, także i nas z Jezusem wzbudził i razem z wami przed sobą stawi. Wszystko to bowiem dzieje się ze względu na was, aby, im więcej jest uczestników łaski, tym bardziej obfitowało dziękczynienie ku chwale Bożej. Dlatego nie upadamy na duchu; bo choć zewnętrzny nasz człowiek niszczeje, to jednak ten nasz wewnętrzny odnawia się z każdym dniem. Albowiem nieznaczny chwilowy ucisk przynosi nam przeogromną obfitość wiekuistej chwały, nam, którzy nie patrzymy na to, co widzialne, ale na to, co niewidzialne; albowiem to, co widzialne, jest doczesne, a to, co niewidzialne, jest wieczne.',
                        'description' => '2 list do Koryntian 4:8-18, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Radujcie się w Panu zawsze',
                        'siglum' => 'flp/4/4-7',
                        'translation' => 'bw',
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
                        'name' => 'Czemu jesteście bojaźliwi, małowierni?',
                        'siglum' => 'mt/8/26',
                        'translation' => 'bw',
                        'content' => '(26) A On rzekł do nich: Czemu jesteście bojaźliwi, małowierni? Potem wstał, zgromił wiatry i morze i nastała wielka cisza.',
                        'unordered' => 'A On rzekł do nich: Czemu jesteście bojaźliwi, małowierni? Potem wstał, zgromił wiatry i morze i nastała wielka cisza.',
                        'description' => 'Ewangelia Mateusza 8:26, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'A wiara jest pewnością tego, czego się spodziewamy',
                        'siglum' => 'hebr/11/1-40',
                        'translation' => 'bw',
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
                        'name' => 'Nie troszczcie się o życie swoje',
                        'siglum' => 'mt/6/25-34',
                        'translation' => 'bw',
                        'content' => '(25) Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? (26) Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? (27) A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? (28) A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. (29) A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. (30) Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? (31) Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? (32) Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. (33) Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. (34) Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'unordered' => 'Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'description' => 'Ewangelia Mateusza 6:25-34, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Przystąpmy tedy z ufną odwagą do tronu łaski',
                        'siglum' => 'hebr/4/16',
                        'translation' => 'bw',
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
                        'name' => 'A wiara jest pewnością tego, czego się spodziewamy',
                        'siglum' => 'hebr/11/1-40',
                        'translation' => 'bw',
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
                        'name' => 'Miejcie się na baczności',
                        'siglum' => 'lk/17/3-4',
                        'translation' => 'bw',
                        'content' => '(3) Miejcie się na baczności. Jeśliby zgrzeszył twój brat, strofuj go, a jeśli się upamięta, odpuść mu. (4) A jeśliby siedemkroć na dzień zgrzeszył przeciwko tobie, i siedemkroć zwrócił się do ciebie, mówiąc: Żałuję tego, odpuść mu.',
                        'unordered' => 'Miejcie się na baczności. Jeśliby zgrzeszył twój brat, strofuj go, a jeśli się upamięta, odpuść mu. A jeśliby siedemkroć na dzień zgrzeszył przeciwko tobie, i siedemkroć zwrócił się do ciebie, mówiąc: Żałuję tego, odpuść mu.',
                        'description' => 'Ewangelia Łukasza 17:3-4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Błogosławcie tych, którzy was prześladują',
                        'siglum' => 'ro/12/14-17',
                        'translation' => 'bw',
                        'content' => '(14) Błogosławcie tych, którzy was prześladują, błogosławcie, a nie przeklinajcie. (15) Weselcie się z weselącymi się, płaczcie z płaczącymi. (16) Bądźcie wobec siebie jednakowo usposobieni; nie bądźcie wyniośli, lecz się do niskich skłaniajcie; nie uważajcie sami siebie za mądrych. (17) Nikomu złem za złe nie oddawajcie, starajcie się o to, co jest dobre w oczach wszystkich ludzi.',
                        'unordered' => 'Błogosławcie tych, którzy was prześladują, błogosławcie, a nie przeklinajcie. Weselcie się z weselącymi się, płaczcie z płaczącymi. Bądźcie wobec siebie jednakowo usposobieni; nie bądźcie wyniośli, lecz się do niskich skłaniajcie; nie uważajcie sami siebie za mądrych. Nikomu złem za złe nie oddawajcie, starajcie się o to, co jest dobre w oczach wszystkich ludzi.',
                        'description' => 'List do Rzymian 12:14-17, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Nie mścijcie się sami, ale pozostawcie to gniewowi Bożemu',
                        'siglum' => 'ro/12/19-21',
                        'translation' => 'bw',
                        'content' => '(19) Najmilsi! Nie mścijcie się sami, ale pozostawcie to gniewowi Bożemu, albowiem napisano: Pomsta do mnie należy, Ja odpłacę, mówi Pan. (20) Jeśli tedy łaknie nieprzyjaciel twój, nakarm go; jeśli pragnie, napój go; bo czyniąc to, węgle rozżarzone zgarniesz na jego głowę. (21) Nie daj się zwyciężyć złu, ale zło dobrem zwyciężaj.',
                        'unordered' => 'Najmilsi! Nie mścijcie się sami, ale pozostawcie to gniewowi Bożemu, albowiem napisano: Pomsta do mnie należy, Ja odpłacę, mówi Pan. Jeśli tedy łaknie nieprzyjaciel twój, nakarm go; jeśli pragnie, napój go; bo czyniąc to, węgle rozżarzone zgarniesz na jego głowę. Nie daj się zwyciężyć złu, ale zło dobrem zwyciężaj.',
                        'description' => 'List do Rzymian 12:19-21, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Pan stał przy mnie i dodał mi sił',
                        'siglum' => '2tm/4/16-18',
                        'translation' => 'bw',
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
                        'name' => 'Oto Ja posyłam was jak owce między wilki',
                        'siglum' => 'mt/10/16-20',
                        'translation' => 'bw',
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
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
                        'name' => 'Niechaj się nie trwoży serce wasze',
                        'siglum' => 'jn/14/1-4',
                        'translation' => 'bw',
                        'content' => '(1) Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! (2) W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. (3) A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. (4) I dokąd Ja idę, wiecie, i drogę znacie.',
                        'unordered' => 'Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. I dokąd Ja idę, wiecie, i drogę znacie.',
                        'description' => 'Ewangelia Jana 14:1-4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'To powiedziałem wam, abyście we mnie pokój mieli',
                        'siglum' => 'jn/16/33',
                        'translation' => 'bw',
                        'content' => '(33) To powiedziałem wam, abyście we mnie pokój mieli. Na świecie ucisk mieć będziecie, ale ufajcie, Ja zwyciężyłem świat.',
                        'unordered' => 'To powiedziałem wam, abyście we mnie pokój mieli. Na świecie ucisk mieć będziecie, ale ufajcie, Ja zwyciężyłem świat.',
                        'description' => 'Ewangelia Jana 16:33, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Usprawiedliwieni tedy z wiary, pokój mamy z Bogiem',
                        'siglum' => 'ro/5/1-5',
                        'translation' => 'bw',
                        'content' => '(1) Usprawiedliwieni tedy z wiary, pokój mamy z Bogiem przez Pana naszego, Jezusa Chrystusa, (2) dzięki któremu też mamy dostęp przez wiarę do tej łaski, w której stoimy, i chlubimy się nadzieją chwały Bożej. (3) A nie tylko to, chlubimy się też z ucisków, wiedząc, że ucisk wywołuje cierpliwość, (4) a cierpliwość doświadczenie, doświadczenie zaś nadzieję; (5) a nadzieja nie zawodzi, bo miłość Boża rozlana jest w sercach naszych przez Ducha Świętego, który nam jest dany.',
                        'unordered' => 'Usprawiedliwieni tedy z wiary, pokój mamy z Bogiem przez Pana naszego, Jezusa Chrystusa, dzięki któremu też mamy dostęp przez wiarę do tej łaski, w której stoimy, i chlubimy się nadzieją chwały Bożej. A nie tylko to, chlubimy się też z ucisków, wiedząc, że ucisk wywołuje cierpliwość, a cierpliwość doświadczenie, doświadczenie zaś nadzieję; a nadzieja nie zawodzi, bo miłość Boża rozlana jest w sercach naszych przez Ducha Świętego, który nam jest dany.',
                        'description' => 'List do Rzymian 5:1-5, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Nie troszczcie się o nic',
                        'siglum' => 'flp/4/6-7',
                        'translation' => 'bw',
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
                        'name' => 'Nie upodabniajcie się do tego świata',
                        'siglum' => 'ro/12/1-21',
                        'translation' => 'bw',
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
                        'name' => 'Któż nas odłączy od miłości Chrystusowej?',
                        'siglum' => 'ro/8/31-39',
                        'translation' => 'bw',
                        'content' => '(31) Cóż tedy na to powiemy? Jeśli Bóg za nami, któż przeciwko nam? (32) On, który nawet własnego Syna nie oszczędził, ale go za nas wszystkich wydał, jakżeby nie miał z nim darować nam wszystkiego? (33) Któż będzie oskarżał wybranych Bożych? Przecież Bóg usprawiedliwia. (34) Któż będzie potępiał? Jezus Chrystus, który umarł, więcej, zmartwychwstał, który jest po prawicy Boga, Ten przecież wstawia się za nami. (35) Któż nas odłączy od miłości Chrystusowej? Czy utrapienie, czy ucisk, czy prześladowanie, czy głód, czy nagość, czy niebezpieczeństwo, czy miecz? (36) Jak napisano: Z powodu ciebie co dzień nas zabijają, uważają nas za owce ofiarne. (37) Ale w tym wszystkim zwyciężamy przez tego, który nas umiłował. (38) Albowiem jestem tego pewien, że ani śmierć, ani życie, ani aniołowie, ani potęgi niebieskie, ani teraźniejszość, ani przyszłość, ani moce, (39) ani wysokość, ani głębokość, ani żadne inne stworzenie nie zdoła nas odłączyć od miłości Bożej, która jest w Chrystusie Jezusie, Panu naszym.',
                        'unordered' => 'Cóż tedy na to powiemy? Jeśli Bóg za nami, któż przeciwko nam? On, który nawet własnego Syna nie oszczędził, ale go za nas wszystkich wydał, jakżeby nie miał z nim darować nam wszystkiego? Któż będzie oskarżał wybranych Bożych? Przecież Bóg usprawiedliwia. Któż będzie potępiał? Jezus Chrystus, który umarł, więcej, zmartwychwstał, który jest po prawicy Boga, Ten przecież wstawia się za nami. Któż nas odłączy od miłości Chrystusowej? Czy utrapienie, czy ucisk, czy prześladowanie, czy głód, czy nagość, czy niebezpieczeństwo, czy miecz? Jak napisano: Z powodu ciebie co dzień nas zabijają, uważają nas za owce ofiarne. Ale w tym wszystkim zwyciężamy przez tego, który nas umiłował. Albowiem jestem tego pewien, że ani śmierć, ani życie, ani aniołowie, ani potęgi niebieskie, ani teraźniejszość, ani przyszłość, ani moce, ani wysokość, ani głębokość, ani żadne inne stworzenie nie zdoła nas odłączyć od miłości Bożej, która jest w Chrystusie Jezusie, Panu naszym.',
                        'description' => 'List do Rzymian 8:31-39, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'A to piszemy, aby radość nasza była pełna',
                        'siglum' => '1jn/1/4-9',
                        'translation' => 'bw',
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
                        'name' => 'Panie, naucz nas modlić się',
                        'siglum' => 'lk/11/1-13',
                        'translation' => 'bw',
                        'content' => '(1) A gdy On w pewnym miejscu modlił się i zakończył modlitwę, ktoś z jego uczniów rzekł do niego: Panie, naucz nas modlić się, jak i Jan nauczył uczniów swoich. (2) Wtedy rzekł do nich: Gdy się modlicie, mówcie: Ojcze nasz, któryś jest w niebie, święć się imię twoje, przyjdź Królestwo twoje, (3) Bądź wola twoja, jak w niebie tak i na ziemi, chleba naszego powszedniego daj nam na każdy dzień, (4) i odpuść nam grzechy nasze, albowiem i my odpuszczamy każdemu winowajcy swemu, i nie wódź nas na pokuszenie, ale nas zbaw ode złego. (5) I rzekł do nich: Któż z was, mając przyjaciela, pójdzie do niego o północy i powie mu: Przyjacielu, pożycz mi trzy chleby, (6) albowiem przyjaciel mój przybył do mnie, będąc w podróży, a nie mam mu co podać. (7) A tamten z mieszkania odpowie mu: Nie naprzykrzaj mi się, drzwi już są zamknięte, dzieci moje są ze mną w łóżku, nie mogę wstać i dać ci. (8) Powiadam wam, jeżeli nawet nie dlatego wstanie i da mu, że jest jego przyjacielem, to dla natręctwa jego wstanie i da mu, ile potrzebuje. (9) A ja wam powiadam: Proście, a będzie wam dane; szukajcie, a znajdziecie; kołaczcie, a otworzą wam. (10) Każdy bowiem, kto prosi, otrzymuje, a kto szuka, znajduje, a kto kołacze, temu otworzą. (11) Gdzież jest taki ojciec pośród was, który, gdy syn będzie go prosił o chleb, da mu kamień? Albo gdy będzie go prosił o rybę, da mu zamiast ryby węża? (12) Albo gdy będzie prosił o jajo, da mu skorpiona? (13) Jeśli więc wy, którzy jesteście źli, umiecie dobre dary dawać dzieciom swoim, o ileż bardziej Ojciec niebieski da Ducha Świętego tym, którzy go proszą.',
                        'unordered' => 'A gdy On w pewnym miejscu modlił się i zakończył modlitwę, ktoś z jego uczniów rzekł do niego: Panie, naucz nas modlić się, jak i Jan nauczył uczniów swoich. Wtedy rzekł do nich: Gdy się modlicie, mówcie: Ojcze nasz, któryś jest w niebie, święć się imię twoje, przyjdź Królestwo twoje, Bądź wola twoja, jak w niebie tak i na ziemi, chleba naszego powszedniego daj nam na każdy dzień, i odpuść nam grzechy nasze, albowiem i my odpuszczamy każdemu winowajcy swemu, i nie wódź nas na pokuszenie, ale nas zbaw ode złego. I rzekł do nich: Któż z was, mając przyjaciela, pójdzie do niego o północy i powie mu: Przyjacielu, pożycz mi trzy chleby, albowiem przyjaciel mój przybył do mnie, będąc w podróży, a nie mam mu co podać. A tamten z mieszkania odpowie mu: Nie naprzykrzaj mi się, drzwi już są zamknięte, dzieci moje są ze mną w łóżku, nie mogę wstać i dać ci. Powiadam wam, jeżeli nawet nie dlatego wstanie i da mu, że jest jego przyjacielem, to dla natręctwa jego wstanie i da mu, ile potrzebuje. A ja wam powiadam: Proście, a będzie wam dane; szukajcie, a znajdziecie; kołaczcie, a otworzą wam. Każdy bowiem, kto prosi, otrzymuje, a kto szuka, znajduje, a kto kołacze, temu otworzą. Gdzież jest taki ojciec pośród was, który, gdy syn będzie go prosił o chleb, da mu kamień? Albo gdy będzie go prosił o rybę, da mu zamiast ryby węża? Albo gdy będzie prosił o jajo, da mu skorpiona? Jeśli więc wy, którzy jesteście źli, umiecie dobre dary dawać dzieciom swoim, o ileż bardziej Ojciec niebieski da Ducha Świętego tym, którzy go proszą.',
                        'description' => 'Ewangelia Łukasza 11:1-13, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Modlitwa arcykapłańska Jezusa Chrystusa',
                        'siglum' => 'jn/17/1-26',
                        'translation' => 'bw',
                        'content' => '(1) To powiedział Jezus, a podniósłszy oczy swoje ku niebu, rzekł: Ojcze! Nadeszła godzina; uwielbij Syna swego, aby Syn uwielbił ciebie; (2) jak mu dałeś władzę nad wszelkim ciałem, aby dał żywot wieczny tym wszystkim, których mu dałeś. (3) A to jest żywot wieczny, aby poznali ciebie, jedynego prawdziwego Boga i Jezusa Chrystusa, którego posłałeś. (4) Ja cię uwielbiłem na ziemi; dokonałem dzieła, które mi zleciłeś, abym je wykonał; (5) a teraz Ty mnie uwielbij, Ojcze, u siebie samego tą chwałą, którą miałem u ciebie, zanim świat powstał. (6) Objawiłem imię twoje ludziom, których mi dałeś ze świata; twoimi byli i mnie ich dałeś, i strzegli słowa twojego. (7) Teraz poznali, że wszystko, co mi dałeś, od ciebie pochodzi; (8) albowiem dałem im słowa, które mi dałeś, i oni je przyjęli i prawdziwie poznali, że od ciebie wyszedłem, i uwierzyli, że mnie posłałeś. (9) Ja za nimi proszę, nie za światem proszę, lecz za tymi, których mi dałeś, ponieważ oni są twoi; (10) i wszystko moje jest twoje, a twoje jest moje i uwielbiony jestem w nich. (11) I już nie jestem na świecie, lecz oni są na świecie, a Ja do ciebie idę. Ojcze święty, zachowaj w imieniu twoim tych, których mi dałeś, aby byli jedno, jak my. (12) Dopóki byłem z nimi na świecie, zachowywałem w imieniu twoim tych, których mi dałeś, i strzegłem, i żaden z nich nie zginął, prócz syna zatracenia, by się wypełniło Pismo. (13) Ale teraz do ciebie idę i mówię to na świecie, aby mieli w sobie moją radość w pełni. (14) Ja dałem im słowo twoje, a świat ich znienawidził, ponieważ nie są ze świata, jak Ja nie jestem ze świata. (15) Nie proszę, abyś ich wziął ze świata, lecz abyś ich zachował od złego. (16) Nie są ze świata, jak i Ja nie jestem ze świata. (17) Poświęć ich w prawdzie twojej; słowo twoje jest prawdą. (18) Jak mnie posłałeś na świat, tak i ja posłałem ich na świat; (19) i za nich poświęcam siebie samego, aby i oni byli poświęceni w prawdzie. (20) A nie tylko za nimi proszę, ale i za tymi, którzy przez ich słowo uwierzą we mnie. (21) Aby wszyscy byli jedno, jak Ty, Ojcze, we mnie, a Ja w tobie, aby i oni w nas jedno byli, aby świat uwierzył, że Ty mnie posłałeś. (22) A Ja dałem im chwałę, którą mi dałeś, aby byli jedno, jak my jedno jesteśmy. (23) Ja w nich, a Ty we mnie, aby byli doskonali w jedności, żeby świat poznał, że Ty mnie posłałeś i że ich umiłowałeś, jak i mnie umiłowałeś. (24) Ojcze! Chcę, aby ci, których mi dałeś, byli ze mną, gdzie Ja jestem, aby oglądali chwałę moją, którą mi dałeś, gdyż umiłowałeś mnie przed założeniem świata. (25) Ojcze sprawiedliwy! I świat cię nie poznał, lecz Ja cię poznałem i ci poznali, że Ty mnie posłałeś; (26) i objawiłem im imię twoje, i objawię, aby miłość, którą mnie umiłowałeś, w nich była, i Ja w nich.',
                        'unordered' => 'To powiedział Jezus, a podniósłszy oczy swoje ku niebu, rzekł: Ojcze! Nadeszła godzina; uwielbij Syna swego, aby Syn uwielbił ciebie; jak mu dałeś władzę nad wszelkim ciałem, aby dał żywot wieczny tym wszystkim, których mu dałeś. A to jest żywot wieczny, aby poznali ciebie, jedynego prawdziwego Boga i Jezusa Chrystusa, którego posłałeś. Ja cię uwielbiłem na ziemi; dokonałem dzieła, które mi zleciłeś, abym je wykonał; a teraz Ty mnie uwielbij, Ojcze, u siebie samego tą chwałą, którą miałem u ciebie, zanim świat powstał. Objawiłem imię twoje ludziom, których mi dałeś ze świata; twoimi byli i mnie ich dałeś, i strzegli słowa twojego. Teraz poznali, że wszystko, co mi dałeś, od ciebie pochodzi; albowiem dałem im słowa, które mi dałeś, i oni je przyjęli i prawdziwie poznali, że od ciebie wyszedłem, i uwierzyli, że mnie posłałeś. Ja za nimi proszę, nie za światem proszę, lecz za tymi, których mi dałeś, ponieważ oni są twoi; i wszystko moje jest twoje, a twoje jest moje i uwielbiony jestem w nich. I już nie jestem na świecie, lecz oni są na świecie, a Ja do ciebie idę. Ojcze święty, zachowaj w imieniu twoim tych, których mi dałeś, aby byli jedno, jak my. Dopóki byłem z nimi na świecie, zachowywałem w imieniu twoim tych, których mi dałeś, i strzegłem, i żaden z nich nie zginął, prócz syna zatracenia, by się wypełniło Pismo. Ale teraz do ciebie idę i mówię to na świecie, aby mieli w sobie moją radość w pełni. Ja dałem im słowo twoje, a świat ich znienawidził, ponieważ nie są ze świata, jak Ja nie jestem ze świata. Nie proszę, abyś ich wziął ze świata, lecz abyś ich zachował od złego. Nie są ze świata, jak i Ja nie jestem ze świata. Poświęć ich w prawdzie twojej; słowo twoje jest prawdą. Jak mnie posłałeś na świat, tak i ja posłałem ich na świat; i za nich poświęcam siebie samego, aby i oni byli poświęceni w prawdzie. A nie tylko za nimi proszę, ale i za tymi, którzy przez ich słowo uwierzą we mnie. Aby wszyscy byli jedno, jak Ty, Ojcze, we mnie, a Ja w tobie, aby i oni w nas jedno byli, aby świat uwierzył, że Ty mnie posłałeś. A Ja dałem im chwałę, którą mi dałeś, aby byli jedno, jak my jedno jesteśmy. Ja w nich, a Ty we mnie, aby byli doskonali w jedności, żeby świat poznał, że Ty mnie posłałeś i że ich umiłowałeś, jak i mnie umiłowałeś. Ojcze! Chcę, aby ci, których mi dałeś, byli ze mną, gdzie Ja jestem, aby oglądali chwałę moją, którą mi dałeś, gdyż umiłowałeś mnie przed założeniem świata. Ojcze sprawiedliwy! I świat cię nie poznał, lecz Ja cię poznałem i ci poznali, że Ty mnie posłałeś; i objawiłem im imię twoje, i objawię, aby miłość, którą mnie umiłowałeś, w nich była, i Ja w nich.',
                        'description' => 'Ewangelia Jana 17:1-26, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Pan Bóg wysłuchuje nas',
                        'siglum' => '1jn/5/14-15',
                        'translation' => 'bw',
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
                        'name' => 'Bądź wola Twoja!',
                        'siglum' => 'mt/26/39',
                        'translation' => 'bw',
                        'content' => '(39) Potem postąpił nieco dalej, upadł na oblicze swoje, modlił się i mówił: Ojcze mój, jeśli można, niech mnie ten kielich minie; wszakże nie jako Ja chcę, ale jako Ty.',
                        'unordered' => 'Potem postąpił nieco dalej, upadł na oblicze swoje, modlił się i mówił: Ojcze mój, jeśli można, niech mnie ten kielich minie; wszakże nie jako Ja chcę, ale jako Ty.',
                        'description' => 'Ewangelia Mateusza 26:39, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Chlubimy się z ucisków',
                        'siglum' => 'ro/5/3-5',
                        'translation' => 'bw',
                        'content' => '(3) A nie tylko to, chlubimy się też z ucisków, wiedząc, że ucisk wywołuje cierpliwość, (4) a cierpliwość doświadczenie, doświadczenie zaś nadzieję; (5) a nadzieja nie zawodzi, bo miłość Boża rozlana jest w sercach naszych przez Ducha Świętego, który nam jest dany.',
                        'unordered' => 'A nie tylko to, chlubimy się też z ucisków, wiedząc, że ucisk wywołuje cierpliwość, a cierpliwość doświadczenie, doświadczenie zaś nadzieję; a nadzieja nie zawodzi, bo miłość Boża rozlana jest w sercach naszych przez Ducha Świętego, który nam jest dany.',
                        'description' => 'List do Rzymian 5:3-5, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Dosyć masz, gdy masz łaskę moją',
                        'siglum' => '2kor/12/9-10',
                        'translation' => 'bw',
                        'content' => '(9) Lecz powiedział do mnie: Dosyć masz, gdy masz łaskę moją, albowiem pełnia mej mocy okazuje się w słabości. Najchętniej więc chlubić się będę słabościami, aby zamieszkała we mnie moc Chrystusowa. (10) Dlatego mam upodobanie w słabościach, w zniewagach, w potrzebach, w prześladowaniach, w uciskach dla Chrystusa; albowiem kiedy jestem słaby, wtedy jestem mocny.',
                        'unordered' => 'Lecz powiedział do mnie: Dosyć masz, gdy masz łaskę moją, albowiem pełnia mej mocy okazuje się w słabości. Najchętniej więc chlubić się będę słabościami, aby zamieszkała we mnie moc Chrystusowa. Dlatego mam upodobanie w słabościach, w zniewagach, w potrzebach, w prześladowaniach, w uciskach dla Chrystusa; albowiem kiedy jestem słaby, wtedy jestem mocny.',
                        'description' => '2 list do Koryntian 12:9-10, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Błogosławieni jesteście, jeśli was znieważają dla imienia Chrystusowego',
                        'siglum' => '1p/4/12-19',
                        'translation' => 'bw',
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
                        'name' => 'Pójdźcie do mnie wszyscy',
                        'siglum' => 'mt/11/28-30',
                        'translation' => 'bw',
                        'content' => '(28) Pójdźcie do mnie wszyscy, którzy jesteście spracowani i obciążeni, a Ja wam dam ukojenie. (29) Weźcie na siebie moje jarzmo i uczcie się ode mnie, że jestem cichy i pokornego serca, a znajdziecie ukojenie dla dusz waszych. (30) Albowiem jarzmo moje jest miłe, a brzemię moje lekkie.',
                        'unordered' => 'Pójdźcie do mnie wszyscy, którzy jesteście spracowani i obciążeni, a Ja wam dam ukojenie. Weźcie na siebie moje jarzmo i uczcie się ode mnie, że jestem cichy i pokornego serca, a znajdziecie ukojenie dla dusz waszych. Albowiem jarzmo moje jest miłe, a brzemię moje lekkie.',
                        'description' => 'Ewangelia Mateusza 11:28-30, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Bądźcie stali, niewzruszeni, zawsze pełni zapału do pracy dla Pana',
                        'siglum' => '1kor/15/58',
                        'translation' => 'bw',
                        'content' => '(58) A tak, bracia moi mili, bądźcie stali, niewzruszeni, zawsze pełni zapału do pracy dla Pana, wiedząc, że trud wasz nie jest daremny w Panu.',
                        'unordered' => 'A tak, bracia moi mili, bądźcie stali, niewzruszeni, zawsze pełni zapału do pracy dla Pana, wiedząc, że trud wasz nie jest daremny w Panu.',
                        'description' => '1 list do Koryntian 15:58, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Czynić dobrze nie ustawajmy',
                        'siglum' => 'gal/6/9-10',
                        'translation' => 'bw',
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
                        'name' => 'Zaspokojenie wszelkiej potrzeby',
                        'siglum' => 'flp/4/19',
                        'translation' => 'bw',
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
                        'name' => 'Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni.',
                        'siglum' => 'mt/5/4',
                        'translation' => 'bw',
                        'content' => '(4) Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni.',
                        'unordered' => 'Błogosławieni, którzy się smucą, albowiem oni będą pocieszeni.',
                        'description' => 'Ewangelia Mateusza 5:4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie!',
                        'siglum' => 'jn/14/1-31',
                        'translation' => 'bw',
                        'content' => '(1) Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! (2) W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. (3) A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. (4) I dokąd Ja idę, wiecie, i drogę znacie. (5) Rzekł do niego Tomasz: Panie, nie wiemy, dokąd idziesz, jakże możemy znać drogę? (6) Odpowiedział mu Jezus: Ja jestem droga i prawda, i żywot, nikt nie przychodzi do Ojca, tylko przeze mnie. (7) Gdybyście byli mnie poznali i Ojca mego byście znali; odtąd go znacie i widzieliście go. (8) Rzekł mu Filip: Panie, pokaż nam Ojca, a wystarczy nam. (9) Odpowiedział mu Jezus: Tak długo jestem z wami i nie poznałeś mnie, Filipie? Kto mnie widział, widział Ojca; jak możesz mówić: Pokaż nam Ojca? (10) Czy nie wierzysz, że jestem w Ojcu, a Ojciec we mnie? Słowa, które do was mówię, nie od siebie mówię, ale Ojciec, który jest we mnie, wykonuje dzieła swoje. (11) Wierzcie mi, że Ja jestem w Ojcu, a Ojciec we mnie; a jeśliby tak nie było, to dla samych uczynków wierzcie. (12) Zaprawdę, zaprawdę, powiadam wam: Kto wierzy we mnie, ten także dokonywać będzie uczynków, które Ja czynię, i większe nad te czynić będzie; bo Ja idę do Ojca. (13) I o cokolwiek prosić będziecie w imieniu moim, to uczynię, aby Ojciec był uwielbiony w Synu. (14) Jeśli o co prosić będziecie w imieniu moim, spełnię to. (15) Jeśli mnie miłujecie, przykazań moich przestrzegać będziecie. (16) Ja prosić będę Ojca i da wam innego Pocieszyciela, aby był z wami na wieki - (17) Ducha prawdy, którego świat przyjąć nie może, bo go nie widzi i nie zna; wy go znacie, bo przebywa wśród was i w was będzie. (18) Nie zostawię was sierotami, przyjdę do was. (19) Jeszcze tylko krótki czas i świat mnie oglądać nie będzie; lecz wy oglądać mnie będziecie, bo Ja żyję i wy żyć będziecie. (20) Owego dnia poznacie, że jestem w Ojcu moim i wy we mnie, a Ja w was. (21) Kto ma przykazania moje i przestrzega ich, ten mnie miłuje; a kto mnie miłuje, tego też będzie miłował Ojciec i Ja miłować go będę, i objawię mu samego siebie. (22) Rzekł mu Judasz, nie Iskariota: Panie, cóż się stało, że masz się nam objawić, a nie światu? (23) Odpowiedział Jezus i rzekł mu: Jeśli kto mnie miłuje, słowa mojego przestrzegać będzie, i Ojciec mój umiłuje go, i do niego przyjdziemy, i u niego zamieszkamy. (24) Kto mnie nie miłuje, ten słów moich nie przestrzega, a przecież słowo, które słyszycie, nie jest moim słowem, lecz Ojca, który mnie posłał. (25) To wam powiedziałem z wami przebywając. (26) Lecz Pocieszyciel, Duch Święty, którego Ojciec pośle w imieniu moim, nauczy was wszystkiego i przypomni wam wszystko, co wam powiedziałem. (27) Pokój zostawiam wam, mój pokój daję wam; nie jak świat daje, Ja wam daję. Niech się nie trwoży serce wasze i niech się nie lęka. (28) Słyszeliście, że powiedziałem wam: Odchodzę i przychodzę do was. Gdybyście mnie miłowali, tobyście się radowali, że idę do Ojca, bo Ojciec większy jest niż Ja. (29) Teraz powiedziałem wam, zanim się to stanie, abyście uwierzyli, gdy się to stanie. (30) Już wiele nie będę mówił z wami, nadchodzi bowiem władca świata, ale nie ma on nic do mnie; (31) lecz świat musi poznać, że miłuję Ojca i że tak czynię, jak mi polecił Ojciec. Wstańcie, pójdźmy stąd.',
                        'unordered' => 'Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. I dokąd Ja idę, wiecie, i drogę znacie. Rzekł do niego Tomasz: Panie, nie wiemy, dokąd idziesz, jakże możemy znać drogę? Odpowiedział mu Jezus: Ja jestem droga i prawda, i żywot, nikt nie przychodzi do Ojca, tylko przeze mnie. Gdybyście byli mnie poznali i Ojca mego byście znali; odtąd go znacie i widzieliście go. Rzekł mu Filip: Panie, pokaż nam Ojca, a wystarczy nam. Odpowiedział mu Jezus: Tak długo jestem z wami i nie poznałeś mnie, Filipie? Kto mnie widział, widział Ojca; jak możesz mówić: Pokaż nam Ojca? Czy nie wierzysz, że jestem w Ojcu, a Ojciec we mnie? Słowa, które do was mówię, nie od siebie mówię, ale Ojciec, który jest we mnie, wykonuje dzieła swoje. Wierzcie mi, że Ja jestem w Ojcu, a Ojciec we mnie; a jeśliby tak nie było, to dla samych uczynków wierzcie. Zaprawdę, zaprawdę, powiadam wam: Kto wierzy we mnie, ten także dokonywać będzie uczynków, które Ja czynię, i większe nad te czynić będzie; bo Ja idę do Ojca. I o cokolwiek prosić będziecie w imieniu moim, to uczynię, aby Ojciec był uwielbiony w Synu. Jeśli o co prosić będziecie w imieniu moim, spełnię to. Jeśli mnie miłujecie, przykazań moich przestrzegać będziecie. Ja prosić będę Ojca i da wam innego Pocieszyciela, aby był z wami na wieki - Ducha prawdy, którego świat przyjąć nie może, bo go nie widzi i nie zna; wy go znacie, bo przebywa wśród was i w was będzie. Nie zostawię was sierotami, przyjdę do was. Jeszcze tylko krótki czas i świat mnie oglądać nie będzie; lecz wy oglądać mnie będziecie, bo Ja żyję i wy żyć będziecie. Owego dnia poznacie, że jestem w Ojcu moim i wy we mnie, a Ja w was. Kto ma przykazania moje i przestrzega ich, ten mnie miłuje; a kto mnie miłuje, tego też będzie miłował Ojciec i Ja miłować go będę, i objawię mu samego siebie. Rzekł mu Judasz, nie Iskariota: Panie, cóż się stało, że masz się nam objawić, a nie światu? Odpowiedział Jezus i rzekł mu: Jeśli kto mnie miłuje, słowa mojego przestrzegać będzie, i Ojciec mój umiłuje go, i do niego przyjdziemy, i u niego zamieszkamy. Kto mnie nie miłuje, ten słów moich nie przestrzega, a przecież słowo, które słyszycie, nie jest moim słowem, lecz Ojca, który mnie posłał. To wam powiedziałem z wami przebywając. Lecz Pocieszyciel, Duch Święty, którego Ojciec pośle w imieniu moim, nauczy was wszystkiego i przypomni wam wszystko, co wam powiedziałem. Pokój zostawiam wam, mój pokój daję wam; nie jak świat daje, Ja wam daję. Niech się nie trwoży serce wasze i niech się nie lęka. Słyszeliście, że powiedziałem wam: Odchodzę i przychodzę do was. Gdybyście mnie miłowali, tobyście się radowali, że idę do Ojca, bo Ojciec większy jest niż Ja. Teraz powiedziałem wam, zanim się to stanie, abyście uwierzyli, gdy się to stanie. Już wiele nie będę mówił z wami, nadchodzi bowiem władca świata, ale nie ma on nic do mnie; lecz świat musi poznać, że miłuję Ojca i że tak czynię, jak mi polecił Ojciec. Wstańcie, pójdźmy stąd.',
                        'description' => 'Ewangelia Jana 14:1-31, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Błogosławiony niech będzie Bóg i Ojciec Pana naszego Jezusa Chrystusa',
                        'siglum' => '2kor/1/3-4',
                        'translation' => 'bw',
                        'content' => '(3) Błogosławiony niech będzie Bóg i Ojciec Pana naszego Jezusa Chrystusa, Ojciec miłosierdzia i Bóg wszelkiej pociechy, (4) który pociesza nas we wszelkim utrapieniu naszym, abyśmy tych, którzy są w jakimkolwiek utrapieniu, pocieszać mogli taką pociechą, jaką nas samych Bóg pociesza.',
                        'unordered' => 'Błogosławiony niech będzie Bóg i Ojciec Pana naszego Jezusa Chrystusa, Ojciec miłosierdzia i Bóg wszelkiej pociechy, który pociesza nas we wszelkim utrapieniu naszym, abyśmy tych, którzy są w jakimkolwiek utrapieniu, pocieszać mogli taką pociechą, jaką nas samych Bóg pociesza.',
                        'description' => '2 list do Koryntian 1:3-4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Pocieszajmy się, tymi słowy, że spotkamy Pana w obłokach',
                        'siglum' => '1tes/4/13-18',
                        'translation' => 'bw',
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
                        'name' => 'Czuwajcie i módlcie się',
                        'siglum' => 'mt/26/41',
                        'translation' => 'bw',
                        'content' => '(41) Czuwajcie i módlcie się, abyście nie popadli w pokuszenie; duch wprawdzie jest ochotny, ale ciało mdłe.',
                        'unordered' => 'Czuwajcie i módlcie się, abyście nie popadli w pokuszenie; duch wprawdzie jest ochotny, ale ciało mdłe.',
                        'description' => 'Ewangelia Mateusza 26:41, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Kto mniema, że stoi, niech baczy, aby nie upadł',
                        'siglum' => '1kor/10/12-14',
                        'translation' => 'bw',
                        'content' => '(12) A tak, kto mniema, że stoi, niech baczy, aby nie upadł. (13) Dotąd nie przyszło na was pokuszenie, które by przekraczało siły ludzkie; lecz Bóg jest wierny i nie dopuści, abyście byli kuszeni ponad siły wasze, ale z pokuszeniem da i wyjście, abyście je mogli znieść. (14) Przeto, najmilsi moi, uciekajcie od bałwochwalstwa.',
                        'unordered' => 'A tak, kto mniema, że stoi, niech baczy, aby nie upadł. Dotąd nie przyszło na was pokuszenie, które by przekraczało siły ludzkie; lecz Bóg jest wierny i nie dopuści, abyście byli kuszeni ponad siły wasze, ale z pokuszeniem da i wyjście, abyście je mogli znieść. Przeto, najmilsi moi, uciekajcie od bałwochwalstwa.',
                        'description' => '1 list do Koryntian 10:12-14, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Myślcie tylko o tym, co Boże',
                        'siglum' => 'flp/4/8',
                        'translation' => 'bw',
                        'content' => '(8) Wreszcie, bracia, myślcie tylko o tym, co prawdziwe, co poczciwe, co sprawiedliwe, co czyste, co miłe, co chwalebne, co jest cnotą i godne pochwały.',
                        'unordered' => 'Wreszcie, bracia, myślcie tylko o tym, co prawdziwe, co poczciwe, co sprawiedliwe, co czyste, co miłe, co chwalebne, co jest cnotą i godne pochwały.',
                        'description' => 'List do Filipian 4:8, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Poddajcie się Bogu i przeciwstawcie diabłu',
                        'siglum' => 'jas/4/7',
                        'translation' => 'bw',
                        'content' => '(7) Przeto poddajcie się Bogu, przeciwstawcie się diabłu, a ucieknie od was.',
                        'unordered' => 'Przeto poddajcie się Bogu, przeciwstawcie się diabłu, a ucieknie od was.',
                        'description' => 'List Jakuba 4:7, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Boża sprawiedliwość',
                        'siglum' => '2p/2/9',
                        'translation' => 'bw',
                        'content' => '(9) Umie Pan wyrwać pobożnych z pokuszenia, bezbożnych zaś zachować na dzień sądu celem ukarania,',
                        'unordered' => 'Umie Pan wyrwać pobożnych z pokuszenia, bezbożnych zaś zachować na dzień sądu celem ukarania,',
                        'description' => '2 List Piotra 2:9, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Uważaj, abyś nie dał się wyprzeć z mocnego swego stanowiska',
                        'siglum' => '2p/3/15-17',
                        'translation' => 'bw',
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
                        'name' => 'Za wszystko dziękujcie',
                        'siglum' => '1tes/5/18',
                        'translation' => 'bw',
                        'content' => '(18) Za wszystko dziękujcie; taka jest bowiem wola Boża w Chrystusie Jezusie względem was.',
                        'unordered' => 'Za wszystko dziękujcie; taka jest bowiem wola Boża w Chrystusie Jezusie względem was.',
                        'description' => '1 List do Tesaloniczan 5:18, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Przez niego więc nieustannie składajmy Bogu ofiarę pochwalną',
                        'siglum' => 'hebr/13/15',
                        'translation' => 'bw',
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
                        'name' => 'Niechaj się nie trwoży serce wasze',
                        'siglum' => 'jn/14/1-4',
                        'translation' => 'bw',
                        'content' => '(1) Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! (2) W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. (3) A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. (4) I dokąd Ja idę, wiecie, i drogę znacie.',
                        'unordered' => 'Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. I dokąd Ja idę, wiecie, i drogę znacie.',
                        'description' => 'Ewangelia Jana 14:1-4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Mamy zawsze żyjącego arcykapłana, który się za nami wstawia',
                        'siglum' => 'hebr/7/25',
                        'translation' => 'bw',
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
                        'name' => 'Nie gromadźcie sobie skarbów na ziemi',
                        'siglum' => 'mt/6/19-34',
                        'translation' => 'bw',
                        'content' => '(19) Nie gromadźcie sobie skarbów na ziemi, gdzie je mól i rdza niszczą i gdzie złodzieje podkopują i kradną; (20) ale gromadźcie sobie skarby w niebie, gdzie ani mól, ani rdza nie niszczą i gdzie złodzieje nie podkopują i nie kradną. (21) Albowiem gdzie jest skarb twój - tam będzie i serce twoje. (22) Światłem ciała jest oko. Jeśli tedy oko twoje jest zdrowe, całe ciało twoje jasne będzie. (23) A jeśliby oko twoje było chore, całe ciało twoje będzie ciemne. Jeśli tedy światło, które jest w tobie, jest ciemnością, sama ciemność jakaż będzie! (24) Nikt nie może dwom panom służyć, gdyż albo jednego nienawidzić będzie, a drugiego miłować, albo jednego trzymać się będzie, a drugim pogardzi. Nie możecie Bogu służyć i mamonie. (25) Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? (26) Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? (27) A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? (28) A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. (29) A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. (30) Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? (31) Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? (32) Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. (33) Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. (34) Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'unordered' => 'Nie gromadźcie sobie skarbów na ziemi, gdzie je mól i rdza niszczą i gdzie złodzieje podkopują i kradną; ale gromadźcie sobie skarby w niebie, gdzie ani mól, ani rdza nie niszczą i gdzie złodzieje nie podkopują i nie kradną. Albowiem gdzie jest skarb twój - tam będzie i serce twoje. Światłem ciała jest oko. Jeśli tedy oko twoje jest zdrowe, całe ciało twoje jasne będzie. A jeśliby oko twoje było chore, całe ciało twoje będzie ciemne. Jeśli tedy światło, które jest w tobie, jest ciemnością, sama ciemność jakaż będzie! Nikt nie może dwom panom służyć, gdyż albo jednego nienawidzić będzie, a drugiego miłować, albo jednego trzymać się będzie, a drugim pogardzi. Nie możecie Bogu służyć i mamonie. Dlatego powiadam wam: Nie troszczcie się o życie swoje, co będziecie jedli albo co będziecie pili, ani o ciało swoje, czym się przyodziewać będziecie. Czyż życie nie jest czymś więcej niż pokarm, a ciało niż odzienie? Spójrzcie na ptaki niebieskie, że nie sieją ani żną, ani zbierają do gumien, a Ojciec wasz niebieski żywi je; czyż wy nie jesteście daleko zacniejsi niż one? A któż z was, troszcząc się, może dodać do swego wzrostu jeden łokieć? A co do odzienia, czemu się troszczycie? Przypatrzcie się liliom polnym, jak rosną; nie pracują ani przędą. A powiadam wam: Nawet Salomon w całej chwale swojej nie był tak przyodziany, jak jedna z nich. Jeśli więc Bóg tak przyodziewa trawę polną, która dziś jest, a jutro będzie w piec wrzucona, czyż nie o wiele więcej was, o małowierni? Nie troszczcie się więc i nie mówcie: Co będziemy jeść? albo: Co będziemy pić? albo: Czym się będziemy przyodziewać? Bo tego wszystkiego poganie szukają; albowiem Ojciec wasz niebieski wie, że tego wszystkiego potrzebujecie. Ale szukajcie najpierw Królestwa Bożego i sprawiedliwości jego, a wszystko inne będzie wam dodane. Nie troszczcie się więc o dzień jutrzejszy, gdyż dzień jutrzejszy będzie miał własne troski. Dosyć ma dzień swego utrapienia.',
                        'description' => 'Ewangelia Mateusza 6:19-34, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Ukórzcie się więc pod mocną rękę Bożą',
                        'siglum' => '1p/5/6-7',
                        'translation' => 'bw',
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
                        'name' => 'Albowiem tak Bóg umiłował świat',
                        'siglum' => 'jn/3/16',
                        'translation' => 'bw',
                        'content' => '(16) Albowiem tak Bóg umiłował świat, że Syna swego jednorodzonego dał, aby każdy, kto weń wierzy, nie zginął, ale miał żywot wieczny.',
                        'unordered' => 'Albowiem tak Bóg umiłował świat, że Syna swego jednorodzonego dał, aby każdy, kto weń wierzy, nie zginął, ale miał żywot wieczny.',
                        'description' => 'Ewangelia Jana 3:16, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Bóg zaś daje dowód swojej miłości ku nam',
                        'siglum' => 'ro/5/8',
                        'translation' => 'bw',
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
                        'name' => 'Wszyscy zgrzeszyli i brak im chwały Bożej',
                        'siglum' => 'ro/3/19-26',
                        'translation' => 'bw',
                        'content' => '(19) A wiemy, że cokolwiek zakon mówi, mówi do tych, którzy są pod wpływem zakonu, aby wszelkie usta były zamknięte i aby świat cały podlegał sądowi Bożemu. (20) Dlatego z uczynków zakonu nie będzie usprawiedliwiony przed nim żaden człowiek, gdyż przez zakon jest poznanie grzechu. (21) Ale teraz niezależnie od zakonu objawiona została sprawiedliwość Boża, o której świadczą zakon i prorocy, (22) i to sprawiedliwość Boża przez wiarę w Jezusa Chrystusa dla wszystkich wierzących. Nie ma bowiem różnicy, (23) gdyż wszyscy zgrzeszyli i brak im chwały Bożej, (24) i są usprawiedliwieni darmo, z łaski jego, przez odkupienie w Chrystusie Jezusie, (25) którego Bóg ustanowił jako ofiarę przebłagalną przez krew jego, skuteczną przez wiarę, dla okazania sprawiedliwości swojej przez to, że w cierpliwości Bożej pobłażliwie odniósł się do przedtem popełnionych grzechów, (26) dla okazania sprawiedliwości swojej w teraźniejszym czasie, aby On sam był sprawiedliwym i usprawiedliwiającym tego, który wierzy w Jezusa.',
                        'unordered' => 'A wiemy, że cokolwiek zakon mówi, mówi do tych, którzy są pod wpływem zakonu, aby wszelkie usta były zamknięte i aby świat cały podlegał sądowi Bożemu. Dlatego z uczynków zakonu nie będzie usprawiedliwiony przed nim żaden człowiek, gdyż przez zakon jest poznanie grzechu. Ale teraz niezależnie od zakonu objawiona została sprawiedliwość Boża, o której świadczą zakon i prorocy, i to sprawiedliwość Boża przez wiarę w Jezusa Chrystusa dla wszystkich wierzących. Nie ma bowiem różnicy, gdyż wszyscy zgrzeszyli i brak im chwały Bożej, i są usprawiedliwieni darmo, z łaski jego, przez odkupienie w Chrystusie Jezusie, którego Bóg ustanowił jako ofiarę przebłagalną przez krew jego, skuteczną przez wiarę, dla okazania sprawiedliwości swojej przez to, że w cierpliwości Bożej pobłażliwie odniósł się do przedtem popełnionych grzechów, dla okazania sprawiedliwości swojej w teraźniejszym czasie, aby On sam był sprawiedliwym i usprawiedliwiającym tego, który wierzy w Jezusa.',
                        'description' => 'List do Rzymian 3:19-26, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Nie ma ani jednego sprawiedliwego',
                        'siglum' => 'ro/3/10',
                        'translation' => 'bw',
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
                        'name' => 'Albowiem zapłatą za grzech jest śmierć.',
                        'siglum' => 'ro/6/23',
                        'translation' => 'bw',
                        'content' => '(23) Albowiem zapłatą za grzech jest śmierć, lecz darem łaski Bożej jest żywot wieczny w Chrystusie Jezusie, Panu naszym.',
                        'unordered' => 'Albowiem zapłatą za grzech jest śmierć, lecz darem łaski Bożej jest żywot wieczny w Chrystusie Jezusie, Panu naszym.',
                        'description' => 'List do Rzymian 6:23, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Tym zaś, którzy go przyjęli, dał prawo stać się dziećmi Bożymi',
                        'siglum' => 'jn/1/12',
                        'translation' => 'bw',
                        'content' => '(12) Tym zaś, którzy go przyjęli, dał prawo stać się dziećmi Bożymi, tym, którzy wierzą w imię jego,',
                        'unordered' => 'Tym zaś, którzy go przyjęli, dał prawo stać się dziećmi Bożymi, tym, którzy wierzą w imię jego,',
                        'description' => 'Ewangelia Jana 1:12, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Chrystus umarł za grzechy nasze według Pism',
                        'siglum' => '1kor/15/3-4',
                        'translation' => 'bw',
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
                        'name' => 'Oto stoję u drzwi i kołaczę',
                        'siglum' => 'rev/3/20',
                        'translation' => 'bw',
                        'content' => '(20) Oto stoję u drzwi i kołaczę; jeśli ktoś usłyszy głos mój i otworzy drzwi, wstąpię do niego i będę z nim wieczerzał, a on ze mną.',
                        'unordered' => 'Oto stoję u drzwi i kołaczę; jeśli ktoś usłyszy głos mój i otworzy drzwi, wstąpię do niego i będę z nim wieczerzał, a on ze mną.',
                        'description' => 'Apokalipsa (Objawienie) 3:20, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Każdy bowiem, kto wzywa imienia Pańskiego, zbawiony będzie',
                        'siglum' => 'ro/10/13',
                        'translation' => 'bw',
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
                        'name' => 'Bo jeśli ustami swoimi wyznasz, że Jezus jest Panem',
                        'siglum' => 'ro/10/9',
                        'translation' => 'bw',
                        'content' => '(9) Bo jeśli ustami swoimi wyznasz, że Jezus jest Panem, i uwierzysz w sercu swoim, że Bóg wzbudził go z martwych, zbawiony będziesz.',
                        'unordered' => 'Bo jeśli ustami swoimi wyznasz, że Jezus jest Panem, i uwierzysz w sercu swoim, że Bóg wzbudził go z martwych, zbawiony będziesz.',
                        'description' => 'List do Rzymian 10:9, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Kto słucha słowa mego',
                        'siglum' => 'jn/5/24',
                        'translation' => 'bw',
                        'content' => '(24) Zaprawdę, zaprawdę, powiadam wam, kto słucha słowa mego i wierzy temu, który mnie posłał, ma żywot wieczny i nie stanie przed sądem, lecz przeszedł ze śmierci do żywota.',
                        'unordered' => 'Zaprawdę, zaprawdę, powiadam wam, kto słucha słowa mego i wierzy temu, który mnie posłał, ma żywot wieczny i nie stanie przed sądem, lecz przeszedł ze śmierci do żywota.',
                        'description' => 'Ewangelia Jana 5:24, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'To napisałem wam, którzy wierzycie w imię Syna Bożego, że macie żywot wieczny',
                        'siglum' => '1jn/5/13',
                        'translation' => 'bw',
                        'content' => '(13) To napisałem wam, którzy wierzycie w imię Syna Bożego, abyście wiedzieli, że macie żywot wieczny.',
                        'unordered' => 'To napisałem wam, którzy wierzycie w imię Syna Bożego, abyście wiedzieli, że macie żywot wieczny.',
                        'description' => '1 List Jana 5:13, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Jezus jest Chrystusem, Synem Boga',
                        'siglum' => 'jn/20/31',
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
                        'name' => 'Run with patience the race that is set before us',
                        'siglum' => 'hebr/12/1',
                        'translation' => 'kjv',
                        'content' => '(1) Wherefore seeing we also are compassed about with so great a cloud of witnesses, let us lay aside every weight, and the sin which doth so easily beset [us], and let us run with patience the race that is set before us,',
                        'unordered' => 'Wherefore seeing we also are compassed about with so great a cloud of witnesses, let us lay aside every weight, and the sin which doth so easily beset [us], and let us run with patience the race that is set before us,',
                        'description' => 'List do Hebrajczyków 12:1, King James Version'
                    ]
                ]
            ]
        ]
    ];

    public function __construct(
        GroupFactory $groupFactory,
        GroupRepositoryInterface $groupRepository,
        VerseFactory $verseFactory,
        VerseRepositoryInterface $verseRepository

    ) {
        $this->groupFactory = $groupFactory;
        $this->groupRepository = $groupRepository;
        $this->verseFactory = $verseFactory;
        $this->verseRepository = $verseRepository;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies()
    {
        return [
            AddDefaultGroup::class
        ];
    }

    /**
     * @inheritDoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritDoc
     * @throws LocalizedException
     */
    public function apply()
    {
        foreach (self::CUSTOM_GROUPS_AND_VERSES as $groupsAndVerseArray) {
            $groupDataArray = $groupsAndVerseArray['data'];
            $groupName = $groupDataArray['name'];
            $groupCode = $groupDataArray['code'];
            $groupColourValue = $groupDataArray['colour_value'];
            //
            $group = $this->groupFactory->create();
            $groupData = $group
                ->getDataModel()
                ->setName($groupName)
                ->setCode($groupCode)
                ->setColourValue($groupColourValue);
            $groupData = $this->groupRepository->save($groupData);
            $groupDataId = $groupData->getGroupId();
            $versesArray = $groupsAndVerseArray['child'];
            foreach ($versesArray as $verseArray) {
                $verseDataArray = $verseArray['data'];
                $verseName = $verseDataArray['name'];
                $verseSiglum = $verseDataArray['siglum'];
                $verseTranslation = $verseDataArray['translation'];
                $verseContent = $verseDataArray['content'];
                $verseUnordered = $verseDataArray['unordered'];
                $verseDescription = $verseDataArray['description'];
                $verse = $this->verseFactory->create();
                $verseData = $verse
                    ->getDataModel()
                    ->setGroupId($groupDataId)
                    ->setName($verseName)
                    ->setSiglum($verseSiglum)
                    ->setTranslation($verseTranslation)
                    ->setContent($verseContent)
                    ->setUnordered($verseUnordered)
                    ->setDescription($verseDescription);
                $this->verseRepository->save($verseData);
            }
        }
    }
}

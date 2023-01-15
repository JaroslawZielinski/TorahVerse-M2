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
                        'siglum' => 'jk/4/12',
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
                        'siglum' => '1j/1/4-9',
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
                        'siglum' => 'rz/8/31-39',
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
                ],
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
                        'siglum' => 'rz/12/14-17',
                        'translation' => 'bw',
                        'content' => '(14) Błogosławcie tych, którzy was prześladują, błogosławcie, a nie przeklinajcie. (15) Weselcie się z weselącymi się, płaczcie z płaczącymi. (16) Bądźcie wobec siebie jednakowo usposobieni; nie bądźcie wyniośli, lecz się do niskich skłaniajcie; nie uważajcie sami siebie za mądrych. (17) Nikomu złem za złe nie oddawajcie, starajcie się o to, co jest dobre w oczach wszystkich ludzi.',
                        'unordered' => 'Błogosławcie tych, którzy was prześladują, błogosławcie, a nie przeklinajcie. Weselcie się z weselącymi się, płaczcie z płaczącymi. Bądźcie wobec siebie jednakowo usposobieni; nie bądźcie wyniośli, lecz się do niskich skłaniajcie; nie uważajcie sami siebie za mądrych. Nikomu złem za złe nie oddawajcie, starajcie się o to, co jest dobre w oczach wszystkich ludzi.',
                        'description' => 'List do Rzymian 12:14-17, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Nie mścijcie się sami, ale pozostawcie to gniewowi Bożemu',
                        'siglum' => 'rz/12/19-21',
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
                        'siglum' => 'j/14/1-4',
                        'translation' => 'bw',
                        'content' => '(1) Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! (2) W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. (3) A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. (4) I dokąd Ja idę, wiecie, i drogę znacie.',
                        'unordered' => 'Niechaj się nie trwoży serce wasze; wierzcie w Boga i we mnie wierzcie! W domu Ojca mego wiele jest mieszkań; gdyby było inaczej, byłbym wam powiedział. Idę przygotować wam miejsce. A jeśli pójdę i przygotuję wam miejsce, przyjdę znowu i wezmę was do siebie, abyście, gdzie Ja jestem, i wy byli. I dokąd Ja idę, wiecie, i drogę znacie.',
                        'description' => 'Ewangelia Jana 14:1-4, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'To powiedziałem wam, abyście we mnie pokój mieli',
                        'siglum' => 'j/16/33',
                        'translation' => 'bw',
                        'content' => '(33) To powiedziałem wam, abyście we mnie pokój mieli. Na świecie ucisk mieć będziecie, ale ufajcie, Ja zwyciężyłem świat.',
                        'unordered' => 'To powiedziałem wam, abyście we mnie pokój mieli. Na świecie ucisk mieć będziecie, ale ufajcie, Ja zwyciężyłem świat.',
                        'description' => 'Ewangelia Jana 16:33, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Usprawiedliwieni tedy z wiary, pokój mamy z Bogiem',
                        'siglum' => 'rz/5/1-5',
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
                ],
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
                        'siglum' => 'rz/12/1-21',
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
                        'siglum' => 'rz/8/31-39',
                        'translation' => 'bw',
                        'content' => '(31) Cóż tedy na to powiemy? Jeśli Bóg za nami, któż przeciwko nam? (32) On, który nawet własnego Syna nie oszczędził, ale go za nas wszystkich wydał, jakżeby nie miał z nim darować nam wszystkiego? (33) Któż będzie oskarżał wybranych Bożych? Przecież Bóg usprawiedliwia. (34) Któż będzie potępiał? Jezus Chrystus, który umarł, więcej, zmartwychwstał, który jest po prawicy Boga, Ten przecież wstawia się za nami. (35) Któż nas odłączy od miłości Chrystusowej? Czy utrapienie, czy ucisk, czy prześladowanie, czy głód, czy nagość, czy niebezpieczeństwo, czy miecz? (36) Jak napisano: Z powodu ciebie co dzień nas zabijają, uważają nas za owce ofiarne. (37) Ale w tym wszystkim zwyciężamy przez tego, który nas umiłował. (38) Albowiem jestem tego pewien, że ani śmierć, ani życie, ani aniołowie, ani potęgi niebieskie, ani teraźniejszość, ani przyszłość, ani moce, (39) ani wysokość, ani głębokość, ani żadne inne stworzenie nie zdoła nas odłączyć od miłości Bożej, która jest w Chrystusie Jezusie, Panu naszym.',
                        'unordered' => 'Cóż tedy na to powiemy? Jeśli Bóg za nami, któż przeciwko nam? On, który nawet własnego Syna nie oszczędził, ale go za nas wszystkich wydał, jakżeby nie miał z nim darować nam wszystkiego? Któż będzie oskarżał wybranych Bożych? Przecież Bóg usprawiedliwia. Któż będzie potępiał? Jezus Chrystus, który umarł, więcej, zmartwychwstał, który jest po prawicy Boga, Ten przecież wstawia się za nami. Któż nas odłączy od miłości Chrystusowej? Czy utrapienie, czy ucisk, czy prześladowanie, czy głód, czy nagość, czy niebezpieczeństwo, czy miecz? Jak napisano: Z powodu ciebie co dzień nas zabijają, uważają nas za owce ofiarne. Ale w tym wszystkim zwyciężamy przez tego, który nas umiłował. Albowiem jestem tego pewien, że ani śmierć, ani życie, ani aniołowie, ani potęgi niebieskie, ani teraźniejszość, ani przyszłość, ani moce, ani wysokość, ani głębokość, ani żadne inne stworzenie nie zdoła nas odłączyć od miłości Bożej, która jest w Chrystusie Jezusie, Panu naszym.',
                        'description' => 'List do Rzymian 8:31-39, Biblia Warszawska'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'A to piszemy, aby radość nasza była pełna',
                        'siglum' => '1j/1/4-9',
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
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
                        'name' => 'Nie porzucę cię ani cię nie opuszczę',
                        'siglum' => 'hebr/13/5-6',
                        'translation' => 'bw',
                        'content' => '(5) Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. (6) Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'unordered' => 'Niech życie wasze będzie wolne od chciwości; poprzestawajcie na tym, co posiadacie; sam bowiem powiedział: Nie porzucę cię ani cię nie opuszczę. Tak więc z ufnością możemy mówić: Pan jest pomocnikiem moim, nie będę się lękał; Cóż może mi uczynić człowiek?',
                        'description' => 'List do Hebrajczyków 13:5-6, Biblia Warszawska'
                    ]
                ],
            ]
        ],
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

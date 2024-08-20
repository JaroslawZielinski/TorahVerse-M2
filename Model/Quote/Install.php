<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Model\Quote;

use JaroslawZielinski\TorahVerse\Model\GroupManagement;
use JaroslawZielinski\TorahVerse\Model\GroupFactory;
use JaroslawZielinski\TorahVerse\Model\QuoteFactory;
use JaroslawZielinski\TorahVerse\Api\QuoteRepositoryInterface;
use JaroslawZielinski\TorahVerse\Model\Config\Source\Sliders\Language;
use Magento\Framework\Exception\LocalizedException;

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
     * @var QuoteFactory
     */
    private $quoteFactory;

    /**
     * @var QuoteRepositoryInterface
     */
    private $quoteRepository;

    private const CUSTOM_GROUPS_AND_QUOTES_PL = [
        [
            'data' => [
                'name' => 'Charles Spurgeon',
                'code' => 'CH_SP_01',
                'colour_value' => '#7a7afb',
                'is_annual' => false
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'QCH_SP_001',
                        'name' => 'Mój dowód na to, że jestem zbawiony',
                        'content' => 'Mój dowód na to, że jestem zbawiony, nie polega na tym, że głoszę kazania lub że robię to czy tamto. Cała moja nadzieja polega na tym, że Jezus Chrystus przyszedł, aby zbawić grzeszników. Jestem grzesznikiem, ufam Mu, a potem przyszedł mnie zbawić i jestem zbawiony.',
                        'author' => 'Charles Spurgeon',
                        'description' => '',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QCH_SP_002',
                        'name' => 'Uczą nas próby',
                        'content' => 'Próby uczą nas, kim jesteśmy; kopią ziemię i pozwalają nam zobaczyć, z czego jesteśmy zrobieni.',
                        'author' => 'Charles Spurgeon',
                        'description' => '',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QCH_SP_003',
                        'name' => 'Nie mamy przesądnego szacunku dla czasów i pór roku',
                        'content' => 'Nie mamy przesądnego szacunku dla czasów i pór roku. Z pewnością nie wierzymy w obecny układ kościelny zwany Bożym Narodzeniem: po pierwsze, ponieważ w ogóle nie wierzymy w mszę, ale brzydzimy się nią, czy jest odprawiana, czy śpiewana po łacinie czy po angielsku; a po drugie, ponieważ nie znajdujemy żadnego biblijnego uzasadnienia dla obchodzenia jakiegokolwiek dnia jako narodzin Zbawiciela; w konsekwencji jego przestrzeganie jest przesądem, ponieważ nie pochodzi z boskiego autorytetu.',
                        'author' => 'Charles Spurgeon',
                        'description' => '(Charles Spurgeon, Sermon on Dec. 24, 1871).',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QCH_SP_004',
                        'name' => 'Kiedy można udowodnić, że przestrzeganie Bożego Narodzenia',
                        'content' => 'Kiedy będzie można udowodnić, że obchodzenie Bożego Narodzenia, Zielonych Świątek i innych świąt papieskich zostało kiedykolwiek ustanowione przez boski statut, my również będziemy się nimi zajmować, ale nie wcześniej. Naszym obowiązkiem jest zarówno odrzucenie ludzkich tradycji, jak i przestrzeganie obrzędów Pana. W odniesieniu do każdego obrządku i rubryki pytamy: „Czy to jest prawo Boga Jakuba?”. a jeśli nie jest to jasne, nie ma to żadnej mocy u nas, którzy chodzimy w chrześcijańskiej wolności.',
                        'author' => 'Charles Spurgeon',
                        'description' => 'Charles Haddon Spurgeon (1870). “The Treasury of David: Spurgeon\'s Classic Work on the Psalms”, p.350, Kregel Academic',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QCH_SP_005',
                        'name' => 'Ci, którzy przestrzegają zwyczaju obchodzenia Bożego Narodzenia',
                        'content' => 'Ci, którzy przestrzegają zwyczaju obchodzenia Bożego Narodzenia, przestrzegają nie Biblii, ale pogańskich ceremonii.',
                        'author' => 'Charles Spurgeon',
                        'description' => '',
                        'description2' => '',
                        'description3' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'William Tyndale',
                'code' => 'WM_TN_01',
                'colour_value' => '#2323bd',
                'is_annual' => false
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'QWM_TN_001',
                        'name' => 'Nigdy nie zmieniłem ani jednej sylaby Słowa Bożego',
                        'content' => 'Wzywam Boga na świadectwo w dniu, w którym pojawimy się przed naszym Panem Jezusem, że nigdy nie zmieniłem ani jednej sylaby Słowa Bożego wbrew mojemu sumieniu, ani nie zrobiłbym tego dnia, gdyby wszystko, co jest na ziemi, czy to honor, przyjemności lub bogactwa, które mogłyby mi być dane.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale "Foxe\'s Book of Martyrs". Book by John Foxe, March 20, 1563.',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QWM_TN_002',
                        'name' => 'Bądź zimny, trzeźwy, mądry, ostrożny',
                        'content' => 'Bądź zimny, trzeźwy, mądry, ostrożny. Trzymaj się nisko nad ziemią, unikając trudnych pytań. Prawdziwie objaśniajcie Prawo i otwórzcie zasłonę Mojżesza, aby potępić wszelkie ciało i udowodnić, że wszyscy ludzie są grzesznikami, i naruszyć miłosierdzie naszego Pana Jezusa, i pozwolić zranionym sumieniom pić z Niego.',
                        'author' => 'William Tyndale',
                        'description' => '',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QWM_TN_003',
                        'name' => 'Nie było też żadnej herezji, różnorodności opinii ani sporów w tej sprawie',
                        'content' => 'Ani nie było żadnej herezji, ani rozbieżności opinii, ani sporu w tej sprawie, dopóki papież nie zebrał soboru w celu potwierdzenia tej transsubstancjacji: dlatego jest najbardziej prawdopodobne, że ta opinia pojawiła się w ostatnich dniach.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale, John Frith, Thomas Russell (1831). “The Works of the English Reformers: The works of Tyndale, (continued:) An answer to Sir Thomas More\'s Dialogue ; An exposition upon the 5th, 6th, and 7th chapters of Matthew ; An exposition upon the 1st epistle of St. John ; A pathway into the Holy Scripture ; The sacrament of baptism, and the sacrament of the body and blood of our saviour Jesus Christ”, p.540',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QWM_TN_004',
                        'name' => 'Aby zobaczyć, jak Chrystus był prorokowany i opisany w nim',
                        'content' => 'Aby zobaczyć, jak Chrystus był tam przepowiedziany i opisany, rozważcie i zaznaczcie, że koźlę lub baranek musi być bez skazy; i tak Chrystus był tylko w stosunku do całej ludzkości w oczach Boga i Jego prawa.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale (1848). “Doctrinal treatises and introductions to different portions of the Holy Scriptures”, p.354',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QWM_TN_005',
                        'name' => 'W Piśmie Świętym jest wiele rzeczy, które mają cielesne wypełnienie',
                        'content' => 'W Piśmie Świętym jest wiele rzeczy, które mają cielesne wypełnienie, nawet tam, gdzie są mówione lub czynione; a jednak mają jeszcze inne duchowe znaczenie, które ma się wypełnić długo potem w Chrystusie i Jego królestwie, a jednak nigdy nie jest znane, aż to się stanie.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale, John Frith, Thomas Russell (1831). “The Works of the English Reformers: The works of Tyndale, (continued:) An answer to Sir Thomas More\'s Dialogue ; An exposition upon the 5th, 6th, and 7th chapters of Matthew ; An exposition upon the 1st epistle of St. John ; A pathway into the Holy Scripture ; The sacrament of baptism, and the sacrament of the body and blood of our saviour Jesus Christ”, p.522',
                        'description2' => '',
                        'description3' => ''
                    ]
                ]
            ]
        ],
    ];

    private const CUSTOM_GROUPS_AND_QUOTES_EN = [
        [
            'data' => [
                'name' => 'Charles Spurgeon',
                'code' => 'CH_SP_01',
                'colour_value' => '#7a7afb',
                'is_annual' => false
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'QCH_SP_001',
                        'name' => 'My evidence that I am saved',
                        'content' => 'My evidence that I am saved does not lie in the fact that I preach, or that I do this or that. All my hope lies in this: that Jesus Christ came to save sinners. I am a sinner, I trust Him, then He came to save me, and I am saved.',
                        'author' => 'Charles Spurgeon',
                        'description' => '',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QCH_SP_002',
                        'name' => 'Trials teach us',
                        'content' => 'Trials teach us what we are; they dig up the soil, and let us see what we are made of.',
                        'author' => 'Charles Spurgeon',
                        'description' => '',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QCH_SP_003',
                        'name' => 'We have no superstitious regard for times and seasons',
                        'content' => 'We have no superstitious regard for times and seasons. Certainly we do not believe in the present ecclesiastical arrangement called Christmas: first, because we do not believe in the mass at all, but abhor it, whether it be said or sung in Latin or in English; and, secondly, because we find no Scriptural warrant whatever for observing any day as the birthday of the Savior; and, consequently, its observance is a superstition, because not of divine authority.',
                        'author' => 'Charles Spurgeon',
                        'description' => '(Charles Spurgeon, Sermon on Dec. 24, 1871).',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QCH_SP_004',
                        'name' => 'When it can be proved that the observance of Christmas',
                        'content' => 'When it can be proved that the observance of Christmas, Whitsuntide, and other Popish festivals was ever instituted by a divine statute, we also will attend to them, but not till then. It is as much our duty to reject the traditions of men, as to observe the ordinances of the Lord. We ask concerning every rite and rubric, "Is this a law of the God of Jacob?" and if it be not clearly so, it is of no authority with us, who walk in Christian liberty.',
                        'author' => 'Charles Spurgeon',
                        'description' => 'Charles Haddon Spurgeon (1870). “The Treasury of David: Spurgeon\'s Classic Work on the Psalms”, p.350, Kregel Academic',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QCH_SP_005',
                        'name' => 'Those who follow the custom of observing Christmas',
                        'content' => 'Those who follow the custom of observing Christmas, follow not the Bible but pagan ceremonies.',
                        'author' => 'Charles Spurgeon',
                        'description' => '',
                        'description2' => '',
                        'description3' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'William Tyndale',
                'code' => 'WM_TN_01',
                'colour_value' => '#2323bd',
                'is_annual' => false
            ],
            'child' => [
                [
                    'data' => [
                        'code' => 'QWM_TN_001',
                        'name' => 'I never altered one syllable of God\'s Word',
                        'content' => 'I call God to record against the day we shall appear before our Lord Jesus, that I never altered one syllable of God\'s Word against my conscience, nor would do this day, if all that is in earth, whether it be honor, pleasure, or riches, might be given me.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale "Foxe\'s Book of Martyrs". Book by John Foxe, March 20, 1563.',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QWM_TN_002',
                        'name' => 'Be cold, sober, wise, circumspect',
                        'content' => 'Be cold, sober, wise, circumspect. Keep yourself low by the ground avoiding high questions. Expound the Law truly and open the veil of Moses to condemn all flesh and prove all men sinners, and set at broach the mercy of our Lord Jesus, and let wounded consciences drink of Him.',
                        'author' => 'William Tyndale',
                        'description' => '',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QWM_TN_003',
                        'name' => 'Neither was there any heresy, or diversity of opinion, or disputing about the matter',
                        'content' => 'Neither was there any heresy, or diversity of opinion, or disputing about the matter, till the pope had gathered a council to confirm this transubstantiation: wherefore it is most likely that this opinion came up by them of latter days.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale, John Frith, Thomas Russell (1831). “The Works of the English Reformers: The works of Tyndale, (continued:) An answer to Sir Thomas More\'s Dialogue ; An exposition upon the 5th, 6th, and 7th chapters of Matthew ; An exposition upon the 1st epistle of St. John ; A pathway into the Holy Scripture ; The sacrament of baptism, and the sacrament of the body and blood of our saviour Jesus Christ”, p.540',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QWM_TN_004',
                        'name' => 'To see how Christ was prophesied and described therein',
                        'content' => 'To see how Christ was prophesied and described therein, consider and mark, how that the kid or lamb must be with out spot or blemish; and so was Christ only of all mankind, in the sight of God and of his law.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale (1848). “Doctrinal treatises and introductions to different portions of the Holy Scriptures”, p.354',
                        'description2' => '',
                        'description3' => ''
                    ]
                ],
                [
                    'data' => [
                        'code' => 'QWM_TN_005',
                        'name' => 'Many things there be in the scripture, which have a carnal fulfilling',
                        'content' => 'Many things there be in the scripture, which have a carnal fulfilling, even there where they be spoken or done; and yet have another spiritual signification, to be fulfilled long after in Christ and his kingdom, and yet never known till the thing be done.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale, John Frith, Thomas Russell (1831). “The Works of the English Reformers: The works of Tyndale, (continued:) An answer to Sir Thomas More\'s Dialogue ; An exposition upon the 5th, 6th, and 7th chapters of Matthew ; An exposition upon the 1st epistle of St. John ; A pathway into the Holy Scripture ; The sacrament of baptism, and the sacrament of the body and blood of our saviour Jesus Christ”, p.522',
                        'description2' => '',
                        'description3' => ''
                    ]
                ]
            ]
        ],
    ];

    public function __construct(
        GroupFactory $groupFactory,
        GroupManagement $groupManagement,
        QuoteFactory $quoteFactory,
        QuoteRepositoryInterface $quoteRepository
    ) {
        $this->groupFactory = $groupFactory;
        $this->groupManagement = $groupManagement;
        $this->quoteFactory = $quoteFactory;
        $this->quoteRepository = $quoteRepository;
    }

    /**
     * @throws LocalizedException
     */
    protected function install(array $groups): void
    {
        foreach ($groups as $groupsAndQuotesArray) {
            $groupDataArray = $groupsAndQuotesArray['data'];
            $groupName = $groupDataArray['name'];
            $groupCode = $groupDataArray['code'];
            $groupColourValue = $groupDataArray['colour_value'];
            $isAnnual = '' . (int)$groupDataArray['is_annual'];
            $group = null;
            try {
                $group = $this->groupManagement->getByCode($groupCode);
            } catch (\Exception $e) {
                $group = $this->groupFactory->create()->getDataModel();
            }
            $groupData = $group
                ->setName($groupName)
                ->setCode($groupCode)
                ->setColourValue($groupColourValue)
                ->setIsAnnual($isAnnual);
            if (!empty($group->getGroupId())) {
                $groupData->setGroupId($group->getGroupId());
            }
            $groupData = $this->groupManagement->save($groupData);
            $groupDataId = $groupData->getGroupId();
            $quotesArray = $groupsAndQuotesArray['child'];
            foreach ($quotesArray as $quoteArray) {
                $quoteDataArray = $quoteArray['data'];
                $quoteCode = $quoteDataArray['code'];
                $quoteName = $quoteDataArray['name'];
                $quoteContent = $quoteDataArray['content'];
                $quoteAuthor = $quoteDataArray['author'];
                $quoteDescription = $quoteDataArray['description'];
                $quoteDescription2 = $quoteDataArray['description2'];
                $quoteDescription3 = $quoteDataArray['description3'];
                $quote = null;
                try {
                    $quote = $this->quoteRepository->getByCode($quoteCode);
                } catch (\Exception $e) {
                    $quote = $this->quoteFactory->create()->getDataModel();
                }
                $quoteData = $quote
                    ->setGroupId($groupDataId)
                    ->setCode($quoteCode)
                    ->setName($quoteName)
                    ->setContent($quoteContent)
                    ->setAuthor($quoteAuthor)
                    ->setDescription($quoteDescription)
                    ->setDescription2($quoteDescription2)
                    ->setDescription3($quoteDescription3);
                if (!empty($quote->getQuoteId())) {
                    $quoteData->setQuoteId($quote->getQuoteId());
                }
                $this->quoteRepository->save($quoteData);
            }
        }
    }

    /**
     * @throws LocalizedException
     */
    public function execute(string $language = Language::LANGUAGE_PL): void
    {
        switch ($language) {
            case Language::LANGUAGE_EN:
                $this->install(self::CUSTOM_GROUPS_AND_QUOTES_EN);
                return;
            default:
            case Language::LANGUAGE_PL:
                $this->install(self::CUSTOM_GROUPS_AND_QUOTES_PL);
        }
    }
}

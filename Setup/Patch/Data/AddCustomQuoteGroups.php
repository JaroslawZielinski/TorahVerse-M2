<?php

declare(strict_types=1);

namespace JaroslawZielinski\TorahVerse\Setup\Patch\Data;

use JaroslawZielinski\TorahVerse\Api\GroupRepositoryInterface;
use JaroslawZielinski\TorahVerse\Api\QuoteRepositoryInterface;
use JaroslawZielinski\TorahVerse\Model\GroupFactory;
use JaroslawZielinski\TorahVerse\Model\QuoteFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddCustomQuoteGroups implements DataPatchInterface
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
     * @var QuoteFactory
     */
    private $quoteFactory;

    /**
     * @var QuoteRepositoryInterface
     */
    private $quoteRepository;

    private const CUSTOM_GROUPS_AND_QUOTES = [
        [
            'data' => [
                'name' => 'Charles Spurgeon',
                'code' => 'CH_SP_01',
                'colour_value' => '#7a7afb'
            ],
            'child' => [
                [
                    'data' => [
                        'name' => 'My evidence that I am saved',
                        'content' => 'My evidence that I am saved does not lie in the fact that I preach, or that I do this or that. All my hope lies in this: that Jesus Christ came to save sinners. I am a sinner, I trust Him, then He came to save me, and I am saved.',
                        'author' => 'Charles Spurgeon',
                        'description' => ''
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Trials teach us',
                        'content' => 'Trials teach us what we are; they dig up the soil, and let us see what we are made of.',
                        'author' => 'Charles Spurgeon',
                        'description' => ''
                    ]
                ],
                [
                    'data' => [
                        'name' => 'We have no superstitious regard for times and seasons',
                        'content' => 'We have no superstitious regard for times and seasons. Certainly we do not believe in the present ecclesiastical arrangement called Christmas: first, because we do not believe in the mass at all, but abhor it, whether it be said or sung in Latin or in English; and, secondly, because we find no Scriptural warrant whatever for observing any day as the birthday of the Savior; and, consequently, its observance is a superstition, because not of divine authority.',
                        'author' => 'Charles Spurgeon',
                        'description' => '(Charles Spurgeon, Sermon on Dec. 24, 1871).'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'When it can be proved that the observance of Christmas',
                        'content' => 'When it can be proved that the observance of Christmas, Whitsuntide, and other Popish festivals was ever instituted by a divine statute, we also will attend to them, but not till then. It is as much our duty to reject the traditions of men, as to observe the ordinances of the Lord. We ask concerning every rite and rubric, "Is this a law of the God of Jacob?" and if it be not clearly so, it is of no authority with us, who walk in Christian liberty.',
                        'author' => 'Charles Spurgeon',
                        'description' => 'Charles Haddon Spurgeon (1870). “The Treasury of David: Spurgeon\'s Classic Work on the Psalms”, p.350, Kregel Academic'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Those who follow the custom of observing Christmas',
                        'content' => 'Those who follow the custom of observing Christmas, follow not the Bible but pagan ceremonies.',
                        'author' => 'Charles Spurgeon',
                        'description' => ''
                    ]
                ]
            ]
        ],
        [
            'data' => [
                'name' => 'William Tyndale',
                'code' => 'WM_TN_01',
                'colour_value' => '#2323bd'
            ],
            'child' => [
                [
                    'data' => [
                        'name' => 'I never altered one syllable of God\'s Word',
                        'content' => 'I call God to record against the day we shall appear before our Lord Jesus, that I never altered one syllable of God\'s Word against my conscience, nor would do this day, if all that is in earth, whether it be honor, pleasure, or riches, might be given me.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale "Foxe\'s Book of Martyrs". Book by John Foxe, March 20, 1563.'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Be cold, sober, wise, circumspect',
                        'content' => 'Be cold, sober, wise, circumspect. Keep yourself low by the ground avoiding high questions. Expound the Law truly and open the veil of Moses to condemn all flesh and prove all men sinners, and set at broach the mercy of our Lord Jesus, and let wounded consciences drink of Him.',
                        'author' => 'William Tyndale',
                        'description' => ''
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Neither was there any heresy, or diversity of opinion, or disputing about the matter',
                        'content' => 'Neither was there any heresy, or diversity of opinion, or disputing about the matter, till the pope had gathered a council to confirm this transubstantiation: wherefore it is most likely that this opinion came up by them of latter days.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale, John Frith, Thomas Russell (1831). “The Works of the English Reformers: The works of Tyndale, (continued:) An answer to Sir Thomas More\'s Dialogue ; An exposition upon the 5th, 6th, and 7th chapters of Matthew ; An exposition upon the 1st epistle of St. John ; A pathway into the Holy Scripture ; The sacrament of baptism, and the sacrament of the body and blood of our saviour Jesus Christ”, p.540'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'To see how Christ was prophesied and described therein',
                        'content' => 'To see how Christ was prophesied and described therein, consider and mark, how that the kid or lamb must be with out spot or blemish; and so was Christ only of all mankind, in the sight of God and of his law.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale (1848). “Doctrinal treatises and introductions to different portions of the Holy Scriptures”, p.354'
                    ]
                ],
                [
                    'data' => [
                        'name' => 'Many things there be in the scripture, which have a carnal fulfilling',
                        'content' => 'Many things there be in the scripture, which have a carnal fulfilling, even there where they be spoken or done; and yet have another spiritual signification, to be fulfilled long after in Christ and his kingdom, and yet never known till the thing be done.',
                        'author' => 'William Tyndale',
                        'description' => 'William Tyndale, John Frith, Thomas Russell (1831). “The Works of the English Reformers: The works of Tyndale, (continued:) An answer to Sir Thomas More\'s Dialogue ; An exposition upon the 5th, 6th, and 7th chapters of Matthew ; An exposition upon the 1st epistle of St. John ; A pathway into the Holy Scripture ; The sacrament of baptism, and the sacrament of the body and blood of our saviour Jesus Christ”, p.522'
                    ]
                ]
            ]
        ],
    ];

    public function __construct(
        GroupFactory $groupFactory,
        GroupRepositoryInterface $groupRepository,
        QuoteFactory $quoteFactory,
        QuoteRepositoryInterface $quoteRepository
    ) {
        $this->groupFactory = $groupFactory;
        $this->groupRepository = $groupRepository;
        $this->quoteFactory = $quoteFactory;
        $this->quoteRepository = $quoteRepository;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies(): array
    {
        return [
            AddHomepageSliderWidgets::class
        ];
    }

    /**
     * @inheritDoc
     */
    public function getAliases(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     * @throws LocalizedException
     */
    public function apply()
    {
        foreach (self::CUSTOM_GROUPS_AND_QUOTES as $groupsAndQuotesArray) {
            $groupDataArray = $groupsAndQuotesArray['data'];
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
            $quotesArray = $groupsAndQuotesArray['child'];
            foreach ($quotesArray as $quoteArray) {
                $quoteDataArray = $quoteArray['data'];
                $quoteName = $quoteDataArray['name'];
                $quoteContent = $quoteDataArray['content'];
                $quoteAuthor = $quoteDataArray['author'];
                $quoteDescription = $quoteDataArray['description'];
                $quote = $this->quoteFactory->create();
                $quoteData = $quote
                    ->getDataModel()
                    ->setGroupId($groupDataId)
                    ->setName($quoteName)
                    ->setContent($quoteContent)
                    ->setAuthor($quoteAuthor)
                    ->setDescription($quoteDescription);
                $this->quoteRepository->save($quoteData);
            }
        }
    }
}

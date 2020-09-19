<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'The Art of War',
            'author_id' => '1',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'CHUAN, adding that there were two other CHUAN besides. This has brought forth a theory, that the bulk of these 82 chapters consisted of other writings of Sun Tzu -- we should call them apocryphal -- similar to the WEN TA, of which a specimen dealing with the Nine Situations [15] is preserved in the T`UNG TIEN, and another in Ho Shin\'s commentary. It is suggested that before his interview with Ho Lu, Sun Tzu had only written the 13 chapters, but afterwards composed a sort of exegesis in the form of question and answer between himself and the King. Pi I-hsun, the author of the SUN TZU HSU LU, backs this up with a quotation from the WU YUEH CH`UN CH`IU: "The King of Wu summoned Sun Tzu, and asked him questions about the art of war. Each time he set forth a chapter of his work, the King could not find words enough to praise him." As he points out, if the whole work was expounded on the same scale as in the above- mentioned fragments, the total number of chapters could not fail to be considerable. Then the numero',
            'language' => 'English',
            'isbn' => '0976072696',
            'price' => '11',
            'image' => '/covers/The Art of War.png',
            'rating' => '4.6',
            'published_at' => Carbon::now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'The Adventures of Sherlock Holmes',
            'author_id' => '2',
            'publishing_house_id' => random_int(1, 20),
            'summary' => '"Then, pray consult," said Holmes, shutting his eyes once more. "The facts are briefly these: Some five years ago, during a lengthy visit to Warsaw, I made the acquaintance of the well-known adventuress, Irene Adler. The name is no doubt familiar to you." "Kindly look her up in my index, Doctor," murmured Holmes without opening his eyes. For many years he had adopted a system of docketing all paragraphs concerning men and things, so that it was difficult to name a subject or a person on which he could not at once',
            'language' => 'English',
            'isbn' => '0192835084',
            'price' => '11',
            'image' => '/covers/The Adventures of Sherlock Holmes.png',
            'rating' => '4.3',
            'published_at' => Carbon::now(),//(1878),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'Pride and Prejudice',
            'author_id' => '3',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'Bennet," as she entered the room, "we have had a most delightful evening, a most excellent ball. I wish you had been there. Jane was so admired, nothing could be like it. Everybody said how well she looked; and Mr. Bingley thought her quite beautiful, and danced with her twice! Only think of that, my dear; he actually danced with her twice! and she was the only creature in the room that he asked a second time. First of all, he asked Miss Lucas. I was so vexed to see him stand up with her! But, however, he did not admire her at all; indeed, nobody can, you know; and he seemed quite struck with Jane as she was going down the dance. So he inquired who she was, and got introduced, and asked her for the two next. Then the two third he danced with Miss King, and the two fourth with Maria Lucas, and the two fifth with Jane again, and the two sixth with Lizzy, and the Boulanger--" "If he had had any compassion for me," cried her husband impatiently, "he would not have danced half so',
            'language' => 'English',
            'isbn' => '0553213105',
            'price' => '11',
            'image' => '/covers/Pride and Prejudice.png',
            'rating' => '4.4',
            'published_at' => Carbon::now(),//(1984),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'The Art of Public Speaking',
            'author_id' => '4',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'Training in public speaking is not a matter of externals--primarily; it is not a matter of imitation--fundamentally; it is not a matter of conformity to standards--at all. Public speaking is public utterance, public issuance, of the man himself; therefore the first thing both in time and in importance is that the man should be and think and feel things that are worthy of being given forth. Unless there be something of value within, no tricks of training can ever make of the talker anything more than a machine--albeit a highly perfected machine--for the delivery of other men\'s goods. So self-development is fundamental in our plan.',
            'language' => 'English',
            'isbn' => '1472858317',
            'price' => '11',
            'image' => '/covers/The Art of Public Speaking.png',
            'rating' => '4.4',
            'published_at' => Carbon::now(),//(1903),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'A Little Princess',
            'author_id' => '5',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'Sara Crewe, a pupil at Miss Minchin\'s London school, is left in poverty when her father dies, but is later rescued by a mysterious benefactor.',
            'language' => 'English',
            'isbn' => '1472916317',
            'price' => '11',
            'image' => '/covers/A Little Princess.png',
            'rating' => '4.5',
            'published_at' => Carbon::now(),//(1903),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'Emma',
            'author_id' => '3',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'The main character, Emma Woodhouse, is described in the opening paragraph as \'\'handsome, clever, and rich\'\' but is also rather spoiled. As a result of the recent marriage of her former governess, Emma prides herself on her ability to matchmake, and proceeds to take under her wing an illegitimate orphan, Harriet Smith, whom she hopes to marry off to the vicar, Mr Elton. So confident is she that she persuades Harriet to reject a proposal from a young farmer who is a much more suitable partner for the girl.',
            'language' => 'English',
            'isbn' => '1472910317',
            'price' => '11',
            'image' => '/covers/Emma.png',
            'rating' => '3.9',
            'published_at' => Carbon::now(),//(1815),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'Alice in Wonderland',
            'author_id' => '6',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'The story of a girl named Alice who falls down a rabbit hole into a fantasy world populated by peculiar and anthropomorphic creatures. The tale is filled with allusions to Dodgson\'s friends. The tale plays with logic in ways that have given the story lasting popularity with adults as well as children. It is considered to be one of the most characteristic examples of the genre of literary nonsense, and its narrative course and structure have been enormously influential, especially in the fantasy genre.',
            'language' => 'English',
            'isbn' => '0451527747',
            'price' => '11',
            'image' => '/covers/Alice in Wonderland.png',
            'rating' => '3.6',
            'published_at' => Carbon::now(),//(1865),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'The Arabian Nights',
            'author_id' => '7',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'A medieval Middle-Eastern literary epic which tells the story of Scheherazade, a Sassanid Queen, who must relate a series of stories to her malevolent husband, the King, to delay her execution. The stories are told over a period of one thousand and one nights, and every night she ends the story with a suspenseful situation, forcing the King to keep her alive for another day. The individual stories were created over many centuries, by many people and in many styles, and they have become famous in their own right.',
            'language' => 'English',
            'isbn' => '0375756752',
            'price' => '11',
            'image' => '/covers/The Arabian Nights.png',
            'rating' => '4.0',
            'published_at' => Carbon::now(),//(1898),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => '20,000 Leagues Under the Sea',
            'author_id' => '8',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'Sent to investigate mysterious encounters that are disrupting international shipping, Professor Aronnax, his servant Conseil, and disgruntled harpooner Ned Land are captured when their frigate is sunk during an encounter with the "monster." The submarine Nautilus and its eccentric Captain Nemo afford the professor and his companions endless fascination and danger as they\'re swept along on a yearlong undersea voyage.',
            'language' => 'English',
            'isbn' => '1402725999',
            'price' => '11',
            'image' => '/covers/20,000 Leagues Under the Sea.png',
            'rating' => '4.0',
            'published_at' => Carbon::now(),//(1870),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'At the Mountains of Madness',
            'author_id' => '9',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'On an expedition to Antarctica, Professor William Dyer and his colleagues discover the remains of ancient half-vegetable, half-animal life-forms. The extremely early date in the geological strata is surprising because of the highly-evolved features found in these previously unkown life-forms. Through a series of dark revelations, violent episodes, and misunderstandings, the group learns of Earth\'s secret history and legacy.',
            'language' => 'English',
            'isbn' => '0812974417',
            'price' => '11',
            'image' => '/covers/At the Mountains of Madness.png',
            'rating' => '4.1',
            'published_at' => Carbon::now(),//(1936),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'The Call of Cthulhu',
            'author_id' => '9',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'Three independent narratives linked together by the device of a narrator discovering notes left by a deceased relative. Piecing together the whole truth and disturbing significance of the information he possesses, the narrator\'s final line is \'\'The most merciful thing in the world, I think, is the inability of the human mind to correlate all its contents.\'\'',
            'language' => 'English',
            'isbn' => '0141182342',
            'price' => '11',
            'image' => '/covers/The Call of Cthulhu.png',
            'rating' => '4.0',
            'published_at' => Carbon::now(),//(1926),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'The $30,000 Bequest and Other Stories',
            'author_id' => '10',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'The $30,000 Bequest -- A Dog\'s Tale -- Was It Heaven? Or Hell? -- A Cure for the Blues -- The Enemy Conquered; or, Love Triumphant -- The Californian\'s Tale -- A Helpless Situation -- A Telephonic Conversation -- Edward Mills and George Benton: A Tale -- The Five Boons of Life -- The First Writing-machines -- Italian without a Master -- Italian with Grammar -- A Burlesque Biography -- How to Tell a Story -- General Washington\'s Negro Body-servant -- Wit Inspirations of the "Two-year-olds" -- An Entertaining Article -- A Letter to the Secretary of the Treasury -- Amended Obituaries -- A Monument to Adam -- A Humane Word from Satan -- Introduction to "The New Guide of the -- Conversation in Portuguese and English" -- Advice to Little Girls -- Post-mortem Poetry -- The Danger of Lying in Bed -- Portrait of King William III -- Does the Race of Man Love a Lord? -- Extracts from Adam\'s Diary -- Eve\'s Diar',
            'language' => 'English',
            'isbn' => '1406911003',
            'price' => '11',
            'image' => '/covers/The $30,000 Bequest and Other Stories.png',
            'rating' => '3.5',
            'published_at' => Carbon::now(),//(1906),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'Le Morte D\'Arthur, vol 2',
            'author_id' => '11',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'slain him, and the hermit ran away. And when Sir Launcelot might not overget him, he threw his sword after him, for Sir Launcelot might go no further for bleeding; then the hermit turned again, and asked Sir Launcelot how he was hurt. Fellow, said Sir Launcelot, this boar hath bitten me sore. Then come with me, said the hermit, and I shall heal you. Go thy way, said Sir Launcelot, and deal not with me. Then the hermit ran his way, and there he met with a good knight with many men. Sir, said the hermit, here is fast by my place the goodliest man that ever I saw, and he is sore wounded with a boar, and yet he hath slain the boar. But well I wot, said the hermit, and he be not holpen, that goodly man shall die of that wound, and that were great pity. Then that knight at the desire of the hermit gat a cart, and in that cart that knight put the boar and Sir Launcelot, for Sir Launcelot was so feeble that they might right easily deal with him; and so Sir Launcelot was brought unto the hermitage, and there the hermit healed him of his wound. But the hermit might not find',
            'language' => 'English',
            'isbn' => '1406911663',
            'price' => '11',
            'image' => '/covers/Le Morte D\'Arthur, vol 2.png',
            'rating' => '3.6',
            'published_at' => Carbon::now(),//(1470),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'Samlede Værker, Tredie Bind',
            'author_id' => '12',
            'publishing_house_id' => random_int(1, 20),
            'summary' => '',
            'language' => 'English',
            'isbn' => '1406918663',
            'price' => '11',
            'image' => '/covers/Samlede Værker, Tredie Bind.png',
            'rating' => '3.4',
            'published_at' => Carbon::now(),//(1918),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'The Communist Manifesto',
            'author_id' => '13',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'One of the world\'s most influential political manuscripts. Commissioned by the Communist League and written by communist theorists Karl Marx and Friedrich Engels, it laid out the League\'s purposes and program. It presents an analytical approach to the class struggle (historical and present) and the problems of capitalism, rather than a prediction of communism\'s potential future forms.',
            'language' => 'English',
            'isbn' => '0451527100',
            'price' => '11',
            'image' => '/covers/The Communist Manifesto.png',
            'rating' => '4.1',
            'published_at' => Carbon::now(),//(1888),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'Les Misérables',
            'author_id' => '14',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'As much a history or commentary as a work of fiction, Les Misérables is dominated by France\'s past. While the fictional aspects may seem to be an afterthought, Hugo\'s craft is apparent as he weaves multiple characters together. (Translated by Isabel F. Hapgood)',
            'language' => 'English',
            'isbn' => '0451525264',
            'price' => '11',
            'image' => '/covers/Les Misérables.png',
            'rating' => '4.6',
            'published_at' => Carbon::now(),//(1862),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'The Adventures of Tom Sawyer',
            'author_id' => '10',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'A young boy grows up in the antebellum South on the Mississippi River in the town of St. Petersberg, based on the town of Hannibal, Missouri.',
            'language' => 'English',
            'isbn' => '0140620524',
            'price' => '11',
            'image' => '/covers/The Adventures of Tom Sawyer.png',
            'rating' => '4.6',
            'published_at' => Carbon::now(),//(1876),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'Le Morte D\'Arthur, vol 1',
            'author_id' => '11',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'How Sir Launcelot was received of King Bagdemagus\' daughter, and how he made his complaint to her father. AND soon as Sir Launcelot came within the abbey yard, the daughter of King Bagdemagus heard a great horse go on the pavement. And she then arose and yede unto a window, and there she saw Sir Launcelot, and anon she made men fast to take his horse from him and let lead him into a stable, and himself was led into a fair chamber, and unarmed him, and the lady sent him a long gown, and anon she came herself. And then she made Launcelot passing good cheer, and she said he was the knight in the world was most welcome to her. Then in all haste she sent for her father Bagdemagus that was within twelve mile of that Abbey, and afore even he came, with a fair fellowship of knights with him. And when the king was alighted off his horse he yode straight unto Sir Launcelot\'s chamber',
            'language' => 'English',
            'isbn' => '0910620524',
            'price' => '11',
            'image' => '/covers/Le Morte D\'Arthur, vol 1.png',
            'rating' => '3.1',
            'published_at' => Carbon::now(),//(1470),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'The Count of Monte Cristo',
            'author_id' => '15',
            'publishing_house_id' => random_int(1, 20),
            'summary' => '',
            'language' => 'English',
            'isbn' => '0140449264',
            'price' => '11',
            'image' => '/covers/The Count of Monte Cristo.png',
            'rating' => '4.7',
            'published_at' => Carbon::now(),//(1845),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'Adventures of Huckleberry Finn',
            'author_id' => '10',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'The drifting journey of Huck and his friend Jim, a runaway slave, down the Mississippi River on their raft may be one of the most enduring images of escape and freedom in all of American literature. Although the society it satirized was already history at the time of publication, the book was quite controversial, and has remained so to this day.',
            'language' => 'English',
            'isbn' => '0142437174',
            'price' => '11',
            'image' => '/covers/Adventures of Huckleberry Finn.png',
            'rating' => '4.9',
            'published_at' => Carbon::now(),//(1884),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'The Kama Sutra of Vatsayayana',
            'author_id' => '16',
            'publishing_house_id' => random_int(1, 20),
            'summary' => 'An ancient Indian text on human sexual behavior, widely considered to be the standard work on love in the Sanskrit literature. The text was written by Vatsyayana. The author is believed to have lived sometime between the 1st to 6th centuries A.D, probably during the Gupta period',
            'language' => 'English',
            'isbn' => '1419168118',
            'price' => '11',
            'image' => '/covers/The Kama Sutra of Vatsayayana.png',
            'rating' => '4.3',
            'published_at' => Carbon::now(),//(1898),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'title' => 'The Unveiling',
            'author_id' => '17',
            'publishing_house_id' => random_int(1, 20),
            'summary' => '12th century England: Two men vie for the throne: King Stephen the usurper and young Duke Henry the rightful heir. Amid civil and private wars, alliances are forged, loyalties are betrayed, families are divided, and marriages are made.  For four years, Lady Annyn Bretanne has trained at arms with one end in mind—to avenge her brother’s murder as God has not deemed it worthy to do. Disguised as a squire, she sets off to exact revenge on a man known only by his surname, Wulfrith. But when she holds his fate in her hands, her will wavers and her heart whispers that her enemy may not be an enemy after all.',
            'language' => 'English',
            'isbn' => '1419168628',
            'price' => '11',
            'image' => '/covers/The Unveiling.jpg',
            'rating' => '3.8',
            'published_at' => Carbon::now(),//(2013),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

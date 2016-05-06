-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2016 at 08:37 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stories`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET latin1 NOT NULL,
  `thumb` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `thumb`) VALUES
(1, 'Animal Jokes', ''),
(2, 'Bar Jokes', ''),
(3, 'Blonde Jokes', ''),
(4, 'Military Jokes', ''),
(5, 'Dirty Jokes', ''),
(6, 'Ethnic Jokes', ''),
(7, 'Holiday Jokes', ''),
(8, 'Knock Knock Jokes', ''),
(9, 'People Jokes', ''),
(10, 'Food Jokes', ''),
(11, 'Insult Jokes', ''),
(12, 'Kid Jokes', ''),
(13, 'Lawyer Jokes', ''),
(14, 'Marriage Jokes', ''),
(15, 'Money Jokes', ''),
(16, 'School Jokes', ''),
(17, 'Work Jokes', ''),
(18, 'Technology Jokes', ''),
(19, 'Travel Jokes', ''),
(20, 'Religious Jokes', ''),
(21, 'Sports Jokes', ''),
(22, 'Girl Jokes', ''),
(23, 'Boy Jokes', ''),
(24, 'Crazy Jokes', '');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `title`, `content`, `cat_id`) VALUES
(1, 'A BEAR WALKS INTO A BAR...', 'A bear walks into a bar and says to the bartender, "I''ll have a pint of beer and a.......... packet of peanuts."\r\nThe bartender asks, "Why the big pause?"', 1),
(2, 'ANIMAL ROTATION', 'Q: What animal rotates at least 200 times after it dies?\r\nA: A rotisserie chicken.', 1),
(3, 'BILL DWYER: PETTING ZOO', 'you want to discard your child''s clothing in a goat''s stomach.', 1),
(4, 'BIRDMAN', 'Little girl: ', 1),
(5, 'BROKEN CAGE', 'Q: What did the bird say after his cage fell apart?\r\nA: &amp;amp;quot;Cheap, cheap!&amp;amp;quot;', 1),
(7, 'CAREFUL WHAT YOU KICK', 'A boy asks his mother for breakfast. She says, "Not until you feed the animals."\r\n\r\nThe boy goes outside and says to the chicken, "I don''t feel like feeding you today." So he kicks the chicken. He does the same with the cow and the pig.\r\n\r\nThe boy goes back into the house and tells his mother that he''s hungry. His mother says, "I saw you kick the chicken, so you''re not getting any eggs, I saw you kick the cow, so you''re not getting any milk, and I saw kick the pig, so you''re not getting any bacon."\r\n\r\nJust then the boy''s father walks down the steps, trips and kicks the cat. The boy says, "Mom, should I tell him?"', 1),
(8, 'CARROTS', 'Q: How do you know that carrots are good for your eyesight?\r\nA: Have you ever seen a rabbit with glasses?', 1),
(9, 'CASH LEVY: LIONS', 'Lions sleep 85% of their day, have sex up to 55 times a day. That''s what we should be shooting for. I would love to get that much sleep.', 1),
(10, 'CATCHING A POLAR BEAR', 'Q: How do you catch a polar bear?\r\nA: You make a hole in the ice and line it with peas. When the bear goes in to take a pea, you kick him in the ice hole.', 1),
(11, 'COW FUN', 'Q: What do cows read in the morning?\r\nA: The daily moos.', 1),
(12, 'COW RIDDLE', 'A black cow was standing in the middle of the road. A man was hauling ass around a corner with no headlights on. He slams on the brakes at just the right time to miss the cow. How did the guy see the cow?\r\nIt was daytime.', 1),
(13, 'COWBOY TALKS TO THE ANIMALS', 'A cowboy passes by a ranch and strikes up a conversation with the rancher sitting by the gate.\r\n\r\nThe cowboy asks the rancher, "Mind if I talk to your dog over there?"\r\n\r\n"Damn fool, don''t you know dogs can''t talk?"\r\n\r\nThe cowboy replies, "So what''s the harm?"\r\n\r\nThe rancher shrugs, "Go right ahead."\r\n\r\nThe cowboy ambles up to the dog and says, "Howdy!" The dog replies, "Hello."\r\n\r\nThe rancher''s eyes pop wide open.\r\n\r\nThe cowboy continues, "Does your master here treat you alright?"\r\n\r\n"Sure does. He feeds me, lets me sleep inside, and every day he takes me to the lake."\r\n\r\nThe cowboy asks the shocked rancher, "Mind if I talk to your horse over there?"\r\n\r\nThe rancher replies, "Now, I don''t know what you''re up to, but I know for a fact that horses can''t talk."\r\n\r\n"Well then, what''s the harm?"\r\n\r\n"Go right ahead," says the rancher.\r\n\r\nThe cowboy says to the horse, "Hello." The horse replies, "Hello."\r\n\r\nThe rancher''s jaw drops.\r\n\r\nThe cowboy asks, "Your owner here treat you OK?"\r\n\r\n"Sure," replies the horse, tossing his mane. "He rides me every day, brushes me down, feeds me good, and he keeps me in the barn out of the bad weather."\r\n\r\nThe cowboy looks satisfied and turns to the rancher, "Are those your sheep over there?"\r\n\r\nThe rancher looks alarmed and stammers, "Listen -- them sheep out there, they''re -- they''re nothing but a bunch of liars!"', 1),
(14, 'DANGEROUS &amp;amp; SWINGS', 'Q: What''s dangerous and swings from trees?\r\nA: A monkey with a chainsaw.', 1),
(15, 'DEAF ROVER', 'Q: What do you call a dog wearing ear muffs?\r\nA: Anything you want -- he can''t hear you.', 1),
(17, 'Adding Insult to Introduction', 'Some Texans are mingling at the bar when an Oxford graduate walks in. &ldquo;Howdy, stranger,&rdquo; one Texan says. &ldquo;Where are you from?&rdquo;\r\n\r\nThe Oxford graduate answers, &ldquo;I come from a place where we do not end our sentences in prepositions.&rdquo;\r\n\r\n&ldquo;Oh, I&rsquo;m sorry,&rdquo; replies the Texan. &ldquo;Where are you from, jackass?&rdquo;', 2),
(18, 'Infinitely Many Mathematiciansâ€¦', 'Infinitely many mathematicians walk into a bar. The first says, â€œIâ€™ll have a beer.â€ The second says, â€œIâ€™ll have half a beer.â€ The third says, â€œIâ€™ll have a quarter of a beer.â€ Before anyone else can speak, the barman fills up exactly two glasses of beer and serves them. â€œCome on, now,â€ he says to the group, â€œYou guys have got to learn your limits.â€', 2),
(19, 'An Amnesiac Walks Intoâ€¦', 'An amnesiac walks into a bar. He goes up to a beautiful blonde and says, â€œSo, do I come here often?â€', 2),
(20, 'Two Cartons of Yogurt', 'Two cartons of yogurt walk into a bar. The bartender, who is a tub of cottage cheese, says to them, â€œWe donâ€™t serve your kind in here.â€ One of the yogurt cartons says to him, â€œWhy not? Weâ€™re cultured individuals.', 2),
(21, 'This Cowboy Walks Into', 'This cowboy walks into a bar and orders a beer. His hat is made of brown wrapping paper, his shirt and vest are made of waxed paper, and his chaps, pants, and boots are made of tissue paper. Pretty soon they arrest him for rustling.', 2),
(22, 'A Pair of Jumper Cables', 'A pair of jumper cables walk into a bar and ask for a drink. The bartender says, â€œOK, but I donâ€™t want you starting anything in here.â€', 2),
(23, 'A Mushroom Walks Into', 'A mushroom walks into a bar and orders a drink. The bartender tells him to get out. The mushroom says, â€œWhy? Iâ€™m a fun-guy.â€', 2),
(24, 'A BLONDE & HER THERMOS', 'A blonde notices that her coworker has a thermos, so she asks him what it''s for. He responds, "It keeps hot things hot and cold things cold."\r\n\r\nThe blonde immediately buys one for herself. The next day, she goes to work and proudly displays it.\r\n\r\nHer coworker asks, "What do you have in it?"\r\n\r\nShe replies, "Soup and ice cream."', 3),
(25, '911', 'Q: Why can''t a blonde dial 911?\r\nA: She can''t find the eleven.', 3),
(26, 'A BLONDE THEFT', 'A blonde goes to the library to get a book. A few days later, she comes back and says to librarian at the counter, "This book was very boring. It had too many characters and too many numbers, so I would like to return it."\r\nThe librarian says to her coworkers, "So here''s the person who took our phone book!"', 3),
(27, 'A LITTLE VOICE', 'A man was mowing his lawn when he heard his neighbor, who happened to be a blonde, come out of her house. She opened her mailbox, looked inside and slammed it shut. She stomped her foot and went back inside. The man thought ''''how weird.''''\r\nA few minutes passed and sure enough, the blonde came out of her house again, checked her mail box, stamped her foot and went back inside. The man stopped mowing and checked her mailbox to see what was so wrong with it. After seeing nothing, he went back to mowing just shrugging his shoulders.\r\nAs soon as he heard her coming out again, he shut off his mowing machine and went up to her. ''''What in the world are you doing, coming out here every five minutes?''''\r\nThe blonde looked up at the man and said, ''''Well, you see, there''s this little voice in my house that keeps on saying, ''You''ve got mail,'' but when I come out here to check, I don''t have any.''''', 3),
(28, 'BLONDE AT THE UN', 'Q: What did the blonde say when she was offered a position at the UN?\r\nA: "Would that be a missionary position?"', 3),
(29, 'BLONDE & HOUSE', 'Q: What''s worse than a redhead and a brunette trying to build a house underwater?\r\nA: A blonde trying to set fire to it.', 3),
(30, 'Fishing For Whiskey', 'â€œPoor Old fool,â€ thought the well-dressed gentleman as he watched an old man fish in a puddle outside a pub. So he invited the old man inside for a drink. As they sipped their whiskeys, the gentleman thought heâ€™d humor the old man and asked, â€œSo how many have you caught today?â€\r\n\r\nThe old man replied, â€œYouâ€™re the eighth.â€', 2),
(31, 'Fishing For Whiskey', 'â€œPoor Old fool,â€ thought the well-dressed gentleman as he watched an old man fish in a puddle outside a pub. So he invited the old man inside for a drink. As they sipped their whiskeys, the gentleman thought heâ€™d humor the old man and asked, â€œSo how many have you caught today?â€\r\n\r\nThe old man replied, â€œYouâ€™re the eighth.â€', 2),
(34, 'asfasf', '&amp;ldquo;Poor Old fool,&amp;rdquo; thought the well-dressed gentleman as he watched an old man fish in a puddle outside a pub. So he invited the old man inside for a drink. As they sipped their whiskeys, the gentleman thought he&amp;rsquo;d humor the old man and asked, &amp;ldquo;So how many have you caught today?&amp;rdquo;\r\n\r\nThe old man replied, &amp;ldquo;You&amp;rsquo;re the eighth.&amp;rdquo;', 2),
(38, 'DEMO 2', '&ldquo;Poor Old fool,&rdquo; thought the well-dressed gentleman as he watched an old man fish in a puddle outside a pub. So he invited the old man inside for a drink. As they sipped their whiskeys, the gentleman thought he&rsquo;d humor the old man and asked, &ldquo;So how many have you caught today?&rdquo;\r\n\r\nThe old man replied, &ldquo;You&rsquo;re the eighth.&rdquo;\r\nagagfa\r\n''asfasf''', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 09:23 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutor_blog_core`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `fname`, `lname`, `email_address`, `password`, `created_date`, `status`) VALUES
(1, 'Dhiraj', 'Saini', 'dhiraj@ymail.com', '4297f44b13955235245b2497399d7a93', '2018-01-09 12:58:25', 'active'),
(2, 'David', 'Goyal', 'jaswant23@nair.ac.in', '4297f44b13955235245b2497399d7a93', '2018-01-09 20:23:28', 'active'),
(3, 'Ragini', 'Bhardwaj', 'chinmay.subramanian@loyal.in', '4297f44b13955235245b2497399d7a93', '2018-01-09 22:00:02', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `author_id` int(11) NOT NULL,
  `posted_date` datetime NOT NULL,
  `last_edited_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `author_id`, `posted_date`, `last_edited_date`) VALUES
(1, 'All The Reasons Youâ€™ll Love Bone Broth (Plus A Recipe)', 'Bone broth is an intimidating culinary concept to wrap your head around at first. We canâ€™t blame you, since the word â€œboneâ€ outside hot wings or steak may seem a little weird. Yet, this traditional broth has been around for centuries and many tout its benefits. \r\n\r\nToday, weâ€™re going to dive in and cover some of the benefits of bone broth to prove while it may sound less-than-appealing at first, itâ€™s full of tasty goodness. \r\n\r\nFirst off, this broth is full of collagen. Collagen is a beneficial substance for your body since its the foundation for connective tissues. The collagen that you get from consuming the broth is from the cartilage of the bones inside. \r\n\r\nNext, the broth contains glycine. This is an amino acid that plays a role in the muscle and cognitive regions of the body. \r\n\r\nLastly, thereâ€™s the fact the broth is full of vitamins and minerals which are a great way to get more of your daily servings of needed nutrients in a delicious way! Some found within the broth are: magnesium, and calcium. \r\n\r\nHopefully those few points make you more hopeful about trying the broth. For those that are interested in ingesting its benefits, below youâ€™ll find a quick recipe to get started with!', 1, '2018-01-09 01:08:09', '2018-01-09 20:22:25'),
(2, 'Soup Recipes With Only 5 Ingredients That Will Warm You Up', 'There are some things in life that just go together; chocolate with strawberries, bread with cheese, and soup with cold weather. After all, these matches are classic, and universal favorites. Is there anything more comforting than a big cup of soup after a day of walking about in cold weather? It warms up your body and provides you with nutrients you need. \r\n\r\nWhile soup in a can is a go-to for many since it’s seen as more convenient than spending hours slaving over homemade soup, what many don’t know is there are quick tricks to making it! Today we bring you two recipes that have only 5 ingredients. This way you can pass on the canned stuff and enjoy some home cooked goodness. ', 2, '2018-01-09 01:12:12', '0000-00-00 00:00:00'),
(3, 'Brain Fog: Natural Ways For You To Rid It Today', 'Brain Fog, is a phenomenon that most of us are familiar with. Itâ€™s the sensation of something being off. Whether that be your concentration on a task at hand, recall of a previous conversation, or a general feeling of head fatigue. For most of us itâ€™s an occasional occurrence, happening when weâ€™ve eaten too large a meal or slept too little. Yet, there are some cases where brain Fog happens regularly, for this, a change in diet may be good. \r\n\r\nFirst, check your eating habits. Are you ingesting more sugars than you are vegetables? Sleeping minimal amounts? Not exercising? These are all factors that can lead to a less-than-desired mindset. The quickest way to fix the issue, is to take small steps. Below weâ€™ve gathered a few natural ways to help ease brain fog. Keep in mind, this doesnâ€™t substitute seeing a doctor if you have chronic symptoms.\r\nGreen Leafy Vegetables \r\n\r\nVegetables are full of good things that your body needs, but green vegetables in particular are high in vitamins, and minerals, like iron. They provide the body energy to carry on doing what it does best. In fact, Spinach contains Lutein, which is an important substance found in the brain. Eating better foods is one way to help kick-start better mood. \r\nTurmeric\r\n\r\nA traditional spice, Turmeric is popular for its myriads uses, and benefits. Itâ€™s been used for thousands of years in traditional wellness practices like Ayurveda. In fact, its naturally occurring compound curcumin, is known for its proactive role in the body. While working inside is a plus, the kick this spice gives when eaten, is a sure way to open your mind up. \r\nRosemary Essential Oil \r\n\r\nSpeaking of powerful scents, rosemary essential oil is one aroma that can lift your spirits, and clear your mind. Diffuse some our Rosemary 100% Pure Essential Oil and enjoy the positive scent waft through your room.', 1, '2018-01-09 02:17:27', '2018-01-09 20:20:16'),
(4, 'These Are The Top 6 Wellness Trends Coming For 2018', 'Can you believe that the end of 2017 is already here? Weâ€™re still in complete denial, but while we work out our Freudian defense tactics, we want to gift you a guide to the wellness trends coming in 2018. \r\n\r\nFirst, letâ€™s recap on this past year. There was a massive movement towards more natural, at-home skincare. Also, people began to focus on the benefits of keeping a journal and meditating daily. There was also a positive shift towards meal prepping, and people incorporating a more plant-based diet into their lives. All great, exciting happenings.\r\n\r\nNow that weâ€™ve had our nostalgic moment, letâ€™s get to it. Below youâ€™ll find the top trends that youâ€™ll want to follow come this new year. Hereâ€™s to new starts!', 2, '2018-01-09 01:16:24', '2018-01-09 20:20:59'),
(5, 'Super Easy Mug Muffin Recipes That Will Be Your New Fav', 'Baking is fun and all, but sometimes it just takes too much time. One sure-fire way to get your muffin fix on is with these following super easy mug muffin recipes! \r\n\r\nThe best part is that these muffins are portion-perfect. As in, one serving wonâ€™t leave you feeling bloated, but will leave you full. That is a combination that weâ€™re all for. Plus, thereâ€™s so much versatility. If youâ€™re in the mood for a raspberry pineapple muffin (hey, we donâ€™t judge your cravings) you can have it in no time. The base recipe stays basically the same for all the following recipes so let the inner chef inside of you shine!', 1, '2018-01-09 18:47:53', '2018-01-09 20:19:22'),
(6, 'Spruce Up Shower Time With These Paraben-Free Shampoos!', 'Searching for a shampoo that cleans, and doesnâ€™t contain any yucky added fragrance is hard. Trust us, we know. Thatâ€™s why weâ€™ve created our own! Our line of Piping Rock Shampoos targets all sorts of your hair needs â€” from giving it the appearance of being thicker to adding some sheen, we have you covered. \r\n\r\nGone are the days of browsing the aisles of Ulta or Sephora on the hunt for something that works. Today we bring a roundup of our favorite ones and a bit on each.\r\n\r\nBiotin is hairâ€™s best friend. Itâ€™s a necessary B Vitamin that aids the body in myriad ways. If youâ€™re looking for a shampoo that will add a little oomph into your â€˜do, and give your hair a bit of volume, youâ€™ll definitely enjoy this product!\r\n\r\nPronounced â€œho-hobaâ€, this oil is a natural emollient that is derived from the Jojoba plant. The nourishing properties of this oil, when in shampoo form, gives the hair a natural bounce that is full of shine. So, if you want some strut-worthy hair, youâ€™ll probably love this shampoo especially this season when dryness is a top concern!', 2, '2018-01-09 18:49:25', '2018-01-09 20:17:24'),
(7, 'Soup Recipes With Only 5 Ingredients That Will Warm You Up', 'Soup Recipes With Only 5 Ingredients That Will Warm You Up\r\nJanuary 04, 2018\r\nby Piping Rock\r\ndinner, DIY, Health, Healthy Eating, Healthy Living, Homemade, How To, Piping Rock Health, quick recipe, soup, Winter, Yummy\r\n0 Comments\r\nSoup Recipes With Only 5 Ingredients That Will Warm You Up\r\n\r\nThere are some things in life that just go together; chocolate with strawberries, bread with cheese, and soup with cold weather. After all, these matches are classic, and universal favorites. Is there anything more comforting than a big cup of soup after a day of walking about in cold weather? It warms up your body and provides you with nutrients you need. \r\n\r\nWhile soup in a can is a go-to for many since itâ€™s seen as more convenient than spending hours slaving over homemade soup, what many donâ€™t know is there are quick tricks to making it! Today we bring you two recipes that have only 5 ingredients. This way you can pass on the canned stuff and enjoy some home cooked goodness. \r\nClassic Tomato Soup\r\n\r\nAn easy recipe for a staple soup. Pair with grilled cheese and eat as much as your heart desires (and stomach will allow). \r\n\r\nWhat You Need â€“ \r\n1 Can Whole Tomatoes \r\n2 Tbsp. 100% Organic Ghee (better than butter)\r\n1 Cup Broth Stock (your choice)\r\n1/4 Cup Basil Leaf Cut & Sifted Organic\r\n\r\n1 Chopped Garlic Clove\r\nHow To Make â€“ \r\nMelt the Ghee in a large pot. \r\nBlend your canned tomatoes to make a paste. \r\nPlace garlic in the pot to cook.\r\nThen pour the blended tomatoes into the pot, and add your broth of choice. \r\nLet sit until it bubbles gently. \r\nStir in the basil.\r\n\r\nServe!\r\nButternut Squash Soup \r\n\r\nA soup for the season! Keep warm and channel the flavors of winter. \r\n\r\nWhat You Need â€“ \r\n2 Tbsp. \r\n1 Medium Butternut Squash \r\n3 Cups Broth of Choice\r\n1 Yellow Onion\r\nDesired spices for taste \r\n\r\nHow To Make â€“ \r\n\r\nFirst, cut and bake your squash. Do this by cubing the vegetable, placing in 400 degree oven, and allow it to caramelize. About 45 minutes. \r\n\r\nAs this bakes, heat the coconut oil and add the *chopped* onion.\r\nNow, scoop the squash and place in the pot with onions.\r\nAdd in the broth. \r\nLet simmer for 8 minutes.\r\nTransfer the liquid to a blender.\r\nOnce smooth, serve!', 1, '2018-01-09 20:02:53', '2018-01-09 21:58:16'),
(8, 'You Should Make This Easy Gingerbread Lip Scrub, Tonight', 'With the holidays, comes the scent of gingerbread. The nostalgic mix of cinnamon, clove, ginger, and nutmeg. Rich and overflowing with aromaâ€“whether the spice blend is placed in cookies, or drinks, itâ€™s evidently delicious. \r\n\r\nBut, did you know that the spices involved in this bakerâ€™s favorite are actually transferable to other areas of your life, and can be beneficial to your skin? To celebrate the time of gingerbread houses, today weâ€™re making a simple 4 ingredient Gingerbread Spice Lip Scrub. \r\n\r\nLetâ€™s first cover why we chose a lip scrub, instead of a lip balm. Scrubs are great to exfoliate the skin. Made with simple ingredients, they gently remove layers of dry, damaged skin. The result? Smooth, and fresh lips. Usually winter requires extra steps to ensure our lips donâ€™t get too affected by the weather, and scrubbing is one way to start.', 3, '2018-01-09 22:02:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings_config`
--

CREATE TABLE IF NOT EXISTS `settings_config` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `description` text NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `settings_config`
--

INSERT INTO `settings_config` (`id`, `title`, `value`, `description`, `status`) VALUES
(1, 'SOFTWARE_MODE', 'demo', '', 'active'),
(2, 'COMPANY_NAME', 'Piping Rock Blog', '', 'active'),
(3, 'COMPANY_URL', 'http://localhost/tutor/core/', 'E.g: http://example.com/', 'active'),
(4, 'WEBSITE_URL', 'http://localhost/tutor/core/', 'E.g: http://example.com/sample/', 'active'),
(5, 'NAME_TAG', 'blog', 'E.g.: bm, ideal, fab', 'active'),
(6, 'WEBSITE_COPYRIGHT_TAIL', 'All Rights Reserved.', 'E.g.: Company Name Pte Ltd. All rights reserved.', 'active'),
(16, 'SEO_FRIENDLY_URL', 'inactive', 'SEO Friendly url, Let it be activate always.', 'active'),
(17, 'LANGUAGE_CHINESE', 'yes', 'Activate Chinese Language', 'active'),
(18, 'DEVELOPED_BY', 'Developed by <a href="#a" target="_blank">Jino Kuriakose</a>', '', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

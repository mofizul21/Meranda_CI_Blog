-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 10:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meranda`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `catname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catname`) VALUES
(3, 'politics'),
(4, 'health'),
(5, 'programmings'),
(6, 'codeigniter'),
(8, 'Laravel');

-- --------------------------------------------------------

--
-- Table structure for table `logofav`
--

CREATE TABLE `logofav` (
  `id` int(11) NOT NULL,
  `logo` varchar(60) NOT NULL,
  `favicon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logofav`
--

INSERT INTO `logofav` (`id`, `logo`, `favicon`) VALUES
(1, 'Recipe', 'favicon.ico');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `description`, `slug`) VALUES
(1, 'About', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero praesentium ratione facilis nemo beatae libero, distinctio atque, mollitia ab voluptatibus sequi aperiam voluptatum possimus provident. Officia reprehenderit obcaecati saepe eum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero praesentium ratione facilis nemo beatae libero, distinctio atque, mollitia ab voluptatibus sequi aperiam voluptatum possimus provident. Officia reprehenderit obcaecati saepe eum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero praesentium ratione facilis nemo beatae libero, distinctio atque, mollitia ab voluptatibus sequi aperiam voluptatum possimus provident. Officia reprehenderit obcaecati saepe eum.', 'about'),
(3, 'Video', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero praesentium ratione facilis nemo beatae libero, distinctio atque, mollitia ab voluptatibus sequi aperiam voluptatum possimus provident. Officia reprehenderit obcaecati saepe eum.', 'video'),
(6, 'Privacy Policy', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est error delectus veniam commodi, ex perspiciatis odit quasi totam libero quidem earum vero provident. Hic incidunt quibusdam iusto. Voluptatibus, provident doloremque?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est error delectus veniam commodi, ex perspiciatis odit quasi totam libero quidem earum vero provident. Hic incidunt quibusdam iusto. Voluptatibus, provident doloremque?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est error delectus veniam commodi, ex perspiciatis odit quasi totam libero quidem earum vero provident. Hic incidunt quibusdam iusto. Voluptatibus, provident doloremque?\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Est error delectus veniam commodi, ex perspiciatis odit quasi totam libero quidem earum vero provident. Hic incidunt quibusdam iusto. Voluptatibus, provident doloremque?', 'privacy-policy');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `category_id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `slug`, `category_id`, `author`, `created_at`) VALUES
(1, 'A rolling stone gathers no moss', '<p>Surprisingly, there is a very vocal faction of the design community that wants to see filler text banished to the original sources from whence it came. Perhaps not surprisingly, in an era of endless quibbling, there is an equally vocal contingent of designers leaping to defend the use of the time-honored tradition of greeking. The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point you&rsquo;ll end up reviewing and negotiating the content itself and not the design. This will just slow down the design process. Design first, with real content in mind (of course!), but don&rsquo;t drop in the real content until the design is well on its way. Using filler text avoids the inevitable argumentation that accompanies the use of real content in the design process. Those opposed to using filler text of any sort counter by saying: The ultimate purpose of any digital product, whether a website, app, or H', 'img_v_1.jpg', 'a-rolling-stone-gathers-no-moss', 3, 'Mofizul', '2019-12-26 04:20:48'),
(2, 'An ounce of protection is worth a pound of cure', '<p>Using real content during design can distract designers and design review teams alike away from the design, and insisting on always using publication-ready content can be a real drag on the design process. On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesn&rsquo;t create too much distraction. Relax and do whatever fits with your design process. Don&rsquo;t set a lot of restrictive hard-and-fast rules. Use filler text where it helps your design process, but use real content if you&rsquo;ve got it, as long as it doesn&rsquo;t distract and slow down your design process. Design is an evolutionary process, and filler text is just one tool in your progress-pushing arsenal. Use it whe', 'img_v_2.jpg', 'an-ounce-of-protection-is-worth-a-pound-of-cure', 3, 'Mofizul', '2019-12-26 04:39:09'),
(3, 'An idle brain is the devil’s workshop', '<p>On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesn&rsquo;t create too much distraction. Relax and do whatever fits with your design process. Don&rsquo;t set a lot of restrictive hard-and-fast rules.&nbsp;On the other hand, if you use poorly formatted filler text you may get a completely false sense of how your design will interact with real content. We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesn&rsquo;t create too much distraction. Relax and do whatever fits with your design process. Don&rsquo;t set a lot of restr', 'img_v_3.jpg', 'an-idle-brain-is-the-devils-workshop', 5, 'Mofizul', '2019-12-26 05:16:04'),
(4, 'An apple a day keeps the doctor away', '<p>The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point you&rsquo;ll end up reviewing and negotiating the content itself and not the design. This will just slow down the design process. Design first, with real content in mind (of course!), but don&rsquo;t drop in the real content until the design is well on its way. Using filler text avoids the inevitable argumentation that accompanies the use of real content in the design process.</p>\r\n\r\n<p>Those opposed to using filler text of any sort counter by saying: The ultimate purpose of any digital product, whether a website, app, or HTML email, is to showcase real content, not to showcase great design. You can&rsquo;t get a true sense for how your content plays with your design unless you use the real thing!</p>\r\n', 'demo1_1500x1000.jpg', 'an-apple-a-day-keeps-the-doctor-away', 6, 'Mofizul', '2019-12-26 05:39:34'),
(7, 'Among the blind the one-eyed man is king', '<p>We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, and where it doesn&rsquo;t create too much distraction. Relax and do whatever fits with your design process. Don&rsquo;t set a lot of restrictive hard-and-fast rules. Use filler text where it helps your design process, but use real content if you&rsquo;ve got it, as long as it doesn&rsquo;t distract and slow down your design process. Design is an evolutionary process, and filler text is just one tool in your progress-pushing arsenal. Use it where it makes sense to use it, and pull it once the natural process indicates that it&rsquo;s time to roll out a descendant built with real content.</p>\r\n\r\n<p>We propose a compromise: Only use filler text that has been edited for length and format to match the characteristics of real content as closely as possible, and use real content where possible, an', 'demo4_1500x1000.jpg', 'among-the-blind-the-one-eyed-man-is-king', 6, 'Mofizul', '2019-12-26 05:40:12'),
(8, 'Always put your best foot forward', '<p>If you&rsquo;re thinking that filler text seems pretty boring and uncontroversial, you&rsquo;d be wrong. Surprisingly, there is a very vocal faction of the design community that wants to see filler text banished to the original sources from whence it came. Perhaps not surprisingly, in an era of endless quibbling, there is an equally vocal contingent of designers leaping to defend the use of the time-honored tradition of greeking. The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point you&rsquo;ll end up reviewing and negotiating the content itself and not the design. This will just slow down the design process. Design first, with real content in mind (of course!), but don&rsquo;t drop in the real content until the design is well on its way. Using filler text avoids the inevitable argumentation that accompanies the use of real content in the design process. Those opposed to using filler text', 'demo5_1500x1000.jpg', 'always-put-your-best-foot-forward', 4, 'Mofizul', '2019-12-26 05:40:24'),
(9, 'All good things come to an end', '<p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text. Our advice: use filler text that has been edited for length and format to match the characteristics of real content as closely as possible To avoid creating a distraction, when starting a new design project, we always go back to one of the old mainstays: lorem ipsum or li Europan lingues. Both have realistic-looking sentence structure and word shape, but are foreign languages that won&rsquo;t create a distraction during a design review meeting.</p>\r\n\r\n<p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text. Our advice: use filler text that has been edited for length and format to match the characteristics of real content as closely a', 'demo6_1500x1000.jpg', 'all-good-things-come-to-an-end', 5, 'Mofizul', '2019-12-26 05:43:35'),
(10, 'Adversity and loss make a man wise', '<p>We gain wisdom faster in difficult times than in prosperous times.&nbsp;<strong>Example</strong>: After losing money in my investments, I know which investments to avoid. It is rightly said adversity and loss make a man wise.</p>\r\n\r\n<p>Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</p>\r\n', 'demo7_1500x1000.jpg', 'adversity-and-loss-make-a-man-wise', 5, 'Mofizul', '2019-12-26 05:43:42'),
(11, 'Actions speak louder than words', '<p>It&rsquo;s grown to become something of an artform, and there are countless filler text generators sprinkled around the web that provide a modern take on this classic staple of the design industry.It&rsquo;s grown to become something of an artform, and there are countless filler text generators sprinkled around the web that provide a modern take on this classic staple of the design industry.&nbsp;It&rsquo;s grown to become something of an artform, and there are countless filler text generators sprinkled around the web that provide a modern take on this classic staple of the design industry.It&rsquo;s grown to become something of an artform, and there are countless filler text generators sprinkled around the web that provide a modern take on this classic staple of the design industry.<br />\r\n&nbsp;</p>\r\n\r\n<p>It&rsquo;s grown to become something of an artform, and there are countless filler text generators sprinkled around the web that provide a modern take on this classic staple of t', 'demo8_1500x1000.jpg', 'actions-speak-louder-than-words', 4, 'Mofizul', '2019-12-26 05:43:48'),
(12, 'Absence makes the heart grow fonder.', '<p>Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam.&nbsp;</p>\r\n', 'demo9_1500x1000.jpg', 'absence-makes-the-heart-grow-fonder', 3, 'Mofizul', '2019-12-26 05:43:54'),
(13, 'A bird in hand is worth two in the bush', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor.&nbsp;</p>\r\n', 'demo1_1500x1000.jpg', 'a-bird-in-hand-is-worth-two-in-the-bush', 6, 'Mofizul', '2019-12-26 05:44:07'),
(14, 'A bad workman always blames his tools', '<p>I went to FTP through File zilla [which had also looong load time], renamed both folders: first plug in to dectivate all plugins, which didny help, and than renamed &#39;&#39;my theme&#39;&#39; folder to deactivate it and go to standart, which did not help either. Than I called to Godaddy [hosting] who says the problem is server and it will be ok.. i also tried to go to my website from different computers, and through friends from different countries [and still didnt work].</p>\r\n', 'demo2_1500x1000.jpg', 'a-bad-workman-always-blames-his-tools', 5, 'Mofizul', '2019-12-26 05:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `link`, `image`, `slug`) VALUES
(5, 'News Needs to Meet Its Audiences Where They Are', 'Main concept was already created and includes the basic front/backend functionality.  This application uses the php/css/jquery language and mysql databases.  It is currently running in an Apache 2 environment with version PHP 7.3.  Access to this application will also be shared with the selected agency.', 'https://google.com', 'slider1.jpg', 'news-needs-to-meet-its-audiences-where-they-are'),
(11, 'Agency needed to develop Saas application using Bootstrap', 'A proof-of-concept was already created and includes the basic front/backend functionality.  This application uses the php/css/jquery language and mysql databases.  It is currently running in an Apache 2 environment with version PHP 7.3.  Access to this application will also be shared with the selected agency.', 'https://facebook.com', 'slider2.jpg', 'agency-needed-to-develop-saas-application-using-bootstrap');

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE `sociallinks` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sociallinks`
--

INSERT INTO `sociallinks` (`id`, `facebook`, `twitter`, `youtube`, `instagram`) VALUES
(1, 'https://facebook.com/mofizul21', 'https://twitter.com/mofizul21', 'https://youtube.com', 'https://instagram.com/mofizul21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, 'ciadmin', '6c44e5cd17f0019c64b042e4a745412a', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logofav`
--
ALTER TABLE `logofav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logofav`
--
ALTER TABLE `logofav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

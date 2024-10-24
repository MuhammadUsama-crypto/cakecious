-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 12:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakecious`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminauth`
--

CREATE TABLE `adminauth` (
  `id` int(11) NOT NULL,
  `email` varchar(29) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminauth`
--

INSERT INTO `adminauth` (`id`, `email`, `password`) VALUES
(1, 'admi', ''),
(2, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `detail` varchar(5000) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `date`, `detail`, `img`) VALUES
(4, 'A Simple Homemade Vanilla Recipe to Sweeten Your Day', '2024-04-05', '<div class=\"flex-1 overflow-hidden\">\r\n<div class=\"react-scroll-to-bottom--css-iecaz-79elbk h-full\">\r\n<div class=\"react-scroll-to-bottom--css-iecaz-1n7m0yu\">\r\n<div class=\"flex flex-col text-sm pb-9\">\r\n<div class=\"w-full text-token-text-primary\" data-testid=\"conversation-turn-3\">\r\n<div class=\"px-4 py-2 justify-center text-base md:gap-6 m-auto\">\r\n<div class=\"flex flex-1 text-base mx-auto gap-3 md:px-5 lg:px-1 xl:px-5 md:max-w-3xl lg:max-w-[40rem] xl:max-w-[48rem] group final-completion\">\r\n<div class=\"relative flex w-full flex-col agent-turn\">\r\n<div class=\"flex-col gap-1 md:gap-3\">\r\n<div class=\"flex flex-grow flex-col max-w-full\">\r\n<div class=\"min-h-[20px] text-message flex flex-col items-start gap-3 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\" data-message-author-role=\"assistant\" data-message-id=\"75ae75a0-b17f-4db0-9ee6-ee73b2010ae3\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert light\">\r\n<p>Vanilla, with its delicate aroma and rich flavor, is a staple in every bakers pantry. While store-bought extracts are convenient, there s something truly special about making your own vanilla extract at home. Not only does it ensure superior quality, but it also allows you to customize the strength and depth of flavor to your liking. Here is a straightforward recipe to create your own homemade vanilla extract:</p>\r\n<p>Ingredients:</p>\r\n<ul>\r\n<li>6-8 vanilla beans</li>\r\n<li>A clean, airtight glass jar</li>\r\n</ul>\r\n<p>Instructions:</p>\r\n<ol>\r\n<li>Begin by selecting high-quality vanilla beans. Look for plump, moist beans with a strong vanilla scent.</li>\r\n<li>Using a sharp knife, split each vanilla bean lengthwise, exposing the tiny seeds inside.</li>\r\n<li>Place the split vanilla beans into your glass jar.</li>\r\n<li>Seal the jar tightly and give it a gentle shake to distribute the vanilla beans evenly.</li>\r\n<li>Store the jar in a cool, dark place, such as a pantry or cupboard.</li>\r\n<li>Allow the vanilla extract to infuse for at least 4-6 weeks, shaking the jar occasionally.</li>\r\n<li>Once the extract reaches your desired strength and flavor, its ready to use!</li>\r\n</ol>\r\n<p>Homemade vanilla extract not only enhances the taste of your baked goods but also makes a thoughtful homemade gift for friends and family. With just a few simple ingredients and a bit of patience, you can elevate your culinary creations with the pure, natural essence of vanilla. So why not embark on this delightful DIY project and indulge in the sweet satisfaction of homemade goodness?<button class=\"flex items-center gap-1.5 rounded-md p-1 text-xs text-token-text-tertiary hover:text-token-text-primary md:invisible md:group-hover:visible md:group-[.final-completion]:visible\"></button></p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"mt-1 flex justify-start gap-3 empty:hidden\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'pexels-ryutaro-tsukata-5472321.jpg'),
(5, 'Create Your Own Delightful Homemade Chocolate Treats!', '2024-04-03', '<p>Welcome to the sweet world of homemade chocolate delights! Today, were diving into a simple yet sensational recipe that will elevate your chocolate game to new heights. Lets gather our ingredients and embark on this delicious journey.</p>\r\n<p>Ingredients:</p>\r\n<ul>\r\n<li>1/2 cup cocoa powder</li>\r\n<li>1/2 cup coconut oil</li>\r\n<li>1/4 cup honey or maple syrup</li>\r\n<li>Optional: nuts, dried fruits, sea salt</li>\r\n</ul>\r\n<p>Instructions:</p>\r\n<ol>\r\n<li>In a microwave-safe bowl or a small saucepan, combine cocoa powder, coconut oil, and honey or maple syrup.</li>\r\n<li>Heat the mixture gently, stirring occasionally, until everything is melted and smooth.</li>\r\n<li>Once the mixture is smooth, pour it into your preferred molds or onto a parchment-lined baking sheet.</li>\r\n<li>If desired, sprinkle nuts, dried fruits, or a pinch of sea salt on top for added flavor and texture.</li>\r\n<li>Place the molds or baking sheet in the refrigerator and let the chocolate set for at least 1-2 hours, or until firm.</li>\r\n<li>Once set, carefully remove the chocolates from the molds or break the chocolate bark into pieces.</li>\r\n<li>Store your homemade chocolates in an airtight container in the refrigerator for up to two weeks (if they last that long!).</li>\r\n</ol>\r\n<p>Enjoy the fruits of your labor by indulging in these rich, creamy homemade chocolates whenever the craving strikes. Whether you savor them solo or share them with loved ones, these delectable treats are sure to bring joy to any occasion. Happy chocolate making!</p>', 'pexels-andres-ayrton-6578868.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `chef_id` int(11) NOT NULL,
  `recipeType` varchar(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `ingredients` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `chef_id`, `recipeType`, `name`, `ingredients`, `pic`, `detail`) VALUES
(13, 17, 'cheese', 'Mac n cheese  ', 'testing', 'WhatsApp Image 2024-04-04 at 23.06.05_e35a826f.jpg', '<p>&nbsp; &nbsp;1. Put the pasta on to boil until al dente.</p>\r\n<p>2. Whilst the pasta is cooking, make the cheese sauce by starting with a roux.</p>\r\n<p>3. Drain the pasta and combine it with the cheese sauce.</p>\r\n<p>4. Transfer to a baking or casserole dish and top with a little extra cheese and some cooked bacon.</p>\r\n<p>5. Bake in the oven then serve!</p>'),
(14, 17, 'cheese', 'Creamy Cajun Prawn Pasta', '', 'WhatsApp Image 2024-04-04 at 23.12.26_53350265.jpg', '<p>1. Cook the linguine in a large pan of boiling salted water, as per the pack instructions.<br>300 g (10.5 oz) dried linguine<br>2. Once cooked, drain, reserving half a cup of the pasta cooking water.<br>3. Meanwhile, heat the oil in a large frying pan (large skillet), over a medium heat.<br>2 tbsp oil</p>\r\n<p>4. Add the onion, red pepper, jalapeno, and garlic, and fry for 5 minutes, stirring often, until the onion starts to soften.<br>1 small onion,1 red bell pepper,1 jalapeno,2 cloves garlic<br>5. Add the prawns to the pan and sprinkle the Cajun seasoning on top. Stir together and fry for a further 2 minutes, until they&rsquo;re just starting to turn pink.<br>300 g (10.5 oz) king raw king prawns,1 tbsp Cajun seasoning<br>6. Add the hot pepper sauce, cider vinegar, Worcestershire sauce, and cream.<br>3 tbsp hot pepper sauce,1 tbsp cider vinegar,1 tbsp Worcestershire sauce,120 ml (&frac12; cup) double cream (heavy cream)<br>7. Stir together and bring to a gentle simmer, then stir in '),
(15, 17, 'chocolate', 'Chocolate Fudge Cake  ', '', 'images.jpeg', '<p>Step 1: Preheat your oven to 350&deg;F (175&deg;C) and grease a baking pan.</p>\r\n<p>Step 2: In a large mixing bowl, combine 1 cup of all-purpose flour, 1/2 cup of cocoa powder, 1 cup of sugar, 1 teaspoon of baking powder, and a pinch of salt. Mix well.</p>\r\n<p>Step 3: In another bowl, beat together 2 eggs, 1/2 cup of milk, 1/2 cup of melted butter, and 1 teaspoon of vanilla extract until smooth.</p>\r\n<p>Step 4: Gradually add the wet ingredients to the dry ingredients, stirring until everything is well combined and there are no lumps.</p>\r\n<p>Step 5: Pour the batter into the greased baking pan and spread it evenly.</p>\r\n<p>Step 6: In a small bowl, mix together 1/2 cup of brown sugar and 1/2 cup of cocoa powder. Sprinkle this mixture evenly over the batter in the baking pan.</p>\r\n<p>Step 7: Carefully pour 1 and 3/4 cups of hot water over the batter. Do not stir.</p>\r\n<p>Step 8: Bake the cake in the preheated oven for about 35-40 minutes, or until the cake is set and the top is firm to'),
(16, 17, 'chocolate', 'Cupcakes', '- 1 and 1/3 cups all-purpose flour - 1/4 teaspoon baking soda - 2 teaspoons baking powder - 3/4 cup unsweetened cocoa powder - 1/8 teaspoon salt - 3 tablespoons softened butter - 1 and 1/2 cups white ', 'WhatsApp Image 2024-04-05 at 02.47.16_6a7bf311.jpg', '<p>1. Preheat your oven to 350&deg;F (175&deg;C) and line a muffin tin with cupcake liners.<br />2. In a medium bowl, sift together the flour, baking soda, baking powder, cocoa powder, and salt. Set aside.<br />3. In a large bowl, cream together the softened butter and sugar until light and fluffy.<br />4. Beat in the eggs one at a time, then stir in the vanilla extract.<br />5. Gradually mix in the dry ingredients alternately with the milk until well combined. Start and end with the dry ingredients.<br />6. Pour the batter evenly into the prepared cupcake liners, filling each about 2/3 full.<br />7. Bake in the preheated oven for 15 to 20 minutes, or until a toothpick inserted into the center of a cupcake comes out clean.<br />8. Remove the cupcakes from the oven and let them cool in the tin for a few minutes before transferring them to a wire rack to cool completely.<br />9. Once cooled, you can frost the cupcakes with your favorite frosting, or enjoy them plain.</p>\r\n<p>&nbsp;</p>'),
(17, 17, 'vanilla', 'Vanilla cake recipe', '- 1 1/2 cups all-purpose flour - 1 1/2 teaspoons baking powder - 1/4 teaspoon salt - 1/2 cup unsalted butter, softened - 1 cup granulated sugar - 2 large eggs - 2 teaspoons vanilla extract - 1/2 cup m', 'images (2).jpeg', '<p>1. Preheat your oven to 350&deg;F (175&deg;C). Grease and flour a 9-inch round cake pan or line it with parchment paper.<br />2. In a medium bowl, sift together the flour, baking powder, and salt. Set aside.<br />3. In a large mixing bowl, cream together the softened butter and sugar until light and fluffy.<br />4. Beat in the eggs, one at a time, then stir in the vanilla extract.<br />5. Gradually add the dry ingredients to the wet ingredients, alternating with the milk, beginning and ending with the dry ingredients. Mix until just combined; do not overmix.<br />6. Pour the batter into the prepared cake pan and spread it out evenly.<br />7. Bake in the preheated oven for 25-30 minutes, or until a toothpick inserted into the center comes out clean.<br />8. Allow the cake to cool in the pan for 10 minutes, then transfer it to a wire rack to cool completely before frosting.</p>\r\n<p>You can frost the cake with your favorite vanilla frosting or serve it plain with a dusting of powdered<'),
(18, 17, 'vanilla', 'Vanilla Bean Panna Cotta Its a creamy Italian dessert', '', 'WhatsApp Image 2024-04-05 at 03.05.03_9919b50e.jpg', '<p>1. In a small bowl, sprinkle the gelatin over the cold water and let it sit for about 5 minutes to soften.<br />2. In a saucepan, combine the heavy cream, milk, and sugar. Split the vanilla bean lengthwise and scrape out the seeds. Add both the seeds and the pod to the cream mixture. Alternatively, you can use vanilla extract.<br />3. Heat the cream mixture over medium heat until it just begins to simmer, stirring occasionally. Remove from heat.<br />4. Remove the vanilla bean pod from the cream mixture.<br />5. Add the softened gelatin to the warm cream mixture and whisk until completely dissolved.<br />6. Divide the mixture evenly among 4-6 serving glasses or ramekins.<br />7. Chill the panna cotta in the refrigerator for at least 4 hours, or until set.<br />8. Once set, you can serve the panna cotta as is or garnish with fresh berries, fruit compote, or a drizzle of caramel sauce.<br />9. Enjoy your delicious Vanilla Bean Panna Cotta!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(29) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(256) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `accType` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `pic`, `accType`) VALUES
(1, 'usama', 'usama@gmail.com', '2323143', 'fdklsfhasdjkfhasdjkfhas', '', ''),
(2, 'Tabish', 'tabish@gmail.com', '62653254', '$2y$10$XiL9XZXFOC/odurASABVsu5ABKw7C6i3NYFNO.0hTL/iYn3iArEEq', '', ''),
(3, 'ali', 'ali@gmail.com', '0312323212', '$2y$10$6Lzhgnx2x4ayyRMBZm287exkvguQ2gjm8butbdCJStwMLffzKsxDe', '', ''),
(4, 'momina', 'momina@gmail.com', '42342', '$2y$10$fGl/ILfbAhk1dRT8NkgUi.gaj4WufiIXNZhfC7mjRrJ7ZpEU/XRxa', '', ''),
(5, 'admin', 'admin@gmail.com', '03213386966', '$2y$10$0VfjL2aR.dOpr9P.XzOjC.WdlKCm3sZdwUIwbcunYkf.pQ5PoYB6.', '', ''),
(6, 'newUser', 'new@gmail.com', '3423232', '$2y$10$H5aUQSz1vhd66s.uJOBJtelnZ9gkebGq1PEWk3llJuNKljepuelOG', '', ''),
(7, 'usama9', '', '', '$2y$10$ONGjPPQzRPDpPUz1SX/h5O7cr3v0ZetTQYxQQUsEjBRK3o2FcrlFK', '', ''),
(8, 'fahad', 'fahad@gmail.com', '6565', '$2y$10$QbKwyGQoMVtUa7.dJkqJjuzf7tqCaQ9ksBfT1KLK48.UJnkJpaivK', '', ''),
(9, 'Kashif', 'kashif@gmail.com', '3213386966', '$2y$10$eveXBV8/.piO3IY3GvcLJ.J7Kq/cpR9U2oXUw6Qe5r5A007KwvCTW', '', 'Chef'),
(10, 'fatima', 'fatimaawan@gmail.com', '03112233445', '$2y$10$RBlQnmdAmjkQdw6SpWeZnuuWb8GUeIEfB2CRg4GTVD6YvKzGrSZwq', '', 'Chef'),
(11, 'iqraaaaa', 'iqraaa@gmail.com', '03023233343', '$2y$10$pZmyenear.b.i94PCkGImOrrkgiyx4HuGqeuohp1ucTG8CM3cRMm2', 'image-removebg-preview.png', 'recipeSeeker'),
(13, 'oo', 'ooo@gmail.com', '3454524', '$2y$10$V5Pdzef7uMq71WVjwjahJunLEQR51hgQFNoBnH4BKi/s7mb8RzDp2', 'WhatsApp Image 2024-03-16 at 02.06.21_2011069f.jp', 'Chef'),
(14, 'chefff', 'chef@gmail.comm', '34222', '$2y$10$veKectKhjmygn4q6hFHo..RggfxxZ2r8ko/UNwjqWxWFzhEnySTgC', 'expressive-young-woman-posing-studio-removebg-preview.png', 'Chef'),
(15, 'pizza', 'pizza@gmail.com', '3221333', '$2y$10$9DIxJ1QjGYhuP2t0bxhfS.2W5V1hohu6KFyHyIJc5x5OyUfEXw4ma', 'Untitled design (8).png', 'recipeSeeker'),
(16, 'shabnam', 'shabnam@gmail.com', '34545243', '$2y$10$g7jGeWdYsVFd4aLwBqLn6OT8HwHZsSesGKwxXP/qWkvm.bo.N4MBq', 'pexels-andrea-piacquadio-3771106.jpg', 'Chef'),
(17, 'John', 'john@gmail.com', '44770090007', '$2y$10$QBRhmBq3F0g8U0K2Wiwmwet5.Rh3yEqQxeGGuzOgOKxNc6AOsVO4i', 'download (4).jpeg', 'Chef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminauth`
--
ALTER TABLE `adminauth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
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
-- AUTO_INCREMENT for table `adminauth`
--
ALTER TABLE `adminauth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

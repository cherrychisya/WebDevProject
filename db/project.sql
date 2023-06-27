-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 08:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipes_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ingredient` longtext NOT NULL,
  `tutorial` text NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipes_id`, `name`, `image`, `ingredient`, `tutorial`, `video`) VALUES
(1, 'Chewy Chocolate Chip Cookies', 'img/recipe/chewy-chocolate-chip-cookies.jpg', '2 and 1/4 cups (280g) all-purpose flour\r\n1¾ cups (350 g) granulated sugar\r\n½ tsp baking soda\r\n¼ tsp salt\r\n½ cup (115 g) unsalted butter\r\n1 and 1/2 teaspoons cornstarch\r\n3/4 cup (150g) packed li)ght or dark brown sugar\r\n4 large eggs\r\n1 large egg yolk\r\n1 Tbsp (15 mL) vanilla extract\r\n1 and 1/4 cups (225g) semi-sweet chocolate chips', 'Preheat the oven to 350°F (180°C)\r\nWhisk the flour, baking soda, cornstarch, and salt together in a large bowl. Set aside.\r\nIn a medium bowl, whisk the melted butter, brown sugar, and granulated sugar together until no brown sugar lumps remain. Whisk in the egg and egg yolk. Finally, whisk in the vanilla extract. The mixture will be thin. Pour into dry ingredients and mix together with a large spoon or rubber spatula. The dough will be very soft, thick, and appear greasy. Fold in the chocolate chips. The chocolate chips may not stick to the dough because of the melted butter, but do your best to combine them.\r\nCover the dough tightly and chill in the refrigerator for at least 2–3 hours or up to 3 days. I highly recommend chilling the cookie dough overnight for less spreading.\r\nTake the dough out of the refrigerator and allow it to lightly soften at room temperature for 10 minutes.\r\nUsing a cookie scoop or Tablespoon measuring spoon, measure 3 scant Tablespoons (about 2 ounces, or 60g) of dough for XL cookies or 2 heaping Tablespoons (about 1.75 ounces, or 50g) of dough for medium/large cookies. Roll into a ball, making sure the shape is taller rather than wide—almost like a cylinder. This helps the cookies bake up thicker. Repeat with remaining dough. Place 8–9 balls of dough onto each cookie sheet.\r\nBake the cookies for 12–13 minutes or until the edges are very lightly browned. (XL cookies can take closer to 14 minutes.) The centers will look very soft, but the cookies will continue to set as they cool. Cool on the baking sheet for 10 minutes. Meanwhile, press a few extra chocolate chips into the tops of the warm cookies. This is optional and only for looks. After 10 minutes of cooling on the baking sheets, transfer cookies to a wire rack to cool completely.', 'https://www.youtube.com/embed/4kP0v0rXqfA'),
(2, 'Chewy Ginger & Medjool Date Cookies', 'img/recipe/mejool-cookies.jpg', '½ cup (115 g) unsalted butter\n1¾ cups (350 g) granulated sugar\n2/3 cup (137 g) packed light brown sugar\n½ tsp baking soda\n¼ tsp fine salt\n¼ cup (60 mL) fancy molasses\n1 Tbsp finely grated fresh ginger\n1 ¾ cups (262 g) all-purpose flour\n1 large egg\n½ tsp ground cinnamon\n½ cup (50 g) rolled oats\n2 tsp ground ginger\n1 ½ cups (220 g) chopped, pitted Medjool dates', 'Preheat the oven to 350°F (180°C)\r\nCream the butter and brown sugar together by hand in a large mixing bowl until well combined. Stir in the molasses and ginger, followed by the egg.\r\nSift the flour, ginger, 1 tsp of the cinnamon baking soda and salt into a separate bowl. Add the dates and oats and stir to break up the date pieces. Add the flour to the butter mixture and stir until the dough is evenly combined.\r\nScoop spoonsful of dough (about 2 Tbsp) and shape into a ball. Stir the granulated sugar and remaining 1 tsp of cinnamon in a shallow dish. Roll each cookie into the sugar and place onto a parchment-lined baking tray, leaving 2 inches between the cookies.\r\nBake the cookies for about 12 minutes until they brown around the edges a little. Transfer the cookies to a rack to cool.', 'https://www.youtube.com/embed/1ooEulAonaQ'),
(3, 'Lemon Blueberry Pie', 'img/recipe/creamy-lemon-tart-filling-with-blueberry-sauce.jpg', '1 teaspoon cornstarch\r\n2 teaspoons lemon juice (or water)\r\n1 cup (190g) fresh or frozen blueberries\r\n2 teaspoons granulated sugar\r\n1/2 cup (115g) unsalted butter\r\n1/4 cup (50g) granulated sugar\r\n1 teaspoon pure vanilla extract\r\n1/4 teaspoon salt\r\n1 cup (125g) all-purpose flour\r\n1 (14 ounce weight) can full-fat sweetened condensed milk\r\n6 Tablespoons (90ml) lemon juice\r\n1 teaspoon lemon zest\r\n1 large egg yolk', 'Blueberry Sauce: Using a fork, mix the cornstarch and lemon juice together in a small bowl until the cornstarch has dissolved. Set aside. Warm the blueberries and sugar together in a small saucepan over medium heat. Stir occasionally for 3 minutes, mashing the blueberries as best you can against the bottom and sides of the pan to help break them up. Stir in the cornstarch mixture. Cook for 2 more minutes as the sauce thickens, stirring and mashing the blueberries to break them up as desired. Remove sauce from heat and set aside at room temperature until step 6. Makes about 1/2 – 2/3 cup blueberry sauce and you’ll use about half for the swirl.\r\nPreheat the oven to 350°F (180°C)\r\nCrust: Mix the melted butter, sugar, vanilla extract, and salt together in a medium bowl. Add the flour and stir to completely combine. The dough will be a little greasy and very thick. Using a rubber spatula or your hands, press dough firmly into a 9-inch tart pan (no need to grease it), making sure the layer of crust is even on the bottom and all around the sides. It may seem like it won’t fit, but it will. You can use the bottom of a measuring cup to pack the crust in too, but sometimes it sticks.\r\nBake for 15 minutes or until the edges are very lightly browned. Remove from the oven. Using a fork, poke a few holes all over the top of the warm crust (not all the way through the crust). This helps the filling stick.\r\nFilling: Whisk all of the filling ingredients together until combined. Pour into warm crust. Stir up the blueberry sauce because it has likely thickened. It can still be warm when you use it in this step. If it’s too thick, warm it in the microwave for 5-10 seconds. Drop spoonfuls of blueberry sauce all over the top, using about half of the sauce. Reserve the rest of the sauce for serving. Using a toothpick or knife, gently swirl the sauce and filling together. Shimmy the pan back and forth 2-3 times to let the sauce and filling settle down into the crust a bit.\r\nBake for 17-19 minutes, just until the center of the tart no longer jiggles when you give the pan a light tap. It will still be a little sticky on top. Avoid over-baking because the tart will taste rubbery.\r\nRemove tart from the oven and place on a cooling rack. Cool completely at room temperature, then chill in the refrigerator uncovered for at least 2 hours and up to 1 day. If chilling for longer than 2 hours, cover it. After chilling, remove the sides of the tart pan if your pan has removable sides.\r\nSlice and serve with optional garnishes including any leftover blueberry sauce.', 'https://www.youtube.com/embed/05iA6hw4waM'),
(5, 'Cheesecake Pie', 'img/recipe/homemade-raspberry-sauce-on-cheesecake.jpg', '1 and 1/2 cups (180g) graham cracker crumbs\r\n1/4 cup (50g) granulated sugar\r\n6 Tablespoons (85g) unsalted butter\r\ntwo 8-ounce blocks (452g) full-fat cream cheese\r\n1⅔ cups (240 g) granulated sugar\r\n1/4 cup (60g) full-fat sour cream\r\n1 teaspoon fresh lemon juice\r\n2 tsp pure vanilla extract\r\n2 large eggs, at room temperature', 'Preheat the oven to 350°F (180°C)\r\nMake the crust: If you’re starting out with full graham crackers, use a food processor or blender to grind them into fine crumbs. Stir the graham cracker crumbs and granulated sugar together in a medium bowl, and then stir in the melted butter. The mixture will be thick, coarse, and sandy. Try to smash/break up any large chunks.Pour the mixture into an ungreased 9-inch pie dish. With medium pressure using your hand, pat the crumbs down into the bottom and up the sides to make a compact crust. Do not pack down with heavy force because that makes the crust too hard. Simply pat down until the mixture is no longer crumby/crumbly.\r\nBake the crust for 10 minutes. Make the filling in the next step as the crust bakes.\r\nMake the filling: Using a handheld or stand mixer fitted with a paddle attachment, beat the cream cheese and granulated sugar together on medium-high speed in a large bowl until the mixture is smooth and creamy, about 3 minutes. Scrape down the sides and up the bottom of the bowl with a rubber spatula as needed. Add the sour cream, vanilla extract, and lemon juice, and then beat until fully combined and very smooth. Scrape down the sides and up the bottom of the bowl with a rubber spatula as needed to combine⁠—you don’t want any lumps. Then on medium speed, add the eggs one at a time, beating after each addition until just blended. After the second egg is incorporated into the batter, stop mixing. If you still see some lumps at this point, switch to a whisk and whisk by hand just until you break up the large lumps. Some small lumps are OK.\r\nLower the oven temperature to 325°F (163°C) and spread the cheesecake filling into the warm crust.\r\nBake the pie for 35 minutes or until the center is almost set. Check it at the 25-minute mark, and if it’s browning too quickly on top and around the edges, tent it with aluminum foil for the last 10 minutes of baking.\r\nSet the pie on a wire rack and cool for 1 hour at room temperature. Then place it in the refrigerator and chill for at least 2 hours and up to 2 days before serving.\r\nFeel free to garnish the pie with any of the optional toppings listed in the notes right before or a couple hours before serving.', 'https://www.youtube.com/embed/MS-EzRJTZpI'),
(7, 'Banana Bread', 'img/recipe/banana-bread-recipe.jpg', '2 and 1/4 cups (280g) all-purpose flour\r\n1/2 teaspoon ground cinnamon\r\n½ tsp baking soda\r\n¼ tsp salt\r\n½ cup (115 g) unsalted butter\r\n1/3 cup (80g) plain yogurt or sour cream\r\n3/4 cup (150g) packed light or dark brown sugar\r\n4 large eggs\r\n1 Tbsp (15 mL) vanilla extract\r\n2 cups (460g) mashed bananas', 'Preheat the oven to 350°F (180°C)\r\nWhisk the flour, baking soda, salt, and cinnamon together in a medium bowl. Set aside.\r\nUsing a handheld or stand mixer fitted with a paddle or whisk attachment, beat the butter and brown sugar together on high speed until smooth and creamy, about 2 minutes. With the mixer running on medium speed, add the eggs one at a time, beating well after each addition. Then beat in the yogurt, mashed bananas, and vanilla extract until combined.\r\nWith the mixer running on low speed, slowly beat the dry ingredients into the wet ingredients until no flour pockets remain. Do not over-mix. Fold in the nuts, if using.\r\nPour and spread the batter into the prepared baking pan. Bake for 60–65 minutes, making sure to loosely cover the bread with aluminum foil halfway through to prevent the top from getting too brown. The bread is done when a toothpick inserted in the center comes out clean with only a few small moist crumbs. This may be after 60–65 minutes depending on your oven, so begin checking every 5 minutes around the 60-minute mark.\r\nRemove bread from the oven and allow the bread to cool in the pan set on a wire rack for 1 hour. Remove bread from the pan and cool bread directly on the wire rack until ready to slice and serve.', 'https://www.youtube.com/embed/Ob8eL4mMOys'),
(8, 'Pumpkin Bread', 'img/recipe/pumpkin-bread.jpg', '2 and 1/4 cups (280g) all-purpose flour\r\n1/2 teaspoon ground cinnamon\r\n½ tsp baking soda\r\n¼ tsp salt\r\n1/4 teaspoon ground nutmeg\r\n1/4 teaspoon ground cloves\r\n3/4 cup (150g) packed light or dark brown sugar\r\n2 large eggs\r\n1 Tbsp (15 mL) vanilla extract\r\n1/4 teaspoon ground ginger\r\n1/2 cup (100g) granulated sugar\r\n1 and 1/2 cups (340g) pumpkin puree\r\n1/2 cup (120ml) vegetable oil, canola oil, or melted coconut oil\r\n1/4 cup (60ml) orange juice\r\n2/3 cup (120g) semi-sweet chocolate chips', 'Preheat the oven to 350°F (180°C)\r\nIn a large bowl, whisk the flour, baking soda, cinnamon, nutmeg, cloves, ginger, and salt together until combined. Set aside. In a medium bowl, whisk the eggs, granulated sugar, and brown sugar together until combined. Whisk in the pumpkin, oil, and orange juice. Pour these wet ingredients into the dry ingredients and gently mix together using a rubber spatula or a wooden spoon. There will be a few lumps. Do not over-mix. Gently fold in the chocolate chips, if including.\r\nPour the batter into the prepared loaf pan. Bake for 60–65 minutes, making sure to loosely cover the bread with aluminum foil halfway through to prevent the top from getting too brown. The bread is done when a toothpick inserted in the center comes out clean with only a few small moist crumbs. This may be before or after 60–65 minutes depending on your oven, so begin checking every 5 minutes around the 55-minute mark.\r\nAllow the bread to cool completely in the pan on a wire rack before removing and slicing.', 'https://www.youtube.com/embed/KuaQ2dVJX8I'),
(9, 'Banana Layer Cake with White Chocolate Cream Cheese Frosting', 'img/recipe/banana-layered-cake.jpg', '2½ cups (325 g) cake and pastry flour\r\n1¾ cups (350 g) granulated sugar\r\n1 tsp baking powder\r\n½ tsp baking soda\r\n¼ tsp fine salt\r\n1½ cups (375 g) mashed very ripe bananas (about 3 large)\r\n1¼ cups (310 mL) buttermilk\r\n¼ cup (60 mL) vegetable oil\r\n2 large eggs\r\n½ tsp ground cinnamon\r\n1 Tbsp (15 mL) vanilla extract\r\n¾ cup (175 g) unsalted butter\r\n4 oz (120 g) semisweet couverture/baking chocolate\r\n3 cups (390 g) icing sugar\r\n1 cup (250 mL) full-fat sour cream\r\n2 tsp vanilla extract', 'Preheat the oven to 350°F (180°C)\r\nSift the flour, sugar, baking powder, baking soda, cinnamon and salt into a large bowl or the bowl of a stand mixer fitted with the paddle attachment.\r\nIn a separate bowl, whisk the bananas with the oil, buttermilk, eggs and vanilla. Add all at once to the flour mixture and beat using electric beaters or the mixer at low speed until no flour is visible. Increase the speed to medium-high and beat until pale, light and fluffy, about a minute. Divide the batter between the pans (it is fluid enough that it will settle into place) and bake for about 30 minutes, until a tester inserted in the centre of a cake comes out clean.\r\nCool the cakes in their pans on a cooling rack for 20 minutes and then turn them out of the pans onto the rack to finish cooling.\r\nFor the frosting, melt the white chocolate by stirring it gently in a metal bowl placed over a pot of barely simmering water (medium-low heat) until smooth. Set aside to cool for 5 minutes.\r\nUsing electric beaters or a stand mixer fitted with the paddle attachment, beat the cream cheese and butter. Add ½ cup (65 g) icing sugarand beat at medium-low speed until smooth. Add the white chocolate and vanilla and beat in. Add the remaining icing sugar and blend first at medium-low until smooth and then at medium-high for about a minute to fluff up the frosting.\r\nTo assemble the cake, place the first layer onto a cake stand or plate. Spread a third of the frosting onto the cake so that it covers the top of the cake completely. Top with the second cake layer and repeat with another third of the frosting. Top with the final cake layer. Spread the remaining frosting to cover the top, then use your spatula to create swirls and swishes as you wish. Chill, uncovered, for at least 2 hours to set, before covering if storing longer. The cake will keep, uncovered, in the fridge for up to 3 days. Once cut, place a piece of parchment or plastic wrap directly on the cut surface of the cake.', 'https://www.youtube.com/embed/6DEqwkJsqVk'),
(10, 'Date & Spice Chocolate Layer Cake with Cream Cheese Frosting', 'img/recipe/date-spice-layer-cake.jpg', '1 ½ cups (220 g) Natural Delights Medjool dates, pitted\r\n2 oz (60 g) dark baking chocolate\r\n1 tsp baking soda\r\n1 1⁄3 cups (330 mL) boiling water\r\n¼ cup (60 g) unsalted butter\r\n1 cup (200 g) packed light brown sugar\r\n2 large eggs\r\n1 cup (150 g) all-purpose flour\r\n½ cup (60 g) Dutch process cocoa powder\r\n1 ½ tsp ground cinnamon\r\n1 tsp baking powder\r\n½ tsp fine salt\r\n¼ tsp ground cayenne pepper\r\n6 Tbsp (90 g) unsalted butter\r\n1 cup (130 g) icing sugar\r\n1 pkg (250 g) cream cheese\r\n2 tsp vanilla extract', 'Preheat the oven to 350°F (180°C)\r\nPlace the dates, chocolate and baking soda in a heatproof bowl. Pour the boiling water over the dates and let sit for 10 to 15 minutes to soak. Pour everything, including the liquid, into a food processor (or use an immersion blender) and purée until smooth.\r\nCream the butter and brown sugar together by hand until well combined. Add the eggs one at a time mixing well after each addition (you may wish to switch to a whisk). Add the Medjool date mixture and whisk in.\r\nSift the flour, cocoa powder, cinnamon, baking powder, salt and cayenne into the bowl and whisk until well combined. Divide the batter between the two pans and tap the pans. Bake for about 35 minutes until a tester inserted in the centre of a cake comes out clean. Cool the cakes in their pans on a cooling rack for 15 minutes, then tip the cakes out of the pan to cool completely.\r\nFor the frosting beat the butter and icing sugar together using electric beaters or a stand mixer fitted with the paddle attachment until fluffy and smooth, about 3 minutes. Add the cream cheese and vanilla and beat on medium speed for another 3 minutes until fluffy and the frosting holds its shape well.\r\nTo assemble the cakes, place one cake layer on to a plate or platter and spread or pipe half of the frosting on to the top of the cake. place the second cake layer on top and repeat with the remaining frosting. Chill the cake uncovered until ready to serve.', 'https://www.youtube.com/embed/rOcA5yZSe60');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`) VALUES
(1, 'alisya@u.com', '111111', 'user'),
(10, 'sya@u.com', '123456', 'admin'),
(22, 'a@g.com', 'abc123', 'user'),
(23, 'isy@u.com', 'abc246', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipes_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

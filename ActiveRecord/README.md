# SQL

    SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

    --
    -- Database: `workshop_activerecorddemo`
    --

    -- --------------------------------------------------------

    --
    -- Table structure for table `posts`
    --

    CREATE TABLE `posts` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `title` varchar(255) NOT NULL,
      `body` text NOT NULL,
      `created_at` datetime NOT NULL,
      `updated_at` datetime NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

    -- --------------------------------------------------------

    --
    -- Table structure for table `users`
    --

    CREATE TABLE `users` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `email` varchar(100) NOT NULL,
      `password` varchar(32) NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `email` (`email`)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
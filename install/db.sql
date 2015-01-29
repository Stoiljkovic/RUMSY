--
-- Table structure for table `active_guests`
--

CREATE TABLE IF NOT EXISTS `active_guests` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `active_users`
--

CREATE TABLE IF NOT EXISTS `active_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banned_users`
--

CREATE TABLE IF NOT EXISTS `banned_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `banned_ip` (
  `ip` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) default NULL,
  `usersalt` varchar(8) NOT NULL,
  `userid` varchar(32) default NULL,
  `userlevel` tinyint(1) unsigned NOT NULL,
  `email` varchar(50) default NULL,
  `name` varchar(50) default NULL,
  `surname` varchar(50) default NULL,
  `twitter` varchar(50) default NULL,
  `facebook` varchar(50) default NULL,
  `google` varchar(50) default NULL,
  `linkedin` varchar(50) default NULL,
  `website` varchar(50) default NULL,
  `icq` varchar(50) default NULL,
  `skype` varchar(50) default NULL,
  `gtalk` varchar(50) default NULL,
  `phone` varchar(50) default NULL,
  `timestamp` int(11) unsigned NOT NULL,
  `actkey` varchar(35) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `regdate` int(11) unsigned NOT NULL,
  `privacy` varchar(5) NOT NULL default 'Y',
  `online` varchar(5) NOT NULL default 'Y',
  `showcomments` varchar(5) NOT NULL default 'Y',
  `allowcalls` varchar(5) NOT NULL default 'Y',
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `messages` (
	`id` int(11) NOT NULL auto_increment,
	`user` varchar(100) NOT NULL default '',
	`towho` varchar(100) NOT NULL default '',
	`msg` varchar(255) NOT NULL default '',
	`status` varchar(10) NOT NULL default '',
    `ctime` varchar(30) NOT NULL default '',
	`reporter` varchar(100) NOT NULL default '',
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `comments` (
	`id` int(11) NOT NULL auto_increment,
	`user` varchar(100) NOT NULL default '',
	`url` varchar(100) NOT NULL default '',
	`msg` varchar(255) NOT NULL default '',
	`status` varchar(10) NOT NULL default '',
    `ctime` varchar(30) NOT NULL default '',
	`reporter` varchar(100) NOT NULL default '',
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

 CREATE TABLE IF NOT EXISTS `Stat_Day` (
  	`id` int(11) NOT NULL auto_increment,
	`day` varchar(10) NOT NULL default '',
	`user` int(10) NOT NULL default '0',
	`view` int(10) NOT NULL default '0',
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `Stat_IPs` (
	`id` int(11) NOT NULL auto_increment,
	`ip` varchar(15) NOT NULL default '',
	`time` int(20) NOT NULL default '0',
	`online` int(20) NOT NULL default '0',
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `Stat_Page` (
	`id` int(11) NOT NULL auto_increment,
	`day` varchar(10) NOT NULL default '',
	`page` varchar(255) NOT NULL default '',
	`view` int(10) NOT NULL default '0',
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `Stat_Referer` (
	`id` int(11) NOT NULL auto_increment,
	`day` varchar(10) NOT NULL default '',
	`referer` varchar(255) NOT NULL default '',
	`view` int(10) NOT NULL default '0',
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `Stat_Keyword` (
	`id` int(11) NOT NULL auto_increment,
	`day` varchar(10) NOT NULL default '',
	`keyword` varchar(255) NOT NULL default '',
	`view` int(10) NOT NULL default '0',
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `Stat_Language` (
	`id` int(11) NOT NULL auto_increment,
	`day` varchar(10) NOT NULL default '',
	`language` varchar(2) NOT NULL default '',
	`view` int(10) NOT NULL default '0',
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- END STATIC --------------------------------------------------------

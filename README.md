
###Production

Edit the files in /jekyll-source.
To compile the jekyll files and run the sass, use `jekyll serve` whilst in this folder.
Jekyll does the Sass too - nice.

### MySQL Table

The gigs table is pretty simple!

~~~
CREATE TABLE `gigs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `venue` text NOT NULL,
  `town` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
~~~

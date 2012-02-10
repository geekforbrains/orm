<?php

/**
 * In Caffeine, classes will be autoloaded, but for now we'll do it manually.
 */
require_once('orm/orm.php');
require_once('orm/orm_builder.php');
require_once('orm/orm_installer.php');

require_once('blog/category.php');
require_once('blog/comment.php');
require_once('blog/post.php');

/**
 * This will eventually be automated, where the system finds available models
 * and passes them to the install method.
 */
OrmInstaller::install(array('Category', 'Comment', 'Post'));

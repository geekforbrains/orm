<?php

/**
 * MySQL Output:
 *
 * CREATE TABLE posts (
 *  id INT NOT NULL AUTO_INCREMENT,
 *  slug VARCHAR(255) NOT NULL,
 *  title VARCHAR(255) NOT NULL,
 *  body TEXT NOT NULL,
 *  INDEX(slug),
 *  PRIMARY_KEY(id)
 * );
 *
 * --------------------------------
 * Many-to-Many table for categories
 * --------------------------------
 *
 * CREATE TABLE mtm_categories_posts (
 *  category_id INT NOT NULL,
 *  post_id INT NOT NULL,
 *  INDEX(category_id),
 *  INDEX(post_id)
 * );
 */
class Post extends Orm {

  protected $_hasAndBelongsTo = array('category');

  protected $_has = array('comment');

  protected $_fields = array(
    'slug' => 'string',
    'title' => 'string',
    'body' => 'text'
  );

  protected $_indexes = array('slug');

}

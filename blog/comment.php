<?php

/**
 * MySQL Output:
 *
 * CREATE TABLE comments (
 *  id INT NOT NULL AUTO_INCREMENT,
 *  post_id INT NOT NULL,
 *  author VARCHAR(255) NOT NULL,
 *  email VARCHAR(255) NOT NULL,
 *  website VARCHAR(255) NOT NULL,
 *  body TEXT NOT NULL,
 *  INDEX(post_id),
 *  PRIMARY KEY(id)
 * );
 */
class Comment extends Orm {

  protected $_belongsTo = array('post');

  protected $_fields = array(
    'author' => 'string',
    'email' => 'string',
    'website' => 'string',
    'body' => 'string'
  );

}

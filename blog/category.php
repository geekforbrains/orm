<?php

class Category extends Orm {

  protected $_hasAndBelongsTo = array('post');

  protected $_fields = array(
    'title' => 'string',
    'slug' => 'string'
  );

  protected $_indexes = array('slug');

}

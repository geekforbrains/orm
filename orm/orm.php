<?php

class Orm {

  protected $_table = null;
  protected $_has = null;
  protected $_belongsTo = null;
  protected $_hasAndBelongsTo = null;
  protected $_fields = null;
  protected $_indexes = null;
  protected $_fulltext = null;

  /**
   * Getters for protected properties.
   */
  public function getHas() {
    return $this->_has;
  }

  public function getBelongsTo() {
    return $this->_belongsTo;
  }

  public function getHasAndBelongsTo() {
    return $this->_hasAndBelongsTo;
  }

  public function getFields() {
    return $this->_fields;
  }

  public function getIndexes() {
    return $this->_indexes;
  }

  public function getFulltext() {
    return $this->_fulltext;
  }

  /**
   * Determines the table name based on the model name. A models should have a singular name
   * such as "Post". Table names will be the plural version of the model name. So for the "Post"
   * model, the table name will be "posts".
   *
   * Optionally the $this->_table property can be set manually to define a custom table name.
   */
  public function getTableName()
  {
    if(is_null($this->_table))
    {
      // TODO Make this convert the model name to plural, right now we'll just use the raw model name
      $this->_table = strtolower(get_called_class());
    }

    return $this->_table;
  }

  /**
   * Creates an instance of OrmBuilder with the given $table.
   *
   * @param string $table The name of the table to create an OrmBuilder instance for.
   * @return OrmBuilder object with reference to $table.
   */
  public static function build($table) {
    return new OrmBuilder($table);
  }

}

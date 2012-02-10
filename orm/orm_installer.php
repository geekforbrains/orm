<?php

/**
 * Handles creating tables tables based on model properties.
 */
class OrmInstaller {

  /**
   * Possible field types.
   *
   * TODO Unfinished, need more types
   * TODO Need a way to alter "size" or "length" in varchar, text, int etc.
   * TODO Need a way to set columns as not null or null, right now its not null
   */
  private static $_fieldTypes = array(
    'string' => 'VARCHAR(255)',
    'text' => 'TEXT',
    'int' => 'INT',
    'double' => 'DOUBLE',
    'datetime' => 'DATETIME'
  );

  /**
   * Starts the creation of model tables.
   *
   * @param array $models An array of models to be installed.
   */
  public static function install($models)
  {
    foreach($models as $model)
    {
      $i = new $model();      
      self::_createTable($i);

      if(!is_null($i->getHasAndBelongsTo()))
        self::_createMtmTable($i);
    }
  }

  /**
   * Creates a table for the current model based on the model name
   * and its fields.
   *
   * @param object $i The model object.
   */
  private static function _createTable($i)
  {
    $sql = 'CREATE TABLE ' . $i->getTableName() . '(';
    $sql .= 'id INT NOT NULL AUTO_INCREMENT,';

    $fields = $i->getFields();

    // Ex: title VARCHAR(255) NOT NULL
    foreach($fields as $name => $type)
      $sql .= $name . ' ' . self::$_fieldTypes[$type] . ' NOT NULL,';

    if(!is_null($i->getIndexes()))
    {
      $indexes = $i->getIndexes();

      // Ex: INDEX(slug)
      foreach($indexes as $index)
        $sql .= 'INDEX(' . $index . '),';
    }

    // TODO Foreign keys

    // TODO Ability to set storage engine
    $sql .= 'PRIMARY KEY(id));';

    echo $sql . '<br /><br />';
  }

  /**
   * Creates the Many-to-Many table for models that have mtm relationships
   * between other models. Because both models set the $_hasAndBelongsTo property
   * we check to make sure the table hasn't been created before continuing.
   *
   * @param object $i The model object.
   */
  private static function _createMtmTable($i)
  {

  }

}

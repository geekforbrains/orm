<?php

/**
 * Handles building SQL queries through a chain of method calls.
 *
 * Example:
 *
 * Orm::build('posts')->where('created_at', '>', $timestamp)->orderBy('updated_at', 'asc')->limit(10)->get();
 */
class OrmBuilder {

  private $_table = null;
  private $_select = null;
  private $_join = null;
  private $_where = null;
  private $_limit = null;
  private $_orderBy = null;
  private $_groupBy = null;

  public function __construct($table) {
    $this->_table = $table;
  }

  public function distinct() {}

  public function select() {}

  public function where() {}
  public function andWhere() {}
  public function orWhere() {}

  public function count() {}

  public function limit() {}

  public function orderBy() {}

  public function groupBy() {}

  public function join() {}
  public function leftJoin() {}
  public function rightJoin() {}

  // Selectors
  public function first() {}
  public function last() {}
  public function next() {}
  public function prev() {}
  public function get() {}
  public function all() {}

}

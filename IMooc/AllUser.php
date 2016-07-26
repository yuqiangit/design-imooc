<?php
/**
 * Created by PhpStorm.
 * User: shihuipeng
 * Date: 16/7/26
 * Time: 下午3:50
 */
namespace IMooc;


class AllUser implements \Iterator
{
    private $ids = array();
    private $index;

    public function __construct() {
        $db = Factory::createDataBase();
        $db->connect('127.0.0.1', 'root', '123456', 'liking');
        $result = $db->query('select * from t_user');
        $this->ids = $result->fetchAll();

    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current() {
        return Factory::createUser($this->ids[$this->index]['id']);
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next() {
        $this->index++;
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key() {
        return $this->index;
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid() {
        return $this->index < count($this->ids);
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind() {
        $this->index = 0;
    }
}
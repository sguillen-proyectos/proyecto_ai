<?php

class Node
{
    protected   $_parent = null;
    protected   $_left = null;
    protected   $_right = null;
    protected   $_key;
    protected   $_data = null;

    /**
     * @param int $key
     * @param mixed $data
     */
    public function __construct($key, $data)
    {
        $this->_key = $key;
        $this->_data = $data;
    }

    /**
     * Empty the node by keeping up the key, but
     * setting up the data to NULL
     */
    public function doEmpty()
    {
        $this->_data = null;
    }

    /**
     * Print the key
     *
     * @return string
     */
    public function __toString()
    {
        return 'First name: ' . $this->_data['f_name']
                . '<br />'
                . 'Last name: ' . $this->_data['l_name']
                . '<br />'
                . 'Birthday: ' . $this->_data['b_day'];
    }

    public function &getParent() { return $this->_parent; }
    public function setParent($parent) { $this->_parent = $parent; }

    public function &getLeft() { return $this->_left; }
    public function setLeft($left) { $this->_left = $left; }

    public function &getRight() { return $this->_right; }
    public function setRight($right) { $this->_right = $right; }

    public function &getKey() { return $this->_key; }
    public function setKey($key) { $this->_key = $key; }

    public function &getData() { return $this->_data; }
    public function setData($data) { $this->_data = $data; }
}

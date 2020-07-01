<?php

namespace LinkedList;

class SingleLinedListNode
{
    /**
     * 节点中的数据
     *
     * @var null
     */
    public $data;

    /**
     * 节点中的指针域，指向下一个节点
     *
     * @var SingleLinedListNode
     */
    public $next;

    /**
     * 一个节点
     *
     * SingleLinedListNode constructor.
     * @param null $data
     */
    public function __construct($data = null)
    {
        $this->data = $data;
        $this->next = null;
    }
}
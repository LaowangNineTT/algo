<?php

namespace LinkedList;

class SingleLinkedList
{
    /**
     * 哨兵节点
     *
     * @var SingleLinedListNode
     */
    public $head;

    /**
     * 单链表长度
     *
     * @var
     */
    private $length;

    /**
     * 初始化
     *
     * SingleLinkedList constructor.
     * @param null $head
     */
    public function __construct($head = null)
    {
        if (null == $head) {
            $this->head = new SingleLinedListNode();
        } else {
            $this->head = $head;
        }

        $this->length = 0;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function insert($data)
    {
//        if ()
    }
}
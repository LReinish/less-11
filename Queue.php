<?php

class Queue extends Seguence
{
    /** @var Node */
    private $head;
    /** @var Node */
    private $last;

    public function push(string $item): void
    {
      $node = new Node($item);
      if ($this->isEmpty())
      {
          $this->head = $node;
          $this->last = $node;
      } else{
          $this->last->setNext($node);
          $this->last = $node;
      }
    }

    public function pop(): ?string
    {

     if($this->isEmpty()) return  null;
      $item = $this->head->getItem();
      $this->head = $this->head->getNext();
        return $item;
    }

    protected function getFirst() : ?Node
    {
        return $this->head;
    }

}
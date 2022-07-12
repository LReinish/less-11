<?php

 abstract class Seguence
 {
     abstract public function push(string $item): void ;


     abstract public function pop(): ?string ;


     public function isEmpty(): bool
 {
     return $this->getFirst() == null;
 }

     abstract protected function getFirst() : ?Node;

 }
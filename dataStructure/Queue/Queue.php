<?php

namespace dataStructure\Queue;

interface Queue
{
    public function getSize(): int;

    public function isEmpty(): bool;

    public function enqueue($e): void;

    public function dequeue();

    public function getFront();
}
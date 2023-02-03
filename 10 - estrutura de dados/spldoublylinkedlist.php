<?php

$list = new \SplDoublyLinkedList();

$list->push("Moonrise Kingdom");
$list->push("The Grand Budapest Hotel");
$list->push("Rushmore");


echo "Cabeça: ".$list->bottom()."<br/>";
echo "Cauda: ".$list->top()."<br/>";

$list->rewind();
$prev = null;

while ($list->valid()){
    $current = $list->current();
    echo "ANTERIOR: ".$prev."<br/>";
    echo "ATUAL: ".$current."<br/>";
    $prev = $current;
    $list->next();
    $next = $list->current();
    echo "PROXIMO: ".$next."<br/>";
    echo "<br/>";
}

?>
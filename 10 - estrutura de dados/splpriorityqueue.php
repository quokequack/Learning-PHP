<?php

$prQueue = new \SplPriorityQueue();

$prQueue->insert('A', 1);
$prQueue->insert('B', 4);
$prQueue->insert('C', 5);
$prQueue->insert('D', 2);
$prQueue->insert('E', 3);
$prQueue->insert('F', 6);

//$prQueue->setExtractFlags(\SplPriorityQueue::EXTR_PRIORITY);
$prQueue->setExtractFlags(\SplPriorityQueue::EXTR_BOTH);
foreach($prQueue as $value){
    echo $value['priority']." ".$value['data']."<br/>";
}



?> 
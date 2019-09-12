<?php
include_once "LinkedList.php";

$linkedList = new LinkedList();
$linkedList ->insertFirst(11);
$linkedList ->insertFirst(22);
$linkedList ->insertFirst(33);
$linkedList ->insertFirst(44);
$totalNode = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNode.'<br>';
echo implode('-', $linkData);
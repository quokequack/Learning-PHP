<?php

class CampeonatoBrasileiro extends \SplHeap{

    protected function compare($value1, $value2){
        if($value1['pontuacao'] == $value2['pontuacao']){
            return $value1['vitorias'] <=> $value2['vitorias'];
        }else{
            return $value1['pontuacao'] <=> $value2['pontuacao'];
        }
    }
}

$heap = new CampeonatoBrasileiro();
$heap->insert(['nome'=>'Remo', 'pontuacao'=>22, 'vitorias'=>10]);
$heap->insert(['nome'=>'Cruzeiro', 'pontuacao'=>22, 'vitorias'=>8]);
$heap->insert(['nome'=>'Corinthians', 'pontuacao'=>12, 'vitorias'=>2]);
$heap->insert(['nome'=>'Flamengo', 'pontuacao'=>10, 'vitorias'=>1]);
$heap->insert(['nome'=>'Vasco', 'pontuacao'=>26, 'vitorias'=>7]);
$heap->insert(['nome'=>'Athetico', 'pontuacao'=>22, 'vitorias'=>5]);

echo "O campeão da série C foi: {$heap->top()['nome']}<br/>";

$total = $heap->count();
foreach($heap as $key=>$time){
    echo ($total - $key).": {$time['nome']}<br/>";
}

//============================================================
echo "<br/>";
$minHeap = new \SplMinHeap();
$minHeap->insert(373);
$minHeap->insert(35);
$minHeap->insert(453);
$minHeap->insert(1);
$minHeap->insert(55);
$minHeap->insert(598);
$minHeap->insert(28);

echo "Mínimo: {$minHeap->top()};<br/>";
foreach($minHeap as $key => $value){
    echo $value."<br/>";
}

//============================================================
echo "<br/>";

$maxHeap = new \SplMaxHeap();
$maxHeap->insert(555);
$maxHeap->insert(8982);
$maxHeap->insert(871);
$maxHeap->insert(2714);
$maxHeap->insert(44);
$maxHeap->insert(4555);
$maxHeap->insert(555);

echo "Máximo: {$maxHeap->top()};<br/>";
foreach($maxHeap as $key=>$value){
    echo $value."<br/>";
}

?>
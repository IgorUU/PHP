<?php

class General
{
    public function izbor() {}
};

class Sandra extends General
{
    public function izbor(){
        echo "Ja neću!".PHP_EOL;
    }
};

class Igor extends General
{
    public function izbor()
    {
        echo "Ja hoću!".PHP_EOL;
    }
}

class Nemanja extends General
{
    public function izbor()
    {
    echo "Meni je svejedno!".PHP_EOL;
    }
}

$nesto = [];
$nesto[0] = new Sandra();
$nesto[1] = new Igor();
$nesto[2] = new Nemanja();

foreach($nesto as $poruka){
    $poruka->izbor();
};
function add($a,$b){
    return $a + $b;
}



class Test{

    public $line;

    public function __construct()
    {
        $this->line = 0;
    }

    public function run($a,$b){
        $this->line++;
        echo $this->line . '. ';
        if($a === $b){
            echo 'true'.PHP_EOL;
            return;
        }
        echo 'false'.PHP_EOL;
    }

}

$test = new Test();

$test->run(10,add(5,5));
$test->run(9,add(5,5));

<?php
class Token {
    protected $alphabet;
    protected $length;

    public function __construct($alphabet = ''){
        $alphabet = ('' != $alphabet) ? $alphabet : (
            join('', range('a', 'z')) .
            join('', range('A', 'Z')) .
            join('', range(0, 9))
        );
        $this->setAlphabet($alphabet);
    }

    public function setAlphabet($alphabet){
        $this->alphabet = $alphabet;
        $this->lenght = strlen($alphabet);
    }

    public function generate($length){
        $token = '';
        for ($i = 0; $i < $length; $i++){
            $randomKey = rand(0, 61);
            $token .= $this->alphabet[$randomKey];
        }
        return $token;
    }
}

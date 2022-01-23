<?php

class CreateStack
{
    public $top;
    public $stack = array();

    function __construct()
    {
        $this->top = -1;
    }


    public function isEmpty()
    {
        if ($this->top == -1) {
            echo "Stack is empty. \n";
        } else {
            echo "Stack is not empty. \n";
        }
    }




    public function push($x)
    {
        $this->stack[++$this->top] = $x;
        echo $x . " is added into the stack. \n";
    }


    public function pop()
    {
        if ($this->top < 0) {
            echo "Stack is empty. \n";
        } else {
            $x = $this->stack[$this->top--];
            echo $x . " is deleted from the stack. \n";
            array_pop($this->stack);
        }
    }

    public function print()
    {
        for ($x = count($this->stack) - 1; $x >= 0; $x--) {
            if ($x == count($this->stack) - 1) {
                echo("\nTop\n");
            }
            print("\n" . $this->stack[$x]);
            if ($x == 0) {
                echo("\nBottom\n");

            }
        }
    }
}

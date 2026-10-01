<?php 

class OrderProcessor
{
    public function make(string $input): string
    {
        echo 'Parent received: ', $input, PHP_EOL;
        return $input;
    }
}

class CustomOrderProcessor extends OrderProcessor
{
    public function make(string $input): string
    {
        //step 1
        echo 'Child prepares', PHP_EOL;
        $normalizedInput = trim($input);

        //step 2
        $parentResult = parent::make($normalizedInput);


        echo 'Child finishes', PHP_EOL;
        return '[' . $parentResult . ']';
    }
}

//Execution section
$processor = new CustomOrderProcessor();
echo $processor->make('  Sale  '), PHP_EOL;

/*output should be:
Child prepares
Parent received: Sale
Child finishes
[Sale]*/
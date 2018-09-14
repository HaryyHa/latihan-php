<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

class foo
{
    var $foo;
    var $bar;
    function foo()
    {
        $this->foo = 'foo';
        $this->bar = array ('bar1', 'bar2', 'bar3');
    }
}
$foo = new foo();
$name = 'Indri';

echo <<<EOT
<u> $str</u> <br>
My Name is "<b>$name</b>". I am pringting some <b> $foo->foo</b>.
Now, I am printing some <b>{$foo->bar[1]}</b>.
This should print a capital 'A':\x55
EOT;
?>
//prettier
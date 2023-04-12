<?php
echo "hello";
// outputs "hello"

echo("hello");
// also outputs "hello", because ("hello") is a valid expression

echo(1 + 2) * 3;
// outputs "9"; the parentheses cause 1+2 to be evaluated first, then 3*3
// the echo statement sees the whole expression as one argument

echo "hello", " world";
// outputs "hello world"

echo("hello"), (" world");
// outputs "hello world"; the parentheses are part of each expression

echo("hello", " world");
// Throws a Parse Error because ("hello", " world") is not a valid expression
?>

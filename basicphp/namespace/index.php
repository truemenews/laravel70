<?php namespace Foo\Bar;

include 'file1.php';

const FOO = 2;
function foo() {}
class foo
{
    static function staticmethod() {}
}


/* Unqualified name */
echo '1. Unqualified name </br>';
foo(); // resolves to function Foo\Bar\foo
foo::staticmethod(); // resolves to class Foo\Bar\foo, method staticmethod
echo 'FOO: ';
echo FOO; // resolves to constant Foo\Bar\FOO
echo '</br></br>';

/* Qualified name */
echo '2. Qualified name </br>';
subnamespace\foo(); // resolves to function Foo\Bar\subnamespace\foo
subnamespace\foo::staticmethod(); // resolves to class Foo\Bar\subnamespace\foo,
                                  // method staticmethod
echo 'subnamespace\FOO: ';
echo subnamespace\FOO; // resolves to constant Foo\Bar\subnamespace\FOO
echo '</br></br>';

/* Fully qualified name */
echo '3. Fully qualified name </br>';
\Foo\Bar\foo(); // resolves to function Foo\Bar\foo
\Foo\Bar\foo::staticmethod(); // resolves to class Foo\Bar\foo, method staticmethod
echo '\Foo\Bar\FOO: ';
echo \Foo\Bar\FOO; // resolves to constant Foo\Bar\FOO



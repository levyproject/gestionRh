@php 

use App\test;
$test = Test::whereId(1)->first();
$test2 = Test::whereId(2)->first();

echo $test->test;
echo $test->id;
echo $test2->test;

@endphp



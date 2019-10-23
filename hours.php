function hoursToDeadline(DateTime $deadline)
{
    return ((new DateTime())->diff($deadline)->days * 24) + (new DateTime())->diff($deadline)->h;
}



$test = new Test();

$test->run(24,hoursToDeadline(new DateTime('-1 day')));
$test->run(240,hoursToDeadline(new DateTime('-10 day')));
$test->run(24,hoursToDeadline(new DateTime('+1 day')));
$test->run(240,hoursToDeadline(new DateTime('+10 day')));


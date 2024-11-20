
<?php
class PaidLesson extends Lesson
{
    private $price;

    public function __construct(string $title, string $text, string $homework, float $price)
    {
        parent::__construct($title, $text, $homework);
        $this->price = $price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

$paidLesson = new PaidLesson('Урок о наследовании в PHP', 'Лол, кек, чебурек', 'Ложитесь спать, утро вечера мудренее', 99.90);
var_dump($paidLesson);
$paidLesson->setPrice(55.234);
$paidLesson->setTitle('Новый title!');
$paidLesson->setText('Новый text!');
$paidLesson->setHomework('Новый homework!');
var_dump($paidLesson)
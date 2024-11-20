
<?php
class RussianHuman extends HumanAbstract {
    public function getGreetings(): string {
        return 'Привет';
    }

    public function getMyNameIs(): string {
        return 'Мое имя';
    }
}

class EnglishHuman extends HumanAbstract {
    public function getGreetings(): string {
        return 'Hello';
    }

    public function getMyNameIs(): string {
        return 'My name is';
    }
}

$nikolay = new RussianHuman('Коля');
$Alex = new EnglishHuman('Алекс');
echo $nikolay->introduceYourself() . '<br>';
echo $Alex->introduceYourself() . '<br>';
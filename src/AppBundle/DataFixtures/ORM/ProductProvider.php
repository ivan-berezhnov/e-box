<?php

namespace AppBundle\DataFixtures\ORM;

use Faker\Provider\Base as BaseProvider;
use Faker\Generator;

class ProductProvider extends BaseProvider
{
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
    }

    public function ProductCategory()
    {
        $key = array_rand($this->categories);
        return $this->categories[$key];
    }

    private $categories = [
        "Велотренажеры",
        "Орбитреки",
        "Беговые дорожки",
        "Гребные тренажеры",
        "Степперы",
        "Байк-станции",
        "Гантели, гири, утяжелители",
        "Штанги, грифы, диски",
        "Атлетические пояса",
        "Эспандеры",
        "Перчатки для фитнеса, культуризма",
        "Мячи для фитнеса",
        "Фитнес-джамперы",
        "Аквафитнес",
        "Коврики, маты",
        "Товары для фитнеса, гимнастики",
        "Йога, пилатес",
        "Экипировка для бокса и единоборств",
        "Обувь для тренировок",
        "Тренировочные ножи",
        "Пульсометры",
        "Шагомеры",
        "Спортивные часы",
        "Фитнес-трекеры"
    ];




}
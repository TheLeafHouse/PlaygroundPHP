<?php
enum Fruit {
    case Apple;
    case Orange;
}

function pick_fruit(Fruit $fruit) {}

pick_fruit(Fruit::Apple);

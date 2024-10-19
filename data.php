<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');

$juice = new Drink('JUICE', 600, './image/budou.jpg', 'アイス'); 
$coffee = new Drink('COFFEE', 500, './image/coffee.jpg', 'ホット');
$curry = new Food('CURRY', 900, './image/curry.jpg', 3);
$chicken = new Food('CHICKEN', 1200, './image/chicken.jpg', 1);

$menus = array($juice, $coffee, $curry, $chicken);

$user1 = new User('suzuki', 'male');
$user2 = new User('tanaka', 'female');
$user3 = new User('suzuki', 'female');
$user4 = new User('sato', 'male');

$users = array($user1, $user2, $user3, $user4);

// Reviewオブジェクトを作成し、userIdプロパティをセット
$reviews = array();
array_push($reviews, new Review($juice->getName(), $user1->getId(), 'フレッシュなぶどうジュースです！'));
array_push($reviews, new Review($curry->getName(), $user1->getId(), '具がゴロゴロしていてとてもおいしいです'));
array_push($reviews, new Review($coffee->getName(), $user2->getId(), '香りがいいです'));
array_push($reviews, new Review($chicken->getName(), $user2->getId(), 'ピリ辛で美味しいです'));
array_push($reviews, new Review($juice->getName(), $user3->getId(), 'まあまあなジュース'));
array_push($reviews, new Review($curry->getName(), $user3->getId(), 'コスパのいいカレー'));
array_push($reviews, new Review($coffee->getName(), $user4->getId(), '苦味がちょうどよくて、おすすめです'));
array_push($reviews, new Review($chicken->getName(), $user4->getId(), 'お酒がすすむ'));

?>
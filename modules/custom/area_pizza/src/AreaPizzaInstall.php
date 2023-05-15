<?php
use Drupal\area_pizza\Entity\AreaPizza;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Language\LanguageInterface;

$uuid_service = \Drupal::service('uuid');
$lc = LanguageInterface::LANGCODE_DEFAULT;


$title = "Фестивальный микрорайон";
$uuid = $uuid_service->generate();

$example = new AreaPizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 250),
], 'area_pizza');
$example->save();


$title = "Центральный район";
$uuid = $uuid_service->generate();

$example = new AreaPizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 350),
], 'area_pizza');
$example->save();


$title = "Юбилейный микрорайон";
$uuid = $uuid_service->generate();

$example = new AreaPizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 50),
], 'area_pizza');
$example->save();

$title = "Пашковский микрорайон";
$uuid = $uuid_service->generate();

$example = new AreaPizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 200),
], 'area_pizza');
$example->save();

$title = "Славянский микрорайон";
$uuid = $uuid_service->generate();

$example = new AreaPizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 150),
], 'area_pizza');
$example->save();

$title = "Район 40 лет Победы";
$uuid = $uuid_service->generate();

$example = new AreaPizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 250),
], 'area_pizza');
$example->save();

$title = "Музыкальный микрорайон";
$uuid = $uuid_service->generate();

$example = new AreaPizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 10),
], 'area_pizza');
$example->save();

$title = "Восточно-Кругликовский микрорайон";
$uuid = $uuid_service->generate();

$example = new AreaPizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 220),
], 'area_pizza');
$example->save();

$title = "Микрорайон Черемушки";
$uuid = $uuid_service->generate();

$example = new AreaPizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 350),
], 'area_pizza');
$example->save();

$title = "Комсомольский микрорайон";
$uuid = $uuid_service->generate();

$example = new AreaPizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 350),
], 'area_pizza');
$example->save();
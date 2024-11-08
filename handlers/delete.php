<?php
require_once '../App.php';

$id = $request->get('id');
$product->delete($id);
$request->redirect("../index.php");

<?php

function responseJson($res = array()) {
  header('Content-type: application/json');  
  echo json_encode($res);
}
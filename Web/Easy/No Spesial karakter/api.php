<?php
    
    if(isset($_POST['data'])) {

      $mod = (!isset($_POST['mod']) ? "i" : $_POST['mod']);
      $rep = (!isset($_POST['replacement']) ? "" : $_POST['replacement']);

      $search = "@#$%^&*?<>";

      $pcre = preg_replace('/(['.$search.'])/'.$mod, $rep, $_POST['data']);
      $out = array('txtbox' => $_POST['data'], 'mod' => $mod, 'replacement' => $rep, 'pcre' => $pcre);
      echo json_encode($out);
    }
<?php

  /*
  |--------------------------------------------------------------------------
  | js::simple js builder
  |--------------------------------------------------------------------------
  |
  | build an alert:
  |
  | js::alert('your alert msg');
  |
  | echos js code
  |
  |
  |
  */

  namespace angel;
  class js {
    //a simple js alert function
    public static function alert($content=''){
      echo "<script>alert('",$content,"')</script>";
    }

  }

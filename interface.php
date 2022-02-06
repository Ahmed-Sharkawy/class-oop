<?php

// interface crud
// {

//   public function oprator($oprtion);
//   public function input($data);

// }

// class coon implements crud
// {
//   public $coon;

//   public function input($data)
//   {
//     $this->coon .= "$data ";
//     return $this;
//   }

//   public function oprator($oprtion)
//   {
//     $this->coon .=  "$oprtion ";
//     return $this;
//   }

//   public function execute()
//   {
//     return eval("RETURN $this->coon;");
//   }

// }

// $d = new coon();
// echo "<pre>";
// echo$d->input(10)->oprator('+')->input(5)->execute();
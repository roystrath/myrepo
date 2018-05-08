<!DOCTYPE html>
<html>
<head>
<title> Quiz 1 | <?= $title; ?> </title>
<link href="https://fonts.googleapis.com/css?family=Cormorant" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<style>
/*Ordered list style to add brackets*/
ol {
  counter-reset: list;
}
ol > li {
  list-style: none;
}
ol > li:before {
  content: counter(list, lower-alpha) ") ";
  counter-increment: list;
}
/*Title fonts and underline*/
.uline{
  font-family: 'Cormorant', serif;
  font-size: 24px;
  text-decoration-line: underline;
  text-decoration-style: double;
}
.quotes_galore{
  font-family: 'Dancing Script', cursive;
  font-size: 24px;
  text-shadow: 4px 4px 4px #aaa;
}
.uline-wavy{
  font-family: 'Cormorant', serif;
  font-size: 26px;
  text-decoration-line: overline underline;
  text-decoration-style: wavy;
}
/*Unordered list styles - add dashes*/
ul {
  margin: 0;
}
ul.dashed {
  list-style-type: none;
}
ul.dashed > li {
  text-indent: -5px;
}
ul.dashed > li:before {
  content: "-- ";
  text-indent: -5px;
}
</style>
</head>

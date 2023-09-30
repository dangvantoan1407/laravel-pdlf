<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","Ogani")</title>

    @yield("before_css")
    @include("layouts.header")
    @yield("after_css")
</head>
<body>

@include("layouts.head")
 @include("layouts.nav")
  <main>
  @yield("main")
  </main>


 @include("layouts.footer")

@yield("before.js")
@include("layouts.scripts")
@yield("after_js")
</body>
</html>

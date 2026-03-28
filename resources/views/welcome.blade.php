<h1>welcome page</h1>
<!-- @include('subview.home',['page'=>"this is upadted home page "])
@include('subview.about',['about'=>"this is upadted about page"]) -->



@includeif('subview.home',['page'=>"this is upadted home page "])
@includeif('subview.about',['about'=>"this is upadted about page"])
@includeif('subview.search')
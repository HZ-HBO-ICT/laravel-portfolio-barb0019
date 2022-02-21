<!DOCTYPE html>
<html lang="nl">

<head>
    <link rel="stylesheet" href="{{asset('stylenew.css')}}">
    <style>
        .current_page_item{
            background-color: white;
            color: black;
            padding: 3px;
            border-radius: 10px;
        }
.label{color: white}
    </style>
</head>

<body>
    <nav>
        <a class="{{Request::path()=== '/' ? 'current_page_item' : ''}} navlink" href="/" >Home</a>
        <a class="{{Request::path()=== 'blog' ? 'current_page_item' : ''}} navlink" href="blog" >Blog</a>
        <a class="{{Request::path()=== 'dashboard' ? 'current_page_item' : ''}} navlink" href="dashboard" >Dashboard</a>
        <a class="{{Request::path()=== 'Faq' ? 'current_page_item' : ''}} navlink" href="Faq" >FAQ</a>
        <a class="{{Request::path()=== 'profile' ? 'current_page_item' : ''}} navlink" href="profile" >Profiel</a>
    </nav>
@yield('content')
</body>
</html>

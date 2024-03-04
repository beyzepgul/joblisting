<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Job Listing</title>
</head>
<body>
    <h1>Job Listing</h1>
    <h2>{{$heading}}</h2>
    @unless(count($listings)==0)      
        @foreach($listings as $listing)
            <h3><a href="/listing/{{$listing['id']}}">
                {{$listing['title']}}</h3>
                </a>
            <h4>{{$listing['description']}}</h4>
        @endforeach   
    @else
        <h3>No job listings found</h3>
    @endunless
</body>
</html>
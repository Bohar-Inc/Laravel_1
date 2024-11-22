<h1>{{$heading}}</h1>

@unless(count($listings)==0)

@foreach($listings as $listing)
<h1>{{$listing['title']}}</h1>
    <p>{{$listing['description']}}</p>
@endforeach

@else
    <p>No listings found</p>
@endunless

<div class="card" 
    style="flex: 0 1 {{$imageSize}}; 
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin: 10px;
        background: #fff;">
    
    {{$slot}}
    
    <h2 style="margin: 5px 0;">{{$name}}</h2>
    <p style="margin: 5px 0;">{{$age}} </p>
    <p style="margin: 5px 0;">{{$birth}}</p>
</div>
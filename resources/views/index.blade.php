<div>
    <h2 style="padding: 10px; font-size: 40px; margin: auto">Books</h2>
    <div>
        <a href="/create" style="padding: 10px; font-size: medium; text-decoration-line: none; color: cornflowerblue; margin: auto">CREATE BOOK</a>
    </div>
</div>
<div>
    <ul style="display: flex; flex-direction: column">
        @foreach($books as $book)
            <li style="
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            background: linear-gradient(90deg, rgba(21,145,187,1) 0%, rgba(62,116,125,0.44861694677871145) 50%, rgba(115,115,115,0) 100%);
            margin-bottom: 10px;
            padding: 10px;
            width: 50%;">
                <a href="book/{{$book->id}}" style="text-decoration-line: none; font-size: xx-large; color: black;" >{{$book->name}}</a>
                <span style="font-style: italic; font-size: large">{{$book->author}}</span>
                <span>{{$book->year}}</span>
                <span>Rating: {{$book->rating}}/10</span>
            </li>
        @endforeach
    </ul>
</div>

@extends("layouts.index")

@section("content")

    <h1>Get the data from the database:</h1>

    <form action="">
        <input id="input" type="text" placeholder="What you are searching for?" name="search">
    </form>

    <div id="movies"></div>

    <script>

        const input = document.getElementById("input");

        const loadData = async (search) => {
            const response = await fetch(`http://www.laravel.test/${search}`);
            const data = await response.json();

            data.forEach(element => {
                const item = document.createElement("p");
                item.innerHTML = element.name;
                document.getElementById("movies").appendChild(item);
            })
        }

       
        window.addEventListener("keyup", (event) => {
            
            document.getElementById("movies").innerHTML = "";
            loadData(input.value);
            
        } )
    </script>

@endsection("content")
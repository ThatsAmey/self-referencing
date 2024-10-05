<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>references</title>
</head>
<body style="font-family: sans-serif;">
    <main>
        <div>
            <h1>References</h1>
            <ul>
                @foreach ($references as $reference)
                    @include('references.index-extend', ['reference' => $reference])
                @endforeach
            </ul>
        </div>
    </main>
</body>
</html>
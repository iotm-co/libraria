<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .filter-btn {
            margin-right: 5px;
        }
        .text{
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function filterBooks(letter) {
        const books = document.querySelectorAll('.book');
        books.forEach(book => {
            const title = book.getAttribute('data-title');
            if (letter === '' || title.startsWith(letter)) {
                book.style.display = 'block';
            } else {
                book.style.display = 'none';
            }
        });
    }
    </script>
</body>

</html>

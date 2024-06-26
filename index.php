<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <header>
            <h1>DISCS {{myVar}}</h1>
        </header>

        <main>
            <div class="container ">
                <div class="d-flex flex-wrap">
                    <div class="col-4" v-for="disc in discs">
                        <div class="card" style="width: 18rem;" >
                            <img :src="disc.poster" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{disc.title}}</h5>
                                <p class="card-text">{{disc.author}}</p>
                                <h5 class="card-text">{{disc.year}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <script src="js/script.js"></script>
</body>

</html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test Laravel Kalkulator</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    </head>
    <body style="background-color: #d8d7d7">
        <div class="container text-center">
            <hr/>
        <h1 class="col-md-12">Laravel Kalkulator</h1>

        <br/><br/>

        <div class="row text-center">
            <div class="col-md-12">
                <form class="form-control" action="/calculator" method="POST">
                @csrf
            <div class="col-md-12">
                <label for="first" class="form-label">Angka Pertama:</label>
                <input class="form-control" type="number" name="first" placeholder="Masukan angka pertama!" required>
            </div>
            <div class="col-md-12">
                <label for="second" class="form-label">Angka Kedua:</label>
                <input class="form-control" type="number" name="second" placeholder="Masukan angka kedua!" required>
            </div>
            <div class="col-md-12">
                <label for="operasi" class="form-label">Operasi:</label>
                <select class="form-control" name="operasi" required>
                    <option value="">Memilih Operasi</option>
                    <option value="plus">Penjumlahan ( + )</option>
                    <option value="minus">Pengurangan ( - )</option>
                    <option value="multi">Perkalian ( * )</option>
                    <option value="divin">Pembagian ( / )</option>
                </select>
            </div>
            <div class="col-md-12"><br/>
                <button class="btn btn-primary" type="submit">Hasilkan</button>
            </div>
            </form>
        </div>

        @if(isset($result))
            <hr/><h2>Hasilnya adalah {{ $result }}</h2>
        @endif

        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
    </body>
    </html>

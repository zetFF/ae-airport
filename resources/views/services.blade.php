<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="main-banner" id="home">
        <div class="js-parallax-scene">
            <div class="banner-shape-1 w-100" data-depth="0.30">
                <img src="assets/images/berry.png" alt="">
            </div>
            <div class="banner-shape-2 w-100" data-depth="0.25">
                <img src="assets/images/leaf.png" alt="">
            </div>
        </div>
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-text">
                            <h1 class="h1-title">
                                Welcome to Alysa
                                <span>kitchen</span>
                                Bakery.
                            </h1>
                            <p>This is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eius
                                vel tempore consectetur nesciunt? Nam eius tenetur recusandae optio aperiam.</p>
                            <div class="banner-btn mt-4">
                                <a href="#menu" class="sec-btn">Check our Menu</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-img-wp">
                            <div class="banner-img" style="background-image: url(assets/images/main-b.jpg);">
                            </div>
                        </div>
                        <div class="banner-img-text mt-4 m-auto">
                            <h5 class="h5-title">Sushi</h5>
                            <p>this is Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Transaksi Section -->
    <section class="transaction-list py-5">
        <div class="container">
            <h2 class="text-center mb-4">Transaction List</h2>
            <div class="row">
                @foreach($transactions as $transaction)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>{{ $transaction->code }}</h5>
                            </div>
                            <div class="card-body">
                                <p><strong>Flight:</strong> {{ $transaction->flight->name ?? 'N/A' }}</p>
                                <p><strong>Class:</strong> {{ $transaction->class->name ?? 'N/A' }}</p>
                                <p><strong>Passenger Count:</strong> {{ $transaction->number_of_passengers }}</p>
                                <p><strong>Email:</strong> {{ $transaction->email }}</p>
                                <p><strong>Phone:</strong> {{ $transaction->phone }}</p>
                                <p><strong>Status:</strong> {{ $transaction->payment_status }}</p>
                                <p><strong>Grand Total:</strong> ${{ number_format($transaction->grandtotal, 2) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</body>
</html>

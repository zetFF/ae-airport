<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold text-center mb-6">Promo Codes</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($promoCodes as $promoCode)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $promoCode->code }}</h2>
                    <p class="text-gray-600">Discount Type: {{ $promoCode->discount_type }}</p>
                    <p class="text-gray-600">Discount: {{ $promoCode->discount }}</p>
                    <p class="text-gray-600">
                        Valid Until: {{ \Carbon\Carbon::parse($promoCode->valid_until)->format('d M Y') }}
                    </p>
                    <p class="text-sm {{ $promoCode->is_used ? 'text-red-500' : 'text-green-500' }}">
                        {{ $promoCode->is_used ? 'Already Used' : 'Available' }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>

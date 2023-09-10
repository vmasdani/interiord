<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<body>
    <div style="background-color:darkblue">
        <div class="container">
            <h4 class="text-light">Besi</h4>
            <div>
                @for ($i = 0; $i < count($data['products']); $i++)
                    <div class="d-flex m-3 bg-light border border-dark">
                        <div class="py-4 px-2" style="background-color:grey">
                            <img style="max-width: 200px" src="/api/products/{{ $data['products'][$i]?->id }}/photo" />
                        </div>
                        <div class="px-2 flex-grow-1">
                            <strong style="color: orange">{{ $data['products'][$i]?->name }}</strong>
                            <div class="w-100 d-flex flex-wrap justify-content-around">
                                <div class="flex-grow-1 border-right-1 border">
                                    <div><strong>Size</strong></div>
                                    <div>
                                        <hr class="border border-dark" />
                                    </div>
                                    <div>T.1: {{ $data['products'][$i]?->t1 }}</div>
                                    <div>T.2/3: {{ $data['products'][$i]?->t23 }}</div>
                                    <div>1 Set:  {{ $data['products'][$i]?->one_set }}</div>

                                </div>
                                <div class="flex-grow-1 border-right-1 border">
                                    <div><strong>Material</strong></div>
                                    <div>
                                        <hr class="border border-dark" />
                                    </div>
                                    <div>Top: {{ $data['products'][$i]?->top }}</div>
                                    <div>Meja: {{ $data['products'][$i]?->meja }}</div>
                                    <div>Fin:  {{ $data['products'][$i]?->fin }}</div>

                                </div>
                                <div class="flex-grow-1 border-right-1 border">
                                    <div><strong>Price</strong></div>
                                    <div>
                                        <hr class="border border-dark" />
                                    </div>
                                    <div>Price:  {{ $data['products'][$i]?->price }}</div>
                                    {{-- <div>Price:</div> --}}

                                </div>
                            </div>


                        </div>

                    </div>
                @endfor
            </div>
        </div>
    </div>

    @include('bootstrapjs')
</body>

</html>

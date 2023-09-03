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
                        <div class="py-4 px-2" style="background-color:grey"><strong>Photo here</strong></div>
                        <div class="px-2 flex-grow-1">
                            <strong style="color: orange">{{ $data['products'][$i]?->name }}</strong>
                            <div class="w-100 d-flex  justify-content-around">
                                <div class="flex-grow-1">
                                    <div><strong>Size</strong></div>
                                    <div>
                                        <hr class="border border-dark" />
                                    </div>
                                    <div>T.1:</div>
                                    <div>T.2/3:</div>
                                    <div>1 Set: 1 Item</div>

                                </div>
                                <div class="flex-grow-1">
                                    <div><strong>Material</strong></div>
                                    <div>
                                        <hr class="border border-dark" />
                                    </div>
                                    <div>Top:</div>
                                    <div>Meja:</div>
                                    <div>Fin:</div>
                                    
                                </div>
                                <div class="flex-grow-1">
                                    <div><strong>Price</strong></div>
                                    <div>
                                        <hr class="border border-dark" />
                                    </div>
                                    <div>Price:</div>
                                    <div>Price:</div>
                                    
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

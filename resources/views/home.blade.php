<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<body>
    <a href="{{ $data['adminsetting']['whatsapp_number'] }}" target="_blank">

        <div style="position: fixed; z-index: 2; bottom:0; right: 0"
            class="border border-secondary shadow shadow-md rounded rounded-lg bg-light d-flex justify-content-center align-items-center">
            <div class="bg-success text-light m-2">
                <img style="max-width: 25px" src="wa.png" />
            </div>
            <div class="px-3"><strong>Hi, ada yang bisa kami bantu?</strong></div>
        </div>
    </a>

    <div class="p-3" style="background-color:#22394a">
        <div>
            <div style="background-color:#8d8884"
                class="d-flex flex-wrap py-5 justify-content-around align-items-center">
                <div class="d-flex justify-content-center flex-grow-1">
                    <div class="p-4 rounded rounded-lg" style="background-color:#22394a">
                        <h4 style="color:orange">Welcome</h4>
                        <div style="color:white"><strong>Transforming Spaces,</strong></div>
                        <div style="color:white"><strong>Enhancing Lives</strong></div>
                    </div>
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1 ">
                    <h4 class="text-light">Carousel here</h4>
                    <div class="d-flex w-100 justify-content-end">

                    </div>
                </div>
            </div>

            <div class="my-3 p-3" style="background-color: #8d8884; color: khaki">
                <h4>Hot Projects </h4>
            </div>

            <div class="d-flex align-items-center flex-wrap">
                <div class="flex-grow-1">
                    <div style="background-color: #d3d7db" class="bg-light rounded rounded-md p-3"><strong>Why
                            CENTRUME_ind?</strong></div>
                </div>
                <div class="p-3 d-flex align-items-center flex-wrap flex-grow-1">
                    <div class="why-centrume mx-1 text-light flex-grow-1">
                        <div
                            class="d-flex flex-column align-items-center justify-content-center p-2 border border-light border-4 rounded my-2">
                            <div>
                                <strong>Professional Team</strong>
                            </div>
                            <div>
                                <ul>
                                    <li>Berpengalaman lebih dari 1 tahun</li>
                                    <li>Memiliki tim yang berpengelaman di bidangnya</li>
                                    <li>Konsultasi dan survey gratis</li>

                                </ul>
                            </div>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center justify-content-center p-2 border border-light border-4 rounded my-2">
                            <div> <strong>We Have Our Own Workshop</strong>
                            </div>
                            <div>
                                <div>
                                    <ul>
                                        <li>Memiliki workshop sendiri</li>
                                        <li>Kualitas bahan terjamin</li>
                                        <li>Pengerjaan menggunakan mesin sehingga lebih praktis</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="why-centrume mx-1 text-light flex-grow-1">
                        <div
                            class="d-flex flex-column align-items-center justify-content-center p-2 border border-light border-4 rounded">
                            <div>
                                <strong>Project Warranty</strong>
                            </div>
                            <div>
                                <ul>
                                    <li>Harga sudah termasuk biaya pemasangan</li>
                                    <li>Include print dan backsplash 5cm</li>
                                    <li>Pengiriman Jabodetabek</li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('bootstrapjs')
</body>

</html>


<style>
    @media only screen and (min-width: 768px) {
        .why-centrume {
            width: 20vw !important;
        }
    }
</style>
